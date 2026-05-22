/* Math solvers — pure functions, all return { answers, steps, error?, note? } */

const SciMath = {
  /* Линейное уравнение: ax + b = 0 -> x = -b/a */
  linear(a, b) {
    if (!Number.isFinite(a) || !Number.isFinite(b)) return { error: 'Введите числовые значения a и b.' };
    if (a === 0) {
      return b === 0
        ? { answers: ['x — любое число'], steps: ['При a=0 и b=0 уравнение 0=0 верно при любом x.'] }
        : { error: 'При a=0 и b≠0 уравнение не имеет решений.' };
    }
    const x = -b / a;
    return {
      answers: [{ label: 'x', value: Sci.fmt(x) }],
      steps: [
        `Уравнение: ${a}·x + ${b} = 0`,
        `Переносим свободный член: ${a}·x = ${-b}`,
        `Делим обе части на ${a}: x = ${-b} / ${a}`,
        `x = ${Sci.fmt(x)}`,
      ],
    };
  },

  /* Квадратное уравнение: ax² + bx + c = 0 */
  quadratic(a, b, c) {
    if ([a, b, c].some(v => !Number.isFinite(v))) return { error: 'Введите числовые значения a, b и c.' };
    if (a === 0) return { error: 'При a=0 это не квадратное уравнение. Используйте калькулятор линейных.' };
    const d = b * b - 4 * a * c;
    const steps = [
      `Дискриминант: D = b² − 4ac = ${b}² − 4·${a}·${c} = ${d}`,
    ];
    if (d > 0) {
      const sqrtD = Math.sqrt(d);
      const x1 = (-b + sqrtD) / (2 * a);
      const x2 = (-b - sqrtD) / (2 * a);
      steps.push(
        `D > 0 — два различных корня`,
        `x₁ = (−b + √D) / (2a) = (${-b} + ${Sci.fmt(sqrtD)}) / ${2 * a} = ${Sci.fmt(x1)}`,
        `x₂ = (−b − √D) / (2a) = (${-b} − ${Sci.fmt(sqrtD)}) / ${2 * a} = ${Sci.fmt(x2)}`,
      );
      return { answers: [{ label: 'x₁', value: Sci.fmt(x1) }, { label: 'x₂', value: Sci.fmt(x2) }], steps };
    }
    if (d === 0) {
      const x = -b / (2 * a);
      steps.push(`D = 0 — один корень`, `x = −b / (2a) = ${-b} / ${2 * a} = ${Sci.fmt(x)}`);
      return { answers: [{ label: 'x', value: Sci.fmt(x) }], steps };
    }
    steps.push(`D < 0 — действительных корней нет`);
    return { error: 'Квадратное уравнение не имеет действительных решений (D < 0).', steps };
  },

  /* Система 2x2 методом Крамера:
     a1 x + b1 y = c1
     a2 x + b2 y = c2  */
  system2(a1, b1, c1, a2, b2, c2) {
    const v = [a1, b1, c1, a2, b2, c2];
    if (v.some(x => !Number.isFinite(x))) return { error: 'Заполните все коэффициенты.' };
    const det = a1 * b2 - a2 * b1;
    const detX = c1 * b2 - c2 * b1;
    const detY = a1 * c2 - a2 * c1;
    const steps = [
      `Главный определитель: Δ = a₁b₂ − a₂b₁ = ${a1}·${b2} − ${a2}·${b1} = ${det}`,
      `Δx = c₁b₂ − c₂b₁ = ${detX}`,
      `Δy = a₁c₂ − a₂c₁ = ${detY}`,
    ];
    if (det === 0) {
      const msg = (detX === 0 && detY === 0)
        ? 'Δ = 0 и Δx = Δy = 0 — система имеет бесконечно много решений.'
        : 'Δ = 0, но Δx или Δy ≠ 0 — система несовместна (решений нет).';
      return { error: msg, steps };
    }
    const x = detX / det;
    const y = detY / det;
    steps.push(`x = Δx/Δ = ${Sci.fmt(x)}`, `y = Δy/Δ = ${Sci.fmt(y)}`);
    return { answers: [{ label: 'x', value: Sci.fmt(x) }, { label: 'y', value: Sci.fmt(y) }], steps };
  },

  /* Система 3x3 методом Крамера */
  system3(a1, b1, c1, d1, a2, b2, c2, d2, a3, b3, c3, d3) {
    const v = [a1, b1, c1, d1, a2, b2, c2, d2, a3, b3, c3, d3];
    if (v.some(x => !Number.isFinite(x))) return { error: 'Заполните все коэффициенты.' };
    const det3 = (m11, m12, m13, m21, m22, m23, m31, m32, m33) =>
      m11 * (m22 * m33 - m23 * m32)
    - m12 * (m21 * m33 - m23 * m31)
    + m13 * (m21 * m32 - m22 * m31);

    const D  = det3(a1, b1, c1, a2, b2, c2, a3, b3, c3);
    const Dx = det3(d1, b1, c1, d2, b2, c2, d3, b3, c3);
    const Dy = det3(a1, d1, c1, a2, d2, c2, a3, d3, c3);
    const Dz = det3(a1, b1, d1, a2, b2, d2, a3, b3, d3);
    const steps = [
      `Главный определитель Δ = ${Sci.fmt(D)}`,
      `Δx = ${Sci.fmt(Dx)}, Δy = ${Sci.fmt(Dy)}, Δz = ${Sci.fmt(Dz)}`,
    ];
    if (D === 0) {
      const msg = (Dx === 0 && Dy === 0 && Dz === 0)
        ? 'Δ = 0 и Δx = Δy = Δz = 0 — система имеет бесконечно много решений.'
        : 'Δ = 0, но один из Δx, Δy, Δz ≠ 0 — система несовместна.';
      return { error: msg, steps };
    }
    const x = Dx / D, y = Dy / D, z = Dz / D;
    steps.push(`x = Δx/Δ = ${Sci.fmt(x)}`, `y = Δy/Δ = ${Sci.fmt(y)}`, `z = Δz/Δ = ${Sci.fmt(z)}`);
    return {
      answers: [
        { label: 'x', value: Sci.fmt(x) },
        { label: 'y', value: Sci.fmt(y) },
        { label: 'z', value: Sci.fmt(z) },
      ],
      steps,
    };
  },

  /* Арифметическая прогрессия: n-й член */
  apTerm(a1, a2, n) {
    if ([a1, a2].some(x => !Number.isFinite(x)) || !Number.isInteger(n) || n < 1)
      return { error: 'Введите a₁, a₂ и натуральное n.' };
    const d = a2 - a1;
    const an = a1 + d * (n - 1);
    const type = d > 0 ? { name: 'Возрастающая', cls: 'badge-up' }
                : d < 0 ? { name: 'Убывающая', cls: 'badge-down' }
                : { name: 'Стационарная', cls: 'badge-flat' };
    return {
      answers: [{ label: `a${sub(n)}`, value: Sci.fmt(an) }],
      note: `Тип прогрессии: <span class="badge ${type.cls}">${type.name}</span>, разность d = ${Sci.fmt(d)}`,
      steps: [
        `Разность: d = a₂ − a₁ = ${a2} − ${a1} = ${Sci.fmt(d)}`,
        `Формула: aₙ = a₁ + d·(n − 1)`,
        `aₙ = ${a1} + ${Sci.fmt(d)}·(${n} − 1) = ${Sci.fmt(an)}`,
      ],
    };
  },

  /* Арифметическая прогрессия: сумма первых n членов */
  apSum(a1, a2, n) {
    if ([a1, a2].some(x => !Number.isFinite(x)) || !Number.isInteger(n) || n < 1)
      return { error: 'Введите a₁, a₂ и натуральное n.' };
    const d = a2 - a1;
    const an = a1 + d * (n - 1);
    const sum = ((a1 + an) * n) / 2;
    return {
      answers: [{ label: `S${sub(n)}`, value: Sci.fmt(sum) }],
      note: `n-й член: a${sub(n)} = ${Sci.fmt(an)}, d = ${Sci.fmt(d)}`,
      steps: [
        `d = a₂ − a₁ = ${Sci.fmt(d)}`,
        `aₙ = a₁ + d·(n − 1) = ${Sci.fmt(an)}`,
        `Sₙ = (a₁ + aₙ)·n / 2 = (${a1} + ${Sci.fmt(an)})·${n} / 2 = ${Sci.fmt(sum)}`,
      ],
    };
  },

  /* Геометрическая прогрессия: n-й член */
  gpTerm(b1, b2, n) {
    if ([b1, b2].some(x => !Number.isFinite(x)) || !Number.isInteger(n) || n < 1)
      return { error: 'Введите b₁, b₂ и натуральное n.' };
    if (b1 === 0) return { error: 'b₁ не может быть 0.' };
    const q = b2 / b1;
    const bn = b1 * Math.pow(q, n - 1);
    const type = gpType(q);
    return {
      answers: [{ label: `b${sub(n)}`, value: Sci.fmt(bn) }],
      note: `Тип прогрессии: <span class="badge ${type.cls}">${type.name}</span>, знаменатель q = ${Sci.fmt(q)}`,
      steps: [
        `q = b₂ / b₁ = ${b2} / ${b1} = ${Sci.fmt(q)}`,
        `Формула: bₙ = b₁ · qⁿ⁻¹`,
        `bₙ = ${b1} · ${Sci.fmt(q)}^${n - 1} = ${Sci.fmt(bn)}`,
      ],
    };
  },

  /* Геометрическая прогрессия: сумма первых n членов */
  gpSum(b1, b2, n) {
    if ([b1, b2].some(x => !Number.isFinite(x)) || !Number.isInteger(n) || n < 1)
      return { error: 'Введите b₁, b₂ и натуральное n.' };
    if (b1 === 0) return { error: 'b₁ не может быть 0.' };
    const q = b2 / b1;
    const sum = q === 1 ? b1 * n : b1 * (Math.pow(q, n) - 1) / (q - 1);
    const type = gpType(q);
    return {
      answers: [{ label: `S${sub(n)}`, value: Sci.fmt(sum) }],
      note: `Тип прогрессии: <span class="badge ${type.cls}">${type.name}</span>, q = ${Sci.fmt(q)}`,
      steps: q === 1
        ? [`q = 1, поэтому Sₙ = n · b₁ = ${n} · ${b1} = ${Sci.fmt(sum)}`]
        : [
            `q = b₂ / b₁ = ${Sci.fmt(q)}`,
            `Sₙ = b₁ · (qⁿ − 1) / (q − 1)`,
            `Sₙ = ${b1} · (${Sci.fmt(q)}^${n} − 1) / (${Sci.fmt(q)} − 1) = ${Sci.fmt(sum)}`,
          ],
    };
  },

  /* Геометрическая прогрессия: произведение первых n членов */
  gpProduct(b1, b2, n) {
    if ([b1, b2].some(x => !Number.isFinite(x)) || !Number.isInteger(n) || n < 1)
      return { error: 'Введите b₁, b₂ и натуральное n.' };
    if (b1 === 0) return { error: 'b₁ не может быть 0.' };
    const q = b2 / b1;
    const bn = b1 * Math.pow(q, n - 1);
    const product = Math.pow(b1 * bn, n / 2);
    const type = gpType(q);
    return {
      answers: [{ label: `P${sub(n)}`, value: Sci.fmt(product) }],
      note: `Тип прогрессии: <span class="badge ${type.cls}">${type.name}</span>, q = ${Sci.fmt(q)}`,
      steps: [
        `q = ${Sci.fmt(q)},  bₙ = ${Sci.fmt(bn)}`,
        `Pₙ = (b₁ · bₙ)^(n/2) = (${b1} · ${Sci.fmt(bn)})^${n / 2} = ${Sci.fmt(product)}`,
      ],
    };
  },

  /* НОД — алгоритм Евклида */
  gcd(a, b) {
    if (!Number.isInteger(a) || !Number.isInteger(b)) return { error: 'Введите целые числа.' };
    if (a === 0 && b === 0) return { error: 'НОД(0, 0) не определён.' };
    const steps = [`Применяем алгоритм Евклида к (${a}, ${b}):`];
    let x = Math.abs(a), y = Math.abs(b);
    while (y !== 0) {
      steps.push(`${x} mod ${y} = ${x % y}`);
      [x, y] = [y, x % y];
    }
    return { answers: [{ label: 'НОД', value: x }], steps };
  },

  /* НОК */
  lcm(a, b) {
    if (!Number.isInteger(a) || !Number.isInteger(b)) return { error: 'Введите целые числа.' };
    if (a === 0 || b === 0) return { answers: [{ label: 'НОК', value: 0 }] };
    let x = Math.abs(a), y = Math.abs(b);
    const ax = x, ay = y;
    while (y !== 0) [x, y] = [y, x % y];
    const lcm = (ax * ay) / x;
    return {
      answers: [{ label: 'НОК', value: lcm }],
      steps: [
        `НОД(${a}, ${b}) = ${x}`,
        `НОК = |a · b| / НОД = ${Math.abs(a * b)} / ${x} = ${lcm}`,
      ],
    };
  },

  /* Разложение квадратного трёхчлена ax² + bx + c на множители */
  factor(a, b, c) {
    if ([a, b, c].some(x => !Number.isFinite(x))) return { error: 'Заполните a, b, c.' };
    if (a === 0) return { error: 'При a=0 это не квадратный трёхчлен.' };
    const d = b * b - 4 * a * c;
    if (d < 0) return { error: 'D < 0 — над ℝ разложить нельзя.', steps: [`D = ${d}`] };
    const sqrtD = Math.sqrt(d);
    const x1 = (-b + sqrtD) / (2 * a);
    const x2 = (-b - sqrtD) / (2 * a);
    const asign = a === 1 ? '' : (a === -1 ? '−' : `${a}·`);
    const fmtFactor = (x) => x >= 0 ? `(x − ${Sci.fmt(x)})` : `(x + ${Sci.fmt(-x)})`;
    const expr = `${asign}${fmtFactor(x1)}${fmtFactor(x2)}`;
    return {
      answers: [expr],
      steps: [
        `D = b² − 4ac = ${d}`,
        `x₁ = ${Sci.fmt(x1)}, x₂ = ${Sci.fmt(x2)}`,
        `${a}x² + ${b}x + ${c} = ${expr}`,
      ],
    };
  },

  /* Среднее арифметическое */
  mean(values) {
    if (!values.length) return { error: 'Список пуст.' };
    const sum = values.reduce((s, v) => s + v, 0);
    const mean = sum / values.length;
    return {
      answers: [{ label: 'Среднее', value: Sci.fmt(mean) }],
      steps: [`Сумма = ${Sci.fmt(sum)}`, `n = ${values.length}`, `Среднее = ${Sci.fmt(sum)} / ${values.length} = ${Sci.fmt(mean)}`],
    };
  },
};

function sub(n) {
  return String(n).replace(/0/g, '₀').replace(/1/g, '₁').replace(/2/g, '₂').replace(/3/g, '₃')
    .replace(/4/g, '₄').replace(/5/g, '₅').replace(/6/g, '₆').replace(/7/g, '₇').replace(/8/g, '₈').replace(/9/g, '₉');
}

function gpType(q) {
  if (q === 1)        return { name: 'Стационарная', cls: 'badge-flat' };
  if (q < 0)          return { name: 'Знакочередующаяся', cls: 'badge-alt' };
  if (q > 0 && q < 1) return { name: 'Убывающая', cls: 'badge-down' };
  return { name: 'Возрастающая', cls: 'badge-up' };
}

window.SciMath = SciMath;

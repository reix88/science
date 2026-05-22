/* Geometry solvers */

const SciGeo = {
  /* Прямоугольник */
  rectangle(a, b) {
    if (!ok(a, b) || a <= 0 || b <= 0) return { error: 'Стороны должны быть положительны.' };
    const area = a * b;
    const peri = 2 * (a + b);
    const diag = Math.sqrt(a * a + b * b);
    return {
      answers: [
        { label: 'S (площадь)',   value: Sci.fmt(area) },
        { label: 'P (периметр)',  value: Sci.fmt(peri) },
        { label: 'd (диагональ)', value: Sci.fmt(diag) },
      ],
      steps: [
        `S = a · b = ${a} · ${b} = ${Sci.fmt(area)}`,
        `P = 2·(a + b) = 2·(${a} + ${b}) = ${Sci.fmt(peri)}`,
        `d = √(a² + b²) = √(${a * a} + ${b * b}) = ${Sci.fmt(diag)}`,
      ],
    };
  },

  /* Треугольник по 3 сторонам (формула Герона) */
  triangle(a, b, c) {
    if (!ok(a, b, c) || a <= 0 || b <= 0 || c <= 0) return { error: 'Стороны должны быть положительны.' };
    if (a + b <= c || a + c <= b || b + c <= a)
      return { error: 'Неравенство треугольника не выполняется: сумма двух сторон должна быть больше третьей.' };
    const p = (a + b + c) / 2;
    const area = Math.sqrt(p * (p - a) * (p - b) * (p - c));
    const peri = a + b + c;
    return {
      answers: [
        { label: 'S (площадь)',  value: Sci.fmt(area) },
        { label: 'P (периметр)', value: Sci.fmt(peri) },
        { label: 'p (полупериметр)', value: Sci.fmt(p) },
      ],
      steps: [
        `p = (a + b + c)/2 = ${Sci.fmt(p)}`,
        `S = √(p(p−a)(p−b)(p−c))`,
        `S = √(${Sci.fmt(p)}·${Sci.fmt(p - a)}·${Sci.fmt(p - b)}·${Sci.fmt(p - c)}) = ${Sci.fmt(area)}`,
      ],
    };
  },

  /* Круг по радиусу */
  circle(r) {
    if (!ok(r) || r <= 0) return { error: 'Радиус должен быть положителен.' };
    const area = Math.PI * r * r;
    const circ = 2 * Math.PI * r;
    const diam = 2 * r;
    return {
      answers: [
        { label: 'S (площадь)',   value: Sci.fmt(area) },
        { label: 'C (длина)',     value: Sci.fmt(circ) },
        { label: 'd (диаметр)',   value: Sci.fmt(diam) },
      ],
      steps: [
        `S = π·r² = π·${r}² = ${Sci.fmt(area)}`,
        `C = 2π·r = 2π·${r} = ${Sci.fmt(circ)}`,
        `d = 2·r = ${diam}`,
      ],
    };
  },

  /* Трапеция: a, b — основания, h — высота */
  trapezoid(a, b, h) {
    if (!ok(a, b, h) || a <= 0 || b <= 0 || h <= 0) return { error: 'Все стороны и высота должны быть положительны.' };
    const area = ((a + b) / 2) * h;
    return {
      answers: [{ label: 'S (площадь)', value: Sci.fmt(area) }],
      steps: [
        `S = (a + b)/2 · h`,
        `S = (${a} + ${b})/2 · ${h} = ${Sci.fmt(area)}`,
      ],
    };
  },

  /* Параллелограмм */
  parallelogram(a, h) {
    if (!ok(a, h) || a <= 0 || h <= 0) return { error: 'Сторона и высота должны быть положительны.' };
    const area = a * h;
    return {
      answers: [{ label: 'S (площадь)', value: Sci.fmt(area) }],
      steps: [`S = a · h = ${a} · ${h} = ${Sci.fmt(area)}`],
    };
  },

  /* Куб */
  cube(a) {
    if (!ok(a) || a <= 0) return { error: 'Ребро должно быть положительно.' };
    const volume = a ** 3;
    const surface = 6 * a * a;
    const diag = a * Math.sqrt(3);
    return {
      answers: [
        { label: 'V (объём)',         value: Sci.fmt(volume) },
        { label: 'S (полн. площадь)', value: Sci.fmt(surface) },
        { label: 'd (диагональ)',     value: Sci.fmt(diag) },
      ],
      steps: [
        `V = a³ = ${a}³ = ${Sci.fmt(volume)}`,
        `S = 6·a² = 6·${a}² = ${Sci.fmt(surface)}`,
        `d = a√3 = ${a}·√3 = ${Sci.fmt(diag)}`,
      ],
    };
  },

  /* Прямоугольный параллелепипед */
  cuboid(a, b, c) {
    if (!ok(a, b, c) || a <= 0 || b <= 0 || c <= 0) return { error: 'Все рёбра должны быть положительны.' };
    const volume = a * b * c;
    const surface = 2 * (a * b + a * c + b * c);
    const diag = Math.sqrt(a * a + b * b + c * c);
    return {
      answers: [
        { label: 'V',                 value: Sci.fmt(volume) },
        { label: 'S (полн. площадь)', value: Sci.fmt(surface) },
        { label: 'd (диагональ)',     value: Sci.fmt(diag) },
      ],
      steps: [
        `V = a·b·c = ${a}·${b}·${c} = ${Sci.fmt(volume)}`,
        `S = 2(ab + ac + bc) = ${Sci.fmt(surface)}`,
        `d = √(a²+b²+c²) = ${Sci.fmt(diag)}`,
      ],
    };
  },

  /* Сфера */
  sphere(r) {
    if (!ok(r) || r <= 0) return { error: 'Радиус должен быть положителен.' };
    const volume = (4 / 3) * Math.PI * r ** 3;
    const surface = 4 * Math.PI * r * r;
    return {
      answers: [
        { label: 'V',                value: Sci.fmt(volume) },
        { label: 'S (площ. пов-ти)', value: Sci.fmt(surface) },
      ],
      steps: [
        `V = (4/3)·π·r³ = (4/3)·π·${r}³ = ${Sci.fmt(volume)}`,
        `S = 4π·r² = 4π·${r}² = ${Sci.fmt(surface)}`,
      ],
    };
  },

  /* Цилиндр */
  cylinder(r, h) {
    if (!ok(r, h) || r <= 0 || h <= 0) return { error: 'Радиус и высота должны быть положительны.' };
    const volume = Math.PI * r * r * h;
    const lateral = 2 * Math.PI * r * h;
    const surface = 2 * Math.PI * r * (r + h);
    return {
      answers: [
        { label: 'V',                  value: Sci.fmt(volume) },
        { label: 'Sб (бок. поверх.)',  value: Sci.fmt(lateral) },
        { label: 'S (полн. площадь)',  value: Sci.fmt(surface) },
      ],
      steps: [
        `V = π·r²·h = π·${r}²·${h} = ${Sci.fmt(volume)}`,
        `Sб = 2π·r·h = ${Sci.fmt(lateral)}`,
        `S = 2π·r·(r + h) = ${Sci.fmt(surface)}`,
      ],
    };
  },

  /* Конус */
  cone(r, h) {
    if (!ok(r, h) || r <= 0 || h <= 0) return { error: 'Радиус и высота должны быть положительны.' };
    const l = Math.sqrt(r * r + h * h);
    const volume = (1 / 3) * Math.PI * r * r * h;
    const lateral = Math.PI * r * l;
    const surface = Math.PI * r * (r + l);
    return {
      answers: [
        { label: 'V',                 value: Sci.fmt(volume) },
        { label: 'l (образующая)',    value: Sci.fmt(l) },
        { label: 'Sб (бок. поверх.)', value: Sci.fmt(lateral) },
        { label: 'S (полн. площадь)', value: Sci.fmt(surface) },
      ],
      steps: [
        `l = √(r² + h²) = √(${r * r} + ${h * h}) = ${Sci.fmt(l)}`,
        `V = (1/3)·π·r²·h = ${Sci.fmt(volume)}`,
        `Sб = π·r·l = ${Sci.fmt(lateral)}`,
      ],
    };
  },
};

function ok(...args) { return args.every(v => Number.isFinite(v)); }

window.SciGeo = SciGeo;

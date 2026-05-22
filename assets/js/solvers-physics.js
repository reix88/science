/* Physics solvers (кинематика, динамика, энергия) */

const SciPhys = {
  /* Равномерное движение: v = s / t  (любые две величины → третья) */
  uniform({ s, v, t }) {
    const known = [s, v, t].filter(Number.isFinite).length;
    if (known !== 2) return { error: 'Заполните ровно два поля из трёх.' };
    if (Number.isFinite(s) && Number.isFinite(v)) {
      if (v === 0) return { error: 'Скорость не может быть 0.' };
      const tt = s / v;
      return { answers: [{ label: 't (с)', value: Sci.fmt(tt) }], steps: [`t = s / v = ${s} / ${v} = ${Sci.fmt(tt)}`] };
    }
    if (Number.isFinite(s) && Number.isFinite(t)) {
      if (t === 0) return { error: 'Время не может быть 0.' };
      const vv = s / t;
      return { answers: [{ label: 'v (м/с)', value: Sci.fmt(vv) }], steps: [`v = s / t = ${s} / ${t} = ${Sci.fmt(vv)}`] };
    }
    const ss = v * t;
    return { answers: [{ label: 's (м)', value: Sci.fmt(ss) }], steps: [`s = v · t = ${v} · ${t} = ${Sci.fmt(ss)}`] };
  },

  /* Равноускоренное: v = v0 + a·t,  s = v0·t + a·t²/2 */
  accelerated(v0, a, t) {
    if (![v0, a, t].every(Number.isFinite)) return { error: 'Заполните v₀, a и t.' };
    const v = v0 + a * t;
    const s = v0 * t + (a * t * t) / 2;
    return {
      answers: [
        { label: 'v (м/с)', value: Sci.fmt(v) },
        { label: 's (м)',   value: Sci.fmt(s) },
      ],
      steps: [
        `v = v₀ + a·t = ${v0} + ${a}·${t} = ${Sci.fmt(v)}`,
        `s = v₀·t + a·t²/2 = ${v0}·${t} + ${a}·${t}²/2 = ${Sci.fmt(s)}`,
      ],
    };
  },

  /* Свободное падение: h = g·t²/2, v = g·t (g = 9.81) */
  freeFall(t) {
    if (!Number.isFinite(t) || t < 0) return { error: 'Время должно быть ≥ 0.' };
    const g = 9.81;
    const h = (g * t * t) / 2;
    const v = g * t;
    return {
      answers: [
        { label: 'h (м)',   value: Sci.fmt(h) },
        { label: 'v (м/с)', value: Sci.fmt(v) },
      ],
      steps: [
        `g = 9.81 м/с²`,
        `h = g·t²/2 = 9.81·${t}²/2 = ${Sci.fmt(h)}`,
        `v = g·t = 9.81·${t} = ${Sci.fmt(v)}`,
      ],
    };
  },

  /* Второй закон Ньютона: F = m·a (две величины → третья) */
  newton({ F, m, a }) {
    const known = [F, m, a].filter(Number.isFinite).length;
    if (known !== 2) return { error: 'Заполните ровно два поля из трёх.' };
    if (Number.isFinite(m) && Number.isFinite(a)) {
      const FF = m * a;
      return { answers: [{ label: 'F (Н)', value: Sci.fmt(FF) }], steps: [`F = m · a = ${m} · ${a} = ${Sci.fmt(FF)}`] };
    }
    if (Number.isFinite(F) && Number.isFinite(m)) {
      if (m === 0) return { error: 'Масса не может быть 0.' };
      const aa = F / m;
      return { answers: [{ label: 'a (м/с²)', value: Sci.fmt(aa) }], steps: [`a = F / m = ${F} / ${m} = ${Sci.fmt(aa)}`] };
    }
    if (a === 0) return { error: 'Ускорение не может быть 0.' };
    const mm = F / a;
    return { answers: [{ label: 'm (кг)', value: Sci.fmt(mm) }], steps: [`m = F / a = ${F} / ${a} = ${Sci.fmt(mm)}`] };
  },

  /* Кинетическая энергия: E = m·v²/2 */
  kinetic(m, v) {
    if (![m, v].every(Number.isFinite)) return { error: 'Заполните m и v.' };
    if (m < 0) return { error: 'Масса должна быть ≥ 0.' };
    const E = (m * v * v) / 2;
    return {
      answers: [{ label: 'E (Дж)', value: Sci.fmt(E) }],
      steps: [`E = m·v²/2 = ${m}·${v}²/2 = ${Sci.fmt(E)}`],
    };
  },

  /* Потенциальная энергия (g = 9.81): E = m·g·h */
  potential(m, h) {
    if (![m, h].every(Number.isFinite)) return { error: 'Заполните m и h.' };
    if (m < 0) return { error: 'Масса должна быть ≥ 0.' };
    const g = 9.81;
    const E = m * g * h;
    return {
      answers: [{ label: 'E (Дж)', value: Sci.fmt(E) }],
      steps: [`E = m·g·h = ${m}·9.81·${h} = ${Sci.fmt(E)}`],
    };
  },

  /* Закон Ома: U = I·R (две величины → третья) */
  ohm({ U, I, R }) {
    const known = [U, I, R].filter(Number.isFinite).length;
    if (known !== 2) return { error: 'Заполните ровно два поля из трёх.' };
    if (Number.isFinite(I) && Number.isFinite(R)) {
      const UU = I * R;
      return { answers: [{ label: 'U (В)', value: Sci.fmt(UU) }], steps: [`U = I · R = ${I} · ${R} = ${Sci.fmt(UU)}`] };
    }
    if (Number.isFinite(U) && Number.isFinite(R)) {
      if (R === 0) return { error: 'Сопротивление не может быть 0.' };
      const II = U / R;
      return { answers: [{ label: 'I (А)', value: Sci.fmt(II) }], steps: [`I = U / R = ${U} / ${R} = ${Sci.fmt(II)}`] };
    }
    if (I === 0) return { error: 'Ток не может быть 0.' };
    const RR = U / I;
    return { answers: [{ label: 'R (Ом)', value: Sci.fmt(RR) }], steps: [`R = U / I = ${U} / ${I} = ${Sci.fmt(RR)}`] };
  },

  /* Плотность: ρ = m/V (две величины → третья) */
  density({ rho, m, V }) {
    const known = [rho, m, V].filter(Number.isFinite).length;
    if (known !== 2) return { error: 'Заполните ровно два поля из трёх.' };
    if (Number.isFinite(m) && Number.isFinite(V)) {
      if (V === 0) return { error: 'Объём не может быть 0.' };
      const r = m / V;
      return { answers: [{ label: 'ρ (кг/м³)', value: Sci.fmt(r) }], steps: [`ρ = m / V = ${m} / ${V} = ${Sci.fmt(r)}`] };
    }
    if (Number.isFinite(rho) && Number.isFinite(V)) {
      const mm = rho * V;
      return { answers: [{ label: 'm (кг)', value: Sci.fmt(mm) }], steps: [`m = ρ · V = ${rho} · ${V} = ${Sci.fmt(mm)}`] };
    }
    if (rho === 0) return { error: 'Плотность не может быть 0.' };
    const VV = m / rho;
    return { answers: [{ label: 'V (м³)', value: Sci.fmt(VV) }], steps: [`V = m / ρ = ${m} / ${rho} = ${Sci.fmt(VV)}`] };
  },
};

window.SciPhys = SciPhys;

/* Computer Science / number conversions and text encoding */

const SciCS = {
  /* Десятичное -> двоичное (поддержка отрицательных и дробных) */
  decToBin(input) {
    const v = parseDecimal(input);
    if (v === null) return { error: 'Введите десятичное число.' };
    if (Number.isInteger(v)) {
      const bin = (v < 0 ? '-' : '') + Math.abs(v).toString(2);
      return {
        answers: [{ label: 'BIN', value: bin }],
        steps: stepsDecToBin(Math.abs(v)),
      };
    }
    // дробное — округляем целую часть, добавляем дробную
    const sign = v < 0 ? '-' : '';
    const abs = Math.abs(v);
    const intPart = Math.trunc(abs);
    const fracPart = abs - intPart;
    let frac = '';
    let f = fracPart;
    for (let i = 0; i < 16 && f > 0; i++) {
      f *= 2;
      const bit = Math.floor(f);
      frac += bit;
      f -= bit;
    }
    return { answers: [{ label: 'BIN', value: `${sign}${intPart.toString(2)}.${frac}` }] };
  },

  /* Двоичное -> десятичное */
  binToDec(input) {
    const s = input.trim();
    if (!/^-?[01]+(\.[01]+)?$/.test(s)) return { error: 'Введите двоичное число (только 0 и 1).' };
    const sign = s.startsWith('-') ? -1 : 1;
    const body = s.replace(/^-/, '');
    const [intPart, fracPart = ''] = body.split('.');
    let dec = parseInt(intPart, 2);
    if (fracPart) {
      for (let i = 0; i < fracPart.length; i++) {
        if (fracPart[i] === '1') dec += Math.pow(2, -(i + 1));
      }
    }
    return {
      answers: [{ label: 'DEC', value: Sci.fmt(sign * dec) }],
      steps: [
        `Цел. часть: ${intPart}₂ = ${parseInt(intPart, 2)}`,
        ...(fracPart ? [`Дроб. часть: 0.${fracPart}₂ = ${Sci.fmt(dec - parseInt(intPart, 2))}`] : []),
      ],
    };
  },

  /* Десятичное -> 16-ричное */
  decToHex(input) {
    const v = parseDecimal(input);
    if (v === null || !Number.isInteger(v)) return { error: 'Введите целое десятичное число.' };
    const sign = v < 0 ? '-' : '';
    const hex = Math.abs(v).toString(16).toUpperCase();
    return {
      answers: [{ label: 'HEX', value: `${sign}${hex}` }],
      steps: stepsDecToHex(Math.abs(v)),
    };
  },

  /* 16-ричное -> десятичное */
  hexToDec(input) {
    const s = input.trim().replace(/^0x/i, '');
    if (!/^-?[0-9a-fA-F]+$/.test(s)) return { error: 'Введите 16-ричное число (0-9, A-F).' };
    const sign = s.startsWith('-') ? -1 : 1;
    const dec = sign * parseInt(s.replace(/^-/, ''), 16);
    return {
      answers: [{ label: 'DEC', value: dec }],
      steps: stepsHexToDec(s.replace(/^-/, '')),
    };
  },

  /* Текст -> двоичный код (UTF-8 → биты по 8) */
  textToBin(text) {
    if (!text) return { error: 'Введите текст.' };
    const bytes = new TextEncoder().encode(text);
    const bin = Array.from(bytes).map(b => b.toString(2).padStart(8, '0')).join(' ');
    return { answers: [{ label: 'BIN', value: bin }] };
  },

  /* Двоичный код -> текст (биты, разбитые на байты) */
  binToText(input) {
    const s = input.replace(/\s+/g, '');
    if (!/^[01]+$/.test(s)) return { error: 'В строке должны быть только 0 и 1.' };
    if (s.length % 8 !== 0) return { error: 'Длина не кратна 8 битам.' };
    const bytes = [];
    for (let i = 0; i < s.length; i += 8) bytes.push(parseInt(s.slice(i, i + 8), 2));
    try {
      const text = new TextDecoder('utf-8', { fatal: false }).decode(new Uint8Array(bytes));
      return { answers: [{ label: 'TEXT', value: text }] };
    } catch {
      return { error: 'Невозможно декодировать как UTF-8 текст.' };
    }
  },

  /* Перевод между произвольными системами счисления */
  baseConvert(input, fromBase, toBase) {
    if (!Number.isInteger(fromBase) || fromBase < 2 || fromBase > 36) return { error: 'Исходная система должна быть от 2 до 36.' };
    if (!Number.isInteger(toBase) || toBase < 2 || toBase > 36) return { error: 'Целевая система должна быть от 2 до 36.' };
    const s = input.trim();
    if (!s) return { error: 'Введите число.' };
    const n = parseInt(s, fromBase);
    if (!Number.isFinite(n) || n.toString(fromBase).toUpperCase() !== s.toUpperCase().replace(/^-/, ''))
      return { error: `Некорректное число для системы по основанию ${fromBase}.` };
    return {
      answers: [{ label: `Base ${toBase}`, value: n.toString(toBase).toUpperCase() }],
      steps: [`${s} (по основанию ${fromBase}) = ${n} (десятичное) = ${n.toString(toBase).toUpperCase()} (по основанию ${toBase})`],
    };
  },
};

function parseDecimal(s) {
  s = String(s).trim().replace(',', '.');
  if (!/^-?\d+(\.\d+)?$/.test(s)) return null;
  return Number(s);
}

function stepsDecToBin(n) {
  if (n === 0) return [`0 в двоичной = 0`];
  const steps = [];
  let cur = n;
  while (cur > 0) {
    steps.push(`${cur} : 2 = ${Math.floor(cur / 2)}, остаток ${cur % 2}`);
    cur = Math.floor(cur / 2);
  }
  steps.push(`Читаем остатки снизу вверх → ${n.toString(2)}`);
  return steps;
}

function stepsDecToHex(n) {
  if (n === 0) return [`0 в 16-ричной = 0`];
  const steps = [];
  let cur = n;
  while (cur > 0) {
    const r = cur % 16;
    const ch = r < 10 ? r : String.fromCharCode(65 + r - 10);
    steps.push(`${cur} : 16 = ${Math.floor(cur / 16)}, остаток ${r} → ${ch}`);
    cur = Math.floor(cur / 16);
  }
  steps.push(`Читаем остатки снизу вверх → ${n.toString(16).toUpperCase()}`);
  return steps;
}

function stepsHexToDec(s) {
  let total = 0;
  const len = s.length;
  const parts = [];
  for (let i = 0; i < len; i++) {
    const ch = s[i].toUpperCase();
    const d = isNaN(Number(ch)) ? ch.charCodeAt(0) - 55 : Number(ch);
    const pw = len - i - 1;
    const v = d * Math.pow(16, pw);
    parts.push(`${ch}·16^${pw}=${v}`);
    total += v;
  }
  return [parts.join(' + ') + ' = ' + total];
}

window.SciCS = SciCS;

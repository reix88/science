/* Encryption solvers */

const SciEnc = {
  /* Шифр Цезаря — поддержка англ. и рус. (с Ё) алфавитов, обе кейса */
  caesar(text, shift, mode = 'encode') {
    if (!Number.isInteger(shift)) return { error: 'Сдвиг должен быть целым числом.' };
    if (!text) return { error: 'Введите текст.' };
    const k = mode === 'decode' ? -shift : shift;
    const result = text.split('').map(ch => shiftChar(ch, k)).join('');
    return {
      answers: [{ label: mode === 'decode' ? 'Расшифровка' : 'Шифровка', value: result }],
      steps: [`Сдвиг: ${shift}, режим: ${mode === 'decode' ? 'дешифрование' : 'шифрование'}`],
    };
  },

  /* Atbash — зеркальный шифр (только англ. и рус.) */
  atbash(text) {
    if (!text) return { error: 'Введите текст.' };
    const result = text.split('').map(ch => atbashChar(ch)).join('');
    return {
      answers: [{ label: 'Atbash', value: result }],
      steps: ['Atbash: A↔Z, B↔Y… (для обоих алфавитов)'],
    };
  },

  /* Шифр Виженера */
  vigenere(text, key, mode = 'encode') {
    if (!text || !key) return { error: 'Введите текст и ключ.' };
    if (!/^[a-zA-Zа-яА-ЯёЁ]+$/.test(key)) return { error: 'Ключ должен содержать только буквы.' };
    const result = vigenereTransform(text, key, mode === 'decode');
    return {
      answers: [{ label: mode === 'decode' ? 'Расшифровка' : 'Шифровка', value: result }],
      steps: [`Ключ: ${key}, режим: ${mode === 'decode' ? 'дешифрование' : 'шифрование'}`],
    };
  },

  /* Base64 кодировка / декодировка */
  base64(text, mode = 'encode') {
    if (!text) return { error: 'Введите текст.' };
    try {
      if (mode === 'encode') {
        const bytes = new TextEncoder().encode(text);
        const binary = Array.from(bytes, b => String.fromCharCode(b)).join('');
        return { answers: [{ label: 'Base64', value: btoa(binary) }] };
      } else {
        const binary = atob(text);
        const bytes = Uint8Array.from(binary, c => c.charCodeAt(0));
        return { answers: [{ label: 'TEXT', value: new TextDecoder().decode(bytes) }] };
      }
    } catch {
      return { error: 'Невозможно декодировать как Base64.' };
    }
  },

  /* ROT13 — частный случай Caesar(13) для англ. */
  rot13(text) {
    if (!text) return { error: 'Введите текст.' };
    return { answers: [{ label: 'ROT13', value: text.replace(/[a-zA-Z]/g, c => {
      const base = c <= 'Z' ? 65 : 97;
      return String.fromCharCode(((c.charCodeAt(0) - base + 13) % 26) + base);
    }) }] };
  },
};

const RU = 'абвгдежзийклмнопрстуфхцчшщъыьэюя';
const RUE = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя'; // с Ё (33 буквы)
const EN = 'abcdefghijklmnopqrstuvwxyz';

function shiftChar(ch, k) {
  // English
  if (/[a-zA-Z]/.test(ch)) {
    const base = ch <= 'Z' ? 65 : 97;
    const code = ch.charCodeAt(0) - base;
    return String.fromCharCode(((code + k) % 26 + 26) % 26 + base);
  }
  // Russian
  const lower = ch.toLowerCase();
  const idx = RUE.indexOf(lower);
  if (idx >= 0) {
    const newIdx = ((idx + k) % 33 + 33) % 33;
    const shifted = RUE[newIdx];
    return ch === lower ? shifted : shifted.toUpperCase();
  }
  return ch;
}

function atbashChar(ch) {
  if (/[a-zA-Z]/.test(ch)) {
    const base = ch <= 'Z' ? 65 : 97;
    return String.fromCharCode(25 - (ch.charCodeAt(0) - base) + base);
  }
  const lower = ch.toLowerCase();
  const idx = RUE.indexOf(lower);
  if (idx >= 0) {
    const shifted = RUE[32 - idx];
    return ch === lower ? shifted : shifted.toUpperCase();
  }
  return ch;
}

function vigenereTransform(text, key, decode) {
  let keyIdx = 0;
  const cleanKey = key;
  return text.split('').map(ch => {
    if (!/[a-zA-Zа-яА-ЯёЁ]/.test(ch)) return ch;
    const keyCh = cleanKey[keyIdx % cleanKey.length];
    keyIdx++;
    // Use English alphabet length for English chars, Russian for Russian chars
    const isEn = /[a-zA-Z]/.test(ch);
    if (isEn) {
      const base = ch <= 'Z' ? 65 : 97;
      const keyShift = keyCh.toLowerCase().charCodeAt(0) - 97;
      const shift = decode ? -keyShift : keyShift;
      return String.fromCharCode(((ch.charCodeAt(0) - base + shift) % 26 + 26) % 26 + base);
    } else {
      const lower = ch.toLowerCase();
      const idx = RUE.indexOf(lower);
      if (idx < 0) return ch;
      const keyShift = RUE.indexOf(keyCh.toLowerCase());
      const useShift = keyShift < 0 ? 0 : keyShift;
      const shift = decode ? -useShift : useShift;
      const newIdx = ((idx + shift) % 33 + 33) % 33;
      const shifted = RUE[newIdx];
      return ch === lower ? shifted : shifted.toUpperCase();
    }
  }).join('');
}

window.SciEnc = SciEnc;

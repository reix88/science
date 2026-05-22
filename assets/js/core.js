/* The Science — core: theme, history, navbar, form helpers */

const STORAGE_KEYS = {
  THEME: 'sci.theme',
  HISTORY: 'sci.history',
};
const MAX_HISTORY = 50;

/* ---------- Theme ---------- */
const Theme = {
  apply(theme) {
    document.documentElement.dataset.theme = theme;
    localStorage.setItem(STORAGE_KEYS.THEME, theme);
    const btn = document.querySelector('.theme-toggle');
    if (btn) btn.innerHTML = theme === 'dark' ? Theme.sunIcon : Theme.moonIcon;
  },
  toggle() {
    const cur = document.documentElement.dataset.theme || 'light';
    Theme.apply(cur === 'dark' ? 'light' : 'dark');
  },
  init() {
    const saved = localStorage.getItem(STORAGE_KEYS.THEME);
    const prefersDark = window.matchMedia?.('(prefers-color-scheme: dark)').matches;
    Theme.apply(saved || (prefersDark ? 'dark' : 'light'));
  },
  moonIcon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>',
  sunIcon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>',
};

/* ---------- History ---------- */
const History = {
  read() {
    try { return JSON.parse(localStorage.getItem(STORAGE_KEYS.HISTORY)) || []; }
    catch { return []; }
  },
  write(items) { localStorage.setItem(STORAGE_KEYS.HISTORY, JSON.stringify(items.slice(0, MAX_HISTORY))); },
  add(entry) {
    const items = History.read();
    items.unshift({ ...entry, at: Date.now() });
    History.write(items);
    History.renderBadge();
  },
  clear() { localStorage.removeItem(STORAGE_KEYS.HISTORY); History.render(); History.renderBadge(); },
  renderBadge() {
    const badge = document.querySelector('.history-count');
    if (!badge) return;
    const n = History.read().length;
    badge.textContent = n;
    badge.style.display = n ? 'inline-block' : 'none';
  },
  render() {
    const list = document.querySelector('.history-list');
    if (!list) return;
    const items = History.read();
    if (!items.length) {
      list.innerHTML = '<div class="history-empty">История пока пуста</div>';
      return;
    }
    list.innerHTML = items.map(it => {
      const time = new Date(it.at).toLocaleString('ru-RU', { day: '2-digit', month: '2-digit', hour: '2-digit', minute: '2-digit' });
      return `<div class="history-item">
        <div class="meta"><span>${escapeHtml(it.section || '')}</span><span>${time}</span></div>
        <div class="input">${escapeHtml(it.input || '')}</div>
        <div class="answer">${escapeHtml(it.answer || '')}</div>
      </div>`;
    }).join('');
  },
  open() {
    document.querySelector('.history-panel')?.classList.add('open');
    document.querySelector('.backdrop')?.classList.add('show');
    History.render();
  },
  close() {
    document.querySelector('.history-panel')?.classList.remove('open');
    document.querySelector('.backdrop')?.classList.remove('show');
  },
};

/* ---------- Navbar injection ---------- */
const NAV_SECTIONS = [
  { id: 'math', href: 'math/index.html', label: 'Алгебра' },
  { id: 'geometry', href: 'geometry/index.html', label: 'Геометрия' },
  { id: 'physics', href: 'physics/index.html', label: 'Физика' },
  { id: 'cs', href: 'computer_science/index.html', label: 'Информатика' },
  { id: 'enc', href: 'encryption/index.html', label: 'Шифрование' },
  { id: 'calc', href: 'calculator/index.html', label: 'Калькулятор' },
];

function buildNav({ active, depth = 0 }) {
  const prefix = '../'.repeat(depth);
  const links = NAV_SECTIONS.map(s => {
    const cls = s.id === active ? 'active' : '';
    return `<li><a class="${cls}" href="${prefix}${s.href}">${s.label}</a></li>`;
  }).join('');
  return `
    <nav class="navbar">
      <div class="navbar-inner">
        <a class="brand" href="${prefix}index.html">#The <span>Science</span></a>
        <ul class="nav-links" id="navLinks">${links}</ul>
        <div class="nav-controls">
          <button class="history-toggle" title="История" aria-label="История">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 3-6.7L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l3 2"/></svg>
            <span class="history-count badge badge-up" style="position:absolute;transform:translate(14px,-14px);font-size:0.65rem;padding:0 5px;"></span>
          </button>
          <button class="theme-toggle" title="Сменить тему" aria-label="Сменить тему"></button>
          <button class="nav-burger" aria-label="Меню">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
          </button>
        </div>
      </div>
    </nav>
    <div class="backdrop"></div>
    <aside class="history-panel" aria-hidden="true">
      <div class="history-header">
        <h3>История вычислений</h3>
        <button class="btn btn-ghost" data-action="history-close" aria-label="Закрыть">✕</button>
      </div>
      <div class="history-list"></div>
      <div class="history-footer">
        <button class="btn btn-secondary" data-action="history-clear" style="width:100%">Очистить историю</button>
      </div>
    </aside>
  `;
}

function buildFooter() {
  return `<footer>
    <div>The Science — учебный сборник калькуляторов. Работает локально, без сервера.</div>
    <div class="socials">
      <a href="https://github.com/" target="_blank" rel="noopener">GitHub</a>
    </div>
  </footer>`;
}

/* ---------- Init ---------- */
function initShell({ active, depth = 0 }) {
  const navHost = document.getElementById('site-nav') || createTopHost();
  navHost.innerHTML = buildNav({ active, depth });
  const footerHost = document.getElementById('site-footer') || createBottomHost();
  footerHost.innerHTML = buildFooter();

  Theme.init();
  History.renderBadge();

  document.querySelector('.theme-toggle')?.addEventListener('click', Theme.toggle);
  document.querySelector('.history-toggle')?.addEventListener('click', History.open);
  document.querySelector('.backdrop')?.addEventListener('click', History.close);
  document.querySelector('.nav-burger')?.addEventListener('click', () => {
    document.getElementById('navLinks')?.classList.toggle('open');
  });
  document.addEventListener('click', (e) => {
    const t = e.target.closest('[data-action]');
    if (!t) return;
    if (t.dataset.action === 'history-close') History.close();
    if (t.dataset.action === 'history-clear') History.clear();
  });
}

function createTopHost() {
  const el = document.createElement('div');
  el.id = 'site-nav';
  document.body.insertBefore(el, document.body.firstChild);
  return el;
}
function createBottomHost() {
  const el = document.createElement('div');
  el.id = 'site-footer';
  document.body.appendChild(el);
  return el;
}

/* ---------- Form helpers ---------- */
function num(id) {
  const el = document.getElementById(id);
  if (!el) return NaN;
  const v = el.value.trim().replace(',', '.');
  return v === '' ? NaN : Number(v);
}

function int(id) {
  const v = num(id);
  return Number.isFinite(v) ? Math.trunc(v) : NaN;
}

function str(id) {
  return document.getElementById(id)?.value ?? '';
}

function attachLiveValidation(ids, validator = isFiniteNumber) {
  ids.forEach(id => {
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('blur', () => {
      const v = el.value.trim();
      if (!v) { el.classList.remove('invalid', 'valid'); return; }
      el.classList.toggle('valid', validator(v));
      el.classList.toggle('invalid', !validator(v));
    });
  });
}

function isFiniteNumber(s) {
  if (typeof s !== 'string') s = String(s);
  s = s.replace(',', '.').trim();
  return s !== '' && Number.isFinite(Number(s));
}

function renderResult(targetId, { answers = [], error = null, steps = [], note = null }) {
  const el = document.getElementById(targetId);
  if (!el) return;
  if (error) {
    el.innerHTML = `<div class="result-error">${escapeHtml(error)}</div>`;
    return;
  }
  if (!answers.length && !steps.length && !note) {
    el.innerHTML = `<div class="result-empty">Введите данные и нажмите «Решить»</div>`;
    return;
  }
  const answersHtml = answers.map(a => {
    if (typeof a === 'string') return `<div class="result-answer">${a}</div>`;
    const label = a.label ? `<span class="label">${escapeHtml(a.label)} =</span> ` : '';
    return `<div class="result-answer">${label}${escapeHtml(String(a.value))}</div>`;
  }).join('');
  const noteHtml = note ? `<div class="mb-1">${note}</div>` : '';
  const stepsHtml = steps.length
    ? `<div class="result-steps"><h4>Решение по шагам</h4><ol>${steps.map(s => `<li>${s}</li>`).join('')}</ol></div>`
    : '';
  el.innerHTML = answersHtml + noteHtml + stepsHtml;
}

function fmt(x, digits = 6) {
  if (!Number.isFinite(x)) return String(x);
  if (Number.isInteger(x)) return String(x);
  const rounded = Number(x.toFixed(digits));
  return String(rounded);
}

function escapeHtml(s) {
  return String(s)
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#39;');
}

/* expose */
window.Sci = { initShell, History, Theme, num, int, str, attachLiveValidation, renderResult, fmt, escapeHtml };

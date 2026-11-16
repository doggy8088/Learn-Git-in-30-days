(function () {
  'use strict';
  var LANGS = ['zh-tw', 'zh-cn', 'en', 'fa'];
  var body = document.body;
  var curLang = body.getAttribute('data-lang') || 'zh-tw';
  var base = (function () {
    var link = document.querySelector('link[href*="/assets/css/site.css"]');
    if (link) {
      var href = link.getAttribute('href') || '';
      var i = href.indexOf('/assets/css/site.css');
      if (i > -1) return href.slice(0, i);
    }
    var m = location.pathname.match(/^(.*?)\/(zh-tw|zh-cn|en|fa)\//);
    return m ? m[1] : '';
  })();

  function store(k, v) { try { localStorage.setItem(k, v); } catch (e) {} }
  function read(k) { try { return localStorage.getItem(k); } catch (e) { return null; } }

  /* ----- theme ----- */
  var themeBtn = document.getElementById('themeBtn');
  if (themeBtn) {
    themeBtn.addEventListener('click', function () {
      var cur = document.documentElement.getAttribute('data-theme');
      if (!cur) {
        cur = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
      }
      var next = cur === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', next);
      store('lg30-theme', next);
    });
  }

  /* ----- language switcher ----- */
  function targetFor(lang) {
    var path = location.pathname;
    var rel = base && path.indexOf(base) === 0 ? path.slice(base.length) : path;
    var seg = rel.split('/').filter(Boolean);
    if (seg.length && LANGS.indexOf(seg[0]) > -1) {
      seg[0] = lang;
      return base + '/' + seg.join('/') + (rel.endsWith('/') ? '/' : '');
    }
    return base + '/' + lang + '/';
  }
  var langBtn = document.getElementById('langBtn');
  var langMenu = document.getElementById('langMenu');
  if (langBtn && langMenu) {
    langMenu.querySelectorAll('[data-set-lang]').forEach(function (a) {
      var l = a.getAttribute('data-set-lang');
      a.setAttribute('href', targetFor(l));
      if (l === curLang) a.classList.add('current');
      a.addEventListener('click', function () { store('lg30-lang', l); });
    });
    document.querySelectorAll('[data-lang-card]').forEach(function (a) {
      a.addEventListener('click', function () { store('lg30-lang', a.getAttribute('data-lang-card')); });
    });
    var startBtn = document.getElementById('startBtn');
    if (startBtn) {
      var saved = read('lg30-lang');
      var det = saved || detectLang();
      if (det) startBtn.setAttribute('href', base + '/' + det + '/');
      startBtn.addEventListener('click', function () { store('lg30-lang', det || 'zh-tw'); });
    }
    langBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = langMenu.classList.toggle('open');
      langBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    document.addEventListener('click', function (e) {
      if (!langMenu.contains(e.target)) {
        langMenu.classList.remove('open');
        langBtn.setAttribute('aria-expanded', 'false');
      }
    });
  }
  function detectLang() {
    var list = navigator.languages || [navigator.language || 'en'];
    for (var i = 0; i < list.length; i++) {
      var l = String(list[i]).toLowerCase();
      if (l.indexOf('fa') === 0) return 'fa';
      if (l.indexOf('zh') === 0) {
        if (l.indexOf('hans') > -1 || l.indexOf('-cn') > -1 || l.indexOf('-sg') > -1) return 'zh-cn';
        return 'zh-tw';
      }
      if (l.indexOf('en') === 0) return 'en';
    }
    return 'en';
  }

  /* ----- mobile drawer ----- */
  var drawerBtn = document.getElementById('drawerBtn');
  var sidebar = document.getElementById('sidebar');
  var backdrop = document.getElementById('backdrop');
  if (drawerBtn && sidebar) {
    var close = function () {
      sidebar.classList.remove('open');
      if (backdrop) backdrop.classList.remove('show');
    };
    drawerBtn.addEventListener('click', function () {
      sidebar.classList.toggle('open');
      if (backdrop) backdrop.classList.toggle('show', sidebar.classList.contains('open'));
    });
    if (backdrop) backdrop.addEventListener('click', close);
    sidebar.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', close); });
  }

  /* ----- chapter filter ----- */
  var filter = document.getElementById('chapterFilter');
  if (filter && sidebar) {
    filter.addEventListener('input', function () {
      var q = filter.value.trim().toLowerCase();
      var lastGroup = null;
      sidebar.querySelectorAll('.side-group, .side-link').forEach(function (el) {
        if (el.classList.contains('side-group')) { lastGroup = el; el.classList.add('hidden'); return; }
        var hit = !q || (el.getAttribute('data-title') || '').toLowerCase().indexOf(q) > -1 ||
          el.querySelector('.dnum').textContent.indexOf(q) > -1;
        el.classList.toggle('hidden', !hit);
        if (hit && lastGroup) lastGroup.classList.remove('hidden');
      });
    });
  }

  /* ----- on-this-page TOC + progress (book pages) ----- */
  var article = document.getElementById('article');
  var toc = document.getElementById('toc');
  if (article && toc) {
    var heads = article.querySelectorAll('h2, h3');
    if (heads.length < 2) {
      var wrap = document.getElementById('tocWrap');
      if (wrap) wrap.classList.add('no-items');
    } else {
      var links = [];
      heads.forEach(function (h, i) {
        if (!h.id) h.id = 'sec-' + i;
        var a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent;
        if (h.tagName === 'H3') a.className = 'lvl3';
        toc.appendChild(a);
        links.push({ a: a, h: h });
      });
      var spy = function () {
        var cur = null;
        links.forEach(function (it) {
          if (it.h.getBoundingClientRect().top <= 110) cur = it;
        });
        links.forEach(function (it) { it.a.classList.toggle('on', it === cur); });
      };
      document.addEventListener('scroll', spy, { passive: true });
      spy();
    }
  }
  var progress = document.getElementById('progress');
  if (progress && article) {
    var onScroll = function () {
      var total = document.documentElement.scrollHeight - innerHeight;
      var y = window.scrollY || 0;
      progress.style.width = (total > 0 ? Math.min(100, (y / total) * 100) : 0) + '%';
    };
    document.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ----- code copy buttons ----- */
  if (article) {
    var uiCopy = { 'zh-tw': ['複製', '已複製'], 'zh-cn': ['复制', '已复制'], en: ['Copy', 'Copied'], fa: ['کپی', 'کپی شد'] }[curLang] || ['Copy', 'Copied'];
    article.querySelectorAll('pre').forEach(function (pre) {
      var wrap = document.createElement('div');
      wrap.className = 'code-wrap';
      pre.parentNode.insertBefore(wrap, pre);
      wrap.appendChild(pre);
      var btn = document.createElement('button');
      btn.className = 'copy-btn';
      btn.type = 'button';
      btn.textContent = uiCopy[0];
      btn.addEventListener('click', function () {
        var text = pre.innerText;
        var done = function () {
          btn.textContent = uiCopy[1];
          setTimeout(function () { btn.textContent = uiCopy[0]; }, 1600);
        };
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(text).then(done, done);
        } else { done(); }
      });
      wrap.appendChild(btn);
    });
    /* scroll active chapter into view */
    var active = sidebar && sidebar.querySelector('.side-link.active');
    if (active) active.scrollIntoView({ block: 'center' });
  }
})();

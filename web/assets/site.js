// Mobilné menu, formát MAC/kľúča, prepínač typu playlistu. Bez knižníc.
(function () {
  var root = document.documentElement;
  root.classList.remove('no-js');
  root.classList.add('js');

  document.addEventListener('DOMContentLoaded', function () {
    var burger = document.querySelector('.burger');
    var top = document.querySelector('.top');
    if (burger && top) {
      burger.addEventListener('click', function () {
        var open = top.classList.toggle('open');
        burger.setAttribute('aria-expanded', open ? 'true' : 'false');
      });
    }

    // Domovská: hlavička je priehľadná nad obrázkom, po posunutí dostane pozadie.
    if (top && document.body.classList.contains('home')) {
      var onScroll = function () { top.classList.toggle('solid', window.scrollY > 40); };
      window.addEventListener('scroll', onScroll, { passive: true });
      onScroll();
    }

    // Jazykové menu sa zavrie kliknutím mimo.
    document.addEventListener('click', function (e) {
      document.querySelectorAll('details.lang[open]').forEach(function (d) {
        if (!d.contains(e.target)) d.removeAttribute('open');
      });
    });

    // MAC: dvojbodka po 2 znakoch, kľúč: pomlčka po 4 - píše sa len text.
    function formatField(el, re, size, sep, max) {
      el.addEventListener('input', function (e) {
        var deleting = !!(e && e.inputType && e.inputType.indexOf('delete') === 0);
        var raw = el.value.toUpperCase().replace(re, '').slice(0, max);
        var atEnd = el.selectionStart === el.value.length;
        var out = '';
        for (var i = 0; i < raw.length; i++) {
          out += raw[i];
          if ((i + 1) % size === 0 && i + 1 < max) out += sep;
        }
        if (deleting && out.slice(-1) === sep) out = out.slice(0, -1);
        el.value = out;
        if (atEnd) el.setSelectionRange(out.length, out.length);
      });
    }
    document.querySelectorAll('input[data-format=mac]').forEach(function (el) { formatField(el, /[^0-9A-F]/g, 2, ':', 12); });
    document.querySelectorAll('input[data-format=key]').forEach(function (el) { formatField(el, /[^0-9A-Z]/g, 4, '-', 8); });

    // Xtream potrebuje meno a heslo, M3U nie.
    var creds = document.getElementById('credentials');
    if (creds) {
      var sync = function () {
        var c = document.querySelector('input[name=type]:checked');
        var x = !c || c.value === 'XTREAM';
        creds.hidden = !x;
        creds.querySelectorAll('input').forEach(function (i) { i.required = x; });
      };
      document.querySelectorAll('input[name=type]').forEach(function (el) { el.addEventListener('change', sync); });
      sync();
    }

    // Potvrdenie pred zmazaním.
    document.querySelectorAll('form[data-confirm]').forEach(function (f) {
      f.addEventListener('submit', function (e) {
        if (!window.confirm(f.getAttribute('data-confirm'))) e.preventDefault();
      });
    });

    // Návody: prepínanie platforiem bez načítania stránky (odkazy fungujú aj bez JS).
    var tabs = document.querySelectorAll('[data-guide-tab]');
    if (tabs.length) {
      tabs.forEach(function (a) {
        a.addEventListener('click', function (e) {
          e.preventDefault();
          var id = a.getAttribute('data-guide-tab');
          tabs.forEach(function (b) { b.toggleAttribute('aria-current', b === a); });
          document.querySelectorAll('[data-guide]').forEach(function (s) { s.hidden = s.getAttribute('data-guide') !== id; });
          history.replaceState(null, '', '?p=' + id);
        });
      });
    }
  });
})();

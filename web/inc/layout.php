<?php
/**
 * Hlavička, menu a pätička - rovnaké na všetkých stránkach.
 */

declare(strict_types=1);

const NAV_PAGES = [
    'index.php' => 'nav_home',
    'zariadenie.php' => 'nav_device',
    'aktivacia.php' => 'nav_activate',
    'navody.php' => 'nav_guides',
    'novinky.php' => 'nav_news',
    'podpora.php' => 'nav_support',
];

function logo_svg(): string
{
    // Skutočné logo Arxon (štít). Názov funkcie ostal kvôli kompatibilite.
    return '<picture><source srcset="assets/img/logo-96.webp 1x, assets/img/logo-192.webp 2x" type="image/webp">'
        . '<img class="logo" src="assets/img/logo-96.png" srcset="assets/img/logo-96.png 1x, assets/img/logo-192.png 2x" width="40" height="42" alt=""></picture>';
}

/**
 * @param string $active súbor aktívnej stránky (napr. 'zariadenie.php')
 * @param string $title titulok stránky (už preložený)
 */
function page_open(string $active, string $title, string $description = '', string $bodyClass = ''): void
{
    $self = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $langs = ['sk' => 'SK', 'hu' => 'HU', 'en' => 'EN'];
    ?><!DOCTYPE html>
<html lang="<?= h(lang()) ?>" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($title) ?> · Arxon</title>
<?php if ($description !== ''): ?><meta name="description" content="<?= h($description) ?>"><?php endif; ?>
<meta name="theme-color" content="#070914">
<?php if (!empty(config()['noindex'])): ?><meta name="robots" content="noindex, nofollow"><?php endif; ?>
<link rel="icon" href="assets/img/favicon-48.png" type="image/png" sizes="48x48">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Arxon">
<meta property="og:title" content="<?= h($title) ?> · Arxon">
<?php if ($description !== ''): ?><meta property="og:description" content="<?= h($description) ?>"><?php endif; ?>
<meta property="og:image" content="<?= h(site_url()) ?>/assets/img/og-arxon.jpg">
<link rel="stylesheet" href="assets/site.css?v=10">
<?php if ($bodyClass === 'home'): ?><link rel="stylesheet" href="assets/home.css?v=4"><?php else: ?><link rel="stylesheet" href="assets/pages.css?v=1"><?php endif; ?>
<script src="assets/site.js?v=2" defer></script>
<?php foreach ($langs as $code => $_): ?>
<link rel="alternate" hreflang="<?= $code ?>" href="<?= h(site_url() . '/' . ($self === 'index.php' ? '' : $self) . '?lang=' . $code) ?>">
<?php endforeach; ?>
</head>
<body class="<?= h($bodyClass) ?>">
<a class="skip" href="#obsah"><?= h(t('skip')) ?></a>
<header class="top">
  <div class="wrap top-in">
    <a class="brand" href="./"><?= logo_svg() ?><span>ARXON</span></a>
    <button class="burger" type="button" aria-expanded="false" aria-controls="nav" aria-label="<?= h(t('menu')) ?>"><span></span><span></span><span></span></button>
      <nav id="nav" class="nav" aria-label="<?= h(t('menu')) ?>">
        <?php foreach (NAV_PAGES as $file => $key): ?>
          <a href="<?= h(page_url($file)) ?>"<?= $file === $active ? ' aria-current="page"' : '' ?>><?= h(t($key)) ?></a>
        <?php endforeach; ?>
        <a class="reseller-link" href="<?= h(page_url('reseller.php')) ?>"<?= $active === 'reseller.php' ? ' aria-current="page"' : '' ?>><?= h(t('nav_reseller')) ?></a>
      </nav>
    <details class="lang">
      <summary aria-label="<?= h(t('language')) ?>"><?= h($langs[lang()]) ?> ▾</summary>
      <div class="lang-list">
        <?php foreach ($langs as $code => $name): ?>
          <a href="<?= h($self) ?>?lang=<?= $code ?>" hreflang="<?= $code ?>"<?= $code === lang() ? ' aria-current="true"' : '' ?>><?= h(t('lang_' . $code)) ?></a>
        <?php endforeach; ?>
      </div>
    </details>
  </div>
</header>
<main id="obsah">
<?php
    $f = flash();
    if ($f !== null) {
        echo '<div class="wrap"><div class="note ' . h($f['kind']) . '" role="status">' . h($f['text']) . '</div></div>';
    }
}

function page_close(): void
{
    ?>
</main>
<footer class="foot">
  <div class="wrap foot-grid">
    <div class="foot-brand">
      <a class="brand small" href="./"><?= logo_svg() ?><span>ARXON</span></a>
      <p class="muted"><?= h(t('foot_claim')) ?></p>
    </div>
    <nav aria-label="<?= h(t('foot_app')) ?>">
      <h2><?= h(t('foot_app')) ?></h2>
      <a href="navody.php"><?= h(t('nav_guides')) ?></a>
      <a href="novinky.php"><?= h(t('nav_news')) ?></a>
      <a href="./#stiahnut"><?= h(t('stores_h')) ?></a>
    </nav>
    <nav aria-label="<?= h(t('foot_account')) ?>">
      <h2><?= h(t('foot_account')) ?></h2>
      <a href="<?= h(page_url('zariadenie.php')) ?>"><?= h(t('nav_device')) ?></a>
      <a href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('nav_activate')) ?></a>
      <a href="<?= h(page_url('reseller.php')) ?>"><?= h(t('nav_reseller')) ?></a>
    </nav>
    <nav aria-label="<?= h(t('foot_info')) ?>">
      <h2><?= h(t('foot_info')) ?></h2>
      <a href="podpora.php"><?= h(t('nav_support')) ?></a>
      <a href="podmienky.php"><?= h(t('terms')) ?></a>
      <a href="sukromie.php"><?= h(t('privacy')) ?></a>
    </nav>
  </div>
  <div class="wrap foot-bottom">
    <span>© <?= date('Y') ?> <?= h((string) (config()['company_name'] ?? 'Arxon Labs')) ?><?php
        $ico = (string) (config()['company_id'] ?? '');
        if ($ico !== '') echo ' · ' . h(t('company_id')) . ' ' . h($ico); ?></span>
    <span><?= h(t('home_disclaimer')) ?></span>
  </div>
</footer>
</body>
</html>
<?php
}

/** Jednoduché ikony (stroke), farbu berú z textu. */
function icon(string $name, int $size = 22): string
{
    $paths = [
        'tv' => '<rect x="3" y="5" width="18" height="12" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'phone' => '<rect x="7" y="2.5" width="10" height="19" rx="2.5"/><path d="M11 18.5h2"/>',
        'win' => '<path d="M3 5.5l7.5-1v7H3zM12.5 4.2L21 3v8.5h-8.5zM3 12.5h7.5v7L3 18.5zM12.5 12.5H21V21l-8.5-1.2z"/>',
        'epg' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v16M12 13h6M12 16.5h4"/>',
        'archive' => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2M4 4v4h4"/>',
        'film' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 4v16M17 4v16M3 9h4M3 15h4M17 9h4M17 15h4"/>',
        'lock' => '<rect x="5" y="10.5" width="14" height="10" rx="2"/><path d="M8 10.5V7.5a4 4 0 018 0v3"/>',
        'cloud' => '<path d="M7 18.5h10a4 4 0 00.6-7.96A5.5 5.5 0 007.1 9.6 4.5 4.5 0 007 18.5z"/>',
        'globe' => '<circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17M12 3.5c2.5 2.6 2.5 14.4 0 17M12 3.5c-2.5 2.6-2.5 14.4 0 17"/>',
        'check' => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
        'card' => '<rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="M2.5 10h19M6.5 15h4"/>',
        'users' => '<circle cx="9" cy="9" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0113 0M16 5.5a3.5 3.5 0 010 7M21.5 20a6.5 6.5 0 00-4-6"/>',
    ];
    $p = $paths[$name] ?? $paths['check'];
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
}

/** Snímka aplikácie (assets/img/<name>-760/1400.webp + jpg záloha). */
function app_shot(string $name, string $alt, bool $eager = false, string $sizes = '(max-width: 760px) 100vw, 700px', int $height = 651): string
{
    $b = 'assets/img/' . $name;
    return '<picture><source type="image/webp" srcset="' . $b . '-760.webp 760w, ' . $b . '-1400.webp 1400w" sizes="' . h($sizes) . '">'
        . '<img src="' . $b . '-760.jpg" width="1400" height="' . $height . '" alt="' . h($alt) . '"'
        . ($eager ? ' fetchpriority="high"' : ' loading="lazy" decoding="async"') . '></picture>';
}

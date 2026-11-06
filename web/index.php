<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

// Domovská stránka - dizajn zo Stitch (projekt arxonsite.com), štýly v assets/home.css.
$win = app_update('windows');
$year = money(product_info(PRODUCT_YEAR)['amount']);
$life = money(product_info(PRODUCT_LIFETIME)['amount']);
$platforms = [['tv', 'Samsung Tizen'], ['tv', 'LG webOS'], ['tv', 'Android TV'], ['tv', 'Google TV'],
    ['phone', 'Android'], ['phone', 'iPhone'], ['win', 'Windows']];
$features = [['epg', 'feat1'], ['archive', 'feat2'], ['film', 'feat3'], ['lock', 'feat4'], ['cloud', 'feat5'], ['globe', 'feat6']];
page_open('index.php', t('home_title'), t('home_desc'), 'home');
?>
<section class="h-hero">
  <div class="wrap h-hero-in">
    <div class="h-hero-text">
      <span class="h-pill"><span class="h-dot"></span><?= h(t('home_eyebrow')) ?></span>
      <h1><?= t('home_h1') /* obsahuje <em> */ ?></h1>
      <p class="h-lead"><?= h(t('home_lead')) ?></p>
      <div class="row">
        <a class="btn" href="<?= h(page_url('zariadenie.php')) ?>"><?= h(t('home_cta_add')) ?></a>
        <a class="btn ghost" href="navody.php"><?= h(t('home_cta_guide')) ?></a>
      </div>
      <p class="h-note"><?= icon('check', 16) ?><span><?= h(t('home_disclaimer')) ?></span></p>
    </div>
    <div class="h-hero-art">
      <div class="h-tv">
        <div class="h-tv-screen"><?= app_shot('d-player', t('shot_player'), true, '(max-width: 980px) 100vw, 620px', 681) ?></div>
      </div>
      <div class="h-tv-stand"></div>
    </div>
  </div>
</section>

<section class="h-strip">
  <div class="wrap">
    <p class="h-strip-label"><?= h(t('h_platforms')) ?></p>
    <div class="h-chips">
      <?php foreach ($platforms as [$ic, $name]): ?>
        <span class="h-chip"><?= icon($ic, 20) ?><?= h($name) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="h-sec">
  <div class="wrap">
    <div class="h-head">
      <h2><?= h(t('h_features')) ?></h2>
      <p><?= h(t('feat_h')) ?></p>
    </div>
    <div class="h-grid3">
      <?php foreach ($features as $i => [$ic, $k]): ?>
        <div class="h-card">
          <div class="h-ico<?= $i % 2 ? ' t' : '' ?>"><?= icon($ic) ?></div>
          <h3><?= h(t($k . '_t')) ?></h3>
          <p><?= h(t($k . '_d')) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="h-sec line">
  <div class="wrap">
    <div class="h-head">
      <h2><?= h(t('gallery_h')) ?></h2>
      <p><?= h(t('gallery_d')) ?></p>
    </div>
    <div class="gallery">
      <?php foreach ([['d-home', 'shot_home'], ['d-archive', 'shot_archive'], ['d-movies', 'shot_movies'], ['d-settings', 'shot_settings']] as [$img, $cap]): ?>
        <figure class="device small"><?= app_shot($img, t($cap), false, '(max-width: 760px) 100vw, 560px', 681) ?><figcaption><?= h(t($cap)) ?></figcaption></figure>
      <?php endforeach; ?>
    </div>
    <p class="small dim"><?= h(t('gallery_credit')) ?></p>
  </div>
</section>

<section class="h-sec line" id="ako-zacat">
  <div class="wrap">
    <div class="h-head"><h2><?= h(t('h_how')) ?></h2></div>
    <div class="h-grid4">
      <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="h-card h-step">
          <span class="h-num n<?= $i ?>"><?= $i ?></span>
          <h3><?= h(t('how' . $i . '_t')) ?></h3>
          <p><?= h(t('how' . $i . '_d')) ?></p>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="h-sec line h-pricing" id="cennik">
  <div class="wrap">
    <div class="h-head">
      <span class="h-pill t"><?= h(t('h_trial')) ?></span>
      <h2><?= h(t('h_price_h')) ?></h2>
      <p><?= h(t('h_price_d')) ?></p>
    </div>
    <div class="h-prices">
      <div class="h-card h-price">
        <h3><?= h(t('h_year')) ?></h3>
        <p><?= h(t('h_year_d')) ?></p>
        <div class="h-amount"><b><?= h($year) ?></b><span><?= h(t('h_per_year')) ?></span></div>
        <ul>
          <?php foreach (['h_b_device', 'h_b_all', 'h_b_cloud'] as $k): ?><li><?= icon('check', 18) ?><?= h(t($k)) ?></li><?php endforeach; ?>
        </ul>
        <a class="btn ghost block" href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('cta_btn')) ?></a>
      </div>
      <div class="h-card h-price best">
        <span class="h-best"><?= h(t('h_best')) ?></span>
        <h3><?= h(t('h_life')) ?></h3>
        <p><?= h(t('h_life_d')) ?></p>
        <div class="h-amount"><b><?= h($life) ?></b><span><?= h(t('h_once')) ?></span></div>
        <ul>
          <?php foreach (['h_b_forever', 'h_b_all', 'h_b_updates'] as $k): ?><li><?= icon('check', 18) ?><?= h(t($k)) ?></li><?php endforeach; ?>
        </ul>
        <a class="btn block" href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('cta_btn')) ?></a>
      </div>
    </div>
  </div>
</section>

<section class="h-sec line" id="stiahnut">
  <div class="wrap">
    <div class="h-head">
      <h2><?= h(t('stores_h')) ?></h2>
      <p><?= h(t('h_stores_d')) ?></p>
    </div>
    <div class="h-grid4">
      <?php foreach (stores() as $s): $ready = $s['url'] !== ''; ?>
        <<?= $ready ? 'a href="' . h($s['url']) . '"' : 'div' ?> class="h-card h-store<?= $ready ? '' : ' soon' ?>">
          <div class="h-store-top">
            <span class="h-ico<?= $ready ? ' t' : '' ?>"><?= icon($s['icon']) ?></span>
            <?php if ($ready): ?>
              <span class="badge year"><?= h($s['icon'] === 'win' ? t('download_installer') : t('open_store')) ?></span>
            <?php else: ?>
              <span class="badge plain"><?= h(t('store_soon')) ?></span>
            <?php endif; ?>
          </div>
          <h3><?= h($s['name']) ?></h3>
          <p><?= h(tr($s['sub'])) ?><?php if ($s['icon'] === 'win' && $ready && $win): ?> · <?= h(t('version')) ?> <?= h($win['versionName']) ?><?php endif; ?></p>
        </<?= $ready ? 'a' : 'div' ?>>
      <?php endforeach; ?>
    </div>
    <?php if (downloader_code() !== ''): ?>
      <div class="note"><?= t('downloader_note', '<b class="mono">' . h(downloader_code()) . '</b>') ?></div>
    <?php endif; ?>
  </div>
</section>
<?php
page_close();

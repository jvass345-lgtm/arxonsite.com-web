<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

// Domovská stránka - dizajn zo Stitch „Cinematic Olive“ (projekt arxonsite.com), štýly v assets/home.css.
// Úvodný obrázok (assets/img/hero-aqua-*) je vygenerovaný v Stitch - bez značiek, ľudí a textov.
$win = app_update('windows');
$year = money(product_info(PRODUCT_YEAR)['amount']);
$life = money(product_info(PRODUCT_LIFETIME)['amount']);
$screens = [['tv', 'o_tv'], ['tv', 'o_box'], ['phone', 'o_mob'], ['win', 'o_win']];
$features = [['epg', 'feat1'], ['archive', 'feat2'], ['film', 'feat3'], ['lock', 'feat4'], ['cloud', 'feat5'], ['globe', 'feat6']];
$shots = [['d-player', 'shot_player'], ['d-archive', 'shot_archive'], ['d-movies', 'shot_movies'], ['d-settings', 'shot_settings']];
page_open('index.php', t('home_title'), t('home_desc'), 'home');
?>
<section class="o-hero">
  <picture class="o-hero-bg">
    <source type="image/webp" srcset="assets/img/hero-aqua-760.webp 760w, assets/img/hero-aqua-1376.webp 1376w" sizes="100vw">
    <img src="assets/img/hero-aqua-1376.jpg" width="1376" height="768" alt="" fetchpriority="high">
  </picture>
  <div class="wrap o-hero-in">
    <span class="o-tag"><span class="o-dot"></span><?= h(t('home_eyebrow')) ?></span>
    <h1><?= t('home_h1') /* obsahuje <em> */ ?></h1>
    <p class="o-lead"><?= h(t('home_lead')) ?></p>
    <div class="row">
      <a class="btn o-play" href="<?= h(page_url('zariadenie.php')) ?>"><svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M8 5.5v13l10.5-6.5z" fill="currentColor"/></svg><?= h(t('home_cta_add')) ?></a>
      <a class="btn ghost" href="#ako-zacat"><?= h(t('home_cta_guide')) ?></a>
    </div>
    <p class="o-note"><?= h(t('home_disclaimer')) ?></p>
  </div>
</section>

<section class="o-sec">
  <div class="wrap">
    <div class="o-head split">
      <div><span class="o-kick"><?= h(t('o_screens_k')) ?></span><h2><?= h(t('o_screens')) ?></h2></div>
      <p><?= h(t('o_screens_d')) ?></p>
    </div>
    <div class="o-tiles">
      <?php foreach ($screens as [$ic, $k]): ?>
        <div class="o-tile">
          <span class="o-ico"><?= icon($ic, 24) ?></span>
          <div>
            <span class="o-kick"><?= h(t($k . '_k')) ?></span>
            <h3><?= h(t($k)) ?></h3>
            <p><?= h(t($k . '_d')) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="o-sec line">
  <div class="wrap">
    <div class="o-head"><span class="o-kick"><?= h(t('o_feat_k')) ?></span><h2><?= h(t('h_features')) ?></h2></div>
    <div class="o-posters">
      <?php foreach ($features as $i => [$ic, $k]): ?>
        <div class="o-poster p<?= $i + 1 ?>">
          <div class="o-poster-top"><span class="o-ico sm"><?= icon($ic, 18) ?></span><span class="o-kick"><?= h(t('o_tag' . ($i + 1))) ?></span></div>
          <div class="o-poster-art"><?= icon($ic, 96) ?></div>
          <div>
            <h3><?= h(t($k . '_t')) ?></h3>
            <p><?= h(t($k . '_d')) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="o-sec line">
  <div class="wrap">
    <div class="o-head split">
      <div><span class="o-kick"><?= h(t('o_gallery_k')) ?></span><h2><?= h(t('gallery_h')) ?></h2></div>
      <p><?= h(t('gallery_d')) ?></p>
    </div>
  </div>
  <div class="o-row" tabindex="0" aria-label="<?= h(t('gallery_h')) ?>">
    <?php foreach ($shots as [$img, $cap]): ?>
      <figure class="o-shot"><?= app_shot($img, t($cap), false, '(max-width: 760px) 85vw, 560px', 681) ?><figcaption><?= h(t($cap)) ?></figcaption></figure>
    <?php endforeach; ?>
  </div>
  <div class="wrap"><p class="small dim"><?= h(t('gallery_credit')) ?></p></div>
</section>

<section class="o-sec line" id="ako-zacat">
  <div class="wrap o-split">
    <div class="o-tv">
      <div class="o-tv-screen"><?= app_shot('d-player', t('shot_player'), false, '(max-width: 980px) 100vw, 680px', 681) ?></div>
    </div>
    <div>
      <span class="o-kick"><?= h(t('o_how_k')) ?></span>
      <h2 class="o-h2"><?= h(t('h_how')) ?></h2>
      <ol class="o-steps">
        <?php for ($i = 1; $i <= 4; $i++): ?>
          <li><span class="o-num"><?= $i ?></span><div><h3><?= h(t('how' . $i . '_t')) ?></h3><p><?= h(t('how' . $i . '_d')) ?></p></div></li>
        <?php endfor; ?>
      </ol>
    </div>
  </div>
</section>

<section class="o-sec line" id="cennik">
  <div class="wrap">
    <div class="o-band">
      <div class="o-head center"><span class="o-kick"><?= h(t('o_price_k')) ?></span><h2><?= h(t('h_price_h')) ?></h2><p><?= h(t('o_price_d')) ?></p></div>
      <div class="o-prices">
        <div class="o-price">
          <h3><?= h(t('h_year')) ?></h3>
          <p><?= h(t('h_year_d')) ?></p>
          <div class="o-amount"><b><?= h($year) ?></b><span><?= h(t('h_per_year')) ?></span></div>
          <ul><?php foreach (['h_b_device', 'h_b_all', 'h_b_cloud'] as $k): ?><li><?= icon('check', 18) ?><?= h(t($k)) ?></li><?php endforeach; ?></ul>
          <a class="btn ghost block" href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('cta_btn')) ?></a>
        </div>
        <div class="o-price best">
          <span class="o-best"><?= h(t('h_best')) ?></span>
          <h3><?= h(t('h_life')) ?></h3>
          <p><?= h(t('h_life_d')) ?></p>
          <div class="o-amount"><b><?= h($life) ?></b><span><?= h(t('h_once')) ?></span></div>
          <ul><?php foreach (['h_b_forever', 'h_b_all', 'h_b_updates'] as $k): ?><li><?= icon('check', 18) ?><?= h(t($k)) ?></li><?php endforeach; ?></ul>
          <a class="btn block" href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('cta_btn')) ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="o-sec line" id="stiahnut">
  <div class="wrap">
    <div class="o-head center"><span class="o-kick"><?= h(t('o_stores_k')) ?></span><h2><?= h(t('stores_h')) ?></h2><p><?= h(t('h_stores_d')) ?></p></div>
    <div class="o-stores">
      <?php foreach (stores() as $s): $ready = $s['url'] !== ''; ?>
        <?php if ($ready): ?><a class="o-store ready" href="<?= h($s['url']) ?>"><?php else: ?><div class="o-store"><?php endif; ?>
          <div>
            <h3><?= h($s['name']) ?></h3>
            <p><?= h(tr($s['sub'])) ?><?php if ($s['icon'] === 'win' && $ready && $win): ?> · <?= h(t('version')) ?> <?= h($win['versionName']) ?><?php endif; ?></p>
          </div>
          <span class="o-badge"><?= h($ready ? ($s['icon'] === 'win' ? t('download_installer') : t('open_store')) : t('store_soon')) ?></span>
        <?= $ready ? '</a>' : '</div>' ?>
      <?php endforeach; ?>
    </div>
    <?php if (downloader_code() !== ''): ?>
      <div class="note"><?= t('downloader_note', '<b class="mono">' . h(downloader_code()) . '</b>') ?></div>
    <?php endif; ?>
  </div>
</section>
<?php
page_close();

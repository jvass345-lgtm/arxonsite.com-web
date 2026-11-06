<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

$win = app_update('windows');
page_open('index.php', t('home_title'), t('home_desc'));
?>
<section class="hero">
  <div class="wrap hero-in">
    <div class="hero-text">
      <span class="eyebrow"><?= h(t('home_eyebrow')) ?></span>
      <h1><?= t('home_h1') /* obsahuje <em> */ ?></h1>
      <p class="lead"><?= h(t('home_lead')) ?></p>
      <div class="row">
        <a class="btn" href="<?= h(page_url('zariadenie.php')) ?>"><?= h(t('home_cta_add')) ?></a>
        <a class="btn ghost" href="navody.php"><?= h(t('home_cta_guide')) ?></a>
      </div>
      <p class="disclaimer"><?= h(t('home_disclaimer')) ?></p>
    </div>
    <div class="hero-art">
      <div class="device"><?= app_shot('d-player', t('shot_player'), true, '(max-width: 980px) 100vw, 640px', 681) ?></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap stack">
    <h2><?= h(t('feat_h')) ?></h2>
    <div class="grid features">
      <?php foreach ([['epg', 'feat1'], ['archive', 'feat2'], ['film', 'feat3'], ['lock', 'feat4'], ['cloud', 'feat5'], ['globe', 'feat6']] as $i => [$ic, $k]): ?>
        <div class="card">
          <div class="ico<?= $i % 2 ? ' t' : '' ?>"><?= icon($ic) ?></div>
          <h3><?= h(t($k . '_t')) ?></h3>
          <p class="muted"><?= h(t($k . '_d')) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section tight">
  <div class="wrap stack">
    <h2><?= h(t('gallery_h')) ?></h2>
    <p class="muted"><?= h(t('gallery_d')) ?></p>
    <div class="gallery">
      <?php foreach ([['d-home', 'shot_home'], ['d-archive', 'shot_archive'], ['d-movies', 'shot_movies'], ['d-settings', 'shot_settings']] as [$img, $cap]): ?>
        <figure class="device small"><?= app_shot($img, t($cap), false, '(max-width: 760px) 100vw, 560px', 681) ?><figcaption><?= h(t($cap)) ?></figcaption></figure>
      <?php endforeach; ?>
    </div>
    <p class="small dim"><?= h(t('gallery_credit')) ?></p>
  </div>
</section>

<section class="section tight" id="stiahnut">
  <div class="wrap stack">
    <h2><?= h(t('stores_h')) ?></h2>
    <div class="grid stores">
      <?php foreach (stores() as $s): ?>
        <div class="card">
          <div class="row"><span class="ico t"><?= icon($s['icon']) ?></span>
            <?php if ($s['url'] !== ''): ?><span class="badge life spacer"><?= h(t('store_ready')) ?></span>
            <?php else: ?><span class="badge plain spacer"><?= h(t('store_soon')) ?></span><?php endif; ?>
          </div>
          <h3><?= h($s['name']) ?></h3>
          <p class="muted small"><?= h(tr($s['sub'])) ?></p>
          <?php if ($s['url'] !== ''): ?>
            <a href="<?= h($s['url']) ?>"><?= h($s['icon'] === 'win' ? t('download_installer') : t('open_store')) ?> →</a>
            <?php if ($s['icon'] === 'win' && $win): ?><span class="dim small"><?= h(t('version')) ?> <?= h($win['versionName']) ?></span><?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if (downloader_code() !== ''): ?>
      <div class="note"><?= t('downloader_note', '<b class="mono">' . h(downloader_code()) . '</b>') ?></div>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="wrap stack">
    <h2><?= h(t('how_h')) ?></h2>
    <div class="grid two steps">
      <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="card step">
          <span class="n"><?= $i ?></span>
          <div class="stack">
            <h3><?= h(t('how' . $i . '_t')) ?></h3>
            <p class="muted"><?= h(t('how' . $i . '_d')) ?></p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="section tight">
  <div class="wrap">
    <div class="cta-band">
      <div class="stack">
        <h2><?= h(t('cta_h')) ?></h2>
        <p class="muted"><?= h(t('cta_d', money(product_info(PRODUCT_YEAR)['amount']), money(product_info(PRODUCT_LIFETIME)['amount']))) ?></p>
      </div>
      <a class="btn teal" href="<?= h(page_url('aktivacia.php')) ?>"><?= h(t('cta_btn')) ?></a>
    </div>
  </div>
</section>
<?php
page_close();

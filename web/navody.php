<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
const WEB_ADD_H = 1133;
web_start();

$guides = guides();
$pick = (string) ($_GET['p'] ?? 'box');
if (!isset($guides[$pick])) {
    $pick = 'box';
}
page_open('navody.php', t('nav_guides'), t('guides_desc'));
?>
<div class="wrap">
  <div class="page-head">
    <h1><?= h(t('guides_h')) ?></h1>
    <p><?= h(t('guides_lead')) ?></p>
  </div>

  <nav class="seg section tight" aria-label="<?= h(t('guides_platform')) ?>">
    <?php foreach ($guides as $id => $g): ?>
      <a href="?p=<?= h($id) ?>" data-guide-tab="<?= h($id) ?>"<?= $id === $pick ? ' aria-current="page"' : '' ?>><?= h(tr($g['name'])) ?></a>
    <?php endforeach; ?>
  </nav>

  <?php foreach ($guides as $id => $g): ?>
  <div class="split" data-guide="<?= h($id) ?>"<?= $id === $pick ? '' : ' hidden' ?>>
    <section class="main stack">
      <h2><?= h(tr($g['name'])) ?></h2>
      <?php
      $steps = [
          [t('g1_t'), tr($g['install']), t('g1_shot')],
          [t('g2_t'), t('g2_d'), t('g2_shot')],
          [t('g3_t'), t('g3_d'), t('g3_shot')],
          [t('g4_t'), t('g4_d'), t('g4_shot')],
      ];
      foreach ($steps as $i => [$title, $text, $shot]): ?>
        <div class="card step">
          <span class="n"><?= $i + 1 ?></span>
          <div class="stack grow">
            <h3><?= h($title) ?></h3>
            <p class="muted"><?= h($text) ?></p>
            <?php if ($i === 3): ?>
              <div class="device small"><?= app_shot('d-home', t('shot_home'), false, '(max-width: 760px) 100vw, 560px', 681) ?></div>
            <?php elseif ($i === 1): ?>
              <div class="device small mid"><?= app_shot('app-mac', t('g2_shot'), false, '(max-width: 760px) 100vw, 460px', 1018) ?></div>
            <?php elseif ($i === 2): ?>
              <div class="device small narrow"><picture><source type="image/webp" srcset="assets/img/web-add-380.webp 380w, assets/img/web-add-700.webp 700w" sizes="340px"><img src="assets/img/web-add-380.jpg" width="700" height="<?= WEB_ADD_H ?>" alt="<?= h(t('g3_shot')) ?>" loading="lazy" decoding="async"></picture></div>
            <?php else: ?>
              <div class="shot"><?= h(t('shot_placeholder', $shot)) ?></div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
    <aside class="side">
      <div class="card stack">
        <span class="eyebrow"><?= h(t('guides_req')) ?></span>
        <p class="soft"><?= h(tr($g['req'])) ?></p>
      </div>
      <a class="card" href="podpora.php"><?= h(t('guides_trouble')) ?> →</a>
    </aside>
  </div>
  <?php endforeach; ?>
</div>
<?php
page_close();

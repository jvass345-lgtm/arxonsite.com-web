<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

$filter = (string) ($_GET['f'] ?? 'all');
$filters = ['all' => t('news_all'), 'android' => 'Android', 'tv' => 'Smart TV', 'win' => 'Windows'];
if (!isset($filters[$filter])) {
    $filter = 'all';
}
$items = array_filter(news(), function ($n) use ($filter) { return $filter === 'all' || $n['kind'] === $filter; });
page_open('novinky.php', t('nav_news'), t('news_desc'));
?>
<div class="wrap">
  <div class="page-head">
    <h1><?= h(t('news_h')) ?></h1>
    <p><?= h(t('news_lead')) ?></p>
  </div>
  <nav class="seg section tight" aria-label="<?= h(t('news_filter')) ?>">
    <?php foreach ($filters as $k => $label): ?>
      <a href="?f=<?= h($k) ?>"<?= $k === $filter ? ' aria-current="page"' : '' ?>><?= h($label) ?></a>
    <?php endforeach; ?>
  </nav>
  <div class="timeline" style="max-width: 860px">
    <?php if (!$items): ?><div class="empty"><?= h(t('news_empty')) ?></div><?php endif; ?>
    <?php foreach ($items as $n): $pl = news_platform($n['kind']); ?>
      <article class="card">
        <div class="row">
          <h3><?= h(t('version')) ?> <?= h($n['ver']) ?></h3>
          <span class="badge <?= h($pl['cls']) ?>"><?= h($pl['label']) ?></span>
          <?php if ($n['date'] !== ''): ?><span class="spacer small dim"><?= h(fmt_date($n['date'])) ?></span><?php endif; ?>
        </div>
        <ul><?php foreach (tr($n['notes']) ?: [] as $line): ?><li><?= h($line) ?></li><?php endforeach; ?></ul>
      </article>
    <?php endforeach; ?>
  </div>
</div>
<?php
page_close();

<?php
/** Verejná stránka pre predajcov. Prihlásenie a nákup kreditov sú na arxonlabs.eu (reseller.php). */
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

$pack = product_info(PRODUCT_CREDITS);
$perCredit = money((int) (config()['price_credit'] ?? 400));
$benefits = [['card', 'rp_b1'], ['users', 'rp_b2'], ['phone', 'rp_b3'], ['tv', 'rp_b4']];
page_open('predajcovia.php', t('rp_title'), t('rp_desc'));
?>
<div class="wrap">
  <div class="page-head">
    <h1><?= h(t('rp_h1')) ?></h1>
    <p><?= h(t('rp_lead')) ?></p>
    <div class="row">
      <a class="btn" href="<?= h(page_url('reseller.php')) ?>"><?= h(t('rp_login')) ?></a>
      <a class="btn ghost" href="podpora.php"><?= h(t('rp_become')) ?></a>
    </div>
  </div>

  <section class="section">
    <span class="rp-kick"><?= h(t('rp_why_k')) ?></span>
    <h2 class="rp-h2"><?= h(t('rp_why')) ?></h2>
    <div class="rp-grid">
      <?php foreach ($benefits as [$ic, $k]): ?>
        <div class="card rp-card">
          <span class="rp-ico"><?= icon($ic) ?></span>
          <h3><?= h(t($k . '_t')) ?></h3>
          <p class="muted"><?= h(t($k . '_d')) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section rp-split">
    <div>
      <span class="rp-kick"><?= h(t('rp_how_k')) ?></span>
      <h2 class="rp-h2"><?= h(t('rp_how')) ?></h2>
      <ol class="rp-steps">
        <?php for ($i = 1; $i <= 3; $i++): ?>
          <li><span class="n"><?= $i ?></span><div><h3><?= h(t('rp_s' . $i . '_t')) ?></h3><p class="muted"><?= h(t('rp_s' . $i . '_d')) ?></p></div></li>
        <?php endfor; ?>
      </ol>
    </div>
    <div class="card rp-price">
      <span class="rp-kick"><?= h(t('rp_price_k')) ?></span>
      <h3><?= h(t('rp_pack', $pack['credits'])) ?></h3>
      <div class="rp-amount"><b><?= h(money($pack['amount'])) ?></b><span><?= h(t('rp_per', $perCredit)) ?></span></div>
      <p class="muted small"><?= h(t('rp_pack_d')) ?></p>
      <a class="btn block" href="<?= h(page_url('reseller.php')) ?>"><?= h(t('rp_login')) ?></a>
    </div>
  </section>
</div>
<?php
page_close();

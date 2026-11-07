<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

$c = config();
$supportEmail = (string) ($c['support_email'] ?? '');
$ph = static function (string $k, string $label) use ($c): string {
    $v = trim((string) ($c[$k] ?? ''));
    return $v !== '' ? h($v) : '<mark>[' . h($label) . ']</mark>';
};
$firm = $ph('company_name', 'NÁZOV FIRMY s.r.o.');
$addr = $ph('company_address', 'SÍDLO');
$ico = $ph('company_id', 'IČO');
page_open('podpora.php', t('nav_support'), t('sup_desc'));
?>
<div class="wrap">
  <div class="page-head">
    <h1><?= h(t('sup_h')) ?></h1>
    <p><?= h(t('sup_lead')) ?></p>
  </div>

  <section class="section tight stack">
    <h2><?= h(t('sup_errors_h')) ?></h2>
    <div class="grid">
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <div class="card stack">
          <span class="errmsg">„<?= h(t('err' . $i . '_m')) ?>“</span>
          <p class="soft"><?= h(t('err' . $i . '_d')) ?></p>
        </div>
      <?php endfor; ?>
    </div>
  </section>

  <div class="split section tight">
    <section class="main stack faq">
      <h2><?= h(t('faq_h')) ?></h2>
      <?php for ($i = 1; $i <= 10; $i++): ?>
        <details<?= $i === 1 ? ' open' : '' ?>><summary><?= h(t('sup_q' . $i)) ?></summary><div><?= h(t('sup_a' . $i)) ?></div></details>
      <?php endfor; ?>
    </section>
    <aside class="side">
      <div class="card stack">
        <h3><?= h(t('sup_form_h')) ?></h3>
        <a class="btn" href="<?= h(main_site() . '/podpora.php?lang=' . lang()) ?>"><?= h(t('send')) ?> →</a>
      </div>
      <div class="card stack">
        <span class="eyebrow"><?= h(t('contact')) ?></span>
        <span><?= h(t('email')) ?>: <?php if ($supportEmail !== ''): ?><a href="mailto:<?= h($supportEmail) ?>"><?= h($supportEmail) ?></a><?php else: ?><mark>[E-MAIL]</mark><?php endif; ?></span>
        <?php if (!empty($c['whatsapp'])): ?><span>WhatsApp: <a href="https://wa.me/<?= h(preg_replace('/\D/', '', (string) $c['whatsapp'])) ?>"><?= h((string) $c['whatsapp']) ?></a></span><?php endif; ?>
        <?php if (!empty($c['telegram'])): ?><span>Telegram: <a href="https://t.me/<?= h(ltrim((string) $c['telegram'], '@')) ?>"><?= h((string) $c['telegram']) ?></a></span><?php endif; ?>
        <span class="small dim"><?= h(t('sup_reply_time')) ?></span>
        <span class="small soft"><?= h(t('sup_include')) ?></span>
      </div>
      <div class="card stack small">
        <span class="eyebrow"><?= h(t('sup_operator')) ?></span>
        <span><?= $firm ?><br><?= $addr ?><br>IČO <?= $ico ?></span>
        <span><a href="podmienky.php"><?= h(t('terms')) ?></a> · <a href="sukromie.php"><?= h(t('privacy')) ?></a></span>
      </div>
    </aside>
  </div>
</div>
<?php
page_close();

<?php
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();

$c = config();
$supportEmail = (string) ($c['support_email'] ?? '');
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
      <?php for ($i = 1; $i <= 7; $i++): ?>
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
        <?php if ($supportEmail !== ''): ?><span><?= h(t('email')) ?>: <a href="mailto:<?= h($supportEmail) ?>"><?= h($supportEmail) ?></a></span><?php endif; ?>
        <?php if (!empty($c['whatsapp'])): ?><span>WhatsApp: <a href="https://wa.me/<?= h(preg_replace('/\D/', '', (string) $c['whatsapp'])) ?>"><?= h((string) $c['whatsapp']) ?></a></span><?php endif; ?>
        <?php if (!empty($c['telegram'])): ?><span>Telegram: <a href="https://t.me/<?= h(ltrim((string) $c['telegram'], '@')) ?>"><?= h((string) $c['telegram']) ?></a></span><?php endif; ?>
        <span class="small dim"><?= h(t('sup_reply_time')) ?></span>
      </div>
    </aside>
  </div>
</div>
<?php
page_close();

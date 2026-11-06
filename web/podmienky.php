<?php
/**
 * Obchodné podmienky - NÁVRH. Pred spustením predaja ho skontroluj s právnikom
 * alebo účtovníkom a doplň údaje firmy v config.php (company_*).
 */
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();
$c = config();
$firm = h((string) ($c['company_name'] ?? '[NÁZOV FIRMY]'));
$addr = h((string) ($c['company_address'] ?? '[ADRESA]'));
$ico = h((string) ($c['company_id'] ?? '[IČO]'));
$mail = h((string) ($c['support_email'] ?? '[E-MAIL]'));
$y = money(product_info(PRODUCT_YEAR)['amount']);
$l = money(product_info(PRODUCT_LIFETIME)['amount']);
page_open('podmienky.php', t('terms'));
?>
<div class="wrap legal section tight">
  <h1><?= h(t('terms')) ?></h1>
  <?php if (lang() !== 'sk'): ?><div class="note"><?= h(t('legal_sk_only')) ?></div><?php endif; ?>
  <h2>1. Predávajúci</h2>
  <p><?= $firm ?>, <?= $addr ?>, IČO <?= $ico ?>, e-mail <?= $mail ?> (ďalej „predávajúci“).</p>
  <h2>2. Predmet</h2>
  <p>Predmetom je licencia na používanie aplikácie Arxon (prehrávač) na jednom zariadení identifikovanom MAC adresou. Licencia <b>neobsahuje žiadny televízny obsah, kanály ani playlisty</b>. Obsah si kupujúci zabezpečuje sám u tretích strán a zodpovedá za to, že má na jeho používanie právo.</p>
  <h2>3. Druhy licencie a ceny</h2>
  <ul>
    <li>Ročná licencia – <?= h($y) ?>, platí 12 mesiacov od aktivácie; ďalší nákup ju predĺži o 12 mesiacov.</li>
    <li>Doživotná licencia – <?= h($l) ?>, platí na jednom zariadení po celú dobu prevádzky služby.</li>
  </ul>
  <p>Ceny sú konečné. Každé nové zariadenie má 7 dní skúšobnej doby zadarmo.</p>
  <h2>4. Jedno zariadenie</h2>
  <p>Licencia sa viaže na jedno zariadenie (jednu MAC adresu) a na iné zariadenie sa neprenáša. Po preinštalovaní aplikácie na tom istom zariadení licencia ostáva.</p>
  <h2>5. Platba a dodanie</h2>
  <p>Platba prebieha cez platobnú bránu Stripe (karta, Apple Pay, Google Pay). Licencia sa aktivuje automaticky po prijatí platby, spravidla do jednej minúty. Doklad o platbe príde na zadaný e-mail.</p>
  <h2>6. Odstúpenie od zmluvy</h2>
  <p>Ide o digitálny obsah dodaný okamžite. Kupujúci pred platbou výslovne súhlasí so začatím plnenia a berie na vedomie, že tým stráca právo odstúpiť od zmluvy do 14 dní (§ 7 ods. 6 písm. l) zákona č. 102/2014 Z. z.). Preto odporúčame pred kúpou vyskúšať aplikáciu počas skúšobnej doby.</p>
  <h2>7. Reklamácie</h2>
  <p>Ak licencia po zaplatení nefunguje, napíš na <?= $mail ?> s MAC adresou zariadenia. Reklamáciu vybavíme do 30 dní. Za nefunkčnosť obsahu tretích strán (playlisty, kanály) predávajúci nezodpovedá.</p>
  <h2>8. Predajcovia</h2>
  <p>Predajcovia nakupujú kredity vopred (1 kredit = 1 doživotná licencia). Kredity sú nevratné a zostatok nemôže klesnúť pod nulu.</p>
  <h2>9. Záverečné ustanovenia</h2>
  <p>Spory možno riešiť aj alternatívne cez Slovenskú obchodnú inšpekciu alebo platformu RSO (ec.europa.eu/consumers/odr). Tieto podmienky platia od [DÁTUM].</p>
</div>
<?php
page_close();

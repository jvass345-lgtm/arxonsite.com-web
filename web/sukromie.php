<?php
/** Ochrana osobných údajov - NÁVRH, skontroluj pred spustením. */
declare(strict_types=1);
require __DIR__ . '/inc/bootstrap.php';
web_start();
$c = config();
$firm = h((string) ($c['company_name'] ?? '[NÁZOV FIRMY]'));
$addr = h((string) ($c['company_address'] ?? '[ADRESA]'));
$ico = h((string) ($c['company_id'] ?? '[IČO]'));
$mail = h((string) ($c['support_email'] ?? '[E-MAIL]'));
page_open('sukromie.php', t('privacy'));
?>
<div class="wrap legal section tight">
  <h1><?= h(t('privacy')) ?></h1>
  <?php if (lang() !== 'sk'): ?><div class="note"><?= h(t('legal_sk_only')) ?></div><?php endif; ?>
  <h2>Prevádzkovateľ</h2>
  <p><?= $firm ?>, <?= $addr ?>, IČO <?= $ico ?>, e-mail <?= $mail ?>.</p>
  <h2>Aké údaje spracúvame</h2>
  <ul>
    <li><b>Údaje zariadenia</b> – MAC adresa vygenerovaná aplikáciou, kľúč zariadenia (len v podobe hashu), dátum registrácie a posledného pripojenia, stav licencie.</li>
    <li><b>Playlisty</b> – adresy a prihlasovacie údaje k službám poskytovateľov, ktoré pridáš. Sú uložené šifrovane kľúčom tvojho zariadenia; heslo web nikdy nezobrazuje.</li>
    <li><b>Platby</b> – e-mail, suma a dátum. Údaje o karte spracúva výlučne Stripe, my ich nevidíme.</li>
    <li><b>Cloudová záloha</b> (ak ju zapneš) – hash telefónneho čísla a šifrovaná identita zariadenia.</li>
    <li><b>Technické údaje</b> – IP adresa (v skrátenej podobe hashu) na ochranu pred zneužitím, záznamy servera.</li>
  </ul>
  <h2>Prečo</h2>
  <p>Na poskytnutie služby (plnenie zmluvy), vedenie účtovníctva (zákonná povinnosť) a ochranu pred zneužitím (oprávnený záujem).</p>
  <h2>Komu ich poskytujeme</h2>
  <p>Stripe Payments Europe, Ltd. (platby), poskytovateľ hostingu [HOSTING]. Údaje nepredávame ani nepoužívame na reklamu.</p>
  <h2>Ako dlho</h2>
  <p>Údaje zariadenia, kým zariadenie používaš; zariadenia bez licencie a bez playlistu môžeme po čase zmazať. Účtovné doklady 10 rokov.</p>
  <h2>Cookies</h2>
  <p>Web používa len nevyhnutné cookies: reláciu prihlásenia (ARXONWEB) a zvolený jazyk (lang). Nepoužívame analytické ani reklamné cookies, preto netreba súhlas.</p>
  <h2>Tvoje práva</h2>
  <p>Máš právo na prístup, opravu, vymazanie, obmedzenie spracúvania, prenosnosť a námietku. Napíš na <?= $mail ?>. Sťažnosť môžeš podať na Úrad na ochranu osobných údajov SR.</p>
</div>
<?php
page_close();

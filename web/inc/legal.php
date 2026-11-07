<?php
/**
 * Právne stránky (Ochrana osobných údajov, Obchodné podmienky) v SK / HU / EN.
 *
 * Texty sú v inc/legal/*.php ako ['sk' => [[nadpis, html], ...], 'hu' => ..., 'en' => ...].
 * V texte sa nahrádzajú zástupné značky {FIRM}, {ADDR}, {ICO}, {DIC}, {REG}, {MAIL},
 * {DATE}, {YEAR}, {LIFE}, {CREDIT}, {PACK} údajmi zo site-config.php.
 * Kým údaje firmy nie sú vyplnené, zobrazí sa [NÁZOV FIRMY] a pod. (zvýraznené).
 */

declare(strict_types=1);

function legal_vars(): array
{
    $c = config();
    $ph = static function (string $key, string $label) use ($c): string {
        $v = trim((string) ($c[$key] ?? ''));
        return $v !== '' ? h($v) : '<mark>[' . h($label) . ']</mark>';
    };
    $date = trim((string) ($c['legal_date'] ?? ''));
    return [
        '{FIRM}' => $ph('company_name', 'NÁZOV FIRMY s.r.o.'),
        '{ADDR}' => $ph('company_address', 'SÍDLO'),
        '{ICO}' => $ph('company_id', 'IČO'),
        '{DIC}' => $ph('company_vat', 'DIČ / IČ DPH'),
        '{REG}' => $ph('company_register', 'Obchodný register Okresného súdu …, oddiel Sro, vložka č. …'),
        '{MAIL}' => $ph('support_email', 'E-MAIL'),
        '{DATE}' => $date !== '' ? h(fmt_date($date)) : '<mark>[DÁTUM ÚČINNOSTI]</mark>',
        '{YEAR}' => h(money(product_info(PRODUCT_YEAR)['amount'])),
        '{LIFE}' => h(money(product_info(PRODUCT_LIFETIME)['amount'])),
        '{CREDIT}' => h(money((int) ($c['price_credit'] ?? 400))),
        '{PACK}' => (string) (int) ($c['credits_pack'] ?? 10),
    ];
}

/** Vykreslí právny dokument v aktuálnom jazyku. $file = názov v inc/legal/ bez .php */
function legal_render(string $file, string $title): void
{
    $doc = require __DIR__ . '/legal/' . $file . '.php';
    $sections = $doc[lang()] ?? $doc['sk'];
    $vars = legal_vars();
    echo '<div class="wrap legal section tight">';
    echo '<h1>' . h($title) . '</h1>';
    echo '<p class="small dim">' . h(t('legal_valid_from')) . ' ' . $vars['{DATE}'] . '</p>';
    if (lang() !== 'sk') {
        echo '<div class="note">' . h(t('legal_sk_only')) . '</div>';
    }
    // Obsah
    echo '<nav class="legal-toc"><ol>';
    foreach ($sections as $i => $s) {
        echo '<li><a href="#s' . ($i + 1) . '">' . h($s[0]) . '</a></li>';
    }
    echo '</ol></nav>';
    foreach ($sections as $i => $s) {
        echo '<h2 id="s' . ($i + 1) . '">' . ($i + 1) . '. ' . h($s[0]) . '</h2>';
        echo strtr($s[1], $vars);
    }
    echo '</div>';
}

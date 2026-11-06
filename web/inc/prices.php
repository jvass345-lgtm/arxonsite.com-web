<?php
/**
 * Ceny pre zobrazenie na webe (bez platieb - platí sa na arxonlabs.eu).
 * Hodnoty berie zo site-config.php; drž ich rovnaké ako v portal/config.php na arxonlabs.eu.
 */

declare(strict_types=1);

const PRODUCT_YEAR = 'YEAR';
const PRODUCT_LIFETIME = 'LIFETIME';
const PRODUCT_CREDITS = 'CREDITS';

/** @return array{amount:int, credits:int} cena v centoch */
function product_info(string $product): array
{
    $c = config();
    switch ($product) {
        case PRODUCT_YEAR:
            return ['amount' => (int) ($c['price_year'] ?? 399), 'credits' => 0];
        case PRODUCT_LIFETIME:
            return ['amount' => (int) ($c['price_lifetime'] ?? 999), 'credits' => 0];
        case PRODUCT_CREDITS:
            $pack = (int) ($c['credits_pack'] ?? 10);
            return ['amount' => $pack * (int) ($c['price_credit'] ?? 400), 'credits' => $pack];
    }
    throw new InvalidArgumentException('Neznámy produkt.');
}

/** 399 -> "3,99 €" (sk/hu) alebo "€3.99" (en). */
function money(int $cents): string
{
    $value = number_format($cents / 100, 2, lang() === 'en' ? '.' : ',', lang() === 'en' ? ',' : ' ');
    return lang() === 'en' ? '€' . $value : $value . ' €';
}

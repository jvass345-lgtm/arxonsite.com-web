<?php
/**
 * Spoločný základ webu arxonsite.com.
 *
 * DÔLEŽITÉ: arxonsite.com NEMÁ prístup k databáze ani k portal/config.php.
 * Je to prezentačná kópia webu arxonlabs.eu, ktorú môžeš ľubovoľne upravovať.
 * Všetko, čo pracuje s údajmi (Moje zariadenie, Aktivácia, Reseller, platby,
 * Portál Tabuľka), beží ďalej na arxonlabs.eu - odkazy tam vedú cez main_url().
 * Verzie aplikácií sa čítajú (len čítanie) z https://arxonlabs.eu/portal/update-*.json.
 */

declare(strict_types=1);

require __DIR__ . '/i18n.php';
require __DIR__ . '/layout.php';
require __DIR__ . '/content.php';
require __DIR__ . '/prices.php';

/** Stránky, ktoré pracujú s databázou - bežia len na arxonlabs.eu. */
const MAIN_PAGES = ['zariadenie.php', 'aktivacia.php', 'reseller.php', 'platba.php', 'tabulka.php'];

function config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/site-config.php';
    }
    return $config;
}

function is_https(): bool
{
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        return true;
    }
    return strtolower((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '')) === 'https';
}

function web_start(): void
{
    header('Content-Type: text/html; charset=utf-8');
    header('X-Frame-Options: DENY');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    if (!empty(config()['noindex'])) {
        header('X-Robots-Tag: noindex, nofollow');
    }
    header("Content-Security-Policy: default-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline'; "
        . "font-src 'self'; script-src 'self'; connect-src 'self'; frame-ancestors 'none'; base-uri 'self'; form-action 'self'");
    lang_init();
}

function h(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Web nemá reláciu ani formuláre - hlásenia sa nezobrazujú. */
function flash(?string $message = null, string $kind = 'ok'): ?array
{
    return null;
}

/** Adresa tohto webu (arxonsite.com) bez lomky na konci. */
function site_url(): string
{
    $url = (string) (config()['site_url'] ?? '');
    if ($url === '') {
        $url = (is_https() ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? 'arxonsite.com');
    }
    return rtrim($url, '/');
}

/** Adresa hlavného webu s databázou (arxonlabs.eu). */
function main_site(): string
{
    return rtrim((string) (config()['main_url'] ?? 'https://arxonlabs.eu'), '/');
}

/**
 * Odkaz na stránku: bežné stránky ostávajú na arxonsite.com,
 * stránky s údajmi (MAIN_PAGES) idú na arxonlabs.eu v rovnakom jazyku.
 */
function page_url(string $file): string
{
    $page = strtok($file, '?#');
    if (in_array($page, MAIN_PAGES, true)) {
        $sep = strpos($file, '?') === false ? '?' : '&';
        return main_site() . '/' . $file . $sep . 'lang=' . lang();
    }
    return $file === 'index.php' ? './' : $file;
}

/**
 * Údaje o verzii aplikácie z arxonlabs.eu/portal/update-*.json (len čítanie).
 * Výsledok sa drží 1 hodinu v dočasnom súbore, aby web nečakal pri každom načítaní.
 */
function app_update(string $app = 'tv'): ?array
{
    $files = [
        'tv' => 'update.json', 'mobile' => 'update-mobile.json', 'tizen' => 'update-tizen.json',
        'webos' => 'update-webos.json', 'windows' => 'update-windows.json', 'admin' => 'update-admin.json',
    ];
    if (!isset($files[$app])) {
        return null;
    }
    $cache = sys_get_temp_dir() . '/arxonsite-' . $files[$app];
    $raw = null;
    if (is_file($cache) && filemtime($cache) > time() - 3600) {
        $raw = (string) file_get_contents($cache);
    } else {
        $raw = remote_get(main_site() . '/portal/' . $files[$app]);
        if ($raw !== null) {
            @file_put_contents($cache, $raw);
        } elseif (is_file($cache)) {
            $raw = (string) file_get_contents($cache); // arxonlabs.eu nedostupný - staršia kópia
        }
    }
    $data = $raw !== null ? json_decode($raw, true) : null;
    if (!is_array($data) || !isset($data['versionName'])) {
        return null;
    }
    return [
        'app' => $app,
        'versionCode' => (int) ($data['versionCode'] ?? 0),
        'versionName' => (string) $data['versionName'],
        'url' => (string) ($data['url'] ?? ''),
    ];
}

/** GET s krátkym časovým limitom; pri chybe null (web sa zobrazí aj tak). */
function remote_get(string $url): ?string
{
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 3, CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_FOLLOWLOCATION => false, CURLOPT_USERAGENT => 'arxonsite']);
        $body = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return ($body !== false && $code === 200) ? (string) $body : null;
    }
    $ctx = stream_context_create(['http' => ['timeout' => 3, 'user_agent' => 'arxonsite']]);
    $body = @file_get_contents($url, false, $ctx);
    return $body === false ? null : $body;
}

function fmt_date(string $ymd): string
{
    $ts = strtotime($ymd);
    if ($ts === false) {
        return $ymd;
    }
    switch (lang()) {
        case 'hu':
            return date('Y. m. d.', $ts);
        case 'en':
            return date('j M Y', $ts);
        default:
            return date('j. n. Y', $ts);
    }
}

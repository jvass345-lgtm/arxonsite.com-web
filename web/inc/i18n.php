<?php
/**
 * Jazyky webu: slovenčina, maďarčina, angličtina.
 *
 * Poradie: ?lang=xx (uloží sa do cookie na rok) -> cookie -> jazyk prehliadača -> sk.
 * Texty sú v strings.php ako 'kľúč' => ['sk', 'hu', 'en'].
 */

declare(strict_types=1);

const LANGS = ['sk', 'hu', 'en'];

function lang_init(): void
{
    $lang = null;
    $q = strtolower((string) ($_GET['lang'] ?? ''));
    if (in_array($q, LANGS, true)) {
        $lang = $q;
        setcookie('lang', $lang, [
            'expires' => time() + 365 * 86400,
            'path' => '/',
            'secure' => is_https(),
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }
    if ($lang === null) {
        $c = strtolower((string) ($_COOKIE['lang'] ?? ''));
        if (in_array($c, LANGS, true)) {
            $lang = $c;
        }
    }
    if ($lang === null) {
        $lang = lang_from_browser((string) ($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? ''));
    }
    $GLOBALS['WEB_LANG'] = $lang;
}

function lang_from_browser(string $header): string
{
    foreach (explode(',', $header) as $part) {
        $code = strtolower(substr(trim($part), 0, 2));
        if ($code === 'cs') {
            return 'sk';
        }
        if (in_array($code, LANGS, true)) {
            return $code;
        }
    }
    return 'sk';
}

function lang(): string
{
    return (string) ($GLOBALS['WEB_LANG'] ?? 'sk');
}

/** Preložený text; ďalšie argumenty idú do sprintf (%s, %d). */
function t(string $key, ...$args): string
{
    static $strings = null;
    if ($strings === null) {
        $strings = require __DIR__ . '/strings.php';
    }
    $row = $strings[$key] ?? null;
    if ($row === null) {
        return $key;
    }
    $i = array_search(lang(), LANGS, true);
    $text = (string) ($row[$i === false ? 0 : $i] ?? $row[0]);
    return $args ? vsprintf($text, $args) : $text;
}

/** Text z poľa ['sk' => ..., 'hu' => ..., 'en' => ...] (návody, novinky). */
function tr(array $texts)
{
    return $texts[lang()] ?? $texts['sk'] ?? reset($texts);
}

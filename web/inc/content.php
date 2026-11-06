<?php
/**
 * Obsah, ktorý sa mení najčastejšie: obchody, návody, novinky.
 * Uprav tu - netreba siahať do stránok.
 */

declare(strict_types=1);

/**
 * Obchody s aplikáciou. 'url' => '' znamená "pripravujeme".
 * Ikona: tv | phone | win
 */
function stores(): array
{
    return [
        ['name' => 'Google Play', 'sub' => ['sk' => 'Android TV, boxy, Google TV', 'hu' => 'Android TV, boxok, Google TV', 'en' => 'Android TV, boxes, Google TV'], 'url' => '', 'icon' => 'tv'],
        ['name' => 'Google Play', 'sub' => ['sk' => 'Android mobil a tablet', 'hu' => 'Android telefon és tablet', 'en' => 'Android phone and tablet'], 'url' => '', 'icon' => 'phone'],
        ['name' => 'Samsung', 'sub' => ['sk' => 'Smart TV (Tizen)', 'hu' => 'Smart TV (Tizen)', 'en' => 'Smart TV (Tizen)'], 'url' => '', 'icon' => 'tv'],
        ['name' => 'LG', 'sub' => ['sk' => 'Smart TV (webOS)', 'hu' => 'Smart TV (webOS)', 'en' => 'Smart TV (webOS)'], 'url' => '', 'icon' => 'tv'],
        ['name' => 'Philips', 'sub' => ['sk' => 'Titan OS', 'hu' => 'Titan OS', 'en' => 'Titan OS'], 'url' => '', 'icon' => 'tv'],
        ['name' => 'Hisense', 'sub' => ['sk' => 'VIDAA', 'hu' => 'VIDAA', 'en' => 'VIDAA'], 'url' => '', 'icon' => 'tv'],
        ['name' => 'Windows', 'sub' => ['sk' => 'Windows 10 a 11', 'hu' => 'Windows 10 és 11', 'en' => 'Windows 10 and 11'], 'url' => 'https://arxonlabs.eu/portal/app/arxon-windows.msi', 'icon' => 'win'],
        ['name' => 'App Store', 'sub' => ['sk' => 'iPhone a iPad', 'hu' => 'iPhone és iPad', 'en' => 'iPhone and iPad'], 'url' => '', 'icon' => 'phone'],
    ];
}

/** Kód pre aplikáciu Downloader (boxy bez Google Play). Prázdny = blok sa neukáže. */
function downloader_code(): string
{
    return (string) (config()['downloader_code'] ?? '');
}

/** Návody podľa platformy. 'install' = prvý krok, zvyšok je spoločný. */
function guides(): array
{
    $dl = downloader_code();
    return [
        'box' => [
            'name' => ['sk' => 'Android TV / box', 'hu' => 'Android TV / box', 'en' => 'Android TV / box'],
            'install' => [
                'sk' => 'Otvor Google Play, vyhľadaj „Arxon“ a nainštaluj.' . ($dl !== '' ? ' Box bez Google Play: aplikácia Downloader, kód ' . $dl . '.' : ''),
                'hu' => 'Nyisd meg a Google Playt, keress rá: „Arxon“, és telepítsd.' . ($dl !== '' ? ' Google Play nélküli boxon: Downloader alkalmazás, kód: ' . $dl . '.' : ''),
                'en' => 'Open Google Play, search for “Arxon” and install it.' . ($dl !== '' ? ' Box without Google Play: Downloader app, code ' . $dl . '.' : ''),
            ],
            'req' => ['sk' => 'Android 5.0 a novší, odporúčame aspoň 2 GB RAM.', 'hu' => 'Android 5.0 vagy újabb, legalább 2 GB RAM ajánlott.', 'en' => 'Android 5.0 or newer, 2 GB RAM or more recommended.'],
        ],
        'mobile' => [
            'name' => ['sk' => 'Android mobil', 'hu' => 'Android telefon', 'en' => 'Android phone'],
            'install' => ['sk' => 'Nainštaluj Arxon Mobile z Google Play.', 'hu' => 'Telepítsd az Arxon Mobile alkalmazást a Google Playről.', 'en' => 'Install Arxon Mobile from Google Play.'],
            'req' => ['sk' => 'Android 5.0 a novší.', 'hu' => 'Android 5.0 vagy újabb.', 'en' => 'Android 5.0 or newer.'],
        ],
        'samsung' => [
            'name' => ['sk' => 'Samsung Smart TV', 'hu' => 'Samsung Smart TV', 'en' => 'Samsung Smart TV'],
            'install' => ['sk' => 'Na ovládači stlač Home → Aplikácie → vyhľadaj „Arxon“ → Inštalovať.', 'hu' => 'A távirányítón: Home → Alkalmazások → keresés: „Arxon“ → Telepítés.', 'en' => 'On the remote press Home → Apps → search “Arxon” → Install.'],
            'req' => ['sk' => 'Samsung Smart TV s Tizen 4.0 a novším (modely od roku 2018).', 'hu' => 'Samsung Smart TV Tizen 4.0 vagy újabb rendszerrel (2018-tól).', 'en' => 'Samsung Smart TV with Tizen 4.0 or newer (2018 models onward).'],
        ],
        'lg' => [
            'name' => ['sk' => 'LG Smart TV', 'hu' => 'LG Smart TV', 'en' => 'LG Smart TV'],
            'install' => ['sk' => 'Otvor LG Content Store, vyhľadaj „Arxon“ a nainštaluj.', 'hu' => 'Nyisd meg az LG Content Store-t, keress rá: „Arxon“, és telepítsd.', 'en' => 'Open LG Content Store, search for “Arxon” and install it.'],
            'req' => ['sk' => 'LG s webOS 3.0 a novším.', 'hu' => 'LG webOS 3.0 vagy újabb.', 'en' => 'LG with webOS 3.0 or newer.'],
        ],
        'philips' => [
            'name' => ['sk' => 'Philips (Titan OS)', 'hu' => 'Philips (Titan OS)', 'en' => 'Philips (Titan OS)'],
            'install' => ['sk' => 'Na domovskej obrazovke otvor Aplikácie a vyhľadaj „Arxon“.', 'hu' => 'A kezdőképernyőn nyisd meg az Alkalmazásokat, és keress rá: „Arxon“.', 'en' => 'On the home screen open Apps and search for “Arxon”.'],
            'req' => ['sk' => 'Televízory s Titan OS (Philips, JVC, Sharp).', 'hu' => 'Titan OS-es tévék (Philips, JVC, Sharp).', 'en' => 'TVs with Titan OS (Philips, JVC, Sharp).'],
        ],
        'hisense' => [
            'name' => ['sk' => 'Hisense (VIDAA)', 'hu' => 'Hisense (VIDAA)', 'en' => 'Hisense (VIDAA)'],
            'install' => ['sk' => 'Otvor VIDAA Store, vyhľadaj „Arxon“ a nainštaluj.', 'hu' => 'Nyisd meg a VIDAA Store-t, keress rá: „Arxon“, és telepítsd.', 'en' => 'Open VIDAA Store, search for “Arxon” and install it.'],
            'req' => ['sk' => 'Hisense s VIDAA OS.', 'hu' => 'Hisense VIDAA OS-sel.', 'en' => 'Hisense with VIDAA OS.'],
        ],
        'win' => [
            'name' => ['sk' => 'Windows', 'hu' => 'Windows', 'en' => 'Windows'],
            'install' => ['sk' => 'Stiahni inštalátor z hlavnej stránky (Windows) a spusti ho.', 'hu' => 'Töltsd le a telepítőt a főoldalról (Windows), és futtasd.', 'en' => 'Download the installer from the home page (Windows) and run it.'],
            'req' => ['sk' => 'Windows 10 a 11, 64-bit.', 'hu' => 'Windows 10 és 11, 64 bites.', 'en' => 'Windows 10 and 11, 64-bit.'],
        ],
    ];
}

/**
 * Novinky - najnovšie navrchu. 'date' prázdny = nezobrazí sa.
 * kind: android | tv | win
 */
function news(): array
{
    return [
        ['kind' => 'android', 'ver' => '0.52', 'date' => '2026-10-14', 'notes' => [
            'sk' => ['Programy, filmy, seriály a archív ako dlaždice', 'Showcase, Overview a Archív zobrazujú 8 riadkov', 'EPG a popis vedľa názvu – viac na jednej obrazovke', 'Rýchlejšie prvé spustenie'],
            'hu' => ['Csatornák, filmek, sorozatok és archívum csempékként', 'A Showcase, Overview és Archívum 8 sort mutat', 'EPG és leírás a név mellett – több fér egy képernyőre', 'Gyorsabb első indítás'],
            'en' => ['Channels, movies, series and archive as tiles', 'Showcase, Overview and Archive show 8 rows', 'EPG and description next to the name – more on one screen', 'Faster first start'],
        ]],
        ['kind' => 'android', 'ver' => '0.51', 'date' => '2026-10-13', 'notes' => [
            'sk' => ['Informácie o streame v jazyku menu', 'Opravy stability prehrávača'],
            'hu' => ['Stream-információk a menü nyelvén', 'Lejátszó stabilitási javítások'],
            'en' => ['Stream info in the menu language', 'Player stability fixes'],
        ]],
        ['kind' => 'android', 'ver' => '0.50', 'date' => '2026-10-13', 'notes' => [
            'sk' => ['Opravené zamrznutie pri prvom spustení na niektorých boxoch', 'Rýchlejšie načítanie EPG'],
            'hu' => ['Javítva: lefagyás az első indításkor egyes boxokon', 'Gyorsabb EPG-betöltés'],
            'en' => ['Fixed a freeze on first start on some boxes', 'Faster EPG loading'],
        ]],
        ['kind' => 'tv', 'ver' => '0.9.10', 'date' => '', 'notes' => [
            'sk' => ['Skupiny, programy a epizódy ako dlaždice', 'Prehľadnejšie vyhľadávanie'],
            'hu' => ['Csoportok, csatornák és epizódok csempékként', 'Áttekinthetőbb keresés'],
            'en' => ['Groups, channels and episodes as tiles', 'Clearer search'],
        ]],
    ];
}

function news_platform(string $kind): array
{
    switch ($kind) {
        case 'android':
            return ['label' => 'Android TV · ' . t('mobile'), 'cls' => 'year'];
        case 'tv':
            return ['label' => 'Samsung · LG · Philips · Hisense', 'cls' => 'violet'];
        default:
            return ['label' => 'Windows', 'cls' => 'trial'];
    }
}

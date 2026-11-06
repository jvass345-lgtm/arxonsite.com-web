<?php
/**
 * Nastavenia webu arxonsite.com. Žiadne heslá ani kľúče - tie sú len na arxonlabs.eu.
 * Údaje firmy a ceny prepíš podľa portal/config.php na arxonlabs.eu (len tieto riadky, nič iné).
 */
return [
    'site_url' => 'https://arxonsite.com',
    'main_url' => 'https://arxonlabs.eu',     // hlavný web s databázou (zariadenie, aktivácia, reseller)

    // Kým web upravuješ, nech ho Google neindexuje (inak by súperil s arxonlabs.eu).
    // Pri spustení zmeň na false a zmaž robots.txt.
    'noindex' => true,

    'company_name' => 'Arxon Labs',
    'company_id' => '',
    'company_address' => '',
    'support_email' => '',
    'whatsapp' => '',
    'telegram' => '',
    'downloader_code' => '',

    // Ceny v centoch - len na zobrazenie
    'price_year' => 399,
    'price_lifetime' => 999,
    'price_credit' => 400,
    'credits_pack' => 10,
];

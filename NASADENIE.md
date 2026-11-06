# arxonsite.com – nasadenie

Prezentačná kópia webu arxonlabs.eu. **Bez databázy a bez hesiel**: úpravy tu nemôžu pokaziť arxonlabs.eu ani aplikácie.

| Na arxonsite.com (upravuješ tu) | Ostáva na arxonlabs.eu (odkazy tam vedú) |
|---|---|
| Domov, Návody, Novinky, Podpora (FAQ), Podmienky, Súkromie | Moje zariadenie, Aktivácia, Reseller, Platba, Portál Tabuľka, kontaktný formulár, `/portal`, Stripe webhook |

Verzia Windows aplikácie sa načítava z `https://arxonlabs.eu/portal/update-windows.json` (iba čítanie, 1 h cache).

## Webhouse (raz)
1. Panel → arxonsite.com ako **samostatný web s vlastným priečinkom**, nie alias arxonlabs.eu.
2. SSL → Let's Encrypt pre `arxonsite.com` aj `www.arxonsite.com`.
3. PHP 8.3 (rovnako ako arxonlabs.eu).

## Nahratie (FileZilla)
Obsah priečinka `web\` → koreň arxonsite.com (aj `.htaccess`, `inc\.htaccess`, `robots.txt`).
Nič z toho nenahrávaj na arxonlabs.eu.

## Nastavenia
`web\inc\site-config.php`: doplň údaje firmy (support_email, IČO…) a ceny rovnako ako v `portal/config.php` na arxonlabs.eu. Heslá ani kľúče sem nepatria.

## Kontrola
- [ ] `https://arxonsite.com/` sa zobrazí v SK/HU/EN
- [ ] `http://www.arxonsite.com/` presmeruje na `https://arxonsite.com/`
- [ ] `https://arxonsite.com/inc/site-config.php` vráti 403
- [ ] „Moje zariadenie“ a „Reseller“ otvoria arxonlabs.eu

## Spustenie naostro (neskôr)
Web je teraz skrytý pred Googlom. Pri spustení:
- `site-config.php` → `'noindex' => false`
- `.htaccess` → zmaž riadok `X-Robots-Tag`
- zmaž `robots.txt`

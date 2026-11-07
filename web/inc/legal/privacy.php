<?php
/**
 * Zásady ochrany osobných údajov - Arxon Player (všetky platformy) + weby + portál.
 * NÁVRH podľa skutočného kódu (portal/, web/, arxon-player) k 7. 11. 2026.
 * Pred spustením nechaj skontrolovať právnikom. Pri zmene aplikácie (nová služba,
 * analytika, platby v obchodoch) treba text upraviť.
 */

return [
'sk' => [
['Kto spracúva tvoje údaje', '
<p>Prevádzkovateľom je {FIRM}, {ADDR}, IČO {ICO}, zapísaná v {REG} (ďalej „my“). Kontakt pre otázky k osobným údajom: <a href="mailto:{MAIL}">{MAIL}</a>.</p>
<p>Tieto zásady platia pre aplikáciu <b>Arxon Player</b> na všetkých platformách (Android TV, Android mobil, iPhone/iPad, Samsung Tizen, LG webOS, Windows a ďalšie), pre weby arxonsite.com a arxonlabs.eu, portál pre aplikácie, aplikáciu Arxon Admin a panel predajcov.</p>
<p>Zodpovednú osobu (DPO) sme neurčili, pretože to zákon pri našom rozsahu spracúvania nevyžaduje.</p>'],

['Stručne', '
<ul>
<li>Arxon je <b>len prehrávač</b>. Nepredávame ani nedodávame žiadne kanály ani obsah.</li>
<li>Nepotrebuješ účet, meno ani e-mail. Zariadenie sa identifikuje <b>MAC adresou, ktorú si vygeneruje aplikácia</b>, a tajným kľúčom zariadenia.</li>
<li>Playlisty sú na serveri <b>zašifrované kľúčom tvojho zariadenia</b> – bez neho ich nevieme prečítať ani my.</li>
<li>Nepoužívame reklamu, analytické nástroje ani sledovacie cookies. Údaje nepredávame.</li>
<li>Údaje o karte vidí len Stripe (alebo obchod Google / Apple), nie my.</li>
</ul>'],

['Aké údaje spracúvame a prečo', '
<table class="legal-table">
<tr><th>Údaje</th><th>Na čo</th><th>Právny základ</th></tr>
<tr><td><b>Zariadenie</b>: MAC adresa vygenerovaná aplikáciou, kľúč zariadenia (uložený len ako hash), platforma (napr. Android TV), dátum registrácie a posledného pripojenia, posledná IP adresa, stav a platnosť licencie, voliteľný názov a poznámka zariadenia</td><td>párovanie zariadenia, licencia, skúšobná doba, ochrana pred zneužitím, podpora</td><td>plnenie zmluvy (čl. 6 ods. 1 písm. b) GDPR); oprávnený záujem na bezpečnosti (písm. f)</td></tr>
<tr><td><b>Playlisty</b>: názov, adresa servera, používateľské meno a heslo k službe, ktorú si sám pridáš (M3U / Xtream), adresa EPG</td><td>doručenie playlistu do tvojho zariadenia</td><td>plnenie zmluvy</td></tr>
<tr><td><b>Cloudová záloha</b> (len ak ju zapneš): hash telefónneho čísla, názov miesta (napr. „obývačka“), zašifrovaná záloha licencie, playlistov, obľúbených a nastavení; synchronizácia pozretých filmov a seriálov</td><td>obnova po preinštalovaní, pokračovanie v sledovaní na inom zariadení</td><td>súhlas / tvoja požiadavka (písm. a), b))</td></tr>
<tr><td><b>Obľúbené medzi zariadeniami</b>: zašifrovaný zoznam obľúbených kanálov</td><td>stiahnutie obľúbených na iné zariadenie</td><td>plnenie zmluvy</td></tr>
<tr><td><b>„Pošli na TV“</b>: prepojenie telefónu a TV (MAC a názvy zariadení), jednorazový kód, dočasne zašifrovaná adresa streamu</td><td>poslanie kanála alebo videa z telefónu do TV</td><td>plnenie zmluvy</td></tr>
<tr><td><b>Hovory a videohovory</b> (len ak sú pre zariadenie zapnuté): zoznam kontaktov (MAC a meno, ktoré zadáš), automatické prijatie, záznam o hovore (kto, komu, audio/video, stav, čas), technické údaje na nadviazanie spojenia</td><td>spojenie hovoru</td><td>plnenie zmluvy</td></tr>
<tr><td><b>Platby na webe</b>: e-mail, produkt, suma, mena, jazyk, MAC zariadenia alebo účet predajcu, súhlas so začatím plnenia, čas platby</td><td>predaj licencie, doklad, účtovníctvo, reklamácie</td><td>plnenie zmluvy; zákonná povinnosť (písm. c))</td></tr>
<tr><td><b>Predajcovia</b>: prihlasovacie meno, heslo (len ako hash), zobrazované meno, kredity a ich pohyby, priradené zariadenia</td><td>správa predajcov a licencií</td><td>plnenie zmluvy</td></tr>
<tr><td><b>Kontakt s podporou</b>: e-mail, správa, prípadne MAC zariadenia</td><td>odpoveď na tvoju otázku</td><td>oprávnený záujem / plnenie zmluvy</td></tr>
<tr><td><b>Technické údaje</b>: IP adresa a čas požiadavky v záznamoch servera, počítadlá pokusov (IP alebo MAC v podobe hashu)</td><td>bezpečnosť, ochrana pred útokmi a hádaním kľúčov</td><td>oprávnený záujem</td></tr>
</table>
<p>Nespracúvame tvoje meno, adresu, polohu, kontakty z telefónu ani históriu sledovania živého vysielania. Telefónne číslo cloudovej zálohy neukladáme v čitateľnej podobe – ukladáme len jeho hash.</p>'],

['Čo ostáva len v tvojom zariadení', '
<ul>
<li><b>Kamera a mikrofón</b> – aplikácia ich použije len počas hovoru alebo videohovoru, ktorý sám spustíš alebo prijmeš. Obraz a zvuk nenahrávame ani neukladáme.</li>
<li><b>Rodičovský zámok, obľúbené, nastavenia, posledný kanál</b> – uložené v zariadení (na server len pri zálohe alebo zdieľaní obľúbených, zašifrované).</li>
<li><b>Podrobný záznam (diagnostika)</b> – ak ho zapneme kvôli riešeniu problému, zapisuje sa len do systémového záznamu v zariadení a na server sa neodosiela.</li>
</ul>'],

['Kam aplikácia pristupuje priamo', '
<p>Aplikácia sa pripája priamo na servery, ktoré nie sú naše a za ktoré nezodpovedáme. Títo prevádzkovatelia vidia tvoju IP adresu a spracúvajú údaje podľa vlastných zásad:</p>
<ul>
<li><b>Poskytovateľ tvojho playlistu</b> – služba, ktorej adresu a prihlasovacie údaje si pridal. Arxon s ním nemá žiadnu zmluvu.</li>
<li><b>Zdroje programu (EPG)</b> – predvolene epgshare01.online a open-epg.com, alebo zdroj, ktorý si zadal.</li>
<li><b>Servery STUN</b> (Google, stun.l.google.com) – len pri hovore, na zistenie verejnej adresy pre spojenie. Samotný hovor ide šifrovane (WebRTC) priamo medzi zariadeniami, prípadne cez náš prenosový server TURN; obsah hovoru neukladáme.</li>
</ul>'],

['Komu údaje poskytujeme', '
<ul>
<li><b>Hosting</b> – [POSKYTOVATEĽ HOSTINGU, napr. Webhouse s.r.o., Slovensko]: server, databáza a e-mail.</li>
<li><b>Stripe Payments Europe, Ltd.</b> (Írsko) – platby na webe. Stripe je pri spracovaní platby samostatný prevádzkovateľ.</li>
<li><b>Google Play, Apple App Store, Samsung, LG a iné obchody</b> – ak kupuješ licenciu v obchode, platbu spracúva obchod podľa svojich podmienok; my dostaneme len potvrdenie nákupu.</li>
<li><b>Predajca</b> – ak ti licenciu aktivoval predajca, vidí MAC, názov a stav tvojho zariadenia (nie playlisty ani heslá).</li>
<li><b>Účtovník a úrady</b> – len účtovné doklady, resp. ak to vyžaduje zákon.</li>
</ul>
<p>Údaje nepredávame, nepoužívame na reklamu ani na profilovanie a nerobíme automatizované rozhodnutia s právnymi účinkami.</p>'],

['Prenos mimo EÚ', '
<p>Údaje uchovávame na serveri v EÚ. Niektorí poskytovatelia (Stripe, Google) môžu údaje spracúvať aj v USA; deje sa tak na základe štandardných zmluvných doložiek Európskej komisie alebo rámca EU–US Data Privacy Framework.</p>'],

['Ako dlho údaje uchovávame', '
<ul>
<li>Zariadenie a playlisty – kým zariadenie používaš. Zariadenie bez licencie, ktoré sa [12 mesiacov] nepripojilo, môžeme zmazať. Playlist, ktorého predplatné u poskytovateľa vypršalo pred viac ako 7 dňami, aplikácia zmaže.</li>
<li>Cloudová záloha – kým ju nezmažeš alebo nepožiadaš o vymazanie.</li>
<li>„Pošli na TV“ – adresa streamu niekoľko minút, jednorazový kód do jeho vypršania.</li>
<li>Hovory – technické údaje spojenia 10 minút, záznam o ukončenom hovore 7 dní, kontakty kým ich nezmažeš.</li>
<li>Platby a účtovné doklady – 10 rokov (zákon o účtovníctve).</li>
<li>Komunikácia s podporou – [2 roky] od vyriešenia.</li>
<li>Záznamy servera – podľa nastavenia hostingu, spravidla do [30 dní].</li>
</ul>'],

['Zabezpečenie', '
<p>Komunikácia prebieha cez HTTPS. Playlisty, zálohy a zdieľané obľúbené sú šifrované (AES-256-GCM) kľúčom, ktorý pozná len tvoje zariadenie alebo ktorý je odvodený z tvojho telefónneho čísla a PIN. Kľúče zariadení a heslá predajcov ukladáme len ako hash. Počet pokusov je obmedzený.</p>'],

['Cookies', '
<p>Weby používajú len nevyhnutné cookies: <code>lang</code> (zvolený jazyk, 1 rok) a na arxonlabs.eu aj reláciu prihlásenia. Nepoužívame analytické, marketingové ani cudzie sledovacie cookies, preto nie je potrebný súhlas. Pri platbe ťa presmerujeme na Stripe, ktorý používa vlastné cookies.</p>'],

['Deti', '
<p>Aplikácia nie je určená deťom do 16 rokov a vedome od nich nezbierame údaje. Nákup licencie môže urobiť len dospelá osoba.</p>'],

['Tvoje práva', '
<p>Máš právo na prístup k údajom, opravu, vymazanie, obmedzenie spracúvania, prenosnosť, námietku proti spracúvaniu na základe oprávneného záujmu a na odvolanie súhlasu kedykoľvek.</p>
<p><b>Ako požiadať o vymazanie:</b> napíš na <a href="mailto:{MAIL}">{MAIL}</a> a uveď MAC adresu zariadenia (nájdeš ju v aplikácii). Zariadenie, playlisty, zálohu a obľúbené zmažeme do 30 dní. Účtovné doklady musíme uchovať podľa zákona. Playlist môžeš zmazať aj sám na stránke Moje zariadenie a cloudovú zálohu v aplikácii.</p>
<p>Ak si myslíš, že s údajmi zaobchádzame nesprávne, môžeš podať sťažnosť na Úrad na ochranu osobných údajov SR, Hraničná 12, 820 07 Bratislava, <a href="https://dataprotection.gov.sk" rel="noopener">dataprotection.gov.sk</a>, alebo na úrad v štáte EÚ, kde žiješ.</p>'],

['Zmeny', '
<p>Pri podstatnej zmene (napr. nová služba, ktorej údaje odovzdávame) aktualizujeme túto stránku a dátum účinnosti a upozorníme na to v aplikácii alebo na webe.</p>'],
],

'hu' => [
['Ki kezeli az adataidat', '
<p>Az adatkezelő: {FIRM}, {ADDR}, cégazonosító (IČO) {ICO}, nyilvántartva: {REG} (a továbbiakban „mi“). Kapcsolat adatvédelmi kérdésekben: <a href="mailto:{MAIL}">{MAIL}</a>.</p>
<p>Ez a tájékoztató az <b>Arxon Player</b> alkalmazásra vonatkozik minden platformon (Android TV, Android mobil, iPhone/iPad, Samsung Tizen, LG webOS, Windows stb.), valamint az arxonsite.com és arxonlabs.eu weboldalakra, az alkalmazások portáljára, az Arxon Admin alkalmazásra és a viszonteladói felületre.</p>
<p>Adatvédelmi tisztviselőt nem jelöltünk ki, mert az adatkezelés mértéke miatt a jogszabály nem írja elő.</p>'],

['Röviden', '
<ul>
<li>Az Arxon <b>csak lejátszó</b>. Nem árulunk és nem szolgáltatunk csatornákat vagy tartalmat.</li>
<li>Nincs szükség fiókra, névre vagy e-mailre. Az eszközt <b>az alkalmazás által generált MAC-cím</b> és egy titkos eszközkulcs azonosítja.</li>
<li>A listák a szerveren <b>az eszközöd kulcsával titkosítva</b> vannak – nélküle mi sem tudjuk elolvasni őket.</li>
<li>Nem használunk reklámot, analitikát vagy követő sütiket. Adatokat nem adunk el.</li>
<li>A kártyaadatokat csak a Stripe (vagy a Google / Apple áruház) látja, mi nem.</li>
</ul>'],

['Milyen adatokat kezelünk és miért', '
<table class="legal-table">
<tr><th>Adatok</th><th>Cél</th><th>Jogalap</th></tr>
<tr><td><b>Eszköz</b>: az alkalmazás által generált MAC-cím, eszközkulcs (csak hash formában), platform, regisztráció és utolsó kapcsolódás ideje, utolsó IP-cím, licenc állapota és érvényessége, opcionális eszköznév és megjegyzés</td><td>párosítás, licenc, próbaidő, visszaélések elleni védelem, ügyfélszolgálat</td><td>szerződés teljesítése (GDPR 6. cikk (1) b)); jogos érdek a biztonsághoz (f))</td></tr>
<tr><td><b>Listák</b>: név, szervercím, felhasználónév és jelszó az általad hozzáadott szolgáltatáshoz (M3U / Xtream), EPG-cím</td><td>a lista eljuttatása az eszközödre</td><td>szerződés teljesítése</td></tr>
<tr><td><b>Felhőmentés</b> (csak ha bekapcsolod): a telefonszám hash-e, hely neve (pl. „nappali“), titkosított mentés (licenc, listák, kedvencek, beállítások); megnézett filmek és sorozatok szinkronizálása</td><td>visszaállítás újratelepítés után, folytatás másik eszközön</td><td>hozzájárulás / kérésed (a), b))</td></tr>
<tr><td><b>Kedvencek eszközök között</b>: titkosított kedvenclista</td><td>kedvencek letöltése másik eszközre</td><td>szerződés teljesítése</td></tr>
<tr><td><b>„Küldés a TV-re“</b>: telefon és TV összekapcsolása (MAC és eszköznevek), egyszeri kód, ideiglenesen titkosított stream-cím</td><td>csatorna vagy videó küldése a telefonról a TV-re</td><td>szerződés teljesítése</td></tr>
<tr><td><b>Hívások és videóhívások</b> (csak ha az eszközön engedélyezve): névjegyek (MAC és az általad megadott név), automatikus fogadás, hívásnapló (ki, kit, hang/videó, állapot, idő), a kapcsolat felépítéséhez szükséges technikai adatok</td><td>a hívás összekapcsolása</td><td>szerződés teljesítése</td></tr>
<tr><td><b>Fizetés a weben</b>: e-mail, termék, összeg, pénznem, nyelv, eszköz MAC-címe vagy viszonteladói fiók, hozzájárulás a teljesítés megkezdéséhez, fizetés ideje</td><td>licencértékesítés, bizonylat, könyvelés, reklamáció</td><td>szerződés teljesítése; jogi kötelezettség (c))</td></tr>
<tr><td><b>Viszonteladók</b>: felhasználónév, jelszó (csak hash), megjelenített név, kreditek és mozgásuk, hozzárendelt eszközök</td><td>viszonteladók és licencek kezelése</td><td>szerződés teljesítése</td></tr>
<tr><td><b>Ügyfélszolgálat</b>: e-mail, üzenet, esetleg az eszköz MAC-címe</td><td>válasz a kérdésedre</td><td>jogos érdek / szerződés teljesítése</td></tr>
<tr><td><b>Technikai adatok</b>: IP-cím és időpont a szervernaplókban, próbálkozásszámlálók (IP vagy MAC hash formában)</td><td>biztonság, támadások és kulcstalálgatás elleni védelem</td><td>jogos érdek</td></tr>
</table>
<p>Nem kezeljük a neved, címed, helyadataidat, a telefonod névjegyeit és az élő adások nézési előzményeit. A felhőmentés telefonszámát nem tároljuk olvasható formában – csak a hash-ét.</p>'],

['Ami csak az eszközödön marad', '
<ul>
<li><b>Kamera és mikrofon</b> – az alkalmazás csak az általad indított vagy fogadott hívás alatt használja. Képet és hangot nem rögzítünk és nem tárolunk.</li>
<li><b>Szülői zár, kedvencek, beállítások, utolsó csatorna</b> – az eszközön tárolva (a szerverre csak mentéskor vagy kedvencek megosztásakor, titkosítva).</li>
<li><b>Részletes napló (diagnosztika)</b> – ha hibakereséshez bekapcsoljuk, csak az eszköz rendszernaplójába ír, a szerverre nem kerül.</li>
</ul>'],

['Mihez kapcsolódik az alkalmazás közvetlenül', '
<p>Az alkalmazás közvetlenül olyan szerverekhez kapcsolódik, amelyek nem a mieink, és amelyekért nem felelünk. Ezek üzemeltetői látják az IP-címedet, és saját szabályaik szerint kezelik az adatokat:</p>
<ul>
<li><b>A listád szolgáltatója</b> – az a szolgáltatás, amelynek címét és belépési adatait hozzáadtad. Az Arxonnak nincs vele szerződése.</li>
<li><b>Műsorújság-források (EPG)</b> – alapértelmezetten epgshare01.online és open-epg.com, vagy az általad megadott forrás.</li>
<li><b>STUN-szerverek</b> (Google, stun.l.google.com) – csak hívásnál, a kapcsolathoz szükséges nyilvános cím megállapítására. Maga a hívás titkosítva (WebRTC) közvetlenül az eszközök között zajlik, vagy a saját TURN-továbbítószerverünkön át; a hívás tartalmát nem tároljuk.</li>
</ul>'],

['Kinek adjuk át az adatokat', '
<ul>
<li><b>Tárhely</b> – [TÁRHELYSZOLGÁLTATÓ, pl. Webhouse s.r.o., Szlovákia]: szerver, adatbázis és e-mail.</li>
<li><b>Stripe Payments Europe, Ltd.</b> (Írország) – webes fizetés. A Stripe a fizetés feldolgozásánál önálló adatkezelő.</li>
<li><b>Google Play, Apple App Store, Samsung, LG és más áruházak</b> – ha az áruházban vásárolsz licencet, a fizetést az áruház kezeli saját feltételei szerint; mi csak a vásárlás visszaigazolását kapjuk meg.</li>
<li><b>Viszonteladó</b> – ha a licencet viszonteladó aktiválta, látja az eszközöd MAC-címét, nevét és állapotát (a listákat és jelszavakat nem).</li>
<li><b>Könyvelő és hatóságok</b> – csak számviteli bizonylatok, illetve ha jogszabály előírja.</li>
</ul>
<p>Adatokat nem adunk el, nem használunk reklámra vagy profilalkotásra, és nem hozunk joghatással járó automatizált döntést.</p>'],

['Adattovábbítás az EU-n kívülre', '
<p>Az adatokat EU-beli szerveren tároljuk. Egyes szolgáltatók (Stripe, Google) az USA-ban is kezelhetnek adatokat; ez az Európai Bizottság általános szerződési feltételei vagy az EU–US Data Privacy Framework alapján történik.</p>'],

['Meddig őrizzük az adatokat', '
<ul>
<li>Eszköz és listák – amíg az eszközt használod. Licenc nélküli eszközt, amely [12 hónapja] nem kapcsolódott, törölhetünk. Azt a listát, amelynek előfizetése több mint 7 napja lejárt, az alkalmazás törli.</li>
<li>Felhőmentés – amíg nem törlöd, vagy nem kéred a törlését.</li>
<li>„Küldés a TV-re“ – a stream-cím néhány percig, az egyszeri kód a lejártáig.</li>
<li>Hívások – a kapcsolat technikai adatai 10 percig, a befejezett hívás naplója 7 napig, a névjegyek a törlésükig.</li>
<li>Fizetések és számviteli bizonylatok – 10 évig (számviteli törvény).</li>
<li>Ügyfélszolgálati levelezés – a megoldástól számított [2 évig].</li>
<li>Szervernaplók – a tárhely beállítása szerint, általában [30 napig].</li>
</ul>'],

['Biztonság', '
<p>A kommunikáció HTTPS-en zajlik. A listák, mentések és megosztott kedvencek titkosítva vannak (AES-256-GCM) olyan kulccsal, amelyet csak az eszközöd ismer, vagy amely a telefonszámodból és PIN-kódodból származik. Az eszközkulcsokat és a viszonteladói jelszavakat csak hash formában tároljuk. A próbálkozások száma korlátozott.</p>'],

['Sütik', '
<p>A weboldalak csak a működéshez szükséges sütiket használják: <code>lang</code> (választott nyelv, 1 év), az arxonlabs.eu-n a bejelentkezési munkamenetet is. Nem használunk analitikai, marketing- vagy harmadik féltől származó követő sütiket, ezért hozzájárulás nem szükséges. Fizetéskor a Stripe oldalára irányítunk, amely saját sütiket használ.</p>'],

['Gyermekek', '
<p>Az alkalmazás nem 16 év alatti gyermekeknek szól, és tudatosan nem gyűjtünk tőlük adatot. Licencet csak nagykorú személy vásárolhat.</p>'],

['A jogaid', '
<p>Jogod van az adataidhoz való hozzáféréshez, helyesbítéshez, törléshez, az adatkezelés korlátozásához, az adathordozhatósághoz, a jogos érdeken alapuló adatkezelés elleni tiltakozáshoz, valamint a hozzájárulás bármikori visszavonásához.</p>
<p><b>Törlés kérése:</b> írj a <a href="mailto:{MAIL}">{MAIL}</a> címre, és add meg az eszköz MAC-címét (az alkalmazásban találod). Az eszközt, a listákat, a mentést és a kedvenceket 30 napon belül töröljük. A számviteli bizonylatokat a jogszabály szerint meg kell őriznünk. A listát magad is törölheted az Eszközöm oldalon, a felhőmentést pedig az alkalmazásban.</p>
<p>Ha úgy gondolod, hogy helytelenül kezeljük az adataidat, panaszt tehetsz a szlovák adatvédelmi hatóságnál (Úrad na ochranu osobných údajov SR, Hraničná 12, 820 07 Pozsony, <a href="https://dataprotection.gov.sk" rel="noopener">dataprotection.gov.sk</a>), vagy a lakóhelyed szerinti EU-tagállam hatóságánál (Magyarországon: NAIH, <a href="https://naih.hu" rel="noopener">naih.hu</a>).</p>'],

['Változások', '
<p>Lényeges változás esetén (pl. új szolgáltató, akinek adatot adunk át) frissítjük ezt az oldalt és a hatálybalépés dátumát, és erről az alkalmazásban vagy a weboldalon tájékoztatunk.</p>'],
],

'en' => [
['Who processes your data', '
<p>The controller is {FIRM}, {ADDR}, company ID (IČO) {ICO}, registered in {REG} ("we"). Contact for data protection questions: <a href="mailto:{MAIL}">{MAIL}</a>.</p>
<p>This policy applies to the <b>Arxon Player</b> app on all platforms (Android TV, Android mobile, iPhone/iPad, Samsung Tizen, LG webOS, Windows and others), the websites arxonsite.com and arxonlabs.eu, the app portal, the Arxon Admin app and the reseller panel.</p>
<p>We have not appointed a Data Protection Officer, as the law does not require one for the scale of our processing.</p>'],

['In short', '
<ul>
<li>Arxon is <b>only a player</b>. We do not sell or provide any channels or content.</li>
<li>You don\'t need an account, name or e-mail. A device is identified by a <b>MAC address generated by the app</b> and a secret device key.</li>
<li>Playlists are stored on the server <b>encrypted with your device\'s key</b> – without it, not even we can read them.</li>
<li>We use no advertising, no analytics and no tracking cookies. We do not sell data.</li>
<li>Card details are seen only by Stripe (or the Google / Apple store), not by us.</li>
</ul>'],

['What data we process and why', '
<table class="legal-table">
<tr><th>Data</th><th>Purpose</th><th>Legal basis</th></tr>
<tr><td><b>Device</b>: MAC address generated by the app, device key (stored only as a hash), platform, registration and last-connection time, last IP address, licence status and validity, optional device name and note</td><td>pairing, licence, trial, abuse prevention, support</td><td>performance of contract (Art. 6(1)(b) GDPR); legitimate interest in security (f)</td></tr>
<tr><td><b>Playlists</b>: name, server address, username and password for the service you add yourself (M3U / Xtream), EPG address</td><td>delivering the playlist to your device</td><td>performance of contract</td></tr>
<tr><td><b>Cloud backup</b> (only if you turn it on): hash of your phone number, place name (e.g. "living room"), encrypted backup of licence, playlists, favourites and settings; sync of watched movies and series</td><td>restore after reinstalling, continue watching on another device</td><td>consent / your request ((a), (b))</td></tr>
<tr><td><b>Favourites across devices</b>: encrypted favourites list</td><td>downloading favourites to another device</td><td>performance of contract</td></tr>
<tr><td><b>"Send to TV"</b>: link between phone and TV (MACs and device names), one-time code, temporarily encrypted stream address</td><td>sending a channel or video from phone to TV</td><td>performance of contract</td></tr>
<tr><td><b>Voice and video calls</b> (only if enabled for the device): contacts (MAC and the name you enter), auto-answer, call record (who, to whom, audio/video, state, time), technical data to set up the connection</td><td>connecting the call</td><td>performance of contract</td></tr>
<tr><td><b>Web payments</b>: e-mail, product, amount, currency, language, device MAC or reseller account, consent to immediate performance, payment time</td><td>selling the licence, receipt, accounting, complaints</td><td>performance of contract; legal obligation (c)</td></tr>
<tr><td><b>Resellers</b>: username, password (hash only), display name, credits and their history, assigned devices</td><td>managing resellers and licences</td><td>performance of contract</td></tr>
<tr><td><b>Support</b>: e-mail, message, possibly device MAC</td><td>answering your question</td><td>legitimate interest / performance of contract</td></tr>
<tr><td><b>Technical data</b>: IP address and time in server logs, attempt counters (IP or MAC as a hash)</td><td>security, protection against attacks and key guessing</td><td>legitimate interest</td></tr>
</table>
<p>We do not process your name, address, location, phone contacts or live-TV viewing history. The cloud-backup phone number is not stored in readable form – only its hash.</p>'],

['What stays only on your device', '
<ul>
<li><b>Camera and microphone</b> – used only during a call you start or accept. We do not record or store video or audio.</li>
<li><b>Parental lock, favourites, settings, last channel</b> – stored on the device (sent to the server only for backup or favourites sharing, encrypted).</li>
<li><b>Detailed log (diagnostics)</b> – if we enable it to troubleshoot, it writes only to the device\'s system log and is not sent to the server.</li>
</ul>'],

['What the app connects to directly', '
<p>The app connects directly to servers that are not ours and for which we are not responsible. Their operators see your IP address and process data under their own policies:</p>
<ul>
<li><b>Your playlist provider</b> – the service whose address and credentials you added. Arxon has no contract with it.</li>
<li><b>Programme guide sources (EPG)</b> – by default epgshare01.online and open-epg.com, or a source you enter.</li>
<li><b>STUN servers</b> (Google, stun.l.google.com) – only during calls, to discover the public address needed for the connection. The call itself is encrypted (WebRTC) and runs directly between devices or via our TURN relay; we do not store call content.</li>
</ul>'],

['Who we share data with', '
<ul>
<li><b>Hosting</b> – [HOSTING PROVIDER, e.g. Webhouse s.r.o., Slovakia]: server, database and e-mail.</li>
<li><b>Stripe Payments Europe, Ltd.</b> (Ireland) – web payments. Stripe acts as an independent controller for payment processing.</li>
<li><b>Google Play, Apple App Store, Samsung, LG and other stores</b> – if you buy a licence in a store, the store handles payment under its own terms; we only receive a purchase confirmation.</li>
<li><b>Reseller</b> – if a reseller activated your licence, they see your device\'s MAC, name and status (not playlists or passwords).</li>
<li><b>Accountant and authorities</b> – accounting records only, or where required by law.</li>
</ul>
<p>We do not sell data, use it for advertising or profiling, or make automated decisions with legal effects.</p>'],

['Transfers outside the EU', '
<p>We store data on a server in the EU. Some providers (Stripe, Google) may also process data in the USA, based on the European Commission\'s Standard Contractual Clauses or the EU–US Data Privacy Framework.</p>'],

['How long we keep data', '
<ul>
<li>Device and playlists – as long as you use the device. A device without a licence that has not connected for [12 months] may be deleted. A playlist whose provider subscription expired more than 7 days ago is deleted by the app.</li>
<li>Cloud backup – until you delete it or ask us to.</li>
<li>"Send to TV" – stream address for a few minutes, one-time code until it expires.</li>
<li>Calls – connection data 10 minutes, ended-call record 7 days, contacts until you delete them.</li>
<li>Payments and accounting records – 10 years (Accounting Act).</li>
<li>Support correspondence – [2 years] after resolution.</li>
<li>Server logs – per hosting settings, usually up to [30 days].</li>
</ul>'],

['Security', '
<p>All communication uses HTTPS. Playlists, backups and shared favourites are encrypted (AES-256-GCM) with a key known only to your device or derived from your phone number and PIN. Device keys and reseller passwords are stored only as hashes. Attempts are rate-limited.</p>'],

['Cookies', '
<p>The websites use only strictly necessary cookies: <code>lang</code> (chosen language, 1 year) and, on arxonlabs.eu, the login session. We use no analytics, marketing or third-party tracking cookies, so no consent is needed. When paying you are redirected to Stripe, which uses its own cookies.</p>'],

['Children', '
<p>The app is not intended for children under 16 and we do not knowingly collect their data. Only adults may purchase a licence.</p>'],

['Your rights', '
<p>You have the right to access, rectification, erasure, restriction of processing, data portability, to object to processing based on legitimate interest, and to withdraw consent at any time.</p>
<p><b>How to request deletion:</b> write to <a href="mailto:{MAIL}">{MAIL}</a> with your device\'s MAC address (shown in the app). We delete the device, playlists, backup and favourites within 30 days. Accounting records must be kept as required by law. You can also delete a playlist yourself on the My device page and your cloud backup in the app.</p>
<p>If you believe we handle your data incorrectly, you can lodge a complaint with the Slovak Data Protection Authority (Úrad na ochranu osobných údajov SR, Hraničná 12, 820 07 Bratislava, <a href="https://dataprotection.gov.sk" rel="noopener">dataprotection.gov.sk</a>) or the authority in the EU country where you live.</p>'],

['Changes', '
<p>For a material change (e.g. a new provider we share data with) we will update this page and the effective date and let you know in the app or on the website.</p>'],
],
];

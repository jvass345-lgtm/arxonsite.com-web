<?php
/**
 * Obchodné podmienky a licenčné podmienky (EULA) - Arxon Player.
 * NÁVRH k 7. 11. 2026. Pred spustením predaja skontroluj s právnikom / účtovníčkou
 * a doplň údaje firmy v site-config.php (company_*, legal_date).
 */

return [
'sk' => [
['Úvodné ustanovenia', '
<p>Tieto obchodné a licenčné podmienky (ďalej „podmienky“) upravujú používanie aplikácie <b>Arxon Player</b> na všetkých platformách, nákup licencií a kreditov a používanie webov arxonsite.com a arxonlabs.eu.</p>
<p>Poskytovateľ a predávajúci: {FIRM}[[, {ADDR}]][[, IČO {ICO}]][[, DIČ/IČ DPH {DIC}]][[, zapísaná v {REG}]], e-mail <a href="mailto:{MAIL}">{MAIL}</a> (ďalej „my“ alebo „predávajúci“).</p>
<p>Inštaláciou alebo používaním aplikácie a nákupom licencie s týmito podmienkami súhlasíš. Ak s nimi nesúhlasíš, aplikáciu nepoužívaj.</p>'],

['Čo Arxon je a čo nie je', '
<p>Arxon Player je <b>prehrávač médií</b>. Prehráva playlisty (M3U, Xtream) a programový sprievodca (EPG), ktoré si do neho pridáš sám.</p>
<p><b>Arxon neobsahuje, nepredáva ani nesprostredkúva žiadne televízne kanály, filmy, seriály ani iný obsah</b> a nemá zmluvu so žiadnym poskytovateľom obsahu. Za obsah, ktorý prehrávaš, zodpovedá jeho poskytovateľ a ty. Smieš prehrávať len obsah, na ktorý máš právo; používanie aplikácie na prehrávanie nelegálneho obsahu je zakázané.</p>'],

['Skúšobná doba', '
<p>Každé nové zariadenie má <b>7 dní skúšobnej doby zadarmo</b> s plnou funkčnosťou. Po jej uplynutí je na prehrávanie potrebná licencia. Skúšobná doba sa neobnovuje preinštalovaním ani obnovením zálohy.</p>'],

['Licencie a ceny', '
<ul>
<li><b>Ročná licencia</b> – {YEAR}, platí 12 mesiacov od aktivácie; ďalší nákup ju predĺži o 12 mesiacov. Neobnovuje sa automaticky.</li>
<li><b>Doživotná licencia</b> – {LIFE}, platí na jednom zariadení po celú dobu, kým službu Arxon prevádzkujeme (pozri čl. „Dostupnosť služby“).</li>
</ul>
<p>Ceny sú konečné vrátane DPH, ak sa uplatňuje. Cena je rovnaká na webe, v obchodoch aj u predajcov; obchody môžu cenu v inej mene zaokrúhliť.</p>
<p>Licencia ti dáva nevýhradné, neprenosné právo používať aplikáciu na jednom zariadení. Aplikácia ostáva naším vlastníctvom.</p>'],

['Jedno zariadenie', '
<p>Licencia sa viaže na <b>jedno zariadenie</b> (jednu MAC adresu, ktorú vygenerovala aplikácia) a na iné zariadenie sa neprenáša – ani pri výmene televízora, ani pri obnovení cloudovej zálohy na inom zariadení. Po preinštalovaní aplikácie na tom istom zariadení licencia ostáva.</p>
<p>Ak zariadenie v prvom roku licencie preukázateľne prestane fungovať, môžeme licenciu podľa vlastného uváženia presunúť – napíš podpore.</p>'],

['Objednávka a platba', '
<p>Licenciu môžeš získať tromi spôsobmi:</p>
<ul>
<li><b>Na webe arxonlabs.eu</b> – platba cez Stripe (karta, Apple Pay, Google Pay). Zmluva vzniká zaplatením.</li>
<li><b>V obchode s aplikáciami</b> (Google Play, App Store a ďalšie) – nákup v aplikácii. Platbu, doklad a vrátenie peňazí vtedy spravuje obchod podľa svojich podmienok.</li>
<li><b>U predajcu</b> – predajca ti licenciu aktivuje za cenu a podmienok, ktoré s ním dohodneš. Predajca nie je náš zástupca; reklamáciu platby rieš s ním, funkčnosť licencie s nami.</li>
</ul>
<p>Doklad o platbe na webe príde na e-mail, ktorý zadáš.</p>'],

['Dodanie', '
<p>Licencia sa aktivuje automaticky po prijatí platby, spravidla do jednej minúty; v aplikácii sa prejaví pri najbližšom spojení so serverom. Ak sa tak nestane do 24 hodín, napíš podpore s MAC adresou zariadenia.</p>'],

['Odstúpenie od zmluvy', '
<p>Licencia je digitálny obsah dodaný okamžite. Pred platbou na webe výslovne súhlasíš so začatím plnenia pred uplynutím 14-dňovej lehoty a berieš na vedomie, že tým <b>strácaš právo odstúpiť od zmluvy</b> (zákon č. 108/2024 Z. z. o ochrane spotrebiteľa). Preto si aplikáciu najprv vyskúšaj počas skúšobnej doby.</p>
<p>Pri nákupe v obchode s aplikáciami platia pravidlá vrátenia peňazí daného obchodu (napr. Google Play, Apple).</p>'],

['Reklamácie', '
<p>Ak licencia po zaplatení nefunguje alebo aplikácia nefunguje tak, ako je opísané, napíš na <a href="mailto:{MAIL}">{MAIL}</a> s MAC adresou zariadenia a popisom problému. Reklamáciu vybavíme bez zbytočného odkladu, najneskôr do 30 dní – opravou, náhradným riešením, primeranou zľavou alebo vrátením ceny.</p>
<p>Za vadu sa nepovažuje nefunkčnosť obsahu tretích strán (kanály, playlisty, EPG), výpadok internetu, nepodporované alebo upravené zariadenie, ani obmedzenie zo strany poskytovateľa obsahu.</p>'],

['Pravidlá používania', '
<p>Nesmieš:</p>
<ul>
<li>prehrávať obsah, na ktorý nemáš právo, alebo aplikáciu používať v rozpore so zákonom;</li>
<li>aplikáciu kopírovať, upravovať, spätne prekladať (reverse engineering) alebo obchádzať licenciu, okrem prípadov, ktoré výslovne povoľuje zákon;</li>
<li>preťažovať, testovať alebo napádať naše servery, hádať kľúče iných zariadení;</li>
<li>predávať licencie ďalej, ak nie si náš registrovaný predajca.</li>
</ul>
<p>Pri porušení môžeme licenciu alebo prístup zariadenia zablokovať bez náhrady.</p>'],

['Hovory a videohovory', '
<p>Hovory sú doplnková funkcia, ktorú zapíname len pre vybrané zariadenia a ktorá môže byť v skúšobnej prevádzke. <b>Nie je náhradou telefónu a nedá sa ňou volať na tiesňové linky (112).</b> Nezaručujeme jej nepretržitú dostupnosť ani kvalitu spojenia.</p>'],

['Dostupnosť služby a aktualizácie', '
<p>Aplikácia potrebuje na párovanie, licencie a playlisty náš server. Snažíme sa o nepretržitú prevádzku, no nezaručujeme ju (údržba, výpadky hostingu, siete).</p>
<p>Aplikáciu môžeme aktualizovať, meniť alebo pridávať funkcie. Ak by sme službu Arxon natrvalo ukončili, oznámime to aspoň <b>6 mesiacov vopred</b>; ak ukončenie nastane menej ako 12 mesiacov po kúpe licencie, vrátime pomernú časť ceny.</p>'],

['Predajcovia', '
<p>Registrovaný predajca nakupuje kredity vopred v balíkoch po {PACK} ks za {CREDIT} za kredit; 1 kredit = 1 doživotná licencia. Kredity sú nevratné a neprepadajú, zostatok nemôže klesnúť pod nulu. Predajca vidí len svoje zariadenia, zodpovedá za vlastný predaj zákazníkom a nesmie uvádzať, že Arxon obsahuje alebo dodáva obsah. Pri porušení podmienok môžeme účet predajcu zrušiť.</p>'],

['Zodpovednosť', '
<p>Aplikáciu poskytujeme „tak, ako je“. V rozsahu, v akom to zákon dovoľuje, nezodpovedáme za obsah tretích strán, za stratu dát v zariadení, ani za nepriame škody a ušlý zisk. Naša celková zodpovednosť je obmedzená sumou, ktorú si za licenciu zaplatil. Tieto obmedzenia sa nevzťahujú na škodu spôsobenú úmyselne alebo hrubou nedbanlivosťou ani na práva spotrebiteľa, ktoré nemožno vylúčiť.</p>'],

['Aplikácie z App Store', '
<p>Ak si aplikáciu stiahol z Apple App Store, platí navyše: tieto podmienky sú medzi tebou a nami, nie so spoločnosťou Apple. Apple nezodpovedá za aplikáciu, jej údržbu, podporu ani za nároky súvisiace s jej používaním. Ak aplikácia nespĺňa záruku, môžeš to oznámiť Apple a Apple ti vráti kúpnu cenu; inú povinnosť Apple nemá. Apple a jej dcérske spoločnosti sú oprávnenými treťými stranami týchto podmienok a môžu ich voči tebe vymáhať. Inak platí štandardná licenčná zmluva Apple (Licensed Application End User License Agreement).</p>'],

['Osobné údaje', '
<p>Ako spracúvame údaje, popisujú <a href="sukromie.php">Zásady ochrany osobných údajov</a>.</p>'],

['Riešenie sporov', '
<p>Ak nie si spokojný s vybavením reklamácie, môžeš sa na nás obrátiť so žiadosťou o nápravu. Ak ju zamietneme alebo do 30 dní neodpovieme, môžeš podať návrh na alternatívne riešenie sporu Slovenskej obchodnej inšpekcii (<a href="https://www.soi.sk" rel="noopener">soi.sk</a>) alebo inému oprávnenému subjektu. Dozorným orgánom je Slovenská obchodná inšpekcia.</p>'],

['Záverečné ustanovenia', '
<p>Podmienky sa riadia právom Slovenskej republiky; spotrebiteľ tým nestráca ochranu podľa práva štátu, v ktorom má bydlisko. Záväzné je slovenské znenie. Podmienky môžeme zmeniť; zmena sa netýka už zaplatených licencií v neprospech kupujúceho a o podstatnej zmene ťa upozorníme vopred. [[Podmienky sú účinné od {DATE}.]]</p>'],
],

'hu' => [
['Bevezető rendelkezések', '
<p>Ezek az általános szerződési és licencfeltételek (a továbbiakban „feltételek“) szabályozzák az <b>Arxon Player</b> alkalmazás használatát minden platformon, a licencek és kreditek vásárlását, valamint az arxonsite.com és arxonlabs.eu weboldalak használatát.</p>
<p>Szolgáltató és eladó: {FIRM}[[, {ADDR}]][[, cégazonosító (IČO) {ICO}]][[, adószám {DIC}]][[, nyilvántartva: {REG}]], e-mail <a href="mailto:{MAIL}">{MAIL}</a> (a továbbiakban „mi“ vagy „eladó“).</p>
<p>Az alkalmazás telepítésével vagy használatával és a licenc megvásárlásával elfogadod ezeket a feltételeket. Ha nem értesz egyet velük, ne használd az alkalmazást.</p>'],

['Mi az Arxon, és mi nem', '
<p>Az Arxon Player <b>médialejátszó</b>. Az általad hozzáadott listákat (M3U, Xtream) és műsorújságot (EPG) játssza le.</p>
<p><b>Az Arxon nem tartalmaz, nem árul és nem közvetít tévécsatornákat, filmeket, sorozatokat vagy más tartalmat</b>, és egyetlen tartalomszolgáltatóval sincs szerződése. A lejátszott tartalomért annak szolgáltatója és te felelsz. Csak olyan tartalmat játszhatsz le, amelyhez jogod van; az alkalmazás jogellenes tartalom lejátszására való használata tilos.</p>'],

['Próbaidő', '
<p>Minden új eszköz <b>7 napos ingyenes próbaidőt</b> kap teljes funkcionalitással. Ezt követően a lejátszáshoz licenc szükséges. A próbaidő újratelepítéssel vagy mentés visszaállításával nem újul meg.</p>'],

['Licencek és árak', '
<ul>
<li><b>Éves licenc</b> – {YEAR}, az aktiválástól 12 hónapig érvényes; újabb vásárlás 12 hónappal meghosszabbítja. Nem újul meg automatikusan.</li>
<li><b>Örökös licenc</b> – {LIFE}, egy eszközön érvényes mindaddig, amíg az Arxon szolgáltatást üzemeltetjük (lásd „A szolgáltatás elérhetősége“).</li>
</ul>
<p>Az árak végső árak, adott esetben áfával. Az ár a weben, az áruházakban és a viszonteladóknál is azonos; az áruházak más pénznemben kerekíthetnek.</p>
<p>A licenc nem kizárólagos, át nem ruházható jogot ad az alkalmazás egy eszközön történő használatára. Az alkalmazás a mi tulajdonunk marad.</p>'],

['Egy eszköz', '
<p>A licenc <b>egy eszközhöz</b> (az alkalmazás által generált egy MAC-címhez) kötődik, és másik eszközre nem vihető át – tévécsere vagy a felhőmentés másik eszközön történő visszaállítása esetén sem. Ugyanazon az eszközön történő újratelepítés után a licenc megmarad.</p>
<p>Ha az eszköz a licenc első évében igazoltan meghibásodik, saját döntésünk szerint áthelyezhetjük a licencet – írj az ügyfélszolgálatnak.</p>'],

['Rendelés és fizetés', '
<p>Licencet háromféleképpen szerezhetsz:</p>
<ul>
<li><b>Az arxonlabs.eu weboldalon</b> – fizetés a Stripe-on keresztül (kártya, Apple Pay, Google Pay). A szerződés a fizetéssel jön létre.</li>
<li><b>Alkalmazásáruházban</b> (Google Play, App Store és mások) – alkalmazáson belüli vásárlás. A fizetést, a bizonylatot és a visszatérítést ilyenkor az áruház kezeli saját feltételei szerint.</li>
<li><b>Viszonteladónál</b> – a viszonteladó az általatok egyeztetett áron és feltételekkel aktiválja a licencet. A viszonteladó nem a képviselőnk; a fizetéssel kapcsolatos panaszt vele, a licenc működését velünk intézd.</li>
</ul>
<p>A webes fizetés bizonylatát a megadott e-mail-címre küldjük.</p>'],

['Teljesítés', '
<p>A licenc a fizetés beérkezése után automatikusan aktiválódik, általában egy percen belül; az alkalmazásban a szerverrel való következő kapcsolatkor jelenik meg. Ha 24 órán belül nem történik meg, írj az ügyfélszolgálatnak az eszköz MAC-címével.</p>'],

['Elállás', '
<p>A licenc azonnal szolgáltatott digitális tartalom. A webes fizetés előtt kifejezetten hozzájárulsz a teljesítés 14 napos határidő lejárta előtti megkezdéséhez, és tudomásul veszed, hogy ezzel <b>elveszíted az elállási jogodat</b> (a fogyasztóvédelemről szóló 108/2024. sz. szlovák törvény). Ezért előbb próbáld ki az alkalmazást a próbaidő alatt.</p>
<p>Alkalmazásáruházban történő vásárlásnál az adott áruház visszatérítési szabályai érvényesek (pl. Google Play, Apple).</p>'],

['Reklamáció', '
<p>Ha a licenc fizetés után nem működik, vagy az alkalmazás nem a leírtak szerint működik, írj a <a href="mailto:{MAIL}">{MAIL}</a> címre az eszköz MAC-címével és a probléma leírásával. A reklamációt indokolatlan késedelem nélkül, legkésőbb 30 napon belül intézzük – javítással, más megoldással, megfelelő árengedménnyel vagy a vételár visszatérítésével.</p>
<p>Nem minősül hibának harmadik fél tartalmának (csatornák, listák, EPG) működésképtelensége, az internet kiesése, nem támogatott vagy módosított eszköz, sem a tartalomszolgáltató által bevezetett korlátozás.</p>'],

['Használati szabályok', '
<p>Tilos:</p>
<ul>
<li>olyan tartalmat lejátszani, amelyhez nincs jogod, vagy az alkalmazást jogszabályba ütköző módon használni;</li>
<li>az alkalmazást másolni, módosítani, visszafejteni (reverse engineering) vagy a licencet megkerülni, kivéve ha azt jogszabály kifejezetten megengedi;</li>
<li>szervereinket túlterhelni, tesztelni vagy támadni, más eszközök kulcsait találgatni;</li>
<li>licenceket továbbértékesíteni, ha nem vagy regisztrált viszonteladónk.</li>
</ul>
<p>Megsértés esetén a licencet vagy az eszköz hozzáférését kártérítés nélkül letilthatjuk.</p>'],

['Hívások és videóhívások', '
<p>A hívás kiegészítő funkció, amelyet csak kiválasztott eszközökön kapcsolunk be, és amely próbaüzemben lehet. <b>Nem helyettesíti a telefont, és nem lehet vele segélyhívó számot (112) hívni.</b> Folyamatos elérhetőségét és a kapcsolat minőségét nem garantáljuk.</p>'],

['A szolgáltatás elérhetősége és frissítések', '
<p>Az alkalmazásnak a párosításhoz, licencekhez és listákhoz szüksége van a szerverünkre. Törekszünk a folyamatos működésre, de nem garantáljuk (karbantartás, tárhely- vagy hálózati kiesés).</p>
<p>Az alkalmazást frissíthetjük, módosíthatjuk, új funkciókkal bővíthetjük. Ha az Arxon szolgáltatást véglegesen megszüntetnénk, ezt legalább <b>6 hónappal előre</b> bejelentjük; ha a megszűnés a licenc vásárlása után 12 hónapon belül következik be, az ár arányos részét visszatérítjük.</p>'],

['Viszonteladók', '
<p>A regisztrált viszonteladó előre vásárol krediteket {PACK} darabos csomagokban, kreditenként {CREDIT} áron; 1 kredit = 1 örökös licenc. A kreditek nem visszatéríthetők és nem járnak le, az egyenleg nem lehet negatív. A viszonteladó csak a saját eszközeit látja, felel a vevőinek történő saját értékesítéséért, és nem állíthatja, hogy az Arxon tartalmat tartalmaz vagy szolgáltat. A feltételek megsértése esetén a viszonteladói fiókot megszüntethetjük.</p>'],

['Felelősség', '
<p>Az alkalmazást „ahogy van“ alapon biztosítjuk. A jogszabály által megengedett mértékben nem felelünk harmadik fél tartalmáért, az eszközön lévő adatok elvesztéséért, sem a közvetett károkért és elmaradt haszonért. Teljes felelősségünk a licencért fizetett összegre korlátozódik. Ezek a korlátozások nem vonatkoznak a szándékosan vagy súlyos gondatlansággal okozott kárra, sem a fogyasztó ki nem zárható jogaira.</p>'],

['App Store-ból letöltött alkalmazás', '
<p>Ha az alkalmazást az Apple App Store-ból töltötted le, ezen felül érvényes: ezek a feltételek közted és köztünk állnak fenn, nem az Apple-lel. Az Apple nem felel az alkalmazásért, annak karbantartásáért, támogatásáért, sem a használatával kapcsolatos igényekért. Ha az alkalmazás nem felel meg a jótállásnak, jelezheted az Apple-nek, és az Apple visszatéríti a vételárat; más kötelezettsége az Apple-nek nincs. Az Apple és leányvállalatai e feltételek kedvezményezett harmadik felei, és érvényesíthetik azokat veled szemben. Egyebekben az Apple általános licencszerződése (Licensed Application End User License Agreement) érvényes.</p>'],

['Személyes adatok', '
<p>Az adatkezelést az <a href="sukromie.php">Adatvédelmi tájékoztató</a> írja le.</p>'],

['Vitarendezés', '
<p>Ha nem vagy elégedett a reklamáció intézésével, jogorvoslati kérelemmel fordulhatsz hozzánk. Ha elutasítjuk, vagy 30 napon belül nem válaszolunk, alternatív vitarendezést kezdeményezhetsz a Szlovák Kereskedelmi Felügyeletnél (Slovenská obchodná inšpekcia, <a href="https://www.soi.sk" rel="noopener">soi.sk</a>) vagy más jogosult szervnél. Magyarországi lakosként a lakóhelyed szerinti békéltető testülethez is fordulhatsz.</p>'],

['Záró rendelkezések', '
<p>A feltételekre a Szlovák Köztársaság joga irányadó; a fogyasztó ezzel nem veszíti el a lakóhelye szerinti állam jogának védelmét. A kötelező érvényű szöveg a szlovák nyelvű. A feltételeket módosíthatjuk; a módosítás a már kifizetett licenceket a vevő hátrányára nem érinti, és lényeges változásról előre értesítünk. [[A feltételek hatályosak: {DATE}.]]</p>'],
],

'en' => [
['Introduction', '
<p>These terms and licence conditions ("terms") govern the use of the <b>Arxon Player</b> app on all platforms, the purchase of licences and credits, and the use of the arxonsite.com and arxonlabs.eu websites.</p>
<p>Provider and seller: {FIRM}[[, {ADDR}]][[, company ID (IČO) {ICO}]][[, tax/VAT ID {DIC}]][[, registered in {REG}]], e-mail <a href="mailto:{MAIL}">{MAIL}</a> ("we" or "the seller").</p>
<p>By installing or using the app and buying a licence you agree to these terms. If you do not agree, do not use the app.</p>'],

['What Arxon is and isn\'t', '
<p>Arxon Player is a <b>media player</b>. It plays playlists (M3U, Xtream) and programme guides (EPG) that you add yourself.</p>
<p><b>Arxon does not contain, sell or broker any TV channels, movies, series or other content</b> and has no contract with any content provider. The provider of the content and you are responsible for what you play. You may only play content you have the right to; using the app to play illegal content is prohibited.</p>'],

['Free trial', '
<p>Every new device gets a <b>7-day free trial</b> with full functionality. After that a licence is required for playback. The trial is not renewed by reinstalling or restoring a backup.</p>'],

['Licences and prices', '
<ul>
<li><b>1-year licence</b> – {YEAR}, valid for 12 months from activation; another purchase extends it by 12 months. It does not renew automatically.</li>
<li><b>Lifetime licence</b> – {LIFE}, valid on one device for as long as we operate the Arxon service (see "Service availability").</li>
</ul>
<p>Prices are final, including VAT where applicable. The price is the same on the web, in stores and with resellers; stores may round prices in other currencies.</p>
<p>A licence gives you a non-exclusive, non-transferable right to use the app on one device. The app remains our property.</p>'],

['One device', '
<p>A licence is tied to <b>one device</b> (one MAC address generated by the app) and cannot be transferred to another device – not when replacing a TV, nor when restoring a cloud backup on a different device. Reinstalling the app on the same device keeps the licence.</p>
<p>If the device demonstrably fails within the first year of the licence, we may move the licence at our discretion – contact support.</p>'],

['Order and payment', '
<p>You can get a licence in three ways:</p>
<ul>
<li><b>On arxonlabs.eu</b> – payment via Stripe (card, Apple Pay, Google Pay). The contract is concluded on payment.</li>
<li><b>In an app store</b> (Google Play, App Store and others) – in-app purchase. Payment, receipt and refunds are then handled by the store under its own terms.</li>
<li><b>From a reseller</b> – the reseller activates the licence at the price and terms you agree with them. Resellers are not our agents; handle payment complaints with them and licence functionality with us.</li>
</ul>
<p>The receipt for a web payment is sent to the e-mail you provide.</p>'],

['Delivery', '
<p>The licence is activated automatically once payment is received, usually within a minute; the app picks it up at its next connection to the server. If this does not happen within 24 hours, contact support with your device\'s MAC address.</p>'],

['Right of withdrawal', '
<p>A licence is digital content supplied immediately. Before paying on the web you expressly agree to performance starting before the 14-day withdrawal period ends and acknowledge that you thereby <b>lose your right of withdrawal</b> (Slovak Consumer Protection Act No. 108/2024 Coll.). Please try the app during the free trial first.</p>
<p>For purchases in an app store, that store\'s refund rules apply (e.g. Google Play, Apple).</p>'],

['Complaints', '
<p>If your licence does not work after payment, or the app does not work as described, write to <a href="mailto:{MAIL}">{MAIL}</a> with your device\'s MAC address and a description. We handle complaints without undue delay and within 30 days at the latest – by repair, an alternative solution, a reasonable discount or a refund.</p>
<p>The following are not defects: third-party content not working (channels, playlists, EPG), internet outages, unsupported or modified devices, or restrictions imposed by a content provider.</p>'],

['Acceptable use', '
<p>You must not:</p>
<ul>
<li>play content you have no right to, or use the app unlawfully;</li>
<li>copy, modify, reverse-engineer the app or circumvent the licence, except where the law expressly allows it;</li>
<li>overload, probe or attack our servers, or guess other devices\' keys;</li>
<li>resell licences unless you are our registered reseller.</li>
</ul>
<p>In case of breach we may block the licence or the device\'s access without compensation.</p>'],

['Voice and video calls', '
<p>Calls are an additional feature enabled only for selected devices and may be in trial operation. <b>They do not replace a phone and cannot be used to call emergency numbers (112).</b> We do not guarantee continuous availability or call quality.</p>'],

['Service availability and updates', '
<p>The app needs our server for pairing, licences and playlists. We aim for continuous operation but do not guarantee it (maintenance, hosting or network outages).</p>
<p>We may update, change or add features to the app. If we were to shut down the Arxon service permanently, we will announce it at least <b>6 months in advance</b>; if the shutdown happens less than 12 months after you bought a licence, we will refund a pro-rata part of the price.</p>'],

['Resellers', '
<p>A registered reseller buys credits in advance in packs of {PACK} at {CREDIT} per credit; 1 credit = 1 lifetime licence. Credits are non-refundable and do not expire; the balance can never go below zero. A reseller sees only their own devices, is responsible for their own sales to customers and must not claim that Arxon contains or supplies content. We may close a reseller account for breach of these terms.</p>'],

['Liability', '
<p>The app is provided "as is". To the extent permitted by law we are not liable for third-party content, loss of data on your device, or indirect damage and lost profits. Our total liability is limited to the amount you paid for the licence. These limits do not apply to damage caused intentionally or by gross negligence, nor to consumer rights that cannot be excluded.</p>'],

['Apps from the App Store', '
<p>If you downloaded the app from the Apple App Store, the following also applies: these terms are between you and us, not Apple. Apple is not responsible for the app, its maintenance, support, or any claims relating to its use. If the app fails to conform to any warranty, you may notify Apple and Apple will refund the purchase price; Apple has no other obligation. Apple and its subsidiaries are third-party beneficiaries of these terms and may enforce them against you. Otherwise Apple\'s standard Licensed Application End User License Agreement applies.</p>'],

['Personal data', '
<p>How we process data is described in the <a href="sukromie.php">Privacy policy</a>.</p>'],

['Dispute resolution', '
<p>If you are not satisfied with how a complaint was handled, you may ask us for redress. If we reject it or do not reply within 30 days, you may submit a request for alternative dispute resolution to the Slovak Trade Inspection (Slovenská obchodná inšpekcia, <a href="https://www.soi.sk" rel="noopener">soi.sk</a>) or another authorised body, or to the ADR body in your EU country of residence.</p>'],

['Final provisions', '
<p>These terms are governed by Slovak law; as a consumer you keep the protection of the law of your country of residence. The Slovak version is binding. We may change these terms; changes do not affect already paid licences to the buyer\'s detriment, and we will notify you of material changes in advance. [[These terms are effective from {DATE}.]]</p>'],
],
];

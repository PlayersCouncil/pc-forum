<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Kiekvienos konferencijos administratorius gali leisti arba išjungti tam tikrų tipų priedus. Jei nesate tikri, kokie priedai yra leidžiami, kreipkitės pagalbos pas administratorių.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Kokie priedai yra leidžiami šioje konferencijoje?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Norėdami rasti savo pridėtų priedų sąrašą, eikite į savo asmeninį skyrių ir spustelėkite nuorodą „Priedai“.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Kaip galiu rasti savo priedus?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Priedai',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Prenumeratos ir žymės',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Pranešimų formatavimas ir kuriamų temų tipai',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Draugai ir priešai',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Vartotojo ir grupės lygiai',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'Informacija apie phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Įėjimas į konferenciją ir registracija',
	'HELP_FAQ_BLOCK_PMS'	=> 'Asmeninės žinutės',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Pranešimų kūrimas',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Ieškoti forumuose',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Vartotojo parinktys ir nustatymai',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'phpBB 3.0 versijoje žymės buvo labiau panašios į žymes jūsų žiniatinklio naršyklėje. Negaudavote jokių įspėjimų apie įvykusius pakeitimus. phpBB 3.1 versijoje žymės labiau primena temų prenumeratas. Galite gauti pranešimus apie atnaujinimus temos, kurią pažymėjote. Jeigu užsiprenumeruosite, gausite pranešimus apie pasikeitimus temoje ar forume. Žymių ir prenumeratų pranešimų nustatymus galima nustatyti asmeninės skilties skirtuke „Asmeniniai nustatymai“.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Kuo žymės skiriasi nuo prenumeratos?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Norėdami užsiprenumeruoti konkretų forumą, atitinkamo forumo peržiūros puslapio apačioje spustelėkite nuorodą „Prenumeruoti forumą“.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Kaip galiu užsiprenumeruoti konkretų forumą?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Norėdami atsisakyti prenumeratos, eikite į savo asmeninę skiltį ir spustelėkite nuorodą „Prenumeratos“.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Kaip galiu atsisakyti prenumeratos?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Galite pažymėti arba užsiprenumeruoti konkrečią temą spustelėdami atitinkamą nuorodą meniu „Tvarkyti temą“, kuri yra temos peržiūros puslapio viršuje ir apačioje.<br />Siųsdami pranešimą pažymėdami varnelę „Pranešti man, kai gausiu atsakymą“, taip pat užsiprenumeruosite atitinkamą temą.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Kaip pažymėti arba užprenumeruoti konkrečią temą?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Skelbimuose dažniausiai yra svarbi informacija apie forumą, kuriame šiuo metu lankotės, todėl turėtumėte juos perskaityti, kai tik galėsite. Skelbimai yra rodomi viršuje kiekvieno forumo puslapio. Kaip ir svarbiems pranešimams, teisę kurti skelbimus suteikia administratorius.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Kas yra skelbimai?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode — tai ypatinga HTML realizacija, suteikianti puikias galimybes formatuoti atskiras pranešimo dalis. Galimybę naudoti BBCode nustato administratorius, tačiau BBCode taip pat gali būti išjungtas pranešime jo pateikimo formoje. BBCode savo stiliumi yra panašus į HTML, žymos yra laužtiniuose skliaustuose [ ir ], o ne &lt; ir &gt;. Daugiau informacijos apie BBCode rasite BBCode vadove, kurio nuorodą rasite pranešimo pateikimo formoje.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Kas tai yra BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Šiuose pranešimuose yra svarbios informacijos, todėl turėtumėte juos perskaityti, kai tik galėsite. Jie rodomi kiekvieno forumo viršuje ir jūsų asmeninėje skiltyje. Teisę kurti svarbius pranešimus suteikia konferencijos administratorius.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Kas yra svarbūs pranešimai?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Ne. Šioje konferencijoje į pranešimus negalima įterpti ir apdoroti HTML kodo. Didžiąją dalį pranešimų teksto HTML formatavimo galimybių galima pasiekti naudojant BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Ar galiu naudoti HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Temų piktogramos – tai autorių pasirinkti paveiksliukai, susiję su pranešimais ir atspindintys jų turinį. Galimybė naudoti temų piktogramas priklauso nuo administratoriaus nustatytų leidimų.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Kas yra temų piktogramos?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Taip, į savo pranešimos galite įdėti paveiksliukus. Jei administratorius leido priedus, į konferenciją galite įkelti paveiksliuką. Jei ne, turite pateikti nuorodą į paveiksliuką, saugomą viešoje svetainėje. Nuorodos pavyzdys: http://www.example.com/my-picture.gif. Negalite įkelti nuorodos į paveiksliukus, kurie yra saugomi jūsų kompiuteryje (jei tai nėra viešasis serveris), nei į paveiksliukus, kuriems pasiekti yra reikalinga autentifikacija, pvz., „Hotmail“ ar „Yahoo“ pašto dėžutės, slaptažodžiu apsaugotos svetainės ir t.t. Norėdami pateikti nuorodas į paveiksliukus, ​​savo pranešimuose naudokite BBCode žymą [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Ar galiu įdėti paveiksliukus į pranešimus?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Uždarytos temos — tai temos, kuriose vartotojai nebegali skelbti pranešimų, o visos jose esančios apklausos automatiškai uždaromos. Forumo moderatorius arba konferencijos administratorius temas gali uždaryti dėl daugelio priežasčių. Jūs taip pat galite uždaryti jūsų sukurtas temas, jeigu konferencijos administratoriaus jums suteikė tokias teises.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Kas yra uždarytos temos?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Šypsenėlės, arba jaustukai – tai maži paveikslėliai, kuriais galima išreikšti jausmus, pvz. :) reiškia džiaugsmą, o :( reiškia liūdesį. Visą jaustukų sąrašą galite pamatyti žinutės kūrimo formoje. Tiktais nepersistenkite su jais: jie gali lengvai padaryti jūsų įrašą neperskaitomu, o moderatorius gali redaguoti įrašą arba jį visiškai ištrinti. Konferencijos administratorius taip pat gali apriboti jaustukų, kuriuos galima naudoti žinutėje, skaičių.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Kas yra jaustukai?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Priklijuotos temos forume yra žemiau po visais skelbimais ir tiktais pirmame jo puslapyje. Juose dažnai yra gana svarbios informacijos, todėl esant galimybei turėtumėte jas perskaityti. Kaip ir su pranešimais, teises kurti priklijuotas temas suteikia konferencijos administratorius.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Kas yra priklijuotos temos?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Į šiuos sąrašus galite įtraukti kitus konferencijos vartotojus. Žmonės, kuriuos įtrauksite į savo draugų sąrašą, bus išvardyti jūsų asmeninėje skiltyje, kad galėtumėte greitai sužinoti, ar jie yra prisijungę, ir kad galėtumėte siųsti jiems asmenines žinutes. Šių vartotojų pranešimai taip pat gali būti paryškinti, jei konferencijos stilius tai palaiko. Jeigu vartotojus įtraukėte į savo priešų sąrašą, tuomet pagal nutylėjimą visi jų siunčiami pranešimai bus paslėpti.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Ką reiškia draugų ir priešų sąrašai?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Vartotojus į sąrašą galite įtraukti dviem būdais. Kiekvieno vartotojo profilyje yra nuoroda, skirta įtraukti jį į draugų ar priešų sąrašą. Arba galite tai padaryti tiesiogiai iš savo asmeninės skilties, tiesiogiai įvesdami vartotojo vardą. Taip pat galite pašalinti naudotojus iš atitinkamų sąrašų tame pačiame puslapyje.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Kaip galiu pridėti/pašalinti vartotojus iš savo draugų ir priešų sąrašų?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratoriai yra vartotojai, turintys aukščiausią konferencijos kontrolės lygį. Jie gali valdyti visus konferencijos aspektus, įskaitant prieigos teisių diferencijavimą, vartotojų atjungimą, vartotojų grupių kūrimą, moderatorių paskyrimą ir t.t., priklausomai nuo konferencijos kūrėjo jiems suteiktų teisių. Jie taip pat gali turėti visas moderatoriaus funkcijas visuose forumuose, atsižvelgiant į konferencijos kūrėjo nustatymus.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Kas yra administratoriai?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Konferencijos administratorius grupės dalyviams gali priskirti spalvas, kad būtų lengviau atskirti juos vienus nuo kitų.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Kodėl kai kurių grupių pavadinimų spalva skiriasi?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Jei esate daugiau nei vienoje grupėje, tuomet grupė pagal nutylėjimą yra naudojama nustatant, kurios grupės spalva ir rangas jums turi būti priskirtas. Konferencijos administratorius gali suteikti jums leidimą asmeniniame skyriuje pačiam pasikeisti grupę pagal nutylėjimą.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Kas yra grupė pagal nutylėjimą?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderatoriai yra vartotojai (arba vartotojų grupės), kurie kasdien stebi forumus. Jie turi teisę redaguoti arba ištrinti pranešimus, uždaryti, atidaryti, perkelti, trinti ir sujungti temas forume, už kurį yra atsakingi. Pagrindinės moderatorių užduotys – neleisti publikuoti pranešimų, kurie neatitinka aptariamų temų (offtopic) ir įžeidinėjimų.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Kas yra moderatoriai?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Šiame puslapyje rasite konferencijų administratorių ir moderatorių sąrašą bei kitą informaciją, pvz., jų moderuojamus forumus.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Ką reiškia nuoroda „Mūsų komanda“?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Vartotojų grupės suskirsto bendruomenę į struktūrines dalis, kurias valdo konferencijos administratorius. Kiekvienas vartotojas gali būti kelių grupių narys ir kiekvienai grupei gali būti priskirtos individualios prieigos teisės. Tai leidžia administratoriams lengviau priskirti prieigos teises dideliam vartotojų skaičiui vienu metu, pavyzdžiui, pakeisti moderatoriaus teises arba suteikti vartotojams prieigą prie asmeninių forumų.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Informaciją apie visas egzistuojančias grupes galite gauti naudodami nuorodą „Grupės“ savo asmeninėje skiltyje. Jei norite prisijungti prie vienos iš jų, spustelėkite atitinkamą mygtuką. Tačiau ne visos grupės yra viešai prieinamos. Kai kurioms grupėms gali prireikti patvirtinimo, norint prie jų prisijungti, o taip pat grupės gali būti uždaros arba netgi paslėptos. Jei grupė yra vieša, galite prašyti narystės paspaudę mygtuką. Jeigu yra reikalingas sutikimas prisijungti prie grupės, galite pateikti prašymą prisijungimui paspausdami atitinkamą mygtuką. Grupės lyderis turės patvirtinti jūsų dalyvavimą grupėje ir gali paklausti, kodėl norite prisijungti. Prašome netrukdyti grupės lyderio, jeigu jis atmetė jūsų prašymą; jis gali tam turėti savų priežasčių.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Kur yra grupės ir kaip prie jų prisijungti?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Grupių lyderiai dažniausiai paskiriami tada, kai juos sukuria konferencijų administratoriai. Jei jus domina grupės kūrimas, pirmiausia susisiekite su administratoriumi; pabandykite parašyti jam asmenine žinute.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Kaip galiu tapti grupės lyderiu?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Kas yra vartotojų grupės?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Visi šios konferencijos vartotojai gali naudoti atitinkamą formą puslapyje „Susisiekti su administracija“, jeigu šią funkciją įjungė administratorius.<br />Registruoti vartotojai taip pat gali naudotis kontaktais, esančiais puslapyje „Mūsų komanda“.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Kaip susisiekti su konferencijos administratoriumi?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Šią programinę įrangą sukūrė ir licencijavo phpBB Limited. Jei manote, kad reikia pridėti funkciją, apsilankykite <a href="https://www.phpbb.com/ideas/">phpBB idėjų centre</a>, kur galite balsuoti už jau pateiktas idėjas arba pasiūlyti savo.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Kodėl čia nėra tokios ir tokios funkcijos?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Galite susisiekti su bet kuriuo iš „Mūsų komanda“ puslapyje nurodytų administratorių. Jei negaunate atsakymo, susisiekite su domeno savininku (atlikite paiešką per <a href="http://www.google.com/search?q=whois">whois lookup</a>) arba, jei konferencija yra patalpinta nemokamame domene (pavyzdžiui, chat.ru, Yahoo!, free.fr, f2s.com ir t.t.), susisiekite su šio domeno valdytojais arba su technine pagalba. Turėkite omenyje, kad phpBB Limited <strong>nekontroliuoja šios konferencijos</strong> ir negali prisiimti jokios atsakomybės už tai, kas ir kaip naudojasi šia konferencija. Dėl teisinių klausimų nesikreipkite į phpBB Limited (dėl konferencijos sustabdymo, atsakomybės už ją ir t.t.), kurie <strong>tiesiogiai neliečia</strong> svetainės phpBB.com arba kurie iš dalies susiję su phpBB Limited programine įranga. Jei vis dėlto nusiųsite el. laišką phpBB Limited įmonei apie naudojimąsi šia konferencija <strong>trečiąja šalimi</strong>, tuomet nesitikėkite išsamaus laiško arba atsakymo galite ir visai nesulaukti.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Su kuo galiu susisiekti dėl netinkamo naudojimo ir (arba) teisinių klausimų, susijusių su šia konferencija?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Šią programinę įrangą (pradinėje originalioje formoje) sukūrė ir platina <a href="https://www.phpbb.com/">phpBB Limited</a>. Ji prieinama pagal GNU General Public Licence sąlygas, versija 2 (GPL-2.0) ir gali būti laisvai platinama. Norėdami gauti daugiau informacijos, spustelėkite nuorodą <a href="https://www.phpbb.com/about/">Apie phpBB</a>.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kas suprogramavo šią konferenciją?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Jei nepažymėjote parinkties <em>Prisiminti mane</em>, savo vardu konferencijoje galėsite likti tik ribotą laiką. Taip siekiama užtikrinti, kad niekas kitas negalėtų naudotis jūsų paskyra. Kad nereikėtų kiekvieną kartą įvesti vartotojo vardo ir slaptažodžio, prisijungimo prie konferencijos metu galite pažymėti šalia esančią parinktį <em>Prisiminti mane</em>. Nerekomenduojama to daryti viešame kompiuteryje, pavyzdžiui, bibliotekoje, interneto kavinėje, universitete ir t.t. Jeigu punkto <em>Prisiminti mane</em> nėra, tai reiškia, kad administratorius išjungė šią funkciją.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Kodėl aš turiu periodiškai iš naujo įvesti savo vartotojo vardą ir slaptažodį?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Galimos kelios priežastys. Pirmiausia įsitikinkite, kad teisingai įvedėte vartotojo vardą ir slaptažodį. Jeigu informacija yra įvesta teisingai, susisiekite su administratoriumi ir patikrinkite, ar jums nebuvo uždrausta prieiga prie konferencijos. Taip pat gali būti, kad įvyko konferencijos konfigūracijos klaida, susisiekite su administratoriumi, kad ištaisytumėte nustatymus.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Galbūt administratorius dėl kokių nors priežasčių išjungė arba ištrynė jūsų paskyrą. Be to, daugelis konferencijų periodiškai pašalina naudotojus, kurie ilgą laiką neskelbė pranešimų, kad sumažinti duomenų bazės dydį. Jeigu taip atsitiks, pabandykite registruotis dar kartą ir aktyviau dalyvauti diskusijose.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Aš jau seniai užsiregistravęs, tačiau negaliu prisijungti!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Kodėl negaliu prisijungti?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Galbūt konferencijos administratorius išjungė naujų vartotojų registraciją. Taip pat gali būti, kad jis užblokavo jūsų IP adresą arba uždraudė vardą, kuriuo bandote registruotis. Kreipkitės pagalbos į konferencijos administratorių.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Kodėl negaliu užsiregistruoti?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA (Children’s Online Privacy Protection Act of 1998), arba 1998 m. vaikų privatumo internete apsaugos aktas — tai Jungtinių Valstijų įstatymas, reikalaujantis, kad svetainės, kuriose gali būti renkama informacija iš nepilnamečių iki 13 metų, turėtų raštišką tėvų sutikimą. Priimtinas kitokio tipo patvirtinimas, kad globėjai leidžia rinkti asmeninę informaciją iš jaunesnių nei 13 metų amžiaus nepilnamečių. Jei nesate tikri, ar tai galioja jums, kaip besiregistruojančiam konferencijoje, ar pačiai konferencijai, kreipkitės pagalbos į teisininką. Atkreipkite dėmesį, kad šios konferencijos phpBB Limited administracija negali patarti teisiniais klausimais ir nėra kitų teisinių santykių subjektas, išskyrus nurodytus atsakyme į klausimą „Su kuo galiu susisiekti dėl netinkamo naudojimo ir (arba) teisinių klausimų, susijusių su šia konferencija?“.<br /><strong>Vertėjo pastaba: Lietuvoje šis teisės aktas neturi teisinės galios</strong>.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Kas tai yra COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> 'Jis ištrina visus sukurtus slapukus, leidžiančius likti prisijungusiems prie šios konferencijos ir atlikti kitas funkcijas, pvz., sekti skaitytus pranešimus, tuo atveju, jeigu šią funkciją įjungė administratorius. Jei kyla sunkumų prisijungiant arba atsijungiant iš šios konferencijos, slapukų ištrynimas gali padėti.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Ką atlieka funkcija „Ištrinti slapukus“?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Nepanikuokite! Nors slaptažodžio atkurti nepavyksta, galite lengvai gauti naują. Eikite į konferencijos prisijungimo puslapį ir spustelėkite nuorodą <em>Pamiršote slaptažodį?</em>. Vykdykite instrukcijas ir netrukus vėl galėsite prisijungti prie konferencijos.<br />Jei negalite gauti naujo slaptažodžio, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Aš pamiršau slaptažodį!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Jūs neprivalote to daryti. Viskas priklauso nuo to, kaip administratorius nustatė konferenciją: ar norint paskelbti pranešimą reikia užsiregistruoti ar ne. Tačiau registracija suteikia papildomų funkcijų, kurios nepasiekiamos anoniminiams vartotojams: avatarai, asmeninės žinutės, el. laiškų siuntimas, dalyvavimas grupėse ir t.t. Registracija užtruks tik kelias minutes, todėl rekomenduojame tai padaryti.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Pirmiausia patikrinkite savo vartotojo vardą ir slaptažodį. Jei jie teisingi, galimi du variantai. Jeigu yra įjungtas COPPA palaikymas ir registracijos metu nurodėte, kad esate jaunesnis nei 13 metų, tuomet vadovaukitės gautomis instrukcijomis. Kai kuriose konferencijose reikalaujama, kad prieš prisijungiant į sistemą, visas naujas paskyras aktyvuotų vartotojai arba administratorius. Ši informacija rodoma registracijos proceso metu. Jei jums buvo išsiųstas el. laiškas, vadovaukitės gautomis instrukcijomis. Jei negavote el. pašto žinutės, tuomet gali būti, kad įvedėte neteisingą el. pašto adresą arba ją užblokavo spamo filtras. Jei esate tikri, kad įvedėte teisingą el. pašto adresą, pabandykite susisiekti su administratoriumi.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Ką tiktais užsiregistravau, tačiau negaliu prisijungti!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Kodėl man reikia registruotis?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Tai gali lemti trys priežastys: nesate užsiregistravę ir/ar neprisijungę prie konferencijos, administratorius uždraudė siųsti asmenines žinutes visai konferencijai arba administratorius tai uždraudė jums asmeniškai. Norėdami gauti daugiau informacijos, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Negaliu siųsti asmeninių žinučių!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Dėl to apgailestaujame. Šios konferencijos el. pašto formoje yra apsaugos priemonių ir galimybė sekti tokius pranešimus siunčiančius vartotojus. Išsiųskite el. laišką konferencijos administratoriui su visa gauto laiško kopija. Labai svarbu įtraukti visas antraštes, kuriose yra išsami informacija apie siuntėją. Konferencijos administratorius tokiu atveju galės imtis veiksmų.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Šioje konferencijoje iš kažkieno gavau šlamštą arba įžeidžiantį el. laišką!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Jūs galite automatiškai ištrinti naudotojų asmenines žinutes naudodami pranešimų taisykles savo asmeninėje skiltyje. Jei gaunate įžeidžiančių asmeninių žinučių iš konkretaus vartotojo, praneškite apie juos moderatoriams; jie gali neleisti vartotojui siųsti asmeninių žinučių.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Nuolat gaunu nepageidaujamas asmenines žinutes!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Peržiūrėdami temą spustelėję nuorodą „Iškelti temą“, galite ją „iškelti“ į pirmojo forumo puslapio viršų. Jei taip neatsitinka, tai reiškia, kad galimybė iškelti temas galėjo būti išjungta, arba dar nepraėjo laikas, kuris turėtų praeiti, iki pakartotinio temos iškėlimo. Taip pat galite iškelti temą tiesiog į ją atsakydami, tačiau įsitikinkite, kad tai darydami nepažeidžiate taisyklių konferencijos, kurioje dalyvaujate.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Kaip man vėl iškelti savo temą?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Norėdami sukurti naują temą forume, spustelėkite mygtuką „Nauja tema“. Norėdami paskelbti pranešimą temoje, spustelėkite mygtuką „Atsakyti“. Prieš siunčiant pranešimą gali tekti užsiregistruoti. Jūsų prieigos teisių sąrašas yra forumo arba temų puslapių apačioje. Pavyzdžiui: „Galite pradėti temas“, „Galite pridėti priedų“ ir kt.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Kaip sukurti naują temą ar pranešimą?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Šis mygtukas leidžia išsaugoti pranešimus, kad galėtumėte juos užbaigti ir išsiųsti vėliau. Norėdami pakrauti išsaugotą pranešimą, eikite į savo asmeninės skilties skyrių „Juodraščiai“.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Ką reiškia mygtukas „Išsaugoti“ kuriant pranešimą?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Jei nesate konferencijos administratorius ar moderatorius, galite redaguoti ir ištrinti tik savo pranešimus. Galite pereiti prie redagavimo spustelėdami mygtuką <em>Redaguoti</em> atitinkamame pranešime, kartais tiktais ribotą laiką po jo sukūrimo. Jei kas nors jau atsakė į pranešimą, po juo atsiras nedidelis užrašas, kuriame bus nurodytas redagavimo skaičius, paskutinio redagavimo data ir laikas. Šis užrašas nepasirodo, jei pranešimą redagavo administratorius ar moderatorius, nors jie gali rašyti apie atliktus pakeitimus savo nuožiūra. Atminkite, kad paprasti vartotojai negali ištrinti pranešimo, jeigu kas nors į jį jau atsakė.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Kaip redaguoti arba ištrinti pranešimą?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Kai kurie forumai pasiekiami tik tam tikriems vartotojams arba vartotojų grupėms. Jums gali prireikti specialaus leidimo, jeigu norite peržiūrinėti tokius forumus, kurti juose temas ir rašyti pranešimus bei atlikti kitus veiksmus. Norėdami gauti tokį leidimą, susisiekite su moderatoriumi arba konferencijos administratoriumi.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Kodėl aš negaliu patekti į kai kuriuos forumus?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Teisė pridėti priedus gali būti suteikta forumo, grupės ar vartotojo lygmenyje. Konferencijos administratorius gali neleisti įdėti priedus tam tikruose forumuose. Taip pat gali būti, kad tiktais tam tikrų grupių nariams yra leidžiama pridėti priedus. Jei nežinote priežasties kodėl negalite pridėti priedų, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Kodėl negaliu pridėti priedų?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Atsakymo variantų limitą nustato konferencijos administratorius. Jei jums reikia pridėti daugiau parinkčių nei šis limitas, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Kodėl negaliu pridėti daugiau atsakymų parinkčių?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Kurdami temą arba redaguodami pirmąjį temos pranešimą, spustelėkite skirtuką arba eikite į formą <em>Sukurti apklausą</em> po pagrindine forma, skirta pranešimo kūrimui, atsižvelgiant į naudojamą stilių; jei nematote tokio skirtuko ar formos, tuomet neturite teisės kurti apklausų. Į atitinkamus laukus įveskite klausimą ir bent dvi atsakymo parinktis, įsitikinkite, kad kiekviena parinktis yra atskiroje teksto eilutėje. Taip pat, panaudodami parinktį „Atsakymo variantai“, galite nustatyti skaičių variantų, kuriuos vartotojai gali pasirinkti balsuodami, bei galite nustatyti apklausos laikotarpį dienomis (0 reiškia, kad apklausa bus nuolatinė), bei galite nustatyti ar vartotojai gali pakeisti variantą, už kurį balsavo.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Kaip sukurti apklausą?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Kaip ir pranešimus, apklausas gali redaguoti tik jų kūrėjai, moderatoriai arba administratoriai. Norėdami redaguoti apklausą, eikite į pirmosios temos pranešimo redagavimą; apklausa visada susijusi su juo. Jeigu niekas nespėjo prabalsuoti, galite ištrinti apklausą arba redaguoti bet kurį atsakymo variantą. Tačiau jeigu kas nors jau balsavo, tik moderatoriai arba administratoriai gali redaguoti ar ištrinti apklausą. Taip padaryta tam, kad balsavimo metu būtų neįmanoma pakeisti atsakymų variantų.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Kaip redaguoti arba ištrinti apklausą?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Konferencijos administratorius gali nuspręsti, kad pranešimai turi būti peržiūrėti prieš paskelbiant juos forume. Taip pat gali būti, kad jūsų administratorius įtraukė jus į vartotojų grupę, kurių pranešimus, jo nuomone, reikėtų peržiūrėti prieš siunčiant. Norėdami gauti daugiau informacijos, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Kodėl mano pranešimas turi būti patvirtintas?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Šalia kiekvieno pranešimo matysite mygtuką, skirtą nusiųsti skundą apie pranešimą, jei tai leidžia konferencijos administratorius. Spustelėjus šį mygtuką jums reikės atlikti keletą veiksmų, kurie yra reikalingi siunčiant skundą pie pranešimą.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Kaip galiu pasiskųsti moderatoriui apie pranešimus?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Norėdami pridėti parašą prie pranešimo, pirmiausia turite jį sukurti savo asmeninėje skiltyje. Po to galite pažymėti parinktį <em>Pridėti parašą</em> pranešimo siuntimo formoje, kad būtų pridėtas parašas. Taip pat galite nustatyti parašą pagal nutylėjimą, kuris bus pridėtas prie visų jūsų siunčiamų pranešimų - tam reikia pasirinkti atitinkamą parinktį pastraipoje „Pranešimų siuntimas“ ir punkte „Asmeniniai nustatymai“. Tačiau galėsite atšaukti parašo pridėjimą prie atskirų pranešimų, panaikindami žymėjimą <em>Pridėti parašą</em> pranešimo siuntimo formoje.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Kaip prie savo pranešimo pridėti parašą?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Kiekvienoje konferencijoje administratoriai nustato savo taisykles. Jei pažeisite taisyklę, galite gauti įspėjimą. Atkreipkite dėmesį, kad tai yra konferencijos administratoriaus sprendimas, ir phpBB Limited yra nesusijęs su šioje svetainėje paskelbtais įspėjimais. Jei nesate tikri dėl kokios priežasties gavote įspėjimą, susisiekite su konferencijos administratoriumi.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Kodėl gavau įspėjimą?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Jūsų paieška pateikė per daug rezultatų, ir svetainės serveris negali jų apdoroti. Naudokite „Išplėstinę paiešką“, tiksliau nurodykite paieškos sąlygas ir forumus, kuriuose ji turėtų būti atliekama.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Mano paieškos rezultatas buvo tuščias puslapis!',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Nustatykite paieškos sąlygą atitinkamame lauke, esančiame pagrindiniame konferencijos puslapyje, forumo peržiūros puslapyje arba temos puslapyje. Išplėstinę paiešką galite atlikti spustelėję visuose konferencijos puslapiuose esančią nuorodą „Išplėstinė paieška“. Paieškos suradimas gali priklausyti nuo jūsų naudojamo stiliaus.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Kaip atlikti paiešką forume ar forumuose?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Eikite į puslapį „Vartotojai“ ir spustelėkite nuorodą „Rasti vartotoją“.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Kaip rasti konferencijos vartotoją?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Jūsų paieškos užklausa galėjo būti per daug neaiški ir joje buvo daug bendrų žodžių, kurių negalima ieškoti phpBB. Būkite konkretesni ir naudokite išplėstines paieškos galimybes.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Kodėl mano paieška neduoda rezultatų?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Savo pranešimus jūs galite surasti pagrindinio puslapio asmeninėje skiltyje spustelėję nuorodą „Rodyti savo pranešimus“, per konferencijos profilio puslapyje esančią nuorodą „Rasti vartotojo pranešimus“ arba per pagrindinio puslapio meniu „Nuorodos“ esančią nuorodą „Jūsų pranešimai“. Norėdami rasti jūsų sukurtas temas, naudokite išplėstinės paieškos puslapį, užpildydami atitinkamus laukus.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Kaip surasti savo sukurtus pranešimus ir temas?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Kartu su vartotojo vardu gali būti du paveiksliukai. Vienas iš jų gali būti susijęs su jūsų rangu, dažniausiai tai žvaigždės, kvadratai ar taškai, nurodantys, kiek pranešimų palikote arba koks yra jūsų statusas konferencijoje. Kitas, paprastai didesnis, paveiksliukas yra vadinamas „avataru“ ir paprastai yra unikalus kiekvienam vartotojui.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Asmeninės dalies skirtuke „Profilis“ galite pridėti avatarą naudodami keturis įrankius: „Gravataras“, „Avatarų galerija“, „Nuotolinis avataras“ arba „Pakraunamas avataras“. Nuo administratoriaus priklauso, ar yra įjungtas avatarų palaikymas ir kokie avatarų tipai gali būti prieinami. Jei negalite naudoti avatarų, susisiekite su konferencijos administratoriumi ir išsiaiškinkite priežastis kodėl.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Kaip įjungti avataro rodymą?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Ką reiškia paveikslėliai šalia mano vartotojo vardo?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Jei esate registruotas vartotojas, visi jūsų nustatymai yra saugomi konferencijos duomenų bazėje. Norėdami juos pakeisti, spustelėkite savo vartotojo vardą puslapio viršuje ir spustelėkite nuorodą <em>Asmeninis skyrius</em>. Čia galite pakeisti visus savo nustatymus ir pasirinkimus.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Kaip galiu pakeisti nustatymus?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Tik registruoti vartotojai gali siųsti el. laiškus kitiems vartotojams naudodami konferencijoje integruotą formą, ir tik tuo atveju, jei administratorius įjungė šią funkciją. Taip siekiama užkirsti kelią anoniminiams vartotojams piktnaudžiauti el. pašto sistema.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Kai paspaudžiu nuorodą „el. paštas“, manęs reikalauja prisijungti prie konferencijos!',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Asmeninio skyriaus skirtuke „Asmeniniai nustatymai“ rasite parinktį <em>Slėpti mano buvimą konferencijoje</em>. Pasirinkite <em>Taip</em>, ir būsite matomi tik administratoriams, moderatoriams ir jums patiems. Visiems kitiems būsite paslėptas vartotojas.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Kaip galiu neleisti, kad mano vardas būtų rodomas sąraše „Kas dabar yra konferencijoje“?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Administratorius neįdiegė jūsų kalbos palaikymo konferencijoje arba tiesiog niekas neišvertė phpBB į jūsų kalbą. Pabandykite paklausti konferencijos administratoriaus, ar jis gali įdiegti jums reikalingą kalbos paketą. Jei tokio kalbos paketo nėra, galite patys išversti phpBB į savo kalbą. Daugiau informacijos galite rasti svetainėje <a href="https://www.phpbb.com/">phpBB</a>&reg;.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Mano kalbos nėra sąraše!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Po jūsų vardu rodomi reitingai atspindi jūsų sukurtų pranešimų skaičių arba identifikuoja tam tikrus vartotojus: pavyzdžiui, moderatorius ir administratorius. Paprastai konferencijoje negalite tiesiogiai pakeisti reitingų pavadinimų, nes juos nustato konferencijos administratorius. Neapkraukite konferencijos nereikalingomis žinutėmis vien tam, kad padidintumėte savo reitingą. Daugumoje konferencijų tai neleidžiama, o moderatorius arba administratorius sumažins jūsų pranešimų skaičiaus reikšmingumą.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Kas yra reitingas ir kaip jį pakeisti?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Jei esate tikri, kad nurodėte teisingą laiko juostą, bet rodomas laikas vis tiek neteisingas, tai reiškia, kad laikas serveryje nustatytas neteisingai. Praneškite savo administratoriui, kad jis išspręstų problemą.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Pakeičiau laiko juostą, bet laikas vis tiek neteisingas!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Galbūt yra rodomas laikas kitos laiko juostos, nei kad esate jūs. Tokiu atveju asmeniniuose nustatymuose pakeiskite laiko juostą į tą, kurioje esate: Vilnius, Kijevas ir t.t. Atminkite, kad tik registruoti vartotojai gali keisti laiko juostą, kaip ir dauguma nustatymų. Jeigu dar nesate užsiregistravę, tuomet dabar yra tinkamas momentas tai padaryti.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Konferencijoje klaidingas laikas!',
]);

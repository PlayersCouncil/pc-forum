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
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Vsak administrator foruma lahko določene tipe priponk dovoli ali pa ne. Če ne veste, kaj je dovoljeno naložiti in kaj ne, se obrnite na administratorja foruma.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Katere priponke so dovoljene na tem forumu?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Če želite najti seznam priponk, ki ste jih naložili, pojdite na vašo Uporabniško Nadzorno Ploščo in sledite povezavam do dela o priponkah.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Kako najdem svoje priponke?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Priponke',
	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Naročnine na teme in zaznamki',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Oblikovanje foruma in vrste tem',
	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Prijatelji in Sovražniki',
	'HELP_FAQ_BLOCK_GROUPS'	=> 'Uporabniški nivoji in skupine',
	'HELP_FAQ_BLOCK_ISSUES'	=> 'O programu phpBB',
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Vprašanja v zvezi z registracijo in prijavo',
	'HELP_FAQ_BLOCK_PMS'	=> 'Pošiljanje zasebnih sporočil',
	'HELP_FAQ_BLOCK_POSTING'	=> 'Poglavje o objavljanju',
	'HELP_FAQ_BLOCK_SEARCH'	=> 'Iskanje po forumih',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Uporabniške nastavitve',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'Določanje zaznamkov je na phpBB3-ju precej podobno kot na spletnem iskalniku. O morebitnih nadgradnjah niste obveščeni, vendar se lahko kasneje zopet vrnete na temo. Če pa se boste na določeno temo naročili, boste o nadgradnji teme ali foruma obveščeni.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Kakšna je razlika med zaznamki in naročninami na teme?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Za naročnino na določene forume kliknite “Naroči se na teme v tem forumu” na dnu stranipred vstopom na temo.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Kako se na določene forume naročim?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Za odstranitev vaših naročnin pojdite na vašo Uporabniško Nadzorno Ploščo in sledite povezavam do vaših naročnin.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Kako svojo naročnino odstranim?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Lahko zaznamujete ali se naročite na določeno temos klikom na ustrezno povezavo v menuju "Orodja za temo", na priročnem mestu na dnu ter vrhu teme.<br />Odgovarjanje na temo z označeno opcijo "Obvesti me, ko bo objavljen odgovor" vas naroči na temo.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'Kako se na določene teme naročim?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Razglasi pogosto vsebujejo za forum pomembne informacije in tudi za razglase je priporočljivo, da jih berete čim pogosteje. Pojavijo se na vrhu vsake strani foruma, na katerega so poslana. Kakor že za globalna obvestila tudi za razglase dodeli dovoljenja administrator foruma.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Kaj so razglasi?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBKoda je posebna izboljšava HTML-ja, ki ponuja večji oblikovni nadzor nad določenimi deli prispevka. Uporabo BBKode omogoči administrator, vendar jo lahko tudi onemogočite v obrazcu za pošiljanje prispevka. Sama BBKoda je stilno precej podobna HTML-ju, le da so tag-i priloženi v oglatih oklepajih [ in ] namesto v &lt; in &gt;. Za več informacij se oglejte vodnik, do katerega lahko dostopate tudi s strani za objavljanje.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Kaj je BBKoda?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Globalna obvestila vsebujejo pomembne informacije, zato je priporočljivo, da jih kar se da pogosto prebirate. Pojavijo se na vrhu foruma in znotraj vaše Uporabniške Nadzorne Plošče. Dovoljenja za globalna obvestila dodeli administrator foruma.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Kaj so globalna obvestila?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Ne, na tem forumu ni mogoče objavljati HTML-ja. Večino oblikovanja, ki ga omogoča uporaba HTML-ja, je lahko nadomeščena z uporabo BBKode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Ali lahko uporabljam HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Ikone tem so slike, ki jih je izbral avtor teme in se navezujejo na vsebino. Ali lahko ikone tem uporabljate ali ne, je odvisno od možnosti oz. dovoljenj, ki vam jih je odobril administrator foruma.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Kaj so ikone tem?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Da, tudi slike lahko objavite v prispevku. Če je administrator dovolil uporabo priponk, boste podobo lahko naložili na forum, drugače pa morate navesti povezavo z javno dostopnim strežnikom, na katerem je podoba shranjena, npr. http://www.primer-strani.com/moja-slika.gif. S slikami na vašem računalniku ne morete ustvariti povezave (razen če je javno dostopen strežnik), prav tako ne s slikami shranjenimi za verodostojnimi mehanizmi, npr. s poštnimi nabiralniki hotmail ali yahoo, s stranmi, ki so zaščitene z geslom itd. Za naložitev slike uporabite tag BBKode [img].',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Ali lahko objavljam tudi slike?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Zaklenjene teme so tiste teme, kjer uporabniki ne morejo več odgovarjati, morebitne ankete, ki jih vsebuje, pa so končane. Teme so lahko zaklenjene iz večih razlogov, zaklenita pa jih lahko tako moderator kakor tudi admnistrator foruma. Tudi sami imate morda možnost, da svojo temo zaklenete, kar pa je seveda odvisno od možnosti in dovoljenj, ki vam jih je dodelil administrator foruma.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Kaj so zaklenjene teme?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smeški oz. angleško Smilies so majhne podobe, ki jih lahko uporabljate za izražanje čustev, npr. :) pomeni veselje, medtem ko :( nakazuje žalost. Celoten seznam smeškov lahko vidite na obrazcu za pošiljanje. Ne uporabljajte jih prekomerno, saj lahko prispevek tako hitro postane neberljiv, moderator pa bo izbrisal vaše smeške ali pa kar celoten prispevek. Administrator foruma je morda celo nastavil številčno omejitev uporabe smeškov, ki jih lahko v prispevku uporabite.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Kaj so smeški?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> '"Ne prezrite" oz. "lepljivek" teme se znotraj foruma pojavijo samo na prvi strani in sicer pod razglasi. So precej pomembne, zato jih redno prebirajte. Dovoljenja za "Ne prezrite" ("lepljivek") teme so, kakor za globalna obvestila in za razglase, dodeljena s strani administratorja foruma.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Kaj predstavljajo NE PREZRI (lepljivek) teme?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Te sezname lahko uporabite za organizacijo ostalih članov foruma. Člani z vašega seznama Prijateljev bodo dostopni tudi na Uporabniški Nadzorni Plošči pod hitro povezavo, da boste lahko videli njihov status prisotnosti in da jim boste lahko pošiljali zasebna sporočila. Če boste koga dodali pod Sovražnike, bodo vsa njegova sporočila skrita in avtomatsko izbrisana.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Kdo so moji Prijatelji in Sovražniki na seznamu?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Uporabnike lahko na seznam dodajate na dva načina. Znotraj profila vsakega uporabnika je povezava, preko katere ga lahko dodate na seznam Prijateljev ali Sovražnikov. Druga možnost je vaša Uporabniška Nadzorna Plošča, kjer uporabnike dodate neposredno z vnosom njihovega članskega imena. Z enako metodo lahko uporabnike tudi odstranite s seznama.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Kako lahko uporabnike dodam na oz. odstranim s seznama Prijateljev in Sovražnikov?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administratorji so tisti člani, ki imajo največjo stopnjo nadzora nad celotnim forumom. Ti člani lahko nadzorujejo vse dele obratovanja foruma, vključno z nastavljanjem dovoljenj, izključevanjem uporabnikov, ustvarjanjem uporabniških skupin ali moderatorjev itd., vsa ta njihova dejanja pa so odvisna od tega, kakšna dovoljenja jim je dodelil ustanovitelj foruma. Lahko imajo celo vse moderatorske zmožnosti posameznih forumih, kar pa je zopet odvisno od tega, ali je te nastavitve omogočil ustanovitelj foruma.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Kaj so Administratorji?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Možno je, da je administrator članom uporabniške skupine določil barvo, kar pa služi temu, da se med seboj lažje prepoznajo.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Zakaj se nekatere uporabniške skupine pojavljajo v različnih barvah?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Če pripadate večim uporabniškim skupinam, je vaša privzeta skupina tista, od katere privzamete barvo in rang (oboje je vidno ostalim uporabnikom). Administrator foruma lahko dodeli možnost, da svojo privzeto uporabniško skupino spremenite, in sicer na vaši Uporabniški Nadzorni plošči.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Kaj je "Privzeta uporabniška skupina"?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderatorji so posamezniki (ali skupine posameznikov), ki dnevno skrbijo za forume. Imajo dovoljenje, da prispevke preoblikujejo ali zbrišejo in da zaklenejo, odklenejo, premaknejo, razdelijo ali izbrišejo teme na forumu, ki ga moderirajo. V spolšnem so torej moderatorji tisti, ki preprečujejo, da bi uporabniki skrenili s teme ali da bi objavljali nasilne/žaljive vsebine.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Kaj so Moderatorji?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Na tej povezavi najdete seznam osebja foruma, vključno z administratorjem foruma in moderatorji, pa tudi ostale podrobnosti, npr. katere forume te osebe moderirajo.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Kaj je povezava "Ekipa"?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'	=> 'Uporabniške skupine so skupine uporabnikov in so namenjene temu, da udeležence foruma razdelijo v obvladljive sekcije, s katerimi administrator lahko upravlja. Vsak uporabnik lahko pripada večim skupinam, vsaka skupina pa ima svoje možnosti in dovoljenja. Ta način omogoča, da administrator večim uporabnikom naenkrat spremeni dovoljenja, kot npr. spreminjanje dovoljenj moderatorjem ali dovoljenje, da uporabniki dostopajo do zasebnega foruma.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Seznam uporabniških skupin lahko vidite pod povezavo "Uporabniške skupine", ki se nahaja na vaši Uporabniški Nadzorni Plošči. Če bi se kakšni radi pridružili, kliknite na ustrezen gumb, vendar vedite, da niso vse splošno dostopne. Nekatere za vstop zahtevajo dovoljenje, nekatere so zaprte in nekatere imajo celo skrito članstvo. Če je torej skupina odprta, se ji lahko pridružite s klikom na ustrezen gumb. Če skupina zahteva dovoljenje, lahko s klikom na ustrezen gumb zaprosite za članstvo. Vodja skupine bo članstvo potrdil (ali ne) in vas prej morda še vprašal, zakaj se skupini želite pridružiti. Prosimo, da voditelja skupine ne nadlegujete, če se odloči zavrniti vašo prošnjo za članstvo; zagotovo ima svoje razloge za to.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Kje se nahajajo uporabniške skupine in kako se kakšni priključiti?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Voditelj uporabniške skupine je ponavadi določen takrat, ko skupino ustvari administrator foruma. Če se zanimate za ustvaritev nove uporabniške skupine, se najprej obrnite na administratorja (pošljite mu zasebno sporočilo).',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Kako postanem vodja uporabniške skupine?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Kaj so uporabniške skupine?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Vsi uporabniki lahko uporabijo obrazec “Kontakt”, če je opcija omogočena s strani skrbnika strani.<br />Člani foruma lahko uporabijo tudi povezavo “Ekipa”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Kako kontaktiram skrbnika strani?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Ta programska oprema je delo skupine phpBB Group, ki ima zanj tudi licenco. Če mislite, da bi bilo treba dodati kakšno dodatno funkcijo, potem obiščite stran phpBB <a href="https://www.phpbb.com/ideas/">Center idej</a>, kjer lahko glasujete za ideje ali predlagate svojo.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Zakaj funkcija X ni na voljo?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Obrnite se na administratorja tega foruma. Če ne najdete njegovega kontaktnega naslova, se obrnite na enega od moderatorjev in vprašajte koga morate kontaktirati. Če še vedno ne dobite odziva, se obrnite na lastnika domene (do podatkov pridete preko <a href="http://www.google.com/search?q=whois">whois lookup</a>). Če forum gostuje na brezplačnem serverju (npr. yahoo, free.fr, f2s.com, etc.), se obrnite na njihov oddelek za zlorabo storitev. Zavedati se morate, da phpBB Group nima <strong>popolnoma nobenega nadzora</strong> in zato ne more biti odgovorna za to, kdo uporablja njihov forum. Popolnoma nesmiselno je kontaktirati phpBB Group v zvezi s pravnimi zadevami, ki <strong>niso direktno povezane</strong> s stranjo phpbb.com ali z njihovo programsko opremo. Če boste vseeno poslali sporočilo phpBB Group o uporabi njihovega foruma, se zavedajte, da boste v najboljšem primeru dobili le kratek odgovor, v večini primerov pa sploh ne boste dobili odgovora.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Koga lahko kontaktiram glede zlorab in pravnih zadev v zvezi s tem forumom?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Ta program je (v nespremenjeni obliki) avtorsko delo <a href="https://www.phpbb.com/">phpBB Group</a>. Javnosti je na voljo pod pogoji GNU General Public Licence in se lahko prosto posreduje drugim uporabnikom. Za več informacij obiščite povezavo.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Kdo je ustvaril ta forum?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Če ne obkljukate možnosti <em>Samodejna prijava</em> ko se prijavite, boste prijavljeni le začasno, se pravi ko ste dejansko na forumu. Ta nastavitev preprečuje morebitno zlorabo vašega računa. Če želite ostati prijavljeni, med prijavo obkljukajte prej omenjeno možnost, kar pa vam odsvetujemo, če do foruma dostopate s tujega računalnika, npr. v knjižnici, internetnem "kafiču", študentski računalnici itd. Če možnosti ne vidite, jo je administrator odstranil.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Čemu avtomatska odjava?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Obstaja kar nekaj razlogov, zakaj se to lahko zgodi. Najprej se prepričajte, če ste vnesli pravilno uporabniško ime in geslo. Če ste, potem kontaktirajte administratorja in se prepričajte, da vas niso izključili. Možno je tudi, da se je pojavila napaka v nastavitvah foruma, za kar pa bo moral poskrbeti sam administrator.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Možno je, da so administratorji onemogočili ali izbrisali Vaš račun. Marsikateri forum avtomatsko deaktivira uporabnike, kateri niso dosti časa aktivni. Če se je to zgodilo, se ponovno registrirati in poizkusite biti bolj aktivni na forumu.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Že pred časom sem se registriral, a se naenkrat ne morem več prijaviti?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Zakaj se ne morem prijaviti?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Možno je, da je administrator blokiral vaš IP naslov ali uporabniško ime, s katerim se skušate registrirati. Možno je tudi, da je administrator onemogočil registracijo, da bi preprečil vstop novih obiskovalcev. Z vprašanji se obrnite na administratorja foruma.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Zakaj se ne morem registrirati?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA oz. Child Online Privacy and Protection Act of 1998 (Akt o otroški zasebnosti in zaščiti na spletu iz leta 1998) je zakon v Združenih Državah, ki od spletnih strani, ki potencialno posedujejo podatke mladostnikov starih pod 13 let, zahteva pisno potrdilo staršev ali kakšen drug pravni dokument z vsebino, da se zakoniti skrbnik mladostnika strinja z oddajo osebnih podatkov svojega oskrbovanca. Če niste prepričani, ali se to tiče vas kot nekoga, ki se želi registrirati, ali spletne strani, na kateri poskušate z registracijo, se za pomoč obrnite na pravni svet. Vedite, da phpBB Group ne more nuditi pravnih nasvetov in ni pravi naslov za kakršna koli pravna vprašanja, razen tistih, ki so navedena spodaj..',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Kaj je COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '"Izbriši vse piškotke foruma" izbriše vse piškotke, ki jih je ustvaril phpBB in ki vam omogočajo verodostojnost in prijavljenost na forumu. Prav tako omogočajo možnosti kot npr. read tracking, če seveda niso bile prepovedane s strani administratorja. Če imate težave s prijavljanjem ali odjavljanjem, vam bo brisanje piškotkov morda pomagalo.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Čemu služi možnost "Izbriši vse piškotke foruma"?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Brez skrbi! Vaše sedanje geslo sicer ne more biti dobljeno nazaj, je pa lahko brez težav na novo postavljeno. Obiščite stran za prijavo in kliknite na <em>Pozabil sem geslo</em>. Sledite navodilom in v kratkem se boste zopet lahko prijavili.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Pozabil sem geslo!',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Morda se vam ni potrebno, saj administrator sam določi, ali je za objavljanje prispevkov na določenem forumu potrebna registracija ali ne. Ne glede na to pa vam registracija omogoči dostop do dodatnih možnosti, ki za goste niso dosegljive, npr. avatarji oz. slike, pošiljanje zasebnih sporočil, prejemanje sporočil ostalih uporabnikov, opisi skupin uporabnikov itd. in ker vam bo vzelo le kakšno minuto, je priporočljivo, da se registrirate.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Najprej preverite uporabniško ime in geslo. Če sta pravilna, potem obstajata dve možni težavi. Če je vključena možnost "COPPA support" (COPPA podpora) in ste se med registracijo označili za starega pod 13 let, boste morali slediti navodilom, ki ste jih prejeli. Nekateri forumi bodo od vas ali od administratorja celo zahtevali ponovno registracijo, predno se boste lahko prijavili; ta informacija vam je bila podana tudi med registracijo. Če ste prejeli elektronsko sporočilo, sledite navodilom, če pa ga niste, ste najbrž vnesli napačni e-mail naslov ali pa vam je sporočilo izbrisal filter za "spam" oz. nezaželeno pošto. Če ste prepričani, da ste vnesli pravilen e-mail naslov, kontaktirajte administratorja.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Registriral sem se, vendar se ne morem prijaviti!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Zakaj se pravzaprav moram registrirati?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Obstajajo trije razlogi, zakaj tega ne morete storiti: 1. niste registrirani in/ali prijavljeni, 2. administrator foruma je za ves forum preprečil pošiljanje zasebnih sporočil, 3. administrator foruma vam je preprečil pošiljanje sporočil. Za več informacij se obrnite na administratorja foruma.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Ne morem poslati zasebnega sporočila!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Zelo nam je žal, da se je to zgodilo. Obrazec za pošiljanje elektronske pošte vsebuje varnostne točke, preko katerih poskušamo zaslediti uporabnike, ki izrabljajo to storitev, zato vas naprošamo, da administratorju foruma pošljete kopijo celotnega sporočila. Zelo pomembno je, da ta kopija vsebuje tudi t.i. "header" (del, kjer so podrobnosti o pošiljatelju), saj bo tako administrator lahko ukrepal.',
	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Od nekoga na forumu sem dobil vsiljeno (spam) oz. žaljivo sporočilo!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Določenega uporabnika lahko blokirate in mu s tem preprečite pošiljanje zasebnih sporočil (to lahko nastavite na vaši Uporabniški Nadzorni Plošči). Če od določenega uporabnika prejemate žaljiva sporočila, o tem obvestite administratorja foruma, saj mu le-ta lahko prepreči nadaljno pošiljanje zasebnih sporočil.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Nenehno dobivam nezaželena zasebna sporočila!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'S klikom na gumb "Premakni temo" lahko temo, ko jo pregledujete, premaknete na vrh foruma na prvi strani. Če te možnosti ne vidite, je morda izključena ali pa še ni preteklo dovolj časa od zadnjega premika. Temo je možno premakniti tudi z odgovarjanjem nanjo, vendar bodite previdni in sledite pravilom foruma, če se poslužujete te možnosti.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Kako prestavim svojo temo?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Za objavo nove teme kliknite "Nova tema". Če želite objaviti odgovor na temo, kliknite "Objavi odgovor". Morda se vam bo pred objavo prispevka potrebno registrirati. Na dnu strani foruma (ali strani objavljenih tem) je na voljo seznam dovoljenih možnosti, npr. Da, lahko dodajate nove teme; Da, lahko objavite priponke itd.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Kako ustvarim novo temo ali objavim odgovor?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'To vam omogoča, da nedokončan prispevek shranite in ga kasneje dopolnite ter predložite. Za ponovno naložitev shranjenega prispevka obiščite Uporabniško Nadzorno Ploščo.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Čemu v objavljanju tem služi gumb "Shrani"?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Izbrišete ali urejate lahko samo vaše prispevke, razen če ste moderator ali administrator foruma. Prispevek urejate tako, da za ustrezen prispevek kliknete na gumb "uredi", vendar je ta možnost včasih na voljo le nekaj časa po objavi prispevka. Če je nekdo že odgovoril na vaš prispevek, boste ob vrnitvi na temo pod prispevkom našli besedilo, ki prikazuje, kolikokrat in kdaj ste že uredili prispevek. Kot že rečeno, se bo besedilo pojavilo le, če je že nekdo podal odgovor, ne bo pa se pojavilo, če sta prispevek uredila moderator ali administrator. V slednjem primeru boste morda našli le zaznamek, zakaj je bil prispevek prirejen. Vedite pa, da običajni uporabniki ne morejo več izbrisati prispevka, potem ko je nekdo že napisal odgovor.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Kako uredim ali izbrišem objavo?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Nekateri forumi so lahko omejeni na določene uporabnike ali skupine. Za branje, objavljanje ali kakršno koli drugo možnost boste morda potrebovali posebno dovoljenje. Za odobritev vašega vstopa na forum se obrnite na moderatorja ali administratorja foruma.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Zakaj do nekega foruma ne morem dostopati?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Dovoljenja za priponke so dodeljena glede na forum ali pa glede na uporabnika. Administrator foruma morda ni dovolil dodajanje priponk na forumu, na katerem ste, ali pa je ta možnost dovoljena le določeni skupini. Če ne veste, zakaj vam ta možnost ni omogočena, se obrnite na administratorja foruma.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Zakaj ne morem dodati priponk?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Omejitev možnosti pri anketi nastavi administrator. Če se vam zdi, da morate vaši anketi dodati več možnosti kot je dovoljeno, se obrnite na administratorja foruma.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Zakaj anketi ne morem dodati več možnosti?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Kliknite na gumb "Ustvari anketo" pod glavnim obrazcem za pošiljanje in sicer ko objavljate novo temo ali urejate prvi prispevek na določeno temo; če gumba ne morete videti, potem nimate primernih dovoljenj za ustvaritev ankete. V ustrezna okna vstavite naslov in vsaj dve možnosti ter se prepričajte, da je vsaka možnost v svojem polju. Lahko tudi določite, koliko možnosti lahko uporabnik med glasovanjem izbere (pod "Možnosti na uporabnika"), časovno omejitev ankete (0 za nedoločeno trajanje) in možnost, da uporabniki svoj glas popravijo.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Kako ustvarim anketo?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Kakor prispevke lahko ankete urejajo le moderator, administrator ali pa tisti, ki jo je ustvaril. Če želite urediti anketo, najprej kliknite na ureditev prvega prispevka v temi; to je vedno povezano z anketo. Če ni še nihče oddal svojega glasu, lahko uporabnik anketo uredi ali izbriše, če pa so člani že glasovali, jo lahko uredi/izbriše le moderator ali administrator. To preprečuje spremembo ankete nekje na sredi izvajanja.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Kako uredim ali izbrišem anketo?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administrator se lahko odloči, da je na forumu, kjer objavljate prispevke, potrebno le-te pred objavo pregledati. Možno je tudi, da vas je administrator uvrstil v skupino uporabnikov, katerih prispevki morajo biti pred objavo pregledani. Za nadaljnje informacije se obrnite na administratorja foruma.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Zakaj mora biti moj prispevek odobren?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Če je administrator to možnost omogočil, bi morali gumb za poročanje o prispevku videti poleg prispevka, ki ga želite prijaviti. Klik na ta gumb vas bo popeljal skozi potrebne korake, ki jih morate opraviti.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Kako lahko o objavah poročam moderatorju?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Če želite svojemu prispevku dodati podpis, ga morate najprej ustvariti in sicer na vaši Uporabniški Nadzorni Plošči. Ko to opravite, preprosto kliknite na oz. obkljukajte <em>Dodaj podpis</em> (na obrazcu za objavljanje prispevkov). Podpis lahko dodate tudi kot privzeto, kar storite tako, da v nastavitvah svojega profila obkljukate ustrezno nastavitev. Če se odločite za to možnost, lahko podpis v posameznih prispevkih še vedno izbrišete - odkljukajte okence "dodaj podpis" pri samem obrazcu za pošiljanje.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Kako svoji objavi dodam podpis?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Vsak administrator ima za svoj forum določena svoja pravila. Če ste kakšno od teh pravil prekršili, ste verjetno prejeli opozorilo. Vedite, da je to odločitev administratorja foruma in da skupina phpBB nima nič z morebitnimi opozorili. Kontaktirajte administratorja foruma, da vam pojasni, zakaj ste prejeli obvestilo.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Zakaj sem prejel opozorilo?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Rezultat vašega iskanja je preveč zadetkov za zmožnosti spletnega brskalnika. Uporabite "Napredno iskanje" in bolj natančno definirajte iskan pojem in forume, ki naj bodo preiskani.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Zakaj je odgovor na moje iskanje zgolj prazna stran!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'V okno za iskanje (na osnovni strani ali na strani tem) vpišite želeno besedo. Lahko uporabite tudi napredno iskanje, do katerega pridete, če na kateri koli strani foruma kliknete na povezavo "Napredno iskanje". Kako dostopate do iskanja je odvisno od stila, ki je na forumu uporabljen.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Kako lahko preiščem forum oz. forume?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Obiščite stran "Člani" in kliknite na povezavo "Najdi člana".',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Kako poiščem določene člane?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Iskano geslo je bilo verjetno preveč splošno in je posledično vključevalo veliko splošnih pojmov, ki jih phpBB3 nima zabeleženih. Bodite bolj natančni in uporabite možnosti Naprednega iskanja.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Zakaj je moje iskanje brez rezultatov?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Vaše prispevke lahko najdete tako na vaši Uporabniški Nadzorni Plošči pod povezavo "Poišči uporabnikove prispevke", kot tudi na strani vašega profila. Če želite poiskati vaše teme, uporabite Napredno iskanje in primerno vpišite različne možnosti.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Kako najdem svoje objave in teme?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Dve sliki se lahko pojavita pod uporabniškim imenom med prebiranjem prispevka. Prva slika je povezana z vašim rangom/stopnjo - ponavadi je v obliki zvezdic, stolpcev ali krogcev, in prikazuje, koliko prispevkov ste objavili ali pa vaš status na forumu. Druga slika je ponavadi večja in je poznana kot "avatar" - navadno je edinstvena in osebna za vsakega uporabnika.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'V vaši Uporabniški Nadzorni plošči pod "Profil" lahko dodate avatar, z uporabo enega od naslednjih štirih načinov: gravatar, galerija, URL ali naložitev. To je odvisno od administratorja, da izbere način na katerega so avatarji na voljo. Če avatarjev ne morete uporabiti, se obrnite na administratorja foruma.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Kako prikazati avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Kaj so sličice poleg mojega uporabniškega imena?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Če ste registriran uporabnik, so vse vaše nastavitve shranjene v forumovi podatkovni bazi. Če jih želite spremeniti, obiščite stran svoje Uporabniške Nadzorne Plošče (povezavo ponavadi najdete na vrhu strani foruma poleg še nekaterih povezav). Ta sistem vam bo omogočil spremembo vseh vaših nastavitev.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Kako spremenim svoje nastavitve?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Samo registrirani uporabniki lahko pošiljajo e-maile ostalim uporabnikom in še to samo, če je administrator to možnost nastavil. Temu je tako, da bi anonimnim uporabnikom preprečili neprimerno uporabo sistema spletne pošte.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Zakaj sem ob kliku na e-mail povezavo nekega uporabnika pozvan k prijavi?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'V vaši Uporabniški Nadzorni plošči pod "Nastavitve foruma" boste našli možnost <em>Skrij prisotnost</em>. Omogočite to možnost in vidni boste samo administratorjem, moderatorjem in seveda vam. Šteti boste kot eden izmed skritih uporabnikov.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Kako odstranim vidnost uporabniškega imena, ki se pojavlja med prisotnimi uporabniki?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Obstajata dve možnosti: ali administrator ni nastavil vašega jezika ali pa forum ni preveden v želen jezik. Obrnite se na administratorja, če lahko namesti želen jezikovni paket. Če le-ta ne obstaja, lahko sami ustvarite nov prevod (če želite). Več informacij lahko najdete na spletni strani phpBB (povezava je na dnu strani).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Mojega jezika ni na seznamu!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Rangi oz. stopnje, ki se pojavijo pod uporabniškim imenom, prikazujejo, koliko prispevkov ste objavili, ali pa identificirajo določene uporabnike, npr. moderatorje in administratorje. Na splošno ne morete direktno spremeniti besedišča katerih koli rangov na forumu, saj jih je nastavil administrator. Prosimo, da foruma ne izkoriščate za objavljanje po nepotrebnem, samo da bi zvišali svoj rang. Večina forumov tega ne tolerira, zato vam lahko moderator ali administrator preprosto omejita število dovoljenih objav.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Kaj je moj rang oz. stopnja in kako ga spremenim?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Če ste prepričani, da ste pravilno nastavili časovni pas in upoštevali poletni oz. zimski premik ure, čas pa je še vedno napačen, potem je nepravilno nastavljena ura na strežniku. Prosimo, opozorite administratorja na napako, da bo lahko rešil težavo.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Spremenil sem časovni pas, pa čas še vedno ni pravilen!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Možno je, da je prikazan čas iz drugega časovnega pasu in je zato nepravilen. Če je problem v tem, potem obiščite vašo Uporabniško Nadzorno Ploščo in spremenite časovni pas na vam ustreznega, npr. na London, Pariz, New York, Sydney itd. Vedite pa, da je spreminjanje časovnega pasu možno le za registrirane uporabnike, kakor tudi za večino ostalih nastavitev. Če torej še niste registrirani, je sedaj dobra priložnost, da se.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Čas ni pravilen!',
));

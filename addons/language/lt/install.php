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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, [
	'INSTALL_PANEL'	=> 'Diegimo pultas',
	'SELECT_LANG'	=> 'Pasirinkite kalbą',

	'STAGE_INSTALL'	=> 'phpBB instaliavimas',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Įžanga',
	'INTRODUCTION_BODY'		=> 'Sveiki atvykę į phpBB3!<br /><br />phpBB® yra labiausiai paplitęs atvirojo kodo sprendimas organizuojant konferencijas internete. phpBB3 — tai naujausias šios linijos produktas nuo 2000 m. Kaip ir jo pirmtakai, phpBB3 yra funkcionalus, turi patogią sąsają, yra visiškai palaikomas phpBB komandos. phpBB3 žymiai pagerina savybes, dėl kurių phpBB2 išpopuliarėjo, pridėjo populiariausias funkcijas, kurių trūko ankstesnėse versijose. Tikimės, kad tai viršys jūsų lūkesčius.<br /><br />Ši sistema padės jums atlikti phpBB3 diegimo procesus, atnaujinimai iš ankstesnės į naujausią phpBB3 versiją, arba konvertuoti kitą konferencijų programinę įrangą (įskaitant phpBB2) į phpBB3. Norėdami gauti daugiau informacijos, skaitykite <a href="%1$s">instaliavimo vadovas</a>.<br /><br />Norėdami peržiūrėti phpBB3 licencijos sąlygas arba pasiteirauti dėl pagalbos, šoniniame meniu pasirinkite atitinkamą punktą. Norėdami tęsti, aukščiau pasirinkite norimą žymę.',

	// Support page
	'SUPPORT_TITLE'		=> 'Pagalba',
	'SUPPORT_BODY'	=> 'Pilna einamosios stabilios phpBB3 versijos pagalba yra nemokama. Į ją įeina:</p><ul><li>diegimas</li><li>konfigūracija</li><li>techniniai klausimai</li><li>problemos susijusios su klaidomis programinėje įrangoje</li><li>atnaujinimai iš kandidatinių į naujausią stabilią versiją</li><li>konversija iš phpBB 2.0.x į phpBB3</li><li>konversija iš kitų diskusijų lentų programinės įrangos paketų į phpBB3 (daugiau <a href="https://www.phpbb.com/community/viewforum.php?f=65">konversijų forume</a>)</li></ul><p>Raginame visus vartotojus, kurie vis dar naudojasi beta phpBB3 versijomis, pakeisti jas į naujausią stabilią versiją.</p><h2>MOD`ifikacijos / Stiliai</h2><p>Apie problemas susijusias su modifikacijomis praneškite <a href="https://www.phpbb.com/community/viewforum.php?f=81">modifikacijų forume</a>.<br />Apie problemas susijusias su stiliais, šablonais ir paveikslėlių komplektais praneškite <a href="https://www.phpbb.com/community/viewforum.php?f=80">stilių forume</a>.<br /><br />Jeigu jūsų klausimas yra susijęs su tam tikru paketu, praneškite tiesiai į to paketo temą.</p><h2>Kur gauti pagalbą</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB pasveikinimo paketas</a><br /><a href="https://www.phpbb.com/support/">Pagalbos sekcija</a><br /><a href="https://www.phpbb.com/support/documentation/3.0/quickstart/">Greitasis vadovas</a><br /><br />Jeigu norite gauti visas naujausias naujienas ir žinutes apie naujus programinės įrangos leidimus, prisijunkite prie <a href="https://www.phpbb.com/support/">mūsų el. pašto konferencijos</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'	=> 'Sveiki atvykę į diegimo proceso pradžią',
	'INSTALL_INTRO_BODY'	=> 'Šio proceso pagalba galite įdiegti phpBB3 savo serveryje.</p><p>Norėdami tęsti, turėsite įrašyti duomenų bazės nustatymus. Jeigu jų nežinote, susisiekite su savo tinklapių talpinimo paslaugų teikėju ir paklauskite. Be šių nustatymų jūs negalėsite tęsti diegimo. Jums prireiks:</p>

	<ul>
		<li>Duomenų bazės tipas (DB) — tą, kurį naudosite.</li>
		<li>DB serverio pavadinimas arba DSN — duomenų bazės serverio adresas.</li>
		<li>DB serverio portas — duomenų bazės serverio portas (daugeliu atvejų nereikia nurodyti).</li>
		<li>Duomenų bazės pavadinimas — serveryje esančios duomenų bazės pavadinimas.</li>
		<li>DB vartotojo vardas ir DB slaptažodis — duomenų bazės prieigos duomenys.</li>
	</ul>

	<p><strong>Pastaba:</strong> jei diegdami naudosite SQLite, tada lauke reikia įvesti visą duomenų bazės failo kelią "Duomenų bazės serverio pavadinimas arba DSN" ir palikite tuščius laukus vartotojo vardo bei slaptažodžio. Saugumo sumetimais turite įsitikinti, kad šis failas nepasiekiamas internetu.</p>

	<p>phpBB3 palaiko šias duomenų bazes:</p>
	<ul>
		<li>MySQL 4.1.3 ir aukščiau (palaiko MySQLi)</li>
		<li>PostgreSQL 8.3 ir aukščiau</li>
		<li>SQLite 3.6.15 ir aukščiau</li>
		<li>MS SQL Server 2000 ir aukščiau (tiesiogiai arba per ODBC)</li>
		<li>MS SQL Server 2005 ir aukščiau (native)</li>
		<li>Oracle</li>
	</ul>

	<p>Duomenų bazės tipų pasirinkimo sąraše bus rodomi tik tie, kuriuos palaiko jūsų serveris.',

	'ACP_LINK'	=> 'Sveiki! Dabar galite eiti į <a href="%1$s">Administratoriaus skyrius</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB jau instaliuotas.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB dar neinstaliuotas.',
]);

// Requirements translation
$lang = array_merge($lang, [
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Failas neegzistuoja',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Norint instaliuoti phpBB, reikalingas failas %1$s.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Kad būtų patogiau naudotis konferencija, rekomenduojama turėti failą %1$s.',
	'FILE_NOT_WRITABLE'						=> 'Failas neprieinamas įrašymui',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Norint instaliuoti phpBB, failas %1$s turi būti prieinamas įrašymui.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Kad būtų patogiau naudotis konferencija, rekomenduojama failą %1$s padaryti prieinamą įrašymui.',

	'DIRECTORY_NOT_EXISTS'						=> 'Direktorija neegzistuoja',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'phpBB instaliacijai reikalinga directorija %1$s.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Kad būtų patogiau naudotis konferencija, rekomenduojama turėti directoriją %1$s.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Direktorija neprieinama įrašymui',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Norint instaliuoti phpBB, direktorija %1$s turi prieinama įrašymui.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Kad būtų patogiau naudotis konferencija, rekomenduojama padaryti prieinama įrašymui direktoriją %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versija PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'Kad phpBB veiktų, reikalinga PHP versija 7.2.0 arba aukščiau.',
	'PHP_GETIMAGESIZE_SUPPORT'	=> 'PHP getimagesize() funkcija',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Būtina</strong> - teisingam phpBB funkcionavimui reikalinga getimagesize PHP funkcija.',
	'PCRE_UTF_SUPPORT'	=> 'PCRE UTF-8 palaikymas',
	'PCRE_UTF_SUPPORT_EXPLAIN'	=> 'phpBB <strong>neveiks</strong> jeigu PHP PCRE modulis yra sukompiliuotas be UTF-8 palaikymo.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON palaikymas',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Kad phpBB veiktų tinkamai, reikalingas plėtinys PHP JSON.',
	'PHP_MBSTRING_SUPPORT'				=> 'PHP mbstring palaikymas',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Kad phpBB veiktų tinkamai, reikalingas plėtinys PHP mbstring.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM palaikymas',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Kad phpBB veiktų tinkamai, reikalingas plėtinys PHP XML/DOM.',
	'PHP_SUPPORTED_DB'	=> 'Palaikomos duomenų bazės',
	'PHP_SUPPORTED_DB_EXPLAIN'	=> '<strong>Būtina</strong> - PHP turi palaikyti bent vieną duomenų bazę. Jeigu nerastas nei vienas modulis, susisiekite su savo tinklapių talpinimo paslaugų teikėju arba įdiegtos PHP versijos dokumentaciją.',

	'RETEST_REQUIREMENTS'	=> 'Patikrinti dar kartą',

	'STAGE_REQUIREMENTS'	=> 'Reikalavimai',
]);

// General error messages
$lang = array_merge($lang, [
	'INST_ERR_MISSING_DATA'	=> 'Šiame bloge turite užpildyti visus laukus.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Diegimo programa aptiko, kad užklausos skirtasis laikas baigėsi',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Vykdant diegimo programą baigėsi užklausai skirtas laikas. Galite pabandyti atnaujinti šį puslapį savo naršyklėje, tačiau tai gali sugadinti jūsų duomenis. Pageidautinas sprendimas yra padidinti vykdymo laiką PHP nustatymuose arba naudoti komandinę eilutę (CLI).',
]);

// Updater
$lang = array_merge($lang, [
	'STAGE_OBTAIN_DATA'	=> 'Nustatykite instaliavimo parinktis',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administratoriaus aprašymas',

	// Form labels
	'ADMIN_CONFIG'	=> 'Administratoriaus nustatymai',
	'ADMIN_PASSWORD'	=> 'Administratoriaus slaptažodis',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Administratoriaus slaptažodžio patvirtinimas',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Slaptažodis turi būti nuo 6 iki 30 simbolių ilgio.',
	'ADMIN_USERNAME'	=> 'Administratoriaus vartotojo vardas',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Vartotojo vardas turi būti nuo 3 iki 20 simbolių ilgio.',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> 'Įrašytas el. pašto adresas yra neteisingas.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Slaptažodžiai, kuriuos įrašėte, nesutampa.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Slaptažodis, kurį įrašėte, yra per ilgas. Maksimalus ilgis - 30 simbolių.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Slaptažodis, kurį įrašėte, yra per trumpas. Minimalus ilgis - 6 simboliai.',
	'INST_ERR_USER_TOO_LONG'	=> 'Vartotojo vardas, kurį įrašėte, yra per ilgas. Maksimalus ilgis - 20 simbolių.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Vartotojo vardas, kurį įrašėte, yra per trumpas. Minimalus ilgis - 3 simboliai.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Bendrieji nustatymai',
	'DEFAULT_LANGUAGE'	=> 'Kalba pagal nutylėjimą',
	'BOARD_NAME'		=> 'Konferencijos pavadinimas',
	'BOARD_DESCRIPTION'	=> 'Trumpas konferencijos aprašymas',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Duomenų bazės nustatymai',

	// Form labels
	'DB_CONFIG'	=> 'Duomenų bazės nustatymai',
	'DBMS'	=> 'Duomenų bazės tipas',
	'DB_HOST'	=> 'Duomenų bazės serverio vardas arba DŠV',
	'DB_HOST_EXPLAIN'	=> 'DŠV yra Duomenų Šaltinio Vardas (DSN) ir svarbus tik naudojant ODBC. PostgreSQL atveju, norėdami prisijungti prie vietinio serverio per UNIX prievadus naudokite localhost. Norėdami prisijungti per TCP prievadus, naudokite 127.0.0.1. SQLite atveju, nurodykite pilną kelią iki duomenų bazės failo.',
	'DB_PORT'	=> 'Duomenų bazės serverio portas',
	'DB_PORT_EXPLAIN'	=> 'Palikite tuščią, nebent žinote, kad jūsų serveris veikia nestandartiniu portu.',
	'DB_PASSWORD'	=> 'Duomenų bazės slaptažodis',
	'DB_NAME'	=> 'Duomenų bazės pavadinimas',
	'DB_USERNAME'	=> 'Duomenų bazės vartotojo vardas',
	'DATABASE_VERSION'		=> 'DBMS versija',
	'TABLE_PREFIX'	=> 'Duomenų bazės lentelių prefiksas',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefiksas turi prasidėti raide, ir gali būti sudarytas tik iš raidžių, skaičių ir apatinio brūkšnio.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ su ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL su išplėtimu MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Duomenų bazės klaida',
	'INST_ERR_NO_DB'	=> 'PHP neturi reikiamo modulio pasirinktam duomenų bazės tipui.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefiksas, kurį įrašėte, yra neteisingas. Jis turi prasidėti raide, ir gali būti sudarytas tik iš raidžių, skaičių ir apatinio brūkšnio.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Duomenų bazės lentelių prefiksas, kurį įrašėte, yra per ilgas. Maksimalus ilgis - %d simboliai(ių).',
	'INST_ERR_DB_NO_NAME'	=> 'Neįrašytas duomenų bazės pavadinimas.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Nurodytas duomenų bazės failas yra jūsų diskusijų lentos katalogų medyje. Jūs turėtumėte padėti šį failą į internetiniam serveriui neprieinamą vietą.',
	'INST_ERR_DB_CONNECT'	=> 'Nepavyko prisijungti prie duomenų bazės. Žemiau galite perskaityti klaidos pranešimą.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Duomenų bazė ir direktorija, kuriame ji yra, turi būti prieinami įrašymui.',
	'INST_ERR_DB_NO_ERROR'	=> 'Klaida be pranešimo.',
	'INST_ERR_PREFIX'	=> 'Duomenų bazės lentelės su tokiu prefiksu jau egzistuoja. Įrašykite kitokį prefiksą.',
	'INST_ERR_DB_NO_MYSQLI'	=> 'MySQL versija jūsų serveryje yra nesuderinta su “MySQL su MySQLi moduliu” nustatymu kurį pasirinkote. Bandykite pasirinkti “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Įdiegta pasenusi plėtinio SQLite versija. Ją reikia atnaujinti bent iki versijos 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'	=> 'Šiai Oracle versijai jūsų serveryje reikia nustatyti <var>NLS_CHARACTERSET</var> parametrą į <var>UTF8</var>. Arba atnaujinkite Oracle versiją iki 9.2+, arba pakeiskite šį parametrą.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Duomenų bazė, kurią pasirinkote, buvo sukurta ne su <var>UNICODE</var> arba <var>UTF8</var> koduote. Pabandykite pasirinkti duomenų bazę su <var>UNICODE</var> arba <var>UTF8</var> koduote.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Duomenų bazės schemos failas neprieinamas įrašymui',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'El. pašto nustatymai',

	// Package info
	'PACKAGE_VERSION'					=> 'Instaliuota versija',
	'UPDATE_INCOMPLETE'				=> 'Nepavyko užbaigti atnaujinimo.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Norėdami išspręsti klaidą, perskaitykite žemiau pateiktą informaciją.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Nebaigtas atnaujinimas</h1>

		<p>Aptiktas nesėkmingas bandymas atnaujinti. Paleiskite <a href="%1$s" title="%1$s">duomenų bazės atnaujinimo programą</a>, pasirinkite variantą <em>Tik duomenų bazė</em> ir paspauskite mygtuką <strong>Siųsti</strong>. Sėkmingai atnaujinę duomenų bazę, nepamirškite ištrinti direktorijos „install“.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'	=> 'Išleista nauja <strong>%1$s</strong> versija su naujomis galimybėmis. Norėdami sužinoti daugiau apie ją ir kaip atsinaujinti skaitykite <a href="%2$s" title="%2$s"><strong>pranešimą apie leidimą</strong></a>.',
	'SERVER_CONFIG'	=> 'Serverio nustatymai',
	'SCRIPT_PATH'	=> 'Skripto kelias',
	'SCRIPT_PATH_EXPLAIN'	=> 'Kelias iki phpBB neskaitant domeno vardo, pvz.: <samp>/phpBB3</samp>.',
]);

// Default database schema entries…
$lang = array_merge($lang, [
	'CONFIG_BOARD_EMAIL_SIG'	=> 'Sėkmės, Administratorius',
	'CONFIG_SITE_DESC'	=> 'Trumpas sakinys apibūdinantis jūsų diskusijų lentą',
	'CONFIG_SITENAME'	=> 'jūsųdomenas.com',

	'DEFAULT_INSTALL_POST'	=> 'Tai yra pavyzdinis pranešimas. Atrodo, kad viskas veikia. Jeigu norite tęsti diskusijų lentos konfigūravimą, galite ištrinti šį pranešimą. Diegimo metu vartotojų grupėms administratoriams, botams, globaliems moderatoriams, svečiams, registruotiems vartotojams bei registruotiems COPPA vartotojams pirmame forume bei pirmoje kategorijoje paskiriamos teisingos teisės. Jeigu norite ištrinti pirmąją kategoriją bei pirmąjį forumą, nepamirškite šioms grupėms paskirti teisių visose naujai sukurtose kategorijose bei forumuose. Rekomenduojama pervadinti pirmąją kategoriją bei forumą ir kopijuoti jų teises naujai kuriamoms kategorijoms ir forumams. Sėkmės!',

	'FORUMS_FIRST_CATEGORY'	=> 'Jūsų pirmoji kategorija',
	'FORUMS_TEST_FORUM_DESC'	=> 'Jūsų pirmojo forumo aprašymas.',
	'FORUMS_TEST_FORUM_TITLE'	=> 'Jūsų pirmasis forumas',

	'RANKS_SITE_ADMIN_TITLE'	=> 'Vyr. diskusijų administratorius',
	'REPORT_WAREZ'	=> 'Pranešime yra nuorodų į nelegalią arba piratinę programinę įrangą.',
	'REPORT_SPAM'	=> 'Vienintelis pranešimo tikslas - reklamuoti puslapį arba kitą produktą.',
	'REPORT_OFF_TOPIC'	=> 'Pranešimo turinys neatitinka temos.',
	'REPORT_OTHER'	=> 'Pranešimas neatitinka nei vienos iš šių kategorijų. Užpildykite aprašymo laukelį.',

	'SMILIES_ARROW'	=> 'Rodyklė',
	'SMILIES_CONFUSED'	=> 'Sumišęs',
	'SMILIES_COOL'	=> 'Kietas',
	'SMILIES_CRYING'	=> 'Verkiantis arba labai liūdnas',
	'SMILIES_EMARRASSED'	=> 'Susigėdęs',
	'SMILIES_EVIL'	=> 'Blogas arba labai piktas',
	'SMILIES_EXCLAMATION'	=> 'Šauktukas',
	'SMILIES_GEEK'	=> 'Gykas',
	'SMILIES_IDEA'	=> 'Idėja',
	'SMILIES_LAUGHING'	=> 'Besijuokiantis',
	'SMILIES_MAD'	=> 'Piktas',
	'SMILIES_MR_GREEN'	=> 'Misteris žalioji šypsena',
	'SMILIES_NEUTRAL'	=> 'Neutralus',
	'SMILIES_QUESTION'	=> 'Klausimas',
	'SMILIES_RAZZ'	=> 'Rodo liežuvį',
	'SMILIES_ROLLING_EYES'	=> 'Varto akis',
	'SMILIES_SAD'	=> 'Liūdnas',
	'SMILIES_SHOCKED'	=> 'Šokiruotas',
	'SMILIES_SMILE'	=> 'Išsišiepęs',
	'SMILIES_SURPRISED'	=> 'Nustebęs',
	'SMILIES_TWISTED_EVIL'	=> 'Suktas piktadarys',
	'SMILIES_UBER_GEEK'	=> 'Super gykas',
	'SMILIES_VERY_HAPPY'	=> 'Labai laimingas',
	'SMILIES_WINK'	=> 'Merkia akį',

	'TOPICS_TOPIC_TITLE'	=> 'Sveiki atvykę į phpBB3',
]);

// Common navigation items' translation
$lang = array_merge($lang, [
	'MENU_OVERVIEW'		=> 'Apžvalga',
	'MENU_INTRO'		=> 'Įžanga',
	'MENU_LICENSE'		=> 'Licencija',
	'MENU_SUPPORT'		=> 'Palaikymas',
]);

// Task names
$lang = array_merge($lang, [
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Konfigūracijos failo kūrimas',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Konfigūracijos nustatymų įrašymas',
	'TASK_ADD_DEFAULT_DATA'				=> 'Numatytųjų nustatymų įrašymas į duomenų bazę',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Duomenų bazės schemos failo kūrimas',
	'TASK_SETUP_DATABASE'				=> 'Duomenų bazės nustatymas',
	'TASK_CREATE_TABLES'				=> 'Lentelių kūrimas duomenų bazėje',

	// Install data
	'TASK_ADD_BOTS'				=> 'Botų registracija',
	'TASK_ADD_LANGUAGES'		=> 'Galimų kalbų paketų diegimas',
	'TASK_ADD_MODULES'			=> 'Modulių montavimas',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Paieškos indekso kūrimas',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Plėtinių diegimas',
	'TASK_NOTIFY_USER'			=> 'Pranešimų siuntimas el. paštu',
	'TASK_POPULATE_MIGRATIONS'	=> 'Migracijų vykdymas',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Programos instaliacija sėkmingai baigta',
]);

// Installer's general messages
$lang = array_merge($lang, [
	'MODULE_NOT_FOUND'				=> 'Modulis nerastas',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Nerastasis aptarnavimo modulis "%s" neinicijuotas.',

	'TASK_NOT_FOUND'				=> 'Užduotis nerasta',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Nerastoji paslaugos užduotis „%s“ nėra inicijuota.',

	'SKIP_MODULE'	=> 'Praleistas modulio "%s"',
	'SKIP_TASK'		=> 'Praleista užduotis "%s"',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Visos diegimo programos užduotys turi prasidėti žodžiu «installer»',
	'TASK_CLASS_NOT_FOUND'				=> 'Instaliacinės programos užduoties apibrėžimas yra neteisingas. Užduotam paslaugos pavadinimui „%1$s“ laukiama vardų erdvė yra „%2$s“. Norėdami gauti daugiau informacijos, žr. dokumentaciją apie task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Konfigūracijos failas neprieinamas įrašymui.',
]);

// CLI messages
$lang = array_merge($lang, [
	'CLI_INSTALL_BOARD'				=> 'phpBB instaliavimas',
	'CLI_UPDATE_BOARD'				=> 'phpBB atnaujinimas',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Rodyti naudojamą konfigūraciją',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Patikrinti konfigūracijos failą',
	'CLI_CONFIG_FILE'				=> 'Naudojamas konfigūracijos failas',
	'MISSING_FILE'					=> 'Failas %1$s neprieinamas',
	'MISSING_DATA'					=> 'Nėra konfigūracijos failo arba yra neteisingi nustatymai.',
	'INVALID_YAML_FILE'				=> 'Nepavyko perskaityti YAML failo %1$s',
	'CONFIGURATION_VALID'			=> 'Konfigūracijos faile nėra klaidų',
]);

// Common updater messages
$lang = array_merge($lang, [
	'UPDATE_INSTALLATION'	=> 'Atnaujinti įdiegtą phpBB diskusijų lentą',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Čia galite atnaujinti savo phpBB diskusijų lentą į naujausią versiją.<br />Proceso metu visi jūsų failai bus patikrinti. Visus pakeitimų reikalaujančius failus ir skirtumus jūs pamatysite dar prieš proceso pradžią.<br /><br />Failų atnaujinimas gali būti įvykdytas dviem būdais.</p><h2>Rankinis atnaujinimas</h2><p>Šiuo būdu jūs atsisiųsite visus pakeistus failus. Po to turėsite rankiniu būdu įkelti failus į atitinkamas vietas pagrindiniame phpBB kataloge. Kai baigsite, turėsite pakartoti failų patikrinimo etapą ir įsitikinti, kad visi failai yra reikiamoje vietoje.</p><h2>Automatinis atnaujinimas per FTP</h2><p>Šis metodas panašus į pirmą, tačiau jums nereikės atsisiuntinėti ir įkėlinėti failų patiems. Tai bus atlikta už jus. Norėdami naudoti šį metodą, turite žinoti savo FTP prisijungimo duomenis. Kai baigsite, turėsite pakartoti failų patikrinimo etapą ir įsitikinti, kad įkėlimas sėkmingai pavyko.<br /><br />',
	'UPDATE_INSTRUCTIONS'	=> '		<h1>Pranešimas apie leidimą</h1>

		<h1>Pranešimas apie naujos versijos išleidimą</h1>

		<p>Prieš tęsdami naujinimo procesą, perskaitykite pranešimą apie išėjusią naujausią versiją, jame gali būti informacijos, kuri gali būti jums naudinga. Jame taip pat yra atsisiuntimo nuorodų ir pakeitimų sąrašas.</p>

		<br />

		<h1>Kaip atnaujinti phpBB versiją su pilu paketu</h1>

		<p>Rekomenduojamas atnaujinimo būdas yra naudoti visą diegimo paketą. Jei phpBB pagrindiniai failai buvo modifikuoti rankiniu būdu ir nenorite, kad tie pakeitimai būtų prarasti, galite naudoti išplėstinį atnaujinimo paketą. Taip pat galite atnaujinti naudodami dokumente INSTALL.html nurodytus metodus. Norėdami atnaujinti naudodami visą paketą, turite atlikti šiuos veiksmus:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Sukurkite visų konferencijos failų ir duomenų bazės atsarginę kopiją.</strong></li>
			<li>Eikite į <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com atsisiuntimo puslapį</a> ir atsisiųskite viso diegimo paketo archyvą („Full Package“).</li>
			<li>Išpakuokite archyvą.</li>
			<li>Ištrinkite failą <code class="inline">config.php</code>, o taip pat direktorijas <code class="inline">/images</code>, <code class="inline">/store</code> ir <code class="inline">/files</code> <em>iš išpakuoto paketo</em> (bet ne iš svetainės).</li>
			<li>Eikite į administratoriaus skyrių, konferencijos nustatymus ir įsitikinkite, kad prosilver stilius nustatytas pagal nutylėjimą. Jei ne, atlikite šį koregavimą.</li>
			<li>Ištrinkite direktorijas <code class="inline">/vendor</code> ir <code class="inline">/cache</code> iš konferencijos šakninės direktorijos serveryje.</li>
			<li>Naudodami FTP arba SSH, įkelkite anksčiau išpakuotus viso diegimo paketo failus ir direktorijas į konferencijos šakninį direktoriją serveryje, pakeisdami esamus failus ir direktorijas. (Dėmesio: neištrinkite plėtinių iš direktorijos <code class="inline">/ext</code>.)</li>
			<li><strong><a href="%1$s" title="%1$s">Pradėkite atnaujinimo procesą naršyklėje atidarę direktoriją „install“.</a>.</strong></li>
			<li>Vykdykite duomenų bazės atnaujinimo instrukcijas, kol jis bus baigtas.</li>
			<li>naudodami FTP arba SSH, ištrinkite direktoriją <code class="inline">/install</code> iš konferencijos šakninės direktorijos serveryje.<br><br></li>
		</ol>

		<p>Konferencija atnaujinta į naujausią versiją, visi vartotojai ir pranešimai išsaugoti. Toliau yra būtina:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Atnaujinti kalbos paketą</li>
			<li>Atnaujinti pasirinktinius stilius<br><br></li>
		</ul>

		<h1>Kaip atnaujinti phpBB versiją naudojant pažangų naujinimo paketą</h1>

		<p>Išplėstinis atnaujinimo paketas yra naudojamas tik tais atvejais, kai yra rankiniu būdu modifikuotų phpBB pagrindinių failų. Taip pat galite atnaujinti naudodami dokumente INSTALL.html nurodytus metodus. Norėdami naudoti išplėstinio atnaujinimo paketą, turite atlikti šiuos veiksmus:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Eikite į <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">atsisiuntimo puslapį phpBB.com</a> ir atsisiųskite archyvą su išplėstinio naujinimo paketu („Automatic Update Package“).</li>
			<li>Išpakuokite archyvą.</li>
			<li>Įkelkite anksčiau išpakuotas „install“ ir «vendor» direktorijas į konferencijos šakninį direktoriją (tą pačią vietą, kur yra failas config.php).<br><br></li>
		</ol>

		<p>Po to konferencija taps nepasiekiama paprastiems vartotojams dėl direktorijos install buvimo.<br /><br />
		<strong><a href="%1$s" title="%1$s">Dabar galite pradėti naujinimo procesą eidami į direktoriją install</a>.</strong><br />
		<br />
		Atnaujinimo proceso metu Jums bus pateiktos instrukcijos ir jums bus pranešta, kai jis bus baigtas.
		</p>
	',
]);

// Updater forms
$lang = array_merge($lang, [
	// Updater types
	'UPDATE_TYPE'			=> 'Atnaujinimo tipas',

	'UPDATE_TYPE_ALL'		=> 'Failai ir duomenų bazė',
	'UPDATE_TYPE_DB_ONLY'	=> 'Tik duomenų bazė',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Failų atnaujinimo metodai',

	'UPDATE_FILE_METHOD'			=> 'Failo atnaujinimo metodas',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Atsisiųsti archyvą su atnaujintais failais',
	'UPDATE_FILE_METHOD_FTP'		=> 'Atnaujinkite failus per FTP (automatiškai)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Tiesiogiai atnaujinkite failus (automatiškai)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Pasirinkite atsisiunčiamo archyvo formatą',

	// FTP settings
	'FTP_SETTINGS'	=> 'FTP nustatymai',
]);

// Requirements messages
$lang = array_merge($lang, [
	'UPDATE_FILES_NOT_FOUND'	=> 'Nerasta direktorija su atnaujinimo failais. Įsitikinkite, kad atitinkami failai įkelti į serverį.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Jūs naudojate naujausią versiją. Jeigu norite patikrinti visų failų versijas atskirai, įsitikinkite, kad įkėlėte visus reikiamus atnaujinimo failus.',
	'OLD_UPDATE_FILES'	=> 'Atnaujinimo failai yra per seni. Rasti atnaujinimo failai yra skirti atnaujinti phpBB %1$s į phpBB %2$s, tačiau naujausia phpBB versija yra %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'	=> 'Rasti atnaujinimo failai yra nesuderinti su jūsų įdiegta versija. Jūsų įdiegta versija yra %1$s, tačiau failas skirtas phpBB atnaujinimui iš %2$s į %3$s.',
]);

// Update files
$lang = array_merge($lang, [
	'STAGE_UPDATE_FILES'	=> 'Failų atnaujinimas',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Tikrinami naujinimo failai',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Nepavyko atidaryti %s norint patikrinti pakeitimus.',

	'UPDATE_FILE_DIFF'		=> 'Failų pakeitimų atlikimas',
	'ALL_FILES_DIFFED'		=> 'Atlikti visi failų pakeitimai.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Failų atnaujinimas',

	'DOWNLOAD'	=> 'Atsisiųsti',
	'DOWNLOAD_CONFLICTS'	=> 'Atsisiųsti šio failo konfliktus',
	'DOWNLOAD_CONFLICTS_EXPLAIN'	=> 'Konfliktai pažymėti &lt;&lt;&lt;',
	'DOWNLOAD_UPDATE_METHOD'	=> 'Atsisiųsti pakeistus failus archyve',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Kai atsisiųsite, išpakuokite archyvą. Viduje rasite pakeistus failus kuriuos turite įkelti į pagrindinį phpBB katalogą. Įkelkite failus į atitinkamas vietas. Kai baigsite, vėl patikrinkite visus failus paspaudę mygtuką apačioje.',

	'FILE_ALREADY_UP_TO_DATE'	=> 'Šis failas ir taip naujausias.',
	'FILE_DIFF_NOT_ALLOWED'	=> 'Šio failo skirtumų pažiūrėti negalima.',
	'FILE_USED'	=> 'Duomenys iš',
	'FILES_CONFLICT'	=> 'Konfliktuojantys failai',
	'FILES_CONFLICT_EXPLAIN'	=> 'Šie failai yra pakeisti ir neatitinka originalių failų senesnėje versijoje. phpBB nustatė, kad jeigu jie bus sujungti, įvyks failų konfliktas. Peržiūrėkite konfliktus ir pabandykite patys juos išspręsti, arba tęskite atnaujinimo procesą pasirinkę norimą sujungimo metodą. Jeigu patys išspręsite konfliktus, patikrinkite failus dar kartą. Taip pat galite rinktis pageidaujamą sujungimo metodą kiekvienam failui atskirai. Pirmasis metodas nesujungs konfliktuojančių eilučių iš senojo failo, antrasis - iš naujojo.',
	'FILES_DELETED'					=> 'Ištrinti failai',
	'FILES_DELETED_EXPLAIN'			=> 'Šie failai nenaudojami naujoje versijoje. Šie failai turi būti ištrinti.',
	'FILES_MODIFIED'	=> 'Pakeisti failai',
	'FILES_MODIFIED_EXPLAIN'	=> 'Šie failai yra pakeisti ir neatitinka originalių failų senesnėje versijoje. Atnaujintas failas bus senojo jūsų pakeisto failo ir naujojo failo junginys.',
	'FILES_NEW'	=> 'Nauji failai',
	'FILES_NEW_EXPLAIN'	=> 'Šie failai neegzistuoja dabartinėje diskusijų lentoje. Jie bus pridėti.',
	'FILES_NEW_CONFLICT'	=> 'Nauji konfliktuojantys failai',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Šie failai atsirado naujausioje versijoje, tačiau jūsų diskusijų lentoje jau yra failas tokiu pavadinimu. Šis failai bus perrašyti naujesne failo versija.',
	'FILES_NOT_MODIFIED'	=> 'Nepakeisti failai',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Šie failai nėra pakeisti ir atitinka originalius failus senojoje phpBB versijoje.',
	'FILES_UP_TO_DATE'	=> 'Jau atnaujinti failai',
	'FILES_UP_TO_DATE_EXPLAIN'	=> 'Šie failai jau atnaujinti ir daugiau nereikalauja jokių veiksmų.',
	'FILES_VERSION'					=> 'Failo versija',
	'TOGGLE_DISPLAY'	=> 'Rodyti/Paslėpti failų sąrašą',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Failų atnaujinimas',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Nepavyko atnaujinti failo "%1$s". Bus naudojamas failas "%2$s".',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Nepavyko atnaujinti failų. Nėra galimybės naudoti senus failus.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Tęsti atnaujinimo procesą',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Dar kartą patikrinti failus',
]);

// Update database
$lang = array_merge($lang, [
	'STAGE_UPDATE_DATABASE'		=> 'Duomenų bazės atnaujinimas',

	'INLINE_UPDATE_SUCCESSFUL'	=> 'Duomenų bazės atnaujinimas baigtas sėkmingai. Dabar galite tęsti atnaujinimo procesą.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Atnaujinami plėtiniai',
]);

// Converter
$lang = array_merge($lang, [
	// Common converter messages
	'CONVERT_NOT_EXIST'	=> 'Toks konversijos modulis neegzistuoja.',
	'DEV_NO_TEST_FILE'	=> 'Konversijos modulyje neaprašytas test_file kintamasis. Jeigu esate tik vartotojas, jūs neturėtumėte matyti šios klaidos. Informuokite apie tai konversijos modulio autorių. Jeigu esate modulio autorius, turite įrašyti failo, kuris egzistuoja senojoje diskusijų lentoje, pavadinimą, kad galima būtų patikrinti kelia iki jo.',
	'COULD_NOT_FIND_PATH'	=> 'Nepavyko aptikti senosios diskusijų lentos. Patikrinkite visus nustatymus ir pabandykite dar kartą.<br />» Kaip šaltinio kelią jūs nurodėte %s.',
	'CONFIG_PHPBB_EMPTY'	=> 'phpBB3 kintamasis “%s” yra tuščias.',

	'MAKE_FOLDER_WRITABLE'	=> 'Įsitikinkite, kad šis katalogas egzistuoja ir internetinis serveris turi teises į jį rašyti ir pabandykite dar kartą:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'	=> 'Įsitikinkite, kad šie katalogai egzistuoja ir internetinis serveris turi teises į juos rašyti ir pabandykite dar kartą:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'	=> 'Testuoti dar kartą',

	'NO_TABLES_FOUND'	=> 'Lentelių nėra.',
	'TABLES_MISSING'	=> 'Nepavyko rasti šių lentelių<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'	=> 'Patikrinkite duomenų bazės lentelių prefiksą ir pabandykite dar kartą.',

	// Conversion in progress
	'CATEGORY'	=> 'Kategorija',
	'CONTINUE_CONVERT'	=> 'Tęsti konversiją',
	'CONTINUE_CONVERT_BODY'	=> 'Aptiktas ankstesnis mėginimas konvertuoti šią diskusijų lentą. Galite pasirinkti arba tęsti ankstesnį mėginimą, arba pradėti konversiją iš naujo.',
	'CONVERT_NEW_CONVERSION'	=> 'Pradėti konversiją iš naujo',
	'CONTINUE_OLD_CONVERSION'	=> 'Tęsti ankstesnį mėginimą konvertuoti',
	'POST_ID'	=> 'Pranešimo ID',

	// Start conversion
	'SUB_INTRO'	=> 'Įžanga',
	'CONVERT_INTRO'	=> 'Sveiki atvykę į phpBB Unifikuotą Konversijos Mechanizmą',
	'CONVERT_INTRO_BODY'	=> 'Iš čia galite perkelti duomenis iš kitų (įdiegtų) diskusijų lentų. Sąrašas apačioje rodo visus šiuo metu galimus konversijos modulius. Jeigu tarp jų nerandate savo naudojamos lentos modulio, apsilankykite mūsų puslapyje, kur galbūt rasite jums reikiamą modulį.',
	'AVAILABLE_CONVERTORS'	=> 'Galimos konversijos',
	'NO_CONVERTORS'	=> 'Konversijos modulių nėra.',
	'CONVERT_OPTIONS'	=> 'Galimybės',
	'SOFTWARE'	=> 'Diskusijų lentos programinė įranga',
	'VERSION'	=> 'Versija',
	'CONVERT'	=> 'Konvertuoti',

	// Settings
	'STAGE_SETTINGS'	=> 'Nustatymai',
	'TABLE_PREFIX_SAME'	=> 'Duomenų bazės lentelių prefiksas turi būti toks, koks naudojamas diskusijų lentos programinėje įrangoje iš kurios konvertuojate.<br />» Jūs įrašėte %s.',
	'DEFAULT_PREFIX_IS'	=> 'Konversijos modulis nerado duomenų bazės lentelių su nurodytu prefiksu. Įsitikinkite, kad įvedėte teisingus duomenis apie senąją diskusijų lentą. Standartinis %1$s lentelių prefiksas yra <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'	=> 'Įveskite konversijos nustatymus',
	'FORUM_PATH'	=> 'Kelias iki diskusijų lentos ',
	'FORUM_PATH_EXPLAIN'	=> 'Tai yra <strong>tiesioginis</strong> kelias nuo <strong>pagrindinio phpBB3 katalogo</strong> iki senosios diskusijų lentos.',
	'REFRESH_PAGE'	=> 'Perkrauti puslapį po kiekvieno konversijos etapo',
	'REFRESH_PAGE_EXPLAIN'	=> 'Jeigu šis nustatymas įjungtas, konversija perkraus puslapį po kiekvieno proceso etapo. Jeigu tai jūsų pirma konversija vykdoma testavimo tikslais, rekomenduojame išjungti šį nustatymą.',

	// Conversion
	'STAGE_IN_PROGRESS'	=> 'Vykdoma konversija',

	'AUTHOR_NOTES'	=> 'Autoriaus pastabos<br />» %s',
	'STARTING_CONVERT'	=> 'Pradedamas konversijos procesas',
	'CONFIG_CONVERT'	=> 'Konfigūracijos konversija',
	'DONE'	=> 'Baigta',
	'PREPROCESS_STEP'	=> 'Vykdomos pirminės užklausos',
	'FILLING_TABLE'	=> 'Užpildoma lentelė <strong>%s</strong>',
	'FILLING_TABLES'	=> 'Užpildomos lentelės',
	'DB_ERR_INSERT'	=> 'Klaida vykdant <code>INSERT</code> užklausą.',
	'DB_ERR_LAST'	=> 'Klaida vykdant <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'	=> 'Klaida vykdant <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Klaida vykdant <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'	=> 'Klaida vykdant <code>SELECT</code> užklausą.',
	'STEP_PERCENT_COMPLETED'	=> '<strong>%d</strong> etapas iš <strong>%d</strong>',
	'FINAL_STEP'	=> 'Vykdyti paskutinį etapą',
	'SYNC_FORUMS'	=> 'Pradedamas forumų sinchronizavimas',
	'SYNC_POST_COUNT'	=> 'Sinchronizuojamas pranešimų skaičius',
	'SYNC_POST_COUNT_ID'	=> 'Sinchronizuojamas pranešimų skaičius nuo %1$s iki %2$s <var>įrašo</var> .',
	'SYNC_TOPICS'	=> 'Pradedamas temų sinchronizavimas',
	'SYNC_TOPIC_ID'	=> 'Sinchronizuojamos temos nuo <var>topic_id</var> %1$s iki %2$s.',
	'PROCESS_LAST'	=> 'Apdorojamos paskutinės užklausos',
	'UPDATE_TOPICS_POSTED'	=> 'Generuojama temų datos informacija',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Generuojant temų datos informaciją įvyko klaida. Kai konversijos procesas bus baigtas, galėsite pabandyti padaryti tai dar kartą per administratoriaus valdymo pultą.',
	'CONTINUE_LAST'	=> 'Tęsti paskutiniu sakinius',
	'CLEAN_VERIFY'	=> 'Valoma ir tikrinama galutinė struktūra',
	'NOT_UNDERSTAND'	=> 'Nepavyko suprasti %s #%d, lentelė %s (“%s”)',
	'NAMING_CONFLICT'	=> 'Vardų konfliktas: %s ir %s yra panašūs arba vienodi<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'	=> 'Konversija baigta',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Jūsų diskusijų lenta sėkmingai konvertuota į phpBB 3.0. Galite <a href="../">prisijungti prie diskusijų lentos</a>. Prieš ištrinant diegimo katalogą ir įjungiant jūsų diskusijų lentą įsitikinkite, kad visi nustatymai buvo sėkmingai perkelti. Atsiminkite, kad pagalbą kaip naudoti phpBB galite rasti <a href="https://www.phpbb.com/support/documentation/3.0/">dokumentacijos puslapyje</a> ir <a href="https://www.phpbb.com/community/viewforum.php?f=46">palaikymo forumuose</a>.',

	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> atitinka vartotojų vardus:',
	'COLLIDING_USER'	=> '» vartotojo id: <strong>%d</strong> vartotojo vardas: <strong>%s</strong> (%d pranešimai)',
	'COLLIDING_USERNAMES_FOUND'	=> 'Senojoje diskusijų lentoje rasta keletas vartotojų vardų, kurie yra panašūs arba sutampa. Norėdami baigti konversiją ištrinkite arba pervadinkite šiuos vartotojų vardus.',
	'CONV_ERR_FATAL'	=> 'Kritinė konversijos klaida',
	'CONV_ERROR_ATTACH_FTP_DIR'	=> 'Senojoje diskusijų lentoje yra įjungta galimybė prikabinti failus FTP įkėlimo būdu. Išjunkite FTP įkėlimo galimybę ir nustatykite teisingą įkėlimo katalogą, tada į ją perkopijuokite visus prikabintus failus. Kai tai padarysite, paleiskite konversiją iš naujo.',
	'CONV_ERROR_CONFIG_EMPTY'	=> 'Konfigūracijos failas tuščias.',
	'CONV_ERROR_FORUM_ACCESS'	=> 'Nepavyko gauti informacijos apie forumo teises.',
	'CONV_ERROR_GET_CATEGORIES'	=> 'Nepavyko gauti informacijos apie kategorijos.',
	'CONV_ERROR_GET_CONFIG'	=> 'Nepavyko perskaityti diskusijų lentos konfigūracijos failo.',
	'CONV_ERROR_COULD_NOT_READ'	=> 'Nepavyko perskaityti “%s”.',
	'CONV_ERROR_GROUP_ACCESS'	=> 'Nepavyko gauti informacijos apie grupes.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Funkcija add_bots() aptiko neatitikimų grupių lentelėje. Visas specialias grupes jums reikės pridėti patiems.',
	'CONV_ERROR_INSERT_BOT'	=> 'Nepavyko įrašyti roboto į "users" lentelę.',
	'CONV_ERROR_INSERT_BOTGROUP'	=> 'Nepavyko įrašyti roboto į "bots" lentelę.',
	'CONV_ERROR_INSERT_USER_GROUP'	=> 'Nepavyko įrašyti vartotojo į "user_group" lentelę.',
	'CONV_ERROR_MESSAGE_PARSER'	=> 'Žinučių apdorojimo klaida',
	'CONV_ERROR_NO_AVATAR_PATH'	=> 'Pastaba kūrėjams: norėdami naudoti %s, turite aprašyti $convertor[\'avatar_path\'].',
	'CONV_ERROR_NO_FORUM_PATH'	=> 'Nenurodytas kelias iki senosios diskusijų lentos.',
	'CONV_ERROR_NO_GALLERY_PATH'	=> 'Pastaba kūrėjams: norėdami naudoti %s, turite aprašyti $convertor[\'avatar_gallery_path\'].',
	'CONV_ERROR_NO_GROUP'	=> '%2$s nėra grupės “%1$s”.',
	'CONV_ERROR_NO_RANKS_PATH'	=> 'Pastaba kūrėjams: norėdami naudoti %s, turite aprašyti $convertor[\'ranks_path\'].',
	'CONV_ERROR_NO_SMILIES_PATH'	=> 'Pastaba kūrėjams: norėdami naudoti %s, turite aprašyti $convertor[\'smilies_path\'].',
	'CONV_ERROR_NO_UPLOAD_DIR'	=> 'Pastaba kūrėjams: norėdami naudoti %s, turite aprašyti $convertor[\'upload_path\'].',
	'CONV_ERROR_PERM_SETTING'	=> 'Nepavyko įrašyti/atnaujinti teisių nustatymų.',
	'CONV_ERROR_PM_COUNT'	=> 'Nepavyko parinkti katalogo žinučių skaičiaus.',
	'CONV_ERROR_REPLACE_CATEGORY'	=> 'Nepavyko įrašyti naujo forumo vietoj senos kategorijos.',
	'CONV_ERROR_REPLACE_FORUM'	=> 'Nepavyko įrašyti naujo forumo vietoj senojo.',
	'CONV_ERROR_USER_ACCESS'	=> 'Nepavyko gauti informacijos apie vartotojo teises.',
	'CONV_ERROR_WRONG_GROUP'	=> '%2$s aprašyta neteisinga grupės “%1$s”.',
	'CONV_OPTIONS_BODY'	=> 'Šiame puslapyje turite įrašyti diskusijų lentos, iš kurios konvertuojate, duomenis. Užpildykite tos diskusijų lentos duomenų bazės laukus; konversijos procesas nieko nekeis nurodytoje duomenų bazėje. Geriau, kad diskusijų lenta, iš kurios konvertuojate, būtų išjungta.',
	'CONV_SAVED_MESSAGES'	=> 'Išsaugotos žinutės',

	'PRE_CONVERT_COMPLETE'	=> 'Visi pirminiai konversijos etapai baigti sėkmingai. Dabar galite pradėti tikrąjį konversijos procesą. Įsidėmėkite, kad kai kuriuos dalykus turėsite nustatyti patys. Po konversijos proceso patikrinkite vartotojams priskirtas teises, atstatykite paieškos indeksą, taip pat įsitikinkite kad visi failai buvo teisingai perkopijuoti, pavyzdžiui avatarai ir šypsenėlės.',
]);

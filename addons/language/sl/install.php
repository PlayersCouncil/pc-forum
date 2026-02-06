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
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Namestitev foruma',
	'SELECT_LANG'	=> 'Izberite jezik',

	'STAGE_INSTALL'	=> 'Nameščanje phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Uvod',
	'INTRODUCTION_BODY'		=> 'Dobrodošli v phpBB3!<br /><br />phpBB® je najpogosteje uporabljena odprtokodna forum rešitev na svetu. phpBB3 je zadnji paket, ki se je začel leta 2000. Tako kot njegovi predhodniki je phpBB3 funkcijko bogatejši, uporabniku prijazen in ga phpBB ekipa v celoti podpira. phpBB3 močno izboljšuje, kar je naredilo phpBB2 popularnega in dodaja pogosto željene funkcije, ki niso bile prisotne v prejšnjih verzijah. Upamo, da presega vaša pričakovanja.<br /><br />Ta namestitveni sistem vas bo vodil skozi namestitev phpBB3, posodobljenega na najnovejšo verzijo phpBB3, kot tudi pretvorbo v phpBB3 iz drugih forum sistemov (vključno z phpBB2). Za več informacij, vam svetujemo, da preberete <a href="%1$s">namestitveni vodič</a>.<br /><br />Če želite prebrati licenco phpBB3 ali spoznati pridobitev podpore in naše stališče o tem, prosimo, da izberete ustrezne možnosti iz stranskega menija. Za nadaljevanje izberite ustrezen jeziček zgoraj.',

	// Support page
	'SUPPORT_TITLE'		=> 'Podpora',
	'SUPPORT_BODY'		=> 'Popolna podpora bo na voljo za trenutno stabilno različico phpBB3 brezplačna. To vključuje:</p><ul><li>namestitev</li><li>nastavitve</li><li>tehnična vprašanja</li><li>težave v zvezi s potencialnimi hrošči v programski opremi</li><li>posodabljanje iz poskusne (RC) verzije na zadnjo stabilno</li><li>pretvorbo iz phpBB 2.0.x v phpBB3</li><li>pretvarjanje iz drugih forum platform v phpBB3 (glej <a href="https://www.phpbb.com/community/viewforum.php?f=486">pretvorbeni forum</a>)</li></ul><p>Vabimo uporabnike, ki še vedno uporabljajo beta različico phpBB3, da nadomestijo njihovo namestitev z najnovejšo različico.</p><h2>Razširitve / Stili</h2><p>Za vprašanja v zvezi z razširitvami, prosimo objavite v ustreznem <a href="https://www.phpbb.com/community/viewforum.php?f=451">forumu</a>.<br />Za vprašanja v zvezi s stili, predlogami in temami, prosimo objavite v ustreznem <a href="https://www.phpbb.com/community/viewforum.php?f=471">forumu</a>.<br /><br />Če se vaše vprašanje nanaša na poseben paket, potem objavite neposredni v temi namenjeni paketu.</p><h2>Pridobivanje podpore</h2><p><a href="https://www.phpbb.com/support/">Podporni oddelek</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Vodnik za hiter zagon</a><br /><br />Da boste vedno na tekočem z najnovejšimi novicami in izdajami nam sledite na <a href="https://www.twitter.com/phpbb/">Twitterju</a> in <a href="https://www.facebook.com/phpbb/">Facebooku</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Splošna javna licenca',

	// Install page
	'INSTALL_INTRO'			=> 'Dobrodošli v namestitvi',
	'INSTALL_INTRO_BODY'	=> 'S to možnostjo lahko namestite phpBB na vaš strežnik.</p><p>Da boste lahko nadaljevali, potrebujete nastavitve vaše baze podatkov. Če le-teh ne veste, kontaktirajte vašega gostitelja in ga povprašajte o njih. Brez njih namreč ne boste mogli nadaljevati. Potrebujete:</p>

	<ul>
		<li>The Database Type - tip baze podatkov, ki jo boste uporabljali.</li>
		<li>The Database server hostname or DSN - naslov strežnika baze podatkov.</li>
		<li>The Database server port - vrata strežnika baze podatkov (tega večinoma ne potrebujete).</li>
		<li>The Database name - ime baze podatkov na strežniku.</li>
		<li>The Database username and Database password - podatke o prijavi, da boste lahko dostopali do baze podatkov.</li>
	</ul>

	<p><strong>Opomba:</strong> če nameščate s pomočjo SQLite, raje uporabite celotno pot do vaše baze podatkov v DSN polju in pustite polji za uporabniško ime in geslo prazni. Iz varnostnih razlogov se prepričajte, da datoteka baze podatkov ni shranjena na lokaciji, ki je dostopna s spleta.</p>

	<p>phpBB3 podpira sledeče baze podatkov:</p>
	<ul>
		<li>MySQL 4.1.3 ali novejši (potreben MySQLi)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ali več (direktno ali preko ODBC)</li>
		<li>MS SQL Server 2005 ali več</li>
		<li>Oracle</li>
	</ul>

	<p>Vidne bodo samo baze podatkov, ki jih podpira vaš strežnik.',

	'ACP_LINK'	=> 'Pošlji me v <a href="%1$s">ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB je že nameščen.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB še ni nameščen.'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Datoteka ne obstaja',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Da bi lahko namestili phpBB, mora datoteka  %1$s obstajati.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Priporočljivo je, da datoteka  %1$s obstaja zaradi boljše uporabniške izkušnje.',
	'FILE_NOT_WRITABLE'						=> 'Datoteka ni zapisljiva',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Da bi lahko namestili phpBB mora biti datoteka %1$s zapisljiva.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Priporočljivo je, da je datoteka  %1$s zapisljiva zaradi boljše uporabniške izkušnje.',

	'DIRECTORY_NOT_EXISTS'						=> 'Direktorij ne obstaja',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Da lahko namestite phpBB mora direktorij %1$s obstajati.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Priporočljivo je, da direktorij %1$s obstaja za boljšo uporabniško izkušnjo.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Direktorij ni zapisljiv',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Da lahko namestite phpBB mora biti direktorij %1$s zapisljiv.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Priporočljivo je, da je direktorij %1$s zapisljiv za boljšo uporabniško izkušnjo.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP verzija',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB zahteva PHP verzijo 7.2.0 ali novejšo.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funkcija getimagesize() je na voljo',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Da bi phpBB deloval pravilno, mora biti getimagesize funkcija na voljo.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 podpora',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB ne bo deloval če PHP instalacija ne podpira UTF-8 kodiranja v PCRE razširitvi.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON podpora',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Da phpBB pravilno deluje, mora biti na voljo razširitev PHP JSON.',
	'PHP_MBSTRING_SUPPORT'				=> 'Podpora za PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Za pravilno delovanje phpBB mora biti na voljo razširitev PHP mbstring.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM podpora',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Da bi phpBB pravilno deloval, mora biti PHP XML/DOM razširitev na voljo.',
	'PHP_SUPPORTED_DB'					=> 'Podprte baze podatkov',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Imeti morate podporo za vsaj eno kompatibilno bazo podatkov znotraj PHP. Če ni dosegljivega nobenega modula baze podatkov, za nasvet povprašajte gostiteljskega dobavitelja ali relavatno PHP namestitveno dokumentacijo.',

	'RETEST_REQUIREMENTS'	=> 'Zahteve za ponovno testiranje',

	'STAGE_REQUIREMENTS'	=> 'Preverite zahteve'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Izpolniti morate vsa okenca v tem sklopu.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Namestitveni program je zaznal zakasnitev',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Namestitveni program je zaznal zakasnitev. Poskusite ponovno naložiti stran, kar lahko povzroči okvari podatkov. Predlagamo, da zvišate vaše nastavitve časovnih omejitev ali poskusite uporabiti CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Nastavite namestitvene podatke',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Podrobnosti administratorja',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administratorjev profil',
	'ADMIN_PASSWORD'			=> 'Administratorjevo geslo',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Potrdi administratorjevo geslo',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Geslo naj vsebuje od 6 do 30 znakov.)',
	'ADMIN_USERNAME'			=> 'Administratorjevo uporabniško ime',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Uporabniško ime naj vsebuje od 3 do 20 znakov.)',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> 'E-mail naslov, ki ste ga vnesli, je neveljaven.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Gesli, ki ste jih vnesli, se ne ujemata.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Vaše geslo je predolgo. Uporabite največ 30 znakov.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Vaše geslo je prekratko. Uporabite najmanj 6 znakov.',
	'INST_ERR_USER_TOO_LONG'	=> 'Uporabniško ime je predolgo. Uporabite največ 20 znakov.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Uporabniško ime je prekratko. Uporabite najmanj 3 znake.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Konfiguracija foruma',
	'DEFAULT_LANGUAGE'	=> 'Privzeti jezik',
	'BOARD_NAME'		=> 'Naslov foruma',
	'BOARD_DESCRIPTION'	=> 'Kratek opis foruma',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Nastavitve baze podatkov',

	// Form labels
	'DB_CONFIG'				=> 'Profil baze podatkov',
	'DBMS'					=> 'Tip baze podatkov',
	'DB_HOST'				=> 'Database server hostname ali DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN pomeni Data Source Name (ime vira podatkov) in je primeren samo za ODBC namestitve.',
	'DB_PORT'				=> 'Vrata strežnika baze podatkov',
	'DB_PORT_EXPLAIN'		=> 'Pustite prazno, razen če veste, da strežnik deluje na ne-standardnih vratih.',
	'DB_PASSWORD'			=> 'Geslo baze podatkov',
	'DB_NAME'				=> 'Ime baze podatkov',
	'DB_USERNAME'			=> 'Uporabniško ime baze podatkov',
	'DATABASE_VERSION'		=> 'Verzija data baze',
	'TABLE_PREFIX'			=> 'Predpona za tabele v bazi podatkov',
	'TABLE_PREFIX_EXPLAIN'	=> 'Predpona se mora začeti s črko in vsebovati izključno črke, števila in podčrtaje.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ preko ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Privzeto ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL z MySQLi razširitvijo',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Napaka pri namestitvi baze',
	'INST_ERR_NO_DB'				=> 'Ni mogoče naložiti PHP modula za izbran tip baze podatkov.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Predpona ni dovoljena. Začeti se mora s črko in vsebovati mora izključno črke, števila in podčrtaje.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Predpona, ki ste jo določili tabelam, je predolga. Največja dolžina je %d znakov.',
	'INST_ERR_DB_NO_NAME'			=> 'Ni natančno opredeljenega imena bae podatkov.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Označena datoteka baze podatkov se nahaja znotraj "directory tree" vaše moderatorske plošče. Datoteko bi bilo dobro prestaviti na lokacijo, ki ni dostopna s spleta. ',
	'INST_ERR_DB_CONNECT'			=> 'Ne morem se povezati z moderatorsko ploščo. Preglejte spodnje sporočilo.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Baza podatkov in direktorij morata biti zapisljiva.',
	'INST_ERR_DB_NO_ERROR'			=> 'Ni sporočila o napaki.',
	'INST_ERR_PREFIX'				=> 'Tabele z določeno predpono že obstajajo, izberite drugačno predpono.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Verzija MySQL, ki je nameščena na tem računalniku, se ne ujema z možnostjo â€śMySQL with MySQLi Extensionâ€ť, ki ste jo izbrali. Prosimo, da namesto te možnosti poskusite â€śMySQLâ€ť.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Nameščena različica SQLite je prestara, posodobiti jo morate vsaj vsaj na 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Na tem računalniku nameščena verzija Oracle zahteva, da postavite <var>NLS_CHARACTERSET</var> parameter na <var>UTF8</var>. Ali nadgradite vašo namestitev na 9.2+ , ali pa spremenite parameter.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Baza podatkov, ki ste jo izbrali, ni bila ustvarjena v <var>UNICODE</var> ali <var>UTF8</var> kodiranju. Poskusite namestitev z bazo podatkov v <var>UNICODE</var> ali <var>UTF8</var> kodiranju.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Schema datoteka ni zapisljiva',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Konfiguracija epošte',

	// Package info
	'PACKAGE_VERSION'					=> 'Različica paketa nameščena',
	'UPDATE_INCOMPLETE'				=> 'Vaša namestitev phpBB ni bila pravilno posodobljena.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Prosimo preberite spodnje informacije, da odpravite težavo.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Nepopolna posodobitev</h1>

		<p>Opazili smo, da zadnja posodobitev vaše namestitve phpBB ni bila končana. Obiščite <a href="%1$s" title="%1$s">database_update skripto</a> in jo zaženite. Ne pozabite izbrisati vašo "install" mapo ko ste uspešno posodobili bazo podatkov.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Nova funkcija <strong>%1$s</strong> je na voljo. Prosimo preberite <a href="%2$s" title="%2$s"><strong>obvestilo o izdaji</strong></a>, če želite izvedeti, kaj ponuja in kako nadgraditi.',
	'SERVER_CONFIG'				=> 'Profil strežnika',
	'SCRIPT_PATH'				=> 'Pot do skripte',
	'SCRIPT_PATH_EXPLAIN'		=> 'Relativna pot od domene, v kateri je nameščen phbBB, npr. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Hvala, vodstvo',
	'CONFIG_SITE_DESC'				=> 'Kratko besedilo za opis vašega foruma',
	'CONFIG_SITENAME'				=> 'vasa-domena.com',

	'DEFAULT_INSTALL_POST'			=> '<t>To je primer prispevka v vaši phpBB3 namestitvi. Ta prispevek, to temo in celo ta forum lahko izbrišete, če želite, saj je videti, da vse deluje!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Moja prva kategorija',
	'FORUMS_TEST_FORUM_DESC'		=> 'To je samo testni forum',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Moj Prvi Forum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administratorji strani',
	'REPORT_WAREZ'					=> 'Prispevek vsebuje povezave do nezakonite ali piratske programske opreme.',
	'REPORT_SPAM'					=> 'Objavljen prispevek ima namen zgolj oglaševati internetno stran ali kakšen drug proizvod.',
	'REPORT_OFF_TOPIC'				=> 'Javljen prispevek ne spada k temi.',
	'REPORT_OTHER'					=> 'Objavljen prispevek ne ustreza nobeni drugi kategoriji. Prosimo, uporabite opisno polje.',

	'SMILIES_ARROW'					=> 'Puščica',
	'SMILIES_CONFUSED'				=> 'Zmeden',
	'SMILIES_COOL'					=> 'Super',
	'SMILIES_CRYING'				=> 'Jokajoč ali Zelo Žalosten',
	'SMILIES_EMARRASSED'			=> 'Osramočen',
	'SMILIES_EVIL'					=> 'Zloben ali Zelo Nor',
	'SMILIES_EXCLAMATION'			=> 'Vzklik',
	'SMILIES_GEEK'					=> 'Piflar',
	'SMILIES_IDEA'					=> 'Ideja',
	'SMILIES_LAUGHING'				=> 'Smejoč',
	'SMILIES_MAD'					=> 'Nor',
	'SMILIES_MR_GREEN'				=> 'Slabo',
	'SMILIES_NEUTRAL'				=> 'Nevtralen',
	'SMILIES_QUESTION'				=> 'Vprašanje',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Zavija z Očmi',
	'SMILIES_SAD'					=> 'Žalosten',
	'SMILIES_SHOCKED'				=> 'Šokiran',
	'SMILIES_SMILE'					=> 'Nasmeh',
	'SMILIES_SURPRISED'				=> 'Presenečen',
	'SMILIES_TWISTED_EVIL'			=> 'Sprevrženo Zloben',
	'SMILIES_UBER_GEEK'				=> 'Čisti Piflar',
	'SMILIES_VERY_HAPPY'			=> 'Zelo Vesel',
	'SMILIES_WINK'					=> 'Mežik',

	'TOPICS_TOPIC_TITLE'			=> 'Dobrodošli v phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Pregled',
	'MENU_INTRO'		=> 'Uvod',
	'MENU_LICENSE'		=> 'Licenca',
	'MENU_SUPPORT'		=> 'Podpora',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Ustvarjanje konfiguracijske datoteke',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Dodajanje nastavitve konfiguracije',
	'TASK_ADD_DEFAULT_DATA'				=> 'Dodajanje privzetih nastavitev baze podatkov',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Ustvarjanje baze podatkov schema datoteke',
	'TASK_SETUP_DATABASE'				=> 'Vzpostavitev baze podatkov',
	'TASK_CREATE_TABLES'				=> 'Ustvarjanje tabel',

	// Install data
	'TASK_ADD_BOTS'				=> 'Registriranje botov',
	'TASK_ADD_LANGUAGES'		=> 'Nameščanje razpoložljivih jezikov',
	'TASK_ADD_MODULES'			=> 'Nameščanje modulov',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Ustvarjanje indeksa iskanja',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Nameščanje pakiranih razširitev',
	'TASK_NOTIFY_USER'			=> 'Pošiljanje obvestilne epošte',
	'TASK_POPULATE_MIGRATIONS'	=> 'Naseljevanje migracij',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Namestitev je uspešno zaključena',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul ni najden',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Modula ni možno najti, ker storitev %s ni določena.',

	'TASK_NOT_FOUND'				=> 'Opravilo ni najdeno',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Opravila ni možno najti, ker storitev %s ni določena.',

	'SKIP_MODULE'	=> 'Preskoči “%s” modul',
	'SKIP_TASK'		=> 'Preskoči “%s” opravilo',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Vse namestitvene naloge se morajo začeti z namestitorjem',
	'TASK_CLASS_NOT_FOUND'				=> 'Namestitorjeva opredelitev nalog je neveljavna. Ime storitve â€ś%1$sâ€ť je zasedena, pričakovani razred imenskega prostora je â€ś%2$sâ€ť. Za več informacij si oglejte dokumentacijo task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Namestitvena konfiguracijska datoteka ni zapisljiva.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Namesti phpBB',
	'CLI_UPDATE_BOARD'				=> 'Posodobi phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Prikaži konfiguracijo, ki bo uporabljena',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Potrdi konfiguracijsko datoteko',
	'CLI_CONFIG_FILE'				=> 'Konfiguracijska datoteka za uporabo',
	'MISSING_FILE'					=> 'Ne morem dostopati do datoteke %1$s',
	'MISSING_DATA'					=> 'Konfiguracijski datoteki manjkajo podatki ali morda vsebuje neveljavne nastavitve.',
	'INVALID_YAML_FILE'				=> 'Ne morem razčleniti YAML datoteke %1$s',
	'CONFIGURATION_VALID'			=> 'Konfiguracijska datoteka je veljavna',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Posodobi namestitev phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'S to možnostjo lahko posodobite vašo phpBB namestitev na zadnjo verzijo.<br />Med procesom bodo vse vaše datoteke preverjene glede njihove popolnosti. Lahko si ogledate vse razlike in datoteke pred posodabljanjem.<br /><br /> Samo posodabljanje datotek je lahko izvedeno na dva načina..</p><h2>Ročna Posodobitev</h2><p>S to posodobitvijo zgolj prenesete vaš osebni niz spremenjenih datotek in si s tem zagotovite, da ne boste izgubili vaših prilagoditev datotek, ki ste jih morda opravili. Ko prenesete ta paket, morate ročno naložiti datoteke na njihovo pravo mesto in sicer pod vašim phpBB root imenikom. Ko to naredite, lahko ponovno izvedete stopnjo pregleda datotek, da se prepričate, če ste datoteke prenesli na pravo mesto.</p><h2>Avtomatska Posodobitev s FTP</h2><p>Ta metoda je podobna prvi, vendar ni potrebno prenašati spremenjenih datotek in jih nato nalagati. To bo namreč narejeno samodejno. Če želite uporabljati to metodo, morate poznati prijavne podrobnosti FTP, ker bodo zahtevane. Ko končate, ponovno izvedite pregled datotek in se prepričajte, da je bilo vse posodobljeno pravilno.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Sporočilo ob izidu</h1>

		<p>Prosimo, preberite obvestilo, priloženo verziji, ki je izšla zadnja predno nadaljujete s procesom posodabljanja. Lahko vsebuje koristne informacije. Prav tako vsebuje povezave celotnega prenosa in tudi log. za spremembo</p>

		<br />

		<h1>Kako posodobiti vašo namestitev s Polnim paketom</h1>

		<p>Priporočen način posodobitve vaše namestitve, ki je naveden tu, je veljaven zgolj za napredni paket za posodobitev. Prav tako lahko posodobite vašo namestitev preko uporabe metod navedenih v INSTALL.html dokumentu. Koraki za avtomatično posodabljanje phpBB3 so:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Varnostno kopirajte vse datoteke foruma in bazo podatkov.</strong></li>
			<li>Pojdite na <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com stran za prenos</a> in prenesite zadnji "Full Package" arhiv.</li>
			<li>Razpakirajte datoteko.</li>
			<li>Odstranite (izbrišite) <code class="inline">config.php</code> datoteko ter <code class="inline">/images</code>, <code class="inline">/store</code> in <code class="inline">/files</code> mape <em>s prenešenega paketa</em> (ne z vašega foruma).</li>
			<li>Pojdite v ANP, Nastavitve foruma in se prepričajte, da je slog prosilver nastavljen kot privzeti. V kolikor ni, ga nastavite.</li>
			<li>Izbrišite <code class="inline">/vendor</code> in <code class="inline">/cache</code> mapi s forumove privzete mape na strežniku.</li>
			<li>Preko FTP ali SSH naložite preostale datoteke in mape (preostalo vsebino phpBB3 mape) v privzeto mapo vašega foruma in prepišite obstoječe datoteke. (Opomba: poskrbite, da ne izbrišete nobene razžiritve v <code class="inline">/ext</code> mapi ko nalagate novo vsebino.)</li>
			<li><strong><a href="%1$s" title="%1$s">Sedaj pričnite namestitveni proces preko http://vasastran.si/install</a>.</strong></li>
			<li>Sledite korakom posodobitve baze podatkov in pustite, da se posodobitev izvede.</li>
			<li>Preko FTP ali SSH izbrišite <code class="inline">/install</code> mapo z privzete mape vašega foruma.<br><br></li>
		</ol>

		<p>Vaš forum je sedaj posodobljen z vsemi vašimi uporabniki in objavami. Nadaljne naloge:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Posodobite svoj jezikovni paket</li>
			<li>Posodobite svojo temo<br><br></li>
		</ul>

		<h1>Kako posodobiti vašo namestitev z Naprednim posodobilnkom</h1>

		<p>Napredni posodobilnik je priporočen samo za izkušene uporabnike, če so bil vaše namestitvene phpBB datoteke prirejene. Namestitev lahko tudi posodobite z metodami, navedenimi v datoteki INSTALL.html. Koraki za posodobitev phpBB3 preko naprednega posodobilnika so:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Pojdite na <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com stran za prenos</a> in prenesite datoteko "Advanced Update Package".</li>
			<li>Razpakirajte datoteko.</li>
			<li>Naložite celotni razpakirani "install" in "vendor" mapi v vaš privzet forumski direktorij (tja kjer se nahaja datoteka config.php).<br><br></li>
		</ol>

		<p>Vaš forum bo nedosegljiv za uporabnike zaradi namestitvenega direktorija, ki ste ga naložili.<br /><br />
		<strong><a href="%1$s" title="%1$s">Zdaj začnite postopek posodobitve tako, da brskalnik usmerite v namestitveno mapo</a>.</strong><br />
		<br />
		Nato boste vodeni skozi proces posodabljanja. Ko bo posodabljanje končano, boste o tem obveščeni.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Vrsta posodobitve za zagon',

	'UPDATE_TYPE_ALL'		=> 'Posodobite datotečni sistem in bazo podatkov',
	'UPDATE_TYPE_DB_ONLY'	=> 'Posodobite samo bazo podatkov',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Načini posodobljene datoteke',

	'UPDATE_FILE_METHOD'			=> 'Način posodobljene datoteke',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Prenesite spremenjene datoteke v arhivu',
	'UPDATE_FILE_METHOD_FTP'		=> 'Posodobite datoteko preko FTP (Samodejno)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Posodobite datoteke preko neposrednega dostopa datotek (Samodejno)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Izberi arhivski format za prenos',

	// FTP settings
	'FTP_SETTINGS'					=> 'FTP nastavitve',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Neveljaven posodobitveni direktorij. Poskrbite, da boste naložili ustrezne datoteke.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Vaša verzija je zastarela. Ni potrebe, da zaženete orodje za posodobitev. Če želite izvesti pregled popolnosti vaših datotek, se prepričajte, da ste naložili prave datoteke za posodabljanje.',
	'OLD_UPDATE_FILES'				=> 'Datoteke za posodabljanje so zastarele. Najdene datoteke za posodabljanje so namenjene posodobitvi phpBB %1$s na phpBB %2$s, toda zadnja verzija phpBB je %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Datoteke za posodabljanje, ki so bile najdene, ne gredo skupaj z vašo nameščeno verzijo. Vaša nameščena verzija je %1$s in datoteke za posodabljanje so za posodabljanje phpBB %2$s na %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Posodobljene datoteke',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Preverite datoteke za posodobitev',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Datotečno razlikovanje ni uspelo odpreti %s.',

	'UPDATE_FILE_DIFF'		=> 'Razlikovanje spremenjenih datotek',
	'ALL_FILES_DIFFED'		=> 'Vse spremenjene datoteke so bile razlikovane.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Posodobi datoteke',

	'DOWNLOAD'							=> 'Prenesi',
	'DOWNLOAD_CONFLICTS'				=> 'Konflikti med prenašanjem datoteke.',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Išči za &lt;&lt;&lt; za opaziti konflikte',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Prenesi arhiv prilagojenih datotek',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Odpakirajte arhiv, ko bo prenešen. V njem boste našli prilagojene datoteke, ki jih morate naložiti v vaš phpBB root imenik. Nato datoteke naložite na njihove individualne lokacije. Ko naložite vse datoteke, jih ponovno preverite z drugim gumbom, ki se nahaja spodaj.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Datoteka je že posodobljena.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Ni bilo dovoljeno primerjanje datotek.',
	'FILE_USED'						=> 'Informacije uporabljene iz',			// Single file
	'FILES_CONFLICT'				=> 'Sporne datoteke',
	'FILES_CONFLICT_EXPLAIN'		=> 'Sledeče datoteke so prilagojene in ne predstavljajo izvornih datotek stare verzije. phpBB je določil, da te datoteke ustvarjajo navzkrižja, če jih želimo strniti. Prosimo, raziščite navzkrižja in jih poskusite ročno rešiti, ali pa nadaljujte s posodobitvijo tako, da izberete metodo strnitve, ki se vam zdi najboljša. Če navzkrižja rešite ročno, po njihovi prilagoditvi ponovno preverite datoteke. Prav tako lahko izbirate med metodami strnitve za vsako datoteko. Rezultat prve bo viden v datoteki, kjer bodo izgubljene navzkrižne linije z vaše stare datoteke, rezultat druge pa bo izguba sprememb iz novejše datoteke.',
	'FILES_DELETED'					=> 'Izbrisane datoteke',
	'FILES_DELETED_EXPLAIN'			=> 'Naslednje datoteke ne obstajajo v novejši različici. Morate jih izbrisati.',
	'FILES_MODIFIED'				=> 'Prilagojene datoteke',
	'FILES_MODIFIED_EXPLAIN'		=> 'Sledeče datoteke so prilagojene in ne predstavljajo izvornih datotek stare verzije. Posodobljena datoteka bo spoj med vašimi prilagoditvami in novimi datotekami.',
	'FILES_NEW'						=> 'Nove datoteke',
	'FILES_NEW_EXPLAIN'				=> 'Sledeče datoteke trenutno ne obstajajo znotraj vaše namestitve.',
	'FILES_NEW_CONFLICT'			=> 'Nove sporne datoteke',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Sledeče datoteke so nove znotraj zadnje verzije, vendar je bilo ugotovljeno, da že obstaja datoteka z enakim imenom in na enaki poziciji. Ta datoteka bo zamenjana z novo.',
	'FILES_NOT_MODIFIED'			=> 'Neprilagojene datoteke',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Sledeče datoteke niso bile prilagojene in predstavljajo izvorne datoteke verzije phpBB, ki jo želite posodobiti.',
	'FILES_UP_TO_DATE'				=> 'Že posodobljene datoteke',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Sledeče datoteke so že posodobljene in ne potrebujejo posodabljanja.',
	'FILES_VERSION'					=> 'Različina datoteke',
	'TOGGLE_DISPLAY'					=> 'Poglej/Skrij seznam datotek',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Posodabljanje datotek',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Posodabljalnik datotek â€ś%1$sâ€ś ni uspel. Namestitveni program bo poskušal nadomestnega na â€ś%2$sâ€ś.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Posodabljalnik ni uspel. Ni drugih nadomestnih metod na voljo.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Nadaljuj proces posodobitve',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Ponovno preveri datoteke',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Posodobi bazo podatkov',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Posodabljanje baze podatkov je bilo uspešno. Sedaj nadaljujte s procesom posodobitve.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Posodabljanje razširitev',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Želeni preoblikovalec ne obstaja.',
	'DEV_NO_TEST_FILE'			=> 'Nobena vrednost ni bila označena za test_file variablo v preoblikovalcu. Če ste uporabnik tega preoblikovalca, napake ne bi smeli videti, zato prosimo, da to sporočilo javite avtorju preoblikovalca. Če ste avtor preoblikovalca, morate natančno opredeliti ime datoteke, ki obstaja v izvorni moderatorski plošči, da s tem omogočite preverbo poti do nje.',
	'COULD_NOT_FIND_PATH'		=> 'Poti do vaše prejšnje administrativne plošče ni bilo mogoče najti. Prosimo, preverite vaše nastavitve in poskusite znova.<br />Â» Izbrana izvorna pot je bila %s.',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 config variable (spremenljivka profila) za "%s"  je prazna.',

	'MAKE_FOLDER_WRITABLE'		=> 'Prosimo, prepričajte se, da ta mapa obstaja in je popisljiva s strani spletnega strežnika, nato pa poskusite znova:<br />Â»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Prosimo, prepričajte se, da te mape obstajajo in so popisljive s strani spletnega strežnika, nato pa poskusite znova:<br />Â»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Ponovno testiraj',

	'NO_TABLES_FOUND'			=> 'Nisem našel nobene tabele.',
	'TABLES_MISSING'			=> 'Ne najdem naslednjih tabel<br />Â» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Prosimo, preverite predpone tabel in poskusite znova.',

	// Conversion in progress
	'CATEGORY'					=> 'Kategorija',
	'CONTINUE_CONVERT'			=> 'Nadaljuj pretvorbo',
	'CONTINUE_CONVERT_BODY'		=> 'Prejšnji poskus pretvorbe je bil končan. Sedaj lahko izbirate ali boste začeli novo pretvorbo ali nadaljevali prejšnjega.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova pretvorba',
	'CONTINUE_OLD_CONVERSION'	=> 'Nadaljuj prej začeto pretvorbo',
	'POST_ID'					=> 'ID objave',

	// Start conversion
	'SUB_INTRO'					=> 'Predstavitev',
	'CONVERT_INTRO'				=> 'Dobrodošli na phpBB Unified Convertor Framework ',
	'CONVERT_INTRO_BODY'		=> 'Tu lahko uvozite oz. prenesete podatke z ostalih (nameščenih) sistemov moderatorskih plošč. Spodnji seznam vsebuje vsa merila preoblikovanja (conversion modules), ki so trenutno na voljo. Če seznam ne vsebuje nobenega preoblikovalca za programsko opremo moderatorske plošče, ki jo želite preoblikovati, preverite, prosimo, našo spletno stran, kjer so nadaljne možnosti preoblikovanja morda na voljo za prenos (download).',
	'AVAILABLE_CONVERTORS'		=> 'Dosegljivi preoblikovalci',
	'NO_CONVERTORS'				=> 'Noben preoblikovalec ni na voljo za uporabo.',
	'CONVERT_OPTIONS'			=> 'Možnosti',
	'SOFTWARE'					=> 'Programska oprema moderatorske plošče',
	'VERSION'					=> 'Verzija',
	'CONVERT'					=> 'Pretvori',

	// Settings
	'STAGE_SETTINGS'			=> 'Nastavitve',
	'TABLE_PREFIX_SAME'			=> 'Predpona tabele mora biti ena od tistih, ki jih uporablja programska oprema iz katere pretvarjate.<br />Â» Določena predpona za tabele je bila %s.',
	'DEFAULT_PREFIX_IS'			=> 'Pretvornik ni mogel najti tabel z določenimi predponami. Prosimo, prepričajte se, da ste vstavili pravilne podrobnosti za moderatorsko ploščo, ki jo preoblikujete. Privzeta predpona tabele za %1$s je <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Natančno opredeli možnosti pretvorbe',
	'FORUM_PATH'				=> 'Pot moderatorske plošče',
	'FORUM_PATH_EXPLAIN'		=> 'To je <strong>relativna</strong> pot na disku do vaše prejšnje plošče iz <strong>temelj te phpBB3 namestitve</strong>.',
	'REFRESH_PAGE'				=> 'Za nadaljevanje pretvorbe osvežite stran',
	'REFRESH_PAGE_EXPLAIN'		=> 'Če kliknete Da, bo preoblikovalec osvežil stran, kar bo omogočilo nadaljevanje pretvorbe po končanem koraku. Če je to vaša prva pretvorba, ki je namenjen testiranju in nadalje določanju napak, predlagamo, da kliknete Ne.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Pretvorba v poteku',

	'AUTHOR_NOTES'				=> 'Avtorjeve zabeležke<br />Â» %s',
	'STARTING_CONVERT'			=> 'Začenjam postopek pogovarjanja',
	'CONFIG_CONVERT'			=> 'Preoblikovanje profila',
	'DONE'						=> 'Končano',
	'PREPROCESS_STEP'			=> 'Izvajanje pred-procesnih funkcij/poizvedb.',
	'FILLING_TABLE'				=> 'Izpolnjevanje tabele <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Izpolnjevanje tabel',
	'DB_ERR_INSERT'				=> 'Napaka pri predelovanju vprašanja <code>VSTAVI</code>.',
	'DB_ERR_LAST'				=> 'Napaka pri predelovanju <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Napaka pri izvrševanju <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Napaka pri izvrševanju <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Napaka pri izvajanju vprašanja <code>IZBERI</code>. ',
	'STEP_PERCENT_COMPLETED'	=> 'Korak <strong>%d</strong> od <strong>%d</strong>',
	'FINAL_STEP'				=> 'Izvajam zadnji korak',
	'SYNC_FORUMS'				=> 'Začenjam sinhronizacijo forumov',
	'SYNC_POST_COUNT'			=> 'Sinhroniziram post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sinhroniziram post_counts z <var>entry</var> %1$s na %2$s.',
	'SYNC_TOPICS'				=> 'Začenjam sinhronizacijo tem',
	'SYNC_TOPIC_ID'				=> 'Sinhroniziram teme z <var>topic_id</var> %1$s na %2$s.',
	'PROCESS_LAST'					=> 'Predelujem zadnje navedbe',
	'UPDATE_TOPICS_POSTED'		=> 'Ustvarjam informacije o objavljenih temah.',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Med ustvarjanjem informacije o objavljenih temah je prišlo do napake. Ko se proces pretvarjanja zaključi, lahko ponovno poskusite s tem korakom v ANP.',
	'CONTINUE_LAST'				=> 'Nadaljuj zadnje navedbe',
	'CLEAN_VERIFY'				=> 'Čiščenje in preverjanje končne strukture',
	'NOT_UNDERSTAND'			=> 'Ne razumem %s #%d, tabele %s ("%s")',
	'NAMING_CONFLICT'			=> 'Imenovani navzkrižji: %s in %s sta drugo ime za<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Pretvorba zaključena',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Uspešno ste prenesli svojo ploščo na phpBB 3.3. Sedaj se lahko prijavite in <a href="../">dostopate do svoje moderatorske plošče</a>. Prosimo, prepričajte se, da so bile nastavitve pravilno prenešene, predno usposobite moderatorsko ploščo s tem, da zaprete kažipot za namestitev. Zapomnite si, da je pomoč o uporabi phpBB na voljo na internetu na povezavah <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Dokumentacija</a> in <a href="https://www.phpbb.com/community/viewforum.php?f=661">podpora forumom</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> je čisto uporabniško ime za:',
	'COLLIDING_USER'					=> '» ID uporabnika: <strong>%d</strong> uporabniško ime: <strong>%s</strong> (%d objav)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Na vaši stari plošči so bila najdena nasprotujoča se uporabniška imena. Če želite dokončati pretvorbo, izbrišite ali preimenujte te uporabnike, tako da bo na vaši stari plošči za vsako čisto uporabniško ime samo en uporabnik.',
	'CONV_ERR_FATAL'					=> 'Usodna napaka pri pretvorbi',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Nalaganje priponk FTP (FTP upload) je omogočen na stari moderatorski plošči. Prosimo, onemogočite možnost FTP upload in se prepričajte, da je veljaven imenik za nalaganje natančno označen, nato kopirajte vse priponke na ta, novi dostopni spletni imenik. Ko končate, ponovno zaženite preoblikovalca.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nobena informacija profila ni na voljo za to pretvorbo.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Ne morem najti informacij o dostopu do foruma.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Ne morem priti do kategorij.',
	'CONV_ERROR_GET_CONFIG'				=> 'Ne morem obnoviti profila vaše administrativne plošče.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Ne morem razbrati oz. dostopati do "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Ne morem dobiti podatkov o pristnosti skupine.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Neskladnost v seznamu skupin je bila najdena v add_bots() - dodati morate vse posebne skupine, če delate ročno.',
	'CONV_ERROR_INSERT_BOT'				=> 'Ne morem vstaviti bot v tabelo uporabnikov.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Ne morem vstaviti bot v tabelo Â»botsÂ«.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Ne morem vstaviti uporabnika v tabelo skupin uporabnikov.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Napaka pri analizi sporočila',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Opomba razvijalcu: natančno morate opredeliti $convertor[\'avatar_path\'], za uporabo %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Ustrezna pot do izvorne administrativne plošče ni bila natančno opredeljena.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Opomba razvijalcu: natančno morate opredeliti $convertor[\'avatar_gallery_path\'], za uporabo %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Skupina "%1$s" ni bila najdena v %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Opomba razvijalcu: natančno morate opredeliti $convertor[\'ranks_path\'], za uporabo %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Opomba razvijalcu: natančno morate opredeliti $convertor[\'smilies_path\'], za uporabo %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Opomba razvijalcu: natančno morate opredeliti $convertor[\'upload_path\'], za uporabo %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Ne morem vstaviti oz. nadgraditi nastavitve za privolitev.',
	'CONV_ERROR_PM_COUNT'				=> 'Ne morem izbrati datoteke pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Ne morem vstaviti novega foruma, ki nadomešča staro kategorijo.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Ne morem vstaviti novega foruma, ki nadomešča stari forum.',
	'CONV_ERROR_USER_ACCESS'			=> 'Ne morem dobiti podatkov o pristnosti uporabnika.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Napačna skupina "%1$s" najdena v %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Ta stran zbira podatke, ki so potrebni za dostop do izvorne administrativne plošče. Vstopite v podrobnosti baze podatkov vaše prejšnje administrativne plošče; preoblikovalec ne bo spremenil ničesar iz spodnje baze podatkov. Izvorna administrativna plošča bi morala biti onesposobljena, kar vam bo omogočalo dosledno pretvorbo.',
	'CONV_SAVED_MESSAGES'				=> 'Shranjena sporočila',

	'PRE_CONVERT_COMPLETE'			=> 'Vsi predpretvorbeni koraki so bili uspešno zaključeni. Sedaj lahko začnete dejanski proces pretvorbe. Vedite, da boste morali nekatere stvari morda urediti ročno. Po pretvorbi (preverite posebno dodeljena dovoljenja) obnovite vaše kazalo iskanj, če je to potrebno, in se prepričajte, da so bile datoteke pravilno prekopirane (npr. avatorji in smeški).',
));

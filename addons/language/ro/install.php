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
	'INSTALL_PANEL'	=> 'Panoul de instalare',
	'SELECT_LANG'	=> 'Selectare limbă',

	'STAGE_INSTALL'	=> 'Instalare phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introducere',
	'INTRODUCTION_BODY'		=> 'Bine ați venit la phpBB3!<br /><br />phpBB® este cea mai utilizată soluție de forum open source din lume. phpBB3 este cea mai recentă versiune dintr-o serie de pachete începută în anul 2000. La fel ca predecesorii săi, phpBB3 este bogat în funcționalități, ușor de utilizat și complet susținut de echipa phpBB. phpBB3 îmbunătățește considerabil ceea ce a făcut phpBB2 popular și adaugă funcții frecvent solicitate care nu erau prezente în versiunile anterioare. Sperăm să vă depășească așteptările.<br /><br />Acest sistem de instalare vă va ghida prin instalarea phpBB3, actualizarea la cea mai recentă versiune de phpBB3 de la versiunile anterioare, precum și conversia la phpBB3 de la un alt sistem de forumuri de discuții (inclusiv phpBB2). Pentru mai multe informații, vă încurajăm să citiți <a href="%1$s">ghidul de instalare</a>.<br /><br />Pentru a citi licența phpBB3 sau pentru a afla despre obținerea de suport și poziția noastră cu privire la acesta, vă rugăm să selectați opțiunile respective din meniul lateral. Pentru a continua, vă rugăm să selectați fila corespunzătoare de mai sus.',

	// Support page
	'SUPPORT_TITLE'		=> 'Ajutor',
	'SUPPORT_BODY'		=> 'Se va oferi suport complet pentru versiunea stabilă curentă a phpBB3, gratuit. Aceasta include:</p><ul><li>instalare</li><li>configurare</li><li>întrebări tehnice</li><li>probleme legate de potențiale erori în software</li><li>actualizarea de la versiunile Release Candidate (RC) la cea mai recentă versiune stabilă</li><li>convertirea de la phpBB 2.0.x la phpBB3</li><li>convertirea de la alte software-uri de forumuri de discuții la phpBB3 (vă rugăm să consultați <a href="https://www.phpbb.com/community/viewforum.php?f=486">Forum Convertori</a>)</li></ul><p>Încurajăm utilizatorii care încă folosesc versiuni beta de phpBB3 să înlocuiască instalarea cu o copie nouă a celei mai recente versiuni.</p><h2>Extensii / Stiluri</h2><p>Pentru probleme legate de Extensii, vă rugăm să postați în <a href="https://www.phpbb.com/community/viewforum.php?f=451">Forum Extensii</a> corespunzător.<br />Pentru probleme legate de stiluri, șabloane și teme, vă rugăm să postați în <a href="https://www.phpbb.com/community/viewforum.php?f=471">Forum Stiluri</a> corespunzător.<br /><br />Dacă întrebarea dumneavoastră se referă la un pachet specific, vă rugăm să postați direct în subiectul dedicat pachetului.</p><h2>Obținerea Suportului</h2><p><a href="https://www.phpbb.com/support/">Secțiunea de Suport</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Ghid de Start Rapid</a><br /><br />Pentru a vă asigura că sunteți la curent cu cele mai recente știri și lansări, urmăriți-ne pe <a href="https://www.twitter.com/phpbb/">Twitter</a> și <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',
	
	// License
	'LICENSE_TITLE'		=> 'Licența Publică Generală',

	// Install page
	'INSTALL_INTRO'				=> 'Bine aţi venit la instalare',
	'INSTALL_INTRO_BODY'		=> 'Cu această opţiune puteţi să instalaţi phpBB pe serverul propriu.</p><p>Pentru a începe aveţi nevoie de setările bazei de date. Dacă nu ştiţi setările bazei de date, contactaţi provider-ul hostului şi cereţi informaţii despre aceastea. Nu veţi putea continua fără aceste setări. Aveţi nevoie de:</p>

	<ul>
		<li>Tipul bazei de date - baza de date pe care o veţi folosi.</li>
		<li>Numele serverului de găzduire a bazei de date sau DSN-ul acesteia - adresa către serverul bazei de date.</li>
		<li>Portul serverului bazei de date - portul serverului bazei de date (în majoritatea cazurilor acesta nu este necesar).</li>
		<li>Numele bazei de date - numele bazei de date de pe server.</li>
		<li>Numele de utilizator şi parola bazei de date - Datele de autentificare pentru a accesa baza de date.</li>
	</ul>

	<p><strong>Notă:</strong> dacă instalaţi forumul folosind SQLite, va trebui să specificaţi în câmpul DSN calea completă către fişierul bazei de date şi să lăsaţi necompletate câmpurile nume utilizator şi parolă. Din motive de securitate va trebui să vă asiguraţi că fişierul bazei de date nu este stocat într-o locaţie accesibilă de pe web.</p>

	<p>phpBB3 suportă următoarele baze de date:</p>
	<ul>
		<li>MySQL 4.1.3 sau mai nou (MySQLi suportat deasemenea)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 sau mai nou (direct sau via ODBC)</li>
		<li>MS SQL Server 2005 sau mai nou (nativ)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Vor fi afişate numai acele baze de date suportate pe serverul propriu.',

	'ACP_LINK'	=> 'Du-mă spre <a href="%1$s">Panoul Administratorului</a>',
	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB este deja instalat.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB nu este încă instalat.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Fișierul nu există',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'Pentru a putea instala phpBB, fișierul %1$s trebuie să existe.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Este recomandat ca fișierul %1$s să existe pentru o experiență mai bună a utilizatorilor forumului.',
	'FILE_NOT_WRITABLE'						=> 'Fișierul nu poate fi scris',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Pentru a putea instala phpBB, fișierul %1$s trebuie să aibă permisiuni de scriere.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Este recomandat ca fișierul %1$s să aibă permisiuni de scriere pentru o experiență mai bună a utilizatorilor forumului.',

	'DIRECTORY_NOT_EXISTS'						=> 'Directorul nu există',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Pentru a putea instala phpBB, directorul %1$s trebuie să existe.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Este recomandat ca directorul %1$s să existe pentru o experiență mai bună a utilizatorilor forumului.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Directorul nu poate fi scris',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'Pentru a putea instala phpBB, directorul %1$s trebuie să aibă permisiuni de scriere.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Este recomandat ca directorul %1$s să aibă permisiuni de scriere pentru o experiență mai bună a utilizatorilor forumului.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versiune PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB necesită versiunea PHP 7.2.0 sau mai mare.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Funcția PHP getimagesize() este necesară',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Pentru ca phpBB să funcționeze corect, funcția getimagesize trebuie să fie disponibilă.',
	'PCRE_UTF_SUPPORT'					=> 'Suport PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB nu va funcționa dacă instalarea PHP nu este compilată cu suport UTF-8 în extensia PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Suport PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Pentru ca phpBB să funcționeze corect, extensia PHP JSON trebuie să fie disponibilă.',
	'PHP_MBSTRING_SUPPORT'				=> 'Suport PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Pentru ca phpBB să funcționeze corect, extensia PHP mbstring trebuie să fie disponibilă.',
	'PHP_XML_SUPPORT'					=> 'Suport PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'Pentru ca phpBB să funcționeze corect, extensia PHP XML/DOM trebuie să fie disponibilă.',
	'PHP_SUPPORTED_DB'					=> 'Baze de date suportate',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Trebuie să aveți suport pentru cel puțin o bază de date compatibilă în PHP. Dacă nu sunt afișate module de baze de date disponibile, ar trebui să contactați furnizorul de găzduire sau să consultați documentația relevantă de instalare PHP pentru sfaturi.',

	'RETEST_REQUIREMENTS'	=> 'Reverificati cerințele',

	'STAGE_REQUIREMENTS'	=> 'Verificați cerințele',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Trebuie să completaţi toate câmpurile din acest bloc',

	'TIMEOUT_DETECTED_TITLE'	=> 'Programul de instalare a detectat un timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Programul de instalare a detectat un timeout; puteți încerca să reîmprospătați pagina, ceea ce poate duce la coruperea datelor. Vă sugerăm să creșteți setările de timeout sau să încercați să utilizați CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Setați datele de instalare',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detalii administrator',

	// Form labels
	'ADMIN_CONFIG'				=> 'Configurare administrator',
	'ADMIN_PASSWORD'			=> 'Parolă administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmaţi parola administratorului',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Specificaţi o parolă cu lungimea între 6 şi 30 caractere.',
	'ADMIN_USERNAME'			=> 'Numele de utilizator al administratorului',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Specificaţi un nume de utilizator cu lungimea între 3 şi 20 caractere.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'The email address you entered is invalid.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Parolele specificate nu se potrivesc.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Parola specificată este prea lungă. Lungimea maximă este de 30 de caractere.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Parola specificată este prea scurtă. Lungimea minimă este de 6 caractere.',
	'INST_ERR_USER_TOO_LONG'	=> 'Numele de utilizator specificat este prea lung. Lungimea maximă este de 20 de caractere.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Numele de utilizator specificat este prea scurt. Lungimea minimă este de 3 caractere.',

	//
	// Board data
	//
	//Form labels
	'BOARD_CONFIG'		=> 'Configurare forum',
	'DEFAULT_LANGUAGE'	=> 'Limbă implicită',
	'BOARD_NAME'		=> 'Titlul forumului',
	'BOARD_DESCRIPTION'	=> 'Descriere scurtă a forumului',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Setări bază de date',

	// Form labels
	'DB_CONFIG'				=> 'Configurare bază de date',
	'DBMS'					=> 'Tipul bazei de date',
	'DB_HOST'				=> 'Nume gazdă pentru serverul bazei de date sau DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN (Numele sursei de date) este relevant doar pentru instalările ODBC. Pentru PostgreSQL, folosiţi localhost pentru a vă conecta la serverul local prin socket-ul domeniului UNIX şi 127.0.0.1 pentru a vă conecta prin TCP. PEntru SQLite, specificați calea completă către fișierul bazei de date proprii.',
	'DB_PORT'				=> 'Portul serverului bazei de date',
	'DB_PORT_EXPLAIN'		=> 'Lăsaţi acest câmp necompletat doar dacă ştiţi că serverul operează pe un port ce nu e standard.',
	'DB_PASSWORD'			=> 'Parola bazei de date',
	'DB_NAME'				=> 'Numele bazei de date',
	'DB_USERNAME'			=> 'Numele de utilizator al bazei de date',
	'DATABASE_VERSION'		=> 'Versiunea bazei de date',
	'TABLE_PREFIX'			=> 'Prefixul pentru tabele în baza de date',
	'TABLE_PREFIX_EXPLAIN'	=> 'Prefixul trebuie să înceapă cu o literă și să conțină doar litere, cifre și liniuțe de subliniere.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativ ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL cu Extensie MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'Eroare la instalare',
	'INST_ERR_NO_DB'				=> 'Nu s-a putut încărca modulul PHP pentru tipul bazei de date selectat.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Prefixul introdus este invalid. Trebuie să înceapă cu o literă și să conțină doar litere, cifre și liniuțe de subliniere',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Prefixul tabelei specificat este prea lung. Lungimea maximă este de %d caractere.',
	'INST_ERR_DB_NO_NAME'			=> 'Niciun nume specificat pentru baza de date.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Fişierul bazei de date specificat este în interiorul arborelui de directoare al forumului. Ar trebui să puneţi acest fişier intr-o locaţie web neaccesibilă.',
	'INST_ERR_DB_CONNECT'			=> 'Nu s-a putut efectua conexiunea către baza de date, consultaţi mai jos mesajul de eroare.',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Atât baza de date, cât și directorul care o conține trebuie să aibă permisiuni de scriere.',
	'INST_ERR_DB_NO_ERROR'			=> 'Niciun mesaj de eroare.',
	'INST_ERR_PREFIX'				=> 'Tabelele cu prefixul specificat există deja, vă rugăm sa alegeţi un alt prefix.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Versiunea MySQL instalată pe acest server este incompatibilă cu opţiunea „MySQL cu extensie MySQLi” pe care aţi selectat-o. În loc de aceasta, vă rugăm să încercaţi opţiunea „MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Versiunea extensiei SQLite pe care aţi instalat-o este prea veche, trebuie să fie actulizată la cel puţin 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Versiunea Oracle instalată pe acest server necesită setarea valorii <var>UTF8</var> în parametrul <var>NLS_CHARACTERSET</var>. Fie actualizaţi instalarea la 9.2+ sau schimbaţi parametrii.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Baza de date selectată nu a fost creată în codarea <var>UNICODE</var> sau <var>UTF8</var>. Încercaţi să instalaţi forumul cu baza de date în codarea <var>UNICODE</var> sau <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Fișierul schemă nu poate fi scris',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Configurare e-mail',

	// Package info
	'PACKAGE_VERSION'				=> 'Versiunea pachetului instalată',
	'UPDATE_INCOMPLETE'				=> 'Instalarea dumneavoastră phpBB nu a fost actualizată corect.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Vă rugăm să citiți informațiile de mai jos pentru a remedia această eroare.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Actualizare incompletă</h1>

		<p>Am observat că ultima actualizare a instalării dumneavoastră phpBB nu a fost finalizată. Vizitați <a href="%1$s" title="%1$s">actualizatorul de baze de date</a>, asigurați-vă că este selectată opțiunea <em>Actualizați doar baza de date</em> și faceți clic pe <strong>Trimiteți</strong>. Nu uitați să ștergeți directorul „install” după ce ați actualizat cu succes baza de date.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'		=> 'O nouă versiune de funcționalitate <strong>%1$s</strong> este disponibilă. Vă rugăm să citiți <a href="%2$s" title="%2$s"><strong>anunțul de lansare</strong></a> pentru a afla ce oferă și cum să faceți upgrade.',
	'SERVER_CONFIG'				=> 'Configurare server',
	'SCRIPT_PATH'				=> 'Cale script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Calea unde phpBB este localizat relativ la numele domeniului, de exemplu <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Mulţumim, Conducerea',
	'CONFIG_SITE_DESC'				=> 'Un text scurt pentru a descrie forumul propriu',
	'CONFIG_SITENAME'				=> 'domeniultau.ro',

	'DEFAULT_INSTALL_POST'			=> '<t>Acesta este un mesaj exemplu din instalarea phpBB3. Totul pare să funcţioneze normal. Puteţi şterge acest mesaj dacă doriţi şi continua configurarea forumului. În timpul procesului de instalare, pe prima categorie şi primul forum este atribuit un set de permisiuni potrivit grupurilor predefinite de administratori, roboţi, moderatori globali, vizitatori, utilizatori înregistraţi şi utilizatori înregistraţi COPPA. De asemenea, dacă alegeţi să ştergeţi prima categorie şi primul forum, nu uitaţi să stabiliţi permisiuni pentru toate aceste grupuri de utilizatori pe toate categoriile şi forumurile pe care le creaţi. Este recomandat să redenumiţi prima categorie şi primul forum şi să copiaţi permisiunile de la acestea când creaţi categorii şi forumuri noi. Nu uitați că suportul în limba română se acordă pe forumul phpBB România, disponibil la adresa https://www.phpbb.ro. Distracţie maximă!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Prima mea categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrierea primului forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Primul forum propriu',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administratorul site-ului',
	'REPORT_WAREZ'					=> 'Acest mesaj conţine legături către aplicaţii ilegale sau piratate.',
	'REPORT_SPAM'					=> 'Mesajul raportat are drept scop doar reclama pentru un alt site web sau alt produs.',
	'REPORT_OFF_TOPIC'				=> 'Mesajul raportat este în afara subiectului.',
	'REPORT_OTHER'					=> 'Mesajul raportat nu se potriveşte în nicio altă categorie, vă rugăm să folosiţi câmpul de descriere.',

	'SMILIES_ARROW'					=> 'Săgeată',
	'SMILIES_CONFUSED'				=> 'Confuz',
	'SMILIES_COOL'					=> 'Mişto',
	'SMILIES_CRYING'				=> 'Plângând sau Foarte supărat',
	'SMILIES_EMARRASSED'			=> 'Ruşinat',
	'SMILIES_EVIL'					=> 'Rău sau Foarte supărat',
	'SMILIES_EXCLAMATION'			=> 'Exclamare',
	'SMILIES_GEEK'					=> 'Tocilar',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Râzând',
	'SMILIES_MAD'					=> 'Supărat',
	'SMILIES_MR_GREEN'				=> 'Dl. Green',
	'SMILIES_NEUTRAL'				=> 'Neutru',
	'SMILIES_QUESTION'				=> 'Întrebare',
	'SMILIES_RAZZ'					=> 'Tachinează',
	'SMILIES_ROLLING_EYES'			=> 'Ochi rostogolindu-se',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Şocat',
	'SMILIES_SMILE'					=> 'Zâmbet',
	'SMILIES_SURPRISED'				=> 'Surprins',
	'SMILIES_TWISTED_EVIL'			=> 'Diavol mic',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Foarte fericit',
	'SMILIES_WINK'					=> 'Clipire',

	'TOPICS_TOPIC_TITLE'			=> 'Bine aţi venit la phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Privire generală',
	'MENU_INTRO'		=> 'Introducere',
	'MENU_LICENSE'		=> 'Licență',
	'MENU_SUPPORT'		=> 'Ajutor',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Crearea fișierului de configurare',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Adăugarea setărilor de configurare',
	'TASK_ADD_DEFAULT_DATA'				=> 'Adăugarea setărilor implicite în baza de date',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Crearea fișierului de schemă a bazei de date',
	'TASK_SETUP_DATABASE'				=> 'Configurarea bazei de date',
	'TASK_CREATE_TABLES'				=> 'Crearea tabelelor',

	// Install data
	'TASK_ADD_BOTS'				=> 'Înregistrarea boților',
	'TASK_ADD_LANGUAGES'		=> 'Instalarea limbilor disponibile',
	'TASK_ADD_MODULES'			=> 'Instalarea modulelor',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Crearea index-ului de căutare',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Instalarea extensiilor împachetate',
	'TASK_NOTIFY_USER'			=> 'Se trimite e-mailul de notificare',
	'TASK_POPULATE_MIGRATIONS'	=> 'Se populează migrărișe',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Programul de instalare s-a finalizat cu succes',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modulul nu a fost găsit',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Un modul nu a putut fi găsit deoarece serviciul %s nu este definit.',

	'TASK_NOT_FOUND'				=> 'Sarcina nu a fost găsită',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'O sarcină nu a putut fi găsită deoarece serviciul %s nu este definit.',

	'SKIP_MODULE'	=> 'Omite modulul “%s”',
	'SKIP_TASK'		=> 'Omite sarcina “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Toate serviciile de sarcini ale programului de instalare ar trebui să înceapă cu „installer”.',
	'TASK_CLASS_NOT_FOUND'				=> 'Definiția serviciului de sarcină a programului de instalare este invalidă. S-a dat numele serviciului „%1$s”, iar spațiul de nume de clasă așteptat pentru acesta este „%2$s”. Pentru mai multe informații, vă rugăm să consultați documentația task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Fișierul de configurare al programului de instalare nu are permisiuni de scriere.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalează phpBB',
	'CLI_UPDATE_BOARD'				=> 'Actualizează phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Afișați configurația care va fi utilizată',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validați un fișier de configurare',
	'CLI_CONFIG_FILE'				=> 'Fișierul de configurare de utilizat',
	'MISSING_FILE'					=> 'Nu se poate accesa fișierul %1$s',
	'MISSING_DATA'					=> 'Fișierului de configurare îi lipsesc date sau poate conține setări invalide.',
	'INVALID_YAML_FILE'				=> 'Nu s-a putut analiza fișierul YAML %1$s.',
	'CONFIGURATION_VALID'			=> 'Fișierul de configurare este valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Actualizează instalarea phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Cu această opțiune, este posibil să actualizați instalarea phpBB la cea mai recentă versiune.<br />În timpul procesului, toate fișierele dumneavoastră vor fi verificate pentru integritate. Aveți posibilitatea de a revizui toate diferențele și fișierele înainte de actualizare.<br /><br />Actualizarea fișierelor se poate face în două moduri diferite.</p><h2>Actualizare Manuală</h2><p>Cu această actualizare, descărcați doar setul personal de fișiere modificate pentru a vă asigura că nu pierdeți modificările de fișiere pe care le-ați făcut. După ce ați descărcat acest pachet, trebuie să încărcați manual fișierele în poziția corectă în directorul rădăcină al phpBB. După ce ați terminat, puteți efectua din nou etapa de verificare a fișierelor pentru a vedea dacă ați mutat fișierele în locația corectă.</p><h2>Actualizare Avansată cu FTP</h2><p>Această metodă este similară cu prima, dar fără a fi nevoie să descărcați fișierele modificate și să le încărcați singur. Acest lucru va fi făcut pentru dumneavoastră. Pentru a utiliza această metodă, trebuie să cunoașteți detaliile de autentificare FTP, deoarece vi se vor cere. Odată ce procesul este finalizat, veți fi redirecționat din nou la verificarea fișierelor pentru a vă asigura că totul a fost actualizat corect.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anunţ de lansare</h1>

		<p>Vă rugăm să citiţi anunţurile relatărilor pentru ultima versiune înainte de a continua procesul de actualizare, s-ar putea să conţină informaţii folositoare. De asemenea conţine link-urile pentru descărcarea completă precum şi jurnalul schimbărilor.</p>

		<br />

		<h1>Cum să actualizaţi instalarea cu Pachetul Complet de instalare (Full Package)</h1>

		<p>Metoda recomandată pentru actualizarea instalării dumneavoastră este utilizarea pachetului complet. Dacă fișierele de bază phpBB au fost modificate în instalarea dumneavoastră, este posibil să doriți să utilizați pachetul de actualizare avansată pentru a nu pierde aceste modificări. De asemenea, puteți actualiza instalarea folosind celelalte metode enumerate în documentul INSTALL.html. Pașii pentru actualizarea phpBB3 folosind pachetul complet sunt:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Faceți backup tuturor fișierelor forumului și bazei de date.</strong></li>
			<li>Accesați <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">pagina de descărcări a phpBB.com</a> şi descărcaţi ultima arhivă "Full Package".</li>
			<li>Despachetați arhiva.</li>
			<li>Eliminați (ștergeți) fișierul <code class="inline">config.php</code> și folderele <code class="inline">/images</code>, <code class="inline">/store</code> și <code class="inline">/files</code> <em>din pachet</em> (nu de pe site-ul dumneavoastră).</li>
			<li>Mergeți în PA, Setări forum și asigurați-vă că prosilver este setat ca stil implicit. Dacă nu, setați-l la prosilver.</li>
			<li>Ștergeți folderele <code class="inline">/vendor</code> și <code class="inline">/cache</code> din folderul rădăcină al forumului de pe host.</li>
			<li>Prin FTP sau SSH, încărcați fișierele și folderele rămase (adică CONȚINUTUL rămas al folderului phpBB3) în folderul rădăcină al instalării forumului de pe server, suprascriind fișierele existente. (Notă: aveți grijă să nu ștergeți nicio extensie din folderul <code class="inline">/ext</code> atunci când încărcați noul conținut phpBB3.)</li>
			<li><strong><a href="%1$s" title="%1$s">Acum începeți procesul de actualizare accesând folderul de instalare cu browserul dumneavoastră</a>.</strong></li>
			<li>Urmați pașii pentru a actualiza baza de date și lăsați procesul să se finalizeze.</li>
			<li>Prin FTP sau SSH, ștergeți folderul <code class="inline">/install</code> din rădăcina instalării forumului dumneavoastră.<br><br></li>
		</ol>

		<p>Acum aveți un forum nou, actualizat, care conține toți utilizatorii și postările. Sarcini ulterioare:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Actualizați pachetul de limbă</li>
			<li>Actualizați stilul<br><br></li>
		</ul>

		<h1>Cum să actualizaţi instalarea cu Pachetul de actualizate automată (Automatic Update Package)</h1>

		<p>Pachetul de actualizare avansată este recomandat doar pentru utilizatorii experți, în cazul în care fișierele de bază phpBB au fost modificate în instalarea dumneavoastră. De asemenea, puteți actualiza instalarea folosind metodele enumerate în documentul INSTALL.html. Pașii pentru actualizarea phpBB3 folosind pachetul de actualizare avansată sunt:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Accesaţi <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">pagina de descărcări a phpBB.com</a> şi descărcaţi arhiva „Automatic Update Package”.<br /><br /></li>
			<li>Dezarhivaţi arhiva.<br /><br /></li>
			<li>Încărcaţi complet folderele dezarhivate "install" și "vendor" în rădăcina directorului phpBB (unde este localizat fişierul config.php).<br /><br /></li>
		</ol>

		<p>Odată încărcat, forumul va fi offline pentru utilizatori cât timp directorul install încărcat va fi prezent.<br /><br />
		<strong><a href="%1$s" title="%1$s">Acum porniţi procesul de actualizare accesând din browser directorul install</a>.</strong><br />
		<br />
		Veţi fi ghidat în timpul procesului de actualizare. Veţi fi notificat odată ce actualizarea va fi completă.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tipul de actualizare de executat',

	'UPDATE_TYPE_ALL'		=> 'Actualizați sistemul de fișiere și baza de date',
	'UPDATE_TYPE_DB_ONLY'	=> 'Actualizați doar baza de date',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Metode de actualizare a fișierelor',

	'UPDATE_FILE_METHOD'			=> 'Metoda de actualizare a fișierelor',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Descărcați fișierele modificate într-o arhivă',
	'UPDATE_FILE_METHOD_FTP'		=> 'Încărcați fișierele cu FTP (Automat)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Actualizați fișierele prin acces direct la fișiere (Automat)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selectați formatul arhivei de descărcat',

	// FTP settings
	'FTP_SETTINGS'			=> 'Setări FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Nu a fost găsit un director de actualizare valid, vă rugăm să vă asigurați că ați încărcat fișierele relevante.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versiunea proprie este actualizată la zi. Nu este nevoie să rulaţi actualizarea. Dacă doriţi să faceţi o verificare de integritate a fişierelor proprii, asiguraţi-vă că aţi încărcat corect fişierele de actualizare.',
	'OLD_UPDATE_FILES'				=> 'Fişierele de actualizare nu sunt actualizate la zi. Fişierele de actualizare găsite sunt pentru actualizarea phpBB %1$s la phpBB %2$s dar ultima versiune a phpBB este %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Fişierele actualizate găsite sunt incompatibile cu versiunea instalată. Versiunea instalată este %1$s şi fişierul actualizat este pentru actualizarea phpBB %2$s la %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Actualizează fişiere',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Verificați fișierele de actualizat',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Comparatorul de fișiere nu a reușit să deschidă %s.',

	'UPDATE_FILE_DIFF'		=> 'Compararea fișierelor modificate',
	'ALL_FILES_DIFFED'		=> 'Toate fișierele modificate au fost comparate.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'Descărcați',
	'DOWNLOAD_CONFLICTS'				=> 'Descărcaţi acest fişier în care este evidenţiat codul în conflict',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Caută &lt;&lt;&lt; pentru a identifica eventuale conflicte',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descarcă arhiva cu fişierele modificate',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'După ce ați descărcat arhiva, ar trebui să o despachetați. În interiorul ei veți găsi fișierele modificate pe care trebuie să le încărcați în directorul rădăcină al phpBB. Vă rugăm să încărcați fișierele în locațiile lor respective. După ce ați încărcat toate fișierele, puteți continua procesul de actualizare.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fişierul este deja actualizat la zi.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Fişierul nu poate fi verificat pentru stabilirea diferenţelor.',
	'FILE_USED'						=> 'Informaţii folosite din',			// Single file
	'FILES_CONFLICT'				=> 'Fişiere de conflict',
	'FILES_CONFLICT_EXPLAIN'		=> 'Următoarele fișiere sunt modificate și nu reprezintă fișierele originale din vechea versiune. phpBB a determinat că aceste fișiere creează conflicte dacă se încearcă îmbinarea lor. Vă rugăm să investigați conflictele și să încercați să le rezolvați manual sau să continuați actualizarea alegând metoda de îmbinare preferată. Dacă rezolvați conflictele manual, verificați din nou fișierele după ce le-ați modificat. De asemenea, puteți alege metoda preferată de îmbinare pentru fiecare fișier. Prima opțiune va rezulta într-un fișier în care liniile conflictuale din fișierul vechi vor fi pierdute, iar cealaltă opțiune va duce la pierderea modificărilor din fișierul mai nou.',
	'FILES_DELETED'					=> 'Fișiere șterse',
	'FILES_DELETED_EXPLAIN'			=> 'Următoarele fișiere nu există în noua versiune. Aceste fișiere vor fi șterse.',
	'FILES_MODIFIED'				=> 'Fişiere modificate',
	'FILES_MODIFIED_EXPLAIN'		=> 'Următoarele fişiere sunt modificate şi nu reprezintă fişierele originale din versiunea veche. Fişierul actualizat va fi rezultatul unirii între modificările proprii şi noul fişier.',
	'FILES_NEW'						=> 'Fişiere noi',
	'FILES_NEW_EXPLAIN'				=> 'Următoarele fişiere nu există în instalare în momentul de faţă. Aceste fişiere vor fi adăugate la instalare.',
	'FILES_NEW_CONFLICT'			=> 'Fişiere de conflict noi',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Următoarele fişiere sunt noi în ultima versiune dar s-a determinat că există deja un fişier cu acelaşi nume în aceeaşi poziţie. Acest fişier va fi suprascris cu fişierul nou.',
	'FILES_NOT_MODIFIED'			=> 'Fişiere nemodificate',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Următoarele fişiere nu sunt modificate şi reprezintă fişierele originale ale phpBB din versiunea pe care vreţi să o actualizaţi.',
	'FILES_UP_TO_DATE'				=> 'Fişiere deja actualizate',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Următoarele fişiere sunt deja actualizate la zi şi nu mai necesită actualizarea.',
	'FILES_VERSION'					=> 'Versiune fișiere',
	'TOGGLE_DISPLAY'				=> 'Arată/Ascunde lista fișierelor',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Actualizare fișiere',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Actualizatorul de fișiere „%1$s“ a eșuat. Instalarea va încerca să treacă la „%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Actualizatorul de fișiere a eșuat. Nu sunt disponibile alte metode alternative.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continuați procesul de actualizare',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Verificați fișierele din nou',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Actualizare bază de date',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Baza de date a fost actualizată cu succes.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Actualizare extensii',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Convertorul specificat nu există.',
	'DEV_NO_TEST_FILE'			=> 'Nicio valoare nu a fost specificată în convertor pentru variabila test_file. Dacă sunteţi un utilizator al acestui convertor, nu ar trebui să vedeţi această eroare, vă rugăm să raportaţi acest mesaj autorului convertorului. Dacă sunteţi un autor de convertor, trebuie să specificaţi numele fişierului ce există în forumul sursă pentru a permite ca să fie verificată calea către acesta.',
	'COULD_NOT_FIND_PATH'		=> 'Nu s-a putut găsi calea către fostul forum. Vă rugăm să verificaţi setările şi să încercaţi din nou.<br />» Calea specificată a fost %s.',
	'CONFIG_PHPBB_EMPTY'		=> 'Variabila phpBB3 de configurare pentru "%s" este goală.',

	'MAKE_FOLDER_WRITABLE'		=> 'Vă rugăm să vă asiguraţi că acest director există şi poate fi scris de către serverul web; apoi încercaţi din nou:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Vă rugăm să vă asiguraţi că aceste directoare există şi pot fi scrise de către serverul web; apoi încercaţi din nou:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Testează din nou',

	'NO_TABLES_FOUND'			=> 'Tabelele nu au fost găsite.',
	'TABLES_MISSING'			=> 'Nu s-au putut găsi aceste tabele<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Vă rugăm să verificaţi prefixul tabelei şi să încercaţi din nou.',

	// Conversion in progress
	'CATEGORY'					=> 'Categorie',
	'CONTINUE_CONVERT'			=> 'Continuaţi conversia',
	'CONTINUE_CONVERT_BODY'		=> 'A fost găsită o încercare anterioară de conversie. Acum puteţi alege între a începe o conversie nouă sau a continua conversia găsită.',
	'CONVERT_NEW_CONVERSION'	=> 'Conversie nouă',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuă conversia începută anterior',
	'POST_ID'					=> 'Identificator mesaj',

	// Start conversion
	'SUB_INTRO'					=> 'Introducere',
	'CONVERT_INTRO'				=> 'Bine aţi venit în Unified Convertor Framework al phpBB',
	'CONVERT_INTRO_BODY'		=> 'De aici, puteţi importa date de la alte sisteme de forumuri (instalate). Lista de mai jos arată toate modulele de conversie ce sunt disponibile. Dacă niciun convertor pentru softul forumului din care doriţi să convertiţi nu este afişat în această listă, vă rugăm să vizitaţi site-ul nostru unde pot fi găsite pentru descărcare module suplimentare de conversie.',
	'AVAILABLE_CONVERTORS'		=> 'Convertoare disponibile',
	'NO_CONVERTORS'				=> 'Niciun convertor nu este disponibil pentru a fi folosit.',
	'CONVERT_OPTIONS'			=> 'Opțiuni',
	'SOFTWARE'					=> 'Softul forumului',
	'VERSION'					=> 'Versiune',
	'CONVERT'					=> 'Conversie',

	// Settings
	'STAGE_SETTINGS'			=> 'Setări',
	'TABLE_PREFIX_SAME'			=> 'Prefixul tabelelor trebuie să fie cel folosit de către softul din care faceţi conversia.<br />» Prefixul tabelelor specificat a fost %s.',
	'DEFAULT_PREFIX_IS'			=> 'Convertorul nu a putut găsi tabelele cu prefixul specificat. Vă rugăm să vă asiguraţi că aţi specificat detaliile corecte pentru forumul pe care îl convertiţi. Prefixul standard al tabelelor pentru %1$s este <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Specificaţi opţiunile de conversie',
	'FORUM_PATH'				=> 'Cale forum',
	'FORUM_PATH_EXPLAIN'		=> 'Aceasta este calea <strong>relativă</strong> pe disc a forumulului vechi de la <strong>rădăcina instalării acestui forum phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Reîmprospătează pagina pentru a continua conversia',
	'REFRESH_PAGE_EXPLAIN'		=> 'Dacă selectaţi Da, convertorul va reîmprospăta pagina pentru a continua conversia după fiecare pas finalizat. Dacă aceasta este prima conversie, pentru testarea efectelor şi pentru a determina orice eroare în viitor, vă sugerăm să alegeţi Nu.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversie în progres',

	'AUTHOR_NOTES'				=> 'Notiţe autor<br />» %s',
	'STARTING_CONVERT'			=> 'Începe procesul de conversie',
	'CONFIG_CONVERT'			=> 'Se converteşte configuraţia',
	'DONE'						=> 'Gata',
	'PREPROCESS_STEP'			=> 'Execută preprocesarea funcţiilor/interogărilor',
	'FILLING_TABLE'				=> 'Completează tabelul <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Completează tabelele',
	'DB_ERR_INSERT'				=> 'Eroare în timpul procesării interogării <code>INSERT</code>',
	'DB_ERR_LAST'				=> 'Eroare în timpul procesării <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Eroare în timpul executării <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Eroare în timpul executării <var>query_first</var>, %s („%s”)',
	'DB_ERR_SELECT'				=> 'Eroare în timpul procesării interogării <code>SELECT</code>',
	'STEP_PERCENT_COMPLETED'	=> 'Pasul <strong>%d</strong> din <strong>%d</strong>',
	'FINAL_STEP'				=> 'Continuă cu pasul final',
	'SYNC_FORUMS'				=> 'Începe sincronizarea forumurilor',
	'SYNC_POST_COUNT'			=> 'Sincronizează numărarea mesajelor',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizează numărarea mesajelor de la <var>entry</var> %1$s la %2$s.',
	'SYNC_TOPICS'				=> 'Începe sincronizarea subiectelor',
	'SYNC_TOPIC_ID'				=> 'Sincronizează subiectele de la <var>topic_id</var> $1%s la $2%s',
	'PROCESS_LAST'				=> 'Procesează ultimile instrucţiuni',
	'UPDATE_TOPICS_POSTED'		=> 'Generează informaţiile subiectelor publicate',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'O eroare a apărut in timp ce se generau informaţiile subiectelor publicate. Poţi reîncerca efectuarea acestui pas din Panoul administratorului după ce procesul de conversie este finalizat.',
	'CONTINUE_LAST'				=> 'Continuă ultimele declaraţii',
	'CLEAN_VERIFY'				=> 'Se şterge şi se verifică structura finală',
	'NOT_UNDERSTAND'			=> 'Nu poate înţelege %s #%d, tabelul %s ("%s")',
	'NAMING_CONFLICT'			=> 'Conflict: %s şi %s sunt amândouă aliasuri<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversie finalizată',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Ați convertit cu succes forumul dumneavoastră la phpBB 3.3. Puteți acum să vă autentificați și să <a href="../">accesați forumul</a>. Vă rugăm să vă asigurați că setările au fost transferate corect înainte de a activa forumul prin ștergerea directorului de instalare. Amintiți-vă că ajutorul pentru utilizarea phpBB este disponibil online prin intermediul <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentației</a> și al <a href="https://www.phpbb.com/community/viewforum.php?f=661">forumurilor de suport</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> este numele de utilizator clar pentru:',
	'COLLIDING_USER'					=> '» id utilizator: <strong>%d</strong> nume utilizator: <strong>%s</strong> (%d posts)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Pe vechiul forum au fost găsite nume de utilizator. Pentru a finaliza conversia ştergeţi sau redenumiţie aceşti utilizatori ca să existe doar un singur utilizator din vechiul forum pentru fiecare nume de utilizator clar.',
	'CONV_ERR_FATAL'					=> 'Eroare fatală de conversie',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload for attachments is enabled at the old board. Please disable the FTP upload option and make sure a valid upload directory is specified, then copy all attachment files to this new web accessible directory. Once you have done this, restart the convertor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nu există nicio informaţie de configurare disponibilă pentru această conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nu s-au putut prelua informaţiile de acces pe forum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nu s-au putut prelua categoriile.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nu s-a putut recupera configurarea forumului.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nu s-a putut accesa/citi „%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nu s-au putut lua informaţiile de autentificare pentru grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistenţă în tabelul grupurilor detectată în add_bots() - trebuie să adăugaţi toate grupurile speciale dacă o efectuaţi manual.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nu s-a putut insera robot în tabelul utilizatorilor.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nu s-a putut insera robot în tabelul roboţilor.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nu s-a putut insera utilizator în tabelul user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Eroare de mesaj analizată',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Notă către dezvoltator: trebuie să specificaţi $convertor[\'avatar_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Calea relativă către sursa forumului nu a fost specificată.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Notă către dezvoltator: trebuie să specificaţi $convertor[\'avatar_gallery_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupul „%1$s” nu a putut fi găsit în %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Notă către dezvoltator: trebuie să specificaţi $convertor[\'ranks_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Notă către dezvoltator: trebuie să specificaţi $convertor[\'smilies_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Notă către dezvoltator: trebuie să specificaţi $convertor[\'upload_dir\'] pentru a folosi %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nu s-au putut insera/actualiza setările permisiunilor.',
	'CONV_ERROR_PM_COUNT'				=> 'Nu s-a putut selecta directorul pentru numărarea mesajelor private.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nu s-a putut insera un forum nou înlocuind o categorie veche.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nu s-a putut insera un forum nou înlocuind un forum vechi.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nu s-au putut lua informaţiile de autentificare ale utilizatorului.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup greşit „%1$s” definit în %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Această pagină colectează datele necesare pentru a accesa forumul sursă. Specificaţi detaliile bazei de date pentru fostul dumneavoastră forum; convertorul nu va schimba nimic în baza de date specificată mai jos. Sursa forumului ar trebui să fie dezactivată pentru a permite o conversie consistentă.',
	'CONV_SAVED_MESSAGES'				=> 'Mesaje salvate',

	'PRE_CONVERT_COMPLETE'			=> 'Toate etapele preconversiei au fost finalizate cu succes. Acuma puteţi începe procesul propriu zis de conversie. Reţineţi că va trebui să adjustaţi manual mai multe lucruri. După conversie, în special verificaţi permisiunile atribuite, reconstruiţi index-ul de căutare care nu este convertit şi deasemenea, asiguraţi-vă că fişierele s-au copiat corect, de exemplu imaginile asociate şi zâmbetele.',
));

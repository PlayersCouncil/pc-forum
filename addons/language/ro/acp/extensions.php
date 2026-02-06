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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Extensie',
	'EXTENSIONS'				=> 'Extensii',
	'EXTENSIONS_ADMIN'			=> 'Manager extensii',
	'EXTENSIONS_EXPLAIN'		=> 'Managerul de extensii este un utilitar al forumului phpBB ce vă permite gestionarea statutului extensiilor și vizualizarea informațiilor despre ele.',
	'EXTENSION_INVALID_LIST'	=> 'Extensia “%s” nu e validă.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Extensia selectată nu e disponibilă pentru acest forum, vă rugăm să verificați phpBB și ce versiune PHP este permisă (vedeți pagina de detalii).',
	'EXTENSION_DIR_INVALID'		=> 'Extensia selectată are o structură de director invalidă și nu poate fi activată.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Extensia selectată nu poate fi activată, vă rugăm să verificați cerințele extensiei.',
	'EXTENSION_NOT_INSTALLED'	=> 'Extensia %s nu este disponibilă. Vă rugăm să verificați dacă a fost instalată corect.',

	'DETAILS'				=> 'Detalii',

	'EXTENSIONS_NOT_INSTALLED'	=> 'Extensii neinstalate',
	'EXTENSIONS_DISABLED'		=> 'Extensii dezactivate',
	'EXTENSIONS_ENABLED'		=> 'Extensii activate',

	'EXTENSION_DELETE_DATA'	=> 'Șterge date',
	'EXTENSION_DISABLE'		=> 'Dezactivează',
	'EXTENSION_ENABLE'		=> 'Activează',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Ștergerea unei extensii va determina eliminarea tuturor datelor și setărilor. Fișierele extensiei sunt menținute așa că aceasta poate fi activată din nou.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Dezactivarea unei extensii menține fișierele acesteia, datele și setările dar elimină orice funcționalitate adăugată de extensie.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Activarea unei extensii permite folosirea ei pe forum.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de ștergere. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de dezactivare. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Datele extensiei sunt în curs de activare. Vă rugăm să nu părăsiți sau reîmprospătați această pagina până la finalizarea procesului!',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Datele extensiei au fost șterse',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Extesia a fost dezactivată',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Extesia a fost activată',

	'EXTENSION_NAME'			=> 'Nume extensie',
	'EXTENSION_ACTIONS'			=> 'Acțiuni',
	'EXTENSION_OPTIONS'			=> 'Opțiuni',
	'EXTENSION_INSTALL_HEADLINE'=> 'Instalarea unei extensii',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Descarcă o extensie din baza de date phpBB</li>
			<li>Dezarhivați extensia și încărcați-o în directorul <samp>ext/</samp> al forumului dumneavoastră phpBB.</li>
			<li>Activați extensia, aici, în managerul de extensii.</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Actualizarea unei extensii',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Dezactivați extensia</li>
			<li>Ștergeți fișierele extensiei din sistemul de fișiere</li>
			<li>Încărcați fișierele noi</li>
			<li>Activați extensia</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Eliminarea completă a unei extensii din forum',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Dezactivați extensia</li>
			<li>Ștergeți datele extensiei</li>
			<li>Ștergeți fișierele extensiei din sistemul de fișiere</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Sunteți sigur că doriți să ștergeți datele asociate cu “%s”?<br /><br />Aceasta elimină toate datele și setările sale și nu poate fi anulată!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Sunteți sigur că doriți dezactivarea extensiei “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Sunteți sigur că doriți activarea extensiei “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Sunteți sigur că doriți forțarea utilizării unei versiuni instabile?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Intoarcere la lista extensiilor',

	'EXT_DETAILS'			=> 'Detalii extensie',
	'DISPLAY_NAME'			=> 'Afișează numele',
	'CLEAN_NAME'			=> 'Curață nume',
	'TYPE'					=> 'Tip',
	'DESCRIPTION'			=> 'Descrere',
	'VERSION'				=> 'Versiune',
	'HOMEPAGE'				=> 'Pagina',
	'PATH'					=> 'Cale fișier',
	'TIME'					=> 'Data lansării',
	'LICENSE'				=> 'Licență',

	'REQUIREMENTS'			=> 'Cerințe',
	'PHPBB_VERSION'			=> 'Versiune phpBB',
	'PHP_VERSION'			=> 'Versiune PHP',
	'AUTHOR_INFORMATION'	=> 'Informații autor',
	'AUTHOR_NAME'			=> 'Nume',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Pagina',
	'AUTHOR_ROLE'			=> 'Rol',

	'NOT_UP_TO_DATE'		=> '%s nu este actualizată',
	'UP_TO_DATE'			=> '%s este actualizată',
	'ANNOUNCEMENT_TOPIC'	=> 'Anunț de lansare',
	'DOWNLOAD_LATEST'		=> 'Descarcă versiunea',
	'NO_VERSIONCHECK'		=> 'Nu sunt furnizate informații despre versiune.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Reverifică toate versiunile',
	'FORCE_UNSTABLE'					=> 'Verifică întotdeauna pentru versiuni instabile',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Setări verificare versiune',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Răsfoiește baza de date cu extensii',
	'META_FIELD_NOT_SET'	=> 'Câmpul meta necesar %s nu a fost setat.',
	'META_FIELD_INVALID'	=> 'Câmpul meta %s este invalid.',
));

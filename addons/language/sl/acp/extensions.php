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
	'EXTENSION'					=> 'Dodatek',
	'EXTENSIONS'				=> 'Dodatki',
	'EXTENSIONS_ADMIN'			=> 'Upravljalnik dodatkov',
	'EXTENSIONS_EXPLAIN'		=> 'Upravljalnik dodatkov je orodje, s katerim upravljate s svojimi dodatki in vidite informacije.',
	'EXTENSION_INVALID_LIST'	=> 'Dodatek "%s” je neveljaven.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Izbrana razširitev ni na voljo za ta forum, prosimo preverite če so vaše phpBB in PHP verzije dovoljene (glejte stran s podrobnostmi).',
	'EXTENSION_DIR_INVALID'		=> 'Izbrana razširitev ima neveljaven direktorij in ne more biti omogočen.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Izbranega dodatka ne moremo omogočiti, prosimo, preverite njegove zahteve.',
	'EXTENSION_NOT_INSTALLED'	=> 'Razširitev %s ni na voljo. Preverite, ali ste jo pravilno namestili.',

	'DETAILS'				=> 'Podrobnosti',

	'EXTENSIONS_DISABLED'	=> 'Onemogočeni dodatki',
	'EXTENSIONS_ENABLED'	=> 'Omogočeni dodatki',

	'EXTENSION_DELETE_DATA'	=> 'Izbriši podatke',
	'EXTENSION_DISABLE'		=> 'Onemogoči',
	'EXTENSION_ENABLE'		=> 'Omogoči',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Brisanje podatkov razširitve bo odstranilo vse datoteke in nastavitve. Datoteke razširitve se hranijo, tako da jih lahko ponovno omogočite.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Onemogočanje razširitve ohrani datoteke, podatke in nastavitve ampak odstrani vse funkcionalnosti dodane z razširitvijo.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Razširitev lahko uporabljate tudi na svojem forumu.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Razširitveni podatki bodo izbrisani. Prosimo, da ne zapuščate ali ponovno nalagate strani, dokler postopek ne bo končan.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Razširitev bo onemogočena. Prosimo, ne zapuščajte ali ponovno nalagajte strani, dokler postopek ne bo končan.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Razširitev bo omogočena. Prosimo, da ne zapuščate ali ponovno nalagate strani, dokler postopek ne bo končan.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Razširitveni podatki so bili uspešno odstranjeni',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Razširitev je bila uspešno onemogočena',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Razširitev je bila uspešno omogočena',

	'EXTENSION_NAME'			=> 'Ime dodatka',
	'EXTENSION_ACTIONS'			=> 'Dejanja',
	'EXTENSION_OPTIONS'			=> 'Možnosti',
	'EXTENSION_INSTALL_HEADLINE'=> 'Nameščanje razširitve',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Prenesite razširitev iz baze phpbb razširitev</li>
			<li>Razširite razširitev in jo naložite v <samp>ext/</samp> direktorij vašega phpBB foruma</li>
			<li>Omogočite razširitev v Upravitelju dodatkov</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Posodabljanje dodatka',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Onemogočite razširitev</li>
			<li>Odstranite razširitvene podatke iz sistema</li>
			<li>Prenesite nove podatke</li>
			<li>Omogočite razširitev</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Popolna odstranitev razširitve iz vašega foruma',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Onemogočite razširitev</li>
			<li>Odstranite razširitvene podatke</li>
			<li>Odstranite razširitvene podatke iz vašega sistema</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Res želite izbrisati podatke, povezane s "%s"?<br /><br />Odstranili boste vse podatke in nastavitve, ki jih ne bo moč povrniti!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Res želite onemogočiti razširitev "%s"?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Ste prepričani, da želite omogoči dodatek “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Ste prepričani, da želite uporabljati nedokončano različico?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Vrni se na seznam dodatkov',

	'EXT_DETAILS'			=> 'Podrobnosti dodatka',
	'DISPLAY_NAME'			=> 'Prikaži ime',
	'CLEAN_NAME'			=> 'Počisti ime',
	'TYPE'					=> 'Vrsta',
	'DESCRIPTION'			=> 'Opis',
	'VERSION'				=> 'Različica',
	'HOMEPAGE'				=> 'Domača stran',
	'PATH'					=> 'Pot do datoteke',
	'TIME'					=> 'Datum izida',
	'LICENSE'				=> 'Licenca',

	'REQUIREMENTS'			=> 'Zahteve',
	'PHPBB_VERSION'			=> 'Različica phpBB',
	'PHP_VERSION'			=> 'Različica PHP',
	'AUTHOR_INFORMATION'	=> 'Podatki o avtorju',
	'AUTHOR_NAME'			=> 'Ime',
	'AUTHOR_EMAIL'			=> 'E-pošta',
	'AUTHOR_HOMEPAGE'		=> 'Domača stran',
	'AUTHOR_ROLE'			=> 'Funkcija',

	'NOT_UP_TO_DATE'		=> '%s ni posodobljen',
	'UP_TO_DATE'			=> '%s je posodobljen',
	'ANNOUNCEMENT_TOPIC'	=> 'Sporočilo ob izidu',
	'DOWNLOAD_LATEST'		=> 'Prenesi različico',
	'NO_VERSIONCHECK'		=> 'Informacije niso na voljo.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Ponovno preverite verzije',
	'FORCE_UNSTABLE'					=> 'Vedno preverite nestabilne verzije',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Nastavitve preverjanja verzij',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Išči po bazi razširitev',

	'META_FIELD_NOT_SET'	=> 'Zahtevano polje %s ni bilo izbrano.',
	'META_FIELD_INVALID'	=> 'Polje %s je neveljavno.',
));

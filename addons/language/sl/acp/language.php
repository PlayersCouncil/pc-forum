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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Administratorske jezikovne datoteke',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Tukaj lahko namestite/odstranite jezikovne pakete.',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Res želite izbrisati "%s"?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Nameščeni jezikovni paketi',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Jezikovne podrobnosti uspešno posodobljene.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ta jezikovni paket je že nameščen.',
	'LANGUAGE_PACK_DELETED'				=> 'Jezikovni paket "%s" je bil uspešno odstranjen. Vsi uporabniki, ki so uporabljali ta jezik so bili ponastavljeni na privzeti jezik.',
	'LANGUAGE_PACK_DETAILS'				=> 'Podrobnosti jezikovnega paketa',
	'LANGUAGE_PACK_INSTALLED'			=> 'Jezikovni paket "%s" je bil uspešno nameščen.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Po meri spremenjeni jezikovna profilna polja so bila kopirana iz privzetega jezika. Po potrebi, jih prosimo spremenite.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalno ime',
	'LANGUAGE_PACK_NAME'				=> 'Ime',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Izbrani jezikovni paket ne obstaja.',
	'LANGUAGE_PACK_USED_BY'				=> 'Uporablja (vključno z roboti)',
	'LANGUAGE_VARIABLE'					=> 'Jezikovna spremenljivka',
	'LANG_AUTHOR'						=> 'Avtor/ji jezikovnega paketa',
	'LANG_ENGLISH_NAME'					=> 'Angleško ime',
	'LANG_ISO_CODE'						=> 'ISO koda',
	'LANG_LOCAL_NAME'					=> 'Lokalno ime',

	'MISSING_LANG_FILES'		=> 'Manjkajo jezikovne datoteke',
	'MISSING_LANG_VARIABLES'	=> 'Manjkajoče jezikovne spremenljivke',

	'NO_FILE_SELECTED'				=> 'Niste določili jezikovne datoteke.',
	'NO_LANG_ID'					=> 'Niste določili jezikovnega paketa.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ne morete odstraniti privzetega jezikovnega paketa.<br />če želite odstraniti ta jezikovni paket, morate najprej spremeniti privzet jezik vaše table.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Ni odstranjenih jezikovnih paketov',

	'THOSE_MISSING_LANG_FILES'			=> 'Naslednje jezikovne datoteke manjkajo v %s jezikovna mapa',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Naslednje jezikovne spremenljivke manjkajo v "%s" jezikovni paket',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Odstranjeni jezikovni paketi',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Išči po jezikovni bazi podatkov',
));

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

$lang = array_merge($lang, [
	'ACP_FILES'	=> 'Administratoriaus pulto kalbos failai',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Čia galite įdiegti/ištrinti kalbų paketus. Pagrindinė kalba pažymėta žvaigždute (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Ar tikrai norite pašalinti „%s“?',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Įdiegti kalbų paketai',

	'LANGUAGE_DETAILS_UPDATED'	=> 'Kalbos aprašymas atnaujintas sėkmingai.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Kalbos paketas jau įdiegtas.',
	'LANGUAGE_PACK_DELETED'	=> '<strong>%s</strong> kalbos paketas ištrintas sėkmingai. Visi vartotojai, naudojantys šią kalbą, nuo šiol naudos pagrindinę diskusijų kalbą.',
	'LANGUAGE_PACK_DETAILS'	=> 'Kalbos paketo aprašymas',
	'LANGUAGE_PACK_INSTALLED'	=> '<strong>%s</strong> kalbos paketas sėkmingai įdiegtas.',
	'LANGUAGE_PACK_CPF_UPDATE'	=> 'Papildomų aprašo laukų vertimo žodžiai buvo nukopijuoti iš pagrindinės kalbos. Išverskite juos, jeigu reikia.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Vietinis pavadinimas',
	'LANGUAGE_PACK_NAME'	=> 'Pavadinimas',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Pasirinktas kalbos paketas neegzistuoja.',
	'LANGUAGE_PACK_USED_BY'	=> 'Naudojamas (įskaitant robotus)',
	'LANGUAGE_VARIABLE'	=> 'Kalbos kintamasis',
	'LANG_AUTHOR'	=> 'Kalbos paketo autorius',
	'LANG_ENGLISH_NAME'	=> 'Angliškas pavadinimas',
	'LANG_ISO_CODE'	=> 'ISO kodas',
	'LANG_LOCAL_NAME'	=> 'Vietinis pavadinimas',

	'MISSING_LANG_FILES'		=> 'Trūksta kalbos failų',
	'MISSING_LANG_VARIABLES'	=> 'Trūksta kalbos kintamųjų',

	'NO_FILE_SELECTED'	=> 'Jūs nenurodėte kalbos failo.',
	'NO_LANG_ID'	=> 'Jūs nenurodėte kalbos paketo.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Jūs negalite pašalinti pagrindinės diskusijų kalbos.<br />Jeigu norite pašalinti šį kalbos paketą, iš pradžių pakeiskite diskusijų pagrindinės kalbos nustatymą.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Neįdiegtų kalbų paketų nėra',

	'THOSE_MISSING_LANG_FILES'	=> '%s kalbos kataloge trūksta šių kalbos failų',
	'THOSE_MISSING_LANG_VARIABLES'	=> '<strong>%s</strong> kalbos pakete trūksta šių kalbos kintamųjų',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Neįdiegti kalbų paketai',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Eiti į kalbų paketų duomenų bazę',
]);

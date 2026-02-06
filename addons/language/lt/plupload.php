<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Pridėti failus',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Pridėkite failus į eilę ir spustelėkite mygtuką „Pakrauti“.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s jau yra eilėje.',
	'PLUPLOAD_CLOSE'			=> 'Uždaryti',
	'PLUPLOAD_DRAG'				=> 'Traukite failus čia.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Klaida: nurodytas failas jau egzistuoja.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Failus galite pridėti vilkdami juos į pranešimo langą.',
	'PLUPLOAD_ERR_INPUT'		=> 'Nepavyko atidaryti įvesties srauto.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Pakrauto failo negalima perkelti.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Nepavyko atidaryti pakrovimo srauto.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Failas per didelis:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Klaida skaičiuojant failų skaičių.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Netinkamas failo išplėtimas:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Nepakanka atminties operacijai užbaigti.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Atsisiuntimo nuoroda neteisinga arba adresas neegzistuoja.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Failo išplėtimo klaida.',
	'PLUPLOAD_FILE'				=> 'Failas: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Failas: %s, dydis: %d, maksimalus failo dydis: %d',
	'PLUPLOAD_FILENAME'			=> 'Failo pavadinimas',
	'PLUPLOAD_FILES_QUEUED'		=> 'Failai eilėje: %d',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Bendra klaida.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP klaida.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Netinkamas arba nepalaikomas paveiksliuko formatas.',
	'PLUPLOAD_INIT_ERROR'		=> 'Inicializacijos klaida.',
	'PLUPLOAD_IO_ERROR'			=> 'Įvedimo-išvedimo klaida',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Saugumo klaida.',
	'PLUPLOAD_SELECT_FILES'		=> 'Pasirinkite failus',
	'PLUPLOAD_SIZE'				=> 'Dydis',
	'PLUPLOAD_SIZE_ERROR'		=> 'Failo dydžio klaida.',
	'PLUPLOAD_STATUS'			=> 'Statusas',
	'PLUPLOAD_START_UPLOAD'		=> 'Pakrauti',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Pradėti failų pakrovimą.',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Sustabdyti pakrovimą',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Sustabdyti dabartinį pakrovimą',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Pakrauta failų: %d/%d',
]);

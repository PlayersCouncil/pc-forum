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
	'PLUPLOAD_ADD_FILES'		=> 'Dodaj datoteke',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Dodajte datoteke v vrsto prenosov in kliknite na gumb za začetek.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s je že v vrsti.',
	'PLUPLOAD_CLOSE'			=> 'Zapri',
	'PLUPLOAD_DRAG'				=> 'Datoteke prenesite sem.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Dvojna datoteka.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Datoteke lahko priložite tudi tako, da jih povlečete in spustite v sporočilno okno.',
	'PLUPLOAD_ERR_INPUT'		=> 'Vhodnega toka ni mogoče odpreti.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Prenesene datoteke ni mogoče premakniti.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Izhodnega toka ni mogoče odpreti.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Datoteka je prevelika:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Napaka datoteke.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Nepravilna razširitev datoteke:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Spomin ni več na voljo.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Preneseni URL je morda napačen ali pa ne obstaja.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Razširitev datoteke ni uspela.',
	'PLUPLOAD_FILE'				=> 'Datoteka: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Datoteka: %s, velikost: %d, največja dovoljena velikost: %d',
	'PLUPLOAD_FILENAME'			=> 'Ime datoteke',
	'PLUPLOAD_FILES_QUEUED'		=> '%d datotek je v vrsti',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Splošna napaka.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP napaka.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Format fotografije je napačen oz. ni podprt.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init napaka.',
	'PLUPLOAD_IO_ERROR'			=> 'IO napaka.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Ni izbrano',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Varnostna napaka.',
	'PLUPLOAD_SELECT_FILES'		=> 'Izberi datoteke',
	'PLUPLOAD_SIZE'				=> 'Velikost',
	'PLUPLOAD_SIZE_ERROR'		=> 'Prevelika datoteka.',
	'PLUPLOAD_STATUS'			=> 'Položaj',
	'PLUPLOAD_START_UPLOAD'		=> 'Prenos je v teku',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Prenos datotek v vrsti je v teku',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Ustavi prenos',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Prekini trenutni prenos',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Prenesene %d/%d datoteke',
));

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
	'CONFIG_NOT_EXIST'					=> 'Nastavitve "%s" nepričakovano ne obstajajo.',

	'GROUP_NOT_EXIST'					=> 'Skupina "%s" nepričakovano ne obstaja.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Uporabi odvisnost %s.',
	'MIGRATION_DATA_DONE'				=> 'Nameščeni podatki: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Nameščeni podatki: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_DATA_RUNNING'			=> 'Nameščeni podatki: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Namestitev je bila uspešna (preskoči): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Med zahtevo je prišlo do napake in pojavila se je izjema. Spremembe pred napako smo povrnili po svojih najboljših močeh, a vseeno preverite ali ima napake.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Selitev "%1$s" ni uspela, manjka "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Selitev "%s" ni nameščena.',
	'MIGRATION_NOT_VALID'				=> '%s ni veljavna selitev.',
	'MIGRATION_SCHEMA_DONE'				=> 'Nameščena shema: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Namestitev sheme: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Nameščena shema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Razveljavljene spremembe podatkov: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Razveljavljanje podatkov: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Razveljavljanje podatkov: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Razveljavljena Schema: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Razveljavljanje Scheme: %1$s; Čas: %2$.2f sekund',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Razveljavljanje Scheme: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Migracija je neveljavna. Če izjavnemu pomočniku manjka stanje.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Migracija je neveljavna. Če izjavnemu pomočniku manjka veljavni popiv k migracijskemu koraku..',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Migracija je neveljavna. Po meni vpoklicane funkcije ni mogoče pozvati.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Migracija je neveljavna. Neznan tip migracijskega orodja je srečano.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Migracija je neveljavna. Nedoločeno migracijsko orodje je srečano.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Migracija je neveljavna. Nedoločena metoda migracijskega orodja je srečana.',

	'MODULE_ERROR'						=> 'Med ustvarjanjem enote je prišlo do napake: %s',
	'MODULE_EXISTS'						=> 'Modul že obstaja: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Več modulov z določenim imenom že obstaja: %s. Uporabite naprej/nazaj tipke za umestitev modula.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Manjka zahtevana enota: %2$s',
	'MODULE_NOT_EXIST'					=> 'Zahtevana enota ne obstaja: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Ni mogoče določiti identifikator glavnega modula: %s',
	'PERMISSION_NOT_EXIST'				=> 'Nastavitveno dovoljenje "%s" nepričakovano ne obstaja.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Vloga dovoljenja, dodeljena skupini "%1$s" nepričakovano ne obstaja. ID vloge: "%2$s"',
	'ROLE_NOT_EXIST'					=> 'Nastavitvena funkcija "%s" nepričakovano ne obstaja.',
));

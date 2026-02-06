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
	'CONFIG_NOT_EXIST'					=> 'În mod neașteptat, setarea de configurare "%s" nu există.',

	'GROUP_NOT_EXIST'					=> 'În mod neașteptat, grupul "%s" nu există.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Aplic dependențele pentru %s.',
	'MIGRATION_DATA_DONE'				=> 'Instalare date: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instalare date: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_DATA_RUNNING'			=> 'Instalez date: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrarea a instalat (sărit) deja: %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Ceva nu a funcționat în timpul cererii și o excepție a fost emisă. Schimbările efectuate înainte de eroarea apărută au fost restaurate după cum ne-am priceput mai bine dar ar trebui să verificați forumul pentru erori.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migrarea "%1$s" nu poate fi efectuată, lipsește migrarea "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Migrarea "%s" nu este instalată.',
	'MIGRATION_NOT_VALID'				=> '%s nu este o migrare validă.',
	'MIGRATION_SCHEMA_DONE'				=> 'Schema instalată: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instalare schemă: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Schema instalată: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Date restaurate: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Restaurare date: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Restaurare date: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Schemă restaurată: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Restaurare schemă: %1$s; Timp: %2$.2f secunde',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Restaurare schemă: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'O migrare este invalidă. Lipsește o condiție dintr-un ajutor de declarație IF.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'O migrare este invalidă. Lipsește un apel valid către un pas de migrare dintr-un ajutor de declarație IF.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'O migrare este invalidă. O funcție apelabilă nu a putut fi apelată.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'O migrare este invalidă. A fost întâlnit un tip necunoscut al utilitarului de migrare.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'O migrare este invalidă. A fost întâlnită un utilitar nedefinit de migrare.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'O migrare este invalidă. A fost întâlnită o metodă nedefinită a utilitarului de migrare.',

	'MODULE_ERROR'						=> 'A fost întâlnită o eroare în timpul creării unui modul: %s',
	'MODULE_EXISTS'						=> 'Un modul există deja: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Mai multe module cu numele de limbă al modulului părinte dat există deja: %s. Încercați să utilizați cheile before/after pentru a clarifica poziționarea modulului.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Fișierul de informații al modulului necesar lipsește: %2$s',
	'MODULE_NOT_EXIST'					=> 'Modulul necesar %s nu există',

	'PARENT_MODULE_FIND_ERROR'			=> 'Nu se poate determina identificatorul modulului părinte: %s',
	'PERMISSION_NOT_EXIST'				=> 'În mod neașteptat, setarea permisiune  "%s" nu există.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Rolul de permisiune atribuit grupului „%1$s” nu există în mod neașteptat. ID rol: „%2$s”',
	'ROLE_NOT_EXIST'					=> 'În mod neașteptat, rolul permisiune "%s" nu există.',
));

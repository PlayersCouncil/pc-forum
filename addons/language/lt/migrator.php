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
	'CONFIG_NOT_EXIST'					=> 'Konfigūracijos parametras „%s“ neegzistuoja.',

	'GROUP_NOT_EXIST'					=> 'Grupė „%s“ neegzistuoja.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Atnaujinimo %s priklausomybių instaliavimas.',
	'MIGRATION_DATA_DONE'				=> 'Atnaujinti duomenys: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Duomenų atnaujinimas: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_DATA_RUNNING'			=> 'Duomenų pridėjimas: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Atnaujinimas jau pabaigtas (praleistas): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Atnaujinimo proceso metu įvyko klaida, dėl kurios atsirado išimtis. Pakeitimai, atlikti prieš įvykstant klaidai, buvo anuliuoti. Tačiau rekomenduojama patikrinti, ar konferencijoje nėra veikimo klaidų.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Nepavyko užbaigti naujinimo „%1$s“, praleistas atnaujinimas „%2$s“.',
	'MIGRATION_NOT_INSTALLED'			=> 'Atnaujinimas „%s“ neinstaliuotas.',
	'MIGRATION_NOT_VALID'				=> '%s nėra teisingas atnaujinimas.',
	'MIGRATION_SCHEMA_DONE'				=> 'Atnaujinta schema: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Schemos instaliavimas: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Atnaujinimas schemos: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Atšauktas duomenų atnaujinimas: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Atšaukti duomenų atnaujinimą: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'Atšaukti duomenų atnaujinimą: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Atšauktas schemos atnaujinimas: %1$s; Laikas: %2$.2f sekundžių',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Atšaukti schemos atnaujinimą: %1$s; Laikas: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Atšaukti schemos atnaujinimą: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Atnaujinimo faile yra klaidų. Operatoriaus if tvarkytojas negalėjo rasti sąlygos.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Atnaujinimo faile yra klaidų. Operatoriaus if tvarkytojas negalėjo aptikti, kad atnaujinimo žingsnis yra vykdomas tinkamai.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Atnaujinimo faile yra klaidų. Buvo bandoma iškviesti vartotojo funkciją, kurios nepavyko iškviesti.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Atnaujinimo faile yra klaidų. Atnaujinimo tipas nenurodytas.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Atnaujinimo faile yra klaidų. Reikiamas atnaujinimo failas neegzistuoja.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Atnaujinimo faile yra klaidų. Atnaujinimo faile trūksta reikiamo metodo.',

	'MODULE_ERROR'						=> 'Klaida kuriant modulį: %s',
	'MODULE_EXISTS'						=> 'Modulis jau egzistuoja: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Jau egzistuoja keli moduliai su nurodytu motininio modulio pavadinimu: %s. Pabandykite naudoti raktus before/after kad patikslinti pridedamo modulio reikiamą vietą.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Reikalingas modulio komponentas neegzistuoja: %2$s',
	'MODULE_NOT_EXIST'					=> 'Reikalingas modulis neegzistuoja: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Nepavyko rasti reikiamo identifikatoriaus motininio modulio: %s',
	'PERMISSION_NOT_EXIST'				=> 'Prieigos leidimas „%s“ neegzistuoja.',

	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Grupei „%1$s“ priskirta rolė neegzistuoja. Rolės identifikatorius: „%2$s“',
	'ROLE_NOT_EXIST'					=> 'Rolė „%s“ prieigos teisių sistemoje neegzistuoja.',
]);

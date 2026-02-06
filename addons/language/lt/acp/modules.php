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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Čia galite valdyti visus modulius. Atsiminkite, kad administratoriaus valdymo pultas turi trijų lygių meniu struktūrą (Kategorija -> Kategorija -> Modulis), kai kiti valdymo meniu turi dviejų lygių meniu struktūrą (Kategorija -> Modulis). Tokia struktūra turi būti išlaikyta. Taip pat būkite atsargūs ir neužrakinkite patys savęs, jeigu išjungsite ar ištrinsite modulius atsakingus už modulių valdymą.',
	'ADD_MODULE'	=> 'Pridėti modulį',
	'ADD_MODULE_CONFIRM'	=> 'Ar tikrai norite pridėti pasirinktą modulį su pasirinktu režimu?',
	'ADD_MODULE_TITLE'	=> 'Modulio pridėjimas',

	'CANNOT_REMOVE_MODULE'	=> 'Ištrinti modulio nepavyko, jis turi jam priskirtų kitų modulių. Prieš vykdant šį veiksmą ištrinkite arba perkelkite visus jam priskirtus modulius.',
	'CATEGORY'	=> 'Kategorija',
	'CHOOSE_MODE'	=> 'Modulio režimo pasirinkimas',
	'CHOOSE_MODE_EXPLAIN'	=> 'Pasirinkite naudojamą modulio režimą.',
	'CHOOSE_MODULE'	=> 'Modulio pasirinkimas',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Pasirinkite failus, kurie bus kviečiami iš šio modulio.',
	'CREATE_MODULE'	=> 'Sukurti naują modulį',

	'DEACTIVATED_MODULE'	=> 'Išjungtas modulis',
	'DELETE_MODULE'	=> 'Modulio trynimas',
	'DELETE_MODULE_CONFIRM'	=> 'Ar tikrai norite ištrinti šį modulį?',

	'EDIT_MODULE'	=> 'Modulio redagavimas',
	'EDIT_MODULE_EXPLAIN'	=> 'Čia galite pakeisti specifinius modulio nustatymus.',

	'HIDDEN_MODULE'	=> 'Paslėptas modulis',

	'MODULE'	=> 'Modulis',
	'MODULE_ADDED'	=> 'Modulis pridėtas sėkmingai.',
	'MODULE_DELETED'	=> 'Modulis ištrintas sėkmingai.',
	'MODULE_DISPLAYED'	=> 'Rodyti modulį',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Jeigu nenorite rodyti šio modulio, bet vis tiek norite jį naudoti, išjunkite šį nustatymą.',
	'MODULE_EDITED'	=> 'Modulis pakeistas sėkmingai.',
	'MODULE_ENABLED'	=> 'Modulis įjungtas',
	'MODULE_LANGNAME'	=> 'Modulio pavadinimas kalboje',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Įrašykite modulio pavadinimą. Jeigu pavadinimas paduodamas iš kalbos failo, nurodykite kalbos konstantą.',
	'MODULE_TYPE'	=> 'Modulio tipas',

	'NO_CATEGORY_TO_MODULE'	=> 'Nepavyko pakeisti kategorijos į modulį. Prieš vykdant šį veiksmą ištrinkite/perkelkite visus jam priskirtus modulius.',
	'NO_MODULE'	=> 'Modulis nerastas.',
	'NO_MODULE_ID'	=> 'Nenurodytas modulio id.',
	'NO_MODULE_LANGNAME'	=> 'Nenurodytas modulio pavadinimas kalboje.',
	'NO_PARENT'	=> 'Pirmame puslapyje',

	'PARENT'	=> 'Kurti modulį',
	'PARENT_NO_EXIST'	=> 'Nurodytas modulis neegzistuoja.',

	'SELECT_MODULE'	=> 'Pasirinkite modulį',
]);

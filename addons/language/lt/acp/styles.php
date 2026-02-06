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
	'ACP_STYLES_EXPLAIN'	=> 'Čia galite valdyti diskusijų lentos stilius. Stilius sudarytas iš šablono, temos ir paveikslėlių komplekto. Galite keisti, ištrinti, išjungti, įjungti įdiegtus stilius arba įkelti naujus. Taip pat, pasinaudoję peržiūros funkcija, galite pasižiūrėti kaip stilius atrodo. Standartinis stilius yra pažymėtas žvaigždute (*). Šalia kiekvieno stiliaus rodoma kiek vartotojų naudojasi tuo stiliumi.',
	'CANNOT_BE_INSTALLED'						=> 'Nepavyko instaliuoti.',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Ar tikrai norite atšaukti stiliaus instaliavimą?',
	'COPYRIGHT'	=> 'Autorinės teisės',

	'DEACTIVATE_DEFAULT'	=> 'Jūs negalite išjungti standartinio stiliaus.',
	'DELETE_FROM_FS'	=> 'Ištrinti iš failų sistemos',
	'DELETE_STYLE_FILES_FAILED'					=> 'Trinant stiliaus failus „%s“ įvyko klaida.',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Stiliaus failai „%s“ buvo sėkmingai ištrinti.',
	'DETAILS'	=> 'Aprašymas',
	'INHERITING_FROM'	=> 'Paveldi iš',
	'INSTALL_STYLE'	=> 'Stiliau diegimas',
	'INSTALL_STYLES'							=> 'Instaliuoti stilius',
	'INSTALL_STYLES_EXPLAIN'					=> 'Čia galite instaliuoti naujus stilius.<br />Jei toliau pateiktame sąraše trūksta kokio nors stiliaus, patikrinkite, ar jis jau instaliuotas. Jei šis stilius neistaliuotas, patikrinkite, ar jis yra tinkamai įkeltas į serverį.',
	'INVALID_STYLE_ID'							=> 'Neteisingas stiliaus identifikatorius (ID).',

	'NO_MATCHING_STYLES_FOUND'					=> 'Nėra jūsų užklausą atitinkančių stilių.',
	'NO_UNINSTALLED_STYLE'	=> 'Neįdiegtų stilių nėra.',

	'PURGED_CACHE'								=> 'Kešas išvalytas.',
 
	'REQUIRES_STYLE'							=> 'Šiam stiliui reikia, kad būtų jau instaliuotas stilius „%s“.',

	'STYLE_ACTIVATE'	=> 'Įjungti',
	'STYLE_ACTIVE'	=> 'Aktyvus',
	'STYLE_DEACTIVATE'	=> 'Išjungti',
	'STYLE_DEFAULT'	=> 'Padaryti stilių standartiniu',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Turite suaktyvinti stilių, kad galėtumėte jį padaryti stiliumi pagal nutylėjimą.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Motininis stilius yra neteisingas.',
	'STYLE_ERR_NAME_EXIST'	=> 'Stilius tokiu pavadinimu jau egzistuoja.',
	'STYLE_ERR_STYLE_NAME'	=> 'Šiam stiliui turite nurodyti pavadinimą.',
	'STYLE_NAME_RESERVED'						=> 'Stiliaus „%s“ instaliuoti negalima, nes šitas stiliaus pavadinimas yra rezervuotas.',
	'STYLE_INSTALLED'							=> 'Stilius „%s“ sėkmingai instaliuotas.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Grįžkti į instaliuotų stilių sąrašą.',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instaliuoti kitus stilius.',
	'STYLE_NAME'	=> 'Stiliaus pavadinimas',
	'STYLE_NOT_INSTALLED'						=> 'Nepavyko instaliuoti stiliaus „%s“.',
	'STYLE_PATH'								=> 'Stiliaus direktorija',
	'STYLE_UNINSTALL'							=> 'Ištrinti',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Stiliaus „%s“ negalima ištrinti, nes jis yra motininis kitiems stiliams.',
	'STYLE_UNINSTALLED'							=> 'Stilius „%s“ sėkmingai ištrintas.',
	'STYLE_PHPBB_VERSION'						=> 'phpBB versija',
	'STYLE_USED_BY'	=> 'Naudoja vartotojų (įskaitant robotus)',
	'STYLE_VERSION'								=> 'Stiliaus versija',

	'UNINSTALL_PROSILVER'						=> 'Negalima ištrinti „prosilver“ stiliaus.',
	'UNINSTALL_DEFAULT'							=> 'Negalima ištrinti stiliaus, esančio pagal nutylėjimą.',

	'BROWSE_STYLES_DATABASE'					=> 'Eiti į stilių duomenų bazę',
]);

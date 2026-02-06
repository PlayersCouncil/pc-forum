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
	'ACP_STYLES_EXPLAIN'	=> 'Tukaj lahko upravljate razpoložljive sloge na administratorski nadzorni plošči. Slog je sestavljen iz predloge, teme in slikovnega nabora. Urejate lahko obstoječ slog, ter brišete, deaktivirate, reaktivirate, kreirate ali uvozite nov slog. Vidite lahko tudi kako bo vaš slog izgledal. Privzeti slog je označen z zvezdico. Prikazano je tudi število uporab posameznega sloga.',

	'CANNOT_BE_INSTALLED'			=> 'Namestitev ni mogoča',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Ste prepričani, da želite odstraniti izbrane stile?',
	'COPYRIGHT'						=> 'Avtorska pravica',

	'DEACTIVATE_DEFAULT'		=> 'Privzetega sloga ni možno deaktivirati.',
	'DELETE_FROM_FS'			=> 'Izbriši z datotečnega sistema',
	'DELETE_STYLE_FILES_FAILED'	=> 'Napaka pri brisanju slogov "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Datoteke stila  "%s" so bile izbrisane.',
	'DETAILS'					=> 'Podrobnosti',

	'INHERITING_FROM'			=> 'Podeduje od',
	'INSTALL_STYLE'				=> 'Namesti slog',
	'INSTALL_STYLES'			=> 'Namesti sloge',
	'INSTALL_STYLES_EXPLAIN'	=> 'Tu lahko namestite nove sloge.<br>Če na spodnjem seznamu ne najdete željenega sloga, je vaš slog morda že nameščen. Če se to ni zgodilo, preverite pravilnost prenosa.',
	'INVALID_STYLE_ID'			=> 'Neveljaven ID sloga.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Noben slog se ne ujema z vašo poizvedbo.',
	'NO_UNINSTALLED_STYLE'		=> 'Ne najdem odstranjenih slogov.',

	'PURGED_CACHE'				=> 'Predpomnilnik je prazen.',

	'REQUIRES_STYLE'			=> 'Ta slog za namestitev zahteva slog "%s".',

	'STYLE_ACTIVATE'			=> 'Aktiviraj',
	'STYLE_ACTIVE'				=> 'Aktivno',
	'STYLE_DEACTIVATE'			=> 'Deaktiviraj',
	'STYLE_DEFAULT'				=> 'Izberi privzeti slog',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Slog morate aktivirati, preden postane standarden.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Nepravilen slog.',
	'STYLE_ERR_NAME_EXIST'		=> 'Slog s tem imenom že obstaja.',
	'STYLE_ERR_STYLE_NAME'		=> 'Za ta slog je potrebno navesti ime.',
	'STYLE_INSTALLED'			=> 'Slog "%s" je bil nameščen.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Vrnite se na seznam nameščenih slogov',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Namestite več slogov',
	'STYLE_NAME'				=> 'Ime sloga',
	'STYLE_NAME_RESERVED'		=> 'Slog "%s" ni bil nameščen, ker je ime že uporabljeno.',
	'STYLE_NOT_INSTALLED'		=> 'Slog "%s" ni bil nameščen.',
	'STYLE_PATH'				=> 'Pot do sloga',
	'STYLE_UNINSTALL'			=> 'Odstrani',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Slog "%s" ne more biti nameščen, ker ima enega ali več nepravilnih slogov.',
	'STYLE_UNINSTALLED'			=> 'Odstranitev sloga "%s" je bila uspešna.',
	'STYLE_PHPBB_VERSION'		=> 'phpBB verzija',
	'STYLE_USED_BY'				=> 'Uporabljeno (vključno z roboti)',
	'STYLE_VERSION'				=> 'Verzija sloga',

	'UNINSTALL_PROSILVER'						=> 'Ne morete odstraniti sloga "prosilver".',
	'UNINSTALL_DEFAULT'		=> 'Ne morete odstraniti privzetega sloga.',

	'BROWSE_STYLES_DATABASE'	=> 'Išči po bazi slogov',
));

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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Predpomnilnik APCu je treba očistiti preko Administrativne nadzorne plošče.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Nastavite to možnost, če se možnost konfiguracije spreminja preveč pogosto, da bi učinkovala v predpomnilniku.',
	'CLI_CONFIG_CURRENT'				=> 'Trenutna vrednost konfiguracije uporablja 0 in 1, da določi matematične vrednosti',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Uspešno odstranjena konfiguracija %s.',
	'CLI_CONFIG_NEW'					=> 'Nova vrednost konfiguracija uporablja 0 in 1, da določi matematične vrednosti',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfiguracija %s ne obstaja',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfiguracija možnosti imena',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'To možnost nastavite, če bi bilo treba vrednost natisniti brez nove linije na koncu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Povečanje vrednosti za',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfiguracija %s uspešno povečana',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ne morem nastaviti konfiguracije %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfiguracija %s uspešno nastavljena',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Prikaže seznam vseh pripravljenih in nepripravljenih cron del.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Poganja vse delujoče cron naloge.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Ime naloge, ki teče',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Seznam vseh nameščenih in razpoložljivih migracij.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Posodobi bazo podatkov s pomočjo migracije.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Povrni prehod.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Izbriše možnost konfiguracije',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Onemogoči določeno razširitev.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Omogoči določeno razširitev.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Poišče neodvisne migracije.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Popravlja hierarhično strukturo foruma in modulov.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Ugotovi vrednost nastavitvene možnosti',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Povečuje vrednost nastavitvene možnosti',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Izpiše vse razširitve v podatkovni bazi in na datotečnem sistemu.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Ime okolja.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Zaženi v varnem načinu (brez razširitev).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Zaženite lupino.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Očistite določeno razširitev.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Seznami vrste besedil, ki jih je mogoče znova razčleniti.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Razpoložljivi razčlenjevalci:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Razčlenjevalci shranijo besedilo s trenutno  text_formatter storitvijo.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Tip besedila za razčlenjevanje. Pustite prazno za ponovno razčlenjevanje vsega.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Ne shrani nobenih sprememb; samo natisni kaj se bo zgodilo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Najnižji zapis ID za obdelavo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Najvišji zapis ID za obdelavo',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Približno število zapisov hkratnih obdelav',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Začni razčlenjevanje kjer se je zadnja izvedba ustavila',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Nastavi vrednost željene nastavitve le, če se ujema s trenutno',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Nastavi vrednost željene nastavitve',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Izbriši vse obstoječe sličice.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Ustvari vse manjkajoče sličice.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Ponovno ustvari vse sličice.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Preveri ali je forum posodobljen.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Preveri imena razširitev (če so vsa označena, preveri vse razširitve)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Zaženi preverjanje ukazov s predpomnilnikom.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Zaženi izbrani ukaz za pregled le stabilne ali nestabilne različice.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Posodablja zastarela gesla "hashev", da so "hashirani" s "bcrypt".',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" nima veljavne stabilnosti.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Vključi (ali izključi) uporabniški račun.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Uporabniško ime računa za aktivacijo.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Izključi uporabnikov račun',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Uporabnik je že aktiviran.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Uporabnik je že neaktiviran.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Dodaj novega uporabnika.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Uporabniško ime novega uporabnika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Geslo novega uporabnika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Epošta novega uporabnika',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Pošljite aktivacijsko epošto novemu uporabniku (privzeto ni poslano)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Izbriši uporabniški račun.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Uporabniško ime uporabnika za izbris',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Izbrišite vse prispevke uporabnika. Brez te možnosti, bodo uporabnikovi prispevki ohranjeni.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Ponovno očisti uporabniška imena.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ne morem onemogočiti razširitve %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Uspešno onemogočena razširitev %s',
	'CLI_EXTENSION_DISABLED'			=> 'Razširitev %s ni omogočena',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ne morem omogočiti razširitev %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Uspešno omogočena razširitev %s',
	'CLI_EXTENSION_ENABLED'				=> 'Razširitev %s je že omogočena',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Razširitev  %s ne obstaja',
	'CLI_EXTENSION_NAME'				=> 'Ime dodatka',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ne morem očistiti razširitev %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Uspešno očiščena razširitev %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Ne morem posodobiti razširitve  %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Uspešno posodobljena razširitev %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nobena razširitev ni bila najdena.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Razširitev %s ni omogočena.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Na voljo',
	'CLI_EXTENSIONS_DISABLED'			=> 'Onemogočeno',
	'CLI_EXTENSIONS_ENABLED'			=> 'Omogočeno',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Uspešno popravljena struktura forumov in modulov.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Uspešno posodobljeno zastarelo "hash" geslo za "bcrypt".',

	'CLI_MIGRATION_NAME'					=> 'Ime migracije, vključno z imenskim prostorom (uporabite poševnico (/) namesto leve poševnice (\), da se izognete težavam).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Razpoložljive migracije',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Nameščene migracije',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Prikaži samo razpoložljive migracije',
	'CLI_MIGRATIONS_EMPTY'                  => 'Ni migracij.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Popravljanje %1$s (razpon %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Popravljanje %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Popravljanje uspešno končano',

	// V vseh primerih je %1$s logično ime datotek in %2$s pravo ime v datotečnem sistemu
	// Primer: big_image.png (2_a51529ae7932008cf8454a95af84cacd) ustvarjeno.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) je izbrisano.',
	'CLI_THUMBNAIL_DELETING'	=> 'Brisanje sličic',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) preskočeno.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) ustvarjeno.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Ustvarjanje sličic',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Vse sličice so bile obnovljene.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Vse sličice so bile izbrisane',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Ni sličic za generiranje.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Ni sličic za izbris.',

	'CLI_USER_ADD_SUCCESS'		=> 'Uspešno dodan uporabnik %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Ste prepričane, da želite brisati  ‘%s’? [D/N]',
	'CLI_USER_RECLEAN_START'	=> 'Ponovno čiščenje uporabniških imen',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Ponovno čiščenje končano. Ni uporabniških imen, ki morajo biti očiščeni.',
		1	=> 'Ponovno čiščenje končano. %d uporabniško ime je bilo očiščeno.',
		2	=> 'Ponovno čiščenje končano. %d uporabniški imeni sta bili očiščeni.',
		3	=> 'Ponovno čiščenje končano. %d uporabniška imena so bila očiščena.',
		4	=> 'Ponovno čiščenje končano. %d uporabniških imen je bilo očiščenih.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Po želji lahko določiteime za cron opravilo, k ibo teklo le za določeno cron opravilo.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Vključite uporabniški račun ali ga deaktivirajte z možnostjo <info>--deactivate</info>.
Po želji lahko pošljete aktivacijsko epošto uporabniku z uporabo <info>--send-email</info> možnosti.',
	'CLI_HELP_USER_ADD'			=> '<info>%command.name%</info> ukaz dodaja novega uporabnika:
Če ta ukaz teče brez možnosti, jih boste morali vnesti.
Po želji lahko novemu uporabniku pošljete epošto z uporabo  <info>--send-email</info> možnosti.',
	'CLI_HELP_USER_RECLEAN'		=> 'Ponovno očiščena uporabniška imena bodo preverila vsa shranjena in zagotovila, da so shranjene tudi čiste različice. Očiščena imena so oblika velikosti črk, NFC normalizirano in pretvorjeno v  ASCII.',
));

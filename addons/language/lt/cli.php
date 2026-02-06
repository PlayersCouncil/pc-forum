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
	$lang = [];
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

$lang = array_merge($lang, [
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu talpykla turi būti išvalyta per Administratoriaus skyrių.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Įjunkite šią parinktį, jei konfigūracijos parametro reikšmė keičiasi per dažnai, kad ji būtų išsaugota keše.',
	'CLI_CONFIG_CURRENT'				=> 'Dabartinė konfigūracijos parametro reikšmė. Naudokite 0 ir 1, užduodami loginio tipo reikšmę (boolean).',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigūracijos parametras sėkmingai pašalintas %s.',
	'CLI_CONFIG_NEW'					=> 'Nauja konfigūracijos parametro vertė. Naudokite 0 ir 1, užduodami loginio tipo reikšmę (boolean).',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigūracijos parametras %s neegzistuoja.',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigūracijos parametro pavadinimas.',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Įjunkite šią parinktį, jei vertės turėtų būti vaizduojamos be perkėlimo į eilutės galą.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Padidinti tokia verte',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Sėkmingai padidintas konfigūracijos parametras %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nepavyko nustatyti konfigūracijos parametro %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Sėkmingai nustatytas konfigūracijos parametras %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Rodyti sąrašą planuoklio užduočių, kurios yra paruoštos ir neparengtos vykdyti (cron).',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Vykdyti visas planuoklio užduotis, kurios yra paruoštos vykdyti (cron).',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Pavadinimas planuoklio užduoties, kuri bus vykdoma.',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Rodyti visus įdiegtus ir galimus perkėlimus.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Atnaujinti duomenų bazę taikant duomenų perkėlimą.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Atšaukti duomenų perkėlimą.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Ištrinti konfigūracijos parametrą',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Ištrinti konfigūracijos parametrą.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Įgalinti nurodytą plėtinį.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Rasti migracijas, kurios neturi priklausomybių.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Forumų medžio struktūros ir modulių atstatymas.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Gauti konfigūracijos parametro vertę.',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Padidinti  konfigūracijos parametro skaitinę reikšmę',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Parodyti visus plėtinius iš duomenų bazės ir failų sistemos.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Aplinkos pavadinimas.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Paleisti komandinę eilutę saugiuoju režimu (be plėtinių).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Paleisti komandinę eilutę.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Pašalina plėtinį kartu su jo duomenimis.',
	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Rodyti sąrašą teksto tipų, kuriuos galima reparsinti.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Prieinami reparseriai:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Įvykdo reparsingą išsaugoto teksto panaudojant nustatytus servisus text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Teksto tipas, skirtas reparsingui. Palikite lauką tuščią, jei norite reparsinti visus tipus.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Neišsaugoti jokių pakeitimų; tiesiog parodyti laukiamą rezultatą.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Apdorojamo įrašo ID (identifikatoriaus) mažiausia reikšmė',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Adorojamo įrašo ID (identifikatoriaus) didžiausia reikšmė',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Apytikslis apdorotų įrašų skaičius per laiko vienetą',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Pratęsti reparsingą nuo paskutinio sustojimo momento',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Nustatyti konfigūracijos parametro reikšmę tuo atveju, jeigu senoji vertė yra tokia pati kaip dabartinė',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Nustatykite konfigūracijos parametro vertę',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Pašalinkite visas esamas miniatiūras.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Sukurkite visas trūkstamas miniatiūras.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Atkurti iš naujo visas miniatiūras.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Tikrinti, ar yra atnaujinimų.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Pavadinimas plėtinio, kurį reikia patikrinti (su raktu all bus patikrinti visi plėtiniai)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Atnaujinimų tikrinimas naudojant kešą.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Atnaujinimo patikros tipo pasirinkimas (tik stabilioms versijoms arba įskaitant nestabilias).',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Atnaujinti senus slaptažodžių hešus naudodajant šifravimą bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" opciją reikia nustatyti į „stabilią“ arba „nestabilią“.',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktyvuoti (arba išjungti) paskyrą.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Vartotojo vardas aktyvavimui.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Išjungti vartotojo paskyrą',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Vartotojo paskyra jau aktyvuota.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Vartotojo paskyra jau buvo išjungta.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Pridėti naują paskyrą.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Naujo vartotojo vardas',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Naujo vartotojo slaptažodis',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Naujo vartotojo el. pašto adresas',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Siųsti el. laišką, kad aktyvuoti naują vartotoją (pagal nutylėjimą el. laiškas nesiunčiamas)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Ištrinti vartotojo paskyrą.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Trinamo vartotojo vardas',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Ištrinti vartotojų paskyras pagal ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Naudotojų ID, kuriuos norite ištrinti',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Ištrinti visus vartotojo pranešimus. Jei ši parinktis nenaudojama, vartotojo pranešimai nebus ištrinti.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Atkurti naudotojų išvalytus vardus.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nepavyko išjungti plėtinio %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Plėtinys sėkmingai išjungtas %s',
	'CLI_EXTENSION_DISABLED'			=> 'Plėtinys %s neįjungtas',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nepavyko įjungti plėtinio %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Plėtinys %s sėkmingai įjungtas',
	'CLI_EXTENSION_ENABLED'				=> 'Plėtinys %s jau įjungtas',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Plėtinio %s neegzistuoja',
	'CLI_EXTENSION_NAME'				=> 'Plėtinio pavadinimas',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nepavyko ištrinti failų ir plėtinio %s duomenų',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Failai ir plėtinio %s duomenys sėkmingai ištrinti',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Nepavyko atnaujinti plėtinio %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Plėtinys %s sėkmingai atnaujintas',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nerasta jokių plėtinių.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Plėtinio %s negalima įjungti.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Prieinamieji',
	'CLI_EXTENSIONS_DISABLED'			=> 'Išjungtieji',
	'CLI_EXTENSIONS_ENABLED'			=> 'Įjungtieji',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Sėkmingai atkurta forumų medžio struktūra bei moduliai.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Sėkmingai atnaujinti pasenę slaptažodžių hešai, kurie naudoja šifravimą bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Migracijos pavadinimas, įskaitant vardų erdvę (kad išvengtumėte problemų, naudokite stačią brūkšnį vietoj atvirkštinio pasvirojo brūkšnio).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Prieinamos migracijos',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Įdiegtos migracijos',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'			=> 'Rodyti tiktais prieinamas migracijas',
	'CLI_MIGRATIONS_EMPTY'					=> 'Nėra migracijų.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Apdorojimas %1$s (diapazonas %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Apdorojimas %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Apdorojimas sėkmingai įvykdytas',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) ištrintas.',
	'CLI_THUMBNAIL_DELETING'	=> 'Miniatiūrų trynimas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) praleista.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) sukurta.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Miniatiūrų kūrimas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Visos miniatiūros buvo iš naujo sukurtos.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Visos miniatiūros ištrintos.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nėra miniatiūrų kurimui.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nėra miniatiūrų, kurias būtų galima ištrinti.',

	'CLI_USER_ADD_SUCCESS'		=> 'Vartotojas %s sėkmingai pridėtas.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Ar esate įsitikinę, kad norite ištrinti "%s"? [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Ar tikrai norite ištrinti vartotojo ID? ‘%s’? [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Vartotojų ID sėkmingai ištrinti.',
	'CLI_USER_DELETE_ID_START'		=> 'Trinami naudotojai pagal ID',
	'CLI_USER_DELETE_NONE'			=> 'Nė vienas naudotojas nebuvo ištrintas pagal vartotojo ID.',
	'CLI_USER_RECLEAN_START'	=> 'Naudotojų išvalytų vardų atkūrimas',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Išvalytų vardų atkūrimas baigtas. Nėra išvalytų vardų, kuriuos reikėtų atkurti.',
		1	=> 'Išvalytų vardų atkūrimas baigtas. Atkurtas %d išvalytas vardas.',
		2	=> 'Išvalytų vardų atkūrimas baigtas. Atkurta %d išvalytų vardų.',
		3	=> 'Išvalytų vardų atkūrimas baigtas. Atkurta %d išvalytų vardų.',
	],
]);

// Additional help for commands.
$lang = array_merge($lang, [
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Galite nurodyti tik atskiros vykdytinos užduoties pavadinimą.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Suaktyvinkite vartotojo paskyrą arba išjunkite ją naudodami parametrą <info>--deactivate</info>.
Norėdami išsiųsti vartotojui aktyvinimo el. laišką, naudokite parametrą <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Komanda <info>%command.name%</info> prideda naują vartotoją:
Kai paleisite šią komandą be parametrų, būsite paraginti juos nurodyti.
Norėdami išsiųsti el. laišką naujam vartotojui, naudokite parametrą <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Atkūrus išvalytus naudotojų vardus bus patikrintos visos paskyros, ar išvalytas vardas egzistuoja. Išvalyti vardai yra neskiriami didžiosioms ir mažosioms raidėms, normalizuoti ir konvertuoti į ASCII koduotę.',
]);

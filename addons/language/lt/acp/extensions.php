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
	'EXTENSION'					=> 'Plėtinys',
	'EXTENSIONS'				=> 'Plėtiniai',
	'EXTENSIONS_ADMIN'			=> 'Plėtinių valdymas',
	'EXTENSIONS_EXPLAIN'		=> 'Čia galite tvarkyti plėtinius ir peržiūrėti informaciją apie juos.',
	'EXTENSION_INVALID_LIST'	=> 'Plėtinys „%s“ yra nesuderinamas.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Pasirinktas plėtinys nepasiekiamas šioje konferencijoje. Patikrinkite, ar konferencijoje naudojamos phpBB ir PHP versijos yra suderinamos su šiuo plėtiniu (daugiau informacijos rasite informacijos puslapyje).',
	'EXTENSION_DIR_INVALID'		=> 'Pasirinktas plėtinys turi neteisingą katalogo struktūrą ir jo negalima prijungti.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Pasirinkto plėtinio įjungti negalima, patikrinkite diegimo reikalavimus.',
	'EXTENSION_NOT_INSTALLED'	=> 'Plėtinys %s nepasiekiamas. Patikrinkite, ar jis tinkamai įdiegtas.',

	'DETAILS'				=> 'Informacija',

	'EXTENSIONS_DISABLED'  => 'Išjungti plėtiniai',
	'EXTENSIONS_ENABLED'   => 'Įjungti plėtiniai',

	'EXTENSION_DELETE_DATA'  => 'Ištrinti duomenis',
	'EXTENSION_DISABLE'      => 'Išjungti',
	'EXTENSION_ENABLE'       => 'Įjungti',

	'EXTENSION_DELETE_DATA_EXPLAIN'  => 'Ištrinami šio plėtinio duomenys ir nustatymai. Plėtinio failai išlieka, kad juos būtų galima atkurti.',
	'EXTENSION_DISABLE_EXPLAIN'      => 'Kai išjungiate plėtinį, jo failai, duomenys ir nustatymai išsaugomi, tačiau plėtinio pridėtos funkcijos pašalinamos.',
	'EXTENSION_ENABLE_EXPLAIN'       => 'Įjungus šį plėtinį galima jį naudoti konferencijoje.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'  => 'Šie plėtiniai šiuo metu šalinami. Neuždarykite ir neatnaujinkite šio puslapio, kol operacija nebus baigta.',
	'EXTENSION_DISABLE_IN_PROGRESS'  => 'Šiuo metu plėtinys išjunginėjamas. Neuždarykite ir neatnaujinkite šio puslapio, kol operacija nebus baigta.',
	'EXTENSION_ENABLE_IN_PROGRESS'  => 'Šiuo metu plėtinys įjunginėjamas. Neuždarykite ir neatnaujinkite šio puslapio, kol operacija nebus baigta.',

	'EXTENSION_DELETE_DATA_SUCCESS'  => 'Plėtinio duomenys sėkmingai pašalinti.',
	'EXTENSION_DISABLE_SUCCESS'      => 'Plėtinys sėkmingai išjungtas.',
	'EXTENSION_ENABLE_SUCCESS'       => 'Plėtinys sėkmingai įjungtas.',

	'EXTENSION_NAME'			=> 'Plėtinio pavadinimas',
	'EXTENSION_ACTIONS'			=> 'Veiksmai',
	'EXTENSION_OPTIONS'			=> 'Nustatymai',
	'EXTENSION_INSTALL_HEADLINE'=> 'Plėtinio instaliavimas',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Atsisiųskite plėtinį iš phpBB plėtinių duomenų bazės</li>
			<li>Išpakuokite plėtinį ir įkelkite failus į serveryje esančią konferencijos <samp>ext/</samp> direktoriją</li>
			<li>Įjunkite plėtinį čia, plėtinių Tvarkyklėje</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Plėtinio atnaujinimas',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Išjungkite plėtinį</li>
			<li>Pašalinkite plėtinių failus iš serverio</li>
			<li>Įkelti naujus failus</li>
			<li>Įjunkite plėtinį</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Visiškas plėtinio pašalinimas',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Išjungkite plėtinį</li>
			<li>Pašalinkite plėtinio duomenis</li>
			<li>Pašalinkite plėtinio failus iš serverio</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'  => 'Ar tikrai norite ištrinti duomenis, susietus su plėtiniu „%s“?<br /><br />Atlikus šį veiksmą bus ištrinti visi duomenys ir nustatymai ir jo negalima atšaukti!',
	'EXTENSION_DISABLE_CONFIRM'      => 'Ar tikrai norite išjungti plėtinį „%s“?',
	'EXTENSION_ENABLE_CONFIRM'       => 'Ar tikrai norite įjungti plėtinį „%s“?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Ar tikrai norite naudoti nestabilią versiją?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Grįžti į plėtinių sąrašą',

	'EXT_DETAILS'			=> 'Informacija apie plėtinį',
	'DISPLAY_NAME'			=> 'Rodomas pavadinimas',
	'CLEAN_NAME'			=> 'Pavadinimas serveryje',
	'TYPE'					=> 'Tipas',
	'DESCRIPTION'			=> 'Aprašymas',
	'VERSION'				=> 'Versija',
	'HOMEPAGE'				=> 'Namų puslapis',
	'PATH'					=> 'Direktorija',
	'TIME'					=> 'Publikavimo data',
	'LICENSE'				=> 'Licencija',

	'REQUIREMENTS'			=> 'Reikalavimai',
	'PHPBB_VERSION'			=> 'phpBB versija',
	'PHP_VERSION'			=> 'PHP versija',
	'AUTHOR_INFORMATION'	=> 'Duomenys apie autorių',
	'AUTHOR_NAME'			=> 'Vardas',
	'AUTHOR_EMAIL'			=> 'El. paštas',
	'AUTHOR_HOMEPAGE'		=> 'Namų puslapis',
	'AUTHOR_ROLE'			=> 'Rolė',

	'NOT_UP_TO_DATE'		=> '%s reikia atnaujinimo',
	'UP_TO_DATE'			=> '%s nereikalauja atnaujinimo',
	'ANNOUNCEMENT_TOPIC'	=> 'Informacija apie atnaujinimą',
	'DOWNLOAD_LATEST'		=> 'Atsisiųskite atnaujinimą',
	'NO_VERSIONCHECK'		=> 'Nėra informacijos apie atnaujinimą.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Dar kartą patikrinti visas versijas',
	'FORCE_UNSTABLE'					=> 'Pranešti apie beta versijos išleidimus',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Atnaujinimo parinkčių konfigūravimas',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Eikite į plėtinių duomenų bazę',

	'META_FIELD_NOT_SET'	=> 'Reikalingas metalaukas %s nenurodytas.',
	'META_FIELD_INVALID'	=> 'Metalaukas %s netinkamai suformatuotas.',
]);

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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> 'Čia galite valdyti paieškos indeksą. Kadangi dažniausiai naudosite tik vieną paieškos indekso saugojimo būdą, visus nenaudojamus ištrinkite. Jeigu pakeisite paieškos nustatymus (pvz.: minimalų/maksimalų simbolių skaičių), patartina sukurti indeksą iš naujo.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Čia galite nurodyti kokiu būdu bus saugomas paieškos indeksas. Galite aprašyti įvairius nustatymus, kurie įtakos, kiek resursų pareikalaus pranešimų rašymas ir paieškos vykdymas. Kai kurie iš šių nustatymų galioja visiems indekso saugojimo būdams.',

	'COMMON_WORD_THRESHOLD'	=> 'Žodžių dažnumas',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'Žodžiai, kurių yra didesniame procente pranešimų, bus laikomi kaip dažni. Tokie žodžiai bus ignoruojami paieškos užklausose. Norėdami išjungti šį nustatymą įrašykite nulį. Galioja tik tada, jeigu iš viso yra daugiau nei 100 pranešimų. Jeigu norite, kad dažni žodžiai būtų nustatyti iš naujo, turite perkurti paieškos indeksą.',
	'CONFIRM_SEARCH_BACKEND'	=> 'Ar tikrai norite pakeisti paieškos indekso saugojimo būdą? Tai padarę turėsite sukurti indeksą iš naujo. Jeigu neplanuojate grįžti prie ankstesnio saugojimo būdo, galėsite ištrinti seną indeksą, kad atlaisvintumėte sistemos resursus.',
	'CONTINUE_DELETING_INDEX'	=> 'Tęsti ankstesnį indekso trynimo procesą',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Pradėtas indekso trynimo procesas. Norėdami pasiekti paieškos indekso puslapį turėsite jį baigti arba nutraukti.',
	'CONTINUE_INDEXING'	=> 'Tęsti ankstesnį indeksavimo procesą',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'Pradėtas indeksavimo procesas. Norėdami pasiekti paieškos indekso puslapį turėsite jį baigti arba nutraukti.',
	'CREATE_INDEX'	=> 'Sukurti indeksą',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Didžiausias simbolių skaičius pranešimuose.',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Simbolių skaičius, kuriuo bus apribotas pranešimų tekstas paieškos rezultatuose. Įveskite 0, kad būtų rodomas visas pranešimų tekstas.',
	'DELETE_INDEX'	=> 'Ištrinti indeksą',
	'DELETING_INDEX_IN_PROGRESS'	=> 'Vykdomas indekso trynimo procesas',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Paieškos saugojimo serveris dabar valo savo indeksą. Tai gali užtrukti kelias minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'		=> 'Viso teksto paieškos MySQL variklis gali būti naudojamas tiktais MySQL4 ir naujesnėje versijoje.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'	=> 'MySQL viso teksto indeksas gali būti naudojamas tik su MyISAM arba InnoDB tipo lentelėmis. Norėdami naudoti viso teksto indeksą su InnoDB tipo lentelėmis jums reikia turėti MySQL 5.6.4 ar vėlesnę versiją.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'Iš viso suindeksuota pranešimų',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti bent iš tiek simbolių, bus indeksuojami paieškai. Jūs arba jūsų diskusijų lentos talpinimo tiekėjas gali pakeisti šį nustatymą tik MySQL konfigūracijoje.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai. sudaryti iš maksimaliai tiek simbolių, bus indeksuojami paieškai. Jūs arba jūsų diskusijų lentos talpinimo tiekėjas gali pakeisti šį nustatymą tik MySQL konfigūracijoje.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Viso teksto paieškos PostgreSQL variklis gali būti naudojamas tiktais naudojant DBVS PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'				=> 'Bendras indeksuotų pranešimų skaičius',
	'FULLTEXT_POSTGRES_VERSION_CHECK'			=> 'PostgreSQL versija',
	'FULLTEXT_POSTGRES_TS_NAME'					=> 'Viso teksto paieškos konfigūracijos profilis:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimalus paieškos užklausos ilgis',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maksimalus paieškos užklausos ilgis',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'Šiam paieškos varikliui reikalinga PostgreSQL 8.3 arba naujesnė versija.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'			=> 'Viso teksto paieškos konfigūracijos profilis, naudojamas apibrėžti tvarkyklei ir žodynui.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'Žodžiai, kuriuose yra ne mažiau nei nurodytas simbolių skaičius, bus įtraukti į duomenų bazės užklausą.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'Žodžiai, kuriuose yra ne daugiau nei nurodytas simbolių skaičius, bus įtraukti į duomenų bazės užklausą.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Norėdami sukurti Sphinx konfigūracijos failą, nustatykite šiuos parametrus',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Duomenų direktorija',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Nurodyta direktorija bus naudojamas indeksams ir žurnalo failams saugoti. Ši direktorija turi būti sukurta už erdvės, pasiekiamos iš žiniatinklio erdvės, ribų (direktorija turi baigtis pasviruoju brūkšniu)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Pranešimų skaičius dažnai atnaujinamame delta indekse',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx serveris',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Serveris, kuriame vykdomas sphinx procesas (searchd). Palikite reikšmę tuščią, kad pagal nutylėjimą naudotumėte vietinį serverį',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Atminties limitas indeksavimo procesui',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Ši vertė visada turi būti mažesnė už serveriui prieinamą RAM kiekį. Jei kyla našumo problemų, tai gali būti dėl indeksavimo proceso pernelyg didelio išteklių vartojimo. Sumažinus prieinamos atminties kiekį, gali sumažėti serverio apkrova.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Pranešimų skaičius pagrindiniame indekse',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx portas',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Portas, per kurį yra pasiekiamas sphinx procesas (searchd). Palikite reikšmę tuščią, kad galėtumėte naudoti portą 9312 pagal nutylėjimą',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB paieškos sistema Sphinx palaiko tik MySQL ir PostgreSQL DBVS.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx konfigūracijos failas',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Sphinx konfigūracijos failo kūrimo turinys. Nurodyti duomenys turi būti išsaugoti faile sphinx.conf, kurį naudojama paieškos procesas sphinx. Pakeiskite [dbuser] ir [dbpassword] prieigos raktus savo duomenų bazės vardu ir slaptažodžiu.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Direktorija į Sphinx duomenis nenustatyta. Nustatykite direktoriją ir spustelėkite „Pateikti“, kad sukurtumėte konfigūracijos failą.',

	'GENERAL_SEARCH_SETTINGS'	=> 'Pagrindiniai paieškos nustatymai',
	'GO_TO_SEARCH_INDEX'	=> 'Eiti į paieškos indekso puslapį',

	'INDEX_STATS'	=> 'Indekso statistika',
	'INDEXING_IN_PROGRESS'	=> 'Vykdomas indeksavimo procesas',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Paieškos saugojimo serveris dabar indeksuoja visus diskusijų pranešimus. Priklausomai nuo jūsų diskusijų dydžio, tai gali užtrukti nuo kelių minučių iki kelių valandų.',

	'LIMIT_SEARCH_LOAD'	=> 'Paieškos puslapio sistemos apkrovimo riba',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Jeigu per 1 minutę, sistemos apkrovimas bus didesnis nei ši reikšmė, paieškos puslapis bus išjungtas. 1.0 reiškia, kad vienas procesorius apkrautas ~100%. Tai veikia tik ant serverių, kuriuose įdiegta UNIX tipo operacinė sistema.',

	'MAX_SEARCH_CHARS'	=> 'Maksimalus indeksuojamų simbolių skaičius',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti iš maksimaliai tiek simbolių, bus indeksuojami paieškai.',
	'MAX_NUM_SEARCH_KEYWORDS'	=> 'Maksimalus žodžių skaičius',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'Maksimalus žodžių skaičius, kurių vienu metu gali ieškoti vartotojas. Jeigu nenorite riboti paieškomų žodžių skaičiaus, įrašykite 0.',
	'MIN_SEARCH_CHARS'	=> 'Minimalus indeksuojamų simbolių skaičius',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti bent iš tiek simbolių, bus indeksuojami paieškai.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'Minimalus autoriaus vardo simbolių skaičius',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Ieškodami pagal autorių vartotojai turės įrašyti bent tiek simbolių. Jeigu autoriaus vartotojo vardas yra trumpesnis nei ši reikšmė, vartotojai galės ieškoti pagal pilną autoriaus vardą.',

	'PROGRESS_BAR'	=> 'Progreso juosta',

	'SEARCH_GUEST_INTERVAL'	=> 'Svečių paieškos apsauga nuo per didelio srauto',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Sekundžių skaičius, kurį tarp vykdomų paieškų turi laukti svečiai. Jeigu vienas svečias vykdo paiešką, kiti turi palaukti, kol baigsis šis laiko intervalas.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> [
		1	=> 'Suindeksuoti visi pranešimai iki pranešimo su numeriu %2$d. Dabartiniame žingsnyje suindeksuotas %1$d pranešimas.',
		2	=> 'Suindeksuoti visi pranešimai iki pranešimo su numeriu %2$d. Dabartiniame žingsnyje suindeksuoti %1$d pranešimai.',
		3	=> 'Suindeksuoti visi pranešimai iki pranešimo su numeriu %2$d. Dabartiniame žingsnyje suindeksuoti %1$d pranešimai.',
	],
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> [
		1	=> 'Dabartinis indeksavimo greitis — maždaug %1$.1f pranešimas per sekundę.',
		2	=> 'Dabartinis indeksavimo greitis — maždaug %1$.1f pranešimai per sekundę.',
		3	=> 'Dabartinis indeksavimo greitis — maždaug %1$.1f pranešimai per sekundę.',
	],
	'SEARCH_INDEX_DELETE_REDIRECT'			=> [
		1	=> 'Visi pranešimai iki pranešimo su numeriu %2$d buvo ištrinti iš paieškos indekso, iš jų %1$d dabartiniame žingsnyje.',
		2	=> 'Visi pranešimai iki pranešimo su numeriu %2$d buvo ištrinti iš paieškos indekso, iš jų %1$d dabartiniame žingsnyje.',
		3	=> 'Visi pranešimai iki pranešimo su numeriu %2$d buvo ištrinti iš paieškos indekso, iš jų %1$d dabartiniame žingsnyje.',
	],
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> [
		1	=> 'Dabartinis trynimo greitis yra maždaug %1$.1f pranešimas per sekundę.',
		2	=> 'Dabartinis trynimo greitis yra maždaug %1$.1f pranešimai per sekundę.',
		3	=> 'Dabartinis trynimo greitis yra maždaug %1$.1f pranešimai per sekundę.',
	],
	'SEARCH_INDEX_CREATED'	=> 'Visi diskusijų pranešimai sėkmingai suindeksuoti.',
	'SEARCH_INDEX_PROGRESS'					=> 'Baigta: %1$d | Liko: %2$d | Iš viso: %3$d',
	'SEARCH_INDEX_REMOVED'	=> 'Paieškos indeksas sėkmingai ištrintas.',
	'SEARCH_INTERVAL'	=> 'Vartotojų paieškos apsauga nuo per didelio srauto',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Sekundžių skaičius, kurį tarp vykdomų paieškų turi laukti vartotojas. Šis intervalas yra atskiras kiekvienam vartotojui.',
	'SEARCH_STORE_RESULTS'	=> 'Paieškos rezultatų kešavimo ilgumas',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Tiek sekundžių bus kešuojamis paieškos rezultatai. Jeigu nenorite kešuoti paieškos rezultatų, įrašykite 0.',
	'SEARCH_TYPE'	=> 'Paieškos indekso saugojimo būdas',
	'SEARCH_TYPE_EXPLAIN'	=> 'phpBB leidžia pasirinkti, kokį paieškos indekso saugojimo būdą naudoti pranešimų turiniui. Standartiškai bus naudojama phpBB nuosava viso teksto paieška.',
	'SWITCHED_SEARCH_BACKEND'	=> 'Jūs perjungėte paieškos indekso saugojimo būdą. Jeigu norite naudoti naująjį būdą, įsitikinkite, kad sukurtas paieškos indeksas.',

	'TOTAL_WORDS'	=> 'Iš viso suindeksuota žodžių',
	'TOTAL_MATCHES'	=> 'Iš viso suindeksuota žodžių ir pranešimų sąryšių',

	'YES_SEARCH'	=> 'Įjungti paieškos įrankius',
	'YES_SEARCH_EXPLAIN'	=> 'Įjungia paieškos įrankius įskaitant ir narių paiešką.',
	'YES_SEARCH_UPDATE'	=> 'Įjungti viso teksto atnaujinimą',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Pranešimų rašymo metu bus atnaujintas viso teksto indeksas. Jeigu paieška išjungta, šis nustatytas neturės reikšmės.',
]);

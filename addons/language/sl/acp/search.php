<?php
/**
*
* This file is part of the Slovenian Language Pack
* for the phpBB Forum Software.
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Tukaj lahko urejate indekse iskalnega sistema. Normalno uporabljate samo en iskalni indeks, zato izbrišite vse indekse, ki jih ne boste uporabljali. Po ureditvi iskalnih nastavitev (npr. min/maks. znakov) je smiselno  rekreiranje indeksov, da se te spremembe upoštevajo.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Tukaj lahko nastavite, kateri iskalni sistem se bo uporabljal za indeksiranje tem in izvajanje iskanj. Nastavite lahko različne nastavitve, kar vpliva na to, obdelav potrebujejo te akcije. Nekatere izmed nastavitev, so enake za vse indekse iskalnega sistema.',

	'COMMON_WORD_THRESHOLD'					=> 'Prag za skupne besede',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Besede, ki so vsebovane v večjem procentu vseh tem, bodo označene kot skupne. Skupne besede se pri iskanju ignorirajo. Za izklop nastavite na 0. Funkcija deluje samo, če je objavljenih nad 100 tem.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Ali želite preklopiti na drug iskalni sistem? Po spremembi iskalnega sistema je potrebno kreirati indeks za novi iskalni sistem. Če ne načrtujeje vrnitve na star iskalni sistem, ga lahko izbrišete. S tem boste osvobodili sistemska sredstva.',
	'CONTINUE_DELETING_INDEX'				=> 'Nadaljuj postopek brisanja prejšnjega indeksa',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Začel se je postopek brisanja indeksa. Da boste lahko dostopali do iskalne strani, morate počakati, da se postopek konča ali pa ga prekinite.',
	'CONTINUE_INDEXING'						=> 'Nadaljuj prejšnji postopek indeksiranja',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Proces indeksiranja se je začel s izvajanjem. Da lahko dostopate do strani za iskanje, počakajte, da se proces konča, ali pa ga prekinite.',
	'CREATE_INDEX'							=> 'Kreiraj indeks',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Privzeto število vrnjenih znakov',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'Privzeto število znakov, ki bodo vrnjeni med iskanjem. Vrednost 0 bo vrnila celotno objavo.',
	'DELETE_INDEX'							=> 'Izbriši indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Brisanje indeksa se izvaja ...',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Iskalni sistem trenutno čisti svoje indekse. To lahko traja nekaj minut.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL celotno besedilo ozadja se lahko uporablja samo z MySQL4 ali višje.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL indeksi za celotno besedilo, se lahko uporablja samo z MyISAM ali InnoDB tabelami. MySQL 5.6.4 ali kasnejša verzija je obvezna za fulltext indexe na InnoDB tabelah.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Skupno število indeksiranih objav',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Besede z vsaj toliko znaki bodo indeksirana za iskanje. Ti ali tvoj gostitelj lahko edina spreminjata te nastavitve s spreminjanjem mysql konfiguracije.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Besede z največ toliko znaki bodo indeksirana za iskanje. Ti ali tvoj gostitelj lahko edina spreminjata te nastavitve s spreminjanjem mysql konfiguracije.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL celotno besedilo ozadja se lahko uporablja samo s PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Skupno število indeksiranih objav',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL verzija',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Konfiguracija profila tekstovnega iskanja:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimalno dolžina besede za ključne besede',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maksimalna dolžina besede za ključne besede',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Ta iskalnik ozadja zahteva PostgreSQL verzijo 8.3 ali več.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Konfiguracija profila tekstovnega iskanja se uporablja za določitev razčlenjevalnika in slovarja.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Vsaj toliko znakovne besede bodo dodane v poizvedbo baze podatkov.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Nič več kot toliko znakovne besede bodo dodane v poizvedbo baze podatkov.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Oblikujte naslednje nastavitve, če želite generirati datoteko sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Pot do seznama podatkov',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'To se uporablja za shranjevanje indeksov in dnevniških datotek. Ustvarite morate ta imenik zunaj dostopnih spletnih imenikov. (mora imeti končne poševnice)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Število objav v pogosto psodobljenem delta indeksu',
	'FULLTEXT_SPHINX_HOST'					=> 'Spinhx iskanje demonskega gostitelja',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Gostitelj sfinginega iskanja demona (iskanje) posluša. Pustite prazno za krajevnega gostitelja',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Spominska omejitev indeksa',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Ta številka naj bo ves čas manjša od razpoložljivega RAM-a na vašem računalniku. Če se bodo ponavljale težave z učinkovitostjo, morda indeks porablja preveč sredstev. Morda bi vam pomagalo zmanjšanje razpoložljivega spomina.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Število objav v glavnem indeksu',
	'FULLTEXT_SPHINX_PORT'					=> 'Sfingino iskanje demonskega vhoda',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Vhod sfinginega iskanja demona (iskanje) posluša. Pustite prazno za Sfingin API vhod 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sfingino iskanje phpBB podpirata samo MySQL in PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sfingino oblikovanje datoteke',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Generiranje vsebine sfingine oblikovanje datoteke. Podatke morate prilepiti v sphinx.conf, ki ga uporablja sfingin iskalni demon. Zamenjajte nadomestitelja [dbuser] in [dbpassword] s priporočili vaše baze podatkov.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Seznamska pot sfinginih podatkov ni določena. Prosimo, določite in vnesite pot za določevanje oblikovane datoteke.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Splošne nastavitve iskanja',
	'GO_TO_SEARCH_INDEX'					=> 'Pojdi na iskalno indeks stran',

	'INDEX_STATS'							=> 'Statistika indeksa',
	'INDEXING_IN_PROGRESS'					=> 'Indeksiranje v izvajanju ...',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Iskalni sistem trenutno indeksira vse teme na tabli. To lahko traja od nekaj minut, do nekaj ur, odvisno od velikosti vaše table.',

	'LIMIT_SEARCH_LOAD'						=> 'Omejitev obremenitve iskalne strani',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Če sistemska obremenitev presega to vrednost 1 minuto, se bo iskalna stran izključila. 1.0 je enako 100% obremenitvi procesorja. Funkcija deluje samo na unixu.',

	'MAX_SEARCH_CHARS'						=> 'Maks. število znakov, indeksiranih pri iskanju',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Besede z ne več kot toliko znaki, bodo indeksirane za iskanje.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Maksimalno število dovoljenih iskanih besed',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Maksimalno število besed za katerimi lahko uporabnik išče. Vrednost 0 dovoljuje neomejeno število besed.',
	'MIN_SEARCH_CHARS'						=> 'Minimalno znakov indeksiranih za iskanje',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Besede z vsaj toliko znaki, bodo indeksirane za iskanje.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Min število znakov za avtorja',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Uporabniki morajo vnesti vsaj toliko znakov imena, ko iščejo po korenu avtorja. Če je uporabnikovo ime krajše od te vrednosti, lahko še vedno iščete objave tako, da vnesete celotno uporabniško ime.',

	'PROGRESS_BAR'							=> 'Stanje poteka',

	'SEARCH_GUEST_INTERVAL'					=> 'Maksimalni interval za iskanja gostov',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Število sekund, ki jih gost mora med iskanji počakati. Če en gost išče, bodo morali vsi ostali počakati, da preteča ta interval.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Vsi prispevki do prispevka %2$d so bili indeksirani, medtem ko je bil %1$d prispevek v tem koraku.<br />',
		2	=> 'Vsi prispevki do prispevka %2$d so bili indeksirani, medtem ko sta bila %1$d prispevka v tem koraku.',
		3	=> 'Vsi prispevki do prispevka %2$d so bili indeksirani, medtem ko so bili %1$d prispevki v tem koraku.',
		4	=> 'Vsi prispevki do prispevka %2$d so bili indeksirani, medtem ko je bilo %1$d prispevkov v tem koraku.',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Trenutna hitrost indeksiranja je približno %1$.1f prispevek na sekundo.<br />Indeksiranje poteka …',
		2	=> 'Trenutna hitrost indeksiranja je približno %1$.1f prispevka na sekundo.',
		3	=> 'Trenutna hitrost indeksiranja je približno %1$.1f prispevki na sekundo.',
		4	=> 'Trenutna hitrost indeksiranja je približno %1$.1f prispevkov na sekundo.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Vsi prispevki do %2$d so bili odstranjeni iz iskalnega indeksa.<br />Od tega je bila v tem koraku %1$d objava.',
		2	=> 'Vsi prispevki do %2$d so bili odstranjeni iz iskalnega indeksa.<br />Od tega sta bili v tem koraku %1$d objavi.',
		3	=> 'Vsi prispevki do %2$d so bili odstranjeni iz iskalnega indeksa.<br />Od tega so bile v tem koraku %1$d objave.',
		4	=> 'Vsi prispevki do %2$d so bili odstranjeni iz iskalnega indeksa.<br />Od tega je bilo v tem koraku %1$d objav.',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		1	=> 'Trenutna hitrost brisanja je približno %1$.1f objava na sekundo.<br />Brisanje v teku…',
		2	=> 'Trenutna hitrost brisanja je približno %1$.1f objavi na sekundo.',
		3	=> 'Trenutna hitrost brisanja je približno %1$.1f objave na sekundo.',
		4	=> 'Trenutna hitrost brisanja je približno %1$.1f objav na sekundo.',
	),
	'SEARCH_INDEX_CREATED'					=> 'Uspešno indeksirane vse teme v bazi table.',
	'SEARCH_INDEX_PROGRESS'					=> 'Končano: %1$d | V teku: %2$d | Skupno: %3$d',
	'SEARCH_INDEX_REMOVED'					=> 'Uspešno izbrisan iskalni indeks za ta sistem.',
	'SEARCH_INTERVAL'						=> 'Maksimalni interval za uporabnike',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Število sekund, ki jih uporabniki morajo počakati, med iskanji. Interval se preverja samostojno za vsakega uporabnika.',
	'SEARCH_STORE_RESULTS'					=> 'Dolžina predpomnilnika iskalnih rezultatov',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Predpomnjeni iskalni rezultati se bodo iztekli po toliko sekundah. Nastavite na 0, če želite izključiti iskalni predpomnilnik.',
	'SEARCH_TYPE'							=> 'Iskalni sistem',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vam omogoča, da izberete sistem, ki se bo uporabljal za iskanje besedila v vsebinah tem. Privzeto se bo za iskanje uporabljal lasten phpBB iskalnik celotnega besedila.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Zamenjali ste iskalni sistem. Da lahko uporabljate novi iskalni sistem, se prepričajte, da zanj obstaja indeks.',

	'TOTAL_WORDS'							=> 'Skupno število indeksiranih besed',
	'TOTAL_MATCHES'							=> 'Skupno število indeksiranih relacij besed v temah',

	'YES_SEARCH'							=> 'Vključi iskalno napravo',
	'YES_SEARCH_EXPLAIN'					=> 'Vključi iskalno funkcijo vključno z iskanjem članov.',
	'YES_SEARCH_UPDATE'						=> 'Vključi ažuriranje celotnega besedila',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Ažuriranje indeksa celotnega besedila ob pisanju tem. Nedelujoče, če je iskanje izključeno.',
));

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
	'ALL_AVAILABLE'			=> 'Vse, kar je na voljo',
	'ALL_RESULTS'			=> 'Vsi rezultati',

	'DISPLAY_RESULTS'		=> 'Prikaži rezultate kot',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Našli ste %d zadetek',
		2	=> 'Našli ste %d zadetka',
		3	=> 'Našli ste %d zadetke',
		4	=> 'Našli ste %d zadetkov',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Našli ste več kot %d zadetek',
		2	=> 'Našli ste več kot %d zadetka',
		3	=> 'Našli ste več kot %d zadetka',
		4	=> 'Našli ste več kot %d zadetka',
	),

	'GLOBAL'				=> 'Globalno obvestilo',

	'IGNORED_TERMS'			=> 'Ignorirano',
	'IGNORED_TERMS_EXPLAIN'	=> 'Naslednje besede v vaši iskalni poizvedbi so bile ignorirane: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Skoči na prispevek',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Če si želite ogledati lastne prispevke, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Potrebno je biti registrirani in prijavljeni, če si želite ogledati neprebrane objave.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Potrebno je biti registrirani in prijavljeni, če si želite ogledati neprebrane objave od vašega zadnjega obiska.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Iščete preveč besed. Prosimo, vnesite manj kot %1$d besedo.',
		2	=> 'Iščete preveč besed. Prosimo, vnesite manj kot %1$d besedi.',
		3	=> 'Iščete preveč besed. Prosimo, vnesite manj kot %1$d besede.',
		4	=> 'Iščete preveč besed. Prosimo, vnesite manj kot %1$d besed.',
	),

	'NO_KEYWORDS'			=> 'Navesti morate vsaj eno besedo. Vsaka beseda mora biti sestavljena iz vsaj %s znakov in ne sme presegati %s znakov brez posebnih znakov.',
	'NO_RECENT_SEARCHES'	=> 'Ni nedavno izvedenih iskanj.',
	'NO_SEARCH'				=> 'Oprostite, vendar nimate dovoljenja za uporabo iskalnika.',
	'NO_SEARCH_RESULTS'		=> 'Ni bilo ustreznih zadetkov.',
	'NO_SEARCH_LOAD'		=> 'Oprostite, iskanje trenutno ni mogoče. Strežnik je preobremenjen. Prosim, poskusite kasneje.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Oprostite, iskanje trenutno ni mogoče. Prosimo, poskusite čez %d sekundo.',
		2	=> 'Oprostite, iskanje trenutno ni mogoče. Prosimo, poskusite čez %d sekundi.',
		3	=> 'Oprostite, iskanje trenutno ni mogoče. Prosimo, poskusite čez %d sekunde.',
		4	=> 'Oprostite, iskanje trenutno ni mogoče. Prosimo, poskusite čez %d sekund.',
	),
	'NO_SEARCH_UNREADS'		=> 'Oprostite, vendar beleženje neprebranih objav je onemogočeno.',
	'WORD_IN_NO_POST'		=> 'Noben prispevek ni bil najden, saj besede <strong>%s</strong> ni v nobenem prispevku.',
	'WORDS_IN_NO_POST'		=> 'Noben prispevek ni bil najden, saj besed <strong>%s</strong> ni v nobenem prispevku.',

	'POST_CHARACTERS'		=> 'Znakov v prispevkih',
	'PHRASE_SEARCH_DISABLED'	=> 'Iskanje po točni besedni zvezi tu ni mogoče.',

	'RECENT_SEARCHES'		=> 'Nedavna iskanja',
	'RESULT_DAYS'			=> 'Omejitev iskanja na zadnjih',
	'RESULT_SORT'			=> 'Razvrsti rezultate po',
	'RETURN_FIRST'			=> 'Vrni prvih',
	'RETURN_FIRST_EXPLAIN'	=> 'Nastavite na  0 za prikaz celotne objave.',
	'GO_TO_SEARCH_ADV'	=> 'Pojdi na napredno iskanje',

	'SEARCHED_FOR'				=> 'Uporabljeni iskalni izraz',
	'SEARCHED_TOPIC'			=> 'Iskana tema',
	'SEARCHED_QUERY'			=> 'Iskana poizvedba',
	'SEARCH_ALL_TERMS'			=> 'Iskanje po vseh izrazih ali uporaba vnešene poizvedbe',
	'SEARCH_ANY_TERMS'			=> 'Iskanje po poljubnih izrazih',
	'SEARCH_AUTHOR'				=> 'Iskanje po avtorju',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Uporabite * kot poseben znak za delna ujemanja.',
	'SEARCH_FIRST_POST'			=> 'Samo prvi prispevek v temi',
	'SEARCH_FORUMS'				=> 'Išči po forumih',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Izberite forum ali forume, kjer želite iskati. Po podforumih lahko hitreje iščete tako, da označete starševski forum in spodaj omogočite iskanje po podforumih.',
	'SEARCH_IN_RESULTS'			=> 'Iskanje po teh rezultatih',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pred besedo, ki mora biti najdena, dodajte <strong>+</strong>, pred besedo, ki ne sme, pa <strong>-</strong>. Če želite iz seznama besed najti samo eno, jih ločite z <strong>|</strong>. Znak * lahko uporabite za delna ujemanja.',
	'SEARCH_MSG_ONLY'			=> 'Samo besedilo sporočila',
	'SEARCH_OPTIONS'			=> 'Možnosti iskanja',
	'SEARCH_QUERY'				=> 'Iskalna poizvedba',
	'SEARCH_SUBFORUMS'			=> 'Išči po podforumih',
	'SEARCH_TITLE_MSG'			=> 'Zadeve prispevkov in besedilo sporočil',
	'SEARCH_TITLE_ONLY'			=> 'Samo naslovi tem',
	'SEARCH_WITHIN'				=> 'Iskanje znotraj',
	'SORT_ASCENDING'			=> 'Naraščajoče',
	'SORT_AUTHOR'				=> 'Avtor',
	'SORT_DESCENDING'			=> 'Padajoče',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Zadeva prispevka',
	'SORT_TIME'					=> 'Čas prispevka',
	'SPHINX_SEARCH_FAILED'		=> 'Iskanje je bilo neuspešno: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Oprostite, iskanje ni bilo mogoče izvesti. Več informacij najdete v dnevniku napak.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Navesti morate vsaj %d znak avtorskega imena.',
		2	=> 'Navesti morate vsaj %d znaka avtorskega imena.',
		3	=> 'Navesti morate vsaj %d znake avtorskega imena.',
		4	=> 'Navesti morate vsaj %d znakov avtorskega imena.',
	),
));

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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBKode je posebna implementacija HTML-ja, ki nam omogoča večji in boljši nadzor nad stilom prikazanega besedila. Na tej strani lahko dodajaš, brišeš in urejaš svoje BBKode.',
	'ADD_BBCODE'				=> 'Dodaj nov BBKode',

	'BBCODE_DANGER'				=> 'BB koda, ki jo poskušate dodati, se ne zdi varna. Če BB koda v občutljivem kontekstu uporablja značko {TEXT}, poskusite namesto tega uporabiti bolj restriktivno vrsto. Nadaljujte samo, če razumete povezana tveganja.',
	'BBCODE_DANGER_PROCEED'		=> 'Nadaljuj', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBKode je uspešno dodan.',
	'BBCODE_EDITED'				=> 'BBKode je uspešno urejen.',
	'BBCODE_DELETED'			=> 'BBKoda je bila uspešno odstranjena.',
	'BBCODE_NOT_EXIST'			=> 'Izbran BBKode ne obstaja.',
	'BBCODE_HELPLINE'			=> 'Pomoč',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Polje vsebuje tekst, ki se prikaže, ko se z miško pomaknemo nad BBKode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Tekst pomoči',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Vrstica pomoči, ki ste jo vnesli, je predolga.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Ime vnešene BBKode značke že obstaja.',
	'BBCODE_INVALID'			=> 'Vnešena BBKode je napačne oblike.',
	'BBCODE_INVALID_TEMPLATE'	=> 'Vaša BBCodeâ€™ predloga je neveljavna.',
	'BBCODE_TAG'				=> 'Značka',
	'BBCODE_TAG_TOO_LONG'		=> 'Ime vnešene značke je predolgo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definicija vnešene značke je predolga. Prosim, skrajšaj jo.',
	'BBCODE_USAGE'				=> 'Uporaba BBKode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'V tej sekciji definiraj uporabo BBKode. Zamenjajte katerikoli žeton (%sglej spodaj%s).',

	'EXAMPLE'						=> 'Primer:',
	'EXAMPLES'						=> 'Primeri:',

	'HTML_REPLACEMENT'				=> 'Zamenjava HTML-ja',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'V tej sekciji definiraj privzeto menjavo v HTML obliki. Vključi vse žetone, ki si jih vnesel zgoraj !',

	'TOKEN'					=> 'Žeton',
	'TOKENS'				=> 'Žetoni',
	'TOKENS_EXPLAIN'		=> 'Žetoni so oznake, namenjene zapolnitvi prostora, ki bo pozneje zamenjan z drugim elementom. Žeton bo veljaven le, če se ujema s pripadajočo definicijo. ÄŚe je potrebno, jih lahko tudi oštevilčiš. Primer: {TEKST1}, {TEKST2}.<br /><br />V HTML zamenjavi lahko uporabiš tudi jezikovno spremenljivko iz mape language/. Primer uporabe:{L_<em>&lt:JEZIKOVNASPREMENLJIVKA&gt;</em>}<br /><br /><strong>Opomba: V lastnih BBKodah lahko uporabiš le spodnje žetone</strong>',
	'TOKEN_DEFINITION'		=> 'Kaj je lahko ?',
	'TOO_MANY_BBCODES'		=> 'Vnešenih je preveč lastnih BBKod. Pred dodajanjem novega izbriši enega ali več lastnih BBKod.',

	'tokens'	=>	array(
		'TEXT'			=> 'Vsako besedilo, ki vsebuje tuje znake, številke ipd.',
		'SIMPLETEXT'	=> 'Alfanumerični znaki - A-Z, števila, presledki, vejice, pike, minus, plus, pomišljaj in podčrtaj',
		'INTTEXT'		=> 'Unicode znaki, števila, presledki, vejice, pike, minusi, plusi, pomišljaji, podčrtaji and prazni znaki.',
		'IDENTIFIER'	=> 'Alfanumerični znaki - A-Z, števila, pomišljaj in podčrtaj',
		'NUMBER'		=> 'Katerokoli zaporedje števil',
		'EMAIL'			=> 'Veljaven e-poštni naslov',
		'URL'			=> 'Veljaven URL naslov kateregakoli dovoljenega protokola (http, ftp, ipd.). ÄŚe protokol ni podan, se samodejno pripne &quot;http://&quot;.',
		'LOCAL_URL'		=> 'Lokalen URL naslov. Naslov mora biti relativen na naslov teme in ne sme vsebovati naslova ali protokola, ker povezava se začne z â€ś%sâ€ť',
		'RELATIVE_URL'	=> 'Relativni URL naslov. Lahko uporabite to za izenačit z deli URL, ampak pozor: popoln URL naslov je veljaven relativni naslov. Ko želiš uporabiti relativni URL naslov tvojega foruma, uporabi LOCAL_URL.',
		'COLOR'			=> 'HTML barva, predstavljena v heksadecimalnem zapisu - <samp>#FF1234</samp> ali <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS koda</a>, kot je denimo <samp>fuchsia</samp> ali <samp>InactiveBorder</samp>',
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Na tej strani lahko dodajaš, brišeš in urejaš ikone, ki jih lahko uporabniki dodajajo v svoje teme ali sporočila. Te ikone so običajno prikazane poleg naslova teme na seznamu tem ali zraven naslova sporočila v pregledu teme. Namestiš in ustvariš lahko tudi nove pakete ikon.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smeški ali čustveni simboli so navadno majhne, včasih animirane sličice, uporabljene za izražanje čustev oz. počutja. Na tej strani lahko dodajaš, brišeš in urejaš smeške, ki jih lahko uporabniki dodajajo v svojih sporočilih in/ali zasebnih sporočilih. Namestiš in ustvariš lahko tudi nove pakete smeškov.',
	'ADD_SMILIES'			=> 'Dodaj več smeškov',
	'ADD_SMILEY_CODE'		=> 'Dodaj dodatne kode smeškov',
	'ADD_ICONS'				=> 'Dodaj več ikon',
	'AFTER_ICONS'			=> 'Za %s',
	'AFTER_SMILIES'			=> 'Za %s',

	'CODE'						=> 'Koda',
	'CURRENT_ICONS'				=> 'Trenutna ikona',
	'CURRENT_ICONS_EXPLAIN'		=> 'Izberi, kaj želiš storiti s trenutno nameščenimi ikonami.',
	'CURRENT_SMILIES'			=> 'Trenutni smeški',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Izberi, kaj želiš storiti s trenutno nameščenimi smeški.',

	'DISPLAY_ON_POSTING'		=> 'Prikaži pri objavljanju prispevka',
	'DISPLAY_POSTING'			=> 'Se prikazuje pri objavljanju prispevka',
	'DISPLAY_POSTING_NO'		=> 'Se ne prikazuje pri objavljanju prispevka',

	'EDIT_ICONS'				=> 'Uredi ikone',
	'EDIT_SMILIES'				=> 'Uredi smeške',
	'EMOTION'					=> 'Smešek',
	'EXPORT_ICONS'				=> 'Izvozi in prenesi icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sOb kliku na povezavo se bo konfiguracija nameščenih ikon prenesla v paket, imenovan <samp>icons.pak</samp>, ki ga lahko uporabiš za kreiranje <samp>.zip</samp> ali <samp>.tgz</samp> datoteke, ki vsebuje vse nameščene ikone, skupaj z nastavitveno datoteko <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Izvozi in prenesi smiles.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sOb kliku na povezavo se bo konfiguracija nameščenih smeškov prenesla v paket, imenovan <samp>smilies.pak</samp>, ki ga lahko uporabiš za kreiranje <samp>.zip</samp> ali <samp>.tgz</samp> datoteke, ki vsebuje vse nameščene smeške, skupaj z nastavitveno datoteko <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Prva',

	'ICONS_ADD'				=> 'Dodaj novo ikono',
	'ICONS_ADDED'			=> array(
		0	=> 'Nobena ikona ni bila dodana.',
		1	=> 'Ikona je bila uspešno dodana.',
		2	=> 'Ikoni sta bili uspešno dodani.',
		3	=> 'Ikone so bile uspešno dodane.',
		4	=> 'Ikon je bilo uspešno dodanih.',
	),
	'ICONS_CONFIG'			=> 'Konfiguracija ikon',
	'ICONS_DELETED'			=> 'Ikona je bila uspešno odstranjena.',
	'ICONS_EDIT'			=> 'Uredi ikono',
	'ICONS_EDITED'			=> array(
		0	=> 'Ikone niso bile posodobljene.',
		1	=> 'Ikona je bila uspešno posodobljena.',
		2	=> 'Ikoni sta bili uspešno posodobljeni.',
		3	=> 'Ikone so bile uspešno posodobljene.',
		4	=> 'Ikon je bilo uspešno posodobljenih.',
	),
	'ICONS_HEIGHT'			=> 'Višina ikone',
	'ICONS_IMAGE'			=> 'Slika za ikono',
	'ICONS_IMPORTED'		=> 'Paket ikon je bil uspešno nameščen.',
	'ICONS_IMPORT_SUCCESS'	=> 'Paket ikon je bil uspešno uvožen.',
	'ICONS_LOCATION'		=> 'Lokacija ikone',
	'ICONS_NOT_DISPLAYED'	=> 'Naslednje ikone niso prikazane ob pošiljanju sporočila',
	'ICONS_ORDER'			=> 'Vrstni red',
	'ICONS_URL'				=> 'Datoteka za ikono',
	'ICONS_WIDTH'			=> 'Širina ikone',
	'IMPORT_ICONS'			=> 'Namesti paket ikon',
	'IMPORT_SMILIES'		=> 'Namesti paket smeškov',

	'KEEP_ALL'			=> 'Obdrži vse',

	'MASS_ADD_SMILIES'	=> 'Dodaj več smeškov',

	'NO_ICONS_ADD'		=> 'Na voljo ni nobene ikone za dodajanje.',
	'NO_ICONS_EDIT'		=> 'Na voljo ni nobene ikone za urejanje.',
	'NO_ICONS_EXPORT'	=> 'Ni ikon, iz katerih bi lahko kreiral paket.',
	'NO_ICONS_PAK'		=> 'Ne najdem nobenega paketa z ikonami.',
	'NO_SMILIES_ADD'	=> 'Na voljo ni nobenega smeška za dodajanje.',
	'NO_SMILIES_EDIT'	=> 'Na voljo ni nobenega smeška za urejanje.',
	'NO_SMILIES_EXPORT'	=> 'Ni smeškov, iz katerih bi lahko kreiral paket.',
	'NO_SMILIES_PAK'	=> 'Ne najdem nobenega paketa s smeški.',

	'PAK_FILE_NOT_READABLE'		=> 'Napaka pri branju <samp>.pak</samp> datoteke.',

	'REPLACE_MATCHES'	=> 'Zamenjaj ujemanja',

	'SELECT_PACKAGE'			=> 'Izberi paket s smešli',
	'SMILIES_ADD'				=> 'Dodaj novega smeška',
	'SMILIES_ADDED'				=> array(
		0	=> 'Smešni niso bili dodani.',
		1	=> 'Smeško uspešno dodan.',
		2	=> 'Smeška uspešno dodana.',
		3	=> 'Smeški uspešno dodani.',
		4	=> 'Smeškov uspešno dodanih.',
	),
	'SMILIES_CODE'				=> 'Koda smeška',
	'SMILIES_CONFIG'			=> 'Konfiguracija smeškov',
	'SMILIES_DELETED'			=> 'Smeško je bil uspešno odstranjen.',
	'SMILIES_EDIT'				=> 'Uredi smeška',
	'SMILIE_NO_CODE'			=> 'Koda smeška "%s" ni bila vnešena, zato je bil le-ta ignoriran.',
	'SMILIE_NO_EMOTION'			=> 'Smeško "%s" je bil ignoriran, ker zanj ni bilo vnešeno čustvo.',
	'SMILIE_NO_FILE'			=> 'Smeško â€ś%sâ€ť je bil ignoriran, ker manjka datoteka.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Smeški niso bili posodobljeni.',
		1	=> 'Smeško uspešno posodobljen.',
		2	=> 'Smeška uspešno posodobljena.',
		3	=> 'Smeški uspešno posodobljeni.',
		4	=> 'Smeškov uspešno posodobljenih.',
	),
	'SMILIES_EMOTION'			=> 'Smešek',
	'SMILIES_HEIGHT'			=> 'Višina smeška',
	'SMILIES_IMAGE'				=> 'Slika smeška',
	'SMILIES_IMPORTED'			=> 'Paket smeškov je bil uspešno nameščen.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Paket smeškov je bil uspešno uvožen.',
	'SMILIES_LOCATION'			=> 'Lokacija smeška',
	'SMILIES_NOT_DISPLAYED'		=> 'Naslednji smeški niso prikazani ob pošiljanju sporočila',
	'SMILIES_ORDER'				=> 'Vrstni red',
	'SMILIES_URL'				=> 'Slika smeška',
	'SMILIES_WIDTH'				=> 'Širina smeška',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Dosegli ste omejitev %d smeška.',
		2	=> 'Dosegli ste omejitev %d smeškov.',
		3	=> 'Dosegli ste omejitev %d smeškov.',
		4	=> 'Dosegli ste omejitev %d smeškov.',
	),

	'WRONG_PAK_TYPE'	=> 'Izbrani paket ne vsebuje potrebnih (primernih) podatkov.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Na tej strani lahko dodajaš, brišeš in urejaš besede, ki bodo avtomatsko cenzurirane na forumu. Osebam, ki se bodo poskušale registrirati na forum in bo njihov vzdevek vseboval besedo s tega seznama, bo registracija zavrnjena. Iskanje z delnim ujemanjem (*) je dovoljeno.',
	'ADD_WORD'				=> 'Dodaj novo besedo',

	'EDIT_WORD'		=> 'Uredi cenzurirano besedo',
	'ENTER_WORD'	=> 'Vnesti moraš besedo in njeno zamenjavo.',

	'NO_WORD'	=> 'Nobena beseda ni bila izbrana.',

	'REPLACEMENT'	=> 'Zamenjava',

	'UPDATE_WORD'	=> 'Posodobi cenzurirano besedo',

	'WORD'				=> 'Beseda',
	'WORD_ADDED'		=> 'Cenzurirana beseda je bila uspešno dodana.',
	'WORD_REMOVED'		=> 'Cenzurirana beseda je bila uspešno odstranjena.',
	'WORD_UPDATED'		=> 'Cenzurirana beseda je bila uspešno urejena.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Na tej strani lahko dodajaš, brišeš in urejaš stopnje. Dodaš lahko tudi posebne stopnje, ki jih lahko dodeliš uporabniku prek uporabnikove nadzorne plošče.',
	'ADD_RANK'				=> 'Dodaj novo stopnjo',

	'MUST_SELECT_RANK'		=> 'Stopnja mora biti izbrana.',

	'NO_ASSIGNED_RANK'		=> 'Nobena posebna stopnja ni bila izbrana.',
	'NO_RANK_TITLE'			=> 'Nisi izbral imena stopnje.',
	'NO_UPDATE_RANKS'		=> 'Stopnja je bila uspešno odstranjena. Opomba: Računi z odstranjeno stopnjo niso bili posodobljeni. Na teh računih bo potrebna ročna sprememba stopnje.',

	'RANK_ADDED'			=> 'Stopnja je bila uspešno dodana.',
	'RANK_IMAGE'			=> 'Slika za stopnjo',
	'RANK_IMAGE_EXPLAIN'	=> 'Uporabi za povezavo stopnje s sliko. Pot je relativna glede na korenski direktorij namestitve phpBB-ja.',
	'RANK_IMAGE_IN_USE'		=> '(V uporabi)',
	'RANK_MINIMUM'			=> 'Najmanjše število sporočil',
	'RANK_REMOVED'			=> 'Stopnja je bila uspešno odstranjena.',
	'RANK_SPECIAL'			=> 'Nastavi kot posebno stopnjo',
	'RANK_TITLE'			=> 'Ime stopnje',
	'RANK_UPDATED'			=> 'Stopnja je bila uspešno odstranjena.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'V tej sekciji lahko nadzoruješ nedovoljena uporabniška imena. Lahko uporabiš tudi delna ujemanja (*). Opomba: vnos uporabniških imen, ki so že registrirana in aktivna, ni dovoljen. ÄŚe želiš vnesti ta uporabniška imena, jih moraš najprej zbrisati iz sistema.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Uporabiš lahko uporabniško ime z delnim ujemanjem (*).',
	'ADD_DISALLOW_TITLE'	=> 'Dodaj nedovoljeno uporabniško ime',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Nedovoljena uporabniška imena lahko odstraniš tako, da jih izbereš in nato klikneš na gumb Pošlji..',
	'DELETE_DISALLOW_TITLE'		=> 'Odstrani nedovoljeno uporabniško ime',
	'DISALLOWED_ALREADY'		=> 'Uporabniško ime ne more biti prepovedano. Mogoče je že registrirano, dodano na seznam cenzoriranih besed ali seznam prepovedanih uporabniških imen.',
	'DISALLOWED_DELETED'		=> 'Nedovoljeno uporabniško ime je bilo uspešno odstranjeno.',
	'DISALLOW_SUCCESSFUL'		=> 'Nedovoljeno uporabniško ime je bilo uspešno dodano.',

	'NO_DISALLOWED'				=> 'Ni nedovoljenih uporabniških imen',
	'NO_USERNAME_SPECIFIED'		=> 'Nisi izbral upobabniškega imena.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'V tej sekciji lahko urejaš razloge, ki so uporabljeni v prijavah in sporočilih o zavrnjenih prispevkih. Dodan je privzet razlog, označen z znakom *, ki ga ne moreš odstraniti. Ta razlog se uporabi, če primernejši razlog ne obstaja',
	'ADD_NEW_REASON'		=> 'Dodaj nov razlog',
	'AVAILABLE_TITLES'		=> 'Prevedeni naslovi razlogov',

	'IS_NOT_TRANSLATED'			=> 'Razlog <strong>ni</strong> preveden.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Razlog <strong>ni</strong> bil preveden. ÄŚe želiš razlog prevesti v svoj jezik, dodaj ključ v sekcijo z razlogi v jezikovni datoteki.',
	'IS_TRANSLATED'				=> 'Razlog je bil preveden.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Razlog je bil preveden. ÄŚe je naveden naslov vpisan v jezikovni datoteki kot ključ, se bo uporabila prevedena oblika naslova in opisa.',

	'NO_REASON'					=> 'Ne najdem razloga.',
	'NO_REASON_INFO'			=> 'Vnesti moraš naslov in opis razloga.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Privzetega razloga ne moreš odstraniti.',

	'REASON_ADD'				=> 'Dodaj razlog',
	'REASON_ADDED'				=> 'Razlog je bil uspešno dodan.',
	'REASON_ALREADY_EXIST'		=> 'Razlog s tem naslovom že obstaja. Prosim izberi drug naslov.',
	'REASON_DESCRIPTION'		=> 'Opis razloga',
	'REASON_DESC_TRANSLATED'	=> 'Prikazan opis razloga',
	'REASON_EDIT'				=> 'Uredi razlog',
	'REASON_EDIT_EXPLAIN'		=> 'Tu lahko dodajaš in urejaš razloge. ÄŚe je razlog preveden v jezikovni datoteki, se bo namesto tega opisa uporabil preveden.',
	'REASON_REMOVED'			=> 'Razlog je bil uspešno odstranjen.',
	'REASON_TITLE'				=> 'Naslov razloga',
	'REASON_TITLE_TRANSLATED'	=> 'Prikazan naslov razloga',
	'REASON_UPDATED'			=> 'Razlog je bil uspešno posodobljen.',

	'USED_IN_REPORTS'		=> 'Uporabljeni razlogi',
));

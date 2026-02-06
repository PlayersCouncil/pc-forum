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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, [
	'ACP_BBCODES_EXPLAIN'	=> 'BBKodai yra specialus kodas labai primenantis HTML. Jis leidžia labiau kontroliuoti kas ir kaip turi būti rodoma pranešimuose. Šiame puslapyje galite sukurti, ištrinti arba keisti savo BBKodus.',
	'ADD_BBCODE'	=> 'Sukurti naują BBKodą',

	'BBCODE_DANGER'	=> 'BBKodas, kurį norite pridėti naudoja kintamąjį {TEXT} HTML atributo viduje. Tai galima XSS saugumo spraga. Naudokite labiau ribotus {SIMPLETEXT} arba {INTTEXT} kintamuosius. Tęskite tik tuo atveju, jeigu tikrai suprantate galimą riziką ir manote kad {TEXT} naudojimas yra neišvengiamas.',
	'BBCODE_DANGER_PROCEED'	=> 'Tęsti',

	'BBCODE_ADDED'	=> 'BBKodas sukurtas sėkmingai.',
	'BBCODE_EDITED'	=> 'BBKodas pakeistas sėkmingai.',
	'BBCODE_DELETED'			=> 'BBCode sėkmingai ištrintas.',
	'BBCODE_NOT_EXIST'	=> 'BBKodas, kurį pasirinkote, neegzistuoja.',
	'BBCODE_HELPLINE'	=> 'Pagalba',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Šiame laukelyje gali įrašyti tekstą, kuris bus parodomas pele užvedus ant BBKodo.',
	'BBCODE_HELPLINE_TEXT'	=> 'Pagalbos tekstas',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Pagalbos tekstas yra per ilgas.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Toks BBKodo žymės pavadinimas jau egzistuoja.',
	'BBCODE_INVALID'	=> 'Jūsų sukurtas BBKodas yra neteisingos formos.',
	'BBCODE_INVALID_TEMPLATE'	=> 'HTML pakeitime yra klaidų.',
	'BBCODE_TAG'	=> 'Žymė',
	'BBCODE_TAG_TOO_LONG'	=> 'Žymės pavadinimas yra per ilgas.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Žymės aprašymas yra per ilgas. Prašome jį sutrumpinti.',
	'BBCODE_USAGE'	=> 'BBKodo naudojimas',
	'BBCODE_USAGE_EXAMPLE'	=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'	=> 'Čia galite aprašyti kaip BBKodas bus naudojamas. Kiekvienas kintamasis turi būti aprašytas ir HTML pakeitimo lauke (%sapačioje%s).',

	'EXAMPLE'	=> 'Pavyzdys:',
	'EXAMPLES'	=> 'Pavyzdžiai:',

	'HTML_REPLACEMENT'	=> 'HTML pakeitimas',
	'HTML_REPLACEMENT_EXAMPLE'	=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'	=> 'Čia galite aprašyti į kokį HTML kodą bus pakeistas BBKodas. Nepamirškite čia aprašyti kintamųjų, kuriuos aprašėte viršuje!',

	'TOKEN'	=> 'Kintamasis',
	'TOKENS'	=> 'Kintamieji',
	'TOKENS_EXPLAIN'	=> 'Kintamieji aprašo vartotojo įrašytą tekstą. BBKodas bus taikomas tik tuomet, jeigu jo aprašyme kintamųjų skaičius sutampa. Jeigu reikia, pridėdami skaičių kintamųjų gale, galite juos sunumeruoti, pvz.: {TEXT1}, {TEXT2}.<br /><br />Galite naudoti ir kintamuosius iš kalbos failo language/ kataloge: {L_<em>&lt;KINTAMOJOPAVADINIMAS&gt;</em>}, kur <em>&lt;KINTAMOJOPAVADINIMAS&gt;</em> yra išverstas sakinys, kurį norite pridėti. Pavyzdžiui, {L_WROTE} bus pakeistas į “rašė” arba į kitą vartotojo nustatytą kalbą.<br /><br /><strong>Savo BBKoduose galite naudoti tik kintamuosius aprašytus apačioje.</strong>',
	'TOKEN_DEFINITION'	=> 'Ką reiškia?',
	'TOO_MANY_BBCODES'	=> 'Jūs negalite kurti daugiau BBKodų. Ištrinkite vieną ar daugiau BBKodų ir pabandykite dar kartą.',

	'tokens'	=>	array(
		'TEXT'			=> 'Bet koks tekstas įskaitant užsienietiškus simbolius, skaičius ir t.t. Nenaudokite šio kintamojo HTML žymėse. Vietoj jo naudokite IDENTIFIER, INTTEXT arba SIMPLETEXT kintamuosius.',
		'SIMPLETEXT'	=> 'Lotyniški simboliai (A-Z), skaičiai, tarpai, kableliai, taškai, minusas, pliusas, brūkšnelis ir brūkšnys apačioje.',
		'INTTEXT'		=> 'Unikodinės raidės, skaičiai, tarpai, kableliai, taškai, minusas, pliusas, brūkšnelis ir brūkšnys apačioje.',
		'IDENTIFIER'	=> 'Lotyniški simboliai (A-Z), skaičiai, brūkšnelis ir brūkšnys apačioje.',
		'NUMBER'		=> 'Bet koks skaičius.',
		'EMAIL'			=> 'Teisingas el. pašto adresas',
		'URL'			=> 'Bet kokio protokolo teisingas URL adresas (http, ftp ir t.t. nebus naudojami dėl javascript saugumo). Jeigu neįrašysite jokio protokolo, prie adreso bus pridėta “http://”.',
		'LOCAL_URL'		=> 'Vietinis URL adresas. Toks URL adresas turi rodyti į temos puslapį ir jame neturi būti serverio vardo ar protokolo, nes šios nuorodos prasideda “%s”.',
		'RELATIVE_URL'	=> 'Santykinis URL adresas. Naudokite šį kintamąjį norėdami nurodyti URL adreso dalį, tačiau būkite atsargūs: pilnas URL adresas yra teisingas santykinis URL adresas. Jei norite nurodyti santykinius savo lentos URL adresus, geriau naudokite LOCAL_URL kintamąjį.',
		'COLOR'			=> 'HTML spalvą galima aprašyti arba skaitine išraiška <samp>#FF1234</samp>, arba <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS spalvos žodine reikšme</a>, tokia kaip <samp>fuchsia</samp> ar <samp>InactiveBorder</samp>',
		'ALNUM'			=> 'Simboliai iš lotyniškos abėcėlės (A-Z) ir skaičiai.',
		'CHOICE'		=> 'Nurodytų reikšmių pasirinkimas, pvz. <samp>{CHOICE=spades,hearts,diamonds,clubs}</samp>. Pagal nutylėjimą reikšmės laikomos neskiriančiomis didžiųjų ir mažųjų raidžių, o nurodant parinktį <samp>caseSensitive</samp> jos gali būti traktuojamos kaip didžiosios ir mažosios raidės: <samp>{CHOICE=Spades,Hearts,Diamonds,Clubs;caseSensitive}</samp>',
		'FLOAT'			=> 'Dešimtainė reikšmė, pvz. <samp>0.5</samp>.',
		'HASHMAP'		=> 'Priskiria eilutes jų pakeitimui formoje <samp>{HASHMAP=string1:replacement1,string2:replacement2}</samp>. Skiriamos didžiosios ir mažosios raidės. Pagal nutylėjimą išsaugo nežinomas reikšmes.',
		'INT'			=> 'Sveikasis skaičius, pvz. <samp>2</samp>.',
		'IP'			=> 'Galiojantis IPv4 arba IPv6 adresas.',
		'IPPORT'		=> 'Galiojantis IPv4 arba IPv6 adresas su prievado numeriu.',
		'IPV4'			=> 'Galiojantis IPv4 adresas.',
		'IPV6'			=> 'Galiojantis IPv6 adresas.',
		'MAP'			=> 'Priskiria eilutes jų pakeitimui formoje <samp>{MAP=string1:replacement1,string2:replacement2}</samp>. Didžiosios ir mažosios raidės neskiriamos. Pagal nutylėjimą išsaugo nežinomas reikšmes.',
		'RANGE'			=> 'Priima sveikąjį skaičių duotame diapazone, pvz. <samp>{RANGE=-10,42}</samp>.',
		'REGEXP'		=> 'Patvirtina jo vertę, palyginti su duota regexp, pvz. <samp>{REGEXP=/^foo\w+bar$/}</samp>.',
		'TIMESTAMP'		=> 'Laiko žyma, pvz. <samp>1h30m10s</samp> kuri bus paversta sekundžių skaičiumi. Taip pat priima numerį.',
		'UINT'			=> 'Beženklio sveikojo skaičiaus reikšmė. Toks pat kaip <samp>{INT}</samp>, bet atmeta reikšmes, mažesnes nei 0.',
	),	
	
]);

// Smilies and topic icons
$lang = array_merge($lang, [
	'ACP_ICONS_EXPLAIN'	=> 'Šiame puslapyje galite pridėti, ištrinti ir pakeisti piktogramas, kurias vartotojai galės naudoti temose arba pranešimuose. Šios piktogramos pagrinde yra rodomos forume šalia temos pavadinimo arba temoje šalia pranešimo pavadinimo. Taip pat čia galite įdiegti arba sukurti naujus piktogramų paketus.',
	'ACP_SMILIES_EXPLAIN'	=> 'Šypsenėlės yra dažniausiai maži, kartais animuoti, paveikslėliai, kurių pagalba išreiškiamos emocijos ar jausmai. Šiame puslapyje galite pridėti, ištrinti arba pakeisti šypsenėles, kurias vartotojai galės naudoti pranešimuose ir asmeninėse žinutėse. Taip pat čia galite įdiegti arba sukurti naujus šypsenėlių paketus.',
	'ADD_SMILIES'	=> 'Pridėti keletą šypsenėlių',
	'ADD_SMILEY_CODE'	=> 'Pridėti papildomą šypsenėlės kodą',
	'ADD_ICONS'	=> 'Pridėti keletą piktogramų',
	'AFTER_ICONS'	=> 'Po %s',
	'AFTER_SMILIES'	=> 'Po %s',

	'CODE'	=> 'Kodas',
	'CURRENT_ICONS'	=> 'Įdiegtos piktogramos',
	'CURRENT_ICONS_EXPLAIN'	=> 'Pasirinkite ką norite daryti su dabar įdiegtomis piktogramomis.',
	'CURRENT_SMILIES'	=> 'Įdiegtos šypsenėlės',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Pasirinkite ką norite daryti su dabar įdiegtomis šypsenėlėmis.',

	'DISPLAY_ON_POSTING'	=> 'Rodyti pranešimo rašymo puslapyje',
	'DISPLAY_POSTING'	=> 'Pranešimo rašymo puslapyje',
	'DISPLAY_POSTING_NO'	=> 'Ne pranešimo rašymo puslapyje',

	'EDIT_ICONS'	=> 'Keisti piktogramas',
	'EDIT_SMILIES'	=> 'Keisti šypsenėles',
	'EMOTION'	=> 'Emocija',
	'EXPORT_ICONS'	=> 'Eksportuoti ir atsisiųsti icons.pak',
	'EXPORT_ICONS_EXPLAIN'	=> '%sKai paspausite ant šios nuorodos, visų įdiegtų piktogramų nustatymai bus supakuoti į <samp>icons.pak</samp> failą, kurį atsisiuntę galėsite sukurti <samp>.zip</samp> arba <samp>.tgz</samp> failą su visomis piktogramomis ir šiuo <samp>icons.pak</samp> nustatymų failu%s.',
	'EXPORT_SMILIES'	=> 'Eksportuoti ir atsisiųsti smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sKai paspausite ant šios nuorodos, visų įdiegtų šypsenėlių nustatymai bus supakuoti į <samp>smilies.pak</samp> failą, kurį atsisiuntę galėsite sukurti <samp>.zip</samp> arba <samp>.tgz</samp> failą su visomis šypsenėlėmis ir šiuo <samp>smilies.pak</samp> nustatymų failu%s.',

	'FIRST'	=> 'Pirma',

	'ICONS_ADD'	=> 'Pridėti naują piktogramą',
	'ICONS_ADDED'			=> array(
		0	=> 'Piktogramos nebuvo pridėtos.',
		1	=> 'Piktograma sėkmingai pridėtos.',
		2	=> 'Piktogramos sėkmingai pridėtos.',
		3	=> 'Piktogramos sėkmingai pridėtos.',
	),
	'ICONS_CONFIG'	=> 'Piktogramos nustatymai',
	'ICONS_DELETED'	=> 'Piktograma sėkmingai ištrinta.',
	'ICONS_EDIT'	=> 'Keisti piktogramą',
	'ICONS_EDITED'			=> array(
		0	=> 'Piktogramos nebuvo atnaujintos.',
		1	=> 'Piktograma sėkmingai atnaujinta.',
		2	=> 'Piktogramos sėkmingai atnaujintos.',
		3	=> 'Piktogramos sėkmingai atnaujintos.',
	),
	'ICONS_HEIGHT'	=> 'Piktogramos aukštis',
	'ICONS_IMAGE'	=> 'Piktogramos paveikslėlis',
	'ICONS_IMPORTED'	=> 'Piktogramų paketas sėkmingai įdiegtas.',
	'ICONS_IMPORT_SUCCESS'	=> 'Piktogramų paketas sėkmingai įkeltas.',
	'ICONS_LOCATION'	=> 'Piktogramos vieta',
	'ICONS_NOT_DISPLAYED'	=> 'Šios piktogramos nerodomos pranešimo rašymo puslapyje',
	'ICONS_ORDER'	=> 'Piktogramų tvarka',
	'ICONS_URL'	=> 'Piktogramos paveikslėlio failas',
	'ICONS_WIDTH'	=> 'Piktogramos plotis',
	'IMPORT_ICONS'	=> 'Įdiegti piktogramų paketą',
	'IMPORT_SMILIES'	=> 'Įdiegti šypsenėlių paketą',

	'KEEP_ALL'	=> 'Išsaugoti visas',

	'MASS_ADD_SMILIES'	=> 'Pridėti keletą šypsenėlių',

	'NO_ICONS_ADD'	=> 'Pridėjimui piktogramų nėra.',
	'NO_ICONS_EDIT'	=> 'Keitimui piktogramų nėra.',
	'NO_ICONS_EXPORT'	=> 'Jūs neturite piktogramų, iš kurių galima sukurti paketą.',
	'NO_ICONS_PAK'	=> 'Piktogramų paketų nėra.',
	'NO_SMILIES_ADD'	=> 'Pridėjimui šypsenėlių nėra.',
	'NO_SMILIES_EDIT'	=> 'Keitimui šypsenėlių nėra.',
	'NO_SMILIES_EXPORT'	=> 'Jūs neturite šypsenėlių, iš kurių galima sukurti paketą.',
	'NO_SMILIES_PAK'	=> 'Šypsenėlių paketų nėra.',

	'PAK_FILE_NOT_READABLE'	=> 'Nepavyko perskaityti <samp>.pak</samp> failo.',

	'REPLACE_MATCHES'	=> 'Perrašyti sutampančias',

	'SELECT_PACKAGE'	=> 'Pasirinkite paketo failą',
	'SMILIES_ADD'	=> 'Pridėta naują šypsenėlę',
	'SMILIES_ADDED'				=> array(
		0	=> 'Šypsenėlės nebuvo pridėtos.',
		1	=> 'Šypsenėlė sėkmingai pridėt.',
		2	=> 'Šypsenėlės sėkmingai pridėtos.',
		3	=> 'Šypsenėlės sėkmingai pridėtos.',
	),
	'SMILIES_CODE'	=> 'Šypsenėlės kodas',
	'SMILIES_CONFIG'	=> 'Šypsenėlės nustatymai',
	'SMILIES_DELETED'	=> 'Šypsenėlė sėkmingai ištrinta.',
	'SMILIES_EDIT'	=> 'Keisti šypsenėlę',
	'SMILIE_NO_CODE'	=> 'Šypsenėlė “%s” atmesta, nes neįrašytas jos kodas.',
	'SMILIE_NO_EMOTION'	=> 'Šypsenėlė “%s” atmesta, nes nėįrašyta jos emocija.',
	'SMILIE_NO_FILE'	=> 'Šypsenėlė “%s” atmesta, nes tokio failo nėra.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Šypsenėlės nebuvo atnaujintos.',
		1	=> 'Šypsenėlė sėkmingai atnaujint.',
		2	=> 'Šypsenėlės sėkmingai atnaujintos.',
		3	=> 'Šypsenėlės sėkmingai atnaujintos.',
	),
	'SMILIES_EMOTION'	=> 'Emocija',
	'SMILIES_HEIGHT'	=> 'Šypsenėlės aukštis',
	'SMILIES_IMAGE'	=> 'Šypsenėlės paveikslėlis',
	'SMILIES_IMPORTED'	=> 'Šypsenėlių paketas sėkmingai įdiegtas.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Šypsenėlių paketas sėkmingai įkeltas.',
	'SMILIES_LOCATION'	=> 'Šypsenėlės vieta',
	'SMILIES_NOT_DISPLAYED'	=> 'Šios šypsenėlės nerodomos pranešimo rašymo puslapyje',
	'SMILIES_ORDER'	=> 'Šypsenėlių tvarka',
	'SMILIES_URL'	=> 'Šypsenėlės paveikslėlio failas',
	'SMILIES_WIDTH'	=> 'Šypsenėlės plotis',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Pasiekta šypsenėlių kiekio riba: %d.',
		2	=> 'Pasiekta šypsenėlių kiekio riba: %d.',
		3	=> 'Pasiekta šypsenėlių kiekio riba: %d.',
	),
	'WRONG_PAK_TYPE'	=> 'Nurodytame pakete nėra reikiamų duomenų.',
]);

// Word censors
$lang = array_merge($lang, [
	'ACP_WORDS_EXPLAIN'	=> 'Šiame puslapyje galite pridėti, keisti ir ištrinti automatiškai cenzūruojamus žodžius. Vartotojų vardai su šiais žodžiais galės būti registruojami. Kelių panašių reikšmių aprašymui naudokite *, pvz: *test* atitiks detestable, test* - testing, *test - detest.',
	'ADD_WORD'	=> 'Pridėti naują žodį',

	'EDIT_WORD'	=> 'Cenzūruojamo žodžio redagavimas',
	'ENTER_WORD'	=> 'Turite įrašyti žodį ir jo pakeitimą.',

	'NO_WORD'	=> 'Nepasirinkote žodžio.',

	'REPLACEMENT'	=> 'Pakeičiamas į',

	'UPDATE_WORD'	=> 'Pakeisti cenzūruojamą žodį',

	'WORD'	=> 'Žodis',
	'WORD_ADDED'	=> 'Cenzūruojamas žodis sėkmingai pridėtas.',
	'WORD_REMOVED'	=> 'Cenzūruojamas žodis sėkmingai ištrintas.',
	'WORD_UPDATED'	=> 'Cenzūruojamas žodis sėkmingai pakeistas.',
]);

// Ranks
$lang = array_merge($lang, [
	'ACP_RANKS_EXPLAIN'	=> 'Pasinaudoję šia forma galite pridėti, keisti, peržiūrėti ir ištrinti rangus. Taip pat čia galite sukurti specialius rangus, kuriuos galima priskirti vartotojui per vartotojo valdymo pultą.',
	'ADD_RANK'	=> 'Sukurti naują rangą',

	'MUST_SELECT_RANK'	=> 'Jūs turite pasirinkti rangą.',

	'NO_ASSIGNED_RANK'	=> 'Specialaus paskirto rango nėra.',
	'NO_RANK_TITLE'	=> 'Jūs nenurodėte rango pavadinimo.',
	'NO_UPDATE_RANKS'	=> 'Rangas sėkmingai ištrintas, tačiau vartotojų vardai, naudojantys šį rangą, nebuvo atnaujinti. Jūs patys iš naujo turėsite nustatyti rangą šiems vartotojams.',

	'RANK_ADDED'	=> 'Rangas sėkmingai sukurtas.',
	'RANK_IMAGE'	=> 'Rango paveikslėlis',
	'RANK_IMAGE_EXPLAIN'	=> 'Čia galite nurodyti nedidelį paveikslėlį susijusį su rangu. Kelią reikia nurodyti nuo pagrindinio phpBB katalogo.',
	'RANK_IMAGE_IN_USE'	=> '(naudojamas)',
	'RANK_MINIMUM'	=> 'Mažiausiai pranešimų',
	'RANK_REMOVED'	=> 'Rangas sėkmingai ištrintas.',
	'RANK_SPECIAL'	=> 'Specialus rangas',
	'RANK_TITLE'	=> 'Rango pavadinimas',
	'RANK_UPDATED'	=> 'Rangas sėkmingai atnaujintas.',
]);

// Disallow Usernames
$lang = array_merge($lang, [
	'ACP_DISALLOW_EXPLAIN'	=> 'Čia galite nurodyti vartotojų vardus, kuriuos bus draudžiama naudoti. Dalinėms reikšmėms aprašyti naudokite simbolį *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Simbolis * vartotojų draudime reiškia bet kokį simbolį.',
	'ADD_DISALLOW_TITLE'	=> 'Draudžiamo vartotojo vardo pridėjimas',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Norėdami ištrinti draudžiamus vartotojų vardus iš šio sąrašo, pasirinkite vartotojo vardą ir paspauskite siuntimo mygtuką.',
	'DELETE_DISALLOW_TITLE'	=> 'Draudžiamo vartotojo vardo trynimas',
	'DISALLOWED_ALREADY'	=> 'Toks vardas jau uždraustas.',
	'DISALLOWED_DELETED'	=> 'Draudžiamas vartotojo vardas sėkmingai ištrintas.',
	'DISALLOW_SUCCESSFUL'	=> 'Draudžiamas vartotojo vardas sėkmingai pridėtas.',

	'NO_DISALLOWED'	=> 'Draudžiamų vartotojų vardų nėra',
	'NO_USERNAME_SPECIFIED'	=> 'Jūs nepasirinkote arba neįrašėte vartotojo vardo.',
]);

// Reasons
$lang = array_merge($lang, [
	'ACP_REASONS_EXPLAIN'	=> 'Čia galite valdyti raportų ir blokuojamų žinučių priežastis. Standartinės priežasties (pažymėtos simboliu *) jūs negalėsite ištrinti. Jeigu nepasirinkta jokia kita priežastis, ji dažniausiai naudojama individualiose žinutėse.',
	'ADD_NEW_REASON'	=> 'Pridėti naują priežastį',
	'AVAILABLE_TITLES'	=> 'Išverstų į šią kalbą priežasčių pavadinimai',

	'IS_NOT_TRANSLATED'	=> 'Priežastis dar <strong>neišversta</strong>.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Priežastis dar <strong>neišversta</strong> į jūsų naudojamą kalbą. Jeigu norite išversti šią priežastį, pridėkite reikiamą raktą į kalbos failą ir jį išverskite.',
	'IS_TRANSLATED'	=> 'Priežastis išversta.',
	'IS_TRANSLATED_EXPLAIN'	=> 'Priežastis išversta į jūsų naudojamą kalbą. Jeigu čia nurodytas pavadinimas ir aprašymas yra aprašyti kalbos faile, bus naudojamas jų vertimas.',

	'NO_REASON'	=> 'Tokios priežasties nėra.',
	'NO_REASON_INFO'	=> 'Jūs turite įrašyti priežasties pavadinimą ir aprašymą.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Jūs negalite ištrinti standartinės priežasties “Kita”.',

	'REASON_ADD'	=> 'Raporto/blokavimo priežasties pridėjimas',
	'REASON_ADDED'	=> 'Raporto/blokavimo priežastis sėkmingai pridėta.',
	'REASON_ALREADY_EXIST'	=> 'Priežastis su tokiu pavadinimu jau egzistuoja. Įrašykite kitokį pavadinimą.',
	'REASON_DESCRIPTION'	=> 'Priežasties aprašymas',
	'REASON_DESC_TRANSLATED'	=> 'Rodomas priežasties aprašymas',
	'REASON_EDIT'	=> 'Raporto/blokavimo priežasties redagavimas',
	'REASON_EDIT_EXPLAIN'	=> 'Čia galite pridėti arba pakeisti priežastį. Jeigu priežastis yra išversta, bus naudojama versija iš kalbos failo, o ne aprašymas iš šios formos.',
	'REASON_REMOVED'	=> 'Raporto/blokavimo priežastis sėkmingai ištrinta.',
	'REASON_TITLE'	=> 'Priežasties pavadinimas',
	'REASON_TITLE_TRANSLATED'	=> 'Rodomas priežasties pavadinimas',
	'REASON_UPDATED'	=> 'Raporto/blokavimo priežastis sėkmingai atnaujinta.',

	'USED_IN_REPORTS'	=> 'Naudojama raportuose',
]);

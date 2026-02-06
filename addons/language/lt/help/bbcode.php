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

$lang = array_merge($lang, [
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Paveiksliukų žinutėse rodymas',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Įžanga',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Nuorodų kūrimas',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Sąrašų kūrimas',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Kita',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citavimas ir fiksuoto pločio teksto išvedimas',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Teksto formatavimas',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Dabar priedus galima įdėti bet kurioje pranešimo vietoje naudojant naują BBCode žymą <strong>[attachment=][/attachment]</strong>, jeigu konferencijos administratorius leidžia priedus ir jeigu turite reikiamas prieigos teises. Pranešimo puslapyje yra išskleidžiamasis sąrašas (atitinkamas mygtukas), skirtas įdėti priedus į pranešimą.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Priedų pridėjimas prie pranešimo',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BBCode turi žymą, skirtą pridėti paveiksliuką prie jūsų pranešimo. Reikia atsiminti du labai svarbius dalykus: pirma, daugelį vartotojų erzina didelis skaičius paveiksliukų, antra, jūsų paveiksliukas jau turi būti paskelbtas internete (t.y. jis negali būti tiktais jūsų kompiuteryje, nebent, jeigu jame yra įjungtas žiniatinklio serveris!). Šiuo metu nėra galimybės saugoti paveiksliukų phpBB portale (tikimasi, kad šis apribojimas bus pašalintas kitoje phpBB versijoje). Norėdami rodyti paveiksliuką, turite jį apsupti URL žymomis <strong>[img][/img]</strong>. Pavyzdžiui:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Kaip minėta ankstesniame punkte, paveiksliuką galite apvynioti žymomis <strong>[url][/url]</strong>, tai yra<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />duos:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Paveiksliuko pridėjimas prie pranešimo',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode — tai specialus HTML variantas. Ar galėsite naudotis BBCode savo pranešimuose ar ne, nustato forumo administratorius. Be to, galėsite išjungti BBCode naudojimą konkrečiame pranešime, kai jis yra skelbiamas. Pats BBCode savo stiliumi yra panašus į HTML, žymos yra laužtiniuose skliaustuose [ ir ], o ne &lt; ir &gt;; tai suteikia jums daugiau galimybių valdyti, kaip duomenys išvedami. Naudodami kai kuriuos šablonus galėsite pridėti BBCode prie savo pranešimų naudodami paprastą sąsają, esančią virš teksto įvesties lauko. Tačiau net ir šiuo atveju šis vadovas gali būti naudingas.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Kas tai yra BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBCode palaiko kelis URL\'ų kūrimo būdus.<ul><li>Pirmasis naudoja žymą <strong>[url=][/url]</strong>, po = ženklo turi eiti norimas URL\'as. Pavyzdžiui, nuorodai į phpBB.com jūs galite naudoti:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Apsilankykite phpBB!<strong>[/url]</strong><br /><br />Tai sukurs šią nuorodą: <a href="https://www.phpbb.com/">Apsilankykite phpBB!</a> Atkreipkite dėmesį, kad nuoroda atsidarys tame pačiame arba naujame lange, priklausomai nuo vartotojo naršyklės nustatymų.</li><li>Jei norite, kad pats URL\'as būtų rodomas kaip nuorodos tekstas, galite tiesiog atlikti šiuos veiksmus:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Tai suformuos šią nuorodą: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Be to, phpBB palaiko funkciją, vadinamą <i>Automatinės nuorodos</i>, tai išvers bet kurią sintaksiškai teisingą URL į nuorodą, netgi nereikia nurodyti žymų ar net priešdėlio http://. Pavyzdžiui, įvedus www.phpbb.com Jūsų pranešime bus automatiškai konvertuotas į <a href="https://www.phpbb.com/">www.phpbb.com</a> peržiūrint pranešimą.</li><li>Tas pats galioja ir el. pašto adresams, galite arba aiškiai nurodyti adresą:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />kas duos <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, arba tiesiog įveskite no.one@domain.adr savo pranešime, ir jis bus automatiškai konvertuotas peržiūrint.</li></ul>Kaip ir visos kitos BBCode žymos, galite įtraukti į URL\'us bet kokias kitas žymas, pavyzdžiui <strong>[img][/img]</strong> (žiūrėkite kitą punktą), <strong>[b][/b]</strong> ir t.t. Kaip ir formatuojant žymas, teisingas žymų įdėjimas priklauso nuo jūsų, pvz.:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> eilutėje viršuje žymų naudojimas yra <span style="text-decoration: underline">neteisingas</span>, dėl to jūsų įrašas gali būti ištrintas, todėl būkite atsargūs.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Nuorodos į kitą svetainę',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Antrasis sąrašo tipas, sunumeruotas, leidžia pasirinkti, kas tiksliai bus rodoma prieš kiekvieną elementą. Norėdami sukurti sunumeruotą sąrašą, naudokite <strong>[list=1][/list]</strong> arba <strong>[list=a][/list]</strong> abėcėlinio sąrašo sudarymui. Kaip ir markiruoto sąrašo atveju, elementai apibrėžiami naudojant <strong>[*]</strong>. Pavyzdžiui:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Eiti į parduotuvę<br /><strong>[*]</strong>Pirkti naują kompiuterį<br /><strong>[*]</strong>Įvykus klaidai, išbarti kompiuterį<br /><strong>[/list]</strong><br /><br />duos rezultatą:<ol style="list-style-type: decimal;"><li>Eiti į parduotuvę</li><li>Pirkti naują kompiuterį</li><li>Įvykus klaidai, išbarti kompiuterį</li></ol>Jei norite sudaryti abėcėlinį sąrašą, naudokite:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pirmas galimas atsakymas<br /><strong>[*]</strong>Antras galimas atsakymas<br /><strong>[*]</strong>Trečias galimas atsakymas<br /><strong>[/list]</strong><br /><br />kas duos<ol style="list-style-type: lower-alpha"><li>Pirmas galimas atsakymas</li><li>Antras galimas atsakymas</li><li>Trečias galimas atsakymas</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Sukurti numeruotą sąrašą',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode palaiko dviejų tipų sąrašus: markiruotus ir sunumeruotus. Jie beveik identiški jų HTML atitikmenims. Markiruotame sąraše visi elementai rodomi paeiliui, kiekvienas pažymėtas žymeklio simboliu. Norėdami sukurti markiruotą sąrašą, naudokite <strong>[list][/list]</strong> ir apibrėžkite kiekvieną elementą naudodami <strong>[*]</strong>. Pavyzdžiui, norėdami išvesti mėgstamas spalvas, galite naudoti:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Raudona<br /><strong>[*]</strong>Mėlyna<br /><strong>[*]</strong>Geltona<br /><strong>[/list]</strong><br /><br />Taip bus sudarytas toks sąrašas:<ul><li>Raudona</li><li>Mėlyna</li><li>Geltona</li></ul><br />Taip pat galite nurodyti sąrašo žymeklio stilių naudodami <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, arba <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Sukurkite markiruotą sąrašą',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Jei esate šios konferencijos administratorius ir turite pakankamai teisių, galite pridėti naujų BBCode žymų administratoriaus skiltyje.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Ar galiu pridėti savo žymas?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Jei norite išvesti dalį programinio kodo arba kitus fiksuoto pločio duomenis, pvz., Courier šriftą, būtina apsupti tekstą žymomis <strong>[code][/code]</strong>, pavyzdžiui<br /><br /><strong>[code]</strong>echo &quot;Čia yra kodas&quot;;<strong>[/code]</strong><br /><br />Visas formatavimas, kuris yra naudojamas žymų viduje <strong>[code][/code]</strong>, bus išsaugotas.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Kodo arba duomenų išvedimas fiksuotu pločiu',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Yra du būdai cituoti tekstą: su nuoroda ir be jos.<ul><li> Kai naudojate citatos mygtuką atsakydami į pranešimą, į atsakymo langą yra įdedamas cituojamos žinutės tekstas, įrėmintas žymomis <strong>[quote=&quot;&quot;][/quote]</strong>. Šis metodas leidžia cituoti su kreipiniu į vartotoją arba į kitą jūsų pasirinktą asmenį. Pavyzdžiui, tam kad pacituoti tekstą, parašytą vartotojo p. Blobby, galima suvesti:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Čia yra tekstas, kurį parašė vartotojas p. Blobby<strong>[/quote]</strong><br /><br />Rezultate prieš tekstą bus frazė „p. Blobby rašė:“ Atminkite, kad kreipimąsi yra <strong>būtina</strong> apsupti kabutėmis &quot;&quot;, jų negalima praleisti.</li><li>Antrasis metodas leidžia kurti paprastas citatas. Norėdami tai padaryti, turite įtraukti tekstą į žymas <strong>[quote][/quote]</strong>. Peržiūrint pranešimą, tekstas bus tiesiog rodomas citatos bloke.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citavimas atsakymuose',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode turi žymas, skirtas greitai pakeisti šrifto stilių. Tai pasiekiama šiais būdais: <ul><li>Jei norite, kad tekstas būtų paryškintas, apsupkite jį <strong>[b][/b]</strong>, pavyzdžiui:<br /><br /><strong>[b]</strong>Sveiki<strong>[/b]</strong><br /><br />taps <strong>Sveiki</strong></li><li> Pabraukimui naudokite <strong>[u][/u]</strong>, pavyzdžiui:<br /><br /><strong>[u]</strong>Labas rytas<strong>[/u]</strong><br /><br />taps <span style="text-decoration: underline">Labas rytas</span></li><li>Jei norite, kad tekstas būtų kursyvu, naudokite žymą <strong>[i][/i]</strong>, pavyzdžiui:<br /><br />Tai <strong>[i]</strong>puiku!<strong>[/i]</strong><br /><br />duos Tai <i>puiku!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Kaip tekstą padaryti paryškintą, kursyvu arba pabrauktą',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Šios žymos gali būti naudojamos šrifto spalvai arba dydžiui pakeisti (galutinė išvaizda priklausys nuo vartotojo sistemos ir naršyklės): <ul><li>Galite pakeisti teksto spalvą jį apsupdami <strong>[color=][/color]</strong>. Galite nurodyti bet kurią gerai žinomą spalvos pavadinimą (red, blue, yellow ir t.t.), arba jo šešioliktainį atitikmenį, pavyzdžiui #FFFFFF, #000000. Taigi, norėdami sukurti raudoną tekstą, galite naudoti:<br /><br /><strong>[color=red]</strong>Sveiki!<strong>[/color]</strong><br /><br />arba<br /><br /><strong>[color=#FF0000]</strong>Sveiki!<strong>[/color]</strong><br /><br />abiem atvejais bus išvesta <span style="color:red">Sveiki!</span></li><li>Dydžio keitimas išgaunamas panašiai naudojant žymą <strong>[size=][/size]</strong>. Ši žyma priklauso nuo naudojamų šablonų, rekomenduojamas formatas yra skaičius, nurodantis teksto dydį procentais, nuo 20% (labai mažas) iki 200% (labai didelis) dydžio, esančio pagal nutylėjimą. Pavyzdžiui:<br /><br /><strong>[size=30]</strong>MAŽAS<strong>[/size]</strong><br /><br />greičiausiai bus išvesta kaip <span style="font-size:30%;">MAŽAS</span><br /><br />tuo metu kai:<br /><br /><strong>[size=200]</strong>DIDELIS!<strong>[/size]</strong><br /><br />bus išvesta kaip <span style="font-size:200%;">DIDELIS!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Kaip pakeisti teksto spalvą ar dydį',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Taip, tai įmanoma. Pavyzdžiui, norėdami pritraukti dėmesį, galite rašyti:<br /><br /><strong>[size=200][color=red][b]</strong>PAŽIŪRĖKITE Į MANE!<strong>[/b][/color][/size]</strong><br /><br />tokiu atveju jis bus išvestas <span style="color:red;font-size:200%;"><strong>PAŽIŪRĖKITE Į MANE!</strong></span><br /><br />Tokiu būdu rodyti ilgų tekstų nerekomenduojama! Atminkite, kad pranešimo autorius turi pasirūpinti tinkamai uždaryti žymas. Pavyzdžiui, toks BBCode žymų naudojimas yra neteisingas:<br /><br /><strong>[b][u]</strong>Tai neteisinga<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Ar galiu kombinuoti žymas?',
]);

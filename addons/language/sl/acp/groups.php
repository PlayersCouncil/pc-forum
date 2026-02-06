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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'S te nadzorne plošče lahko upravljate z vsemi uporabniškimi skupinami. Lahko brišete, ustvarjate in urejate obstoječe skupine. Nadalje lahko izbirate vodje skupin, izbirate med statusom skupine odprta/skrita/zaprta in nastavljate ime skupine ter opis.',
	'ADD_GROUP_CATEGORY'			=> 'Dodaj kategorijo',
	'ADD_USERS'						=> 'Dodaj uporabnike',
	'ADD_USERS_EXPLAIN'				=> 'Tu lahko dodajate nove uporabnike v skupino. Izberete lahko, ali bo ta skupina postala privzeta za izbrane uporabnike. Dodatno jih lahko določite kot vodje skupine. Prosim vnesite vsako uporabniško ime na novo črto.',

	'COPY_PERMISSIONS'				=> 'Kopiraj dovoljenja od',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Ko bo skupina ustvarjenja, bo imela enaka dovoljenja kot skupina, katero ste izbrali tu.',
	'CREATE_GROUP'					=> 'Ustvari novo skupino',

	'GROUPS_NO_MEMBERS'				=> 'Ta skupina nima članov',
	'GROUPS_NO_MODS'				=> 'Niso določeni vodje skupine',

	'GROUP_APPROVE'					=> 'Odobri člana',
	'GROUP_APPROVED'				=> 'Odobreni člani',
	'GROUP_AVATAR'					=> 'Avatar skupine',
	'GROUP_AVATAR_EXPLAIN'			=> 'Ta slika bo prikazana v nadzorni plošči skupine.',
	'GROUP_CATEGORY_NAME'			=> 'Ime kategorije',
	'GROUP_CLOSED'					=> 'Zaprta',
	'GROUP_COLOR'					=> 'Barva skupine',
	'GROUP_COLOR_EXPLAIN'			=> 'Določi barvo, v kateri bodo prikazana imena uporabnikov, pusti prazno za privzeto nastavitev.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Ste prepričani, da želite dodati uporabnika %2$s v skupino?',
		2	=> 'Ste prepričani, da želite dodati uporabnika %2$s v skupino?',
		3	=> 'Ste prepričani, da želite dodati uporabnike %2$s v skupino?',
		4	=> 'Ste prepričani, da želite dodati uporabnike %2$s v skupino?',
	),
	'GROUP_CREATED'					=> 'Skupina je bila uspešno ustvarjena.',
	'GROUP_DEFAULT'					=> 'Določi privzeto skupino za člana',
	'GROUP_DEFS_UPDATED'			=> 'Privzeta skupina določena za vse izbrane člane.',
	'GROUP_DELETE'					=> 'Odstrani člana iz skupine',
	'GROUP_DELETED'					=> 'Skupina izbrisana in uporabnikove privzete skupine uspešno določene.',
	'GROUP_DEMOTE'					=> 'Odvzemi status vodji skupine',
	'GROUP_DESC'					=> 'Opis skupine',
	'GROUP_DETAILS'					=> 'Podrobnosti skupine',
	'GROUP_EDIT_EXPLAIN'			=> 'Tukaj lahko urejate obstoječo skupino. Spremenite lahko njeno ime, opis in tip (odprta, zaprta, ipd.). Določite lahko tudi širše možnosti določene skupine, kot so obarvanost, stopnja, ipd.. Spremembe določene tukaj, bodo prepisale trenutne uporabnikove nastavitve. Bodite pozorni, saj lahko člani skupine prepišejo nastavitve avatarja skupine, razen če določite ustrezna dovoljenja za uporabnike.',
	'GROUP_ERR_USERS_EXIST'			=> 'Izbrani uporabniki so že člani te skupine.',
	'GROUP_FOUNDER_MANAGE'			=> 'Upravljanje samo ustanoviteljev',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Strogo upravljanje te skupine je dovoljeno le ustanoviteljem. Uporabniki, ki imajo skupinska dovoljenja, še vedno lahko vidijo to skupino in člane skupine.',
	'GROUP_HIDDEN'					=> 'Skrita',
	'GROUP_LANG'					=> 'Jezik skupine',
	'GROUP_LEAD'					=> 'Vodje skupine',
	'GROUP_LEADERS_ADDED'			=> 'Novi vodje uspešno dodani skupini.',
	'GROUP_LEGEND'					=> 'Prikaži skupino v legendi',
	'GROUP_LIST'					=> 'Trenutni člani',
	'GROUP_LIST_EXPLAIN'			=> 'To je celoten seznam vseh trenutnih uporabnikov s članstvom v tej skupini. Lahko izbrišete člane (razen v določenih posebnih skupinah) ali dodate nove po želji.',
	'GROUP_MEMBERS'					=> 'Člani skupine',
	'GROUP_MEMBERS_EXPLAIN'			=> 'To je celoten seznam vseh uporanikov v tej uporabniški skupini. Vključuje ločene dele za vodje, prijavljajoče in obstoječe člane. Od tukaj lahko upravljate, kdo ima članstvo v tej skupini in kakšno vlogo ima. Če želite odstraniti vodjo, vendar ga želite obdržati v skupini, uporabite funkcijo Degradiraj in ne izbriši. Podobno lahko uporabite Napreduj, da obstoječega člana nadgradite v vodjo.',
	'GROUP_MESSAGE_LIMIT'			=> 'Meja zasebnih sporočil skupine na mapo',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Ta nastavitev prepiše omejitev sporočil v mapi na uporabnika. Vrednost 0 pomeni, da bo uporabljena privzeta vrednost za uporabnika.',
	'GROUP_MODS_ADDED'				=> 'Novi vodje skupine uspešno dodani.',
	'GROUP_MODS_DEMOTED'			=> 'Vodje skupine uspešno degradirani.',
	'GROUP_MODS_PROMOTED'			=> 'Člani skupine so uspešno napredovali.',
	'GROUP_NAME'					=> 'Ime skupine',
	'GROUP_NAME_TAKEN'				=> 'Ime skupine, katerega ste vnesli, je že v uporabi. Prosim izberite drugo ime.',
	'GROUP_OPEN'					=> 'Odprta',
	'GROUP_PENDING'					=> 'Potencialni člani',
	'GROUP_MAX_RECIPIENTS'			=> 'Največje število dovoljenih prejemnikov na zasebno sporočilo',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Največje število dovoljenih prejemnikov v zasebnem sporočilu. Če vnesete 0, bo uporabljena splošna nastavitev foruma.',
	'GROUP_OPTIONS_SAVE'			=> 'Splošne nastavitve skupine',
	'GROUP_PROMOTE'					=> 'Napredovanje v vodjo skupine',
	'GROUP_RANK'					=> 'Stopnja skupine',
	'GROUP_RECEIVE_PM'				=> 'Skupini je omogočeno prejemanje zasebnih sporočil',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Opomba: skritim skupinam ni mogoče pošiljati sporočil, ne glede na to nastavitev.',
	'GROUP_REQUEST'					=> 'Na zahtevo',
	'GROUP_SETTINGS_SAVE'			=> 'Širše nastavitve skupine',
	'GROUP_SKIP_AUTH'				=> 'Vodja skupine izvzeta iz dovoljenj',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Če omogočeno, vodja izgubi dovoljenja, katera bi podedoval iz skupine.',
	'GROUP_SPECIAL'					=> 'Vnaprej določeno',
	'GROUP_TEAMPAGE'				=> 'Prikaz skupine na strani ekipe',
	'GROUP_TYPE'					=> 'Tip skupine',
	'GROUP_TYPE_EXPLAIN'			=> 'To določi, kateri uporabniki se lahko pridružijo ali pregledujejo to skupino.',
	'GROUP_UPDATED'					=> 'Preference skupine uspešno posodobljene.',

	'GROUP_USERS_ADDED'				=> 'Novi uporabniki uspešno dodani v skupino.',
	'GROUP_USERS_EXIST'				=> 'Izbrani uporabniki so že člani.',
	'GROUP_USERS_REMOVE'			=> 'Uporabnik odstranjen iz skupine in nove privzete nastavitve so uspešno nastavljene.',
	'GROUP_USERS_INVALID'			=> 'V skupino niso bili dodani naslednji uporabniki, ker uporabniška imena ne obstajajo: %s',

	'LEGEND_EXPLAIN'				=> 'Te skupine so prikazane v skupinski legendi:',
	'LEGEND_SETTINGS'				=> 'Nastavitve legende',
	'LEGEND_SORT_GROUPNAME'			=> 'Razvrstite legendo po imenu skupine',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Ko je izbrana ta možnost, se spodnji ukaz ne upošteva.',

	'MANAGE_LEGEND'			=> 'Uredite legendo skupine',
	'MANAGE_TEAMPAGE'		=> 'Upravljajte s stranjo ekipe',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Določi privzeto skupino za vsakega člana',
	'MEMBERS'				=> 'Člani',

	'NO_GROUP'					=> 'Skupina ni določena.',
	'NO_GROUPS_ADDED'			=> 'Nobena skupina ni izbrana.',
	'NO_GROUPS_CREATED'			=> 'Skupine še niso bile ustvarjene.',
	'NO_PERMISSIONS'			=> 'Ne kopiraj dovoljenj',
	'NO_USERS'					=> 'Niste vnesli še nobenega uporabnika.',
	'NO_USERS_ADDED'			=> 'Nobeni uporabniki niso bili dodani skupini.',
	'NO_VALID_USERS'			=> 'Niste vnesli nobenega uporabnika, ki bi bil lahko deležen tega dejanja.',

	'PENDING_MEMBERS'			=> 'Čakajoči',

	'SELECT_GROUP'				=> 'Izberite skupino',
	'SPECIAL_GROUPS'			=> 'Prednastavljene skupine',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Prednastavljene skupine so posebne skupine, katerih ni mogoče izbrisati ali direktno spreminjati. Kljub temu, lahko vseeno dodajate uporabnike in spreminjate osnovne nastavitve.',

	'TEAMPAGE'					=> 'Stran ekipe',
	'TEAMPAGE_DISP_ALL'			=> 'Vsi člani',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Samo uporabniška skupina',
	'TEAMPAGE_DISP_FIRST'		=> 'Samo prvi člani',
	'TEAMPAGE_EXPLAIN'			=> 'Te skupine so prikazane na strani ekipe:',
	'TEAMPAGE_FORUMS'			=> 'Prikaz moderiranih forumov',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Če se strinjate, bodo moderatorji dobili seznam vaših forumov, katerim lahko spremenijo vrstni red. Ob večjem številu podatkov lahko to traja nekaj časa.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Prikaz članov',
	'TEAMPAGE_SETTINGS'			=> 'Nastavitve strani ekipe',
	'TOTAL_MEMBERS'				=> 'Člani',

	'USERS_APPROVED'				=> 'Uporabniki uspešno odobreni.',
	'USER_DEFAULT'					=> 'Uporabnikove privzete lastnosti',
	'USER_DEF_GROUPS'				=> 'Uporabnikove določene skupine',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Te skupine ste ustvarili vi ali drug administrator. Lahko upravljate s članstvom ter urejate lastnosti skupine ali celo izbrišete skupino.',
	'USER_GROUP_DEFAULT'			=> 'Nastavi kot privzeto skupino',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Izbira da na tem mestu, bo določila to skupino kot privzeto skupino za dodane uporabnike.',
	'USER_GROUP_LEADER'				=> 'Določi kot vodjo skupine',
));

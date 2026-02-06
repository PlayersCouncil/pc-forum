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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Akcija',
	'ACL_CAT_CONTENT'		=> 'Vsebina',
	'ACL_CAT_FORUMS'		=> 'Forumi',
	'ACL_CAT_MISC'			=> 'Različni',
	'ACL_CAT_PERMISSIONS'	=> 'Dovoljenja',
	'ACL_CAT_PM'			=> 'Zasebna sporočila',
	'ACL_CAT_POLLS'			=> 'Ankete',
	'ACL_CAT_POST'			=> 'Prispevki',
	'ACL_CAT_POST_ACTIONS'	=> 'Ukazi prispevkov',
	'ACL_CAT_POSTING'		=> 'Objavljanje',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Nastavitve',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Ukrepi teme',
	'ACL_CAT_USER_GROUP'	=> 'Uporabniki in skupine',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Ima dostop do profilov, seznama uporabnikov in seznama trenutno prisotnih',
	'ACL_U_CHGNAME'		=> 'Lahko spremeni uporabniško ime',
	'ACL_U_CHGPASSWD'	=> 'Lahko spremeni geslo',
	'ACL_U_CHGEMAIL'	=> 'Lahko spremeni elektronski naslov',
	'ACL_U_CHGAVATAR'	=> 'Lahko spremeni avatar',
	'ACL_U_CHGGRP'		=> 'Lahko spremeni prevzeto skupino',
	'ACL_U_CHGPROFILEINFO'	=> 'V polju profila lahko spremenite informacije',

	'ACL_U_ATTACH'		=> 'Lahko pripenja datoteke',
	'ACL_U_DOWNLOAD'	=> 'Lahko prenaša datoteke',
	'ACL_U_SAVEDRAFTS'	=> 'Lahko shranjuje osnutke',
	'ACL_U_CHGCENSORS'	=> 'Lahko onemogoči cenzuro besed',
	'ACL_U_SIG'			=> 'Lahko uporablja podpis',
	'ACL_U_EMOJI'		=> 'V naslovu teme lahko uporabite znake emojija in obogateno besedilo',

	'ACL_U_SENDPM'		=> 'Lahko pošilja zasebna sporočila',
	'ACL_U_MASSPM'		=> 'Lahko pošilja sporočila več naslovnikom',
	'ACL_U_MASSPM_GROUP'=> 'Lahko pošilja sporočila skupinam',
	'ACL_U_READPM'		=> 'Lahko bere zasebna sporočila',
	'ACL_U_PM_EDIT'		=> 'Lahko ureja svoja zasebna sporočila',
	'ACL_U_PM_DELETE'	=> 'Lahko briše zasebna sporočila v lastni mapi',
	'ACL_U_PM_FORWARD'	=> 'Lahko posreduje zasebna sporočila (forward)',
	'ACL_U_PM_EMAILPM'	=> 'Lahko pošlje zasebno sporočilo na elektronski naslov',
	'ACL_U_PM_PRINTPM'	=> 'Lahko natisne zasebno sporočilo',
	'ACL_U_PM_ATTACH'	=> 'V zasebna sporočila lahko prilepite datoteke',
	'ACL_U_PM_DOWNLOAD'	=> 'V zasebni sporočilih lahko prenašate datoteke',
	'ACL_U_PM_BBCODE'	=> 'V zasebnih sporočilih lahko uporabite BBKodo',
	'ACL_U_PM_SMILIES'	=> 'V zasebna sporočila lahko vstavite smeškote',
	'ACL_U_PM_IMG'		=> 'V zasebnih sporočilih lahko uporabite oznako [img] BBKode',
	'ACL_U_PM_FLASH'	=> 'V zasebnih sporočilih lahko uporabite oznako [flash] BBKode',

	'ACL_U_SENDEMAIL'	=> 'Lahko pošiljate e-sporočila',
	'ACL_U_SENDIM'		=> 'Lahko pošiljate nujna sporočila',
	'ACL_U_IGNOREFLOOD'	=> 'Lahko ignorirate zgornjo mejo',
	'ACL_U_HIDEONLINE'	=> 'Lahko skrijete status prisotnosti',
	'ACL_U_VIEWONLINE'	=> 'Lahko vidite skrite aktivne uporabnike',
	'ACL_U_SEARCH'		=> 'Lahko iščete po forumu',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Lahko vidite forum',
	'ACL_F_LIST_TOPICS' => 'Lahko vidite teme',
	'ACL_F_READ'		=> 'Lahko prebirate forum',
	'ACL_F_SEARCH'		=> 'Lahko iščete po forumu',
	'ACL_F_SUBSCRIBE'	=> 'Lahko se naročite na forum',
	'ACL_F_PRINT'		=> 'Lahko natisnete teme',
	'ACL_F_EMAIL'		=> 'Lahko pošiljate teme po e-pošti',
	'ACL_F_BUMP'		=> 'Lahko dvignete teme',
	'ACL_F_USER_LOCK'	=> 'Lahko zaklenete lastne teme',
	'ACL_F_DOWNLOAD'	=> 'Lahko prenašate datoteke',
	'ACL_F_REPORT'		=> 'Lahko prijavljate prispevke',

	'ACL_F_POST'		=> 'Lahko začnete nove teme',
	'ACL_F_STICKY'		=> 'Lahko objavljate lepljivke',
	'ACL_F_ANNOUNCE'	=> 'Lahko objavljate obvestila',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Lahko objavite globalne napovedi',
	'ACL_F_REPLY'		=> 'Lahko odgovorite na temo',
	'ACL_F_EDIT'		=> 'Lahko uredite lastne prispevke',
	'ACL_F_DELETE'		=> 'Lahko za stalno odstranite svojo pošto',
	'ACL_F_SOFTDELETE'	=> 'Lahko izbrišete lastne prispevke<br /><em>Moderatorji, ki imajo dovoljenje za upravljanje s pošto, lahko obnovijo izbrisano pošto.</em>',
	'ACL_F_IGNOREFLOOD' => 'Lahko prezrete določeno mejo objavljanja',
	'ACL_F_POSTCOUNT'	=> 'Stopnja števca pošte<br /><em>Te nastavitve vplivajo samo na novo pošto.</em>',
	'ACL_F_NOAPPROVE'	=> 'Lahko objavlja brez odobritve',

	'ACL_F_ATTACH'		=> 'Lahko dodaja datoteke',
	'ACL_F_ICONS'		=> 'Lahko uporablja ikone za teme/objave',
	'ACL_F_BBCODE'		=> 'Lahko uporablja BBCode',
	'ACL_F_FLASH'		=> 'Lahko uporablja [flash] BBCode oznake',
	'ACL_F_IMG'			=> 'Lahko uporablja [img] BBCode oznako',
	'ACL_F_SIGS'		=> 'Lahko uporablja podpis',
	'ACL_F_SMILIES'		=> 'Lahko uporablja smeške',

	'ACL_F_POLL'		=> 'Lahko ustvarja ankete',
	'ACL_F_VOTE'		=> 'Lahko glasuje v anketah',
	'ACL_F_VOTECHG'		=> 'Lahko spreminjanja obstoječe glasove',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Lahko ureja prispevke',
	'ACL_M_DELETE'		=> 'Lahko dokončno briše prispevke',
	'ACL_M_SOFTDELETE'	=> 'Lahko izbriše prispevke<br /><em>Moderatorji, ki imajo dovoljenje za upravljanje s pošto, lahko obnovijo izbrisano pošto.</em>',
	'ACL_M_APPROVE'		=> 'Lahko potrjuje in obnavljanja objave',
	'ACL_M_REPORT'		=> 'Lahko zapre in izbriše poročila',
	'ACL_M_CHGPOSTER'	=> 'Lahko spremeni avtorja objave',

	'ACL_M_MOVE'	=> 'Lahko premika teme',
	'ACL_M_LOCK'	=> 'Lahko zapira teme',
	'ACL_M_SPLIT'	=> 'Lahko razdeli teme',
	'ACL_M_MERGE'	=> 'Lahko združuje teme',

	'ACL_M_INFO'		=> 'Lahko vidi podrobnosti objave',
	'ACL_M_WARN'		=> 'Lahko izdaja opozorila', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Lahko zapira in briše poročila zasebnih sporočil', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> 'Lahko upravlja prepovedi', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Lahko spreminja nastavitev/preverjanje posodobitev',
	'ACL_A_SERVER'		=> 'Lahko spreminja nastavitve strežnika/komunikacije',
	'ACL_A_JABBER'		=> 'Lahko spreminja Jabber nastavitve',
	'ACL_A_PHPINFO'		=> 'Lahko vidi php nastavitve',

	'ACL_A_FORUM'		=> 'Lahko upravlja forume',
	'ACL_A_FORUMADD'	=> 'Lahko dodaja nove forume',
	'ACL_A_FORUMDEL'	=> 'Lahko briše forume',
	'ACL_A_PRUNE'		=> 'Lahko obreže forume',

	'ACL_A_ICONS'		=> 'Lahko spreminja ikone in smeške v temi/objavi',
	'ACL_A_WORDS'		=> 'Lahko spreminja cenzure besed',
	'ACL_A_BBCODE'		=> 'Lahko določa BBKodne oznake',
	'ACL_A_ATTACH'		=> 'Lahko spreminja nastavitve povezanih priponk',

	'ACL_A_USER'		=> 'Lahko nadzoruje uporabnike<br /><em>Na seznamu lahko vidite tudi uporabnikovo iskalno sredstvo. </em>',
	'ACL_A_USERDEL'		=> 'Lahko odstrani/zmanjšuje uporabnike',
	'ACL_A_GROUP'		=> 'Lahko upravlja skupine',
	'ACL_A_GROUPADD'	=> 'Lahko dodaja nove skupine',
	'ACL_A_GROUPDEL'	=> 'Lahko briše skupine',
	'ACL_A_RANKS'		=> 'Lahko upravlja statuse',
	'ACL_A_PROFILE'		=> 'Lahko upravlja profilska polja',
	'ACL_A_NAMES'		=> 'Lahko upravlja z zavrnjenimi imeni',
	'ACL_A_BAN'			=> 'Lahko upravlja s prepovedmi',

	'ACL_A_VIEWAUTH'	=> 'Lahko vidi maske dovolilnic',
	'ACL_A_AUTHGROUPS'	=> 'Lahko spremeni dovoljenja za posamezne skupine',
	'ACL_A_AUTHUSERS'	=> 'Lahko spremeni dovoljenja za posamezne uporabnike',
	'ACL_A_FAUTH'		=> 'Lahko spremeni forumska dovoljenja',
	'ACL_A_MAUTH'		=> 'Lahko spremeni moderatorska dovoljenja',
	'ACL_A_AAUTH'		=> 'Lahko spremeni administratorjeva dovoljenja',
	'ACL_A_UAUTH'		=> 'Lahko spreminja uporabnikova dovoljenja',
	'ACL_A_ROLES'		=> 'Lahko upravlja vloge',
	'ACL_A_SWITCHPERM'	=> 'Lahko uporablja druga dovoljenja',

	'ACL_A_STYLES'		=> 'Lahko uporavlja sloge',
	'ACL_A_EXTENSIONS'	=> 'Lahko upravlja razširitve',
	'ACL_A_VIEWLOGS'	=> 'Lahko vidi dnevnike',
	'ACL_A_CLEARLOGS'	=> 'Lahko čisti dnevnike',
	'ACL_A_MODULES'		=> 'Lahko upravlja module',
	'ACL_A_LANGUAGE'	=> 'Lahko upravlja jezikovne pakete',
	'ACL_A_EMAIL'		=> 'Lahko pošilja masovna sporočila',
	'ACL_A_BOTS'		=> 'Lahko upravlja bote',
	'ACL_A_REASONS'		=> 'Lahko upravlja poročil/zavrnitvene razloge',
	'ACL_A_BACKUP'		=> 'Lahko varnostno kopira/obnovi bazo podatkov',
	'ACL_A_SEARCH'		=> 'Lahko upravlja z iskanjem administracije in nastavitev',
));

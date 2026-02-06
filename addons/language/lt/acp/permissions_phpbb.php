<?php
/**
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_CAT_ACTIONS'		=> 'Veiksmai',
	'ACL_CAT_CONTENT'		=> 'Turinys',
	'ACL_CAT_FORUMS'		=> 'Forumai',
	'ACL_CAT_MISC'			=> 'Įvairūs',
	'ACL_CAT_PERMISSIONS'	=> 'Prieigos teisės',
	'ACL_CAT_PM'			=> 'Asmeninės žinutės',
	'ACL_CAT_POLLS'			=> 'Apklausos',
	'ACL_CAT_POST'			=> 'Pranešimų paskelbimas',
	'ACL_CAT_POST_ACTIONS'	=> 'Veiksmai su pranešimais',
	'ACL_CAT_POSTING'		=> 'Pranešimai',
	'ACL_CAT_PROFILE'		=> 'Profilis',
	'ACL_CAT_SETTINGS'		=> 'Nustatymai',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Veiksmai su temomis',
	'ACL_CAT_USER_GROUP'	=> 'Vartotojai ir grupės',
]);

// User Permissions
$lang = array_merge($lang, [
	'ACL_U_VIEWPROFILE'	=> 'Gali peržiūrėti profilius, vartotojų sąrašą ir puslapį „Kas dabar dalyvauja konferencijoje“',
	'ACL_U_CHGNAME'		=> 'Gali pakeisti vardą',
	'ACL_U_CHGPASSWD'	=> 'Gali pakeisti slaptažodį',
	'ACL_U_CHGEMAIL'	=> 'Gali pakeisti el. pašto adresą',
	'ACL_U_CHGAVATAR'	=> 'Gali pakeisti avatarą',
	'ACL_U_CHGGRP'		=> 'Galima pakeisti grupę pagal nutylėjimą',
	'ACL_U_CHGPROFILEINFO'	=> 'Gali keisti informaciją profilio laukuose',

	'ACL_U_ATTACH'		=> 'Gali prisegti priedus',
	'ACL_U_DOWNLOAD'	=> 'Gali parsisiųsti failus',
	'ACL_U_SAVEDRAFTS'	=> 'Gali išsaugoti juodraščius',
	'ACL_U_CHGCENSORS'	=> 'Gali išjungti autocenzorių',
	'ACL_U_SIG'			=> 'Gali naudoti parašą',
	'ACL_U_EMOJI'		=> 'Gali naudoti jaustukus ir papildomus simbolius temų pavadinimuose',

	'ACL_U_SENDPM'		=> 'Gali siųsti asmenines žinutes',
	'ACL_U_MASSPM'		=> 'Gali siųsti asmenines žinutes keliems vartotojams',
	'ACL_U_MASSPM_GROUP'=> 'Gali siųsti asmenines žinutes vartotojų grupėms',
	'ACL_U_READPM'		=> 'Galiu skaityti asmenines žinutes',
	'ACL_U_PM_EDIT'		=> 'Gali redaguoti savo asmenines žinutes',
	'ACL_U_PM_DELETE'	=> 'Gali ištrinti asmenines žinutes savo aplankuose',
	'ACL_U_PM_FORWARD'	=> 'Gali persiųsti asmenines žinutes',
	'ACL_U_PM_EMAILPM'	=> 'Gali siųsti asmenines žinutes elektroniu paštu',
	'ACL_U_PM_PRINTPM'	=> 'Gali atsispausdinti asmenines žinutes',
	'ACL_U_PM_ATTACH'	=> 'Gali pridėti priedus prie asmeninių žinučių',
	'ACL_U_PM_DOWNLOAD'	=> 'Gali atsisiųsti failus iš asmeninių žinučių',
	'ACL_U_PM_BBCODE'	=> 'Gali naudoti BBCode asmeninėse žinutėse',
	'ACL_U_PM_SMILIES'	=> 'Gali naudoti šyspsenėles asmeninėse žinutėse',
	'ACL_U_PM_IMG'		=> 'Gali naudoti žymą [img] asmeninėse žinutėse',
	'ACL_U_PM_FLASH'	=>  'Gali naudoti žymą [flash] asmeninėse žinutėse',

	'ACL_U_SENDEMAIL'	=> 'Gali siųsti žinutes elektroniniu paštu',
	'ACL_U_SENDIM'		=> 'Gali naudoti momentinių pranešimų sistemą',
	'ACL_U_IGNOREFLOOD'	=> 'Gali ignoruoti flood kontrolę',
	'ACL_U_HIDEONLINE'	=> 'Gali slėpti buvimo būseną',
	'ACL_U_VIEWONLINE'	=> 'Gali matyti buvimo būseną',
	'ACL_U_SEARCH'		=> 'Gali naudotis paieška',
]);

// Forum Permissions
$lang = array_merge($lang, [
	'ACL_F_LIST'		=> 'Gali matyti forumą',
	'ACL_F_LIST_TOPICS' => 'Gali matyti temų sąrašą forume',
	'ACL_F_READ'		=> 'Gali skaityti forumą',
	'ACL_F_SEARCH'		=> 'Gali naudoti paiešką forume',
	'ACL_F_SUBSCRIBE'	=> 'Gali prenumeruoti forumą',
	'ACL_F_PRINT'		=> 'Gali spausdinti temas',
	'ACL_F_EMAIL'		=> 'Gali pranešti (draugui) elektroniniu paštu apie temą',
	'ACL_F_BUMP'		=> 'Gali iškelti temas',
	'ACL_F_USER_LOCK'	=> 'Gali uždaryti savo temas',
	'ACL_F_DOWNLOAD'	=> 'Gali parsisiųsti failus',
	'ACL_F_REPORT'		=> 'Gali rašyti skundus',

	'ACL_F_POST'		=> 'Gali kurti temas',
	'ACL_F_STICKY'		=> 'Gali priklijuoti temas',
	'ACL_F_ANNOUNCE'	=> 'Gali kurti skelbimus',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Gali kurti svarbias temas',
	'ACL_F_REPLY'		=> 'Gali atsakyti į temas',
	'ACL_F_EDIT'		=> 'Gali redaguoti savo žinutes',
	'ACL_F_DELETE'		=> 'Gali visam laikui ištrinti savo pranešimus',
	'ACL_F_SOFTDELETE'	=> 'Gali ištrinti savo pranešimus į šiukšliadėžę<br /><em>Moderatoriai, turintys teisę patvirtinti pranešimus, gali atkurti ištrintus pranešimus.</em>',
	'ACL_F_IGNOREFLOOD' => 'Gali ignoruoti flood kontrolės',
	'ACL_F_POSTCOUNT'	=> 'Įjungtas pranešimų skaitiklis<br /><em>Atminkite, kad šis nustatymas galioja tik kuriant naujus pranešimus.</em>',
	'ACL_F_NOAPPROVE'	=> 'Gali skelbti be patvirtinimo',

	'ACL_F_ATTACH'		=> 'Gali prisegti priedus',
	'ACL_F_ICONS'		=> 'Gali naudoti temų ir pranešimų piktogramas',
	'ACL_F_BBCODE'		=> 'Gali naudoti BBCode',
	'ACL_F_FLASH'		=> 'Gali naudoti žymą [flash]',
	'ACL_F_IMG'			=> 'Gali naudoti žymą [img]',
	'ACL_F_SIGS'		=> 'Gali naudoti parašą',
	'ACL_F_SMILIES'		=> 'Gali naudoti šypsenėles',

	'ACL_F_POLL'		=> 'Gali kurti apklausas',
	'ACL_F_VOTE'		=> 'Gali balsuoti apklausose',
	'ACL_F_VOTECHG'		=> 'Gali perbalsuoti',
]);

// Moderator Permissions
$lang = array_merge($lang, [
	'ACL_M_EDIT'		=> 'Gali redaguoti pranešimus',
	'ACL_M_DELETE'		=> 'Gali visam laikui ištrinti pranešimus',
	'ACL_M_SOFTDELETE'	=> 'Gali ištrinti pranešimus į šiukšliadėžę<br /><em>Moderatoriai, turintys teisę patvirtinti pranešimus, gali atkurti ištrintus pranešimus.</em>',
	'ACL_M_APPROVE'		=> 'Gali patvirtinti ir atkurti pranešimus',
	'ACL_M_REPORT'		=> 'Gali uždaryti ir ištrinti skundus',
	'ACL_M_CHGPOSTER'	=> 'Gali pakeisti pranešimo autorių',

	'ACL_M_MOVE'	=> 'Gali perkelti temas',
	'ACL_M_LOCK'	=> 'Gali uždaryti temas',
	'ACL_M_SPLIT'	=> 'Gali atskirti temas',
	'ACL_M_MERGE'	=> 'Gali apjungti temas',

	'ACL_M_INFO'		=> 'Gali peržiūrėti detalią informaciją apie pranešimus',
	'ACL_M_WARN'		=> 'Gali paskelbti įspėjimus',
	'ACL_M_PM_REPORT'	=> 'Gali uždaryti ir ištrinti skundus dėl asmeninių žinučių',
	'ACL_M_BAN'			=> 'Gali valdyti blokavimą',
]);

// Admin Permissions
$lang = array_merge($lang, [
	'ACL_A_BOARD'		=> 'Gali pakeisti konferencijos nustatymus ir patikrinti, ar nėra atnaujinimų',
	'ACL_A_SERVER'		=> 'Gali pakeisti serverio nustatymus',
	'ACL_A_JABBER'		=> 'Gali pakeisti Jabber nustatymus',
	'ACL_A_PHPINFO'		=> 'Gali peržiūrėti PHP informaciją',

	'ACL_A_FORUM'		=> 'Gali tvarkyti forumus',
	'ACL_A_FORUMADD'	=> 'Gali kurti forumus',
	'ACL_A_FORUMDEL'	=> 'Gali ištrinti forumus',
	'ACL_A_PRUNE'		=> 'Gali išvalyti forumus',

	'ACL_A_ICONS'		=> 'Gali pakeisti temų piktogramas, pranešimus ir jaustukus',
	'ACL_A_WORDS'		=> 'Gali sukonfigūruoti autocenzorių',
	'ACL_A_BBCODE'		=> 'Gali nustatyti BBCode',
	'ACL_A_ATTACH'		=> 'Gali pakeisti priedo nustatymus',

	'ACL_A_USER'		=> 'Gali valdyti vartotojus<br /><em>Taip pat suteikia teisę peržiūrėti naršyklės tipą vartotojų, esančių konferencijų sąraše.</em>',
	'ACL_A_USERDEL'		=> 'Gali ištrinti vartotojus',
	'ACL_A_GROUP'		=> 'Gali valdyti grupes',
	'ACL_A_GROUPADD'	=> 'Gali kurti grupes',
	'ACL_A_GROUPDEL'	=> 'Gali ištrinti grupes',
	'ACL_A_RANKS'		=> 'Gali tvarkyti reitingus',
	'ACL_A_PROFILE'		=> 'Gali tvarkyti papildomus profilio laukus',
	'ACL_A_NAMES'		=> 'Gali tvarkyti uždraustus vardus',
	'ACL_A_BAN'			=> 'Gali valdyti blokavimą',

	'ACL_A_VIEWAUTH'	=> 'Gali peržiūrėti prieigų leidimus',
	'ACL_A_AUTHGROUPS'	=> 'Gali pakeisti konkrečios grupės prieigos teises',
	'ACL_A_AUTHUSERS'	=> 'Gali pakeisti konkretaus vartotojo prieigos teises',
	'ACL_A_FAUTH'		=> 'Gali pakeisti prieigos teises forumuose',
	'ACL_A_MAUTH'		=> 'Gali pakeisti moderatorių prieigos teises',
	'ACL_A_AAUTH'		=> 'Gali pakeisti administratorių prieigos teises',
	'ACL_A_UAUTH'		=> 'Gali pakeisti vartotojų prieigos teises',
	'ACL_A_ROLES'		=> 'Gali valdyti roles',
	'ACL_A_SWITCHPERM'	=> 'Gali pakeisti kitas prieigos teises',

	'ACL_A_STYLES'		=> 'Gali valdyti stilius',
	'ACL_A_EXTENSIONS'	=> 'Gali valdyti plėtinius',
	'ACL_A_VIEWLOGS'	=> 'Gali peržiūrėti išklotines',
	'ACL_A_CLEARLOGS'	=> 'Gali išvalyti išklotines',
	'ACL_A_MODULES'		=> 'Gali valdyti modulius',
	'ACL_A_LANGUAGE'	=> 'Gali valdyti kalbos paketus',
	'ACL_A_EMAIL'		=> 'Gali siųsti masinį paštą',
	'ACL_A_BOTS'		=> 'Gali valdyti botus',
	'ACL_A_REASONS'		=> 'Gali tvarkyti skundų/priežasčių sąrašą',
	'ACL_A_BACKUP'		=> 'Gali išsaugoti/atkurti duomenų bazę',
	'ACL_A_SEARCH'		=> 'Gali valdyti paieškos indeksus/paieškos nuostatas',
]);

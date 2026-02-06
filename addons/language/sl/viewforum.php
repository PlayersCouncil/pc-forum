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
	'ACTIVE_TOPICS'			=> 'Aktivne teme',
	'ANNOUNCEMENTS'			=> 'Razglas',

	'FORUM_PERMISSIONS'		=> 'Dovoljenja foruma',

	'ICON_ANNOUNCEMENT'		=> 'Razglas',
	'ICON_STICKY'			=> 'Lepljivek',

	'LOGIN_NOTIFY_FORUM'	=> 'Dobili ste opozorilo glede tega foruma, prosimo prijavite se, da si ga lahko ogledate.',

	'MARK_TOPICS_READ'		=> 'Označi teme kot prebrane',

	'NEW_POSTS_HOT'			=> 'Novi prispevki [Popularno]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Novi prispevki [Zaklenjeno]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Ni novih prispevkov [Popularno]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Ni novih prispevkov [Zaklenjeno]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Nimate potrebnih dovoljenj za ogled tem v tem forumu.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Ta kategorija nima forumov.',
	'NO_UNREAD_POSTS_HOT'		=> 'V tej temi ni novih neprebranih prispevkov [ Popularno ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'V tej temi ni novih neprebranih prispevkov [ Zaklenjeno ]',

	'POST_FORUM_LOCKED'		=> 'Forum je zaklenjen',

	'TOPICS_MARKED'			=> 'Teme v tem forumu so sedaj označene kot prebrane.',

	'UNREAD_POSTS_HOT'		=> 'Neprebran prispevek [ Popularno ]',
	'UNREAD_POSTS_LOCKED'	=> 'Neprebran prispevek [ Zaklenjeno ]',

	'VIEW_FORUM'			=> 'Ogled foruma',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tema',
		2	=> '%d temi',
		3	=> '%d teme',
		4	=> '%d tem',
	),
));

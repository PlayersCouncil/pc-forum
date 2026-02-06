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
	'APPROVE'								=> 'Potrdi',
	'ATTACHMENT'						=> 'Priloga',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Dodajanje prilog je onemogočeno.',

	'BOOKMARK_ADDED'		=> 'Tema dodana med zaznamke.',
	'BOOKMARK_ERR'			=> 'Dodajanje teme med zaznamke ni uspelo. Poskusite ponovno.',
	'BOOKMARK_REMOVED'		=> 'Zaznamek odstranjen.',
	'BOOKMARK_TOPIC'		=> 'Zaznamuj temo',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Odzaznamuj temo',
	'BUMPED_BY'				=> 'Zadnjič obnovil %1$s, dne %2$s.',
	'BUMP_TOPIC'			=> 'Obnovi temo',

	'DELETE_TOPIC'			=> 'Izbriši temo',
	'DELETED_INFORMATION'	=> 'Izbrisal %1$s, dne %2$s',
	'DISAPPROVE'					=> 'Zavrni',
	'DOWNLOAD_NOTICE'		=> 'Nimate dovoljenj za ogled prilog tega prispevka.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Zadnjič spremenil %2$s, dne %3$s, skupaj popravljeno %1$d krat.',
		2	=> 'Zadnjič spremenil %2$s, dne %3$s, skupaj popravljeno %1$d krat.',
		3	=> 'Zadnjič spremenil %2$s, dne %3$s, skupaj popravljeno %1$d krat.',
		4	=> 'Zadnjič spremenil %2$s, dne %3$s, skupaj popravljeno %1$d krat.',
	),
	'EMAIL_TOPIC'			=> 'Povej prijatelju',
	'ERROR_NO_ATTACHMENT'	=> 'Izbrana priponka ne obstaja.',

	'FILE_NOT_FOUND_404'	=> 'Datoteka <strong>%s</strong> ne obstaja.',
	'FORK_TOPIC'			=> 'Kopiraj temo',
	'FULL_EDITOR'			=> 'Poln urejevalnik',

	'LINKAGE_FORBIDDEN'		=> 'Nimate dovoljenj za ogled, presnemavanje ali delanje povezav na in iz teh strani.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Bili ste opozorjeni glede te teme, prosimo, prijavite se za ogled.',
	'LOGIN_VIEWTOPIC'		=> 'Za ogled te teme morate biti registrirani in prijavljeni.',

	'MAKE_ANNOUNCE'				=> 'Spremeni v “razglas”',
	'MAKE_GLOBAL'				=> 'Spremeni v “splošno”',
	'MAKE_NORMAL'				=> 'Spremeni v “običajno temo”',
	'MAKE_STICKY'				=> 'Spremeni v “lepljivek”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Izberete lahko največ <strong>%d</strong> možnost',
		2	=> 'Izberete lahko največ <strong>%d</strong> možnosti',
		3	=> 'Izberete lahko največ <strong>%d</strong> možnosti',
		4	=> 'Izberete lahko največ <strong>%d</strong> možnosti',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'Priponka <strong>%s</strong> ni več na voljo',
	'MOVE_TOPIC'				=> 'Premakni temo',

	'NO_ATTACHMENT_SELECTED'=> 'Niste izbrali priponke za prenos ali ogled.',
	'NO_NEWER_TOPICS'		=> 'V tem forumu ni novejših tem.',
	'NO_OLDER_TOPICS'		=> 'V tem forumu ni starejših tem.',
	'NO_UNREAD_POSTS'		=> 'V tej temi ni novih neprebranih prispevkov.',
	'NO_VOTE_OPTION'		=> 'Za glasovanje morate izbrati eno možnost.',
	'NO_VOTES'				=> 'Brez glasov',
	'NO_AUTH_PRINT_TOPIC'	=> 'Nimate dovoljenja za tiskanje tem.',

	'POLL_ENDED_AT'			=> 'Glasovanje se je zaključilo dne %s',
	'POLL_RUN_TILL'			=> 'Glasovanje traja do %s',
	'POLL_VOTED_OPTION'		=> 'Glasovali ste za to možnost',
	'POST_DELETED_RESTORE'	=> 'Ta objava je bila izbrisana. Mogoče jo je obnoviti.',
	'PRINT_TOPIC'			=> 'Pogled tiskanja',

	'QUICK_MOD'				=> 'Orodja za hitro spreminjanje',
	'QUICKREPLY'			=> 'Hitri Odgovor',

	'REPLY_TO_TOPIC'		=> 'Odgovori na temo',
	'RESTORE'				=> 'Obnovi',
	'RESTORE_TOPIC'			=> 'Obnovi temo',
	'RETURN_POST'			=> '%sVračanje na prispevek%s',

	'SUBMIT_VOTE'			=> 'Pošlji glas',

	'TOPIC_TOOLS'			=> 'Orodja za temo',
	'TOTAL_VOTES'			=> 'Skupaj glasov',

	'UNLOCK_TOPIC'			=> 'Odkleni temo',

	'VIEW_INFO'				=> 'Podrobnosti prispevka',
	'VIEW_NEXT_TOPIC'		=> 'Naslednja tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Prejšnja tema',
	'VIEW_RESULTS'			=> 'Glej rezultate',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d prispevek',
		2	=> '%d prispevka',
		3	=> '%d prispevki',
		4	=> '%d prispevkov',
	),
	'VIEW_UNREAD_POST'		=> 'Prvi neprebran prispevek',
	'VOTE_SUBMITTED'		=> 'Vaš glas je bil sprejet.',
	'VOTE_CONVERTED'		=> 'Pri pretvorjenih anketah sprememba glasov ni mogoča.',

));

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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Najbolj aktiven forum',
	'ACTIVE_IN_TOPIC'		=> 'Najbolj aktivna tema',
	'ADD_FOE'				=> 'Dodaj sovražnika',
	'ADD_FRIEND'			=> 'Dodaj prijatelja',
	'AFTER'					=> 'po',

	'ALL'					=> 'Vse',

	'BEFORE'				=> 'pred',

	'CC_SENDER'				=> 'Pošljite si kopijo te e-pošte.',
	'CONTACT_ADMIN'			=> 'Pišite administratorju',

	'DEST_LANG'				=> 'Jezik',
	'DEST_LANG_EXPLAIN'		=> 'Izberite ustrezen jezik (če je na voljo) za naslovnika tega sporočila.',

	'EDIT_PROFILE'			=> 'Uredi profil',

	'EMAIL_BODY_EXPLAIN'	=> 'To sporočilo bo poslano kot navadni tekst. Ne vključujte nobenega HTMLja ali BBCode. Povratni naslov za to sporočilo bo poslan na vaš e-poštni naslov.',
	'EMAIL_DISABLED'		=> 'Oprostite, vse funkcije e-pošte so onemogočene.',
	'EMAIL_SENT'			=> 'E-pošta je bila poslana.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'To sporočilo bo poslano kot navadni tekst. Ne vključujte nobenega HTMLja ali BBCode. Informacija o temi je že vključena v sporočilo. Povratni naslov za to sporočilo bo poslan na vaš e-poštni naslov.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Vpisati morate pravilni naslov e-pošte naslovnika.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Vpisati morate sproročilo, ki bo poslano prek e-pošte.',
	'EMPTY_MESSAGE_IM'		=> 'Vnesti morate sporočilo, ki ga želite poslati.',
	'EMPTY_NAME_EMAIL'		=> 'Vpisati morate pravo ime naslovnika.',
	'EMPTY_SENDER_EMAIL'	=> 'Vnesti morate veljaven e-naslov.',
	'EMPTY_SENDER_NAME'		=> 'Vnesti morate ime.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Vpisati morate zadevo e-sporočila.',
	'EQUAL_TO'				=> 'Enak kot',

	'FIND_USERNAME_EXPLAIN'	=> 'Za iskanje posameznih uporabnikov uporabite ta obrazec. Ni potrebno izpolniti vseh polj. Za delne zadetke lahko uporabite znak *. Datume vpisujte v obliki <kbd>YYYY-MM-DD</kbd>, primer: <samp>2004-02-29</samp>. Za izbiro enega ali več uporabniških imen uporabite kljukice (glede na obrazec lahko izberete več uporabniških imen) in kliknite gumb Izberi označeno za povratek na prejšnji obrazec.',
	'FLOOD_EMAIL_LIMIT'		=> 'Trenutno ne morete pošiljati novih e-sporočil. Prosimo, poiskusite kasneje.',

	'GROUP_LEADER'			=> 'Vodja skupine',

	'HIDE_MEMBER_SEARCH'	=> 'Skrij iskanje članov',

	'IM_ADD_CONTACT'		=> 'Dodaj kontakt',
	'IM_DOWNLOAD_APP'		=> 'Presnemi program',
	'IM_JABBER'				=> 'Prosimo, zavedajte se, da so uporabniki lahko izbrali, da ne želijo prejemati neželenih neposrednih sporočil.',
	'IM_JABBER_SUBJECT'		=> 'To je avtomatsko sporočilo, prosimo ne odgovarjajte nanj! Sporočilo od uporabnika %1$s %2$s.',
	'IM_MESSAGE'			=> 'vaše sporočilo',
	'IM_NAME'				=> 'Vaše ime',
	'IM_NO_DATA'			=> 'Ni ustreznih kontaktnih podatkov za tega uporabnika.',
	'IM_NO_JABBER'			=> 'Oprostite, neposredno sporočanje uporabnikom sistema Jabber na tem strežniku ni podprto. Potrebujete nameščen program Jabber za kontaktiranje naslovnika.',
	'IM_RECIPIENT'			=> 'Naslovnik',
	'IM_SEND'				=> 'Pošlji sporočilo',
	'IM_SEND_MESSAGE'		=> 'Pošlji sporočilo',
	'IM_SENT_JABBER'		=> 'Vaše sporočilo za %1$s je bilo uspešno poslano.',
	'IM_USER'				=> 'Pošlji hitro sporočilo',

	'LAST_ACTIVE'				=> 'Zadnjič dejaven',
	'LESS_THAN'					=> 'Manj kot',
	'LIST_USERS'				=> array(
		1	=> '%d uporabnik',
		2	=> '%d uporabnika',
		3	=> '%d uporabniki',
		4	=> '%d uporabnikov',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Za ogled seznama ekip morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Če želite pregledati seznam uporabnikov, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Če želite iskati uporabnike, morate biti registrirani in prijavljeni.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Če želite pregledovati profile uporabnikov, morate biti registrirani in prijavljeni.',

	'MANAGE_GROUP'			=> 'Vodja skupine',
	'MORE_THAN'				=> 'Več kot',

	'NO_CONTACT_FORM'		=> 'Obrazec za povezavo z administratorji je bil onemogočen.',
	'NO_CONTACT_PAGE'		=> 'Stran za povezavo z administratorji je bila onemogočena.',
	'NO_EMAIL'				=> 'Nimate dovoljenja za pošiljanje e-sporočila temu uporabniku.',
	'NO_VIEW_USERS'			=> 'Nimate dovoljenja za ogled seznama članov ali profilov.',

	'ORDER'					=> 'Razvrsti',
	'OTHER'					=> 'Ostali',

	'POST_IP'				=> 'Objavljeno iz IP/domene',

	'REAL_NAME'				=> 'Ime naslovnika',
	'RECIPIENT'				=> 'Prejemnik',
	'REMOVE_FOE'			=> 'Odstrani sovražnika',
	'REMOVE_FRIEND'			=> 'Odstrani prijatelja',

	'SELECT_MARKED'			=> 'Izberi označene',
	'SELECT_SORT_METHOD'	=> 'Izberi metodo razvrščanja',
	'SENDER_EMAIL_ADDRESS'	=> 'Vaš e-naslov',
	'SENDER_NAME'			=> 'Tvoje ime',
	'SEND_ICQ_MESSAGE'		=> 'Pošlji sporočilo ICQ',
	'SEND_IM'				=> 'Hitro sporočanje',
	'SEND_JABBER_MESSAGE'	=> 'Pošlji sporočilo Jabber',
	'SEND_MESSAGE'			=> 'Sporočilo',
	'SEND_YIM_MESSAGE'		=> 'Pošlji sporočilo YIM',
	'SORT_EMAIL'			=> 'E-pošta',
	'SORT_LAST_ACTIVE'		=> 'Zadnjič aktiven',
	'SORT_POST_COUNT'		=> 'Število prispevkov',

	'USERNAME_BEGINS_WITH'	=> 'Uporabniško ime se začne z',
	'USER_ADMIN'			=> 'Uredi uporabnika',
	'USER_BAN'				=> 'Izključevanje',
	'USER_FORUM'			=> 'Statistika uporabnika',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Trenutno ni nastavljenega nobenega opomnika',
		1		=> '%1$d opomnik nastavljen <br />» %2$s',
		2		=> '%1$d opomnika nastavljena<br />» %2$s',
		3		=> '%1$d opomniki nastavljeni<br />» %2$s',
		4		=> '%1$d opomnikov nastavljenih<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Prijavljen',
	'USER_PRESENCE'			=> 'Prisoten na forumu',
	'USERS_PER_PAGE'		=> 'Uporabnikov na stran',

	'VIEWING_PROFILE'		=> 'Ogled profila - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Poglej Facebook profil',
	'VIEW_SKYPE_PROFILE'	=> 'Poglej Skype profil',
	'VIEW_TWITTER_PROFILE'	=> 'Poglej Twitter profil',
	'VIEW_YOUTUBE_PROFILE'	=> 'Poglej YouTube profil',
));

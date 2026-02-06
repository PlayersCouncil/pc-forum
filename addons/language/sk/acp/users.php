<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @author phpBB3.sk, PepeLopez, Fonzi, Senky
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
	'ADMIN_SIG_PREVIEW'		=> 'Náhľad podpisu',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nemôžete zmeniť tohto zakladateľa na bežného používateľa. Vždy musí byť aspoň jeden aktívny zakladateľ fóra. Pokiaľ chcete zmeniť status tohto používateľa, najskôr povýšte používateľa na zakladateľa.',

	'BAN_ALREADY_ENTERED'	=> 'Ban bol úspešne udelený už predtým. Zoznam banov nebol aktualizovaný.',
	'BAN_SUCCESSFUL'		=> 'Ban úspešne udelený.',

	'CANNOT_BAN_ANONYMOUS'			=> 'Nemáte oprávnenie zakázať anonymného používateľa. Oprávnenie pre anonymných používateľov možno nastaviť v karte Oprávnenia.',
	'CANNOT_BAN_FOUNDER'			=> 'Nedajú sa zabanovať účty zakladateľov.',
	'CANNOT_BAN_YOURSELF'			=> 'Nemôžete zabanovať sami seba.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nedajú sa deaktivovať účty botov, deaktivujte bota samotného.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nemôžete deaktivovať účet zakladateľov.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nemôžete deaktivovať svoj vlastný účet.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nedá sa uvaliť nútená reaktivácia na účet bota, deaktivujte bota samotného.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nedá sa uvaliť nútená reaktivácia na účet zakladateľa.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nedá sa uvaliť nútená reaktivácia na váš vlastný účet.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nedá sa odstrániť anonymný účet.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Nedá sa odstrániť účet zakladateľa.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nedá sa odstrániť váš vlastný účet.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Užívatelia, ktorí sú v nepriateľoch, sa nedajú povýšiť na zakladateľa',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Musíte aktivovať používateľa predtým, než ho povýšite, len aktivovaní užívatelia môžu byť povýšení.',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Toto je nutné vyplniť, len pokiaľ meníte e-mailovú adresu.',

	'DELETE_POSTS'			=> 'Odstrániť príspevky',
	'DELETE_USER'			=> 'Odstrániť používateľa',
	'DELETE_USER_EXPLAIN'	=> 'Berte na vedomie, že odstránenie používateľa sa nedá vrátiť späť. Neprečítané súkromné správy poslané týmto používateľom budú vymazané a nebudú dostupné pre ich prijímateľov.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Nútená reaktivácia bola úspešná.',
	'FOUNDER'						=> 'Zakladateľ',
	'FOUNDER_EXPLAIN'				=> 'Zakladatelia majú plné administrátorské práva a nemôžu byť nikdy zabanovaní, odstránení, alebo inak upravení používateľmi, ktorí nie sú nastavení ako zakladatelia.',

	'GROUP_APPROVE'					=> 'Prijať používateľa',
	'GROUP_DEFAULT'					=> 'Nastaviť skupinu ako prednastavenú pre používateľa',
	'GROUP_DELETE'					=> 'Odobrať používateľa zo skupiny',
	'GROUP_DEMOTE'					=> 'Zosadiť moderátora skupiny',
	'GROUP_PROMOTE'					=> 'Povýšiť na moderátora skupiny',

	'IP_WHOIS_FOR'			=> 'Whois IP adresy pre %s',

	'LAST_ACTIVE'			=> 'Naposledy aktívny',

	'MOVE_POSTS_EXPLAIN'	=> 'Vyberte fórum, kam budú presunuté všetky používateľove príspevky.',

	'NO_SPECIAL_RANK'		=> 'Nebola udelená žiadna zvláštna hodnosť',
	'NO_WARNINGS'			=> 'Žiadne varovania.',
	'NOT_MANAGE_FOUNDER'	=> 'Pokúšali ste sa upraviť používateľa so statusom zakladateľ. To môžu urobiť len ďalší užívatelia s rovnakým statusom.',

	'QUICK_TOOLS'			=> 'Rýchle nástroje',

	'REGISTERED'			=> 'Registrovaný',
	'REGISTERED_IP'			=> 'IP pri registrácií',
	'RETAIN_POSTS'			=> 'Ponechať príspevky',

	'SELECT_FORM'			=> 'Vybrať formulár',
	'SELECT_USER'			=> 'Vybrať používateľa',

	'USER_ADMIN'					=> 'Administrácia používateľov',
	'USER_ADMIN_ACTIVATE'			=> 'Aktivovať účet',
	'USER_ADMIN_ACTIVATED'			=> 'Používateľ úspešne aktivovaný.',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar bol úspešne odstránený.',
	'USER_ADMIN_BAN_EMAIL'			=> 'Ban na e-mail',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'E-mailová adresa zablokovaná cez používateľskú administráciu',
	'USER_ADMIN_BAN_IP'				=> 'Ban na IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP adresa zablokovaná cez používateľskú administráciu',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Používateľské meno zablokované cez používateľskú administráciu',
	'USER_ADMIN_BAN_USER'			=> 'Ban na používateľské meno',
	'USER_ADMIN_DEACTIVATE'			=> 'Deaktivovať účet',
	'USER_ADMIN_DEACTIVED'			=> 'Používateľ úspešne deaktivovaný.',
	'USER_ADMIN_DEL_ATTACH'			=> 'Odstrániť všetky prílohy',
	'USER_ADMIN_DEL_AVATAR'			=> 'Odstrániť avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Vyprázdniť priečinok správ na odoslanie',
	'USER_ADMIN_DEL_POSTS'			=> 'Odstrániť všetky príspevky',
	'USER_ADMIN_DEL_SIG'			=> 'Odstrániť podpis',
	'USER_ADMIN_EXPLAIN'			=> 'Tu môžete upravovať detaily používateľa a niektoré nastavenia.',
	'USER_ADMIN_FORCE'				=> 'Vyžadovať reaktiváciu účtu',
	'USER_ADMIN_LEAVE_NR'			=> 'Odobrat zo skupiny nových členov fóra',
	'USER_ADMIN_MOVE_POSTS'			=> 'Presunúť všetky príspevky',
	'USER_ADMIN_SIG_REMOVED'		=> 'Používateľov podpis bol úspešne odobraný.',
	'USER_ATTACHMENTS_REMOVED'		=> 'Všetky prílohy od používateľa boli úspešne odstránené.',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Avatar nebude zobrazený, pretože avatary boli vypnuté.',
	'USER_AVATAR_UPDATED'			=> 'Nastavenie avataru bolo úspešne zmenené.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Súčasný avatar nebude zobrazený, pretože jeho koncovka bola zakázaná.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Vlastné pole v profile',
	'USER_DELETED'					=> 'Používateľ bol úspešne odstránený.',
	'USER_GROUP_ADD'				=> 'Pridať používateľa do skupiny',
	'USER_GROUP_NORMAL'				=> 'Používateľom definované skupiny, ktorých je používateľ členom',
	'USER_GROUP_PENDING'			=> 'Skupiny, kde používateľ čaká na vstup',
	'USER_GROUP_SPECIAL'			=> 'Preddefinované skupiny, ktorých je používateľ členom',
	'USER_LIFTED_NR'				=> 'Používateľ bol odobratý zo skupiny nových členov fóra.',
	'USER_NO_ATTACHMENTS'			=> 'Neexistujú žiadne prílohy k zobrazeniu.',
	'USER_NO_POSTS_TO_DELETE'			=> 'Používateľ nemá žiadne príspevky, ktoré by sa mohli zachovať alebo vymazať.',
	'USER_OUTBOX_EMPTIED'			=> 'Všetky používateľove neodoslané správy boli odstránené.',
	'USER_OUTBOX_EMPTY'				=> 'Používateľ nemal žiadne správy na odoslanie.',
	'USER_OVERVIEW_UPDATED'			=> 'Detaily používateľa úspešne aktualizované.',
	'USER_POSTS_DELETED'			=> 'Všetky príspevky používateľa boli úspešne odstránené.',
	'USER_POSTS_MOVED'				=> 'Príspevky boli úspešne presunuté do cieľového fóra.',
	'USER_PREFS_UPDATED'			=> 'Nastavenie používateľa úspešne aktualizované',
	'USER_PROFILE'					=> 'Profil používateľa',
	'USER_PROFILE_UPDATED'			=> 'Profil používateľa úspešne aktualizovaný.',
	'USER_RANK'						=> 'Hodnosť používateľa',
	'USER_RANK_UPDATED'				=> 'Hodnosť používateľa úspešne aktualizovaná..',
	'USER_SIG_UPDATED'				=> 'Podpis používateľa úspešne aktualizovaný.',
	'USER_WARNING_LOG_DELETED'		=> 'Informácie nie sú dostupné. Je možné, že bol záznam logu odstránený.',
	'USER_TOOLS'					=> 'Základné nástroje',
));

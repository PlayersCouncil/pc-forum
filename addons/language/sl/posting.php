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
	'ADD_ATTACHMENT'			=> 'Naloži priponko',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Spodaj vnesite podatke za pripenjanje ene ali več datotek.',
	'ADD_FILE'					=> 'Dodaj datoteko',
	'ADD_POLL'					=> 'Ustvaritev ankete',
	'ADD_POLL_EXPLAIN'			=> 'Če ne želite dodati ankete, polja pustite prazna.',
	'ALREADY_DELETED'			=> 'Oprostite, vendar je bil ta prispevek že izbrisan.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'Komentar priloge vsebuje prepovedane znake (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Zmanjkalo je prostora na disku za priponko.',
	'ATTACH_QUOTA_REACHED'		=> 'Oprostite, dosegli ste omejitev števila priponk tega foruma.',
	'ATTACH_SIG'				=> 'Pripni podpis (podpis lahko spremenite prek UNP)',

	'BBCODE_A_HELP'				=> 'Naložena priponka: [attachment=]ime.tip[/attachment]',
	'BBCODE_B_HELP'				=> 'Odebeljeno besedilo: [b]besedilo[/b]',
	'BBCODE_C_HELP'				=> 'Prikaz kode: [code]koda[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=širina,višina]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Velikost pisave: [size=x-small]majhno besedilo[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s je <em>izključena</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s je <em>vključena</em>',
	'BBCODE_I_HELP'				=> 'Poševno besedilo: [i]besedilo[/i]',
	'BBCODE_L_HELP'				=> 'Seznam: [list][*]besedilo[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Element seznama: [*]besedilo',
	'BBCODE_O_HELP'				=> 'Urejen seznam: [list=1][*]Prva točka[/list] ali [list=a][*]Točka a[/list]',
	'BBCODE_P_HELP'				=> 'Vstavi sliko: [img]http://url_slike[/img]',
	'BBCODE_Q_HELP'				=> 'Citat: [quote]besedilo[/quote]',
	'BBCODE_S_HELP'				=> 'Barva pisave: [color=red]besedilo[/color]  Namig: uporabite lahko tudi color=#FF0000',
	'BBCODE_U_HELP'				=> 'Podčrtano besedilo: [u]besedilo[/u]',
	'BBCODE_W_HELP'				=> 'Vstavi URL: [url]http://url[/url] or [url=http://url]besedilo povezave[/url]',
	'BBCODE_Y_HELP'				=> 'Seznam: Dodaj element seznama',
	'BUMP_ERROR'				=> 'Te teme ne morete obuditi tako kmalu po zadnjem prispevku.',

	'CANNOT_DELETE_REPLIED'		=> 'Oprostite, vendar lahko brišete samo teme, na katere še ni bilo prispevkov.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Ta prispevek je bil zaklenjen. Ne morete ga več urejati.',
	'CANNOT_EDIT_TIME'			=> 'Tega prispevka ne morete več urejati ali izbrisati.',
	'CANNOT_POST_ANNOUNCE'		=> 'Oprostite, vendar ne morete objavljati razglasov.',
	'CANNOT_POST_STICKY'		=> 'Oprostite, vendar ne morete objavljati lepljivkov.',
	'CHANGE_TOPIC_TO'			=> 'Spremeni vrsto prispevka',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Vaše sporočilo vsebuje %1$d znak.',
		2	=> 'Vaše sporočilo vsebuje %1$d znaka.',
		3	=> 'Vaše sporočilo vsebuje %1$d znake.',
		4	=> 'Vaše sporočilo vsebuje %1$d znakov.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Vaš podpis vsebuje %1$d znak.',
		2	=> 'Vaš podpis vsebuje %1$d znaka.',
		3	=> 'Vaš podpis vsebuje %1$d znake.',
		4	=> 'Vaš podpis vsebuje %1$d znakov.',
	),
	'CLOSE_TAGS'				=> 'Zapri oznake',
	'CURRENT_TOPIC'				=> 'Trenutna tema',

	'DELETE_FILE'				=> 'Izbriši datoteko',
	'DELETE_MESSAGE'			=> 'Izbriši sporočilo',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ali ste prepričani, da želite izbrisati to sporočilo?',
	'DELETE_OWN_POSTS'			=> 'Oprostite, vendar lahko brišete samo svoje prispevke.',
	'DELETE_PERMANENTLY'		=> 'Dokončno izbriši',
	'DELETE_POST_CONFIRM'		=> 'Ali ste prepričani, da želite izbrisati ta prispevek?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Ste prepričani, da želite <strong>za vedno</strong> izbrisati objavo?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Trajnega izbrisa objave ne morete obnoviti',
		2	=> 'Trajnega izbrisa %1$d objav ne morete obnoviti',
		3	=> 'Trajnega izbrisa %1$d objav ne morete obnoviti',
		4	=> 'Trajnega izbrisa %1$d objav ne morete obnoviti',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Ste prepričani, da želite izbrisati objave?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Ste prepričani, da želite <strong>za vedno</strong> izbrisati objave?',
	'DELETE_REASON'				=> 'Razlog izbrisa',
	'DELETE_REASON_EXPLAIN'		=> 'Razlog izbrisa bo viden moderatorjem.',
	'DELETE_POST_WARN'			=> 'Po brisanju tega prispevka ne morete več povrniti',
	'DELETE_TOPIC_CONFIRM'		=> 'Res želite izbrisati to temo?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Trajnega izbrisa teme ne morete obnoviti',
		2	=> 'Trajnega izbrisa %1$d tem ne morete obnoviti',
		3	=> 'Trajnega izbrisa %1$d tem ne morete obnoviti',
		4	=> 'Trajnega izbrisa %1$d tem ne morete obnoviti',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Res želite <strong>dokončno</strong> izbrisati to temo?',
	'DELETE_TOPICS_CONFIRM'		=> 'Ste prepričani, da želite izbrisati teme?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Ste prepričani, da želite <strong>za vedno</strong> izbrisati teme?',
	'DISABLE_BBCODE'			=> 'Onemogoči BBCode',
	'DISABLE_MAGIC_URL'			=> 'Ne prepoznaj URLjev',
	'DISABLE_SMILIES'			=> 'Onemogoči smeške',
	'DISALLOWED_CONTENT'		=> 'Nalaganje je bilo zavrnjeno ker je bila datoteka prepoznana kot nosilka vsebin, ki lahko omogočajo vdor.',
	'DISALLOWED_EXTENSION'		=> 'Končnica %s ni dovoljena.',
	'DRAFT_LOADED'				=> 'Osnutek je bil naložen v prostor za prispevke - sedaj ga boste morda želeli dokončati.<br />Po pošiljanju tega prispevka bo vaš osnutek izbrisan.',
	'DRAFT_LOADED_PM'			=> 'Osnutek je bil naložen v prostor za sporočilo - sedaj ga boste morda želeli dokončati.<br />Po pošiljanju tega zasebnega sporočila bo vaš osnutek izbrisan.',
	'DRAFT_SAVED'				=> 'Osnutek je bil uspešno shranjen.',
	'DRAFT_TITLE'				=> 'Naslov osnutka',

	'EDIT_REASON'				=> 'Razlog za urejanje tega prispevka',
	'EMPTY_FILEUPLOAD'			=> 'Naložena datoteka je prazna.',
	'EMPTY_MESSAGE'				=> 'Pri pošiljanju morate napisati sporočilo.',
	'EMPTY_REMOTE_DATA'			=> 'Datoteke ni bilo moč naložiti, prosimo, poizkusite z ročnim nalaganjem.',

	'FLASH_IS_OFF'				=> '[flash] je <em>izključen</em>',
	'FLASH_IS_ON'				=> '[flash] je <em>vključen</em>',
	'FLOOD_ERROR'				=> 'Tako hitro po zadnjem prispevku ne morete napisati novega.',
	'FONT_COLOR'				=> 'Barva pisave',
	'FONT_COLOR_HIDE'			=> 'Skrij barvo pisave',
	'FONT_HUGE'					=> 'Ogromna',
	'FONT_LARGE'				=> 'Velika',
	'FONT_NORMAL'				=> 'Običajna',
	'FONT_SIZE'					=> 'Velikost pisave',
	'FONT_SMALL'				=> 'Majhna',
	'FONT_TINY'					=> 'Drobcena',

	'GENERAL_UPLOAD_ERROR'		=> 'Priponke ni bilo moč naložiti v %s.',

	'IMAGES_ARE_OFF'			=> '[img] je <em>izključen</em>',
	'IMAGES_ARE_ON'				=> '[img] je <em>vključen</em>',
	'INVALID_FILENAME'			=> '%s ni veljavno ime datoteke.',

	'LOAD'						=> 'Naloži',
	'LOAD_DRAFT'				=> 'Naloži osnutek',
	'LOAD_DRAFT_EXPLAIN'		=> 'Tukaj lahko izberete osnutek, kjer želite nadaljevati s pisanjem. Vaš trenutni prispevek bo preklican in vsa trenutna vsebina prispevka izbrisana. Osnutke si lahko ogledate, urejate in izbrišete znotraj svoje uporabniške nadzorne plošče.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Če želite obuditi teme znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Če želite brisati prispevke znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Če želite izbrisati sporočila v tem forumu, se morate prijaviti.',
	'LOGIN_EXPLAIN_POST'		=> 'Če želite pisati znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Če želite citirati prispevke znotraj tega foruma, se morate prijaviti.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Če želite odgovarjati na teme znotraj tega foruma, se morate prijaviti.',

	'MAX_ATTACHMENT_FILESIZE'	=> 'Največja velikost datoteke na prilogo: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Uporabite lahko samo pisave do velikosti %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Vaše fotografije ne smejo presegati %d piksel višine.',
		2	=> 'Vaše fotografije ne smejo presegati %d pikslov višine.',
		3	=> 'Vaše fotografije ne smejo presegati %d pikslov višine.',
		4	=> 'Vaše fotografije ne smejo presegati %d pikslov višine.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Vaše fotografije ne smejo presegati %d piksel širine.',
		2	=> 'Vaše fotografije ne smejo presegati %d pikslov širine.',
		3	=> 'Vaše fotografije ne smejo presegati %d pikslov širine.',
		4	=> 'Vaše fotografije ne smejo presegati %d pikslov širine.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Vaše slike ne smejo presegati %1$d piksel višine.',
		2	=> 'Vaše slike ne smejo presegati %1$d pikslov višine.',
		3	=> 'Vaše slike ne smejo presegati %1$d pikslov višine.',
		4	=> 'Vaše slike ne smejo presegati %1$d pikslov višine.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Vaše slike ne smejo presegati %d piksel širine.',
		2	=> 'Vaše slike ne smejo presegati %d pikslov širine.',
		3	=> 'Vaše slike ne smejo presegati %d pikslov širine.',
		4	=> 'Vaše slike ne smejo presegati %d pikslov širine.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Vnesite svoje sporočilo, ki pa ne sme vsebovati več kot <strong>%d</strong> znak.',
		2	=> 'Vnesite svoje sporočilo, ki pa ne sme vsebovati več kot <strong>%d</strong> znaka.',
		3	=> 'Vnesite svoje sporočilo, ki pa ne sme vsebovati več kot <strong>%d</strong> znake.',
		4	=> 'Vnesite svoje sporočilo, ki pa ne sme vsebovati več kot <strong>%d</strong> znakov.',
	),
	'MESSAGE_DELETED'			=> 'Sporočilo uspešno izbrisano',
	'MORE_SMILIES'				=> 'Več smeškov',

	'NOTIFY_REPLY'				=> 'Obvesti me, ko kdo objavi prispevek',
	'NOT_UPLOADED'				=> 'Datoteke ni bilo moč naložiti.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Obstoječih možnosti ankete ne morete izbrisati.',
	'NO_PM_ICON'				=> 'Ni ikone ZS',
	'NO_POLL_TITLE'				=> 'Vnesti morate naslov ankete.',
	'NO_POST'					=> 'Zahtevani prispevek ne obstaja.',
	'NO_POST_MODE'				=> 'Ni navedenega načina prispevka.',
	'NO_TEMP_DIR'				=> 'Začasne mape ni mogoče najti ali ni zapisljiva.',

	'PARTIAL_UPLOAD'			=> 'Datoteka je bila le delno naložena.',
	'PHP_UPLOAD_STOPPED'		=> 'Razširitev PHP je ustavila nalaganje datotek.',
	'PHP_SIZE_NA'				=> 'Velikost priponke je prevelika.<br />Iz php.ini ni razvidna PHPjeva omejitev velikosti.',
	'PHP_SIZE_OVERRUN'			=> 'Velikost priponke je prevelika - največja dovoljena velikost je %1$d %2$s.<br />Prosimo, pomnite, da je ta nastavitev v php.ini in je ne morete obiti.',
	'PLACE_INLINE'				=> 'Postavi v vrstico',
	'POLL_DELETE'				=> 'Izbriši anketo',
	'POLL_FOR'					=> 'Anketa naj traja',
	'POLL_FOR_EXPLAIN'			=> 'Vnesite 0 ali pustite prazno za neskočno trajanje.',
	'POLL_MAX_OPTIONS'			=> 'Možnosti za posameznega uporabnika',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'To je število možnosti, ki jih lahko uporabnik izbere pri glasovanju.',
	'POLL_OPTIONS'				=> 'Anketne možnosti',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnost.',
		2	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti.',
		3	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti.',
		4	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnost. Če odstranite ali dodate možnosti, se bodo prejšnji glasovi ponovno nastavili.',
		2	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti. Če odstranite ali dodate možnosti, se bodo prejšnji glasovi ponovno nastavili.',
		3	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti. Če odstranite ali dodate možnosti, se bodo prejšnji glasovi ponovno nastavili.',
		4	=> 'Vsako izbiro vpišite v novo vrstico. Lahko zapišete <strong>%d</strong> možnosti. Če odstranite ali dodate možnosti, se bodo prejšnji glasovi ponovno nastavili.',
	),
	'POLL_QUESTION'				=> 'Anketno vprašanje',
	'POLL_TITLE_TOO_LONG'		=> 'Naslov ankete mora vsebovati manj kot 100 znakov.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Obdelana velikost vašega naslova ankete je prevelika - razmislite o odstranitvi BBCode ali smeškov.',
	'POLL_VOTE_CHANGE'			=> 'Dovoli ponovno glasovanje',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Če je omogočeno, lahko uporabniki spreminjajo svoje glasove.',
	'POSTED_ATTACHMENTS'		=> 'Objavljene priponke',
	'POST_APPROVAL_NOTIFY'		=> 'Ko bo vaše sporočilo odobreno, boste o tem obveščeni.',
	'POST_CONFIRMATION'			=> 'Potrditev prispevka',
	'POST_CONFIRM_EXPLAIN'		=> 'Da bi preprečili samodejne prispevke (spam), morate pretipkati besedilo iz spodnje slike. V primeru slabovidnosti ali težav z berljivostjo kontaktirajte %sadministratorja foruma%s.',
	'POST_DELETED'				=> 'Prispevek je bil uspešno izbrisan.',
	'POST_EDITED'				=> 'Prispevek je bil uspešno urejen.',
	'POST_EDITED_MOD'			=> 'Prispevek je bilo uspešno urejen - pred javnim prikazom ga bo moral odobriti moderator.',
	'POST_GLOBAL'				=> 'Globalno',
	'POST_ICON'					=> 'Ikona prispevka',
	'POST_NORMAL'				=> 'Običajno',
	'POST_REVIEW'				=> 'Pregled prispevka',
	'POST_REVIEW_EDIT'			=> 'Pregled vnosa',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'V tej objavi je nekdo drug že nekaj objavil, medtem ko si urejal. Lahko si ogledate, kaj je napisal in po želji popravite svojo objavo.',
	'POST_REVIEW_EXPLAIN'		=> 'V tej temi je bil objavljen vsaj en nov prispevek. Morda boste zaradi tega želeli ponovno pregledati svoj prispevek.',
	'POST_STORED'				=> 'Prispevek je bil uspešno poslan.',
	'POST_STORED_MOD'			=> 'Prispevek je bilo uspešno poslan - pred javnim prikazom ga bo moral odobriti moderator.',
	'POST_TOPIC_AS'				=> 'Objavi temo kot',
	'PROGRESS_BAR'				=> 'Stanje poteka',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Vstavite lahko %d medsebojni navedek.',
		2	=> 'Vstavite lahko %d medsebojna navedka.',
		3	=> 'Vstavite lahko %d medsebojne navedke.',
		4	=> 'Vstavite lahko %d medsebojnih navedkov.',
	),
	'QUOTE_NO_NESTING'			=> 'Medsebojnih navedki niso mogoči.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'Datoteke ni mogoče naložiti, ker je potekel zahtevan čas.',
	'SAVE'						=> 'Shrani',
	'SAVE_DATE'					=> 'Shranjeno ob',
	'SAVE_DRAFT'				=> 'Shrani osnutek',
	'SAVE_DRAFT_CONFIRM'		=> 'Prosimo, pomnite, da shranjeni osnutki vsebujejo samo zadevo in sporočilo, drugi elementi pa bodo odstranjeni. Želite svoj osnutek shraniti zdaj?',
	'SMILIES'					=> 'Smeški',
	'SMILIES_ARE_OFF'			=> 'Smeški so <em>izključeni</em>',
	'SMILIES_ARE_ON'			=> 'Smeški so <em>vključeni</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Časovna omejitev lepljivka/obvestila',
	'STICK_TOPIC_FOR'			=> 'Tema naj bo lepljivek za',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Vnesite 0 ali pustite prazno za neskončno trajanje lepljivka/obvestila.',
	'STYLES_TIP'				=> 'Namig: Stile lahko hitro uveljavite nad izbranim besedilom.',

	'TOO_FEW_CHARS'				=> 'Vaše sporočilo vsebuje premalo znakov.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Vnesti morate vsaj %1$d znak.',
		2	=> 'Vnesti morate vsaj %1$d znaka.',
		3	=> 'Vnesti morate vsaj %1$d znake.',
		4	=> 'Vnesti morate vsaj %1$d znakov.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Vnesti morate vsaj dve možnosti ankete.',
	'TOO_MANY_ATTACHMENTS'		=> 'Ne morete dodati še ene priponke - omejitev je %d.',
	'TOO_MANY_CHARS'			=> 'Vaše sporočilo vsebuje preveč znakov.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		1	=> 'Dovoljen je največ %1$d znak.',
		2	=> 'Dovoljena sta največ %1$d znaka.',
		3	=> 'Dovoljeni so največ %1$d znaki.',
		4	=> 'Dovoljeno je največ %1$d znakov.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Poizkusili ste vnesti preveč možnosti ankete.',
	'TOO_MANY_SMILIES'			=> 'Vaše sporočilo vsebuje preveč smeškov. Največje dovoljeno število smeškov je %d.',
	'TOO_MANY_URLS'				=> 'Vaše sporočilo vsebuje preveč URLjev. Največje dovoljeno število URLjev je %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Možnosti na uporabnika ne more biti več kot obstoječih možnosti ankete.',
	'TOPIC_BUMPED'				=> 'Tema je bila uspešno obnovljena.',

	'UNAUTHORISED_BBCODE'		=> 'Nekaterih BBCode ne morete uporabiti: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Vaše sporočilo vsebuje nepodprte znake: <br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Vaša tema vsebuje nepodprte znake: <br />%s',
	'UPDATE_COMMENT'			=> 'Posodobi komentar',
	'URL_INVALID'				=> 'Navedeni URL ni veljaven.',
	'URL_NOT_FOUND'				=> 'Navedene datoteke ni bilo moč najti.',
	'URL_IS_OFF'				=> '[url] je <em>izključen</em>',
	'URL_IS_ON'					=> '[url] je <em>vključen</em>',
	'USER_CANNOT_BUMP'			=> 'Tem v tem forumu ne morete obuditi.',
	'USER_CANNOT_DELETE'		=> 'Prispevkov v tem forumu ne morete brisati.',
	'USER_CANNOT_EDIT'			=> 'Prispevkov v tem forumu ne morete urejati.',
	'USER_CANNOT_REPLY'			=> 'V tem forumu ne morete pisati prispevkov.',
	'USER_CANNOT_FORUM_POST'	=> 'Vrsta tega foruma ne podpira operacij za vnašanje.',

	'VIEW_MESSAGE'				=> '%sOglej si svoj poslani prispevek%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sOglejte si svoja poslana zasebna sporočila%s',

	'WRONG_FILESIZE'			=> 'Datoteka je prevelika - največja dovoljena velikost je %1$d %2$s.',
	'WRONG_SIZE'				=> 'Slika mora biti široka vsaj %1$s pikslov in visoka vsaj %2$s pikslov ter široka največ %3$s pikslov in visoka največ %4$s pikslov. Poslana slika je široka %5$s pikslov in visoka %6$s pikslov.',
));

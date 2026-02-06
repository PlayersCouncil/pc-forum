<?php
/**
*
* This file is part of the Slovenian Language Pack
* for the phpBB Forum Software.
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Tu lahko nastavljaš osnovne parametre svojega foruma, mu nastaviš ime, opis, časovni pas, jezik in druge možnosti.',
	'BOARD_INDEX_TEXT'				=> 'Index tekst foruma',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'To besedilo se prikaže kot kazalo na oglasni deski. Če besedilo ni določeno, bo samodejno preimenovano v "Board index".',
	'BOARD_STYLE'					=> 'Slog foruma',
	'CUSTOM_DATEFORMAT'				=> 'Po meri ...',
	'DEFAULT_DATE_FORMAT'			=> 'Format datuma',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Uporablja se enam format kot pri PHP <a href="https://www.php.net/manual/datetime.format.php">format datuma</a>.',
	'DEFAULT_LANGUAGE'				=> 'Privzeti jezik',
	'DEFAULT_STYLE'					=> 'Privzeti slog',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Privzet slog za nove uporabnike.',
	'DISABLE_BOARD'					=> 'Onemogoči forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Če je ta možnost omogočena, je forum nedostopen uporabnikom. Če želiš, lahko vneseš tudi kratek opis, dolg do 255 znakov.',
	'DISPLAY_LAST_SUBJECT'			=> 'Prikaži zadevo zadnjega sporočila na seznamu forumov',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> 'Tema zadnjega dodanega sporočila bo prikazana na seznamu forumov skupaj s povezavo do sporočila. Teme iz forumov, ki so zaščiteni z geslom, in forumov, do katerih uporabnik nima dostopa, niso prikazane.',
	'DISPLAY_UNAPPROVED_POSTS'		=> 'Avtorju prikaži neodobrene objave',
	'DISPLAY_UNAPPROVED_POSTS_EXPLAIN'	=> 'Avtor si lahko ogleda neodobrene objave. Ne velja za objave gostov.',
	'GUEST_STYLE'					=> 'Slog za goste',
	'GUEST_STYLE_EXPLAIN'			=> 'Slog foruma za goste.',
	'OVERRIDE_STYLE'				=> 'Povozi uporabniško izbran slog',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Zamenja uporabniško izbran slog s privzetim.',
	'SITE_DESC'						=> 'Opis strani',
	'SITE_HOME_TEXT'				=> 'Besedilo glavne strani',
	'SITE_HOME_TEXT_EXPLAIN'		=> 'To besedilo bo prikazano kot povezava do vaše spletne strani na forumu. Če ta ni določena, bo povezava vodila na domačo stran.',
	'SITE_HOME_URL'					=> 'URL glavne strani',
	'SITE_HOME_URL_EXPLAIN'			=> 'Če navedete povezavo, bo ta pripeta ob vašem forumu in oznaka foruma bo vodila na vaš naslov namesto na kazalo. Potrebno je vpisati polno povezavo, npr. <samp>http://www.phpbb.com</samp>.',
	'SITE_NAME'						=> 'Ime strani',
	'SYSTEM_TIMEZONE'				=> 'Izberi časovni pas',
	'SYSTEM_TIMEZONE_EXPLAIN'			=> 'Časovni pas za uporabnike, kateri niso prijavljeni (gosti, boti). Prijavljeni uporabniki nastavijo svoj časovni pas med registracijo, in si ga lahko kasneje spreminjajo v svoji Uporabniški Nadzorni Plošči.',
	'WARNINGS_EXPIRE'				=> 'Trajanje opozorila',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Število dni, ki naj preteče, preden uporabniška opozorila avtomatsko pretečejo. Nastavi na 0, da ne pretečejo nikoli.',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Tu lahko nastavljaš številne značilnosti foruma.',

	'ALLOW_ATTACHMENTS'			=> 'Omogoči priponke',
	'ALLOW_BIRTHDAYS'			=> 'Omogoči rojstne dneve',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Omogoči vnos rojstnih dnevov in prikaz starosti v profilu. Opomba: prikaz seznama rojstnih dni na dnu prve strani upravljaš s posebno nastavitvijo.',
	'ALLOW_BOOKMARKS'			=> 'Omogoči zaznamke',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Uporabnik si lahko shrani temo v osebne zaznamke.',
	'ALLOW_BBCODE'				=> 'Omogoči BBKode',
	'ALLOW_FORUM_NOTIFY'		=> 'Omogoči naročanje na forume',
	'ALLOW_NAME_CHANGE'			=> 'Dovoli spremembe uporabniških imen',
	'ALLOW_NO_CENSORS'			=> 'Dovoli onemogočanje cenzuriranja',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Uporabniki lahko sami izberejo, ali naj bodo sporočila samodejno cenzurirana.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Dovoli priponke v zasebnih sporočilih',
	'ALLOW_PM_REPORT'			=> 'Omogoči uporabnikom prijavo zasebnih sporočil',
	'ALLOW_PM_REPORT_EXPLAIN'	=> 'Če je to omočogeno, imajo uporabniki možnost prijaviti zasebno sporočilo, katero je bilo poslano od drugih uporabnikov. Ta zasebna sporočila so nato vidna v Moderatorski Nadzorni Plošči.',
	'ALLOW_QUICK_REPLY'			=> 'Omogoči hitri odgovor',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> 'Onemogočitev hitrega odgovora onemogoči uporabo po celem forumu. Če je omogočen, pa se upoštevajo nastavitve posameznega podforuma.',
	'ALLOW_QUICK_REPLY_BUTTON'	=> 'Potrdi in omogoči hitri odgovor na vseh forumih',
	'ALLOW_SIG'					=> 'Dovoli podpise',
	'ALLOW_SIG_BBCODE'			=> 'Dovoli BBKode v uporabniških podpisih',
	'ALLOW_SIG_FLASH'			=> 'Dovoli uporabo <code>[FLASH]</code> BBKode značke v uporabniških podpisih',
	'ALLOW_SIG_IMG'				=> 'Dovoli uporabo <code>[IMG]</code> BBKode značke v uporabniških podpisih',
	'ALLOW_SIG_LINKS'			=> 'Dovoli uporabo povezav v uporabniških podpisih',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Če možnost ni dovoljena, je BBKode <code>[URL]</code> značka samodejno odstranjena.',
	'ALLOW_SIG_SMILIES'			=> 'Dovoli uporabo smeškov v uporabniških podpisih',
	'ALLOW_SMILIES'				=> 'Dovoli smeške',
	'ALLOW_TOPIC_NOTIFY'		=> 'Dovoli naročanje na teme',
	'BOARD_PM'					=> 'Zasebna sporočila',
	'BOARD_PM_EXPLAIN'			=> 'Omogoči ali onemogoči pošiljanje zasebnih sporočil med uporabniki.',
	'ALLOW_BOARD_NOTIFICATIONS' => 'Omogoči obvestila foruma',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatarji so običanjo majhne, edinstvene slike, ki uporabnika povežejo s svojim profilom. Običajno so prikazani pod uporabniškim imenom, če stil foruma ni drugače zastavljen. Tu lahko nastavljaš, kako naj uporabniki izbirajo svoje avatarje. Opomba: Če dovoliš uporabnikom prenos svojih avatarjev na spletni strežnik, moraš zanje ustvariti poseben direktorij na disku, ki bo pisljiv s strani spletnega strežnika. Pomni tudi, da omejitev velikosti deluje le za prenešene avatarije in ne za avatarje, za katere je naveden le URL naslov.',

	'ALLOW_AVATARS'					=> 'Omogoči avatarje',
	'ALLOW_AVATARS_EXPLAIN'			=> 'Omogoči splošno uporabo avatarjev;<br>Če onemogočiš avatarje v splošnem, se avatarji ne bodo več prikazovali, se jih pa bo dalo še vedno downloadati iz Uporabniške nadzorne plošče.',
	'ALLOW_GRAVATAR'				=> 'Omogoči gravatar avatarje',
	'ALLOW_LOCAL'					=> 'Omogoči galerijo avatarjev',
	'ALLOW_REMOTE'					=> 'Omogoči oddaljene avatarje',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarji, shranjeni na drugih strežnikih - spletnih straneh.',
	'ALLOW_REMOTE_UPLOAD'			=> 'Omogoči oddaljeno uploadanje avatarjev',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> 'Omogoči uploadanje avatarjev iz drugih spletnih strani.',
	'ALLOW_UPLOAD'					=> 'Omogoči nalaganje avatarjev',
	'AVATAR_GALLERY_PATH'			=> 'Pot do direktorija za nalaganje',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Direktorij v phpBB korenskem direktoriju, za pred naložene slike, npr. <samp>images/avatars/gallery</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'Pot za shranjevanje avatarjev',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Direktorij v phpBB korenskem direktoriju, za nalaganje avatarjev, npr. <samp>images/avatars/upload</samp>.',
	'MAX_AVATAR_SIZE'				=> 'Največja dimenzija avatarja',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Širina × višina pikslov.',
	'MAX_FILESIZE'					=> 'Maksimalna velikost datoteke',
	'MAX_FILESIZE_EXPLAIN'			=> 'Velikost datoteke naloženega avatarja. Če je vrednost 0, je velikost omejena v PHP konfiguraciji.',
	'MIN_AVATAR_SIZE'				=> 'Minimalna dimenzija avatarja',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Širina × višina pikslov.',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Tu lahko nastaviš vse nastavitve za pošiljanje zasebnih sporočil.',

	'ALLOW_BBCODE_PM'			=> 'Dovoli BBKode v zasebnih sporočilih',
	'ALLOW_FLASH_PM'			=> 'Dovoli uporabo <code>[FLASH]</code> BBKode značke',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Pomni, da je uporaba flash značke v zasebnih sporočilih odvisna tudi od pravic.',
	'ALLOW_FORWARD_PM'			=> 'Dovoli posredovanje zasebnih sporočil',
	'ALLOW_IMG_PM'				=> 'Dovoli uporabo <code>[IMG]</code> BBKode značke',
	'ALLOW_MASS_PM'				=> 'Dovoli pošiljanje zasebnih sporočil več prijemnikom hkrati in skupinam',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'Pošiljanje skupinam se lahko uredi glede na skupino v nastavitvah za skupine.',
	'ALLOW_PRINT_PM'			=> 'Dovoli predogled tiskanja v zasebnih sporočilih',
	'ALLOW_QUOTE_PM'			=> 'Dovoli citate v zasebnih sporočilih',
	'ALLOW_SIG_PM'				=> 'Dovoli podpise v zasebnih sporočilih',
	'ALLOW_SMILIES_PM'			=> 'Dovoli smeške v zasebnih sporočilih',
	'BOXES_LIMIT'				=> 'Najvišje število zasebnih sporočil na predal',
	'BOXES_LIMIT_EXPLAIN'		=> 'Najvišje število zasebnih sporočil, ki jih uporabniki lahko hranijo v vsakem od predalov. Nastavi na 0 za neomejeno število zasebnih sporočil.',
	'BOXES_MAX'					=> 'Največ predalov zasebnih sporočil',
	'BOXES_MAX_EXPLAIN'			=> 'Privzeto število predalov, ki si jih uporabnik lahko ustvari za zasebna sporočila.',
	'ENABLE_PM_ICONS'			=> 'Omogoči uporabo ikon, uporabljenih za teme, v zasebnih sporočilih',
	'FULL_FOLDER_ACTION'		=> 'Dejanje ob polnem predalu',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Izvrši dejanje, ko se uporabnikov predal napolni.',
	'HOLD_NEW_MESSAGES'			=> 'Zadrži nova sporočila',
	'PM_EDIT_TIME'				=> 'Omeji čas urejanja',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Omeji čas, ki je na voljo za urejanje zasebnih sporočil, ki še niso bila dostavljena. Nastavi na 0 za neomejen čas urejanja.',
	'PM_MAX_RECIPIENTS'			=> 'Največje dovoljeno število prejemnikov.',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'Največje dovoljeno število prejemnikov v zasebnem sporočilu. Če vnesete 0, dovolite neomejeno število prejemnikov. Ta nastavitev se lahko uredi za vsako skupino posebej v nastavitvah za skupine.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Tu lahko nastaviš vse parametre za pošiljanje sporočil.',
	'ALLOW_POST_LINKS'					=> 'Dovoli povezave v sporočilih / zasebnih sporočilih',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Če možnost ni dovoljena, je BBKode <code>[URL]</code> značka samodejno odstranjena.',
	'ALLOWED_SCHEMES_LINKS'				=> 'Dovoljene sheme v povezavah',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> 'Uporabniki lahko objavljajo samo brezshemne povezave ali eno s seznama dovoljenih smeh, ločene z vejicami.',
	'ALLOW_POST_FLASH'					=> 'Dovoli uporabo <code>[FLASH]</code> BBKode značke v sporočilih',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Če si onemogočil <code>[FLASH]</code> BBKode značko, je flash prepovedan v sporočilih.',

	'BUMP_INTERVAL'					=> 'Interval zavrženja',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Število minut, ur ali dni med zadnjo objavo v temo in možnostjo, da se tema zavrže.',
	'CHAR_LIMIT'					=> 'Omejitev dolžine sporočila',
	'CHAR_LIMIT_EXPLAIN'			=> 'Število znakov dovoljenih v sporočilu. Nastavi na 0, če želiš odstraniti omejitev.',
	'DELETE_TIME'					=> 'Omejitev časa za izbris',
	'DELETE_TIME_EXPLAIN'			=> 'Omeji čas, katerega imajo uporabniki na voljo za izbris nove objave. Nastavitev vrednosti na 0, to funkcijo onemogoči.',
	'DISPLAY_LAST_EDITED'			=> 'Prikaži čas zadnjega urejanja',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Prikaži, kdaj je bilo sporočilo zadnjič urejeno in kdo ga je uredil.',
	'EDIT_TIME'						=> 'Omeji čas urejanja',
	'EDIT_TIME_EXPLAIN'				=> 'Omeji čas, ki je na voljo za urejanje zasebnih sporočil, ki še niso bila dostavljena. Nastavi na 0 za za neomejen čas urejanja.',
	'FLOOD_INTERVAL'				=> 'Interval prekomernega pošiljanja',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Število sekund, ki mora preteči, preden lahko uporabnik odda novo sporočilo. Če želiš, da uporabniki pošiljajo sporočila brez omejitev, uredi njihove privilegije.',
	'HOT_THRESHOLD'					=> 'Prag popularne teme',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Število prispevkov na temo, da postane popularna. Če želiš popularne teme onemogočiti, nastavi vrednost na 0..',
	'MAX_POLL_OPTIONS'				=> 'Največje število anketnih odgovorov',
	'MAX_POST_FONT_SIZE'			=> 'Največja dovoljena velikost pisave',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Največja dovoljena velikost pisave v sporočilu. Nastavi na 0 za neomejeno velikost.',
	'MAX_POST_IMG_HEIGHT'			=> 'Največja višina slike',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Največja višina slike/flash animacije v sporočilu. Nastavi na 0 za neomejeno velikost.',
	'MAX_POST_IMG_WIDTH'			=> 'Največja širina slike',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Največja širina slike/flash animacije v sporočilu. Nastavi na 0 za neomejeno velikost.',
	'MAX_POST_URLS'					=> 'Največje število povezav ',
	'MAX_POST_URLS_EXPLAIN'			=> 'Največje število povezav na sporočilo. Nastavi na 0 za neomejeno število.',
	'MIN_CHAR_LIMIT'				=> 'Minimalno znakov na objavo/ZS',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> 'Minimalno število znakov, katere mora uporabnik vnesti v objavo/zasebno sporočilo. Najmanjše možno število je 1.',
	'POSTING'						=> 'Pošiljanje',
	'POSTS_PER_PAGE'				=> 'Prispevkov na stran',
	'QUOTE_DEPTH_LIMIT'				=> 'Največja globina vgnezdenih citatov',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Največja globina vgnezdenih citatov v sporočilu. Nastavi na 0 za neomejeno globino.',
	'SMILIES_LIMIT'					=> 'Največje število smeškov',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Največje število smeškov v sporočilu. Nastavi na 0 za neomejeno število.',
	'SMILIES_PER_PAGE'				=> 'Smeškov na stran',
	'TOPICS_PER_PAGE'				=> 'Tem na stran',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Tu lahko nastavljaš vse parametre za podpise.',

	'MAX_SIG_FONT_SIZE'				=> 'Največja velikost pisave',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Največja velikost pisave uporabljene v podpisu. Nastavi na 0 za neomejeno velikost.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Največja višina slike',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Največja višina slike/flash animacije uporabljene v podpisu. Nastavi na 0 za neomejeno velikost.',
	'MAX_SIG_IMG_WIDTH'				=> 'Najvišja širina slike',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Največja širina slike/flash animacije uporabljene v podpisu. Nastavi na 0 za neomejeno velikost.',
	'MAX_SIG_LENGTH'				=> 'Največja dolžina podpisa',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Omejitev števila znakov na podpis.',
	'MAX_SIG_SMILIES'				=> 'Največje število smeškov',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Največje število smeškov v sporočilu. Nastavi na 0 za neomejeno število.',
	'MAX_SIG_URLS'					=> 'Največje število povezav ',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Največje število povezav na podpis. Nastavi na 0 za neomejeno število.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Tu lahko definiraš polja, ki naj se prikažejo ob registraciji in v profilu, ter nastavitve profila.',

	'ACC_ACTIVATION'				=> 'Aktivacija računa',
	'ACC_ACTIVATION_EXPLAIN'		=> 'S to možnostjo določimo, na kakšen način novoregistrirani uporabniki pridobijo dostop do foruma. Določiš lahko več načinov - naj uporabniki imajo takojšen dostop ali pa morajo svoj račun potrditi. Registracije uporabnikov lahko tudi popolnoma izključiš.',
	'ACC_ACTIVATION_WARNING'		=> 'Opozarjamo, da morate za izbrani način aktiviranja omogočiti elektronsko pošto, drugače bo registracija onemogočena. Svetujemo vam, da ali izberete drugačen način aktiviranja ali omogočite elektronsko pošto.',
	'NEW_MEMBER_POST_LIMIT'			=> 'Limit objav novih članov',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> 'Novo Registrirani uporabniki so v skupini <em>Novo Registrirani Uporabniki</em> dokler ne dosežejo tega števila objav. Lahko uporabiš to skupino za onemogočanje ZS ali da priklicujejo svoje objave. <strong>Vrednost 0 onemogoči to funkcijo.</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> 'Nastavi Novo Registrirane Uporabnike po privzetih nastavitvah v njihovo skupino.',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> 'Če je ta nastavitev Omogočena in je minimalno število objav za Novo Registriranega Uporabnika vneseno, uporabniki ne bodo le premaknjeni v skupino <em>Novo Registrirani Uporabniki</em>, ampak bo to tudi njihova privzeta skupina. To pride prav, če želiš dodeliti skupini privzeti stopnjo in/ali avatar, katerega uporabnik podeduje.',

	'ACC_ADMIN'					=> 'Administrator',
	'ACC_DISABLE'				=> 'Onemogoči',
	'ACC_NONE'					=> 'Nihče',
	'ACC_USER'					=> 'Uporabnik (e-mail)',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'Dovoli ponovno registracijo z istim e-poštnim naslovom',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Različni uporabniki se lahko registrirajo z istim e-poštnim naslovom.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax številka',
	'COPPA_MAIL'				=> 'COPPA poštni naslov',
	'COPPA_MAIL_EXPLAIN'		=> 'Naslov, na katerega starši pošljejo COPPA registracijske obrazce.',
	'ENABLE_COPPA'				=> 'Omogoči COPPA obrazce',
	'ENABLE_COPPA_EXPLAIN'		=> 'Zahteva od uporabnika potrditev, da so stari 13 ali več let za registracijo na forum po COPPA normativih Z.D.A. Če je COPPA onemogočena, sporočilo ne bo prikazano.',
	'MAX_CHARS'					=> 'Maks',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'Nisem našel ustreznega vstavka za avtentikacijo.',
	'PASSWORD_LENGTH'			=> 'Dolžina gesla',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Najmanjše število znakov v geslu. Upoštevajte, da največje število ni omejeno.',
	'REG_LIMIT'					=> 'Poskusi registracije',
	'REG_LIMIT_EXPLAIN'			=> 'Število poskusov registracije, ki jih lahko naredi uporabnik, predeno je njegova seja zaklenjena.',
	'USERNAME_ALPHA_ONLY'		=> 'Le alfanumerični',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerični in presledek',
	'USERNAME_ASCII'			=> 'ASCII (brez mednarodnih znakov)',
	'USERNAME_LETTER_NUM'		=> 'Katerakoli črka ali številka',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Katerakoli črka, številka ali presledek',
	'USERNAME_CHARS'			=> 'Omeji dolžino uporabniškega imena',
	'USERNAME_CHARS_ANY'		=> 'Katerikoli znak',
	'USERNAME_CHARS_EXPLAIN'	=> 'Omeji vnos znakov, ki so lahko uporabljena v uporabniških imenih. Pod presledke spadajo: presledek, -, +, _, [ in ].',
	'USERNAME_LENGTH'			=> 'Dolžina uporabniškega imena',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Minimalna in maksimalna dolžina uporabniškega imena.',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'Splošne nastavitve spletnega zalaganja',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'Modul omogoča različnim ATOM virom izluščevanje BBKode v  prispevkih, da so berljivi v zunanjih virih.',

	'ACP_FEED_GENERAL'					=> 'Splošne nastavitve zalaganja',
	'ACP_FEED_POST_BASED'				=> 'Nastavitve zalaganja osnovano na objavi',
	'ACP_FEED_TOPIC_BASED'				=> 'Nastavitve zalaganja osnovano na temi',
	'ACP_FEED_SETTINGS_OTHER'			=> 'Ostala zalaganja in nastavitve',

	'ACP_FEED_ENABLE'					=> 'Omogoči zalaganje',
	'ACP_FEED_ENABLE_EXPLAIN'			=> 'Prižgi- ugasni ATOM zalaganje za celoten forum.<br>Onemogočanje izključi vsa zalaganja, neglede na spodnje nastavitve.',
	'ACP_FEED_LIMIT'					=> 'Število virov',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'Maksimalno število virov za prikaz.',

	'ACP_FEED_OVERALL'					=> 'Omogoči zalaganje na celotnem forumu',
	'ACP_FEED_OVERALL_EXPLAIN'			=> 'Novi viri na celotnem forumu.',
	'ACP_FEED_FORUM'					=> 'Omogoči na-forum vire',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'Vir za vsako novo objavo za forum in podforume.',
	'ACP_FEED_TOPIC'					=> 'Omogoči vir za-temo',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'Vir za vsako novo temo.',

	'ACP_FEED_TOPICS_NEW'				=> 'Omogoči vir novih tem',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> 'Omogoči vir “Nove Teme”, kateri prikazuje nazadnje ustvarjeno temo, vključno s prvo objavo.',
	'ACP_FEED_TOPICS_ACTIVE'			=> 'Omogoči aktivne vire tem',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> 'Omogoči vir “Aktivne Teme”, kateri prikazuje zadnji aktivno temo vkjučno z zadnjo objavo.',
	'ACP_FEED_NEWS'						=> 'Novičarski viri',
	'ACP_FEED_NEWS_EXPLAIN'				=> 'Izberite prvo sporočilo iz teh forumov. Ne izberite nobenega foruma, če želite onemogočiti obveščanje. <br>Več forumov naenkrat lahko izberete tako, da držite <samp>CTRL</samp> in kliknete nanje.',

	'ACP_FEED_OVERALL_FORUMS'			=> 'Omogoči vire na forumu',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'Omogočitev vira “Vsi forumi”, kateri bo prikazoval spisek vseh forumov.',

	'ACP_FEED_HTTP_AUTH'				=> 'Dovoli HTTP Avtentikacijo',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> 'Omogoči HTTP avtentikacijo, s katero lahko uporabniki prejemajo vire, kateri so skriti za goste z dodajanjem <samp>auth=http</samp> med parametre v URL virov. Pomni, da nekatere nastavitve PHP potrebuje dodatne spremembe datoteke .htaccess. Navodila se lahko najde v tej datoteki.',
	'ACP_FEED_ITEM_STATISTICS'			=> 'Statistika virov',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> 'Prikaži individualno statistiko pod viri <br>(npr. napisal/a, čas in datum, odgovori, ogledi)',
	'ACP_FEED_EXCLUDE_ID'				=> 'Izključi naslednje forume',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'Vsebina, ki je tukaj označena <strong>bo izključena v virih</strong>. Odznači vse forumo za pridobivanje vseh virov.<br>Označi/Odznači več forumov s pritiskom na <samp>CTRL</samp> in klikanjem',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'Tu lahko definiraš privzete nastavitve vizualnih (CAPTCHA) potrditev.',
	'ACP_VC_EXT_GET_MORE'					=> 'Za dodatne (in morda boljše) vtičnike proti vsiljeni pošti obiščite <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com podatkovno bazo razširitev</strong></a>. Za več informacij kako preprečiti vsiljeno pošto na vašem forumu obiščite <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com podatkovno bazo znanja</strong></a>.',
	'AVAILABLE_CAPTCHAS'					=> 'Vtičniki na razpolago',
	'CAPTCHA_UNAVAILABLE'					=> 'Vtičnik ne more biti izbran, ker nso izpolnjene minimalne zahteve.',
	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_3D'							=> 'GD 3D slika',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'Šum ospredja',
	'CAPTCHA_GD_EXPLAIN'					=> 'Uporabi GD za generiranje napredne CAPTCHA-e.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Uporabi šum ospredja za pripravo napredejše CAPTCHA-E.',
	'CAPTCHA_GD_X_GRID'						=> 'Šum ozadja - vertikalno',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Uporabi manjšo številko, če želiš imeti težje berljivo CAPTCHA-o. Če vneseš 0, bo vertikalen šum onemogočen.',
	'CAPTCHA_GD_Y_GRID'						=> 'Šum ozadja - horizontalno',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Uporabi manjšo številko, če želiš imeti težje berljivo CAPTCHA-o. Če vneseš 0, bo horizontalen šum onemogočen.',
	'CAPTCHA_GD_WAVE'						=> 'Valovno izkrivljanje',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> 'To uveljavi valovno izkrivljanje na sliki.',
	'CAPTCHA_GD_3D_NOISE'					=> 'Dodaj 3D-šumne objekte',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'To doda dodatne objekte na sliko, čež črke.',
	'CAPTCHA_GD_FONTS'						=> 'Uporabi drugačno pisavo',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> 'Ta nastavitev kontrolira, koliko različnih oblik na črko je uporabljenih. Lahko uporabiš privzete oblike ali dodaš lastne. Dodajanje nizkih črk je tudi mogoče.',
	'CAPTCHA_FONT_DEFAULT'					=> 'Privzeto',
	'CAPTCHA_FONT_NEW'						=> 'Nove Oblike',
	'CAPTCHA_FONT_LOWER'					=> 'Uporabi tudi male črke',
	'CAPTCHA_NO_GD'							=> 'Preprosta slika',
	'CAPTCHA_PREVIEW_MSG'					=> 'Nastavitve CAPTCHA potrditev niso bile shranjene. To je le predogled.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Generirane CAPTCHA potrditeve bodo imele izgled, kot je prikazan na tem predogledu. Če želiš, lahko sliko osvežiš in si ogledaš morebitne spremembe, ki si jih opravil. Opomba: Vsaka CAPTCHA se generira po naključnem ključu, kar pomeni, da sta njena vsebina in izgled ob vsaki osvežitvi strani drugačna.',

	'CAPTCHA_SELECT'						=> 'Nameščeni vtičniki',
	'CAPTCHA_SELECT_EXPLAIN'				=> 'Padajoči menu vsebuje vtičnike, katere je forum prepoznal. Sivi vnosi niso trenutno na voljo in obstaja možnost kasnejšega urejanja nastavitev.',
	'CAPTCHA_CONFIGURE'						=> 'Konfiguriraj vtičnik',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> 'Spremeni nastavitve za izbrani vtičnik.',
	'CONFIGURE'								=> 'Konfiguracija',
	'CAPTCHA_NO_OPTIONS'					=> 'Ta vtičnik nima konfiguracijskih možnosti',

	'VISUAL_CONFIRM_POST'					=> 'Omogoči CAPTCHA potrditve za gostujoče obiskovalce ob pošiljanju sporočil',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'Od anonimnih (neprijavljenih) uporabnikov zahtevaj, naj v vnosno polje prepišejo kodo, ki se naključno generira. S tem preprečiš masovno sporočanje - SPAM.',
	'VISUAL_CONFIRM_REG'					=> 'Omogoči CAPTCHA potrditve ob registraciji',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Od uporabnikov, ki se želijo registrirati zahtevaj, naj v vnosno polje prepišejo kodo, ki se naključno generira. S tem preprečiš masovno registriranje.',
	'VISUAL_CONFIRM_REFRESH'				=> 'Omogoči uporabnikom osvežitev anti-spambot slike',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> 'Omogoči uporabnikom zahtevek za novo anti-spambot sliko, če je ne morejo razrešiti med registracijo. Nekateri vtičniki tega ne podpirajo.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Tukaj so detajli določenih podatkov, ki pošiljajo piškotke v brskalnike uporabnikov. V večini primerov so privzete nastavitve za piškotke povsem dovolj. Če že moraš kaj spremeniti, spreminjaj pazljivo, saj napačne nastavitve lahko preprečijo nadaljnje prijavljanje uporabnikov.',

	'COOKIE_DOMAIN'				=> 'Domena piškotka',
	'COOKIE_DOMAIN_EXPLAIN'		=> 'V večini primerov je domena piškotka neobvezna. Če niste prepričani, pustite prazno.<br><br> V primeru, da imate na forum integrirano drugo programsko opremo ali imate več domen, potem morate za določitev domene piškotka narediti naslednje. Če imate nekaj podobnega <i> primer.si </i> in <i> forum.primer.si </i> ali morda <i> forums.primer.si </i> in <i> blog.primer.si </i>. Odstranite poddomene, dokler ne najdete skupne domene, <i> primer.si </i>. Zdaj dodajte piko pred skupno domeno in vnesite .primer.si (upoštevajte piko na začetku).',
	'COOKIE_NAME'				=> 'Ime piškotka',
	'COOKIE_NAME_EXPLAIN'		=> 'To je lahko karkoli, kar želite, da je izvirno. Kadarkoli spremenite nastavitve piškotka, je potrebno spremeniti tudi ime piškotka.',
	'COOKIE_NOTICE'				=> 'Obvestilo o piškotkih',
	'COOKIE_NOTICE_EXPLAIN'		=> 'Če je omogočeno se obvestilo o piškotkih prikaže uporabnikom, ki obiščejo vaš forum. To se lahko zakonsko zahteva glede na vsebino na vašem forumu in omogočenih razširitvah.',
	'COOKIE_PATH'				=> 'Pot piškotka',
	'COOKIE_PATH_EXPLAIN'		=> 'Upoštevajte, da je to vedno poševnica, ne glede na to, kakšna je vaša povezava foruma.',
	'COOKIE_SECURE'				=> 'Varnost piškotka',
	'COOKIE_SECURE_EXPLAIN'		=> 'Če vaš strežnik deluje preko SSL, nastavi to kot omogočeno, če ne, pusti onemogočeno. Če strežnik ne deluje preko SSL in ima varnost piškotka omogočeno, bo prihajalo do napak pri preusmeritvah.',
	'ONLINE_LENGTH'				=> 'Poglejte čas aktivnosti',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Število minut po katerih se neaktiven uporabnik ne bo več pojavil na seznamu "KDO JE NA STRANI". Višja kot je ta vrdnost, daljše je zahtevano procesiranje za generiranje seznama.',
	'SESSION_LENGTH'			=> 'Dolžina seje',
	'SESSION_LENGTH_EXPLAIN'	=> 'Seja se bo zaključila po tem času (v sekundah).',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'		=> 'Tu lahko omogočite ali onemogočite kontaktno stran in dodate besedilo, ki je prikazano na strani.',

	'CONTACT_US_ENABLE'				=> 'Omogoči stran s stiki',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'Tu lahko pošljete sporočila administratorjem',

	'CONTACT_US_INFO'				=> 'Podatki o stiku',
	'CONTACT_US_INFO_EXPLAIN'		=> 'Sporočilo je bilo prikazano na osebni strani',
	'CONTACT_US_INFO_PREVIEW'		=> 'Stran z informacijami stika - Predogled',
	'CONTACT_US_INFO_UPDATED'		=> 'Stran z informacijami stika je bila posodobljena.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Tukaj lahko omogočiš ali onemogočiš določene funkcije foruma, s tem pa zmanjšuješ število procesov, ki jih sistem ustvarja. Na večini strežnikov onemogočanje funkcij ni potrebno. Onemogočanje določenih možnosti foruma, ki jih res ne potrebuješ, se splača samo v nekaterih sistemih in gostovalnih okoljih. Možno je tudi izbiranje omejitev za nalaganje sistema in aktivnosti sej. V primeru, da bodo omejitve presežene, se bo forum izključil',

	'ALLOW_CDN'						=> 'Dovoli uporabo tretjeosebnih omrežij',
	'ALLOW_CDN_EXPLAIN'				=> 'Če omogočite to nastavitev, bodo nekatere datoteke naložene iz zunanjih strežnikov namesto iz vašega. To zmanjša potrebno pasovno širino vašega strežnika, a lahko povzroči težave s zasebnostjo v nekaterih državah. V standardni phpBB namestitvi se naloži "jQuery" in pisava "Open Sans" iz Googlovega omrežja. To velja tudi za pisavo »Font Awesome«, ki jo phpBB in nekatere razširitve uporabljajo za upodabljanje ikon.',
	'ALLOW_LIVE_SEARCHES'			=> 'Dovoli neposredno iskanje',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> 'Ta nastavitev uporabnikom omogoči prikaz ključnih besed, medtem ko pišejo v nekatera polja na forumu.',
	'CUSTOM_PROFILE_FIELDS'			=> 'Posebna polja uporabniškega profila',
	'LIMIT_LOAD'					=> 'Omejeno nalaganje sistema',
	'LIMIT_LOAD_EXPLAIN'			=> 'Če nalaganje sistema preseže povprečje ene minute pri tej vrednosti, se bo forum avtomatično izključil. Vrednost 1.0 je enaka ~100% zasedenosti enega procesorja. To deluje le na sistemih, ki bazirajo na UNIX strežnikih in kjerkoli so te informacije dostopne. Tukajšnja vrednost se ponastavi na 0, če je phpBB nezmožen doseči omejitve nalaganja.',
	'LIMIT_SESSIONS'				=> 'Omejitev sej',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Če število sej preseže to vrednost v času ene minute, se bo forum izključil. Nastavi na 0 za neomejeno število sej.',
	'LOAD_CPF_MEMBERLIST'			=> 'Dovoli temam, da prikažejo posebna polja profila v seznamu uporabnikov',
	'LOAD_CPF_PM'					=> 'Prikaži polja profila v zasebnih sporočilih',
	'LOAD_CPF_VIEWPROFILE'			=> 'V profilih uporabnikov prikaži posebna polja profila',
	'LOAD_CPF_VIEWTOPIC'			=> 'Prikaži polja splošnih profilov na straneh tem',
	'LOAD_USER_ACTIVITY'			=> 'Pokaži uporabnikovo aktivnost',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Prikaži aktivne teme/forume v profilih uporabnikov in v uporabnikovi nadzorni plošči. To možnost je priporočljivo onemogočiti na forumih, ki imajo več kot miljon prispevkov.',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'Omejitev števila uporabnikovih sporočil',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'Aktivna tema/forum ne bo prikazano uporabnikom, ki imajo večje število objav od nastavljenega. Nastavite na 0, da onemogočite omejitev.',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> 'Potek prebranih obvestil',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'Število preteklih dni, preden se prebrano sporočilo izbriše. Nastavite na 0, če želite, da sporočilo ni časovno omejeno.',
	'RECOMPILE_STYLES'				=> 'Povzemi iz starih komponent stilov',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'Preveri posodobitve komponent stilov in povzemi.',
	'YES_ACCURATE_PM_BUTTON'			=> 'Omogočite poseben gumb za ZS na straneh teme',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> 'Če je ta nastavitev omogočena, bodo samo uporabniki, ki jim je dovoljeno pošiljati zasebna sporočila imeli gumb za ZS.',
	'YES_ANON_READ_MARKING'			=> 'Omogoči gostom označevanje tem',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Gostom se shranjuje informacija o prebranem/neprebranem statusu. Če je onemogočeno, bo gostom vse označeno kot prebrano.',
	'YES_BIRTHDAYS'					=> 'Omogoči seznam rojstnih dni',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Če je onemogočeno, seznam rojstnih dni ne bo prikazan. Pogoj za delovanje te nastavitve je omogočeno prikazovanje rojstnih dni.',
	'YES_JUMPBOX'					=> 'Omogoči prikazovanje izbirne škatlice',
	'YES_MODERATORS'				=> 'Omogoči prikazovanje moderatorjev',
	'YES_ONLINE'					=> 'Omogoči prikazovanje uporabnikov, ki so na strani',
	'YES_ONLINE_EXPLAIN'			=> 'Prikaži informacije o aktivnih uporabnikih na začetni strani, straneh forumov in na straneh tem.',
	'YES_ONLINE_GUESTS'				=> 'Omogoči prikazovanje uporabnikovega stanja na strani/s strani (oniline/offline)',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Dovoli prikazovanje informacij gostov na seznamu prisotnih uporabnikov.',
	'YES_ONLINE_TRACK'				=> 'Omogoči prikazovanje informacije o statusu uporabnika',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Prikaži informacije o tem ali je uporabnik  na strani ali s strani v profilih in na straneh tem.',
	'YES_POST_MARKING'				=> 'Omogoči označene teme',
	'YES_POST_MARKING_EXPLAIN'		=> 'Prikaže, če uporabnik odgovarja na temo.',
	'YES_READ_MARKING'				=> 'Omogoči označevanje tem na strani strežnika',
	'YES_READ_MARKING_EXPLAIN'		=> 'Shranjuje status prebrano/neprebrano v bazi podatkov namesto v piškotkih.',
	'YES_UNREAD_SEARCH'				=> 'Omogoči iskanje za neprebrane objave',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'PhpBB podpira preverjanje vtičnikov (plug-in) ali modulov. To vam dovoljuje določevanje preverjanja, ko se uporabniki prijavijo na forum. Z začetnimi nastavitvami so vključeni trije vtičniki; DB, LDAP and Apache. Vse metode ne zahtevajo dodatnih informacij, zato izpolni le polja, ki so primerna za izbrano metodo.',

	'AUTH_METHOD'				=> 'Izberi metodo preverjanja',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'Vpisati morate ključe vseh delujočih OAuth ponudnikov internetnih storitev. Podan je bil samo en ključ za OAuth ponudnika internetnih storitev.',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> 'Vsak OAuth ponudnik zahteva unikatno tajnost in ključ za preverjanje pristnosti z zunanjega strežnika. Te je treba preložiti OAuth službi ko svojo spletno stran registrirate pri njih in jo vpišete tako, kot je določeno za vas.<br>Katera koli storitev, ki nima vnešene tajnosti in ključa ne bo na voljo za uporabo s strani uporabnikov foruma. Prav tako upoštevajte, da se lahko uporabniki še vedno registrirajo z uporabo DB avtentifikacijskega vtičnika.',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'Ključ',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'Skrivnost',

	'APACHE_SETUP_BEFORE_USE'	=> 'Nastaviti morate preverjanje za apache, preden preklopite phpBB na to metodo preverjanja. Zapomnite si, da more biti uporabniško ime, ki ga uporabite za preverjanje apache-ja, enako vašemu uporabniškemu imenu na phpBB sistemu. Preverjanje apache-ja je lahko uporabljeno samo z mod_php (ne z verzijo CGI).',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAP baza <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'To je unikatno ime, ki locira informacijo o uporabniku, npr. <samp>o=Moje Podjetje,c=US</samp>.',
	'LDAP_EMAIL'					=> 'Lastnosti e-pošte LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Nastavi to lastnosti e-pošte vašega uporabniškega imena (če le-ta obstaja), da se novim uporabnikom avtomatično nastavi e-poštni naslov. Če to pustite prazno, se uporabnikom, ki se prvič prijavijo, e-pošta ne bo izpisala.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Povezava na LDAP strežnik ni mogoča z vnesenim uporabniškim imenom in geslom.',
	'LDAP_NO_EMAIL'					=> 'Navedena lastnost e-pošte ne obstaja.',
	'LDAP_NO_IDENTITY'				=> 'Prijavne identitete za %s ni mogoče.',
	'LDAP_PASSWORD'					=> 'LDAP geslo',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Pustite prazno, če želite uporabljati anonimne povezave. Če ne, vpišite geslo za zgornjega uporabnika.  Potrebno za Aktivni Glavni Strežnik. <strong>OPOZORILO:</strong> To geslo bo shranjeno v navadnem tekst v bazah podatkov, ki so vidne vsakomur, ki ima dostop do baz podatkov, oziroma vsakomur, ki lahko vidi to nastavitveno stran.',
	'LDAP_PORT'						=> 'Vrata strežnika LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Opcijsko lahko navedete vrata, ki bodo uporabljena za povezavo do LDAP strežnika. Tovarniško so nastavljena na 389.',
	'LDAP_SERVER'					=> 'LDAP ime strežnika',
	'LDAP_SERVER_EXPLAIN'			=> 'Če uporabljate LDAP, je to uporabniško ime ali IP-naslov LDAP strežnika. Lahko pa vnesete tudi URL, kot npr. ldap://hostname:port/.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'To je koren besede, po katerem se išče dano prijavno identiteto, npr. <var>uid</var>, <var>sn</var>, itd.',
	'LDAP_USER'						=> 'LDAP uporabnik <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Pusti prazno, za uporabo anonimne povezave. Če je karkoli vpisano, bo navedeno ime phpBB uporabil za iskanje po prijavah uporabnikov, da pravega uporabnika, npr. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Zahtevano za Aktivni Vodilni Strežnik.',
	'LDAP_USER_FILTER'				=> 'Filter uporabnikov LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Opcijsko lahko omejite iskalne predmete z dodatnimi filtri. Primer: <samp>objectClass=posixGroup</samp> bo prikazan kot rezultat <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Tu lahko definirate nastavitve domene in strežnika. Zagotovite, da so podatki, ki jih vnašate, pravilni – napake bodo povzročile e-maile z napačnimi informacijami. Pri vpisu domene bodite pozorni, da vključuje http:// ali drugo predpono za protokol. Številko vrat spreminjajte, samo če veste, da vaš strežnik uporablja drugačna vrata, vrata št. 80 je pravilna nastavitev v večini primerov.',

	'ENABLE_GZIP'				=> 'Omogoči stiskanje GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Ustvarjena vsebina bo pred pošiljanjem uporabniku stisnjena. To lahko zmanjša internetni promet, vendarle lahko tudi poveča uporabo procesorja na strežniku in tudi pri uporabniku.',
	'FORCE_SERVER_VARS'			=> 'Vsili strežniške URL nastavitve',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Če je ta možnost pritrdilna, bodo tu nastavljene strežniške nastavitve imele prednost pred avtomatičnimi nastavitvami.',
	'ICONS_PATH'				=> 'Pot za shranjevanje ikon prispevkov',
	'ICONS_PATH_EXPLAIN'		=> 'Pot korenskega imenika v PhpBB-ju, npr. <samp>slike/ikone</samp>.',
	'MOD_REWRITE_ENABLE'		=> 'Omogoči prepisovanje URL',
	'MOD_REWRITE_ENABLE_EXPLAIN' => 'Ko je omogočeno, bodo URL-ji, ki vsebujejo ’app.php’ bodo prepisani za odstranitev imena datoteke (npr: app.php/foo bo postalo /foo). <strong>ZA funkcionalnost je potreben mod_rewrite modul strežnika Apache. Če je funkcija omogočena brez mod_rewrite modula so lahko URL povezave na vašem forumu poškodovane.</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Modul <strong>mod_rewrite</strong> na vašem Apache strežniku je onemogočen. Omogočite modul ali kontaktirajte vašega ponudnika gostovanja, če želite omogočiti to funkcijo.',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'Ne moremo ugotoviti, ali strežnik podpira URL prepisovanje. To nastavitev lahko omogočite, ampak če URL prepisovanje ni omogočeno so lahko poti pridobljene na tem forumu (kot za uporabo v povezavah) poškodovane. Obrnite se na ponudnika gostovanja, če niste prepričani ali lahko varno omogočite to funkcijo.',
	'PATH_SETTINGS'				=> 'Nastavitve poti',
	'RANKS_PATH'				=> 'Pot za shranjevanje slik za stopnje uporabnikov',
	'RANKS_PATH_EXPLAIN'		=> 'Pot korenskega imenika v PhpBB-ju, npr. <samp>slike/stopnji</samp>.',
	'SCRIPT_PATH'				=> 'Pot do skripte',
	'SCRIPT_PATH_EXPLAIN'		=> 'Relativna pot od domene, v kateri je nameščen phbBB, npr. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Ime domene',
	'SERVER_NAME_EXPLAIN'		=> 'Ime domene, iz katere ta forum deluje (primer: <samp>example.com</samp>).',
	'SERVER_PORT'				=> 'Vrata strežnika',
	'SERVER_PORT_EXPLAIN'		=> 'Vrata, na katerih deluje vaš strežnik, običajno na 80, spremeni, če so vrata drugačna.',
	'SERVER_PROTOCOL'			=> 'Protokol strežnika',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'To je uporabljeno kot protokol strežnika, če so nastavitve vsiljene. Če je polje prazno ali pa če ni vsiljeno, bodo protokol določile nastavitve varnostnega piškotka (<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Nastavitve URL strežnika',
	'SMILIES_PATH'				=> 'Pot shranjevanja za smeške',
	'SMILIES_PATH_EXPLAIN'		=> 'Pot korenskega imenika v PhpBB-ju, npr. <samp>slike/smeški</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Pot za shranjevanje ikon skupin končnic datotek',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Pot korenskega imenika v PhpBB-ju, npr. <samp>slike/nalagalne_ikone</samp>.',
	'USE_SYSTEM_CRON'		=> 'Potekajo občasne naloge iz sistema cron',
	'USE_SYSTEM_CRON_EXPLAIN'		=> 'Ko je izklopljeno, je phpBB nastavljen na avtomatsko periodično uvedbo posebne naloge. Ko je vklopljen, phpBB ne bo načrtoval nobenih periodičnih nalog. Skrbnik sistema mora poskrbeti za <code>bin/phpbbcli.php cron:run</code>, ki bo voden v cron sistemu v rednih časovnih intervalih (npr. vsakih 5 minut).',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Tukaj lahko nastavljaš seje in prijave.',

	'ALL'							=> 'Vse',
	'ALLOW_AUTOLOGIN'				=> 'Dovoli stalne prijave',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Določite, če lahko uporabnik uporablja avtomatično prijavo, ko obišče forum.',
	'ALLOW_PASSWORD_RESET'			=> 'Dovoli ponastavitev gesla ("Pozabljeno geslo")',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> 'Določa ali lahko uporabniki uporabijo "Pozabil sem geslo" povezavo na prijavni strani, da si povrnejo račun. Če uporabljate zunanji mehanizem za preverjanje pristnosti boste morda želeli onemogočiti to funkcijo.',
	'AUTOLOGIN_LENGTH'				=> 'Čas dovoljene stalne prijave (v dnevih)',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Tukaj vnesite število dni za stalne prijave ali izberite nič za onemogočanje omejitve.',
	'BROWSER_VALID'					=> 'Preverjanje brskalnika',
	'BROWSER_VALID_EXPLAIN'			=> 'Omogočite preverjanje brskalnika za vsako sejo. S tem je varnost seje izboljšana.',
	'CHECK_DNSBL'					=> 'Preveri IP v DNS Blackhole seznamu',
	'CHECK_DNSBL_EXPLAIN'			=> 'Če je to omogočeno, se preverja uporabnikov IP-naslov iz storitev DNSBL pri registraciji in pri pošiljanju sporočil: <a href="http://spamcop.net">spamcop.net</a> in <a href="http://www.spamhaus.org">www.spamhaus.org</a>. Ta preverbo traja nekaj časa, odvisna pa je od nastavitev strežnika. Če so upočasnitve znatne ali pa je preveč napačnih poročanj, je najbolje, da se to opcijo izključi.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Preveri domeno e-pošte za veljaven MX zapis',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Če je to omogočeno, se domena e-pošte preverja za veljaven MX zapis že ob registraciji in ob vsakem spreminjanju profila.',
	'FORCE_PASS_CHANGE'				=> 'Zahtevaj spremembo gesla',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Zahteva od uporabnika, da si spremeni geslo po določenemu številu dni. Za onemogočanje te vrednosti, vpišite 0.',
	'FORM_TIME_MAX'					=> 'Najdaljši možni čas za ustvarjanje obrazca',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Čas, ki ga ima uporabnik na voljo za ustvarjanje obrazca. Vpišite -1 za onemogočanje. Obrazec lahko postane neveljaven, če seja poteče, ne glede na te nastavitve.',
	'FORM_SID_GUESTS'				=> 'Večja zaščita obrazcev za goste',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Če je omogočeno, bo varnostna koda pri oddaji obrazca s strani gosta generirana za vsako sejo posebej. To lahko povzroči težave z določenimi ISP-ji.',
	'FORWARDED_FOR_VALID'			=> 'Preverjen <var>X_FORWARDED_FOR</var> naslov',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Seja bo nadaljevana le v primeru, da je poslan <var>X_FORWARDED_FOR</var> naslov enak prejšnji zahtevi. Blokade bodo preverjene tudi z IP-ji v <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Prverjanje IP-ja v seji',
	'IP_VALID_EXPLAIN'				=> 'Določa, koliko uporabnikovih IP-jev je lahko uporabljeno za preverjanje seje; <samp>Vse</samp> primerja cel naslov, <samp>A.B.C</samp> prve x.x.x, <samp>A.B</samp> prve x.x, <samp>Nič</samp> onemogoči preverjanje. Na IPv6 naslovih <samp>A.B.C</samp> preverja prve štiri sklope in <samp>A.B</samp> prve tri sklope.',
	'IP_LOGIN_LIMIT_MAX'			=> 'Maksimalno število prijavnih poizkusov na IP naslov',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'Meja število prijav iz določenega IP naslova, preden se vklopi spam filter. Vnesite 0 za izklop funkcije.',
	'IP_LOGIN_LIMIT_TIME'			=> 'IP naslov prijavnih poizkusov preneha po',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'Poizkus prijave prenega po tem času.',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> 'Omejeno prijavno št. glave: <var>X_FORWARDED_FOR</var>',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'Namesto omejiti število prijav iz določenega IP naslova so omejeni z <var>X_FORWARDED_FOR</var> vrednostmi. <br><em><strong>Opozorilo:</strong> To omogočite samo če teče forum preko proxy strežnika kateri ima nastavljeno <var>X_FORWARDED_FOR</var> kot varne vrednosti.</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'Največje število poizkusov prijave',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Če uporabnik preseže to število poizkušanja prijave, more opraviti vizualno preverjanje.',
	'NO_IP_VALIDATION'				=> 'Nič',
	'NO_REF_VALIDATION'				=> 'Nič',
	'PASSWORD_TYPE'					=> 'Zapletenost gesla',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Določa, kako zapleteno more biti geslo.',
	'PASS_TYPE_ALPHA'				=> 'Mora vsebovati črke in številke.',
	'PASS_TYPE_ANY'					=> 'Ni zahtev.',
	'PASS_TYPE_CASE'				=> 'Mora vsebovati črke in številke.',
	'PASS_TYPE_SYMBOL'				=> 'Mora vsebovati simbole.',
	'REF_HOST'						=> 'Preveri samo gostitelja',
	'REF_PATH'						=> 'Preveri tudi pot',
	'REFERRER_VALID'				=> 'Potrdite Referrer',
	'REFERRER_VALID_EXPLAIN'		=> 'Če je omogočeno bo referrer od zahtev prispevka preverjen pred nastavitvami poti gostitelja/skripte. To lahko povzroči težave s forumi, ki uporabljajo več domen ali zunanje prijave.',
	'TPL_ALLOW_PHP'					=> 'Dovoli PHP v predlogah',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Če je ta opcija omogočena, bosta <code>PHP</code> in <code>INCLUDEPHP</code> prepoznana in razčlenjena v predlogah.',
	'UPLOAD_CERT_VALID'				=> 'Preverite certifikat nalaganja',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> 'Če je omogočeno, bodo certifikati datotek na drugih povezavah potrjeni. To zahteva definiranje "CA bundle" v <samp>openssl.cafile</samp> ali <samp>curl.cainfo</samp> v php.ini.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Te informacije se uporablja, ko forum pošilja e-pošto uporabnikom. Preverite, če je navedena e-pošta pravilna. Vsa neposlana sporočila bodo poslana na ta naslov. Če vaš strežnik ne omogoča e-pošte, ki bazira na PHP-ju, lahko za pošiljanje e-pošte uporabite SMTP. To zahteva naslov primernega strežnika (če je potrebno, vprašajte gostitelja). Če strežnik zahteva preverjanje vnesite zahtevano uporabniško ime in geslo in previrjevalno metodo (samo, če zahteva).',

	'ADMIN_EMAIL'					=> 'Povratni e-poštni naslov',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Tehnični kontaktni e-poštni naslov, ki bo uporabljen za vse vrnjene e-poštne naslove. Uporabljeno bo, kot <samp>Return-Path</samp> in <samp>Sender</samp> naslov v e-pošti.',
	'BOARD_EMAIL_FORM'				=> 'Pošiljanje e-pošte uporabnikov preko foruma',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'Uporabniki lahko e-pošto pošiljajo preko foruma, s tem pa se ne pokaže njihov e-poštni naslov.',
	'BOARD_HIDE_EMAILS'				=> 'Skrij e-poštni naslov',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Ta funkcija e-poštne naslove ohrani zasebne.',
	'CONTACT_EMAIL'					=> 'Kontaktni e-poštni naslov',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Ta naslov bo uporabljen v primerih, ko gre za spam, napake v odhodni podatkih itd. Vedno bo uporabljen kot <samp>Od</samp> in <samp>Komu-odgovoritiReply-To</samp> v naslovih take e-pošte.',
	'CONTACT_EMAIL_NAME'			=> 'Ime kontakta',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'To je ime kontakta, ki ga bodo videli prejemniki e-pošte. Če ne želite imeti kontaktnega imena pustite to polje prazno.',
	'EMAIL_FORCE_SENDER'			=> 'Vsili iz e-poštnega naslova',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'To bo nastavilo <samp>Return-Path</samp> na e-poštni naslov namesto na lokalnega uporabnika in imena gostitelja. Ta nastavitev ne velja, če uporabljate SMTP.<br><em><strong>Opozorilo:</strong> Zahteva se zaupanja vreden uporabnik v konfiguraciji sendmail.</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'Velkost paketa e-pošte',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Ta ševilka določa največje število e-poštnih sporočil, ki so poslana naenkrat. Za nastavitev je uporabljena pri interni vrsti sporočil; nastavite to vrednost na 0, če imate problem z nedostavljenimi e-poštnimi sporočili.',
	'EMAIL_MAX_CHUNK_SIZE'			=> 'Največje dovoljeno število prejemnikov e-pošte',
	'EMAIL_MAX_CHUNK_SIZE_EXPLAIN'	=> 'Če je potrebno lahko nastavite, da v enem e-poštnem sporočilu ne bo preseglo največjega števila prejemnikov, ki jih bo dovolil vaš e-poštni strežnik.',
	'EMAIL_SIG'						=> 'E-poštni podpis',
	'EMAIL_SIG_EXPLAIN'				=> 'To besedilo bo dodano vsem e-poštnim sporočilom, ki jih pošilja forum.',
	'ENABLE_EMAIL'					=> 'Omogoči forumsko e-pošto',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Če je to onemogočeno, ne bo preko foruma poslana prav nobena e-pošta.',
	'SEND_TEST_EMAIL'				=> 'Pošlji testno epošto',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'To bo poslalo testno epošto na naslov, določen v vašem profilu.',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'Dovoli samopodpisane SSL certifikate',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> 'Dovoli povezave s strežnikom SMTP s ssamopodpisanim SSL certifikatom.<em><strong>Opozorilo:</strong> Dovoljenje samopodpisanih SSL certifikatov lahko povzroči varnostne posledice.</em>',
	'SMTP_AUTH_METHOD'				=> 'Metoda preverjanja za SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'To je uporabljeno samo v primeru, če sta nastavljena uporabniško ime in geslo. Vprašajte gostitelja, če niste gotovi, katero metodo uporabljate.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'PRIJAVA',
	'SMTP_PASSWORD'					=> 'SMTP geslo',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Vpiši geslo samo v primeru, če vaš SMTP strežnik to zahteva.',
	'SMTP_PLAIN'					=> 'ENOSTAVEN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-PRED-SMTP',
	'SMTP_PORT'						=> 'Vrata strežnika SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'To spreminjajte samo v primeru, če je vaš SMTP strežnik na drugačnih vratih.',
	'SMTP_SERVER'					=> 'Naslov SMTP strežnika',
	'SMTP_SERVER_EXPLAIN'			=> 'Upoštevajte, da morate zagotoviti protokol, ki ga uporablja vaš strežnik. Če uporabljate SSL, mora to biti "ssl://your.mailserver.com"',
	'SMTP_SETTINGS'					=> 'Nastavitve SMTP',
	'SMTP_USERNAME'					=> 'SMTP uporabniško ime',
	'SMTP_USERNAME_EXPLAIN'			=> 'Uporabniško ime vpišite le, če vaš SMTP strežnik to zahteva.',
	'SMTP_VERIFY_PEER'				=> 'Preveri SSL certifikate',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'Zahtevajte potrditev SSL certifikata, ki ga uporablja strežnik SMTP.<br><em><strong>Opozorilo:</strong> Povezovanje "peerov" z nepreverjenimi SSL certifikati, lahko povzroči varnostne posledice.</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'Preveri SMTP "peer" ime',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'Zahteva preverjanje "peer" imena za SMTP strežnike, ki uporabljajo SSL / TLS povezave.<em><strong>Opozorilo:</strong> Povezovanje z nepreverjenimi "peeri", lahko povzroči varnostne posledice.</em>',
	'TEST_EMAIL_SENT'				=> 'Testna epošta je bila poslana.<br>Če je niste prejeli, preverite nastavitve epošte.<br><br>Če potrebujete pomoč, obiščite <a href="https://www.phpbb.com/community/">podporni phpBB forum</a>.',

	'USE_SMTP'						=> 'Uporabnite SMTP strežnik za e-pošto',
	'USE_SMTP_EXPLAIN'				=> 'Izberite “Da”, če želite e-pošto poslati preko imenovanega strežnika, ne pa preko lokalne poštne funkcije.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Tukaj lahko omogočite in kontrolirate uporabo Jabber-ja za neposredna sporočila in za obvestila foruma. Jabber je odprtokodni protokol, ki je za uporabo na voljo vsem. Nekateri Jabber strežniki vsebujejo pristopna vrata ali prenos, ki vam omogočata kontaktiranje uporabnikov na drugih omrežjih. Vsi strežniki ne ponujajo prenosa. Spreminjanje v protokolih lahko prepreči prenose. Bodite gotovi, da vnašate že obstoječe detajle računa. PhpBB bo te podatke uporabil, kot da je račun že registriran.',

	'JAB_ALLOW_SELF_SIGNED'			=> 'Dovoli samopodpisane SSL certifikate',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> 'Dovoli povezave do strežnika Jabber s samopodpisanimi SSL certifikati.<em><strong>Opozorilo:</strong> Dovoljevanje samopodpisanih SSL certifikatov lahko povzroči varnostne posledice.</em>',
	'JAB_ENABLE'				=> 'Omogočite Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Omogočite uporabo sporočanja in opozarjanja preko Jabber.',
	'JAB_GTALK_NOTE'			=> 'Zaponite si, da GTalk ne bo deloval, ker funkcija <samp>dns_get_record</samp> ni najdena. V PHP4 ta funkcija ni na voljo, prav tako pa ni vgrajena v pladforme Windows. Trenutno ne deluje niti na sistemih, ki bazirajo na BSD-ju, vključno z Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Velikost paketa Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'To je število sporočil, ki je lahko poslano v enem paketu. Če je nastavljeno na 0, bo sporočilo poslano takoj in ne bo stalo v vrsti za kasnejše pošiljanje.',
	'JAB_PASSWORD'				=> 'Jabber geslo',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>Opozorilo:</strong> Geslo bo shranjeno v golem besedilu v bazi, vidno vsem, kateri imajo dostop do baze ali lahko vidijo to konfiguracijo.</em>',
	'JAB_PORT'					=> 'Vrata za Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Pusti prazno, razen če veš, da vrata niso 5222.',
	'JAB_SERVER'				=> 'Jabber strežnik',
	'JAB_SERVER_EXPLAIN'		=> 'Poglej %sjabber.org%s za seznam strežnikov.',
	'JAB_SETTINGS_CHANGED'		=> 'Nastavitve Jabber uspešno spremenjene.',
	'JAB_USE_SSL'				=> 'Za povezavo uporabi SSL',
	'JAB_USE_SSL_EXPLAIN'		=> 'Če je omogočeno, se bo poizkusila vzpostaviti zavarovana povezava. Vrata Jabber bodo spremenjena na 5223, če so navedena vrata 5222.',
	'JAB_USERNAME'				=> 'Jabber uporabniško ime',
	'JAB_USERNAME_EXPLAIN'		=> 'Vpišite registrirano uporabniško ime. Preverjanja, če obstaja, ne bo.',
	'JAB_VERIFY_PEER'				=> 'Preveri SSL certififat',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Zahteva preverjanje verifikacije ali SSL certifikata, ki ga uporablja Jabber strežnik.<em><strong>Opozorilo:</strong> Povezovanje "peerov" z nepreverjenimi SSL certifikati lahko povzroči varnostne posledice.</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Preveri Jabber "peer" ime',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'Zahteva preverjanje "peer" imena za Jabber strežnike, ki uporabljajo SSL / TLS povezave.<em><strong>Opozorilo:</strong> Povezovanje z nepreverjenimi "peeri" lahko povzroči varnostne posledice.</em>',
));

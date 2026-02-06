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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'Cache-ul APCu trebuie golit prin Panoul Administratorului.',

	'CLI_CONFIG_CANNOT_CACHED'			=> 'Setați această opțiune în cazul în care configurările se schimbă prea des, pentru a fi memorate în mod eficient în cache.',
	'CLI_CONFIG_CURRENT'				=> 'Valoare configurată curent, folosiți 0 și 1 pentru a specifica o valori booleene',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Config șterse cu succes %s.',
	'CLI_CONFIG_NEW'					=> 'Valoare configurată nouă, folosiți 0 și 1 pentru a specifica o valori booleene',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Config %s nu există',
	'CLI_CONFIG_OPTION_NAME'			=> 'Numele opțiunii de configurat',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Setați această opțiune dacă valoarea trebuie tipărită fără o linie nouă la sfârșit.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Sumă de majorat cu',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Najorat cu succes config %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nu se poate seta config %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Setat cu succes config %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprimă o listă a sarcinilor cron pregătite și nepregătite.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Execută toate sarcinile cron pregătite.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Numele sarcinii de executat',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualizează baza de date prin aplicarea migrărilor.',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Afișează toate migrările instalate și disponibile.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Șterge o opțiune de configurare',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Revocați o migrare.',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Dezactivează extensia specificată.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Activează extensia specificată.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Caută migrări ce nu depind de altele.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Repară structura arborelui forumurilor și modulelor.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Devine valoarea opțiunii de configurat',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Crește valoarea intreagă a opțiunii de configurat',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Listează toate extensiile din baza de date și din sistemul de fișiere.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Numele mediului.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Rulează în Safe Mode (fără extensii).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Lansare shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Curăță extensia specificată.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Afișează tipurile de text care pot fi reanalizate.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Reanalizatoare disponibile:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reanalizează textul stocat cu serviciile actuale de text_formatter.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Tipul de text de reanalizat. Lăsați necompletat pentru a reanaliza totul.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Nu salvați nicio modificare; doar afișați ce s-ar întâmpla',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Reanalizează toate codurile BB fără excepție. Rețineți că orice cod BB dezactivat anterior va fi reprocesat, activat și afișat complet.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Cel mai mic ID de procesat',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Cel mai mare ID de procesat',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Numărul aproximativ de procesat simultan',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Pornește reanalizarea când ultima execuție s-a oprit',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Setează valoarea unei opțiuni de configurare doar dacă vechea valoare corespunde cu valoarea curentă',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Setează valoarea unei opțiuni de configurare',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Ștergeți toate imaginile în miniatură.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Generați toate imaginile în miniatură.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Recreați toate imaginile în miniatură.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Verificați dacă forumul este actualizat.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Numele extensiei de verificat (dacă toate, verificați toate extensiile)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Rulați comanda de verificare cu cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Rulați comanda alegând să verificați doar versiunile stabile sau instabile.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Actualizați hash-urile de parole învechite pentru a fi criptate cu bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" trebuie setat ca "stabil" sau "instabil".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Activați (sau dezactivați) un cont de utilizator.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Numele de utilizator pentru activare.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Dezactivați contul de utilizator',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Utilizatorul este deja activat.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Utilizatorul este deja inactiv.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Adăugați utilizator nou.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Numele de utilizator',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Parola utilizatorului',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Adresa e-mail a utilizatorului',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Trimiteți un e-mail de activare utilizatorului (nu este trimis implicit)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Ștergeți un cont de utilizator.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Numele de utilizator pentru ștergere',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Ștergeți utilizatorul după ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'ID-uri de utilizatori pentru ștergere',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Ștergeți toate mesajele utilizatorului. Fără această opțiune, mesajele utilizatorului vor fi păstrate.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Recurățați numele de utilizatori.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nu se poate dezactiva extensia %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Extensie dezactivată cu succes %s',
	'CLI_EXTENSION_DISABLED'			=> 'Extensia %s nu este activată',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nu se poate activa extensia %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensie activată cu succes %s',
	'CLI_EXTENSION_ENABLED'				=> 'Extensia %s este deja activată',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Extensia %s nu există',
	'CLI_EXTENSION_NAME'				=> 'Numele extensiei',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Extensia nu a putut fi curațată %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Extensie curațată cu succes %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Nu am putut actualiza extensia %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Extensie actualizată cu succes %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Nu au fost găsite extensii.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Extensia %s nu este activabilă.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponibilă',
	'CLI_EXTENSIONS_DISABLED'			=> 'Dezactivată',
	'CLI_EXTENSIONS_ENABLED'			=> 'Activată',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Structura arborelui forumurilor și modulelor a fost reparată cu succes.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Hash-urile de parole învechite au fost actualizate cu succes la bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Numele migrării, inclusiv spațiul de nume (utilizați bare oblice în loc de bare oblice inverse pentru a evita problemele).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrări disponibile',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrări instalate',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Afișați numai migrări disponibile',
	'CLI_MIGRATIONS_EMPTY'                  => 'Nu sunt migrări.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reanalizare %1$s (interval %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reanalizare %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reanalizarea s-a terminat cu succes',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) șterse.',
	'CLI_THUMBNAIL_DELETING'	=> 'Se șterg miniaturile',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) sărite.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generate.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Se generează miniaturile',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Toate miniaturile au fost regenerate.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Toate miniaturile au fost șterse.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nu sunt miniaturi de generat.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nu sunt miniaturi de șters.',

	'CLI_USER_ADD_SUCCESS'			=> 'Utilizator adăugat cu succes %s.',
	'CLI_USER_DELETE_CONFIRM'		=> 'Sunteți sigur că doriți să ștergeți ‘%s’? [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Sunteți sigură că doriți ștergerea ID-urilor de utilizator ‘%s’? [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'ID-urile de utilizator au fost șterse cu succes',
	'CLI_USER_DELETE_ID_START'		=> 'Ștergeți utilizator dupa ID',
	'CLI_USER_DELETE_NONE'			=> 'Niciun utilizator nu a fost șters dupa ID.',
	'CLI_USER_RECLEAN_START'		=> 'Recurățați utilizatori',
	'CLI_USER_RECLEAN_DONE'			=> [
		0	=> 'Recurățare completă. Niciun nume de utilizator de curățat.',
		1	=> 'Recurățare completă. %d nume de utilizator curățat.',
		2	=> 'Recurățare completă. %d nume de utilizatori curățați.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opțional, puteți specifica un nume de sarcină cron pentru a rula doar sarcina cron specificată.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Activați un cont de utilizator sau dezactivați un cont folosind opțiunea <info>--deactivate</info>.
Pentru a trimite opțional un e-mail de activare utilizatorului, utilizați opțiunea <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Comanda <info>%command.name%</info> adaugă un utilizator nou:
Dacă această comandă este rulată fără opțiuni, vi se va solicita să le introduceți.
Pentru a trimite opțional un e-mail noului utilizator, utilizați opțiunea <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Recurățarea numelor de utilizator va verifica toate numele de utilizator stocate și va asigura că versiunile curățate sunt, de asemenea, stocate. Numele de utilizator curățate sunt într-o formă insensibilă la majuscule, normalizată NFC și transformate în ASCII.',
));

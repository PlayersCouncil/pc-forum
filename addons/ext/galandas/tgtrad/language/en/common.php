<?php
/**
 *
 * Toggle Google Translator Widget. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Galandas, http://phpbb3world.altervista.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
    'ACP_TGT_CREDITS'           => 'Extension Toggle Google Translator Widget by <a href="http://phpbb3world.altervista.org"><strong>Galandas</strong></a>',
	'ACP_TGT_DONATE'			=> '<a href="https://www.paypal.me/Galandas"><strong>Donate</strong></a>',
	'ACP_TGT_DONATE_EXPLAIN'	=> 'If you like this extension considers a donation offer a pizza',
	'ACP_TGT_VERSION'		    => 'Version',	
	'ACP_TGT_SETTINGS'			=> 'Settings',
	'ACP_TGT_SETTING_SAVED'	    => 'Settings have been saved successfully!',
	'ACP_TGT_ENABLE'	        => 'Enable or Disable',	
	'ACP_TGT_ENABLE_EXPLAIN'	=> 'Enable or Disable the extension Toggle Google Translator Widget in your forum',	
	'ACP_TGT_MADRELANG'			=> 'Write your native language',	
	'ACP_TGT_MADRELANG_EXPLAIN'			=> 'Write your native language to display, example your language mother and English you have to write <strong>Translation</strong>, if it is Italian <strong>Traduzione</strong>',	
	'ACP_TGT_CHOICETONGUE'	    => 'Choice Image',	
	'ACP_TGT_CHOICETONGUE_EXPLAIN'	    => 'Choose an image from 5 made available, you can also upload other as you like in the images folder extension',
	'ACP_TGT_CHOICECOLORS'	    => 'Choice Color',	
	'ACP_TGT_CHOICECOLORS_EXPLAIN'	    => 'Choose the color of the text to your liking using a <a href="http://www.colorpicker.com"><strong>hexadecimal code</strong></a> (eg BF0000). Leave this field blank to use the default color.',

));

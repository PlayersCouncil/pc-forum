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
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'sk',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'			=> 'Zadaný overovací kód je nesprávny',
	'RECAPTCHA_NOSCRIPT'			=> 'Prosíme, povoľte vo vašom prehliadači JavaScript, aby sa vám mohlo zobraziť overenie.',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'In order to use reCaptcha, you must create an account on <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'			=> 'Táto CAPTCHA je v skutočnosti neviditeľná. Pre jej overenie sa pozrite do pravého dolného rohu. Mali by ste tam vidieť malú ikonku.',
	
	'RECAPTCHA_PUBLIC'				=> 'Kľúč stránky',
	'RECAPTCHA_PUBLIC_EXPLAIN' 		=> 'Váš kľúč stránky. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použite typ reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Váš kľúč stránky. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použite typ reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Tajný kľúč',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Váš tajný kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použite typ reCAPTCHA v2 &gt; Invisible reCAPTCHA.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Váš tajný kľúč. Kľúče možno získať na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosíme, použite typ reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Doména',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Doména, z ktorej sa stiahne skript a na ktorú sa pošlú dáta na overenie.<br>Použite <samp>recaptcha.net</samp> v prípade, že <samp>google.com</samp> nie je dostupná.',

	'RECAPTCHA_V3_METHOD'				=> 'Metóda',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metóda, ktorá sa ma použiť na overenie.<br>Nedostupné možnosti sú pre vaše nastavenie nedostupné.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Predvolený prah citlivosti',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Použije sa, keď žiadne iné akcie nie sú aplikovateľné.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Prah citlivosti pre prihlásenie',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Prah citlivosti pre odoslanie príspevku',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Prah citlivosti pre registráciu',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Prah citlivosti pre nahlásenie príspevku',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Prahy citlivosti',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 vracia skóre (<samp>1.0</samp> je vysoko pravdepodobne dobrý úmysel, <samp>0.0</samp> je veľmi pravdepodobne bot). Tu môžete nastaviť minimálne skóre pre každú akciu.',
));

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

$lang = array_merge($lang, [
	// Find the language/country code on https://developers.google.com/recaptcha/docs/language
	// If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_LANG'				=> 'sl',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Ta vizualno potrditvena koda, katero si vpisal, je napačna',
	'RECAPTCHA_NOSCRIPT'				=> 'Prosimo, omogočite JavaScript v vašem brskalniku.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Če želite uporabljati reCaptcha, morate ustvariti račun na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Ta CAPTCHA je pravzaprav nevidna. Če želite preveriti, ali deluje, se mora v desnem spodnjem kotu te strani prikazati majhna ikona.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Presegli ste največje dovoljeno število poskusov prijave. <br> Poleg vašega uporabniškega imena in gesla bo za preverjanje pristnosti vaše seje uporabljen tudi nevidni reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'				=> 'Ključ strani',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Vaš reCaptcha ključ strani. Ključe se lahko pridobi na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosimo, uporabite reCAPTCHA v2 &gt; nevidno reCAPTCHA vrsto značke.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Vaš reCaptcha ključ strani. Ključe je mogoče dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosimo, uporabite reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Skrivni ključ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Vaš skrivni reCaptcha ključ. Ključe je mogoče pridobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosimo, uporabite reCAPTCHA v2 &gt; nevidno reCAPTCHA vrsto značke.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Vaš skrivni ključ reCAPTCHA. Ključe je mogoče dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Prosimo, uporabite reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Zahteva domene',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domena za pridobitev skripte ter za uporabo pri preverjanju zahteve.<br>Uporabite <samp>recaptcha.net</samp>, ko <samp>google.com</samp> ni dostopen.',

	'RECAPTCHA_V3_METHOD'				=> 'Način zahteve',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metoda, ki se uporablja pri preverjanju zahteve.<br>Onemogočene možnosti niso na voljo v vaši namestitvi.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Privzeta mejna vrednost',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Uporablja se, kadar se ne uporablja nobeno drugo dejanje.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Mejna vrednost prijave',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Mejna vrednost objav',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Mejna vrednost registracije',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Mejna vrednost prijav (report)',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Mejne vrednosti',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 vrne rezultat (<samp>1.0</samp> je zelo verjetno dobra interakcija, <samp>0.0</samp> je zelo verjetno bot). Tukaj lahko nastavite najmanjši rezultat za dejanje.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 mora vedeti, katero razpoložljivo metodo želite uporabiti pri preverjanju zahteve.',
]);

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
	'RECAPTCHA_LANG'				=> 'ro',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Codul de confirmare vizuală trimis a fost incorect',
	'RECAPTCHA_NOSCRIPT'				=> 'Vă rugăm să activați JavaScript în browser-ul dumneavoastră pentru a încărca provocarea.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'Pentru a utiliza reCaptcha, trebuie să vă creați un cont la <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Acest CAPTCHA este, de fapt, invizibil. Pentru a verifica dacă funcționează, ar trebui să apară o pictogramă mică în colțul din dreapta jos al acestei pagini.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Ați depășit numărul maxim de încercări de autentificare permise.<br>Pe lângă numele de utilizator și parolă, reCAPTCHA invizibil v3 va fi utilizat pentru a autentifica sesiunea dumneavoastră.',

	'RECAPTCHA_PUBLIC'				=> 'Cheie site',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Cheia reCAPTCHA pentru site-ul dumneavoastră. Cheile pot fi obținute la <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vă rugăm să utilizați reCAPTCHA v2 &gt; Tip badge reCAPTCHA invizibil.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Cheia reCAPTCHA pentru site-ul dumneavoastră. Cheile pot fi obținute la <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vă rugăm să utilizați reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Cheie secretă',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Cheia secretă reCAPTCHA pentru site-ul dumneavoastră. Cheile pot fi obținute la <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vă rugăm să utilizați reCAPTCHA v2 &gt; Tip badge reCAPTCHA invizibil.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Cheia secretă reCAPTCHA pentru site-ul dumneavoastră. Cheile pot fi obținute la <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Vă rugăm să utilizați reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Domeniul solicitat',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domeniul de la care se preia scriptul și care va fi utilizat pentru verificarea cererii.<br>Folosiți <samp>recaptcha.net</samp> atunci când <samp>google.com</samp> nu este accesibil.',

	'RECAPTCHA_V3_METHOD'				=> 'Metodă',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metoda de utilizat pentru verificarea cererii.<br>Opțiunile dezactivate nu sunt disponibile în configurația dumneavoastră.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Prag implicit',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Utilizat atunci când niciuna dintre celelalte acțiuni nu este aplicabilă.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Prag de autentificare',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Pragul pentru postare',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Pragul pentru înregistrare',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Pragul pentru raportare',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Praguri',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 calculează un scor (<samp>1.0</samp> este foarte probabil să reprezinte o interacțiune bună, <samp>0.0</samp> este foarte probabil să fie un bot). Aici puteți stabili scorul minim pentru fiecare acțiune.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 necesită să specificați metoda pe care doriți să o utilizați pentru verificarea cererii.',
]);

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
	'RECAPTCHA_LANG'	=> 'en',

	'CAPTCHA_RECAPTCHA'	=> 'reCaptcha',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'	=> 'Vaizdinio patvirtinimo kodas, kurį įrašėte, yra neteisingas',
	'RECAPTCHA_NOSCRIPT'				=> 'Įjunkite „JavaScript“ savo naršyklėje, kad pamatytumėte užduotį nuo spam-botų.',
	'RECAPTCHA_NOT_AVAILABLE'	=> 'Norėdami naudoti reCaptcha priedą turite užsiregistruoti <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> puslapyje.',
	'RECAPTCHA_INVISIBLE'				=> 'Šio tipo CAPTCHA yra nematomas. Kad įsitikintumėte, jog jis veikia, apatiniame dešiniajame šio puslapio kampe turėtų pasirodyti maža piktograma.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Viršijote didžiausią leistiną skaičių bandymų prisijungti.<br>Dabar, prie vartotojo vardo ir slaptažodžio, autentifikavimui papildomai dar bus naudojamas nematomas reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'	=> 'Viešas reCaptcha raktas',
	'RECAPTCHA_PUBLIC_EXPLAIN'	=> 'Jūsų viešas reCaptcha raktas. Raktus galite gauti iš <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Jūsų svetainės „reCaptcha“ raktas. Raktus galima gauti svetainėje <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite versiją reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'	=> 'Privatus reCaptcha raktas',
	'RECAPTCHA_PRIVATE_EXPLAIN'	=> 'Jūsų privatus reCaptcha raktas. Raktus galite gauti iš <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Jūsų slaptas raktas reCaptcha. Raktus galima gauti svetainėje <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite versiją reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Domenas',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Domenas, iš kurio bus atsiųstas skriptas, kad būtų patvirtinta užklausa. <br>Jeigu <samp>google.com</samp> neprieinamas, naudokite <samp>recaptcha.net</samp>.',

	'RECAPTCHA_V3_METHOD'				=> 'Metodas',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metodas, kuris bus naudojamas užklausai patvirtinti.<br>Jei pasirinkimas nepasiekiamas, šio metodo negalima naudoti šioje konferencijoje.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Slenkstis pagal nutylėjimą',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Slenkstis pagal nutylėjimą yra naudojamas, kai kiti slenksčiai yra nepritaikomi.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Įėjimo slenkstis',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Laiškų siuntimo slenkstis',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Registracijos slenkstis',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Skundo slenkstis',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Slenksčiai',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 grąžina įvertinimą (<samp>1.0</samp> — labiausiai patikimas vartotojas, <samp>0.0</samp> — greičiausiai botas). Čia galite sukonfigūruoti minimalų įvertinimą (slenkstį) kiekvienam naudojimo atvejui reCAPTCHA v3.',
 	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'Konkrečiam reCAPTCHA v3 darbui būtina turėti informaciją apie naudojamą metodą užklausos patvirtinimui.',
]);

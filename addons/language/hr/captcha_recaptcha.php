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
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* https://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod phpBB foruma, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
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
$lang = array_merge($lang, [
'RECAPTCHA_LANG'=>'hr',
'CAPTCHA_RECAPTCHA'=>'reCaptcha v2',
'CAPTCHA_RECAPTCHA_V3'=>'reCaptcha v3',
//'RECAPTCHA_INCORRECT'=>'Potvrdni kod koji si upisao/la je netočan.',
'RECAPTCHA_INCORRECT'=>'Rješenje koje si upisao/la je netočno.',
'RECAPTCHA_NOSCRIPT'=>'Da bi se učitao potreban sadržaj, molim(o), omogući JavaScript u pregledniku.',
'RECAPTCHA_NOT_AVAILABLE'=>'Da bi mogao/la koristiti reCaptcha, trebaš kreirati korisnički račun na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
'RECAPTCHA_INVISIBLE'=>'CAPTCHA je nevidljiva.<br />Za provjeru radnosti, mala ikona bi se trebala pojaviti u donjem desnom kutu stranice.',
'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'=>'Prekoračio/la si maksimalan dopušten broj pokušaja prijavljivanja.<br>Vezano na tvoje korisničko ime i zaporku, nevidljiva reCAPTCHA v3 će biti uporabljena za autentifikaciju sesije.',
'RECAPTCHA_PUBLIC'=>'Ključ stranice',
'RECAPTCHA_PUBLIC_EXPLAIN'=>'reCAPTCHA ključ tvoje stranice.<br />Ključ(eve) je moguće dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.<br />Molim(o), koristi reCAPTCHA v2 &gt; <em>Invisible reCAPTCHA badge type</em>.',
'RECAPTCHA_V3_PUBLIC_EXPLAIN'=>'reCAPTCHA ključ tvoje stranice.<br />Ključ(eve) je moguće dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.<br />Molim(o), koristi reCAPTCHA v3.',
'RECAPTCHA_PRIVATE'=>'Tajni ključ',
'RECAPTCHA_PRIVATE_EXPLAIN'=>'Tvoj tajni reCaptcha ključ.<br />Ključ(eve) je moguće dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.<br />Molim(o), koristi reCAPTCHA v2 &gt; <em>Invisible reCAPTCHA badge type</em>.',
'RECAPTCHA_V3_PRIVATE_EXPLAIN'=>'Tvoj tajni reCaptcha ključ.<br />Ključ(eve) je moguće dobiti na <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.<br />Molim(o), koristi reCAPTCHA v3.',
//'RECAPTCHA_EXPLAIN'=>'S ciljem sprječavanja automatskog slanja, upisivanje prikazanog teksta, u donje tekstualno polje, je obvezno.',
//'RECAPTCHA_EXPLAIN'=>'S ciljem sprječavanja automatskog slanja, izvršenje zadanog je obvezno.',
//'RECAPTCHA_SOCKET_ERROR'=>'Došlo je do problema prilikom povezivanja s RECAPTCHA uslugom: nije bilo moguće otvoriti <em>socket</em>. Pokušaj ponovo kasnije.',
'RECAPTCHA_V3_DOMAIN'=>'Domena zahtjeva',
'RECAPTCHA_V3_DOMAIN_EXPLAIN'=>'Domena s koje će biti povučena skripta (i) koja će biti korištena za verificiranje zahtjeva.<br />Koristi <samp>recaptcha.net</samp> kada <samp>google.com</samp> nije dostupna.',
'RECAPTCHA_V3_METHOD'=>'Metoda zahtjeva',
'RECAPTCHA_V3_METHOD_EXPLAIN'=>'Metoda koja će biti korištena za verificiranje zahtjeva.<br />Onemogućene opcije nisu dostupne tijekom podešavanja.',
'RECAPTCHA_V3_METHOD_CURL'=>'cURL',
// <!-- Kocka je hičena! -->
'RECAPTCHA_V3_METHOD_POST'=>'POST',
'RECAPTCHA_V3_METHOD_SOCKET'=>'Socket',
'RECAPTCHA_V3_THRESHOLD_DEFAULT'=>'Zadani prag ograničenja',
'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'=>'Koristi se kada niti jedna od drugih radnji nije primjenjiva.',
'RECAPTCHA_V3_THRESHOLD_LOGIN'=>'Prag ograničenja prijava (login)',
'RECAPTCHA_V3_THRESHOLD_POST'=>'Prag ograničenja postova',
'RECAPTCHA_V3_THRESHOLD_REGISTER'=>'Prag ograničenja registriranja',
'RECAPTCHA_V3_THRESHOLD_REPORT'=>'Prag ograničenja prijava (report)',
'RECAPTCHA_V3_THRESHOLDS'=>'Pragovi ograničenja',
'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'=>'reCAPTCHA v3 vraća rezultat (<samp>1.0</samp> je najvjerojatnije dobra interakcija, <samp>0.0</samp> je najvjerojatnije robot)[ovdje je moguće podesiti minimalan rezultat po radnji].',
'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'=>'reCAPTCHA v3 zahtijeva poznavanje dostupne metode za koju želiš da bude korištena prilikom verificiranja zahtjeva.',
]);

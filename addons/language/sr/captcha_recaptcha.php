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
	'RECAPTCHA_LANG'				=> 'sr',

	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'			=> 'reCaptcha v3',

	'RECAPTCHA_INCORRECT'				=> 'Решење које сте пружили је неисправно',
	'RECAPTCHA_NOSCRIPT'				=> 'Молимо омогућите JavaScript у вашем прегледачу да бисте учитали изазов.',
	'RECAPTCHA_NOT_AVAILABLE'			=> 'У настојању да користите reCaptcha, морате направити налог на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_INVISIBLE'				=> 'Ова CAPTCHA је уствари невидљива. За потврду да ради, мала икона би требало да се појави у доњем десном углу ове странице.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Достигли сте највећи дозвољени број покушаја пријаве.<br>У додатку вашем корисничком имену и лозинци невидљива reCAPTCHA v3 ће бити коришћена за проверу ваше посете.',

	'RECAPTCHA_PUBLIC'				=> 'Кључ сајта',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Ваш reCAPTCHA сајт кључ. Кључеви се могу добити на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Молимо вас, користите reCAPTCHA v2 &gt; Invisible reCAPTCHA badge type.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Ваш reCAPTCHA кључ сајта. Кључеви могу бити добијени на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Молимо вас, користите reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Тајни кључ',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Ваш тајни reCAPTCHA кључ. Кључеви могу бити добијени на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Молимо вас, користите reCAPTCHA v2 &gt; Invisible reCAPTCHA badge type.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Ваш тајни reCAPTCHA кључ. Кључеви могу бити добијени на <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Молимо вас, користите reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'				=> 'Домен захтева',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'		=> 'Домен од којег се прибавља скрипта и користи када се потврђује захтев.<br>Користите <samp>recaptcha.net</samp> када је <samp>google.com</samp> неприступачан.',

	'RECAPTCHA_V3_METHOD'				=> 'Начин захтева',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Начин који се користи када се потврђује захтев.<br>Онемогућене поставке нису доступне у вашој инсталацији.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Подразумевани праг',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Користи се када ниједан од других поступака није применљив.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Праг пријаве',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Праг поруке',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Праг регистрације',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Праг пријаве порука',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Прагови',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 која враћа исход (<samp>1.0</samp> је по свему судећи одговарајуће деловање, <samp>0.0</samp> је по свему судећи робот). Овде можете поставити најмањи исход за акцију.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 захтева да се зна који доступни начин желите да користите када се потврђује захтев.',
]);

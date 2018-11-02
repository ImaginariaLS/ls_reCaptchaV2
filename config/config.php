<?php
/* ---------------------------------------------------------------------------
 * @Plugin Name: reCAPTCHA v2
 * @Description: Replaces the standard captcha for reCAPTCHA v2
 *
 * @LiveStreet Version: 1.0.4
 * @Plugin Version:	1.1
 * ----------------------------------------------------------------------------
*/

// Ключи можно получить здесь https://www.google.com/recaptcha/admin/create


// Получение значений из конфига `config.local.php`
// $config = Config::Get('recaptcha');

// Config for ReCaptcha
$config['recaptcha'] = [
    'public_key'    =>  '',
    'private_key'   =>  ''
];

return $config;
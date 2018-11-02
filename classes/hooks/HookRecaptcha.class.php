<?php
/* ---------------------------------------------------------------------------
 * @Plugin Name: reCAPTCHA v2
 * @Description: Replaces the standard captcha for reCAPTCHA v2
 *
 * @LiveStreet Version: 1.0.4
 * @Plugin Version:	1.1
 * ----------------------------------------------------------------------------
*/

class PluginRecaptcha_HookRecaptcha extends Hook
{

    /*
     * Регистрация событий на хуки
     */
    public function RegisterHook()
    {
        // на странице https://imaginaria.ru/registration/
        $this->addHook('template_block_registration_captcha', 'Recaptcha');

        // в модальном окне регистрации
        $this->addHook('template_block_popup_registration_captcha', 'Recaptcha_modal');
    }

    public function Recaptcha()
    {
        $this->Viewer_Assign('site_public_key', Config::Get('plugin.recaptcha.public_key'));
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'inject.recaptcha.tpl');
    }

    public function Recaptcha_modal()
    {
        $this->Viewer_Assign('site_public_key', Config::Get('plugin.recaptcha.public_key'));

        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__) . 'inject.recaptcha_modal.tpl');
    }
}

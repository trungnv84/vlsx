<?php
class LanguageLoader
{
    private static $language = 'english';
    
    private static function preg_replace_language($matches) {
        if (count($matches) > 1) {
            switch($matches[1]) {
                case 'en':
                self::$language = 'english';
                break;
                case 'vi':
                self::$language = 'vietnamese';
                break;
            }
        }
        return '/';
    }
    
    public static function getCurrentLanguage($leng = 'full') {
        switch($leng) {
            case 'full':
                return self::$language;
            break;
            case 'tiny':
                return substr(self::$language, 0, 2);
            break;
            
        }
    }
    
    public function pre_system() {
        $_SERVER['REQUEST_URI'] = preg_replace_callback('/^\/(en|vi)(\/|$)/i', 'LanguageLoader::preg_replace_language', $_SERVER['REQUEST_URI']);
    }
    
    public function post_controller_constructor() {
        $ci =& get_instance();
        $ci->config->set_item('language', self::$language);
        $ci->load->helper('language');
        $ci->lang->load('common');
    }
}
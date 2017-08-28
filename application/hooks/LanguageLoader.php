<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->config->set_item('language', 'vietnamese');
        $ci->load->helper('language');
        $ci->lang->load('date');
        //\vietnamese
    }
}
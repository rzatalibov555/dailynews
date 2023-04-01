<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LanguageSwitcher extends CI_Controller
{
    public function __construct() {
        parent::__construct();   
          
    }
 
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "az";
       
        $folder_langs = [
            'az',
            'en',
            'ru',
        ];


        if( in_array( $language ,$folder_langs ) )
        {
            $this->session->set_userdata('site_lang', $language);   
        }else{
            $this->session->set_userdata('site_lang', 'az');
        }
        redirect($_SERVER['HTTP_REFERER']);
        
        
        
        
    }
}

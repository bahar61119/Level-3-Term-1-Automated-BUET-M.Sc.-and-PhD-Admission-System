<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
       function __construct() {
           parent::__construct();
           $this->is_logged_in();
       }
       
         function logout(){
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('logged');
            $this->session->sess_destroy();
            delete_cookie("name");
            redirect('login');
        }
        
        function is_logged_in(){
            $is_logged_in= $this->session->userdata('is_logged_in');
            if(!isset($is_logged_in) || $is_logged_in!= true){
                redirect('login');
            }
        }
        
}

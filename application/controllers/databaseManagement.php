<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DatabaseManagement extends CI_Controller {
        
    
	public function index()
	{
             $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='includes/typography';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
	}
        
        public function unsessful_submission()
        {
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $unsccessful['main_content'] = 'unsuccessful_submission';
            $this->load->view('includes/template',$unsccessful);
             }
            else redirect ('login');
        }
        public function notice()
        {
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='notice_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
        }
        
        public function selectedListForAdmissionTest()
        {
             $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='selectedListForAdmissionTest_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        
        public function selectedListForAdmission()
        {
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='selectedListForAdmission_view';
            $this->load->view('includes/template',$data);
              }
            else redirect ('login');
        }
        
        public function download()
        {
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='download_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function contact()
        {
             $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='contact_view';
            $this->load->view('includes/template',$data);
              }
            else redirect ('login');
        }
        
        public function help()
        {
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
            $data['main_content']='help_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
        }
        
        
        
}

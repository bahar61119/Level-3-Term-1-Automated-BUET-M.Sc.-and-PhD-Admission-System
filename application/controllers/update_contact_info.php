<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_contact_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_present_address($APPLICANT_SERIAL = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('present_address','Present Address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('present_address');
                $COLUMN_NAME = 'PRESENT_ADDRESS';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_CONTACT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
             }
                 }
            else redirect ('login');
        }
        
        public function update_permanent_address($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('permanent_address','Permanent Address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('permanent_address');
                $COLUMN_NAME = 'PERMAMENT_ADDRESS';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_CONTACT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_email($APPLICANT_SERIAL = NULL)
        {
              $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('email');
                $COLUMN_NAME = 'EMAIL';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_CONTACT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_Phone($APPLICANT_SERIAL = NULL, $PHONE_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($PHONE_ID == NULL) redirect ('admin');
            $number= "phone{$PHONE_ID}";
            $this->form_validation->set_rules($number,'Phone','trim|required|numeric|min_length[6]|max_length[20]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($number);
                $COLUMN_NAME = 'PHONE_NUM';
                $this->update_model->update_table_phone($this->table_library->TABLES['PHONE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $PHONE_ID);
                
                redirect("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        function alpha_with_space_check($str)
	{
                $len = strlen($str);
                if (preg_match("/[[:space:]]/", $str) || preg_match("/[[:alpha:]]/", $str) ){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('alpha_with_space_check', 'The %s should contain only alpha and space character.');
                    return FALSE;
                }
               
	}
        
       
}
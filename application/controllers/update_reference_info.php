<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_reference_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_referencename($APPLICANT_SERIAL = NULL, $REFERENCE_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($REFERENCE_ID == NULL) redirect ('admin');
            $ref_name_temp= "referencename{$REFERENCE_ID}";
            $this->form_validation->set_rules($ref_name_temp,'Reference name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($ref_name_temp);
                $COLUMN_NAME = 'REF_NAME';
                $this->update_model->update_table_phone($this->table_library->TABLES['REFERENCE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $REFERENCE_ID);
                
                redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_referenceaddress($APPLICANT_SERIAL = NULL, $REFERENCE_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($REFERENCE_ID == NULL) redirect ('admin');
            $ref_address_temp= "referenceaddress{$REFERENCE_ID}";
            $this->form_validation->set_rules($ref_address_temp,'Reference address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($ref_address_temp);
                $COLUMN_NAME = 'REF_ADDRESS';
                $this->update_model->update_table_phone($this->table_library->TABLES['REFERENCE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $REFERENCE_ID);
                
                redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_referencephone($APPLICANT_SERIAL = NULL, $REFERENCE_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($REFERENCE_ID == NULL) redirect ('admin');
            $ref_phone_temp= "referencephone{$REFERENCE_ID}";
            $this->form_validation->set_rules($ref_phone_temp,'Reference Phone','trim|required|numeric|min_length[6]|max_length[15]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($ref_phone_temp);
                $COLUMN_NAME = 'REF_MOBILE';
                $this->update_model->update_table_phone($this->table_library->TABLES['REFERENCE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $REFERENCE_ID);
                
                redirect("applicant_info/REFERENCE/$APPLICANT_SERIAL");
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

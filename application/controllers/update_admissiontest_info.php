<?php

class Update_admissiontest_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_admissiontest($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $admissiontest_temp= "admissiontest";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($admissiontest_temp);
                $COLUMN_NAME = 'PRESENT_ADM_TEST';
                $this->update_model->update_table($this->table_library->TABLES['ADMISSION_TEST'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/ADMISSION_TEST/$APPLICANT_SERIAL/$VALUE");
             
              }
            else redirect ('login');
        }
        
        public function update_admissionmarks($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $admissionmarks_temp= "admissionmarks";
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $result = $this->applicant_info_model->full_table($this->table_library->TABLES['ADMISSION_TEST'],$APPLICANT_SERIAL);
            $IS = $result['PRESENT_ADM_TEST'];
            $this->form_validation->set_rules($admissionmarks_temp,'Admission Test Marks','trim|required|greater_than[-1]|less_than[310]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/ADMISSION_TEST/$APPLICANT_SERIAL/$IS");
            else
            {
                
                $this->load->model('update_model');
                $VALUE = $this->input->post($admissionmarks_temp);
                $COLUMN_NAME = 'MARKS';
                $this->update_model->update_table($this->table_library->TABLES['ADMISSION_TEST'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
            }
            
            redirect("applicant_info/ADMISSION_TEST/$APPLICANT_SERIAL/$IS");
              }
            else redirect ('login');
        }
        
        
        
}
<?php

class Update_eligibility_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_eligibilityfulfilminreq($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $eligibilityfulfilminreq_temp= "eligibilityfulfilminreq";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($eligibilityfulfilminreq_temp);
                $COLUMN_NAME = 'FULFILL_MIN_REQUIREMENT';
                $this->update_model->update_table($this->table_library->TABLES['ELIGIBILITY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/ELIGIBILITY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_eligibilityadmissiontest($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $eligibilityadmissiontest_temp= "eligibilityadmissiontest";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($eligibilityadmissiontest_temp);
                $COLUMN_NAME = 'IS_ELIGIBLE_ADM_TEST';
                $this->update_model->update_table($this->table_library->TABLES['ELIGIBILITY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/ELIGIBILITY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
}
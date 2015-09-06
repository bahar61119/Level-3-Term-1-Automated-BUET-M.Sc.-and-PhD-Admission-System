<?php

class Update_job_experience_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_jobdesignation($APPLICANT_SERIAL = NULL, $JOB_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($JOB_ID == NULL) redirect ('admin');
            $jobdesignation_temp= "jobdesignation{$JOB_ID}";
            $this->form_validation->set_rules($jobdesignation_temp,'Designation','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($jobdesignation_temp);
                $COLUMN_NAME = 'DESIGNATION';
                $this->update_model->update_table_phone($this->table_library->TABLES['JOB_EXP'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $JOB_ID);
                
                redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_jobdescription($APPLICANT_SERIAL = NULL, $JOB_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($JOB_ID == NULL) redirect ('admin');
            $jobdescription_temp= "jobdescription{$JOB_ID}";
            $this->form_validation->set_rules($jobdescription_temp,'Job Description','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($jobdescription_temp);
                $COLUMN_NAME = 'JOB_DESCRIPTION';
                $this->update_model->update_table_phone($this->table_library->TABLES['JOB_EXP'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $JOB_ID);
                
                redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_joborganization($APPLICANT_SERIAL = NULL, $JOB_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($JOB_ID == NULL) redirect ('admin');
            $joborganization_temp= "joborganization{$JOB_ID}";
            $this->form_validation->set_rules($joborganization_temp,'Organization name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($joborganization_temp);
                $COLUMN_NAME = 'EXP_ORGANIZATION';
                $this->update_model->update_table_phone($this->table_library->TABLES['JOB_EXP'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $JOB_ID);
                
                redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_jobdurationfrom($APPLICANT_SERIAL = NULL, $JOB_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($JOB_ID == NULL) redirect ('admin');
            $jobdurationfrom_temp= "jobdurationfrom{$JOB_ID}";
            $this->form_validation->set_rules($jobdurationfrom_temp,'Job Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($jobdurationfrom_temp);
                $COLUMN_NAME = 'EXP_DURATION_FROM';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['JOB_EXP'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $JOB_ID);
                
                redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_jobdurationto($APPLICANT_SERIAL = NULL, $JOB_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($JOB_ID == NULL) redirect ('admin');
            $jobdurationto_temp= "jobdurationto{$JOB_ID}";
            $this->form_validation->set_rules($jobdurationto_temp,'Job Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($jobdurationto_temp);
                $COLUMN_NAME = 'EXP_DURATION_TO';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['JOB_EXP'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $JOB_ID);
                
                redirect("applicant_info/JOB_EXP/$APPLICANT_SERIAL");
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
        
        public function duration_check($duration)
	{
            $current_year = idate('Y');
            $current_yday = idate('z');
            
	    $dateTime = new DateTime($duration);
	    $year = $dateTime->format('Y');
            $month = $dateTime->format('m');
            $day = $dateTime->format('d');
            
            $check = ($current_year - $year-1) * 365 ;
            $yday = 365-($month-1)*30-$day;
            $check += ($yday+$current_yday);
            $check /=365;
            
            if ($check >=0)
            {
                return TRUE;
            } 
            else 
            {
                $this->form_validation->set_message('duration_check', 'The %s should be passed current date');
                return FALSE;
            }
               
	}
        
        
}

<?php

class Update_secondary_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_secondarydegreefrom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreefrom_temp= "secondarydegreefrom";
            $this->form_validation->set_rules($secondarydegreefrom_temp,'Secondary degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreefrom_temp);
                $COLUMN_NAME = 'CER_DEG_OBT_FROM';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        
        
        public function update_secondarydegreename($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreename_temp= "secondarydegreename";
            $this->form_validation->set_rules($secondarydegreename_temp,'Secondary Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreename_temp);
                $COLUMN_NAME = 'DEGREE_NAME';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
       
        public function update_secondarydegreeboard($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreeboard_temp= "secondarydegreeboard";
            $this->form_validation->set_rules($secondarydegreeboard_temp,'Secondary Degree board','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreeboard_temp);
                $COLUMN_NAME = 'BOARD';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
       
        
        public function update_secondarydegreepassingyear($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreepassingyear_temp= "secondarydegreepassingyear";
            $this->form_validation->set_rules($secondarydegreepassingyear_temp,'Secondary Passing Year','trim|required|callback_year_check|exact_length[4]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreepassingyear_temp);
                $COLUMN_NAME = 'PASSING_YEAR';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreedurationfrom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreedurationfrom_temp= "secondarydegreedurationfrom";
            $this->form_validation->set_rules($secondarydegreedurationfrom_temp,'Secondary Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreedurationfrom_temp);
                $COLUMN_NAME = 'DURATION_FROM';
                $this->update_model->update_table_date($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreedurationto($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreedurationto_temp= "secondarydegreedurationto";
            $this->form_validation->set_rules($secondarydegreedurationto_temp,'Secondary Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreedurationto_temp);
                $COLUMN_NAME = 'DURATION_TO';
                $this->update_model->update_table_date($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreeduration($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreeduration_temp= "secondarydegreeduration";
            $this->form_validation->set_rules($secondarydegreeduration_temp,'Secondary Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreeduration_temp);
                $COLUMN_NAME = 'DURATION_OF_DEGREE';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_secondarydegreemajor($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreemajor_temp= "secondarydegreemajor";
            $this->form_validation->set_rules($secondarydegreemajor_temp,'Secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreemajor_temp);
                $COLUMN_NAME = 'MAJOR_FIELD_SPECIALIZATION';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreecmtfromeqcom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreecmtfromeqcom_temp= "secondarydegreecmtfromeqcom";
            $this->form_validation->set_rules($secondarydegreecmtfromeqcom_temp,'Secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreecmtfromeqcom_temp);
                $COLUMN_NAME = 'CMT_EQUIVALENCE_COMMITTEE';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreegpa($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreegpa_temp= "secondarydegreegpa";
            $this->form_validation->set_rules($secondarydegreegpa_temp,'Secondary Grade','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreegpa_temp);
                $COLUMN_NAME = 'GPA';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($secondarydegreegpa_temp)>3.5) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'GPA_AB_3_5';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($secondarydegreegpa_temp)<2) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'GPA_LESS_2';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_secondarydegreegradescale($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreegradescale_temp= "secondarydegreegradescale";
            $this->form_validation->set_rules($secondarydegreegradescale_temp,'Secondary Grade scale','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreegradescale_temp);
                $COLUMN_NAME = 'GPA_SCALE';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreepermarks($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreepermarks_temp= "secondarydegreepermarks";
            $this->form_validation->set_rules($secondarydegreepermarks_temp,'Secondary Grade','trim|required|greater_than[0]|less_than[101]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreepermarks_temp);
                $COLUMN_NAME = 'PER_MARKS';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($secondarydegreepermarks_temp)>=60) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'FIRST_DIV';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($secondarydegreepermarks_temp) <45) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'THIRD_DIV';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreetotalmarks($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreetotalmarks_temp= "secondarydegreetotalmarks";
            $this->form_validation->set_rules($secondarydegreetotalmarks_temp,'Secondary Grade scale','trim|required|greater_than[0]|less_than[2000]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreetotalmarks_temp);
                $COLUMN_NAME = 'TOTAL_MARKS';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
       
        
      
        public function update_secondarydegreetranscript($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreetranscript_temp= "secondarydegreetranscript";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreetranscript_temp);
                $COLUMN_NAME = 'TRANSCRIPT';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_secondarydegreecertificate($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $secondarydegreecertificate_temp= "secondarydegreecertificate";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($secondarydegreecertificate_temp);
                $COLUMN_NAME = 'CERTIFICATE';
                $this->update_model->update_table($this->table_library->TABLES['SECONDARY_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/SECONDARY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
       
        
        
        ////////////////////////////////
        public function alpha_with_space_check($str)
	{
                $len = strlen($str);
                if (preg_match("/[[:space:]]/", $str) || preg_match("/[[:alpha:]]/", $str) ){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('alpha_with_space_check', 'The %s should contain only alpha and space character.');
                    return FALSE;
                }
               
	}
        
        public function year_check($str)
	{
                
            $current_year = idate('Y');
            
	    $year = (int)$str;
            
            if ($current_year > $year)
            {
                return TRUE;
            } 
            else 
            {
                $this->form_validation->set_message('year_check', 'The %s should less than current year');
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

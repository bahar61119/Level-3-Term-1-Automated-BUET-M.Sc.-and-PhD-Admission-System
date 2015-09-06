<?php

class Update_higher_secondary_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_higher_secondarydegreefrom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreefrom_temp= "higher_secondarydegreefrom";
            $this->form_validation->set_rules($higher_secondarydegreefrom_temp,'Higher_secondary degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreefrom_temp);
                $COLUMN_NAME = 'CER_DEG_OBT_FROM';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        
        
        public function update_higher_secondarydegreename($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreename_temp= "higher_secondarydegreename";
            $this->form_validation->set_rules($higher_secondarydegreename_temp,'Higher_secondary Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreename_temp);
                $COLUMN_NAME = 'DEGREE_NAME';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
       
        public function update_higher_secondarydegreeboard($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreeboard_temp= "higher_secondarydegreeboard";
            $this->form_validation->set_rules($higher_secondarydegreeboard_temp,'Higher_secondary Degree board','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreeboard_temp);
                $COLUMN_NAME = 'BOARD';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
       
        
        public function update_higher_secondarydegreepassingyear($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreepassingyear_temp= "higher_secondarydegreepassingyear";
            $this->form_validation->set_rules($higher_secondarydegreepassingyear_temp,'Higher_secondary Passing Year','trim|required|callback_year_check|exact_length[4]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreepassingyear_temp);
                $COLUMN_NAME = 'PASSING_YEAR';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreedurationfrom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreedurationfrom_temp= "higher_secondarydegreedurationfrom";
            $this->form_validation->set_rules($higher_secondarydegreedurationfrom_temp,'Higher_secondary Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreedurationfrom_temp);
                $COLUMN_NAME = 'DURATION_FROM';
                $this->update_model->update_table_date($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreedurationto($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreedurationto_temp= "higher_secondarydegreedurationto";
            $this->form_validation->set_rules($higher_secondarydegreedurationto_temp,'Higher_secondary Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreedurationto_temp);
                $COLUMN_NAME = 'DURATION_TO';
                $this->update_model->update_table_date($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreeduration($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreeduration_temp= "higher_secondarydegreeduration";
            $this->form_validation->set_rules($higher_secondarydegreeduration_temp,'Higher_secondary Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreeduration_temp);
                $COLUMN_NAME = 'DURATION_OF_DEGREE';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_higher_secondarydegreemajor($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreemajor_temp= "higher_secondarydegreemajor";
            $this->form_validation->set_rules($higher_secondarydegreemajor_temp,'Higher_secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreemajor_temp);
                $COLUMN_NAME = 'MAJOR_FIELD_SPECIALIZATION';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreecmtfromeqcom($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreecmtfromeqcom_temp= "higher_secondarydegreecmtfromeqcom";
            $this->form_validation->set_rules($higher_secondarydegreecmtfromeqcom_temp,'Higher_secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreecmtfromeqcom_temp);
                $COLUMN_NAME = 'CMT_EQUIVALENCE_COMMITTEE';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreegpa($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreegpa_temp= "higher_secondarydegreegpa";
            $this->form_validation->set_rules($higher_secondarydegreegpa_temp,'Higher_secondary Grade','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreegpa_temp);
                $COLUMN_NAME = 'GPA';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($higher_secondarydegreegpa_temp)>3.5) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'GPA_AB_3_5';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($higher_secondarydegreegpa_temp)<2) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'GPA_LESS_2';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_higher_secondarydegreegradescale($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreegradescale_temp= "higher_secondarydegreegradescale";
            $this->form_validation->set_rules($higher_secondarydegreegradescale_temp,'Higher_secondary Grade scale','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreegradescale_temp);
                $COLUMN_NAME = 'GPA_SCALE';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreepermarks($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreepermarks_temp= "higher_secondarydegreepermarks";
            $this->form_validation->set_rules($higher_secondarydegreepermarks_temp,'Higher_secondary Grade','trim|required|greater_than[0]|less_than[101]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreepermarks_temp);
                $COLUMN_NAME = 'PER_MARKS';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($higher_secondarydegreepermarks_temp)>=60) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'FIRST_DIV';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                if($this->input->post($higher_secondarydegreepermarks_temp) <45) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'THIRD_DIV';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreetotalmarks($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreetotalmarks_temp= "higher_secondarydegreetotalmarks";
            $this->form_validation->set_rules($higher_secondarydegreetotalmarks_temp,'Higher_secondary Grade scale','trim|required|greater_than[0]|less_than[2000]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreetotalmarks_temp);
                $COLUMN_NAME = 'TOTAL_MARKS';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
       
        
      
        public function update_higher_secondarydegreetranscript($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreetranscript_temp= "higher_secondarydegreetranscript";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreetranscript_temp);
                $COLUMN_NAME = 'TRANSCRIPT';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_higher_secondarydegreecertificate($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $higher_secondarydegreecertificate_temp= "higher_secondarydegreecertificate";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($higher_secondarydegreecertificate_temp);
                $COLUMN_NAME = 'CERTIFICATE';
                $this->update_model->update_table($this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL");
             
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

<?php

class Update_msc_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_mscdegreefrom($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreefrom_temp= "mscdegreefrom{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreefrom_temp,'MSc degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreefrom_temp);
                $COLUMN_NAME = 'CER_DEG_OBT_FROM';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_msccredittransfer($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $msccredittransfer_temp= "msccredittransfer{$MSC_ID}";
           
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($msccredittransfer_temp);
                $COLUMN_NAME = 'CREDIT_TRANSFER';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             
              }
            else redirect ('login');
        }
        
        
        public function update_mscdegreename($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreename_temp= "mscdegreename{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreename_temp,'MSc Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreename_temp);
                $COLUMN_NAME = 'DEGREE_NAME';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreecreditearned($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreecreditearned_temp= "mscdegreecreditearned{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreecreditearned_temp,'Bsc credit earned','trim|required|numeric|min_length[1]|max_length[5]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreecreditearned_temp);
                $COLUMN_NAME = 'CREDIT_EARNED';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreecreditearnedwithoutexemp($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreecreditearnedwithoutexemp_temp= "mscdegreecreditearnedwithoutexemp{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreecreditearnedwithoutexemp_temp,'Bsc credit earned without exemption','trim|required|numeric|min_length[1]|max_length[5]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreecreditearnedwithoutexemp_temp);
                $COLUMN_NAME = 'CRE_EARN_WITHOUT_EXEMPTION';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreepassingyear($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreepassingyear_temp= "mscdegreepassingyear{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreepassingyear_temp,'MSc Passing Year','trim|required|callback_year_check|exact_length[4]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreepassingyear_temp);
                $COLUMN_NAME = 'PASSING_YEAR';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreedurationfrom($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreedurationfrom_temp= "mscdegreedurationfrom{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreedurationfrom_temp,'MSc Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreedurationfrom_temp);
                $COLUMN_NAME = 'DURATION_FROM';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreedurationto($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreedurationto_temp= "mscdegreedurationto{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreedurationto_temp,'MSc Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreedurationto_temp);
                $COLUMN_NAME = 'DURATION_TO';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreeduration($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreeduration_temp= "mscdegreeduration{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreeduration_temp,'MSc Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreeduration_temp);
                $COLUMN_NAME = 'DURATION_OF_DEGREE';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_mscdegreemajor($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreemajor_temp= "mscdegreemajor{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreemajor_temp,'MSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreemajor_temp);
                $COLUMN_NAME = 'MAJOR_FIELD_SPECIALIZATION';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreecmtfromeqcom($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreecmtfromeqcom_temp= "mscdegreecmtfromeqcom{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreecmtfromeqcom_temp,'MSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreecmtfromeqcom_temp);
                $COLUMN_NAME = 'CMT_EQUIVALENCE_COMMITTEE';
                $this->update_model->update_table_phone($this->table_library->TABLES['MSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreecgpa($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreecgpa_temp= "mscdegreecgpa{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreecgpa_temp,'MSc Grade','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreecgpa_temp);
                $COLUMN_NAME = 'CGPA';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                if($this->input->post($mscdegreecgpa_temp)>2.75) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'CGPA_AB_2_7_5';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_mscdegreegradescale($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreegradescale_temp= "mscdegreegradescale{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreegradescale_temp,'MSc Grade scale','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreegradescale_temp);
                $COLUMN_NAME = 'CGPA_SCALE';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreepermarks($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreepermarks_temp= "mscdegreepermarks{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreepermarks_temp,'MSc Grade','trim|required|greater_than[0]|less_than[101]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreepermarks_temp);
                $COLUMN_NAME = 'PER_MARKS';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                if($this->input->post($mscdegreepermarks_temp)>55) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'MARKS_AB_55_PER';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreetotalmarks($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreetotalmarks_temp= "mscdegreetotalmarks{$MSC_ID}";
            $this->form_validation->set_rules($mscdegreetotalmarks_temp,'MSc Grade scale','trim|required|greater_than[0]|less_than[2000]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreetotalmarks_temp);
                $COLUMN_NAME = 'TOTAL_MARKS';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreefrombuetdepartment($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreefrombuetdepartment_temp= "mscdegreefrombuetdepartment{$MSC_ID}";
            $this->form_validation->set_rules( $mscdegreefrombuetdepartment_temp,'Buet UnderGratuate Department','trim|required|callback_option_select_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreefrombuetdepartment_temp);
                $COLUMN_NAME = 'DEPARTMENT';
                $this->update_model->update_table_msc($this->table_library->TABLES['BUET_MASTERS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_mscdegreebuetstid($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreebuetstid_temp= "mscdegreebuetstid{$MSC_ID}";
            $this->form_validation->set_rules( $mscdegreebuetstid_temp,'Buet UnderGratuate Id','trim|required|numeric|min_length[5]|max_length[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreebuetstid_temp);
                $COLUMN_NAME = 'STUDENT_ID';
                $this->update_model->update_table_msc($this->table_library->TABLES['BUET_MASTERS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreebuetdsw($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreebuetdsw_temp= "mscdegreebuetdsw{$MSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreebuetdsw_temp);
                $COLUMN_NAME = 'TESTIMONIAL_DSW_PROVIDED';
                $this->update_model->update_table_msc($this->table_library->TABLES['BUET_MASTERS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_mscdegreebuetdswcmt($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreebuetdswcmt_temp= "mscdegreebuetdswcmt{$MSC_ID}";
            $this->form_validation->set_rules( $mscdegreebuetdswcmt_temp,'Buet UnderGratuate Department','trim|required|callback_option_select_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreebuetdswcmt_temp);
                $COLUMN_NAME = 'CMT_DSW_OFFICE';
                $this->update_model->update_table_msc($this->table_library->TABLES['BUET_MASTERS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             }
              }
            else redirect ('login');
        }
        
        public function update_mscdegreetranscript($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreetranscript_temp= "mscdegreetranscript{$MSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreetranscript_temp);
                $COLUMN_NAME = 'TRANSCRIPT';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             
              }
            else redirect ('login');
        }
        
        public function update_mscdegreecertificate($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreecertificate_temp= "mscdegreecertificate{$MSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreecertificate_temp);
                $COLUMN_NAME = 'CERTIFICATE';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             
              }
            else redirect ('login');
        }
        
         public function update_mscdegreetestimonial($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreetestimonial_temp= "mscdegreetestimonial{$MSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreetestimonial_temp);
                $COLUMN_NAME = 'TESTIMONIAL';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             
              }
            else redirect ('login');
        }
        
         public function update_mscdegreetestimonialauthorized($APPLICANT_SERIAL = NULL, $MSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
                
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($MSC_ID == NULL) redirect ('admin');
            $mscdegreetestimonialauthorized_temp= "mscdegreetestimonialauthorized{$MSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($mscdegreetestimonialauthorized_temp);
                $COLUMN_NAME = 'TESTIMONIAL_AUTHORIZED_PERSON';
                $this->update_model->update_table_msc($this->table_library->TABLES['MSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $MSC_ID);
                
                
                redirect("applicant_info/MSC/$APPLICANT_SERIAL/PhD");
             
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

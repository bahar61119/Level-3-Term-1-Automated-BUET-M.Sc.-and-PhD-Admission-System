<?php

class Update_bsc_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_bscdegreefrom($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreefrom_temp= "bscdegreefrom{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreefrom_temp,'BSc degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreefrom_temp);
                $COLUMN_NAME = 'CER_DEG_OBT_FROM';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bsccredittransfer($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bsccredittransfer_temp= "bsccredittransfer{$BSC_ID}";
           
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bsccredittransfer_temp);
                $COLUMN_NAME = 'CREDIT_TRANSFER';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        
        public function update_bscdegreename($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreename_temp= "bscdegreename{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreename_temp,'BSc Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreename_temp);
                $COLUMN_NAME = 'DEGREE_NAME';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreecreditearned($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreecreditearned_temp= "bscdegreecreditearned{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreecreditearned_temp,'Bsc credit earned','trim|required|numeric|min_length[1]|max_length[5]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreecreditearned_temp);
                $COLUMN_NAME = 'CREDIT_EARNED';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreecreditearnedwithoutexemp($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreecreditearnedwithoutexemp_temp= "bscdegreecreditearnedwithoutexemp{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreecreditearnedwithoutexemp_temp,'Bsc credit earned without exemption','trim|required|numeric|min_length[1]|max_length[5]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreecreditearnedwithoutexemp_temp);
                $COLUMN_NAME = 'CRE_EARN_WITHOUT_EXEMPTION';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreepassingyear($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreepassingyear_temp= "bscdegreepassingyear{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreepassingyear_temp,'BSc Passing Year','trim|required|callback_year_check|exact_length[4]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreepassingyear_temp);
                $COLUMN_NAME = 'PASSING_YEAR';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreedurationfrom($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreedurationfrom_temp= "bscdegreedurationfrom{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreedurationfrom_temp,'BSc Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreedurationfrom_temp);
                $COLUMN_NAME = 'DURATION_FROM';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreedurationto($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreedurationto_temp= "bscdegreedurationto{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreedurationto_temp,'BSc Duration From','trim|required|callback_duration_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreedurationto_temp);
                $COLUMN_NAME = 'DURATION_TO';
                $this->update_model->update_table_date_with_id($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreeduration($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreeduration_temp= "bscdegreeduration{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreeduration_temp,'BSc Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreeduration_temp);
                $COLUMN_NAME = 'DURATION_OF_DEGREE';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_bscdegreemajor($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreemajor_temp= "bscdegreemajor{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreemajor_temp,'BSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreemajor_temp);
                $COLUMN_NAME = 'MAJOR_FIELD_SPECIALIZATION';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreecmtfromeqcom($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreecmtfromeqcom_temp= "bscdegreecmtfromeqcom{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreecmtfromeqcom_temp,'BSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreecmtfromeqcom_temp);
                $COLUMN_NAME = 'CMT_EQUIVALENCE_COMMITTEE';
                $this->update_model->update_table_phone($this->table_library->TABLES['BSC_BASIC_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreecgpa($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreecgpa_temp= "bscdegreecgpa{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreecgpa_temp,'BSc Grade','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreecgpa_temp);
                $COLUMN_NAME = 'CGPA';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                if($this->input->post($bscdegreecgpa_temp)>2.5) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'CGPA_AB_2_5';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_bscdegreegradescale($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreegradescale_temp= "bscdegreegradescale{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreegradescale_temp,'BSc Grade scale','trim|required|greater_than[0]|less_than[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreegradescale_temp);
                $COLUMN_NAME = 'CGPA_SCALE';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_CGPA'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreepermarks($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreepermarks_temp= "bscdegreepermarks{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreepermarks_temp,'BSc Grade','trim|required|greater_than[0]|less_than[101]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreepermarks_temp);
                $COLUMN_NAME = 'PER_MARKS';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                if($this->input->post($bscdegreepermarks_temp)>50) $VALUE ='yes';
                else $VALUE ='no';
                
                $COLUMN_NAME = 'MARKS_AB_50_PER';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreetotalmarks($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreetotalmarks_temp= "bscdegreetotalmarks{$BSC_ID}";
            $this->form_validation->set_rules($bscdegreetotalmarks_temp,'BSc Grade scale','trim|required|greater_than[0]|less_than[2000]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreetotalmarks_temp);
                $COLUMN_NAME = 'TOTAL_MARKS';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_MARKS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreefrombuetdepartment($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreefrombuetdepartment_temp= "bscdegreefrombuetdepartment{$BSC_ID}";
            $this->form_validation->set_rules( $bscdegreefrombuetdepartment_temp,'Buet UnderGratuate Department','trim|required|callback_option_select_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreefrombuetdepartment_temp);
                $COLUMN_NAME = 'DEPARTMENT';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BUET_GRATUDE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        
        public function update_bscdegreebuetstid($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreebuetstid_temp= "bscdegreebuetstid{$BSC_ID}";
            $this->form_validation->set_rules( $bscdegreebuetstid_temp,'Buet UnderGratuate Id','trim|required|numeric|min_length[5]|max_length[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreebuetstid_temp);
                $COLUMN_NAME = 'STUDENT_ID';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BUET_GRATUDE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreebuetdsw($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreebuetdsw_temp= "bscdegreebuetdsw{$BSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreebuetdsw_temp);
                $COLUMN_NAME = 'TESTIMONIAL_DSW_PROVIDED';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BUET_GRATUDE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_bscdegreebuetdswcmt($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreebuetdswcmt_temp= "bscdegreebuetdswcmt{$BSC_ID}";
            $this->form_validation->set_rules( $bscdegreebuetdswcmt_temp,'Buet UnderGratuate Department','trim|required|callback_option_select_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/BSC/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreebuetdswcmt_temp);
                $COLUMN_NAME = 'CMT_DSW_OFFICE';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BUET_GRATUDE'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_bscdegreetranscript($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreetranscript_temp= "bscdegreetranscript{$BSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreetranscript_temp);
                $COLUMN_NAME = 'TRANSCRIPT';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        public function update_bscdegreecertificate($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreecertificate_temp= "bscdegreecertificate{$BSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreecertificate_temp);
                $COLUMN_NAME = 'CERTIFICATE';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
         public function update_bscdegreetestimonial($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreetestimonial_temp= "bscdegreetestimonial{$BSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreetestimonial_temp);
                $COLUMN_NAME = 'TESTIMONIAL';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
         public function update_bscdegreetestimonialauthorized($APPLICANT_SERIAL = NULL, $BSC_ID= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($BSC_ID == NULL) redirect ('admin');
            $bscdegreetestimonialauthorized_temp= "bscdegreetestimonialauthorized{$BSC_ID}";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($bscdegreetestimonialauthorized_temp);
                $COLUMN_NAME = 'TESTIMONIAL_AUTHORIZED_PERSON';
                $this->update_model->update_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE, $BSC_ID);
                
                
                redirect("applicant_info/BSC/$APPLICANT_SERIAL");
             
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

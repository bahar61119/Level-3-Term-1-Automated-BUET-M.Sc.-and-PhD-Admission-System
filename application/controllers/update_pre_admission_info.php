<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_pre_admission_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        
        public function update_pre_admission_st_id($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('pre_admission_st_id','Previous Student Id','trim|required|numeric|min_length[3]|max_length[10]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('pre_admission_st_id');
                $COLUMN_NAME = 'PRE_STD_ID';
                $this->update_model->update_table($this->table_library->TABLES['PRE_ADMISSION'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
             }
              }
            else redirect ('login');
        }
        
        public function update_pre_admission_dept($APPLICANT_SERIAL = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('pre_admission_dept','Previous Department','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('pre_admission_dept');
                $COLUMN_NAME = 'PRE_DEPT_INST';
                $this->update_model->update_table($this->table_library->TABLES['PRE_ADMISSION'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
             }
             }
            else redirect ('login');
        }
        
        public function update_pre_admission_sem($APPLICANT_SERIAL = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('pre_admission_sem','Previous Semester','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[15]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('pre_admission_sem');
                $COLUMN_NAME = 'PRE_SEMESTER';
                $this->update_model->update_table($this->table_library->TABLES['PRE_ADMISSION'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/yes");
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
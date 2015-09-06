<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_personal_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_name($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('name','Name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('name');
                $COLUMN_NAME = 'APPLICANT_NAME';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
               }
            else redirect ('login');
        }
        
        public function update_father_name($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('father_name','Father\'s name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('father_name');
                $COLUMN_NAME = 'FATHER_NAME';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
              }
            else redirect ('login');
        }
        
        public function update_mother_name($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('mother_name','Mother\'s name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('mother_name');
                $COLUMN_NAME = 'MOTHER_NAME';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_birthday($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('birthday','Birthday','trim|required|callback_birthday_check');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('birthday');
                $COLUMN_NAME = 'BIRTH_DATE';
                $this->update_model->update_table_date($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_birthplace($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('birthplace','Birth Place','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('birthplace');
                $COLUMN_NAME = 'BIRTH_PLACE';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_nationality($APPLICANT_SERIAL = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('nationality','Nationality','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('nationality');
                $COLUMN_NAME = 'NATIONALITY';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_religion($APPLICANT_SERIAL = NULL)
        {
              $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('religion','Religion','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('religion');
                $COLUMN_NAME = 'RELIGION';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
             }
             }
            else redirect ('login');
        }
        
        public function update_marital_status($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $this->form_validation->set_rules('marital_status','Marital Status','trim|required|callback_option_select_check');
            if($this->form_validation->run()==FALSE) echo "ok";// redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post('marital_status');
                $COLUMN_NAME = 'MARITAL_STATUS';
                $this->update_model->update_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL");
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_desire_info extends CI_Controller {
        
	public function index()
	{
            
        }
        public function update_pre_admission($APPLICANT_SERIAL = NULL, $PROGRAM = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($PROGRAM == NULL || ($PROGRAM != 'PhD' && $PROGRAM != 'MSc')) redirect ('admin');
            $this->load->library('form_validation');
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $this->load->model('application_model');
                $VALUE = $this->input->post('pre_admission');
                $COLUMN_NAME = 'PRE_ADMISSION';
                if($VALUE=='no')
                {
                    $result = $this->application_model->delete_row($this->table_library->TABLES['PRE_ADMISSION'],$APPLICANT_SERIAL);
                    $this->update_model->update_table($this->table_library->TABLES['CURRENT_ADMISSION_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                }
                else if($VALUE=='yes')
                {
                    $this->form_validation->set_rules('pre_std_id','Previous Student Id','trim|required|numeric|min_length[7]|max_length[10]');
                    $this->form_validation->set_rules('pre_dept_inst','Previous Department','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    $this->form_validation->set_rules('pre_semester','Previous Semester','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[15]');
                
                    if($this->form_validation->run()==FALSE)
                    {
                        redirect("applicant_info/CURRENT_ADMISSION_INFO/$APPLICANT_SERIAL");
                    }
                    else
                    {
                        $PRE_ADMISSION = array(
                            'PRE_STD_ID'=>$this->input->post('pre_std_id'),
                            'PRE_DEPT_INST'=>$this->input->post('pre_dept_inst'),
                            'PRE_SEMESTER'=>$this->input->post('pre_semester')
                        );
                        $result = $this->application_model->student_pre_admission_info_submission($APPLICANT_SERIAL,$PROGRAM, $PRE_ADMISSION  );
                        if($result) $this->update_model->update_table($this->table_library->TABLES['CURRENT_ADMISSION_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                    }
                }
                redirect("applicant_info/CURRENT_ADMISSION_INFO/$APPLICANT_SERIAL");
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
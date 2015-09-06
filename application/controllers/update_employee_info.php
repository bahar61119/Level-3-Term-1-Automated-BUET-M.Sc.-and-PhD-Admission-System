<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_employee_info extends CI_Controller {
        
	public function index()
	{
            
        }
        public function update_employee($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $this->load->model('application_model');
                $VALUE = $this->input->post('employee');
                
                if($VALUE=='no')
                {
                    
                    $this->load->library('table_library');
                    $this->load->model('update_model');
                    $VALUE = $this->input->post('employee');
                    $COLUMN_NAME = 'IS_EMPLOYED';
                    $this->update_model->update_table($this->table_library->TABLES['EMPLOYEE_STATUS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);

                    $VALUE = 'Not Employee';
                    $COLUMN_NAME = 'EMP_STATUS';
                    $this->update_model->update_table($this->table_library->TABLES['EMPLOYEE_STATUS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);

                    redirect("applicant_info/EMPLOYEE_STATUS/$APPLICANT_SERIAL");
             
                  }
                else if($VALUE=='yes')
                {
                    $this->load->library('table_library');
                    $this->load->model('update_model');
                    $VALUE = $this->input->post('employee');
                    $COLUMN_NAME = 'IS_EMPLOYED';
                    $this->update_model->update_table($this->table_library->TABLES['EMPLOYEE_STATUS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);

                    if($this->input->post('employeestatus'))
                    {
                        $VALUE = $this->input->post('employeestatus');
                        $COLUMN_NAME = 'EMP_STATUS';
                        $this->update_model->update_table($this->table_library->TABLES['EMPLOYEE_STATUS'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                    }
                    redirect("applicant_info/EMPLOYEE_STATUS/$APPLICANT_SERIAL");
                }
            
             
                }else redirect ('login');
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
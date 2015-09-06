<?php

class Delete_comment_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function delete_comment($APPLICANT_SERIAL = NULL, $COMMENT = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($COMMENT == NULL) redirect ('admin');
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $COLUMN_NAME = 'COMMENTS';
                $this->update_model->delete_comment($this->table_library->TABLES['COMMENT_ON'], $COLUMN_NAME ,$APPLICANT_SERIAL, $COMMENT);
                            
                redirect("applicant_info/INELIGIBILITY/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
}

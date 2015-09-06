<?php

class Update_addcomment_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_addcomment($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $addcomment_temp= "addcomment";
            $this->form_validation->set_rules($addcomment_temp,'Add Comment','trim|required');
            if($this->form_validation->run()==FALSE) redirect("applicant_info/INELIGIBILITY/$APPLICANT_SERIAL");
            else
            {
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($addcomment_temp);
               
                $COLUMN_NAME = 'COMMENTS';
                $this->update_model->insert_comment($this->table_library->TABLES['COMMENT_ON'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                redirect("applicant_info/INELIGIBILITY/$APPLICANT_SERIAL");
            }
              }
            else redirect ('login');
        }
        
        
        
        
}

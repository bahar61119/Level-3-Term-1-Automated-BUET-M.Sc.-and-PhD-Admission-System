<?php

class Update_document_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_documentrequiredmissingdoc($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $documentrequiredmissingdoc_temp= "documentrequiredmissingdoc";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($documentrequiredmissingdoc_temp);
                $COLUMN_NAME = 'REQUIRED_MISSING_DOC';
                $this->update_model->update_table($this->table_library->TABLES['DOCUMENT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/DOCUMENT_INFO/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
         public function update_documentempcinpresf($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $documentempcinpresf_temp= "documentempcinpresf";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($documentempcinpresf_temp);
                $COLUMN_NAME = 'EMP_LET_CONSENT_PRE_FORM';
                $this->update_model->update_table($this->table_library->TABLES['DOCUMENT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/DOCUMENT_INFO/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
         public function update_documentcermencrehrdoc($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            $documentcermencrehrdoc_temp= "documentcermencrehrdoc";
            
                $this->load->library('table_library');
                $this->load->model('update_model');
                $VALUE = $this->input->post($documentcermencrehrdoc_temp);
                $COLUMN_NAME = 'CER_MEN_TOTAL_CREDIT_HR_EARNED';
                $this->update_model->update_table($this->table_library->TABLES['DOCUMENT_INFO'], $COLUMN_NAME,$APPLICANT_SERIAL, $VALUE);
                
                
                redirect("applicant_info/DOCUMENT_INFO/$APPLICANT_SERIAL");
             
              }
            else redirect ('login');
        }
        
        
        
}

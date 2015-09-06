<?php

class Update_member_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_memberfirstname($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberfirstname_temp= "memberfirstname";
            $this->form_validation->set_rules($memberfirstname_temp,'First Name','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberfirstname_temp);
                $COLUMN_NAME = 'FIRST_NAME';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
        public function update_memberlastname($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberlastname_temp= "memberlastname";
            $this->form_validation->set_rules($memberlastname_temp,'Last Name','trim|required|callback_alpha_with_space_check|min_length[4]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberlastname_temp);
                $COLUMN_NAME = 'LAST_NAME';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
        public function update_memberemail($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberemail_temp= "memberemail";
            $this->form_validation->set_rules($memberemail_temp,'Email Address','trim|required|valid_email');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberemail_temp);
                $COLUMN_NAME = 'EMAIL';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
        public function update_memberdesignation($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberdesignation_temp= "memberdesignation";
            $this->form_validation->set_rules($memberdesignation_temp,'Designation','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[30]');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberdesignation_temp);
                $COLUMN_NAME = 'DESIGNATION';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
        public function update_memberaddress($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberaddress_temp= "memberaddress";
            $this->form_validation->set_rules($memberaddress_temp,'Address','trim|required|callback_alpha_with_space_check|min_length[6]|max_length[50]');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberaddress_temp);
                $COLUMN_NAME = 'ADDRESS';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
        public function update_memberphone($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL || $ID != $id) redirect ('admin');
            $memberphone_temp= "memberphone";
            $this->form_validation->set_rules($memberphone_temp,'Phone','trim|required|numeric|min_length[6]|max_length[15]');
            if($this->form_validation->run()==FALSE) redirect("admin/admin_personal_info");
            else
            {
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberphone_temp);
                $COLUMN_NAME = 'PHONE';
                $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME,$ID, $VALUE);
                
                redirect("admin/admin_personal_info");
             }
              }
            else redirect ('login');
        }
        
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
        
}

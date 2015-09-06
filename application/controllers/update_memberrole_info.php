<?php

class Update_memberrole_info extends CI_Controller {
        
	public function index()
	{
            
        }
        
        public function update_memberrole($ID = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            $id = $this->session->userdata('id');
            if($logged){
            if($ID == NULL) redirect ('admin');
            
            if($ID == $id) redirect("admin_info/admin_individual_info/$ID");
            $memberrole_temp= "memberrole";
            
                $this->load->library('table_library');
                $this->load->model('membership_model');
                $VALUE = $this->input->post($memberrole_temp);
                if($VALUE=='DELETE')
                {
                    
                    $this->membership_model->delete_row($this->table_library->TABLES['MEMBERS'], $ID);
                }
                else
                {
                    $COLUMN_NAME = 'ROLE';
                    $this->membership_model->update_member($this->table_library->TABLES['MEMBERS'], $COLUMN_NAME, $ID, $VALUE);
                }
                
                
                redirect("admin_info/admin_individual_info/$ID");
             
              }
            else redirect ('login');
        
        }
}

<?php

class Membership_model extends CI_Model{
    function validate(){
        /* $this->db->select('ID,FIRST_NAME');
         $this->db->where('USERNAME',$this->input->post('username'));
         $this->db->where('PASSWORD',md5($this->input->post('password')));
         $this->db->where('ROLE!=','pending');
         $query= $this->db->get('MEMBERS');*/
        $pass = "SELECT ID,FIRST_NAME FROM MEMBERS WHERE PASSWORD = ";
        $encrypt_pass = md5($this->input->post('password'));
        $pass.= htmlentities("'{$encrypt_pass}'");
        $pass.=" AND USERNAME=";
        $pass.=htmlentities("'{$this->input->post('username')}'");
        $pass.=" AND ROLE!=";
        $pass.=htmlentities("'PENDING'");
      
        $query= $this->db->query($pass);
  
        $row = $query->result_array();
        
        if($query->num_rows()==0){
            return false;
        }
        else{
           return $row;
        }
    }
    
    function insert_member(){
        
       $data = array(
            'FIRST_NAME' => $this->input->post('firstname') ,
            'LAST_NAME' => $this->input->post('lastname') ,
            'DESIGNATION' => $this->input->post('designation'),
            'ADDRESS' => $this->input->post('address'),
            'PHONE' => $this->input->post('phone'),
            'USERNAME' => $this->input->post('username'),
            'EMAIL' => $this->input->post('emailaddress'),
            'PASSWORD' => md5($this->input->post('password')),
            'ROLE' => 'PENDING'
        );

        $insert = $this->db->insert('MEMBERS', $data); 
        
        /*$new_member_insert_data = "INSERT INTO MEMBERS (FIRST_NAME, LAST_NAME, DESIGNATION, ADDRESS, PHONE, USERNAME, EMAIL, PASSWORD, ROLE) VALUES ( ";
        $new_member_insert_data .=htmlentities("'{$this->input->post('firstname')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('lastname')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('designation')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('address')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('phone')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('username')}', ");
        $new_member_insert_data .=htmlentities("'{$this->input->post('emailaddress')}', ");
        $encrypt_pass = md5($this->input->post('password'));
        $new_member_insert_data .=htmlentities("'{$encrypt_pass}' ");
        $new_member_insert_data .=htmlentities("'pending' ");
        $new_member_insert_data .=")";
        $insert= $this->db->query($new_member_insert_data);*/
        return $insert;
    }
    
    function member_info($USERNAME)
    {
        $query = $this->db->select()
                         ->from('MEMBERS')
                         ->where('USERNAME',$USERNAME);
        $res= $query->get()->result();
        if(!$res) return false;
        $result = array();
        
        foreach($res as $r)
            foreach($r as $title => $value)
            {
                $result[$title] = $value;
            }
        
        return $result;
    }
    
    function delete_row($TABLE_NAME,$ID)
    {
        
        $application_data = "DELETE FROM {$TABLE_NAME} WHERE ID = " ;
        $application_data .=htmlentities("'{$ID}' ");
        
        $this->db->query($application_data);
    }
    
    function update_member($TABLE_NAME, $COLUMN_NAME, $ID, $VALUE)
    {
        $data = array(
               $COLUMN_NAME => $VALUE
            );

        $this->db->where('ID', $ID);
        $this->db->update($TABLE_NAME, $data); 
    }
   
}


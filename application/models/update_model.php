<?php

class Update_model extends CI_Model{
    
    function insert_comment($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE)
    {
        $application_data = "INSERT INTO {$TABLE_NAME} (APPLICANT_SERIAL, {$COLUMN_NAME}) VALUES ( ";
        $application_data .=htmlentities("'{$APPLICANT_SERIAL}', ");
        $application_data .=htmlentities("'{$VALUE}' ");
        $application_data .=")";
        $this->db->query($application_data);
    }
    
    function delete_comment($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE)
    {
        
        $application_data = "DELETE FROM {$TABLE_NAME} WHERE APPLICANT_SERIAL = " ;
        $application_data .=htmlentities("'{$APPLICANT_SERIAL}' ");
        $application_data .=" AND {$COLUMN_NAME} = ";
        $application_data .=htmlentities("'{$VALUE}' ");
        
        $this->db->query($application_data);
    }
    
    function update_table($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE)
    {
        $data = array(
               $COLUMN_NAME => $VALUE
            );

        $this->db->where('APPLICANT_SERIAL', $APPLICANT_SERIAL);
        $this->db->update($TABLE_NAME, $data); 
    }
    
    function update_table_phone($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE, $PHONE_ID)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL)
                         ->where('ID',$PHONE_ID)
                         ->where($COLUMN_NAME,$VALUE);
        $res= $query->get()->result();
        
        if(!$res)
        {
            $data = array(
                   $COLUMN_NAME => $VALUE
                );

            $this->db->where('APPLICANT_SERIAL', $APPLICANT_SERIAL);
            $this->db->where('ID', $PHONE_ID);
            $this->db->update($TABLE_NAME, $data); 
        }
    }
    
    function update_table_bsc($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE, $BSC_ID)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL)
                         ->where('BSC_ID',$BSC_ID)
                         ->where($COLUMN_NAME,$VALUE);
        $res= $query->get()->result();
        
        if(!$res)
        {
            $data = array(
                   $COLUMN_NAME => $VALUE
                );

            $this->db->where('APPLICANT_SERIAL', $APPLICANT_SERIAL);
            $this->db->where('BSC_ID', $BSC_ID);
            $this->db->update($TABLE_NAME, $data); 
        }
    }
    
    function update_table_msc($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE, $MSC_ID)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL)
                         ->where('MSC_ID',$MSC_ID)
                         ->where($COLUMN_NAME,$VALUE);
        $res= $query->get()->result();
        
        if(!$res)
        {
            $data = array(
                   $COLUMN_NAME => $VALUE
                );

            $this->db->where('APPLICANT_SERIAL', $APPLICANT_SERIAL);
            $this->db->where('MSC_ID', $MSC_ID);
            $this->db->update($TABLE_NAME, $data); 
        }
    }
    
    function update_table_date($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE)
    {
        $application_data = "UPDATE ";
        $application_data .=htmlentities("{$TABLE_NAME}");
        $application_data .= " SET ";
        $application_data .=htmlentities("{$COLUMN_NAME}");
        $application_data .= " = ";
        $application_data .=htmlentities("to_date('{$VALUE}','yyyy-mm-dd') ");
        $application_data .= " WHERE ";
        $application_data .=" APPLICANT_SERIAL = ";
        $application_data .=htmlentities("'{$APPLICANT_SERIAL}'");
                
        $query= $this->db->query($application_data);
    }
    
    function update_table_date_with_id($TABLE_NAME, $COLUMN_NAME, $APPLICANT_SERIAL, $VALUE, $ID)
    {
        $application_data = "UPDATE ";
        $application_data .=htmlentities("{$TABLE_NAME}");
        $application_data .= " SET ";
        $application_data .=htmlentities("{$COLUMN_NAME}");
        $application_data .= " = ";
        $application_data .=htmlentities("to_date('{$VALUE}','yyyy-mm-dd') ");
        $application_data .= " WHERE ";
        $application_data .=" APPLICANT_SERIAL = ";
        $application_data .=htmlentities("'{$APPLICANT_SERIAL}'");
        $application_data .=" AND ID = ";
        $application_data .=htmlentities("'{$ID}'");
                
        $query= $this->db->query($application_data);
    }
    
}    

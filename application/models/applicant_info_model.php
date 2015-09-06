<?php

class Applicant_info_model extends CI_Model{
    
    function member_table($TABLE_NAME, $MEMBER_ID)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('ID',$MEMBER_ID);
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
    
    function full_table($TABLE_NAME, $APPLICANT_SERIAL)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL);
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
    
    function full_table_bsc($TABLE_NAME, $APPLICANT_SERIAL, $BSC_ID, $PROGRAM)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL)
                         ->where('BSC_ID',$BSC_ID)
                         ->where('PROGRAM',$PROGRAM);
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
    
    function full_table_msc($TABLE_NAME, $APPLICANT_SERIAL, $MSC_ID, $PROGRAM)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL)
                         ->where('MSC_ID',$MSC_ID)
                         ->where('PROGRAM',$PROGRAM);
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
    
    function full_table_multivalue($TABLE_NAME, $APPLICANT_SERIAL)
    {
        $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->where('APPLICANT_SERIAL',$APPLICANT_SERIAL);
        $res= $query->get()->result();
        if(!$res) return false;
        $result = array();
        
        foreach($res as $r)
        {
            $array = array();
            foreach($r as $title => $value)  $array[$title] = $value;
            $result[] =  $array;
        }
        return $result;
    }
}    

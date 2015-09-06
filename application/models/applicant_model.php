<?php

class Applicant_model extends CI_Model{
    
    function applicant_list($STUDENT_PERSONAL_INFO, $CURRENT_ADMISSION_INFO, $limit, $sort_by, $sort_order, $offset)
    {
        $sort_order = ($sort_order == 'DESC')? 'DESC':'ASC';
        $bool = 0;
        
        if(in_array($sort_by,$STUDENT_PERSONAL_INFO)) $bool = 1;
        else if(in_array($sort_by,$CURRENT_ADMISSION_INFO)) $bool = 2;
        
        if($bool==0)
        {
            $sort_by = 'APPLICANT_SERIAL';
            $bool=1;
        }
        //results query
        
        if($bool == 1)
        {
            $query = $this->db->select('APPLICANT_SERIAL, APPLICANT_NAME')
                     ->from('STUDENT_PERSONAL_INFO')
                     ->limit($limit,$offset)
                     ->order_by($sort_by, $sort_order);
            $res= $query->get()->result();
            $result = array();
            foreach( $res as $r)
            {
                $tmp = array();
                foreach($r as $title => $value) $tmp[$title]= $value;

                $query = $this->db->select('PROGRAM, DEPT_INST, DESIRED_STATUS')
                         ->from('CURRENT_ADMISSION_INFO')
                         ->where('APPLICANT_SERIAL',$r->APPLICANT_SERIAL);
                $gar= $query->get()->result();

                foreach($gar as $t)
                    foreach($t as $title => $value) $tmp[$title]= $value;
                $result[] = $tmp;
            }
        }
        else
        {
            $query = $this->db->select('APPLICANT_SERIAL, PROGRAM, DEPT_INST, DESIRED_STATUS')
                         ->from('CURRENT_ADMISSION_INFO')
                     ->limit($limit,$offset)
                     ->order_by($sort_by, $sort_order);
            $res= $query->get()->result();
            $result = array();
            foreach( $res as $r)
            {
                $tmp = array();
                foreach($r as $title => $value) $tmp[$title]= $value;
                    $query = $this->db->select('APPLICANT_NAME')
                            ->from('STUDENT_PERSONAL_INFO')
                            ->where('APPLICANT_SERIAL',$r->APPLICANT_SERIAL);
                $gar= $query->get()->result();

                foreach($gar as $t)
                    foreach($t as $title => $value) $tmp[$title]= $value;
                $result[] = $tmp;
            }
        }
        //count total applicant
        $query = $this->db->select('COUNT(*) AS COUNT',FALSE)
                 ->from('STUDENT_PERSONAL_INFO');
        $tmp = $query->get()->result();
        $array['APPLICANTS'] = $result;
        $array['TOTAL_APPLICANT'] = $tmp[0]->COUNT;
        
        return $array;
    }
    
    function table_info($TABLE_NAME, $TABLE, $limit, $sort_by, $sort_order, $offset)
    {
        $sort_order = ($sort_order == 'DESC')? 'DESC':'ASC';
        
        if(!in_array($sort_by,$TABLE)) $sort_by = 'APPLICANT_SERIAL';
        
        $query = $this->db->select()
                     ->from($TABLE_NAME)
                     ->limit($limit,$offset)
                     ->order_by($sort_by, $sort_order);
        $res= $query->get()->result();
        $result = array();
        foreach( $res as $r)
        {
                $tmp = array();
                foreach($r as $title => $value) $tmp[$title]= $value;
                $result[] = $tmp;
        }
        
        //count total applicant
        $query = $this->db->select('COUNT(*) AS COUNT',FALSE)
                 ->from('STUDENT_PERSONAL_INFO');
        $tmp = $query->get()->result();
        $array['APPLICANTS'] = $result;
        $array['TOTAL_APPLICANT'] = $tmp[0]->COUNT;
        
        return $array;
        
        
    }
    
    function search_table($SEARCH, $TABLE_NAME, $TABLE, $limit, $sort_by, $sort_order, $offset)
    {
        $sort_order = ($sort_order == 'DESC')? 'DESC':'ASC';
        
        if(!in_array($sort_by,$TABLE)) $sort_by = 'APPLICANT_SERIAL';
        $array = array();
        $count = 0;
        foreach($TABLE as $TITLE)
        {
            $query = $this->db->select()
                         ->from($TABLE_NAME)
                         ->limit($limit,$offset)
                         ->order_by($sort_by, $sort_order);
            if(strlen($SEARCH)) $query->like($TITLE,$SEARCH);
            $res= $query->get()->result();
            $result = array();
            foreach( $res as $r)
            {
                    $tmp = array();
                    foreach($r as $title => $value) $tmp[$title]= $value;
                    $result[] = $tmp;
            }

            //count total applicant
            $query = $this->db->select('COUNT(*) AS COUNT',FALSE)
                     ->from($TABLE_NAME);
            if(strlen($SEARCH)) $query->like($TITLE,$SEARCH);
            $tmp = $query->get()->result();
            
            if($tmp[0]->COUNT> $count)
            {
                $array = $result;
                $count = $tmp[0]->COUNT;
            }
        }
        $array['APPLICANTS'] = $array;
        $array['TOTAL_RESULT'] = $count;
        
        return $array;
        
        
    }
}
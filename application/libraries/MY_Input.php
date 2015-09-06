<?php


class MY_Input{
    
    function save_query($query_array)
    {
        $CI =& get_instance();
        
        //count total applicant
        $query = $CI->db->select('COUNT(*) AS COUNT',FALSE)
                 ->from('SEARCH_QUERY');
        $tmp = $query->get()->result();
         
        if($tmp[0]->COUNT>8) 
        {
           $data = "DELETE FROM SEARCH_QUERY ";
           $CI->db->query($data);
        }
        
        $array = http_build_query($query_array);
        $query = $CI->db->select()
                     ->from('SEARCH_QUERY')
                     ->where('QUERY',$array);
        $res= $query->get()->result();
        if(!$res)
        {
            $CI->db->set('QUERY', $array); 
            $CI->db->insert('SEARCH_QUERY'); 
        
            $query = $CI->db->select()
                         ->from('SEARCH_QUERY');
            $res= $query->get()->result();  
        }
        return $res;
    }
    
    function load_query($query_id)
    {
        $CI =& get_instance();
        $rows = $CI->db->get_where('SEARCH_QUERY',array('ID'=>$query_id))->result();
        $array = array();
        if(isset($rows[0]))
        {
            parse_str($rows[0]->QUERY, $array);
        
            $_GET['category']=$array['amp;category']; ;
            $_GET['search']=$array['search'];
        }
    }
    
    
    function save_pending_query($query_array)
    {
        $CI =& get_instance();
        $array = http_build_query($query_array);
        $query = $CI->db->select()
                     ->from('SEARCH_QUERY')
                     ->where('QUERY',$array);
        $res= $query->get()->result();
        if(!$res)
        {
            $CI->db->set('QUERY', $array); 
            $CI->db->insert('SEARCH_QUERY'); 
        
            $query = $CI->db->select()
                         ->from('SEARCH_QUERY');
            $res= $query->get()->result();  
        }
        return $res;
    }
    
    function load_pending_query($query_id)
    {
        $CI =& get_instance();
        $rows = $CI->db->get_where('SEARCH_QUERY',array('ID'=>$query_id))->result();
        $array = array();
        if(isset($rows[0]))
        {
            parse_str($rows[0]->QUERY, $array);
        
            $_GET['pendingcategory']=$array['pendingcategory'];
        }
    }
}

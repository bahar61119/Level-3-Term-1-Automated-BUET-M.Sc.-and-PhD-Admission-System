<?php

        function alpha_with_space_check($str)
	{
                $len = strlen($str);
                if (preg_match("/[[:space:]]/", $str) || preg_match("/[[:alpha:]]/", $str) ){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('alpha_with_space_check', 'The %s should contain only alpha and space character.');
                    return FALSE;
                }
               
	}
        
        function option_select_check($str)
	{
                
                if ($str!="Select"){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('option_select_check', 'The %s Should not be Select');
                    return FALSE;
                }
               
	}
        function year_check($str)
	{
                
            $current_year = idate('Y');
            
	    $year = (int)$str;
            
            if ($current_year > $year)
            {
                return TRUE;
            } 
            else 
            {
                $this->form_validation->set_message('year_check', 'The %s should less than current year');
                return FALSE;
            }
               
	}
        
        function duration_check($duration)
	{
            $current_year = idate('Y');
            $current_yday = idate('z');
            
	    $dateTime = new DateTime($duration);
	    $year = $dateTime->format('Y');
            $month = $dateTime->format('m');
            $day = $dateTime->format('d');
            
            $check = ($current_year - $year-1) * 365 ;
            $yday = 365-($month-1)*30-$day;
            $check += ($yday+$current_yday);
            $check /=365;
            
            if ($check >=0)
            {
                return TRUE;
            } 
            else 
            {
                $this->form_validation->set_message('duration_check', 'The %s should be passed current date');
                return FALSE;
            }
               
	}
        
        function birthday_check($birthday)
	{
            $current_year = idate('Y');
            $current_yday = idate('z');
            
	    $dateTime = new DateTime($birthday);
	    $year = $dateTime->format('Y');
            $month = $dateTime->format('m');
            $day = $dateTime->format('d');
            
            $check = ($current_year - $year-1) * 365 ;
            $yday = 365-($month-1)*30-$day;
            $check += ($yday+$current_yday);
            $check /=365;
            
            if ($check >=18)
            {
                return TRUE;
            } 
            else 
            {
                $this->form_validation->set_message('birthday_check', 'The %s should be at 18 years old');
                return FALSE;
            }
               
	}

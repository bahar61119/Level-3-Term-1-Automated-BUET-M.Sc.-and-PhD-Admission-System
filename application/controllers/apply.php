<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller {
        
        public function index()
	{
            $logged = $this->session->userdata('is_logged_in');
            if(!$logged){
                $data['main_content']='apply_form/apply_form';
                $this->load->view('includes/template',$data);
            }
            else redirect ('admin');
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
        
        public function option_select_check($str)
	{
                
                if ($str!="Select"){
                    return TRUE;
                } else {
                    $this->form_validation->set_message('option_select_check', 'The %s Should not be Select');
                    return FALSE;
                }
               
	}
        public function year_check($str)
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
        
        public function duration_check($duration)
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
        
        public function birthday_check($birthday)
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
        
        function application_form()
        {
            
           
            $this->load->model('application_model');
            
            $this->form_validation->set_rules('program','program','trim|required|callback_option_select_check');
            $this->form_validation->set_rules('dept_inst','Department','trim|required|callback_option_select_check');
            $this->form_validation->set_rules('division','Division','trim|required|callback_option_select_check');
            $this->form_validation->set_rules('desire_status','Desire Status','trim|required|callback_option_select_check');
            if($this->input->post('is_pre_admission'))
            {
                $this->form_validation->set_rules('pre_std_id','Previous Student Id','trim|required|numeric|min_length[7]|max_length[10]');
                $this->form_validation->set_rules('pre_dept_inst','Previous Department','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                $this->form_validation->set_rules('pre_semester','Previous Semester','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[15]');
            }
            
            $this->form_validation->set_rules('name','Name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('father_name','Father\'s name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('mother_name','Mother\'s name','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('birthday','Birthday','trim|required|callback_birthday_check');
            $this->form_validation->set_rules('birthplace','Birth Place','trim|required');
            $this->form_validation->set_rules('nationality','Nationality','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[30]');
            $this->form_validation->set_rules('religion','Religion','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[30]');
            $this->form_validation->set_rules('sex','Sex','trim|required|callback_option_select_check');
            $this->form_validation->set_rules('marital_status','Marital Status','trim|required|callback_option_select_check');
            $this->form_validation->set_rules('present_address','Present Address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
            $this->form_validation->set_rules('permanent_address','Permanent Address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            
            $phone_total=1;
            while(1)
            {
                $number= "phone{$phone_total}";
                
                if($this->input->post($number))
                {
                    $this->form_validation->set_rules($number,'Phone','trim|required|numeric|min_length[6]|max_length[20]');
                    $phone_total++;
                }
                else break;
            }
            
            if($this->input->post('is_employed'))
            {
                $this->form_validation->set_rules('employee_status','Employee Status','trim|required|callback_option_select_check');
            }
            
            
            if($this->input->post("secondary_degree_obtained_from")=="OTHERS")
                    {
                        $this->form_validation->set_rules('secondary_degree_obtained_from_others','Secondary degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('secondary_degree_obtained_from','Secondary degree obtained from','trim|required|callback_option_select_check');
                    
                    if($this->input->post("board_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('board_secondary_others','Secondary Board','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('board_secondary','Secondary Board','trim|required|callback_option_select_check');
                    
                    if($this->input->post("degree_name_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('degree_name_secondary_others','Secondary Degree name','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('degree_name_secondary','Secondary Degree name','trim|required|callback_option_select_check');
                    
                    $this->form_validation->set_rules('secondary_grade_system','Secondary Grade system','trim|required|callback_option_select_check');
                    if($this->input->post("secondary_grade_system")=='GPA')
                    {
                        $this->form_validation->set_rules('secondary_grade','Secondary Grade','trim|required|greater_than[0]|less_than[10]');
                        $this->form_validation->set_rules('secondary_grade_scale','Secondary Grade scale','trim|required|greater_than[0]|less_than[10]');
                    }
                    else
                    {
                        $this->form_validation->set_rules('secondary_grade','Secondary Grade','trim|required|greater_than[0]|less_than[101]');
                        $this->form_validation->set_rules('secondary_grade_scale','Secondary Grade scale','trim|required|greater_than[0]|less_than[2000]');
                    }
                    $this->form_validation->set_rules('passing_year_secondary','Secondary Passing Year','trim|required|callback_year_check|exact_length[4]');
                    $this->form_validation->set_rules('duration_from_secondary','Secondary Duration From','trim|required|callback_duration_check');
                    $this->form_validation->set_rules('duration_to_secondary','Secondary Duration To','trim|required|callback_duration_check');
                    $this->form_validation->set_rules('duration_of_degree_secondary','Secondary Duration of degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
                   
                    if($this->input->post("major_field_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('major_field_secondary_others','Secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('major_field_secondary','Secondary Major Field','trim|required|callback_option_select_check');
                    
            
            
            
            if($this->input->post("higher_secondary_degree_obtained_from")=="OTHERS")
                    {
                        $this->form_validation->set_rules('higher_secondary_degree_obtained_from_others','Higher Secondary degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('higher_secondary_degree_obtained_from','Higher Secondary degree obtained from','trim|required|callback_option_select_check');
                    
                    if($this->input->post("board_higher_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('board_higher_secondary_others','Higher Secondary Board','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('board_higher_secondary','Higher Secondary Board','trim|required|callback_option_select_check');
                    
                    if($this->input->post("degree_name_higher_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('degree_name_higher_secondary_others','Higher Secondary Degree name','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('degree_name_higher_secondary','Higher Secondary Degree name','trim|required|callback_option_select_check');
                    
                    $this->form_validation->set_rules('higher_secondary_grade_system','Higher Secondary Grade system','trim|required|callback_option_select_check');
                    if($this->input->post("higher_secondary_grade_system")=='GPA')
                    {
                        $this->form_validation->set_rules('higher_secondary_grade','Higher Secondary Grade','trim|required|greater_than[0]|less_than[10]');
                        $this->form_validation->set_rules('higher_secondary_grade_scale','Higher Secondary Grade scale','trim|required|greater_than[0]|less_than[10]');
                    }
                    else
                    {
                        $this->form_validation->set_rules('higher_secondary_grade','Higher Secondary Grade','trim|required|greater_than[0]|less_than[101]');
                        $this->form_validation->set_rules('higher_secondary_grade_scale','Higher Secondary Grade scale','trim|required|greater_than[0]|less_than[2000]');
                    }
                    $this->form_validation->set_rules('passing_year_higher_secondary','Higher Secondary Passing Year','trim|required|callback_year_check|exact_length[4]');
                    $this->form_validation->set_rules('duration_from_higher_secondary','Higher Secondary Duration From','trim|required|callback_duration_check');
                    $this->form_validation->set_rules('duration_to_higher_secondary','Higher Secondary Duration To','trim|required|callback_duration_check');
                    $this->form_validation->set_rules('duration_of_degree_higher_secondary','Higher Secondary Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
                   
                    if($this->input->post("major_field_higher_secondary")=="OTHERS")
                    {
                        $this->form_validation->set_rules('major_field_higher_secondary_others','Higher Secondary Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules('major_field_higher_secondary','Higher Secondary Major Field','trim|required|callback_option_select_check');
                    
            
           
            // bsc form validation
                    
            $bsc_total=1;
            while(1)
            {
                $bsc_degree_obtained_from_temp= "bsc_degree_obtained_from{$bsc_total}";
                
                if($this->input->post($bsc_degree_obtained_from_temp))
                {
                    if($this->input->post($bsc_degree_obtained_from_temp)=="OTHERS")
                    {
                        $bsc_degree_obtained_from_others_temp = "bsc_degree_obtained_from_others{$bsc_total}";
                        $this->form_validation->set_rules($bsc_degree_obtained_from_others_temp,'BSc degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules($bsc_degree_obtained_from_temp,'Bsc degree obtained from','trim|required|callback_option_select_check');
                    
                    $degree_name_bsc_temp="degree_name_bsc{$bsc_total}";
                    $this->form_validation->set_rules($degree_name_bsc_temp,'BSc Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                   
                    $credit_earned_bsc_temp="credit_earned_bsc{$bsc_total}";
                    $this->form_validation->set_rules($credit_earned_bsc_temp,'Bsc credit earned','trim|required|numeric|min_length[1]|max_length[5]');
                   
                    $credit_earned_without_exemption_bsc_temp="credit_earned_without_exemption_bsc{$bsc_total}";
                    $this->form_validation->set_rules($credit_earned_without_exemption_bsc_temp,'Bsc credit earned without exemption','trim|required|numeric|min_length[1]|max_length[5]');
                   
                    $bsc_grade_system_temp="bsc_grade_system{$bsc_total}";
                    $this->form_validation->set_rules($bsc_grade_system_temp,'BSc Grade system','trim|required|callback_option_select_check');
                    
                    if($this->input->post($bsc_grade_system_temp)=='GPA')
                    {
                        $bsc_grade_temp="bsc_grade{$bsc_total}";
                        $this->form_validation->set_rules($bsc_grade_temp,'BSc Grade','trim|required|greater_than[0]|less_than[10]');
                        
                        $bsc_grade_scale_temp="bsc_grade_scale{$bsc_total}";
                        $this->form_validation->set_rules($bsc_grade_scale_temp,'BSc Grade scale','trim|required|greater_than[0]|less_than[10]');
                    }
                    else
                    {
                        $bsc_grade_temp="bsc_grade{$bsc_total}";
                        $this->form_validation->set_rules($bsc_grade_temp,'BSc Grade','trim|required|greater_than[0]|less_than[101]');
                        $bsc_grade_scale_temp="bsc_grade_scale{$bsc_total}";
                        $this->form_validation->set_rules($bsc_grade_scale_temp,'BSc Grade scale','trim|required|greater_than[0]|less_than[2000]');
                    }
                    
                    
                    
                    $passing_year_bsc_temp="passing_year_bsc{$bsc_total}";
                    $this->form_validation->set_rules($passing_year_bsc_temp,'BSc Passing Year','trim|required|callback_year_check|exact_length[4]');
                    
                    $duration_from_bsc_temp="duration_from_bsc{$bsc_total}";
                    $this->form_validation->set_rules($duration_from_bsc_temp,'BSc Duration From','trim|required|callback_duration_check');
                    
                    $duration_to_bsc_temp="duration_to_bsc{$bsc_total}";
                    $this->form_validation->set_rules($duration_to_bsc_temp,'BSc Duration To','trim|required|callback_duration_check');
                    
                    $duration_of_degree_bsc_temp="duration_of_degree_bsc{$bsc_total}";
                    $this->form_validation->set_rules($duration_of_degree_bsc_temp,'BSc Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
                   
                    $major_field_bsc_temp="major_field_bsc{$bsc_total}";
                    if($this->input->post($major_field_bsc_temp)=="OTHERS")
                    {
                        $major_field_bsc_others_temp = "major_field_bsc_others{$bsc_total}";
                        $this->form_validation->set_rules($major_field_bsc_others_temp,'BSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules($major_field_bsc_temp,'BSc Major Field','trim|required|callback_option_select_check');
                    
                    
                     if($this->input->post($bsc_degree_obtained_from_temp)=="BUET")
                    {
                        $buet_graduate_dept_bsc_temp="buet_graduate_dept_bsc{$bsc_total}";
                        $this->form_validation->set_rules( $buet_graduate_dept_bsc_temp,'Buet UnderGratuate Department','trim|required|callback_option_select_check');
                   
                        $buet_student_id_bsc_temp="buet_student_id_bsc{$bsc_total}";
                        $this->form_validation->set_rules( $buet_student_id_bsc_temp,'Buet UnderGratuate Id','trim|required|numeric|min_length[5]|max_length[10]');
                   
                        
                    }
                    
                    
                    $bsc_total++;
                }
                else break;
            }
                    
           //msc form validation
            
            if($this->input->post('program')=="PhD"){
               
                $msc_total=1;
            while(1)
            {
                $msc_degree_obtained_from_temp= "msc_degree_obtained_from{$msc_total}";
                if($msc_total==1) $this->form_validation->set_rules($msc_degree_obtained_from_temp,'Msc degree obtained from','trim|required|callback_alpha_with_space_check');
                   
                if($this->input->post($msc_degree_obtained_from_temp))
                {
                    if($this->input->post($msc_degree_obtained_from_temp)=="OTHERS")
                    {
                        $msc_degree_obtained_from_others_temp = "msc_degree_obtained_from_others{$msc_total}";
                        $this->form_validation->set_rules($msc_degree_obtained_from_others_temp,'MSc degree obtained form','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules($msc_degree_obtained_from_temp,'Msc degree obtained from','trim|required|callback_option_select_check');
                    
                    $degree_name_msc_temp="degree_name_msc{$msc_total}";
                    $this->form_validation->set_rules($degree_name_msc_temp,'MSc Degree Name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                   
                    $credit_earned_msc_temp="credit_earned_msc{$msc_total}";
                    $this->form_validation->set_rules($credit_earned_msc_temp,'Msc credit earned','trim|required|numeric|min_length[1]|max_length[5]');
                   
                    $credit_earned_without_exemption_msc_temp="credit_earned_without_exemption_msc{$msc_total}";
                    $this->form_validation->set_rules($credit_earned_without_exemption_msc_temp,'Msc credit earned without exemption','trim|required|numeric|min_length[1]|max_length[5]');
                   
                    $msc_grade_system_temp="msc_grade_system{$msc_total}";
                    $this->form_validation->set_rules($msc_grade_system_temp,'MSc Grade system','trim|required|callback_option_select_check');
                    
                    if($this->input->post($msc_grade_system_temp)=='GPA')
                    {
                        $msc_grade_temp="msc_grade{$msc_total}";
                        $this->form_validation->set_rules($msc_grade_temp,'MSc Grade','trim|required|greater_than[0]|less_than[10]');
                        
                        $msc_grade_scale_temp="msc_grade_scale{$msc_total}";
                        $this->form_validation->set_rules($msc_grade_scale_temp,'MSc Grade scale','trim|required|greater_than[0]|less_than[10]');
                    }
                    else
                    {
                        $msc_grade_temp="msc_grade{$msc_total}";
                        $this->form_validation->set_rules($msc_grade_temp,'MSc Grade','trim|required|greater_than[0]|less_than[101]');
                        $msc_grade_scale_temp="msc_grade_scale{$msc_total}";
                        $this->form_validation->set_rules($msc_grade_scale_temp,'MSc Grade scale','trim|required|greater_than[0]|less_than[2000]');
                    }
                    
                    
                    
                    $passing_year_msc_temp="passing_year_msc{$msc_total}";
                    $this->form_validation->set_rules($passing_year_msc_temp,'MSc Passing Year','trim|required|callback_year_check|exact_length[4]');
                    
                    $duration_from_msc_temp="duration_from_msc{$msc_total}";
                    $this->form_validation->set_rules($duration_from_msc_temp,'MSc Duration From','trim|required|callback_duration_check');
                    
                    $duration_to_msc_temp="duration_to_msc{$msc_total}";
                    $this->form_validation->set_rules($duration_to_msc_temp,'MSc Duration To','trim|required|callback_duration_check');
                    
                    $duration_of_degree_msc_temp="duration_of_degree_msc{$msc_total}";
                    $this->form_validation->set_rules($duration_of_degree_msc_temp,'MSc Duration of Degree','trim|required|callback_year_check|min_length[1]|max_length[2]');
                   
                    $major_field_msc_temp="major_field_msc{$msc_total}";
                    if($this->input->post($major_field_msc_temp)=="OTHERS")
                    {
                        $major_field_msc_others_temp = "major_field_msc_others{$msc_total}";
                        $this->form_validation->set_rules($major_field_msc_others_temp,'MSc Major Field','trim|required|callback_alpha_with_space_check|min_length[2]|max_length[70]');
                    }
                    else  $this->form_validation->set_rules($major_field_msc_temp,'MSc Major Field','trim|required|callback_option_select_check');
                    
                    
                     if($this->input->post($msc_degree_obtained_from_temp)=="BUET")
                    {
                        $buet_masters_dept_msc_temp="buet_masters_dept_msc{$msc_total}";
                        $this->form_validation->set_rules( $buet_masters_dept_msc_temp,'Buet Master\'s Department','trim|required|callback_option_select_check');
                   
                        $buet_student_id_msc_temp="buet_student_id_msc{$msc_total}";
                        $this->form_validation->set_rules( $buet_student_id_msc_temp,'Buet Masters Id','trim|required|numeric|min_length[5]|max_length[10]');
                   
                        
                    }
                    
                    
                    $msc_total++;
                }
                else break;
            }
                    
            }
            
            // Reference form validation
            
            $ref_total=1;
            while(1)
            {
                $ref_name_temp= "ref_name{$ref_total}";
                
                if($this->input->post($ref_name_temp))
                {
                    
                    $this->form_validation->set_rules($ref_name_temp,'Reference name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                 
                    $ref_address_temp= "ref_address{$ref_total}";
                    $this->form_validation->set_rules($ref_address_temp,'Reference address','trim|required|callback_alpha_with_space_check|min_length[5]|max_length[150]');
                 
                    $ref_phone_temp= "ref_phone{$ref_total}";
                    $this->form_validation->set_rules($ref_phone_temp,'Reference Phone','trim|required|numeric|min_length[6]|max_length[15]');
                 
                    $ref_total++;
                }
                else break;
            }
            
            
                    
            // job experience form validation
            $job_total=1;
            while(1)
            {
                $designation_temp= "designation{$job_total}";
                  
                if($this->input->post($designation_temp))  
                {
                    $this->form_validation->set_rules($designation_temp,'Designation','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                 
                    $job_description_temp= "job_description{$job_total}";
                    $this->form_validation->set_rules($job_description_temp,'Job Description','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                 
                    $exp_duration_from_temp= "exp_duration_from{$job_total}";
                    $this->form_validation->set_rules($exp_duration_from_temp,'Job Duration From','trim|required|callback_duration_check');
                    
                    $exp_duration_to_temp= "exp_duration_to{$job_total}";
                    $this->form_validation->set_rules($exp_duration_to_temp,'Job Duration To','trim|required|callback_duration_check');
                    
                    $exp_organization_temp= "exp_organization{$job_total}";
                    $this->form_validation->set_rules($exp_organization_temp,'Organization name','trim|required|callback_alpha_with_space_check|min_length[3]|max_length[70]');
                 
                    $job_total++;
                }
                else break;
            }       
                    
            if (!$_FILES['userfile']['error'] === 0)
            {
                redirect('apply/index');
            }
           
            
            
            //$this->form_validation->set_rules('name','program','trim|required|callback_option_select_check');
            
            if($this->form_validation->run()==FALSE) $this->index();
            else
            {
            //desired
            $current_admission = array(
                'PROGRAM' => $this->input->post('program'),
                'DEPT_INST' => $this->input->post('dept_inst'),
                'DIVISION' => $this->input->post('division'),
                'DESIRED_STATUS' => $this->input->post('desire_status')
                );
            if($this->input->post('is_pre_admission')) $current_admission['PRE_ADMISSION'] = $this->input->post('is_pre_admission');
            else $current_admission['PRE_ADMISSION'] = "no";
            
            //pre admission
            $pre_admission = array();
            if($current_admission['PRE_ADMISSION']=="yes"){
                $pre_admission['PRE_STD_ID']=$this->input->post('pre_std_id');
                $pre_admission['PRE_DEPT_INST']=$this->input->post('pre_dept_inst');
                $pre_admission['PRE_SEMESTER']=$this->input->post('pre_semester');
            }
            
            //personal    
            $personal = array(
                'APPLICANT_NAME' => $this->input->post('name'),
                'FATHER_NAME' => $this->input->post('father_name'),
                'MOTHER_NAME' => $this->input->post('mother_name'),
                'BIRTH_DATE' => $this->input->post('birthday'),
                'BIRTH_PLACE' => $this->input->post('birthplace'),
                'NATIONALITY' => $this->input->post('nationality'),
                'RELIGION' => $this->input->post('religion'),
                'SEX' => $this->input->post('sex'),
                'MARITAL_STATUS' => $this->input->post('marital_status')
                 );
            
            //contact
            $contact = array(    
                'PRESENT_ADDRESS' => $this->input->post('present_address'),
                'PERMAMENT_ADDRESS'=> $this->input->post('permanent_address'),
                'EMAIL' => $this->input->post('email')
                 );
            
            //phone
            $phone = array();
            $phone_total=1;
            while(1)
            {
                $number= "phone{$phone_total}";
                
                if($this->input->post($number))
                {
                    $phone[]=$this->input->post($number);
                    $phone_total++;
                }
                else break;
            }
            
            //employee status
            
            $employed = array();
            if($this->input->post('is_employed')) $employed['IS_EMPLOYED'] = $this->input->post('is_employed');
            else $employed['IS_EMPLOYED'] = "no";
            
            if($employed['IS_EMPLOYED']=="yes"){
                $employed['EMP_STATUS']= $this->input->post('employee_status');
            }
            
            //secondary
            $secondary;
            $secondary_degree_obtained_from;
            $degree_name_secondary;
            $board_secondary;
            $secondary_grade_system;
            $secondary_grade;
            $secondary_grade_scale;
            $passing_year_secondary;
            $duration_from_secondary;
            $duration_to_secondary;
            $duration_of_degree_secondary;
            $major_field_secondary;
            
                
                
                    if($this->input->post("secondary_degree_obtained_from")=="OTHERS")
                    {
                        $secondary_degree_obtained_from=$this->input->post("secondary_degree_obtained_from_others");
                    }
                    else $secondary_degree_obtained_from=$this->input->post("secondary_degree_obtained_from");
                    
                    if($this->input->post("board_secondary")=="OTHERS")
                    {
                        $board_secondary=$this->input->post("board_secondary_others");
                    }
                    else $board_secondary=$this->input->post("board_secondary");
                    
                    if($this->input->post("degree_name_secondary")=="OTHERS")
                    {
                        $degree_name_secondary=$this->input->post("degree_name_secondary_others");
                    }
                    else $degree_name_secondary=$this->input->post("degree_name_secondary");
                    
                    $secondary_grade_system=$this->input->post("secondary_grade_system");
                    
                    $secondary_grade=$this->input->post("secondary_grade");
                    
                    $secondary_grade_scale=$this->input->post("secondary_grade_scale");
                    
                    $passing_year_secondary=$this->input->post("passing_year_secondary");
                    
                    $duration_from_secondary=$this->input->post("duration_from_secondary");
                    
                    $duration_to_secondary=$this->input->post("duration_to_secondary");
                    
                    $duration_of_degree_secondary=$this->input->post("duration_of_degree_secondary");
                    
                    if($this->input->post("major_field_secondary")=="OTHERS")
                    {
                        $major_field_secondary=$this->input->post("major_field_secondary_others");
                    }
                    else $major_field_secondary=$this->input->post("major_field_secondary");
                    
                
            
            
            $secondary['CER_DEG_OBT_FROM']=$secondary_degree_obtained_from;
            $secondary['DEGREE_NAME']=$degree_name_secondary;
            $secondary['BOARD']=$board_secondary;
            $secondary['GRADE_SYSTEM']=$secondary_grade_system;
            $secondary['GRADE']=$secondary_grade;
            $secondary['GRADE_SCALE']=$secondary_grade_scale;
            $secondary['PASSING_YEAR']=$passing_year_secondary;
            $secondary['DURATION_FROM']=$duration_from_secondary;
            $secondary['DURATION_TO']=$duration_to_secondary;
            $secondary['DURATION_OF_DEGREE']=$duration_of_degree_secondary;
            $secondary['MAJOR_FIELD_SPECIALIZATION']=$major_field_secondary;
            
            
            //higher_secondary
            $higher_secondary;
            $higher_secondary_degree_obtained_from ;
            $degree_name_higher_secondary;
            $board_higher_secondary;
            $higher_secondary_grade_system ;
            $higher_secondary_grade;
            $higher_secondary_grade_scale;
            $passing_year_higher_secondary;
            $duration_from_higher_secondary;
            $duration_to_higher_secondary;
            $duration_of_degree_higher_secondary;
            $major_field_higher_secondary;
            
                
                
                    if($this->input->post("higher_secondary_degree_obtained_from")=="OTHERS")
                    {
                        $higher_secondary_degree_obtained_from=$this->input->post("higher_secondary_degree_obtained_from_others");
                    }
                    else $higher_secondary_degree_obtained_from=$this->input->post("higher_secondary_degree_obtained_from");
                    
                    if($this->input->post("board_higher_secondary")=="OTHERS")
                    {
                        $board_higher_secondary=$this->input->post("board_higher_secondary_others");
                    }
                    else $board_higher_secondary=$this->input->post("board_higher_secondary");
                    
                    if($this->input->post("degree_name_higher_secondary")=="OTHERS")
                    {
                        $degree_name_higher_secondary=$this->input->post("degree_name_higher_secondary_others");
                    }
                    else $degree_name_higher_secondary=$this->input->post("degree_name_higher_secondary");
                    
                    $higher_secondary_grade_system=$this->input->post("higher_secondary_grade_system");
                    
                    $higher_secondary_grade=$this->input->post("higher_secondary_grade");
                    
                    $higher_secondary_grade_scale=$this->input->post("higher_secondary_grade_scale");
                    
                    $passing_year_higher_secondary=$this->input->post("passing_year_higher_secondary");
                    
                    $duration_from_higher_secondary=$this->input->post("duration_from_higher_secondary");
                    
                    $duration_to_higher_secondary=$this->input->post("duration_to_higher_secondary");
                    
                    $duration_of_degree_higher_secondary=$this->input->post("duration_of_degree_higher_secondary");
                    
                    if($this->input->post("major_field_higher_secondary")=="OTHERS")
                    {
                        $major_field_higher_secondary=$this->input->post("major_field_higher_secondary_others");
                    }
                    else $major_field_higher_secondary=$this->input->post("major_field_higher_secondary");
                    
                
            
            
            $higher_secondary['CER_DEG_OBT_FROM']=$higher_secondary_degree_obtained_from;
            $higher_secondary['DEGREE_NAME']=$degree_name_higher_secondary;
            $higher_secondary['BOARD']=$board_higher_secondary;
            $higher_secondary['GRADE_SYSTEM']=$higher_secondary_grade_system;
            $higher_secondary['GRADE']=$higher_secondary_grade;
            $higher_secondary['GRADE_SCALE']=$higher_secondary_grade_scale;
            $higher_secondary['PASSING_YEAR']=$passing_year_higher_secondary;
            $higher_secondary['DURATION_FROM']=$duration_from_higher_secondary;
            $higher_secondary['DURATION_TO']=$duration_to_higher_secondary;
            $higher_secondary['DURATION_OF_DEGREE']=$duration_of_degree_higher_secondary;
            $higher_secondary['MAJOR_FIELD_SPECIALIZATION']=$major_field_higher_secondary;
            
            
            
            //BSc info
            $bsc = array();
            $bsc_degree_obtained_from = array();
            $is_credit_transfer_bsc = array();
            $degree_name_bsc = array();
            $credit_earned_bsc = array();
            $credit_earned_without_exemption_bsc = array();
            $bsc_grade_system = array();
            $bsc_grade = array();
            $bsc_grade_scale = array();
            $passing_year_bsc = array();
            $duration_from_bsc = array();
            $duration_to_bsc = array();
            $duration_of_degree_bsc = array();
            $major_field_bsc = array();
            $buet_graduate_dept_bsc = array();
            $buet_student_id_bsc = array();
            $buet_bsc = array();
            $bsc_total=1;
            while(1)
            {
                $bsc_degree_obtained_from_temp= "bsc_degree_obtained_from{$bsc_total}";
                
                if($this->input->post($bsc_degree_obtained_from_temp) && $this->input->post($bsc_degree_obtained_from_temp)!="Select")
                {
                    if($this->input->post($bsc_degree_obtained_from_temp)=="OTHERS")
                    {
                        $bsc_degree_obtained_from_others_temp = "bsc_degree_obtained_from_others{$bsc_total}";
                        $bsc_degree_obtained_from[]=$this->input->post($bsc_degree_obtained_from_others_temp);
                    }
                    else $bsc_degree_obtained_from[]=$this->input->post($bsc_degree_obtained_from_temp);
                    
                    $is_credit_transfer_bsc_temp="is_credit_transfer_bsc{$bsc_total}";
                    if($this->input->post($is_credit_transfer_bsc_temp)=="yes")$is_credit_transfer_bsc[]=$this->input->post($is_credit_transfer_bsc_temp);
                    else $is_credit_transfer_bsc[] = "no";
                    
                    $degree_name_bsc_temp="degree_name_bsc{$bsc_total}";
                    $degree_name_bsc[]=$this->input->post($degree_name_bsc_temp);
                    
                    $credit_earned_bsc_temp="credit_earned_bsc{$bsc_total}";
                    $credit_earned_bsc[]=$this->input->post($credit_earned_bsc_temp);
                    
                    $credit_earned_without_exemption_bsc_temp="credit_earned_without_exemption_bsc{$bsc_total}";
                    $credit_earned_without_exemption_bsc[]=$this->input->post($credit_earned_without_exemption_bsc_temp);
                    
                    $bsc_grade_system_temp="bsc_grade_system{$bsc_total}";
                    $bsc_grade_system[]=$this->input->post($bsc_grade_system_temp);
                    
                    $bsc_grade_temp="bsc_grade{$bsc_total}";
                    $bsc_grade[]=$this->input->post($bsc_grade_temp);
                    
                    $bsc_grade_scale_temp="bsc_grade_scale{$bsc_total}";
                    $bsc_grade_scale[]=$this->input->post($bsc_grade_scale_temp);
                    
                    $passing_year_bsc_temp="passing_year_bsc{$bsc_total}";
                    $passing_year_bsc[]=$this->input->post($passing_year_bsc_temp);
                    
                    $duration_from_bsc_temp="duration_from_bsc{$bsc_total}";
                    $duration_from_bsc[]=$this->input->post($duration_from_bsc_temp);
                    
                    $duration_to_bsc_temp="duration_to_bsc{$bsc_total}";
                    $duration_to_bsc[]=$this->input->post($duration_to_bsc_temp);
                    
                    $duration_of_degree_bsc_temp="duration_of_degree_bsc{$bsc_total}";
                    $duration_of_degree_bsc[]=$this->input->post($duration_of_degree_bsc_temp);
                    
                    $major_field_bsc_temp="major_field_bsc{$bsc_total}";
                    if($this->input->post($major_field_bsc_temp)=="OTHERS")
                    {
                        $major_field_bsc_others_temp = "major_field_bsc_others{$bsc_total}";
                        $major_field_bsc[]=$this->input->post($major_field_bsc_others_temp);
                    }
                    else $major_field_bsc[]=$this->input->post($major_field_bsc_temp);
                    
                    if($this->input->post($bsc_degree_obtained_from_temp)=="BUET")
                    {
                        $buet_graduate_dept_bsc_temp="buet_graduate_dept_bsc{$bsc_total}";
                        $buet_graduate_dept_bsc["BSC{$bsc_total}"]=$this->input->post($buet_graduate_dept_bsc_temp);
                        
                        $buet_student_id_bsc_temp="buet_student_id_bsc{$bsc_total}";
                        $buet_student_id_bsc["BSC{$bsc_total}"]=$this->input->post($buet_student_id_bsc_temp);
                        
                        $buet_bsc[] = $bsc_total-1;
                        
                    }
                    
                    $bsc_total++;
                }
                else break;
            }
            
            $bsc['CER_DEG_OBT_FROM']=$bsc_degree_obtained_from;
            $bsc['CREDIT_TRANSFER']=$is_credit_transfer_bsc;
            $bsc['DEGREE_NAME']=$degree_name_bsc;
            $bsc['CREDIT_EARNED']=$credit_earned_bsc;
            $bsc['CRE_EARN_WITHOUT_EXEMPTION']=$credit_earned_without_exemption_bsc;
            $bsc['GRADE_SYSTEM']=$bsc_grade_system;
            $bsc['GRADE']=$bsc_grade;
            $bsc['GRADE_SCALE']=$bsc_grade_scale;
            $bsc['PASSING_YEAR']=$passing_year_bsc;
            $bsc['DURATION_FROM']=$duration_from_bsc;
            $bsc['DURATION_TO']=$duration_to_bsc;
            $bsc['DURATION_OF_DEGREE']=$duration_of_degree_bsc;
            $bsc['MAJOR_FIELD_SPECIALIZATION']=$major_field_bsc;
            if(sizeof($buet_bsc))
            {
                $bsc['DEPARTMENT']=$buet_graduate_dept_bsc;
                $bsc['STUDENT_ID']=$buet_student_id_bsc;
                $bsc['BUET_BSC'] = $buet_bsc;
            }
            
            //MSc info
            if($current_admission['PROGRAM']=="PhD"){
                $msc = array();
                $msc_degree_obtained_from = array();
                $is_credit_transfer_msc = array();
                $degree_name_msc = array();
                $credit_earned_msc = array();
                $credit_earned_without_exemption_msc = array();
                $msc_grade_system = array();
                $msc_grade = array();
                $msc_grade_scale = array();
                $passing_year_msc = array();
                $duration_from_msc = array();
                $duration_to_msc = array();
                $duration_of_degree_msc = array();
                $major_field_msc = array();
                $buet_graduate_dept_msc = array();
                $buet_student_id_msc = array();
                $buet_msc = array();
                $msc_total=1;
                while(1)
                {
                    $msc_degree_obtained_from_temp= "msc_degree_obtained_from{$msc_total}";

                    if($this->input->post($msc_degree_obtained_from_temp) && $this->input->post($msc_degree_obtained_from_temp)!="Select")
                    {
                        if($this->input->post($msc_degree_obtained_from_temp)=="OTHERS")
                        {
                            $msc_degree_obtained_from_others_temp = "msc_degree_obtained_from_others{$msc_total}";
                            $msc_degree_obtained_from[]=$this->input->post($msc_degree_obtained_from_others_temp);
                        }
                        else $msc_degree_obtained_from[]=$this->input->post($msc_degree_obtained_from_temp);

                        $is_credit_transfer_msc_temp="is_credit_transfer_msc{$msc_total}";
                        if($this->input->post($is_credit_transfer_msc_temp)=="yes") $is_credit_transfer_msc[]=$this->input->post($is_credit_transfer_msc_temp);
                        else $is_credit_transfer_msc[] = "no";

                        $degree_name_msc_temp="degree_name_msc{$msc_total}";
                        $degree_name_msc[]=$this->input->post($degree_name_msc_temp);

                        $credit_earned_msc_temp="credit_earned_msc{$msc_total}";
                        $credit_earned_msc[]=$this->input->post($credit_earned_msc_temp);

                        $credit_earned_without_exemption_msc_temp="credit_earned_without_exemption_msc{$msc_total}";
                        $credit_earned_without_exemption_msc[]=$this->input->post($credit_earned_without_exemption_msc_temp);

                        $msc_grade_system_temp="msc_grade_system{$msc_total}";
                        $msc_grade_system[]=$this->input->post($msc_grade_system_temp);

                        $msc_grade_temp="msc_grade{$msc_total}";
                        $msc_grade[]=$this->input->post($msc_grade_temp);

                        $msc_grade_scale_temp="msc_grade_scale{$msc_total}";
                        $msc_grade_scale[]=$this->input->post($msc_grade_scale_temp);

                        $passing_year_msc_temp="passing_year_msc{$msc_total}";
                        $passing_year_msc[]=$this->input->post($passing_year_msc_temp);

                        $duration_from_msc_temp="duration_from_msc{$msc_total}";
                        $duration_from_msc[]=$this->input->post($duration_from_msc_temp);

                        $duration_to_msc_temp="duration_to_msc{$msc_total}";
                        $duration_to_msc[]=$this->input->post($duration_to_msc_temp);

                        $duration_of_degree_msc_temp="duration_of_degree_msc{$msc_total}";
                        $duration_of_degree_msc[]=$this->input->post($duration_of_degree_msc_temp);

                        $major_field_msc_temp="major_field_msc{$msc_total}";
                        if($this->input->post($major_field_msc_temp)=="OTHERS")
                        {
                            $major_field_msc_others_temp = "major_field_msc_others{$msc_total}";
                            $major_field_msc[]=$this->input->post($major_field_msc_others_temp);
                        }
                        else $major_field_msc[]=$this->input->post($major_field_msc_temp);

                        if($this->input->post($msc_degree_obtained_from_temp)=="BUET")
                        {
                            $buet_masters_dept_msc_temp="buet_masters_dept_msc{$msc_total}";
                            $buet_masters_dept_msc["MSC{$msc_total}"]=$this->input->post($buet_masters_dept_msc_temp);

                            $buet_student_id_msc_temp="buet_student_id_msc{$msc_total}";
                            $buet_student_id_msc["MSC{$msc_total}"]=$this->input->post($buet_student_id_msc_temp);

                            $buet_msc[] = $msc_total-1;

                        }

                        $msc_total++;
                    }
                    else break;
                }

                $msc['CER_DEG_OBT_FROM']=$msc_degree_obtained_from;
                $msc['CREDIT_TRANSFER']=$is_credit_transfer_msc;
                $msc['DEGREE_NAME']=$degree_name_msc;
                $msc['CREDIT_EARNED']=$credit_earned_msc;
                $msc['CRE_EARN_WITHOUT_EXEMPTION']=$credit_earned_without_exemption_msc;
                $msc['GRADE_SYSTEM']=$msc_grade_system;
                $msc['GRADE']=$msc_grade;
                $msc['GRADE_SCALE']=$msc_grade_scale;
                $msc['PASSING_YEAR']=$passing_year_msc;
                $msc['DURATION_FROM']=$duration_from_msc;
                $msc['DURATION_TO']=$duration_to_msc;
                $msc['DURATION_OF_DEGREE']=$duration_of_degree_msc;
                $msc['MAJOR_FIELD_SPECIALIZATION']=$major_field_msc;
                if(sizeof($buet_msc))
                {
                    $msc['DEPARTMENT']=$buet_masters_dept_msc;
                    $msc['STUDENT_ID']=$buet_student_id_msc;
                    $msc['BUET_MSC'] = $buet_msc;
                }
                
            }
            
            //Reference
            $reference = array();
            $ref_name = array();
            $ref_address = array();
            $ref_phone = array();
            $ref_total=1;
            
            while(1)
            {
                $ref_name_temp= "ref_name{$ref_total}";
                
                if($this->input->post($ref_name_temp))
                {
                    
                    $ref_name[]=$this->input->post($ref_name_temp);
                    
                    $ref_address_temp= "ref_address{$ref_total}";
                    $ref_address[]=$this->input->post($ref_address_temp);
                    
                    $ref_phone_temp= "ref_phone{$ref_total}";
                    $ref_phone[]=$this->input->post($ref_phone_temp);
                    
                    $ref_total++;
                }
                else break;
            }
            
            $reference['REF_NAME']=$ref_name;
            $reference['REF_ADDRESS']=$ref_address;
            $reference['REF_MOBILE']=$ref_phone;
            
            //Job Experience
            $job_experience = array();
            $designation = array();
            $job_description = array();
            $exp_duration_from = array();
            $exp_duration_to = array();
            $exp_organization = array();
            $job_total=1;
            while(1)
            {
                $designation_temp= "designation{$job_total}";
                
                if($this->input->post($designation_temp))  
                {
                    
                    $designation[]=$this->input->post($designation_temp);
                    
                    $job_description_temp= "job_description{$job_total}";
                    $job_description[]=$this->input->post($job_description_temp);
                    
                    $exp_duration_from_temp= "exp_duration_from{$job_total}";
                    $exp_duration_from[]=$this->input->post($exp_duration_from_temp);
                    
                    $exp_duration_to_temp= "exp_duration_to{$job_total}";
                    $exp_duration_to[]=$this->input->post($exp_duration_to_temp);
                    
                    $exp_organization_temp= "exp_organization{$job_total}";
                    $exp_organization[]=$this->input->post($exp_organization_temp);
                    
                    $job_total++;
                }
                else break;
            }
            
            $job_experience['DESIGNATION']=$designation;
            $job_experience['JOB_DESCRIPTION']=$job_description;
            $job_experience['EXP_DURATION_FROM']=$exp_duration_from;
            $job_experience['EXP_DURATION_TO']=$exp_duration_to;
            $job_experience['EXP_ORGANIZATION']=$exp_organization;
            
            $table_name = array();
            $application_data['APPLICANT_SERIAL'] = 0;
            
          // Student Personal Information Insert To Database And return the application serial no 
            $result = $this->application_model->student_personal_info_submission($personal);  
            if($result){
                
                foreach($result as $row){
                     $application_data['APPLICANT_SERIAL'] = $row['APPLICANT_SERIAL'];
                }
                
                $personal_table_name = array('STUDENT_PERSONAL_INFO');
                $table_name[] = $personal_table_name;
                
                // Student Contact Information Insert To Database
                $res = $this->application_model->student_contact_info_submission($application_data['APPLICANT_SERIAL'],$contact);
                
                if (!$res)
                {
                  
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
                // Student Phone Information Insert To Database
                $res = $this->application_model->student_phone_info_submission($application_data['APPLICANT_SERIAL'],$phone);
                
                if (!$res)
                {
                  
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
              
                // Student Reference Insert To Database
               $res = $this->application_model->student_reference_info_submission($application_data['APPLICANT_SERIAL'],$reference);
                
              if (!$res)
                {
               
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student Job Experience Insert To Database
               $res = $this->application_model->student_job_experience_info_submission($application_data['APPLICANT_SERIAL'],$job_experience);
                
               if (!$res)
                {
                 
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
               // Student Current Admission Info Insert To Database 
               $res = $this->application_model->student_current_admission_info_submission($application_data['APPLICANT_SERIAL'],$current_admission);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               
               if($current_admission['PRE_ADMISSION']=="yes")
               {
                   // Student Previous Admission Info Info Insert To Database 
                   $res = $this->application_model->student_pre_admission_info_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$pre_admission);

                   if (!$res)
                    {
                        for($i=sizeof($table_name)-1; $i>=0; $i--) {
                            for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                            }
                        }
                        redirect('databaseManagement/unsessful_submission');
                    }
                    $table_name[] = $res;
               }
               
               // Student Employee Status Info Insert To Database 
               $res = $this->application_model->student_employed_info_submission($application_data['APPLICANT_SERIAL'],$employed);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               
               // Student BSc Info Insert To Database
               $res = $this->application_model->student_bsc_info_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$bsc);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student BSc buet gradute Insert To Database
               $res = $this->application_model->student_bsc_buet_gradute_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$bsc);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
                // Student BSc grade Insert To Database
               $res = $this->application_model->student_bsc_grade_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$bsc);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
               // Student BSc Document Info Insert To Database 
               $res = $this->application_model->student_bsc_document_info_submission($application_data['APPLICANT_SERIAL'], $current_admission['PROGRAM'], $bsc);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
               
               if($current_admission['PROGRAM']=="PhD"){
                   // Student MSc Info Insert To Database
                    $res = $this->application_model->student_msc_info_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$msc);
                
                    if (!$res)
                    {
                        for($i=sizeof($table_name)-1; $i>=0; $i--) {
                            for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                            }
                        }
                        redirect('databaseManagement/unsessful_submission');
                    }
                    $table_name[] = $res;
                    
                    // Student MSc buet masters Insert To Database
                    $res = $this->application_model->student_msc_buet_masters_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$msc);
                
                    if (!$res)
                    {
                        for($i=sizeof($table_name)-1; $i>=0; $i--) {
                            for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                            }
                        }
                        redirect('databaseManagement/unsessful_submission');
                    }
                    $table_name[] = $res;
                    
                    // Student MSc grade Insert To Database
                    $res = $this->application_model->student_msc_grade_submission($application_data['APPLICANT_SERIAL'],$current_admission['PROGRAM'],$msc);
                
                    if (!$res)
                    {
                        for($i=sizeof($table_name)-1; $i>=0; $i--) {
                            for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                            }
                        }
                        redirect('databaseManagement/unsessful_submission');
                    }
                    $table_name[] = $res;
                    
                 
                   // Student MSc Document Info Insert To Database 
                    $res = $this->application_model->student_msc_document_info_submission($application_data['APPLICANT_SERIAL'], $current_admission['PROGRAM'], $msc);
                
                    if (!$res)
                    {
                        for($i=sizeof($table_name)-1; $i>=0; $i--) {
                            for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                            }
                        }
                        redirect('databaseManagement/unsessful_submission');
                    }
                    $table_name[] = $res;
               }
               
               // Student Secondary Info Insert To Database
               $res = $this->application_model->student_secondary_info_submission($application_data['APPLICANT_SERIAL'],$secondary);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
                // Student Secondary grade Insert To Database
               $res = $this->application_model->student_secondary_grade_submission($application_data['APPLICANT_SERIAL'],$secondary);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student Higher Secondary Info Insert To Database
               $res = $this->application_model->student_higher_secondary_info_submission($application_data['APPLICANT_SERIAL'],$higher_secondary);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
                // Student Higher Secondary grade Insert To Database
               $res = $this->application_model->student_higher_secondary_grade_submission($application_data['APPLICANT_SERIAL'],$higher_secondary);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student secondary DOCUMENT   Info Insert To Database
               $res = $this->application_model->student_secondary_document_info_submission($application_data['APPLICANT_SERIAL']);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student higher secondary DOCUMENT   Info Insert To Database
               $res = $this->application_model->student_higher_secondary_document_info_submission($application_data['APPLICANT_SERIAL']);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student DOCUMENT Info Insert To Database
               $res = $this->application_model->student_document_info_submission($application_data['APPLICANT_SERIAL']);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
               
               // Student eligibility Info Insert To Database
               $res = $this->application_model->student_eligibility_info_submission($application_data['APPLICANT_SERIAL']);
                
               if (!$res)
                {
                    for($i=sizeof($table_name)-1; $i>=0; $i--) {
                        for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                            $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);
                            
                        }
                    }
                    redirect('databaseManagement/unsessful_submission');
                }
                $table_name[] = $res;
                
                // Student photoInfo Insert To Database
                $res = $this->application_model->student_photo_upload($application_data['APPLICANT_SERIAL']);
                       
                       if(!$res)
                       {
                              for($i=sizeof($table_name)-1; $i>=0; $i--) {
                                for($j=sizeof($table_name[$i])-1; $j>=0; $j--){
                                    $this->application_model->delete_row($table_name[$i][$j] ,$application_data['APPLICANT_SERIAL']);

                                }
                              }
                              redirect('databaseManagement/unsessful_submission');
                       }
                       $table_name[] = $res;
                   
            }
            else
            {
                redirect('databaseManagement/unsessful_submission');
            }
         
            
            
            
            $application_data['CURRENT_ADMISSION'] = $current_admission;
            $application_data['PRE_ADMISSION'] = $pre_admission;
            $application_data['PERSONAL'] = $personal;
            $application_data['CONTACT'] = $contact;
            $application_data['PHONE'] = $phone;
            $application_data['EMPLOYED'] = $employed;
            $application_data['SECONDARY'] = $secondary;
            $application_data['HIGHER_SECONDARY'] = $higher_secondary;
            $application_data['BSC'] = $bsc;
            if($current_admission['PROGRAM']=="PhD")
            $application_data['MSC'] = $msc;
            $application_data['REFERENCE'] = $reference;
            $application_data['JOB_EXPERIENCE'] = $job_experience;
            
            
            $result = $this->application_model->student_get_photo($application_data['APPLICANT_SERIAL']);
            if($result) $application_data['PHOTO'] =  $result;
            
            
            //main_content
           $application_data['main_content'] = 'application_view/application_view';
            
           $this->load->view('includes/template',$application_data);
        }
        } 
}
<?php

class Application_model extends CI_Model{
    
///////////////////////////////////////////////////////////////////////////////
    
     var $photo_path;
      
     
/////////////////////////////////////////////////////////////////////////////     
            function __construct() {
                parent::__construct();
                $this->photo_path = realpath(APPPATH . '../images');
             }

/////////////////////////////////////////////////////////////////////
        function student_photo_upload($appl_sl_no){
            $application_data = "SELECT FILE_NAME FROM PHOTO WHERE APPLICANT_SERIAL = ";
            $application_data .=htmlentities("'{$appl_sl_no}' ");
            $query= $this->db->query($application_data);

            if($query->num_rows()==0){
                            $config = array(
                                'file_name' => $appl_sl_no,
                                'max_size' => 1000,
                                'allowed_types' =>'jpg|jpeg|png|gif',
                                'upload_path' => $this->photo_path
                            );

                            $this->load->library('upload',$config);

                            if ( ! $this->upload->do_upload())
                            {
                               return false;
                            }   
                            else
                            {
                                $image_data = $this->upload->data();
                                
                                    $application_data = "INSERT INTO PHOTO (APPLICANT_SERIAL, FILE_NAME) VALUES ( ";
                                    $application_data .=htmlentities("'{$appl_sl_no}', ");
                                    $application_data .=htmlentities("'{$image_data['orig_name']}' ");
                                    $application_data .=")";
                                    $insert= $this->db->query($application_data);

                                    if(!$insert) return false;
                                
                                
                                return $image_data['orig_name'];
                            }
                   }
                   else return false;   
                   
                $table = array('PHOTO');   
                return $table;
                            
        }
////////////////////////////////////////////////////////////////////////////////////////////////
        function student_get_photo($appl_sl_no)
        {
            $application_data = "SELECT FILE_NAME FROM PHOTO WHERE APPLICANT_SERIAL = ";
            $application_data .=htmlentities("'{$appl_sl_no}' ");
            $query= $this->db->query($application_data);
          
                if($query->num_rows()==1){
                   
                   $file_name = $query->result_array();
                   $array = array();
                   foreach($file_name as $row){
                        foreach($row as $r){
                        $array['FILE_NAME']=$row['FILE_NAME'];
                   }
                   }
                  
                   return $array['FILE_NAME'];
               }
               else return false;
            
               
               
               
        }
        
    /////////////////////////////////////////////////////////////////////////////    
    function student_personal_info_submission($personal){
        
                $application_data = "SELECT APPLICANT_SERIAL FROM STUDENT_PERSONAL_INFO WHERE APPLICANT_NAME = ";
                $application_data .=htmlentities("'{$personal['APPLICANT_NAME']}' ");
                $application_data .=" AND FATHER_NAME=";
                $application_data .=htmlentities("'{$personal['FATHER_NAME']}' ");
                $application_data .=" AND MOTHER_NAME=";
                $application_data .=htmlentities("'{$personal['MOTHER_NAME']}' ");
                $application_data .=" AND BIRTH_DATE=";
                $application_data .=htmlentities("to_date('{$personal['BIRTH_DATE']}','yyyy-mm-dd') ");
      
                $query= $this->db->query($application_data);
                
                if($query->num_rows()==0){
                    $application_data = "INSERT INTO STUDENT_PERSONAL_INFO (APPLICANT_NAME, FATHER_NAME, MOTHER_NAME, BIRTH_DATE, BIRTH_PLACE, NATIONALITY, RELIGION, SEX, MARITAL_STATUS) VALUES ( ";
                    $application_data .=htmlentities("'{$personal['APPLICANT_NAME']}', ");
                    $application_data .=htmlentities("'{$personal['FATHER_NAME']}', ");
                    $application_data .=htmlentities("'{$personal['MOTHER_NAME']}', ");
                    $application_data .=htmlentities("to_date('{$personal['BIRTH_DATE']}','yyyy-mm-dd'), ");
                    $application_data .=htmlentities("'{$personal['BIRTH_PLACE']}', ");
                    $application_data .=htmlentities("'{$personal['NATIONALITY']}', ");
                    $application_data .=htmlentities("'{$personal['RELIGION']}', ");
                    $application_data .=htmlentities("'{$personal['SEX']}', ");
                    $application_data .=htmlentities("'{$personal['MARITAL_STATUS']}' ");
                    $application_data .=")";
                    $insert= $this->db->query($application_data);

                    if($insert)
                    {
                        $application_data = "SELECT APPLICANT_SERIAL FROM STUDENT_PERSONAL_INFO WHERE APPLICANT_NAME = ";
                        $application_data .=htmlentities("'{$personal['APPLICANT_NAME']}' ");
                        $application_data .=" AND FATHER_NAME=";
                        $application_data .=htmlentities("'{$personal['FATHER_NAME']}' ");
                        $application_data .=" AND MOTHER_NAME=";
                        $application_data .=htmlentities("'{$personal['MOTHER_NAME']}' ");
                        $application_data .=" AND BIRTH_DATE=";
                        $application_data .=htmlentities("to_date('{$personal['BIRTH_DATE']}','yyyy-mm-dd') ");

                        $query= $this->db->query($application_data);

                        $result=$query->result_array();
                        if($query->num_rows()==0){
                            return false;
                        }
                        else{
                            $array = array();
                            foreach($result as $row){
                                $array[]=$row;
                            }
                            return $array;
                        }
                    }
                    else return false;
                }
                else return false;
                
    }
    
    ////////////////////////////////////////////////////////////////////////
    
    function student_contact_info_submission( $appl_sl_no,$contact){
                // save present addess, permanent address, email 
                $table = array();
                $table[] = 'STUDENT_CONTACT_INFO';
                $application_data = "SELECT PRESENT_ADDRESS FROM STUDENT_CONTACT_INFO WHERE APPLICANT_SERIAL = ";
                $application_data .=htmlentities("'{$appl_sl_no}' ");
                $query= $this->db->query($application_data);
                
                if($query->num_rows()==0){
                    $application_data = "INSERT INTO STUDENT_CONTACT_INFO (APPLICANT_SERIAL, PRESENT_ADDRESS, PERMAMENT_ADDRESS, EMAIL) VALUES ( ";
                    $application_data .=htmlentities("'{$appl_sl_no}', ");
                    $application_data .=htmlentities("'{$contact['PRESENT_ADDRESS']}', ");
                    $application_data .=htmlentities("'{$contact['PERMAMENT_ADDRESS']}', ");
                    $application_data .=htmlentities("'{$contact['EMAIL']}' ");
                    $application_data .=")";
                    $insert= $this->db->query($application_data);
                    
                    if(!$insert) return false;
                }
                else return false;
                
                
                return $table;
    }
  
    /////////////////////////////////////////////////////////////////////
    
     function student_phone_info_submission( $appl_sl_no,$phone ){
                // save present addess, permanent address, email 
                $table = array();
                $table[] = 'PHONE';
                $id=0;
                foreach($phone as $number)
                {
                    $id++;
                    $application_data = "SELECT APPLICANT_SERIAL FROM PHONE WHERE PHONE_NUM = ";
                    $application_data .=htmlentities("'{$number}' ");
                    $query= $this->db->query($application_data);

                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO PHONE (APPLICANT_SERIAL, PHONE_NUM, ID) VALUES ( ";
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$number}', ");
                        $application_data .=htmlentities("'{$id}' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                }
                
                
                return $table;
    }
    
    
   //////////////////////////////////////////////////////////////////////////////// 
    
    
    function student_reference_info_submission( $appl_sl_no,$reference ){
                
                for($i=0; $i<sizeof($reference['REF_NAME']);$i++)
                {
                    $id=$i+1;
                    $application_data = "SELECT APPLICANT_SERIAL FROM REFERENCE WHERE REF_NAME = ";
                    $application_data .=htmlentities("'{$reference['REF_NAME'][$i]}' ");
                    $application_data .=" AND APPLICANT_SERIAL=";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND REF_ADDRESS=";
                    $application_data .=htmlentities("'{$reference['REF_ADDRESS'][$i]}' ");
                    $application_data .=" AND REF_MOBILE=";
                    $application_data .=htmlentities("'{$reference['REF_MOBILE'][$i]}' ");
                    $query= $this->db->query($application_data);

                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO REFERENCE (APPLICANT_SERIAL, REF_NAME, REF_ADDRESS ,REF_MOBILE, ID) VALUES ( ";
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$reference['REF_NAME'][$i]}', ");
                        $application_data .=htmlentities("'{$reference['REF_ADDRESS'][$i]}', ");
                        $application_data .=htmlentities("'{$reference['REF_MOBILE'][$i]}', ");
                        $application_data .=htmlentities("'{$id}' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                }
                
                $table = array();
                $table[] = 'REFERENCE';
                
                return $table;
        
    }
    //////////////////////////////////////////////////////////////////////////
    
    
    function student_job_experience_info_submission( $appl_sl_no,$job_experience ){
                
                for($i=0; $i<sizeof($job_experience['DESIGNATION']);$i++)
                {
                    $id=$i+1;
                    $application_data = "SELECT APPLICANT_SERIAL FROM JOB_EXP WHERE DESIGNATION = ";
                    $application_data .=htmlentities("'{$job_experience['DESIGNATION'][$i]}' ");
                    $application_data .=" AND APPLICANT_SERIAL=";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND JOB_DESCRIPTION=";
                    $application_data .=htmlentities("'{$job_experience['JOB_DESCRIPTION'][$i]}' ");
                    $application_data .=" AND EXP_DURATION_FROM=";
                    $application_data .=htmlentities("to_date('{$job_experience['EXP_DURATION_FROM'][$i]}','yyyy-mm-dd') ");
                    $application_data .=" AND EXP_DURATION_TO=";
                    $application_data .=htmlentities("to_date('{$job_experience['EXP_DURATION_TO'][$i]}','yyyy-mm-dd') ");
                    $application_data .=" AND EXP_ORGANIZATION=";
                    $application_data .=htmlentities("'{$job_experience['EXP_ORGANIZATION'][$i]}' ");
                    $query= $this->db->query($application_data);

                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO JOB_EXP (APPLICANT_SERIAL, DESIGNATION ,JOB_DESCRIPTION, EXP_DURATION_FROM ,EXP_DURATION_TO ,EXP_ORGANIZATION, ID) VALUES ( ";
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$job_experience['DESIGNATION'][$i]}', ");
                        $application_data .=htmlentities("'{$job_experience['JOB_DESCRIPTION'][$i]}', ");
                        $application_data .=htmlentities("to_date('{$job_experience['EXP_DURATION_FROM'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("to_date('{$job_experience['EXP_DURATION_TO'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("'{$job_experience['EXP_ORGANIZATION'][$i]}', ");
                        $application_data .=htmlentities("'{$id}' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                }
                
                $table = array();
                $table[] = 'JOB_EXP';
                
                return $table;
        
    }
    /////////////////////////////////////////////////////////////////////////////////////
    
    function student_current_admission_info_submission( $appl_sl_no,$current_admission ){
               
                $application_data = "SELECT PROGRAM FROM CURRENT_ADMISSION_INFO WHERE APPLICANT_SERIAL = ";
                $application_data .=htmlentities("'{$appl_sl_no}' ");
                $query= $this->db->query($application_data);
                
                if($query->num_rows()==0){
                    $application_data = "INSERT INTO CURRENT_ADMISSION_INFO (APPLICANT_SERIAL, PROGRAM, DEPT_INST, DIVISION, DESIRED_STATUS, PRE_ADMISSION) VALUES ( ";
                    $application_data .=htmlentities("'{$appl_sl_no}', ");
                    $application_data .=htmlentities("'{$current_admission['PROGRAM']}', ");
                    $application_data .=htmlentities("'{$current_admission['DEPT_INST']}', ");
                    $application_data .=htmlentities("'{$current_admission['DIVISION']}', ");
                    $application_data .=htmlentities("'{$current_admission['DESIRED_STATUS']}', ");
                    $application_data .=htmlentities("'{$current_admission['PRE_ADMISSION']}' ");
                    $application_data .=")";
                    $insert= $this->db->query($application_data);
                    
                    if(!$insert) return false;
                }
                else return false;
                
                $table = array();
                $table[] = 'CURRENT_ADMISSION_INFO';
                
                return $table;
    }
    ///////////////////////////////////////////////////////////////////////////////
    
    function student_pre_admission_info_submission( $appl_sl_no,$program,$pre_admission ){
                
        
                $application_data = "SELECT PROGRAM FROM PRE_ADMISSION WHERE APPLICANT_SERIAL = ";
                $application_data .=htmlentities("'{$appl_sl_no}' ");
                $query= $this->db->query($application_data);
                
                if($query->num_rows()==0){
                    $application_data = "INSERT INTO PRE_ADMISSION (APPLICANT_SERIAL, PROGRAM, PRE_STD_ID, PRE_DEPT_INST, PRE_SEMESTER) VALUES ( ";
                    $application_data .=htmlentities("'{$appl_sl_no}', ");
                    $application_data .=htmlentities("'{$program}', ");
                    $application_data .=htmlentities("'{$pre_admission['PRE_STD_ID']}', ");
                    $application_data .=htmlentities("'{$pre_admission['PRE_DEPT_INST']}', ");
                    $application_data .=htmlentities("'{$pre_admission['PRE_SEMESTER']}' ");
                    $application_data .=")";
                    $insert= $this->db->query($application_data);
                    
                    if(!$insert) return false;
                }
                else return false;
                
                $table = array();
                $table[] = 'PRE_ADMISSION';
                
                return $table;
    }
    
    ///////////////////////////////////////////////////////////////////////////////////
    
    function student_employed_info_submission( $appl_sl_no,$employed ){
                
                $application_data = "SELECT IS_EMPLOYED FROM EMPLOYEE_STATUS WHERE APPLICANT_SERIAL = ";
                $application_data .=htmlentities("'{$appl_sl_no}' ");
                $query= $this->db->query($application_data);
                
                if($query->num_rows()==0){
                    $application_data = "INSERT INTO EMPLOYEE_STATUS (APPLICANT_SERIAL, IS_EMPLOYED, EMP_STATUS) VALUES ( ";
                    $application_data .=htmlentities("'{$appl_sl_no}', ");
                    $application_data .=htmlentities("'{$employed['IS_EMPLOYED']}', ");
                    if($employed['IS_EMPLOYED']=='yes'){
                        $application_data .=htmlentities("'{$employed['EMP_STATUS']}' ");
                    }
                    else $application_data .=htmlentities("'Not Employee'");
                    $application_data .=")";
                    $insert= $this->db->query($application_data);
                    
                    if(!$insert) return false;
                }
                else return false;
                
                $table = array();
                $table[] = 'EMPLOYEE_STATUS';
                
                return $table;
    }
  
    
 /////////////////////////////////////////////////////////////////////////////////////////   
    
    function student_bsc_info_submission( $appl_sl_no,$program,$bsc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($bsc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into bsc basic info
                    $application_data = "SELECT ID FROM BSC_BASIC_INFO WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND ID=";
                    $application_data .=htmlentities("'{$id}' ");
                    $application_data .=" AND PROGRAM=";
                    $application_data .=htmlentities("'{$program}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO BSC_BASIC_INFO (ID, APPLICANT_SERIAL, PROGRAM, CER_DEG_OBT_FROM, DEGREE_NAME, CREDIT_TRANSFER, CREDIT_EARNED, CRE_EARN_WITHOUT_EXEMPTION, GRADE_SYSTEM, PASSING_YEAR, DURATION_FROM, DURATION_TO, DURATION_OF_DEGREE, MAJOR_FIELD_SPECIALIZATION, CMT_EQUIVALENCE_COMMITTEE) VALUES ( ";
                        $application_data .=htmlentities("'{$id}', ");
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$program}', ");
                        $application_data .=htmlentities("'{$bsc['CER_DEG_OBT_FROM'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['DEGREE_NAME'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['CREDIT_TRANSFER'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['CREDIT_EARNED'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['CRE_EARN_WITHOUT_EXEMPTION'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['GRADE_SYSTEM'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['PASSING_YEAR'][$i]}', ");
                        $application_data .=htmlentities("to_date('{$bsc['DURATION_FROM'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("to_date('{$bsc['DURATION_TO'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("'{$bsc['DURATION_OF_DEGREE'][$i]}', ");
                        $application_data .=htmlentities("'{$bsc['MAJOR_FIELD_SPECIALIZATION'][$i]}', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                 
                } 
                $table[] = 'BSC_BASIC_INFO';
                   
                return $table;
    }
    
//////////////////////////////////////////////////////////////////////////////////////   
    
function student_bsc_buet_gradute_submission( $appl_sl_no,$program,$bsc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($bsc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    // insert into buet gradute
                    if($bsc['CER_DEG_OBT_FROM'][$i]=="BUET")
                    {
                        $application_data = "SELECT DEPARTMENT FROM BUET_GRATUDE WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND BSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO BUET_GRATUDE (APPLICANT_SERIAL, PROGRAM, BSC_ID, DEPARTMENT, STUDENT_ID, TESTIMONIAL_DSW_PROVIDED, CMT_DSW_OFFICE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$bsc['DEPARTMENT']["BSC{$id}"]}', ");
                            $application_data .=htmlentities("'{$bsc['STUDENT_ID']["BSC{$id}"]}', ");
                            $application_data .=htmlentities("'PENDING', ");
                            $application_data .=htmlentities("'PENDING' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                    }
                }
                
                $table[] = 'BUET_GRATUDE';
                
                return $table;
    }    
    
////////////////////////////////////////////////////////////////////////////////////////////////  
    
    function student_bsc_grade_submission( $appl_sl_no,$program,$bsc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($bsc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into bsc cgpa or percentage of marks
                    if($bsc['GRADE_SYSTEM'][$i]=="CGPA")
                    {
                        $application_data = "SELECT CGPA FROM BSC_CGPA WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND BSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO BSC_CGPA (APPLICANT_SERIAL, PROGRAM, BSC_ID, CGPA, CGPA_AB_2_5, CGPA_SCALE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$bsc['GRADE'][$i]}', ");
                            if($bsc['GRADE'][$i]>2.5) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            $application_data .=htmlentities("'{$bsc['GRADE_SCALE'][$i]}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                      
                    }
                    else
                    {
                        $application_data = "SELECT PER_MARKS FROM BSC_MARKS WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND BSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO BSC_MARKS (APPLICANT_SERIAL, PROGRAM, BSC_ID, PER_MARKS, MARKS_AB_50_PER, TOTAL_MARKS) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$bsc['GRADE'][$i]}', ");
                            if($bsc['GRADE'][$i]>50) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            $application_data .=htmlentities("'{$bsc['GRADE_SCALE'][$i]}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        
                    }
                }
                
               $table[] = 'BSC_CGPA';
               $table[] = 'BSC_MARKS';       
                return $table;
    }
    
    
//////////////////////////////////////////////////////////////////////////////////////////    
  

     function student_msc_info_submission( $appl_sl_no,$program,$msc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($msc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into msc basic info
                    $application_data = "SELECT ID FROM MSC_BASIC_INFO WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND ID=";
                    $application_data .=htmlentities("'{$id}' ");
                    $application_data .=" AND PROGRAM=";
                    $application_data .=htmlentities("'{$program}' ");  
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO MSC_BASIC_INFO (ID, APPLICANT_SERIAL, PROGRAM, CER_DEG_OBT_FROM, DEGREE_NAME, CREDIT_TRANSFER, CREDIT_EARNED, CRE_EARN_WITHOUT_EXEMPTION, GRADE_SYSTEM, PASSING_YEAR, DURATION_FROM, DURATION_TO, DURATION_OF_DEGREE, MAJOR_FIELD_SPECIALIZATION, CMT_EQUIVALENCE_COMMITTEE) VALUES ( ";
                        $application_data .=htmlentities("'{$id}', ");
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$program}', ");
                        $application_data .=htmlentities("'{$msc['CER_DEG_OBT_FROM'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['DEGREE_NAME'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['CREDIT_TRANSFER'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['CREDIT_EARNED'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['CRE_EARN_WITHOUT_EXEMPTION'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['GRADE_SYSTEM'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['PASSING_YEAR'][$i]}', ");
                        $application_data .=htmlentities("to_date('{$msc['DURATION_FROM'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("to_date('{$msc['DURATION_TO'][$i]}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("'{$msc['DURATION_OF_DEGREE'][$i]}', ");
                        $application_data .=htmlentities("'{$msc['MAJOR_FIELD_SPECIALIZATION'][$i]}', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                }
                $table[] = 'MSC_BASIC_INFO';
                  
                return $table;
    }
    
    
    
//////////////////////////////////////////////////////////////////////////////////////////////    

     function student_msc_buet_masters_submission( $appl_sl_no,$program,$msc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($msc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    
                    // insert into buet masters
                    if($msc['CER_DEG_OBT_FROM'][$i]=="BUET")
                    {
                        $application_data = "SELECT DEPARTMENT FROM BUET_MASTERS WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND MSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO BUET_MASTERS (APPLICANT_SERIAL, PROGRAM, MSC_ID, DEPARTMENT, STUDENT_ID, TESTIMONIAL_DSW_PROVIDED, CMT_DSW_OFFICE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$msc['DEPARTMENT']["MSC{$id}"]}', ");
                            $application_data .=htmlentities("'{$msc['STUDENT_ID']["MSC{$id}"]}', ");
                            $application_data .=htmlentities("'PENDING', ");
                            $application_data .=htmlentities("'PENDING' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                      
                        
                    }
                   
                   
                }
                $table[] = 'BUET_MASTERS';
                return $table;
    }
    
    
    
 ///////////////////////////////////////////////////////////////////////////////////////////////   
    
    
    function student_msc_grade_submission( $appl_sl_no,$program,$msc ){
                
                $table = array();
                
                for($i=0; $i<sizeof($msc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into msc cgpa or percentage of marks
                    if($msc['GRADE_SYSTEM'][$i]=="CGPA")
                    {
                        $application_data = "SELECT CGPA FROM MSC_CGPA WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND MSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO MSC_CGPA (APPLICANT_SERIAL, PROGRAM, MSC_ID, CGPA, CGPA_AB_2_7_5, CGPA_SCALE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$msc['GRADE'][$i]}', ");
                            if($msc['GRADE'][$i]>2.75) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            $application_data .=htmlentities("'{$msc['GRADE_SCALE'][$i]}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                       
                    }
                    else
                    {
                        $application_data = "SELECT PER_MARKS FROM MSC_MARKS WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");
                        $application_data .=" AND PROGRAM=";
                        $application_data .=htmlentities("'{$program}' ");
                        $application_data .=" AND MSC_ID=";
                        $application_data .=htmlentities("'{$id}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO MSC_MARKS (APPLICANT_SERIAL, PROGRAM, MSC_ID, PER_MARKS, MARKS_AB_55_PER, TOTAL_MARKS) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$program}', ");
                            $application_data .=htmlentities("'{$id}', ");
                            $application_data .=htmlentities("'{$msc['GRADE'][$i]}', ");
                            if($msc['GRADE'][$i]>55) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            $application_data .=htmlentities("'{$msc['GRADE_SCALE'][$i]}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        
                        
                    }
                }
                $table[] = 'MSC_CGPA';
                $table[] = 'MSC_MARKS';
                return $table;
    }
    
 ///////////////////////////////////////////////////////////////////////////////////////////
    
    function student_secondary_info_submission( $appl_sl_no,$secondary ){
                    
                    $table = array();
                    
                    // insert into secondary info
                    $application_data = "SELECT CER_DEG_OBT_FROM FROM SECONDARY WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO SECONDARY (APPLICANT_SERIAL, CER_DEG_OBT_FROM, DEGREE_NAME, BOARD, GRADE_SYSTEM, PASSING_YEAR, DURATION_FROM, DURATION_TO, DURATION_OF_DEGREE, MAJOR_FIELD_SPECIALIZATION, CMT_EQUIVALENCE_COMMITTEE) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'{$secondary['CER_DEG_OBT_FROM']}', ");
                        $application_data .=htmlentities("'{$secondary['DEGREE_NAME']}', ");
                        $application_data .=htmlentities("'{$secondary['BOARD']}', ");
                        $application_data .=htmlentities("'{$secondary['GRADE_SYSTEM']}', ");
                        $application_data .=htmlentities("'{$secondary['PASSING_YEAR']}', ");
                        $application_data .=htmlentities("to_date('{$secondary['DURATION_FROM']}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("to_date('{$secondary['DURATION_TO']}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("'{$secondary['DURATION_OF_DEGREE']}', ");
                        $application_data .=htmlentities("'{$secondary['MAJOR_FIELD_SPECIALIZATION']}', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    
                    $table[] = 'SECONDARY';
                    
                return $table;
    }
  /////////////////////////////////////////////////////////////////////////////////////////////  
    
    function student_secondary_grade_submission( $appl_sl_no,$secondary ){
                    
                    $table = array();
                    
                    // insert into bsc cgpa or percentage of marks
                    if($secondary['GRADE_SYSTEM']=="GPA")
                    {
                        $application_data = "SELECT GPA FROM SECONDARY_GPA WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO SECONDARY_GPA (APPLICANT_SERIAL, GPA, GPA_AB_3_5, GPA_LESS_2, GPA_SCALE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$secondary['GRADE']}', ");
                            
                            if($secondary['GRADE']>3.5) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            
                            if($secondary['GRADE']<2) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            $application_data .=htmlentities("'{$secondary['GRADE_SCALE']}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        $table[] = 'SECONDARY_GPA';
                        
                    }
                    else
                    {
                        $application_data = "SELECT PER_MARKS FROM SECONDARY_MARKS WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO SECONDARY_MARKS (APPLICANT_SERIAL, PER_MARKS, FIRST_DIV, THIRD_DIV, TOTAL_MARKS) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$secondary['GRADE']}', ");
                            
                            if($secondary['GRADE']>=60) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            if($secondary['GRADE']< 45) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            $application_data .=htmlentities("'{$secondary['GRADE_SCALE']}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        $table[] = 'SECONDARY_MARKS';
                        
                    }
                
                
                return $table;
    }
  ////////////////////////////////////////////////////////////////////////////////////////
    
    function student_higher_secondary_info_submission( $appl_sl_no,$higher_secondary ){
                
                    $table = array();
                    // insert into higher_secondary info
                    $application_data = "SELECT CER_DEG_OBT_FROM FROM HIGHER_SECONDARY WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO HIGHER_SECONDARY (APPLICANT_SERIAL, CER_DEG_OBT_FROM, DEGREE_NAME, BOARD, GRADE_SYSTEM, PASSING_YEAR, DURATION_FROM, DURATION_TO, DURATION_OF_DEGREE, MAJOR_FIELD_SPECIALIZATION, CMT_EQUIVALENCE_COMMITTEE) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'{$higher_secondary['CER_DEG_OBT_FROM']}', ");
                        $application_data .=htmlentities("'{$higher_secondary['DEGREE_NAME']}', ");
                        $application_data .=htmlentities("'{$higher_secondary['BOARD']}', ");
                        $application_data .=htmlentities("'{$higher_secondary['GRADE_SYSTEM']}', ");
                        $application_data .=htmlentities("'{$higher_secondary['PASSING_YEAR']}', ");
                        $application_data .=htmlentities("to_date('{$higher_secondary['DURATION_FROM']}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("to_date('{$higher_secondary['DURATION_TO']}','yyyy-mm-dd'), ");
                        $application_data .=htmlentities("'{$higher_secondary['DURATION_OF_DEGREE']}', ");
                        $application_data .=htmlentities("'{$higher_secondary['MAJOR_FIELD_SPECIALIZATION']}', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    $table[] = 'HIGHER_SECONDARY';
                    
                
                return $table;
    }
    
  //////////////////////////////////////////////////////////////////////////////////////  
    
    function student_higher_secondary_grade_submission( $appl_sl_no,$higher_secondary ){
                
                    $table = array();
                    
                    // insert into bsc cgpa or percentage of marks
                    if($higher_secondary['GRADE_SYSTEM']=="GPA")
                    {
                        $application_data = "SELECT GPA FROM HIGHER_SECONDARY_GPA WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO HIGHER_SECONDARY_GPA (APPLICANT_SERIAL, GPA, GPA_AB_3_5, GPA_LESS_2, GPA_SCALE) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$higher_secondary['GRADE']}', ");
                            
                            if($higher_secondary['GRADE']>3.5) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            
                            if($higher_secondary['GRADE']<2) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            $application_data .=htmlentities("'{$higher_secondary['GRADE_SCALE']}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        $table[] = 'HIGHER_SECONDARY_GPA';
                        
                    }
                    else
                    {
                        $application_data = "SELECT PER_MARKS FROM HIGHER_SECONDARY_MARKS WHERE APPLICANT_SERIAL = ";
                        $application_data .=htmlentities("'{$appl_sl_no}' ");

                        $query= $this->db->query($application_data);

                        if($query->num_rows()==0){
                            $application_data = "INSERT INTO HIGHER_SECONDARY_MARKS (APPLICANT_SERIAL, PER_MARKS, FIRST_DIV, THIRD_DIV, TOTAL_MARKS) VALUES ( ";
                            $application_data .=htmlentities("'{$appl_sl_no}', ");
                            $application_data .=htmlentities("'{$higher_secondary['GRADE']}', ");
                            
                            if($higher_secondary['GRADE']>=60) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            if($higher_secondary['GRADE']< 45) $application_data .=htmlentities("'yes', ");
                            else $application_data .=htmlentities("'no', ");
                            
                            $application_data .=htmlentities("'{$higher_secondary['GRADE_SCALE']}' ");
                            $application_data .=")";
                            $insert= $this->db->query($application_data);
                            if(!$insert) return false;
                        }
                        else return false;
                        
                        $table[] = 'HIGHER_SECONDARY_MARKS';
                    }
                
                
                return $table;
    }
    
////////////////////////////////////////////////////////////////////////////////////////////  
    
     function student_secondary_document_info_submission( $appl_sl_no ){
                
                    $table = array();
                    // insert into secondary document info
                    $application_data = "SELECT TRANSCRIPT FROM SECONDARY_DOCUMENT WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO SECONDARY_DOCUMENT (APPLICANT_SERIAL, TRANSCRIPT, CERTIFICATE) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'PENDING', "); 
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    $table[] = 'SECONDARY_DOCUMENT';
                
                return $table;
    }

    /////////////////////////////////////////////////////////////////////////////////
    
    function student_higher_secondary_document_info_submission( $appl_sl_no ){
                
                    $table = array();
                    // insert into secondary document info
                    $application_data = "SELECT TRANSCRIPT FROM HIGHER_SECONDARY_DOCUMENT WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO HIGHER_SECONDARY_DOCUMENT (APPLICANT_SERIAL, TRANSCRIPT, CERTIFICATE) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'PENDING', "); 
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    $table[] = 'HIGHER_SECONDARY_DOCUMENT';
                
                return $table;
    }
    
 

    ////////////////////////////////////////////////////////////////////////////////////////////////
    
    

    function student_bsc_document_info_submission( $appl_sl_no, $program, $bsc ){
                
                $table = array();
                for($i=0; $i<sizeof($bsc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into bsc document info
                    $application_data = "SELECT TRANSCRIPT FROM BSC_DOCUMENT WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND PROGRAM=";
                    $application_data .=htmlentities("'{$program}' ");
                    $application_data .=" AND BSC_ID=";
                    $application_data .=htmlentities("'{$id}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO BSC_DOCUMENT (APPLICANT_SERIAL, PROGRAM, BSC_ID, TRANSCRIPT, CERTIFICATE, TESTIMONIAL, TESTIMONIAL_AUTHORIZED_PERSON) VALUES ( ";
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$program}', ");
                        $application_data .=htmlentities("'{$id}', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                }
                
                $table[] = 'BSC_DOCUMENT';
                
                return $table;
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    
    function student_msc_document_info_submission( $appl_sl_no, $program, $msc ){
                
                $table = array();
                for($i=0; $i<sizeof($msc['CER_DEG_OBT_FROM']);$i++)
                {
                    $id = $i+1;
                    
                    // insert into bsc document info
                    $application_data = "SELECT TRANSCRIPT FROM MSC_DOCUMENT WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    $application_data .=" AND PROGRAM=";
                    $application_data .=htmlentities("'{$program}' ");
                    $application_data .=" AND MSC_ID=";
                    $application_data .=htmlentities("'{$id}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO MSC_DOCUMENT (APPLICANT_SERIAL, PROGRAM, MSC_ID, TRANSCRIPT, CERTIFICATE, TESTIMONIAL, TESTIMONIAL_AUTHORIZED_PERSON) VALUES ( ";
                        $application_data .=htmlentities("'{$appl_sl_no}', ");
                        $application_data .=htmlentities("'{$program}', ");
                        $application_data .=htmlentities("'{$id}', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING', ");
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                }
                $table[] = 'MSC_DOCUMENT';
                return $table;
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    
     function student_document_info_submission( $appl_sl_no ){
                
                    $table = array();
                    // insert into document info
                    $application_data = "SELECT REQUIRED_MISSING_DOC FROM DOCUMENT_INFO WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO DOCUMENT_INFO (APPLICANT_SERIAL, REQUIRED_MISSING_DOC, EMP_LET_CONSENT_PRE_FORM, CER_MEN_TOTAL_CREDIT_HR_EARNED) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'PENDING', "); 
                        $application_data .=htmlentities("'PENDING', "); 
                        $application_data .=htmlentities("'PENDING' ");
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    $table[] = 'DOCUMENT_INFO';
                return $table;
    }
    //////////////////////////////////////////////////////////////////////////////
    
    function student_eligibility_info_submission( $appl_sl_no ){
                
                    $table = array();
                    // insert into document info
                    $application_data = "SELECT FULFILL_MIN_REQUIREMENT FROM ELIGIBILITY WHERE APPLICANT_SERIAL = ";
                    $application_data .=htmlentities("'{$appl_sl_no}' ");
                    
                    $query= $this->db->query($application_data);
                    
                    if($query->num_rows()==0){
                        $application_data = "INSERT INTO ELIGIBILITY (APPLICANT_SERIAL, FULFILL_MIN_REQUIREMENT, IS_ELIGIBLE_ADM_TEST) VALUES ( ";
                        
                        $application_data .=htmlentities("'{$appl_sl_no}', "); 
                        $application_data .=htmlentities("'PENDING', "); 
                        $application_data .=htmlentities("'PENDING' "); 
                        $application_data .=")";
                        $insert= $this->db->query($application_data);
                        if(!$insert) return false;
                    }
                    else return false;
                    
                    $table[] = 'ELIGIBILITY';
                
                return $table;
    }
   //////////////////////////////////////////////////////////////////////// 
    
    function delete_row($table_name,$appl_sl_no){
        
        $application_data = "DELETE FROM {$table_name} WHERE APPLICANT_SERIAL = " ;
        $application_data .=htmlentities("'{$appl_sl_no}' ");
        
        $query= $this->db->query($application_data);
    }
 
    //////////////////////////////////////////////////////////////////////////////
    
}
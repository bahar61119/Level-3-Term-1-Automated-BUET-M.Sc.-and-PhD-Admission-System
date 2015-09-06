<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applicant_info extends CI_Controller {
        
    
	public function index()
	{
            
	}
        
        public function info_list($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            //CURRENT_ADMISSION_INFO
            $CURRENT_ADMISSION_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['CURRENT_ADMISSION_INFO'],$APPLICANT_SERIAL);
            if($CURRENT_ADMISSION_INFO)
            {
                $data[$this->table_library->TABLES['CURRENT_ADMISSION_INFO']] = $CURRENT_ADMISSION_INFO;
            }
            else  redirect ('admin');
            
            //eiligibility info
            $ELIGIBILITY = $this->applicant_info_model->full_table($this->table_library->TABLES['ELIGIBILITY'],$APPLICANT_SERIAL);
            if($ELIGIBILITY)
            {
                $data[$this->table_library->TABLES['ELIGIBILITY']] = $ELIGIBILITY;
            }
            else  redirect ('admin');
            
            $data['main_content']='admin/applicant_info_list_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
            
        }
        
        public function table($APPLICANT_SERIAL = NULL)
	{
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            //STUDENT PERSONAL INFO
            $STUDENT_PERSONAL_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'],$APPLICANT_SERIAL);
            if($STUDENT_PERSONAL_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['STUDENT_PERSONAL_INFO']] = $STUDENT_PERSONAL_INFO;
            }
            else  redirect ('admin');
            
            //STUDENT CONTACT INFO
            $STUDENT_CONTACT_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['STUDENT_CONTACT_INFO'],$APPLICANT_SERIAL);
            if($STUDENT_CONTACT_INFO)
            {
                $data[$this->table_library->TABLES['STUDENT_CONTACT_INFO']] = $STUDENT_CONTACT_INFO;
            }
            else  redirect ('admin');
            
            //PHONE
            $PHONE = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['PHONE'],$APPLICANT_SERIAL);
            if($PHONE)
            {
                $data[$this->table_library->TABLES['PHONE']] = $PHONE;
            }
            else  redirect ('admin');
            
            //CURRENT_ADMISSION_INFO
            $CURRENT_ADMISSION_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['CURRENT_ADMISSION_INFO'],$APPLICANT_SERIAL);
            if($CURRENT_ADMISSION_INFO)
            {
                $data[$this->table_library->TABLES['CURRENT_ADMISSION_INFO']] = $CURRENT_ADMISSION_INFO;
            }
            else  redirect ('admin');
            
            if($CURRENT_ADMISSION_INFO['PRE_ADMISSION']=='yes')
            {
                //PRE_ADMISSION
                $PRE_ADMISSION = $this->applicant_info_model->full_table($this->table_library->TABLES['PRE_ADMISSION'],$APPLICANT_SERIAL);
                if($PRE_ADMISSION)
                {
                    $data[$this->table_library->TABLES['PRE_ADMISSION']] = $PRE_ADMISSION;
                }
                else  redirect ('admin');
            }
            
            //SECONDARY
            $SECONDARY = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY'],$APPLICANT_SERIAL);
            if($SECONDARY)
            {
                $data[$this->table_library->TABLES['SECONDARY']] = $SECONDARY;
            }
            else  redirect ('admin');
            
            if($SECONDARY['GRADE_SYSTEM']=='GPA')
            {
                //SECONDARY_GPA
                $SECONDARY_GPA = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_GPA'],$APPLICANT_SERIAL);
                if($SECONDARY_GPA)
                {
                    $data[$this->table_library->TABLES['SECONDARY_GPA']] = $SECONDARY_GPA ;
                }
                else  redirect ('admin');
            }
            else
            {
                //SECONDARY_MARKS
                $SECONDARY_MARKS = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_MARKS'],$APPLICANT_SERIAL);
                if($SECONDARY_MARKS)
                {
                    $data[$this->table_library->TABLES['SECONDARY_MARKS']] = $SECONDARY_MARKS;
                }
                else  redirect ('admin');
            }
            
            //SECONDARY_DOCUMENT
            $SECONDARY_DOCUMENT = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_DOCUMENT'],$APPLICANT_SERIAL);
            if($SECONDARY_DOCUMENT)
            {
                $data[$this->table_library->TABLES['SECONDARY_DOCUMENT']] = $SECONDARY_DOCUMENT;
            }
            else  redirect ('admin');
            
            //HIGHER_SECONDARY
            $HIGHER_SECONDARY = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY'],$APPLICANT_SERIAL);
            if($HIGHER_SECONDARY)
            {
                $data[$this->table_library->TABLES['HIGHER_SECONDARY']] = $HIGHER_SECONDARY;
            }
            else  redirect ('admin');
            
            if($HIGHER_SECONDARY['GRADE_SYSTEM']=='GPA')
            {
                //HIGHER_SECONDARY_GPA
                $HIGHER_SECONDARY_GPA = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'],$APPLICANT_SERIAL);
                if($HIGHER_SECONDARY_GPA)
                {
                    $data[$this->table_library->TABLES['HIGHER_SECONDARY_GPA']] = $HIGHER_SECONDARY_GPA ;
                }
                else  redirect ('admin');
            }
            else
            {
                //HIGHER_SECONDARY_MARKS
                $HIGHER_SECONDARY_MARKS = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'],$APPLICANT_SERIAL);
                if($HIGHER_SECONDARY_MARKS)
                {
                    $data[$this->table_library->TABLES['HIGHER_SECONDARY_MARKS']] = $HIGHER_SECONDARY_MARKS;
                }
                else  redirect ('admin');
            }
            
            //HIGHER_SECONDARY_DOCUMENT
            $HIGHER_SECONDARY_DOCUMENT = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT'],$APPLICANT_SERIAL);
            if($HIGHER_SECONDARY_DOCUMENT)
            {
                $data[$this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT']] = $HIGHER_SECONDARY_DOCUMENT;
            }
            else  redirect ('admin');
            
            //BSC_BASIC_INFO
            $BSC_BASIC_INFO = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['BSC_BASIC_INFO'],$APPLICANT_SERIAL);
            if($BSC_BASIC_INFO)
            {
                $data[$this->table_library->TABLES['BSC_BASIC_INFO']] = $BSC_BASIC_INFO;
            }
            else  redirect ('admin');
            
            $BSC_CGPA = array();
            $BSC_MARKS = array();
            $BSC_DOCUMENT = array();
            $BUET_GRATUDE = array();
            
            $bsc_total = sizeof($BSC_BASIC_INFO);   
            for($i = 0;$i<$bsc_total;$i++)
            {
                if($BSC_BASIC_INFO[$i]['GRADE_SYSTEM']=='CGPA')
                {
                    //BSC_CGPA
                    $CGPA = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_CGPA'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'], $BSC_BASIC_INFO[$i]['PROGRAM'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                    
                    if($CGPA)
                    {
                        $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']] = $CGPA ;
                    }
                    else  redirect ('admin');
                    
                }
                else
                {
                    //BSC_MARKS
                    $MARKS = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_MARKS'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                   
                    if($MARKS)
                    {
                        $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']] = $MARKS ;
                    }
                    else  redirect ('admin');
                    
                }
                
                

                //BSC_DOCUMENT
                $DOCUMENT = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                
                if($DOCUMENT)
                {
                   $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']] = $DOCUMENT ;
                }
                else  redirect ('admin');
                

                if($BSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']=='BUET')
                {
                   //BSC_GRATUDE
                    $GRATUDE = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BUET_GRATUDE'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                    
                    if($GRATUDE)
                    {
                        $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']] = $GRATUDE ;
                    }
                    else  redirect ('admin');
                    
                }
            }
            $data[$this->table_library->TABLES['BSC_CGPA']] = $BSC_CGPA;
            $data[$this->table_library->TABLES['BSC_MARKS']] = $BSC_MARKS;
            $data[$this->table_library->TABLES['BSC_DOCUMENT']] = $BSC_DOCUMENT;
            $data[$this->table_library->TABLES['BUET_GRATUDE']] = $BUET_GRATUDE;
            
            
            
            if($CURRENT_ADMISSION_INFO['PROGRAM']=='PhD')
            {
                //MSC_BASIC_INFO
                $MSC_BASIC_INFO = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['MSC_BASIC_INFO'],$APPLICANT_SERIAL);
                if($MSC_BASIC_INFO)
                {
                    $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                    $data[$this->table_library->TABLES['MSC_BASIC_INFO']] = $MSC_BASIC_INFO;
                }
                else  redirect ('admin');


                $MSC_CGPA = array();
                $MSC_MARKS = array();
                $MSC_DOCUMENT = array();
                $BUET_MASTERS = array();

                $msc_total = sizeof($MSC_BASIC_INFO);   
                for($i = 0;$i<$msc_total;$i++)
                {
                    if($MSC_BASIC_INFO[$i]['GRADE_SYSTEM']=='CGPA')
                    {
                        //MSC_CGPA
                        $CGPA = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_CGPA'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'], $MSC_BASIC_INFO[$i]['PROGRAM'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($CGPA)
                        {
                            $MSC_CGPA[$MSC_BASIC_INFO[$i]['ID']] = $CGPA ;
                        }
                        else  redirect ('admin');

                    }
                    else
                    {
                        //MSC_MARKS
                        $MARKS = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_MARKS'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($MARKS)
                        {
                            $MSC_MARKS[$MSC_BASIC_INFO[$i]['ID']] = $MARKS ;
                        }
                        else  redirect ('admin');

                    }



                    //MSC_DOCUMENT
                    $DOCUMENT = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_DOCUMENT'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                    if($DOCUMENT)
                    {
                       $MSC_DOCUMENT[$MSC_BASIC_INFO[$i]['ID']] = $DOCUMENT ;
                    }
                    else  redirect ('admin');


                    if($MSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']=='BUET')
                    {
                       //BSC_MASTERS
                        $MASTERS = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['BUET_MASTERS'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($MASTERS)
                        {
                            $BUET_MASTERS[$MSC_BASIC_INFO[$i]['ID']] = $MASTERS ;
                        }
                        else  redirect ('admin');

                    }
                }
                $data[$this->table_library->TABLES['MSC_CGPA']] = $MSC_CGPA;
                $data[$this->table_library->TABLES['MSC_MARKS']] = $MSC_MARKS;
                $data[$this->table_library->TABLES['MSC_DOCUMENT']] = $MSC_DOCUMENT;
                $data[$this->table_library->TABLES['BUET_MASTERS']] = $BUET_MASTERS;
            }
            
            //REFERENCE
            $REFERENCE = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['REFERENCE'],$APPLICANT_SERIAL);
            if($REFERENCE)
            {
                $data[$this->table_library->TABLES['REFERENCE']] = $REFERENCE;
            }
            
            //EMPLOYEE_STATUS
            $EMPLOYEE_STATUS = $this->applicant_info_model->full_table($this->table_library->TABLES['EMPLOYEE_STATUS'],$APPLICANT_SERIAL);
            if($EMPLOYEE_STATUS)
            {
                $data[$this->table_library->TABLES['EMPLOYEE_STATUS']] = $EMPLOYEE_STATUS;
            }
            else  redirect ('admin');
            
            //JOB_EXP
             $JOB_EXP = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['JOB_EXP'],$APPLICANT_SERIAL);
            if($JOB_EXP)
            {
                $data[$this->table_library->TABLES['JOB_EXP']] = $JOB_EXP;
            }
            
            //Document Info
            $DOCUMENT_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['DOCUMENT_INFO'],$APPLICANT_SERIAL);
            if($DOCUMENT_INFO)
            {
                $data[$this->table_library->TABLES['DOCUMENT_INFO']] = $DOCUMENT_INFO;
            }
            else  redirect ('admin');
            
            //eiligibility info
            $ELIGIBILITY = $this->applicant_info_model->full_table($this->table_library->TABLES['ELIGIBILITY'],$APPLICANT_SERIAL);
            if($ELIGIBILITY)
            {
                $data[$this->table_library->TABLES['ELIGIBILITY']] = $ELIGIBILITY;
            }
            else  redirect ('admin');
            
            if($ELIGIBILITY['IS_ELIGIBLE_ADM_TEST']=='yes')
            {
                $ADMISSION_TEST = $this->applicant_info_model->full_table($this->table_library->TABLES['ADMISSION_TEST'],$APPLICANT_SERIAL);
                if($ADMISSION_TEST)
                {
                    $data[$this->table_library->TABLES['ADMISSION_TEST']] = $ADMISSION_TEST;
                }
                else  redirect ('admin');
            }
            //comment on student info
            $INELIGIBILITY = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['INELIGIBILITY'],$APPLICANT_SERIAL);
            if($INELIGIBILITY)
            {
                $data[$this->table_library->TABLES['INELIGIBILITY']] = $INELIGIBILITY;
            }
            
            //comment on student info
            $COMMENT_ON = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['COMMENT_ON'],$APPLICANT_SERIAL);
            if($COMMENT_ON)
            {
                $data[$this->table_library->TABLES['COMMENT_ON']] = $COMMENT_ON;
            }
           
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
             
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            //echo print_r($PHONE);
            }
            else redirect ('login');
	}
        
        
        public function DOCUMENT_INFO($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            $DOCUMENT_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['DOCUMENT_INFO'],$APPLICANT_SERIAL);
            if($DOCUMENT_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['DOCUMENT_INFO']] = $DOCUMENT_INFO;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function ELIGIBILITY($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $ELIGIBILITY = $this->applicant_info_model->full_table($this->table_library->TABLES['ELIGIBILITY'],$APPLICANT_SERIAL);
            if($ELIGIBILITY)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['ELIGIBILITY']] = $ELIGIBILITY;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
              }
            else redirect ('login');
        }
        
        public function ADMISSION_TEST($APPLICANT_SERIAL = NULL, $IS_ELIGIBLE_ADM_TEST= NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($IS_ELIGIBLE_ADM_TEST == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $ADMISSION_TEST = $this->applicant_info_model->full_table($this->table_library->TABLES['ADMISSION_TEST'],$APPLICANT_SERIAL);
            if($ADMISSION_TEST)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['ADMISSION_TEST']] = $ADMISSION_TEST;
            }
           else  redirect ('admin');
              
            
                //PHOTO
                $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
                if($PHOTO)
                {
                    $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
                }
                else  redirect ('admin');

                $data['main_content']='applicant_info_view/applicant_info_view';
                $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function INELIGIBILITY($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
           
            //comment on student info
            $INELIGIBILITY = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['INELIGIBILITY'],$APPLICANT_SERIAL);
            if($INELIGIBILITY)
            {
                $data[$this->table_library->TABLES['INELIGIBILITY']] = $INELIGIBILITY;
            }   
            
            //comment on student info
            $COMMENT_ON = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['COMMENT_ON'],$APPLICANT_SERIAL);
            if($COMMENT_ON)
            {
                $data[$this->table_library->TABLES['COMMENT_ON']] = $COMMENT_ON;
            }
            
                //PHOTO
                $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
                if($PHOTO)
                {
                    $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
                }
                else  redirect ('admin');
             $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
             $data['main_content']='applicant_info_view/applicant_info_view';
             $this->load->view('includes/template',$data);
             }
            else redirect ('login');
            
        }
        
        public function EMPLOYEE_STATUS($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $EMPLOYEE_STATUS = $this->applicant_info_model->full_table($this->table_library->TABLES['EMPLOYEE_STATUS'],$APPLICANT_SERIAL);
            if($EMPLOYEE_STATUS)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['EMPLOYEE_STATUS']] = $EMPLOYEE_STATUS;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function JOB_EXP($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $JOB_EXP = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['JOB_EXP'],$APPLICANT_SERIAL);
            if($JOB_EXP)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['JOB_EXP']] = $JOB_EXP;
            }
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
        }
        
        public function REFERENCE($APPLICANT_SERIAL = NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $REFERENCE = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['REFERENCE'],$APPLICANT_SERIAL);
            if($REFERENCE)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['REFERENCE']] = $REFERENCE;
            }
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function PHOTO($APPLICANT_SERIAL = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
               }
            else redirect ('login');
        }
        
        public function STUDENT_PERSONAL_INFO($APPLICANT_SERIAL =NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            $STUDENT_PERSONAL_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['STUDENT_PERSONAL_INFO'],$APPLICANT_SERIAL);
            if($STUDENT_PERSONAL_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['STUDENT_PERSONAL_INFO']] = $STUDENT_PERSONAL_INFO;
            }
            else  redirect ('admin');
            
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
        }
        
        public function STUDENT_CONTACT_INFO($APPLICANT_SERIAL =NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            //STUDENT CONTACT INFO
            $STUDENT_CONTACT_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['STUDENT_CONTACT_INFO'],$APPLICANT_SERIAL);
            if($STUDENT_CONTACT_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['STUDENT_CONTACT_INFO']] = $STUDENT_CONTACT_INFO;
            }
            else  redirect ('admin');
            
            //PHONE
            $PHONE = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['PHONE'],$APPLICANT_SERIAL);
            if($PHONE)
            {
                $data[$this->table_library->TABLES['PHONE']] = $PHONE;
            }
            else  redirect ('admin');
            
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        
        public function CURRENT_ADMISSION_INFO($APPLICANT_SERIAL =NULL)
        {
            $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            //CURRENT_ADMISSION_INFO
            $CURRENT_ADMISSION_INFO = $this->applicant_info_model->full_table($this->table_library->TABLES['CURRENT_ADMISSION_INFO'],$APPLICANT_SERIAL);
            if($CURRENT_ADMISSION_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['CURRENT_ADMISSION_INFO']] = $CURRENT_ADMISSION_INFO;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
        }
        
        public function PRE_ADMISSION($APPLICANT_SERIAL =NULL, $PRE_ADMISSION = NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($PRE_ADMISSION == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            if($PRE_ADMISSION=='yes')
            {
                //PRE_ADMISSION
                $PRE_ADMISSION = $this->applicant_info_model->full_table($this->table_library->TABLES['PRE_ADMISSION'],$APPLICANT_SERIAL);
                if($PRE_ADMISSION)
                {
                    $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                    $data[$this->table_library->TABLES['PRE_ADMISSION']] = $PRE_ADMISSION;
                }
                else  redirect ('admin');
            }
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            $data['PRE_ADMISSION'] = $PRE_ADMISSION;
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
            
        }
        
        public function SECONDARY($APPLICANT_SERIAL =NULL)
        {
             $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            //SECONDARY
            $SECONDARY = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY'],$APPLICANT_SERIAL);
            if($SECONDARY)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['SECONDARY']] = $SECONDARY;
            }
            else  redirect ('admin');
            
            if($SECONDARY['GRADE_SYSTEM']=='GPA')
            {
                //SECONDARY_GPA
                $SECONDARY_GPA = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_GPA'],$APPLICANT_SERIAL);
                if($SECONDARY_GPA)
                {
                    $data[$this->table_library->TABLES['SECONDARY_GPA']] = $SECONDARY_GPA ;
                }
                else  redirect ('admin');
            }
            else
            {
                //SECONDARY_MARKS
                $SECONDARY_MARKS = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_MARKS'],$APPLICANT_SERIAL);
                if($SECONDARY_MARKS)
                {
                    $data[$this->table_library->TABLES['SECONDARY_MARKS']] = $SECONDARY_MARKS;
                }
                else  redirect ('admin');
            }
            
            //SECONDARY_DOCUMENT
            $SECONDARY_DOCUMENT = $this->applicant_info_model->full_table($this->table_library->TABLES['SECONDARY_DOCUMENT'],$APPLICANT_SERIAL);
            if($SECONDARY_DOCUMENT)
            {
                $data[$this->table_library->TABLES['SECONDARY_DOCUMENT']] = $SECONDARY_DOCUMENT;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
            
        }
        
        public function HIGHER_SECONDARY($APPLICANT_SERIAL =NULL)
        {
              $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            //HIGHER_SECONDARY
            $HIGHER_SECONDARY = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY'],$APPLICANT_SERIAL);
            if($HIGHER_SECONDARY)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['HIGHER_SECONDARY']] = $HIGHER_SECONDARY;
            }
            else  redirect ('admin');
            
            if($HIGHER_SECONDARY['GRADE_SYSTEM']=='GPA')
            {
                //HIGHER_SECONDARY_GPA
                $HIGHER_SECONDARY_GPA = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_GPA'],$APPLICANT_SERIAL);
                if($HIGHER_SECONDARY_GPA)
                {
                    $data[$this->table_library->TABLES['HIGHER_SECONDARY_GPA']] = $HIGHER_SECONDARY_GPA ;
                }
                else  redirect ('admin');
            }
            else
            {
                //HIGHER_SECONDARY_MARKS
                $HIGHER_SECONDARY_MARKS = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_MARKS'],$APPLICANT_SERIAL);
                if($HIGHER_SECONDARY_MARKS)
                {
                    $data[$this->table_library->TABLES['HIGHER_SECONDARY_MARKS']] = $HIGHER_SECONDARY_MARKS;
                }
                else  redirect ('admin');
            }
            
            //HIGHER_SECONDARY_DOCUMENT
            $HIGHER_SECONDARY_DOCUMENT = $this->applicant_info_model->full_table($this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT'],$APPLICANT_SERIAL);
            if($HIGHER_SECONDARY_DOCUMENT)
            {
                $data[$this->table_library->TABLES['HIGHER_SECONDARY_DOCUMENT']] = $HIGHER_SECONDARY_DOCUMENT;
            }
            else  redirect ('admin');
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
            }
            else redirect ('login');
            
        }
        
        public function BSC($APPLICANT_SERIAL =NULL)
        {
               $logged = $this->session->userdata('is_logged_in');
                if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            
            //BSC_BASIC_INFO
            $BSC_BASIC_INFO = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['BSC_BASIC_INFO'],$APPLICANT_SERIAL);
            if($BSC_BASIC_INFO)
            {
                $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                $data[$this->table_library->TABLES['BSC_BASIC_INFO']] = $BSC_BASIC_INFO;
            }
            else  redirect ('admin');
            
            
            $BSC_CGPA = array();
            $BSC_MARKS = array();
            $BSC_DOCUMENT = array();
            $BUET_GRATUDE = array();
            
            $bsc_total = sizeof($BSC_BASIC_INFO);   
            for($i = 0;$i<$bsc_total;$i++)
            {
                if($BSC_BASIC_INFO[$i]['GRADE_SYSTEM']=='CGPA')
                {
                    //BSC_CGPA
                    $CGPA = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_CGPA'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'], $BSC_BASIC_INFO[$i]['PROGRAM'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                    
                    if($CGPA)
                    {
                        $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']] = $CGPA ;
                    }
                    else  redirect ('admin');
                    
                }
                else
                {
                    //BSC_MARKS
                    $MARKS = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_MARKS'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                   
                    if($MARKS)
                    {
                        $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']] = $MARKS ;
                    }
                    else  redirect ('admin');
                    
                }
                
                

                //BSC_DOCUMENT
                $DOCUMENT = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BSC_DOCUMENT'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                
                if($DOCUMENT)
                {
                   $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']] = $DOCUMENT ;
                }
                else  redirect ('admin');
                

                if($BSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']=='BUET')
                {
                   //BSC_GRATUDE
                    $GRATUDE = $this->applicant_info_model->full_table_bsc($this->table_library->TABLES['BUET_GRATUDE'],$APPLICANT_SERIAL, $BSC_BASIC_INFO[$i]['ID'] ,$BSC_BASIC_INFO[$i]['PROGRAM']);
                    
                    if($GRATUDE)
                    {
                        $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']] = $GRATUDE ;
                    }
                    else  redirect ('admin');
                    
                }
            }
            $data[$this->table_library->TABLES['BSC_CGPA']] = $BSC_CGPA;
            $data[$this->table_library->TABLES['BSC_MARKS']] = $BSC_MARKS;
            $data[$this->table_library->TABLES['BSC_DOCUMENT']] = $BSC_DOCUMENT;
            $data[$this->table_library->TABLES['BUET_GRATUDE']] = $BUET_GRATUDE;
            
            //PHOTO
            $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
            if($PHOTO)
            {
                $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
            }
            else  redirect ('admin');
            
            $data['main_content']='applicant_info_view/applicant_info_view';
            $this->load->view('includes/template',$data);
             }
            else redirect ('login');
            
        }
        
        public function MSC($APPLICANT_SERIAL =NULL, $PROGRAM = NULL)
        {
              $logged = $this->session->userdata('is_logged_in');
            if($logged){
            if($APPLICANT_SERIAL == NULL) redirect ('admin');
            if($PROGRAM == NULL) redirect ('admin');
            
            $this->load->library('table_library');
            $this->load->model('applicant_info_model');
            if($PROGRAM=='PhD')
            {
                //MSC_BASIC_INFO
                $MSC_BASIC_INFO = $this->applicant_info_model->full_table_multivalue($this->table_library->TABLES['MSC_BASIC_INFO'],$APPLICANT_SERIAL);
                if($MSC_BASIC_INFO)
                {
                    $data['APPLICANT_SERIAL'] = $APPLICANT_SERIAL;
                    $data[$this->table_library->TABLES['MSC_BASIC_INFO']] = $MSC_BASIC_INFO;
                }
                else  redirect ('admin');


                $MSC_CGPA = array();
                $MSC_MARKS = array();
                $MSC_DOCUMENT = array();
                $BUET_MASTERS = array();

                $msc_total = sizeof($MSC_BASIC_INFO);   
                for($i = 0;$i<$msc_total;$i++)
                {
                    if($MSC_BASIC_INFO[$i]['GRADE_SYSTEM']=='CGPA')
                    {
                        //MSC_CGPA
                        $CGPA = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_CGPA'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'], $MSC_BASIC_INFO[$i]['PROGRAM'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($CGPA)
                        {
                            $MSC_CGPA[$MSC_BASIC_INFO[$i]['ID']] = $CGPA ;
                        }
                        else  redirect ('admin');

                    }
                    else
                    {
                        //MSC_MARKS
                        $MARKS = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_MARKS'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($MARKS)
                        {
                            $MSC_MARKS[$MSC_BASIC_INFO[$i]['ID']] = $MARKS ;
                        }
                        else  redirect ('admin');

                    }



                    //MSC_DOCUMENT
                    $DOCUMENT = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['MSC_DOCUMENT'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                    if($DOCUMENT)
                    {
                       $MSC_DOCUMENT[$MSC_BASIC_INFO[$i]['ID']] = $DOCUMENT ;
                    }
                    else  redirect ('admin');


                    if($MSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']=='BUET')
                    {
                       //BSC_MASTERS
                        $MASTERS = $this->applicant_info_model->full_table_msc($this->table_library->TABLES['BUET_MASTERS'],$APPLICANT_SERIAL, $MSC_BASIC_INFO[$i]['ID'] ,$MSC_BASIC_INFO[$i]['PROGRAM']);

                        if($MASTERS)
                        {
                            $BUET_MASTERS[$MSC_BASIC_INFO[$i]['ID']] = $MASTERS ;
                        }
                        else  redirect ('admin');

                    }
                }
                $data[$this->table_library->TABLES['MSC_CGPA']] = $MSC_CGPA;
                $data[$this->table_library->TABLES['MSC_MARKS']] = $MSC_MARKS;
                $data[$this->table_library->TABLES['MSC_DOCUMENT']] = $MSC_DOCUMENT;
                $data[$this->table_library->TABLES['BUET_MASTERS']] = $BUET_MASTERS;
                
                //PHOTO
                $PHOTO = $this->applicant_info_model->full_table($this->table_library->TABLES['PHOTO'],$APPLICANT_SERIAL);
                if($PHOTO)
                {
                    $data[$this->table_library->TABLES['PHOTO']] = $PHOTO;
                }
                else  redirect ('admin');

                
            }
            
                $data['main_content']='applicant_info_view/applicant_info_view';
                $this->load->view('includes/template',$data);
            
            }
            else redirect ('login');
            
        }
}
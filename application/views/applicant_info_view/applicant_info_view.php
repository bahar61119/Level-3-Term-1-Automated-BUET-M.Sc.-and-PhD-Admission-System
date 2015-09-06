<section>
    <div class="page-header ">
        <h1>Applicant's Information</h1>
    </div>
    <div class="row-fluid cntainer">
        
    <fieldset>
          <!-- Application Serial Number -->
          <div class="controls-row">
            <h3>
                <span  class="span6"><strong>Application Serial No :</strong></span>
                <span class="controls" ><?php echo $APPLICANT_SERIAL; ?></span>
            </h3>
          </div>
          <br/>
    </fieldset>   
        
<!-- ------------------------------------------------------------------------------------------------- -->          
        <!-- Photo Field set -->
        <?php if(isset($PHOTO)) $this->load->view('applicant_info_view/applicant_info_view_photo');?>
        
        <strong style="color : red"><?php echo validation_errors(); ?></strong>  
        
        <!-- Personal Information Field set -->
        <?php if(isset($STUDENT_PERSONAL_INFO)) $this->load->view('applicant_info_view/applicant_info_view_personal_info');?>
       
        <!-- Contact Information Field Set -->
        <?php if(isset($STUDENT_CONTACT_INFO)) $this->load->view('applicant_info_view/applicant_info_view_contact_info');?>

        <!-- Current Admission Information Field set -->
        <?php if(isset($CURRENT_ADMISSION_INFO)) $this->load->view('applicant_info_view/applicant_info_view_desire_info');?>
        
        <!-- Previous Admission Information Field set -->
        <?php if(isset($PRE_ADMISSION)) $this->load->view('applicant_info_view/applicant_info_view_pre_admission_info');?>
        
        <!-- Secondary Information Field Set -->
        <?php if(isset($SECONDARY)) $this->load->view('applicant_info_view/applicant_info_view_ssc_info');?>
        
        <!-- Higher Secondary Information Field Set -->
        <?php if(isset($HIGHER_SECONDARY)) $this->load->view('applicant_info_view/applicant_info_view_hsc_info');?>
          
        
        <!-- BSc Information Field Set -->
        <?php if(isset($BSC_BASIC_INFO)) $this->load->view('applicant_info_view/applicant_info_view_bsc_info');?>
      
        <!-- MSc Information Field Set -->
        <?php if(isset($MSC_BASIC_INFO)) $this->load->view('applicant_info_view/applicant_info_view_msc_info');?>
        
        <!-- Reference Field Set -->
        <?php if(isset($REFERENCE)) $this->load->view('applicant_info_view/applicant_info_view_reference_info');?>

        <!-- Employee Status Field Set -->
        <?php if(isset($EMPLOYEE_STATUS)) $this->load->view('applicant_info_view/applicant_info_view_emp_status');?>
        
        <!-- Job Experience Field Set -->
        <?php if(isset($JOB_EXP)) $this->load->view('applicant_info_view/applicant_info_view_job_experience_info');?>
        
        <!-- Admission Test Field Set -->
        <?php if(isset($ADMISSION_TEST)) $this->load->view('applicant_info_view/applicant_info_view_admission_test_info');?>
        
        <!-- DOCUMENT_INFO Field Set -->
        <?php if(isset($DOCUMENT_INFO)) $this->load->view('applicant_info_view/applicant_info_view_document_info');?>
        
        <!-- ELIGIBILITY Field Set -->
        <?php if(isset($ELIGIBILITY)) $this->load->view('applicant_info_view/applicant_info_view_eligibility_info');?>
        
        <!-- COMMENT_ON Field Set -->
        <?php if(isset($INELIGIBILITY) || isset($COMMENT_ON)) $this->load->view('applicant_info_view/applicant_info_view_ineligibility_info');?>
        
        
        <!-- COMMENT_ON Field Set -->
        <?php $this->load->view('applicant_info_view/applicant_info_view_addcomment_info');?>
        
<!-- ------------------------------------------------------------------------------------------------- -->             
       
     </div>
    
     <div align="right">
         <a  class="btn btn-success btn-large span3 offset9" href="<?php echo site_url("admin/applicant_list");?>" >Back</a>
     </div>
</section>


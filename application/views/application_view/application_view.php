<section>
    <div class="page-header ">
        <h1>Application</h1>
    </div>
    <div class="row-fluid cntainer">
        
    <fieldset>
          <div class="controls-row">
            <h2>
                <span><strong>Application has been successfully submitted</strong></span>
            </h2>
            <br/>
          </div>
          
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
        <?php $this->load->view('application_view/application_view_photo');?>
        
        <!-- Personal Information Field set -->
        <?php $this->load->view('application_view/application_view_personal_info');?>
       
        <!-- Contact Information Field Set -->
        <?php $this->load->view('application_view/application_view_contact_info');?>

        <!-- Current Admission Information Field set -->
        <?php $this->load->view('application_view/application_view_desire_info');?>
        
        <!-- Previous Admission Information Field set -->
        <?php $this->load->view('application_view/application_view_pre_admission_info');?>
        
        <!-- Secondary Information Field Set -->
        <?php $this->load->view('application_view/application_view_ssc_info');?>
        
        <!-- Higher Secondary Information Field Set -->
        <?php $this->load->view('application_view/application_view_hsc_info');?>
          
        
        <!-- BSc Information Field Set -->
        <?php $this->load->view('application_view/application_view_bsc_info');?>
      
        <!-- MSc Information Field Set -->
        <?php $this->load->view('application_view/application_view_msc_info');?>
        
        <!-- Reference Field Set -->
        <?php $this->load->view('application_view/application_view_reference_info');?>

        <!-- Employee Status Field Set -->
        <?php $this->load->view('application_view/application_view_emp_status');?>
        
        <!-- Job Experience Field Set -->
        <?php $this->load->view('application_view/application_view_job_experience_info');?>
        
        
<!-- ------------------------------------------------------------------------------------------------- -->             
       
     </div>
    
     <div align="right">
         <a  class="btn btn-success btn-large" href="<?php echo site_url("databaseManagement");?>" >Back To Main Menu</a>
     </div>
</section>
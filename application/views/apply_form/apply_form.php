

<section>
    <div class="page-header ">
        <h1>Application Form</h1>
    </div>
    <div class="row-fluid">
    <?php
        $data = array(
                'class'=>'form-horizontal breadcrumb'
        );
        echo form_open_multipart('apply/application_form',$data);
    ?>  
    <strong style="color : red"><?php echo validation_errors(); ?></strong>  
<!-- ------------------------------------------------------------------------------------------------- -->          

        <!-- Desire Information Field set -->
        <?php $this->load->view('apply_form/apply_form_desire_info');?>
        
        <!-- Previous Admission Information Field set -->
        <?php $this->load->view('apply_form/apply_form_pre_admission_info');?>
        
        <!-- Personal Information Field set -->
        <?php $this->load->view('apply_form/apply_form_personal_info');?>
        
        <!-- Contact Information Field Set -->
        <?php $this->load->view('apply_form/apply_form_contact_info');?>
        
        
        <!-- SSC Information Field Set -->
        <?php $this->load->view('apply_form/apply_form_ssc_info');?>
        
        <!-- HSC Information Field Set -->
        <?php $this->load->view('apply_form/apply_form_hsc_info');?>
          
        
        <!-- BSc Information Field Set -->
        <?php $this->load->view('apply_form/apply_form_bsc_info');?>
      
        <!-- MSc Information Field Set -->
        <?php $this->load->view('apply_form/apply_form_msc_info');?>
        
        <!-- Reference Field Set -->
        <?php $this->load->view('apply_form/apply_form_reference_info');?>

        <!-- Employee Status Field Set -->
        <?php $this->load->view('apply_form/apply_form_emp_status');?>
        
        <!-- Job Experience Field Set -->
        <?php $this->load->view('apply_form/apply_form_job_experience_info');?>
        
        
<!-- ------------------------------------------------------------------------------------------------- -->             
        
        <!-- Photo Field Set -->
        <?php $this->load->view('apply_form/apply_form_photo');?>  
       
        
        <div class="form-actions" align="right">
            <button role="button" data-toggle="modal" href="#myModal" class="btn btn-success btn-large" name="upload" id="upload" >Continue</button>
            <a href="<?php echo site_url('databaseManagement');?>" class="btn btn-inverse btn-large">Cancel</a>
        </div>
        
        
        <!-- Button to trigger modal -->

        <!-- Modal -->
       <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h3 id="myModalLabel">Application Form</h3>
           </div>
           <div class="modal-body">
                 <h4 style="color: red">Are you sure?</h4>
           </div>
           <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
           </div>
       </div>
        
        
        <?php echo form_close(); ?>
     </div>
</section>

<!-- Java Script for add dynamic field -->
<?php $this->load->view('apply_form/apply_form_javascript');?>
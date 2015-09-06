<?php 
    $APPLICANT_SERIAL = $CURRENT_ADMISSION_INFO['APPLICANT_SERIAL'];
    $PROGRAM = $CURRENT_ADMISSION_INFO['PROGRAM'];
    $PRE_ADMISSION = $CURRENT_ADMISSION_INFO['PRE_ADMISSION'];
    $IS_ELIGIBLE_ADM_TEST = $ELIGIBILITY['IS_ELIGIBLE_ADM_TEST'];
?>   

<section>
    <div class="page-header ">
        <h1>Applicant's Information</h1>
        <h3>Application Serial No. : <?php echo $APPLICANT_SERIAL; ?></h3>
    </div>
    <div class="row-fluid cntainer"> 
    <fieldset>
          <div class="controls-row">
            <ul>
                <li><a href="<?php echo site_url("applicant_info/table/$APPLICANT_SERIAL"); ?>">Show Applicant's Full Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/STUDENT_PERSONAL_INFO/$APPLICANT_SERIAL"); ?>">Show Personal Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/STUDENT_CONTACT_INFO/$APPLICANT_SERIAL"); ?>">Show Contact Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/CURRENT_ADMISSION_INFO/$APPLICANT_SERIAL"); ?>">Show Current Admission Information</a></li>
                <?php if($PRE_ADMISSION == 'yes'): ?>
                <li><a href="<?php echo site_url("applicant_info/PRE_ADMISSION/$APPLICANT_SERIAL/$PRE_ADMISSION"); ?>">Show Previous Admission Information</a></li>
                <?php endif;?>
                <li><a href="<?php echo site_url("applicant_info/SECONDARY/$APPLICANT_SERIAL"); ?>">Show Secondary Degree Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/HIGHER_SECONDARY/$APPLICANT_SERIAL"); ?>">Show Higher Degree Admission Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/BSC/$APPLICANT_SERIAL"); ?>">Show BSc Degree Information</a></li>
                <?php if($PROGRAM == 'PhD'): ?>
                <li><a href="<?php echo site_url("applicant_info/MSC/$APPLICANT_SERIAL/$PROGRAM"); ?>">Show MSc Degree Information</a></li>
                <?php endif;?>
                <li><a href="<?php echo site_url("applicant_info/REFERENCE/$APPLICANT_SERIAL"); ?>">Show Reference Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/EMPLOYEE_STATUS/$APPLICANT_SERIAL"); ?>">Show Employee Status Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/JOB_EXP/$APPLICANT_SERIAL"); ?>">Show Job Experience Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/DOCUMENT_INFO/$APPLICANT_SERIAL"); ?>">Show Document Information</a></li>
                <li><a href="<?php echo site_url("applicant_info/ELIGIBILITY/$APPLICANT_SERIAL"); ?>">Show Eligibility For Admission Test Information</a></li>
                <?php if($IS_ELIGIBLE_ADM_TEST=='yes'): ?>
                <li><a href="<?php echo site_url("applicant_info/ADMISSION_TEST/$APPLICANT_SERIAL/yes"); ?>">Show Admission Test Information</a></li>
                <?php endif; ?>
                <li><a href="<?php echo site_url("applicant_info/INELIGIBILITY/$APPLICANT_SERIAL"); ?>">Show Comments on Student</a></li>
              </ul>
          </div>
          
    </fieldset>   
        
        
<!-- ------------------------------------------------------------------------------------------------- -->             
       
     </div>
    
</section>

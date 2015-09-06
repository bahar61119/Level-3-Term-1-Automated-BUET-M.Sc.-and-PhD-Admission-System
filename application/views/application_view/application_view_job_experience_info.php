
        
        <?php $job_total = sizeof($JOB_EXPERIENCE['DESIGNATION']);?>
        <?php for($i = 0;$i<$job_total;$i++):?>
        <fieldset id="job_exp_add">
          <legend>Job Experience</legend>
          
        <!-- Designation Field -->
          <div class="controls-row">
            <h4 class="span4">Designation: </h4>
            <h4 class="controls"><?php echo $JOB_EXPERIENCE['DESIGNATION'][$i]; ?></h4>
          </div>
        
        <!-- Job Description Field -->
         <div class="controls-row">
            <h4 class="span4">Job Description: </h4>
            <h4 class="controls"><?php echo $JOB_EXPERIENCE['JOB_DESCRIPTION'][$i]; ?></h4>
          </div>
        
        <!-- Job Duration From Field -->
          <div class="controls-row">
            <h4 class="span4">Job Duration From: </h4>
            <h4 class="controls"><?php echo $JOB_EXPERIENCE['EXP_DURATION_FROM'][$i]; ?></h4>
          </div>
          
          <!-- Job Duration To Field -->
          <div class="controls-row">
            <h4 class="span4">Job Duration To: </h4>
            <h4 class="controls"><?php echo $JOB_EXPERIENCE['EXP_DURATION_TO'][$i]; ?></h4>
          </div>
          <!-- Job Organization Field -->
          <div class="controls-row">
            <h4 class="span4">Job Organization: </h4>
            <h4 class="controls"><?php echo $JOB_EXPERIENCE['EXP_ORGANIZATION'][$i]; ?></h4>
          </div>
        </fieldset>
        <?php endfor;?>
<fieldset>
          <legend>Previous Admission Information</legend>
          
          <?php if($CURRENT_ADMISSION['PRE_ADMISSION']=="yes"): ?>
          <!-- Previous Admission Field -->
          <div class="controls-row">
            <h4 class="span4">Previous Admission: </h4>
            <h4 class="controls">Yes</h4>
          </div>
          
          <!-- Previous Student ID Field -->
          <div class="controls-row">
            <h4 class="span4">Previous Student ID: </h4>
            <h4 class="controls"><?php echo $PRE_ADMISSION['PRE_STD_ID']; ?></h4>
          </div>
          
          <!-- Previous Department Field -->
          <div class="controls-row">
            <h4 class="span4">Previous Department: </h4>
            <h4 class="controls"><?php echo $PRE_ADMISSION['PRE_DEPT_INST']; ?></h4>
          </div>
          
          <!-- Previous Semester Field -->
          <div class="controls-row">
            <h4 class="span4">Previous Semester: </h4>
            <h4 class="controls"><?php echo $PRE_ADMISSION['PRE_SEMESTER']; ?></h4>
          </div>
          <?php else:?>
          <!-- Previous Admission Field -->
          <div class="controls-row">
            <h4 class="span4">Previous Admission: </h4>
            <h4 class="controls"> No</h4>
          </div>
          <?php endif;?>
          
</fieldset>
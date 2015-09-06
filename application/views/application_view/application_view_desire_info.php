<fieldset>
          <legend>Current Admission Information</legend>
          
          <!-- Program Field -->
          <div class="controls-row">
            <h4 class="span4">Program: </h4>
            <h4 class="controls"><?php echo $CURRENT_ADMISSION['PROGRAM']; ?></h4>
          </div>
          
          <!-- Department Field -->
          <div class="controls-row">
            <h4 class="span4">Department: </h4>
            <h4 class="controls"><?php echo $CURRENT_ADMISSION['DEPT_INST']; ?></h4>
          </div>
          
          <!-- Division Field -->
          <div class="controls-row">
            <h4 class="span4">Division: </h4>
            <h4 class="controls"><?php echo $CURRENT_ADMISSION['DIVISION']; ?></h4>
          </div>
          
          <!-- Desire Status Field -->
          <div class="controls-row">
            <h4 class="span4">Desire Status: </h4>
            <h4 class="controls"><?php echo $CURRENT_ADMISSION['DESIRED_STATUS']; ?></h4>
          </div>
</fieldset>
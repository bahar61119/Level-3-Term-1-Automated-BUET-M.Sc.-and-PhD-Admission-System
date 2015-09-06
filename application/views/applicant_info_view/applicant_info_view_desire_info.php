<fieldset>
          <legend>Current Admission Information</legend>
          
          <!-- Program Field -->
          <div class="controls-row">
            <h4 class="span4">Program: </h4>
            <h4 class="controls span6"><?php echo $CURRENT_ADMISSION_INFO['PROGRAM']; ?></h4>
          </div>
          
          <!-- Department Field -->
          <div class="controls-row">
            <h4 class="span4">Department: </h4>
            <h4 class="controls span6"><?php echo $CURRENT_ADMISSION_INFO['DEPT_INST']; ?></h4>
          </div>
          
          <!-- Division Field -->
          <div class="controls-row">
            <h4 class="span4">Division: </h4>
            <h4 class="controls span6"><?php echo $CURRENT_ADMISSION_INFO['DIVISION']; ?></h4>
          </div>
          
          <!-- Desire Status Field -->
          <div class="controls-row">
            <h4 class="span4">Desire Status: </h4>
            <h4 class="controls span6"><?php echo $CURRENT_ADMISSION_INFO['DESIRED_STATUS']; ?></h4>
          </div>
          
          <!-- PRE_ADMISSION Field -->
          <div class="controls-row" id="pre_admissionupdate">
            <h4 class="span4">Previous Admission: </h4>
            <h4 class="controls span6"><?php echo $CURRENT_ADMISSION_INFO['PRE_ADMISSION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="pre_admissionbutton" onclick="addPre_admissionUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
</fieldset>

<?php $this->load->view('update/update_desire_info_javascript');?>
<fieldset>
          <legend>Previous Admission Information</legend>
          
          
          <!-- Previous Student ID Field -->
          <div class="controls-row" id="pre_admission_st_idupdate">
            <h4 class="span4">Previous Student ID: </h4>
            <h4 class="controls span6"><?php echo $PRE_ADMISSION['PRE_STD_ID']; ?></h4>
            <a class="controls span2 btn btn-primary" id="pre_admission_st_idbutton" onclick="addPre_admission_st_idUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Previous Department Field -->
          <div class="controls-row" id="pre_admission_deptupdate">
            <h4 class="span4">Previous Department: </h4>
            <h4 class="controls span6"><?php echo $PRE_ADMISSION['PRE_DEPT_INST']; ?></h4>
            <a class="controls span2 btn btn-primary" id="pre_admission_st_idbutton" onclick="addPre_admission_deptUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Previous Semester Field -->
          <div class="controls-row" id="pre_admission_semupdate">
            <h4 class="span4">Previous Semester: </h4>
            <h4 class="controls span6"><?php echo $PRE_ADMISSION['PRE_SEMESTER']; ?></h4>
            <a class="controls span2 btn btn-primary" id="pre_admission_sembutton" onclick="addPre_admission_semUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          
</fieldset>


<?php $this->load->view('update/update_pre_admission_info_javascript');?>
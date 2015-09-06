<fieldset>
          <legend>Personal Information</legend>
          
          <!-- Name Field -->
          <div class="controls-row" id="nameupdate">
            <h4 class="span4">Name: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['APPLICANT_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="namebutton" onclick="addNameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Father's Name Field -->
          <div class="controls-row" id="fathernameupdate">
            <h4 class="span4">Father's Name: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['FATHER_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="fathernamebutton" onclick="addFatherNameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Mother's Name Field -->
          <div class="controls-row" id="mothernameupdate">
            <h4 class="span4">Mother's Name: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['MOTHER_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="mothernamebutton" onclick="addMotherNameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Birthday Field -->
          <div class="controls-row" id="birthdayupdate">
            <h4 class="span4">Birthday: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['BIRTH_DATE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="birthdaybutton" onclick="addBirthdayUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Birth Place Field -->
          <div class="controls-row" id="birthplaceupdate">
            <h4 class="span4">Birth Place: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['BIRTH_PLACE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="birthplacebutton" onclick="addBirthplaceUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Nationality Field -->
          <div class="controls-row" id="nationalityupdate">
            <h4 class="span4">Nationality: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['NATIONALITY']; ?></h4>
            <a class="controls span2 btn btn-primary" id="nationalitybutton" onclick="addNationalityUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Religion Field -->
          <div class="controls-row" id="religionupdate">
            <h4 class="span4">Religion: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['RELIGION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="religionbutton" onclick="addReligionUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Sex Field -->
          <div class="controls-row" id="sexupdate">
            <h4 class="span4">Sex: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['SEX']; ?></h4>
          </div>
          
          <!-- Marital Status Field -->
          <div class="controls-row" id="marital_statusupdate">
            <h4 class="span4">Marital Status: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_PERSONAL_INFO['MARITAL_STATUS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="marital_statusbutton" onclick="addMarital_statusUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
</fieldset>

<?php $this->load->view('update/update_personal_info_javascript');?>
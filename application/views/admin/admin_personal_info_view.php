<section>
    <div class="page-header ">
        <h1>Personal Information</h1>
    </div>
    <div class="row-fluid cntainer">

        <fieldset>
                  <!-- First Name Field -->
                  <div class="controls-row" id="memberfirstnameupdate">
                    <h4 class="span4">First Name: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['FIRST_NAME']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberfirstnamebutton" onclick="addMemberfirstnameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Last Name Field -->
                  <div class="controls-row" id="memberlastnameupdate">
                    <h4 class="span4">Last Name: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['LAST_NAME']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberlastnamebutton" onclick="addMemberlastnameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Username Field -->
                  <div class="controls-row" id="memberusernameupdate">
                    <h4 class="span4">Username: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['USERNAME']; ?></h4>
                  </div>

                  <!-- Email Field -->
                  <div class="controls-row" id="memberemailupdate">
                    <h4 class="span4">Email: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['EMAIL']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberemailbutton" onclick="addMemberemailUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Designation Field -->
                  <div class="controls-row" id="memberdesignationupdate">
                    <h4 class="span4">Designation: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['DESIGNATION']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberdesignationbutton" onclick="addMemberdesignationUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Address Field -->
                  <div class="controls-row" id="memberaddressupdate">
                    <h4 class="span4">Address: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['ADDRESS']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberaddressbutton" onclick="addMemberaddressUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Phone Field -->
                  <div class="controls-row" id="memberphoneupdate">
                    <h4 class="span4">Phone: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['PHONE']; ?></h4>
                    <a class="controls span2 btn btn-primary" id="memberphonebutton" onclick="addMemberphoneUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
                  </div>

                  <!-- Role Field -->
                  <div class="controls-row" id="memberroleupdate">
                    <h4 class="span4">Role: </h4>
                    <h4 class="controls span6"><?php echo $MEMBERS['ROLE']; ?></h4>
                  </div>

        </fieldset>

<?php $this->load->view('update/update_members_info_javascript');?>

     </div>
    
     <div align="right">
         <a  class="btn btn-success btn-large span3 offset9" href="<?php echo site_url("admin");?>" >Back</a>
     </div>
</section>
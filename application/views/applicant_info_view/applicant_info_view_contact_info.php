<fieldset>
          <legend>Contact Information</legend>
          
          <!-- Present Address Field -->
          <div class="controls-row" id="present_addressupdate">
            <h4 class="span4">Present Address: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_CONTACT_INFO['PRESENT_ADDRESS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="namebutton" onclick="addPresent_addressUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Permanent Address Field -->
          <div class="controls-row" id="permanent_addressupdate">
            <h4 class="span4">Permanent Address: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_CONTACT_INFO['PERMAMENT_ADDRESS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="permanent_addressbutton" onclick="addPermanent_addressUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Email Field -->
          <div class="controls-row" id="emailupdate">
            <h4 class="span4">Email: </h4>
            <h4 class="controls span6"><?php echo $STUDENT_CONTACT_INFO['EMAIL']; ?></h4>
            <a class="controls span2 btn btn-primary" id="emailbutton" onclick="addEmailUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
         
          <?php for($i=0;$i<sizeof($PHONE);$i++):?>
          <?php $ID = $PHONE[$i]['ID'];?>
          <!-- Phone Field -->
          <div class="controls-row" id="<?php echo "phone{$PHONE[$i]['ID']}update" ; ?>">
            <h4 class="span4">Phone: </h4>
            <h4 class="controls span6"><?php echo $PHONE[$i]['PHONE_NUM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "phone{$PHONE[$i]['ID']}button" ; ?>" onclick="addPhoneUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <script>
              function removePhoneUpdate()
                {
                    var id = "<?php echo "phone{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addPhoneUpdate()
                {
                    var id = "<?php echo "phone{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_contact_info/update_phone/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Phone: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $PHONE[$i]['PHONE_NUM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePhoneUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
          </script>
          
          <?php endfor; ?>
</fieldset>
<?php $this->load->view('update/update_contact_info_javascript');?>
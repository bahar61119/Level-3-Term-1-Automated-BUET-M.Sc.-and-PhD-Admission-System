<script>
    
    var modal='<!-- Button to trigger modal -->';
                        modal +='    <!-- Modal -->';
                        modal +='    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                        modal +='      <div class="modal-header">';
                        modal +='        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
                        modal +='        <h3 id="myModalLabel">Update</h3>';
                        modal +='      </div>';
                        modal +='      <div class="modal-body">';
                        modal +='        <h4 style="color: red">Are you sure?</h4>';
                        modal +='      </div>';
                        modal +='      <div class="modal-footer">';
                        modal +='        <button class="btn btn-primary" type="submit">Save changes</button>';
                        modal +='        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>';
                        modal +='      </div>';
                        modal +='    </div>';
                        
                function removeNameUpdate()
                {
                   $('#nameupdate_script').remove();
                   $("#namebutton").show();   
                }
                
                function addNameUpdate()
                {
                    var add ='<div class="controls-row" id="nameupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_name/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['APPLICANT_NAME']; ?>" id="name" name="name">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeNameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#nameupdate").append(add);
                    $("#namebutton").hide();
                    
                }
                
                function removeFatherNameUpdate()
                {
                   $('#fathernameupdate_script').remove();
                   $("#fathernamebutton").show();   
                }
                
                function addFatherNameUpdate()
                {
                    var add ='<div class="controls-row" id="fathernameupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_father_name/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Father Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['FATHER_NAME']; ?>" id="father_name" name="father_name">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeFatherNameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#fathernameupdate").append(add);
                    $("#fathernamebutton").hide();
                    
                }
                
                function removeMotherNameUpdate()
                {
                   $('#mothernameupdate_script').remove();
                   $("#mothernamebutton").show();   
                }
                
                function addMotherNameUpdate()
                {
                    var add ='<div class="controls-row" id="mothernameupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_mother_name/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Mother Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['MOTHER_NAME']; ?>" id="mother_name" name="mother_name">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMotherNameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#mothernameupdate").append(add);
                    $("#mothernamebutton").hide();
                    
                }
                
                function removeBirthdayUpdate()
                {
                   $('#birthdayupdate_script').remove();
                   $("#birthdaybutton").show();   
                }
                
                function addBirthdayUpdate()
                {
                    var add ='<div class="controls-row" id="birthdayupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_birthday/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Birthday Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['BIRTH_DATE']; ?>" id="birthday" name="birthday">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBirthdayUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#birthdayupdate").append(add);
                    $("#birthdaybutton").hide();
                    
                }
                
                function removeBirthplaceUpdate()
                {
                   $('#birthplaceupdate_script').remove();
                   $("#birthplacebutton").show();   
                }
                
                function addBirthplaceUpdate()
                {
                    var add ='<div class="controls-row" id="birthplaceupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_birthplace/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Birth Place: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['BIRTH_PLACE']; ?>" id="birthplace" name="birthplace">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBirthplaceUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#birthplaceupdate").append(add);
                    $("#birthplacebutton").hide();
                    
                }
                
                function removeNationalityUpdate()
                {
                   $('#nationalityupdate_script').remove();
                   $("#nationalitybutton").show();   
                }
                
                function addNationalityUpdate()
                {
                    var add ='<div class="controls-row" id="nationalityupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_nationality/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Nationality: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['NATIONALITY']; ?>" id="nationality" name="nationality">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeNationalityUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#nationalityupdate").append(add);
                    $("#nationalitybutton").hide();
                    
                }
                
                function removeReligionUpdate()
                {
                   $('#religionupdate_script').remove();
                   $("#religionbutton").show();   
                }
                
                function addReligionUpdate()
                {
                    var add ='<div class="controls-row" id="religionupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_religion/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Religion: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_PERSONAL_INFO['RELIGION']; ?>" id="religion" name="religion">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeReligionUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#religionupdate").append(add);
                    $("#religionbutton").hide();
                    
                }
                
                function removeMarital_statusUpdate()
                {
                   $('#marital_statusupdate_script').remove();
                   $("#marital_statusbutton").show();   
                }
                
                function addMarital_statusUpdate()
                {
                    var value = "<?php echo $STUDENT_PERSONAL_INFO['MARITAL_STATUS']; ?>";
                    var add ='<div class="controls-row" id="marital_statusupdate_script">';
                    
                        add +='<?php echo form_open("update_personal_info/update_marital_status/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Marital Status: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" name="marital_status" id="marital_status" value="Single"';
                        if(value=='Single') add += 'checked';
                        add +='>Single';
                        add +='</div>';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" name="marital_status" id="marital_status" value="Married" ';
                        if(value!='Single') add += 'checked';
                        add +='>Married';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMarital_statusUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#marital_statusupdate").append(add);
                    $("#marital_statusbutton").hide();
                    
                }
                
                
                
    
    
</script>

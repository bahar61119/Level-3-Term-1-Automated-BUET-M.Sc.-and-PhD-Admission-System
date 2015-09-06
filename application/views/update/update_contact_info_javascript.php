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
                        
                function removePresent_addressUpdate()
                {
                   $('#present_addressupdate_script').remove();
                   $("#present_addressbutton").show();   
                }
                
                function addPresent_addressUpdate()
                {
                    var add ='<div class="controls-row" id="present_addressupdate_script">';
                    
                        add +='<?php echo form_open("update_contact_info/update_present_address/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Present Address: </h4>';
                        add +='<div class="controls span4">';
                        add +='<textarea class="input-xlarge"  rows="3"  id="present_address" name="present_address"></textarea>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePresent_addressUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#present_addressupdate").append(add);
                    $("#present_addressbutton").hide();
                    
                }
                
                function removePermanent_addressUpdate()
                {
                   $('#permanent_addressupdate_script').remove();
                   $("#permanent_addressbutton").show();   
                }
                
                function addPermanent_addressUpdate()
                {
                    var add ='<div class="controls-row" id="permanent_addressupdate_script">';
                    
                        add +='<?php echo form_open("update_contact_info/update_permanent_address/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Permanent Address: </h4>';
                        add +='<div class="controls span4">';
                        add +='<textarea class="input-xlarge" rows="3"  id="permanent_address" name="permanent_address"></textarea>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePermanent_addressUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#permanent_addressupdate").append(add);
                    $("#permanent_addressbutton").hide();
                    
                }
                
                function removeEmailUpdate()
                {
                   $('#emailupdate_script').remove();
                   $("#emailbutton").show();   
                }
                
                function addEmailUpdate()
                {
                    var add ='<div class="controls-row" id="emailupdate_script">';
                    
                        add +='<?php echo form_open("update_contact_info/update_email/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Email: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $STUDENT_CONTACT_INFO['EMAIL']; ?>" id="email" name="email">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEmailUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#emailupdate").append(add);
                    $("#emailbutton").hide();
                    
                }
                
                
                
                
                
                
                
    
    
</script>

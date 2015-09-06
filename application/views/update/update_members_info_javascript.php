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
                        
                <?php $ID =  $MEMBERS['ID']; ?>              
                        
              function removeMemberfirstnameUpdate()
                {
                    var id = "memberfirstname";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberfirstnameUpdate()
                {
                    var id = "memberfirstname";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberfirstname/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update First Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['FIRST_NAME'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberfirstnameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                
                function removeMemberlastnameUpdate()
                {
                    var id = "memberlastname";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberlastnameUpdate()
                {
                    var id = "memberlastname";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberlastname/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Last Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['LAST_NAME'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberlastnameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeMemberemailUpdate()
                {
                    var id = "memberemail";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberemailUpdate()
                {
                    var id = "memberemail";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberemail/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Email: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['EMAIL']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberemailUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeMemberdesignationUpdate()
                {
                    var id = "memberdesignation";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberdesignationUpdate()
                {
                    var id = "memberdesignation";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberdesignation/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Designation: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['DESIGNATION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberdesignationUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                
                function removeMemberaddressUpdate()
                {
                    var id = "memberaddress";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberaddressUpdate()
                {
                    var id = "memberaddress";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberaddress/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Address: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['ADDRESS']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberaddressUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeMemberphoneUpdate()
                {
                    var id = "memberphone";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberphoneUpdate()
                {
                    var id = "memberphone";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_member_info/update_memberphone/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Address: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $MEMBERS['PHONE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberphoneUpdate()">Cancle</button>';
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

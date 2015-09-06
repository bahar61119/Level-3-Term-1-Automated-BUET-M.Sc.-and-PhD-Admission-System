<section>
    <div class="page-header ">
        <h1>Admin Information</h1>
    </div>
    <div class="row-fluid cntainer">


<fieldset>
          <!-- First Name Field -->
          <div class="controls-row" id="memberfirstnameupdate">
            <h4 class="span4">First Name: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['FIRST_NAME']; ?></h4>
          </div>
          
          <!-- Last Name Field -->
          <div class="controls-row" id="memberlastnameupdate">
            <h4 class="span4">Last Name: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['LAST_NAME']; ?></h4>
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
          </div>
          
          <!-- Designation Field -->
          <div class="controls-row" id="memberdesignationupdate">
            <h4 class="span4">Designation: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['DESIGNATION']; ?></h4>
          </div>
          
          <!-- Address Field -->
          <div class="controls-row" id="memberaddressupdate">
            <h4 class="span4">Address: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['ADDRESS']; ?></h4>
          </div>
          
          <!-- Phone Field -->
          <div class="controls-row" id="memberphoneupdate">
            <h4 class="span4">Phone: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['PHONE']; ?></h4>
          </div>
          
          <!-- Role Field -->
          <div class="controls-row" id="memberroleupdate">
            <h4 class="span4">Role: </h4>
            <h4 class="controls span6"><?php echo $MEMBERS['ROLE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="memberrolebutton" onclick="addMemberroleUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
</fieldset>

<?php $this->load->view('update/update_members_info_javascript');?>

        
 </div>
    
     <div align="right">
         <a  class="btn btn-success btn-large span3 offset9" href="<?php echo site_url("admin_info/admin_list");?>" >Back</a>
     </div>
</section>

</fieldset>


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
            
    
    
    
    ////////////////////////////////////////////////
                
                function removeMemberroleUpdate()
                {
                    var id = "memberrole";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addMemberroleUpdate()
                {
                    <?php $ID =  $MEMBERS['ID']; ?>
                    var value = "<?php echo $MEMBERS['ROLE']; ?>";
                    var id = "memberrole";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_memberrole_info/update_memberrole/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Member Role: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="PENDING" id="'+id+'" name="'+id+'"';
                        if(value=='PENDING') add += 'checked';
                        add +='>PENDING';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="ADMIN" id="'+id+'" name="'+id+'" ';
                        if(value=='ADMIN') add += 'checked';
                        add +='>ADMIN';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="DELETE" id="'+id+'" name="'+id+'">DELETE';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeMemberroleUpdate()">Cancle</button>';
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
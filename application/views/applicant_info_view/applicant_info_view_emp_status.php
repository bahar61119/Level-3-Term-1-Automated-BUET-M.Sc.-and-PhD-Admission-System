<fieldset>
          <legend>Employee Status</legend>
          
          <?php if($EMPLOYEE_STATUS['IS_EMPLOYED']=="yes"):?>
          
          <!-- Employee Field -->
          <div class="controls-row" id="employeeupdate">
            <h4 class="span4">Employee: </h4>
            <h4 class="controls span6">Yes</h4>
            <a class="controls span2 btn btn-primary" id="employeebutton"onclick="addEmployeeUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div> 
          
          <!-- Employee Status Field -->
          <div class="controls-row" id="employeestatusupdate">
            <h4 class="span4">Employee Status: </h4>
            <h4 class="controls span6"><?php echo $EMPLOYEE_STATUS['EMP_STATUS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="employeestatusbutton"onclick="addEmployeestatusUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div> 
          
          
          <script>

                function removeEmployeestatusUpdate()
                {
                    var id = "employeestatus";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addEmployeestatusUpdate()
                {
                    var value = "<?php echo $EMPLOYEE_STATUS['EMP_STATUS']; ?>";
                    var id = "employeestatus";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_employee_info/update_employeestatus/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Employee Status: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="PENDING" id="'+id+'" name="'+id+'"';
                        if(value=='Part Time') add += 'checked';
                        add +='>Part Time';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="yes" id="'+id+'" name="'+id+'" ';
                        if(value=='Full Time') add += 'checked';
                        add +='>Full Time';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEmployeestatusUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function yesEmployeeUpdate()
                {
                   var id = "employeestatus";
                    var update = "#"+id+"update";
                   $(update).show(); 
                }
                
                function noEmployeeUpdate()
                {
                    var id = "employeestatus";
                    var update = "#"+id+"update";
                   $(update).hide(); 
                }
    
    
                function removeEmployeeUpdate()
                {
                    var id = "employee";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addEmployeeUpdate()
                {
                    var value = "<?php echo $EMPLOYEE_STATUS['IS_EMPLOYED']; ?>";
                    var id = "employee";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_employee_info/update_employee/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Employee: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="yes" id="'+id+'" name="'+id+'" onclick="yesEmployeeUpdate()" ';
                        if(value=='yes') add += 'checked';
                        add +='>yes';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="no" id="'+id+'" name="'+id+'" onclick="noEmployeeUpdate()" ';
                        if(value=='no') add += 'checked';
                        add +='>no';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEmployeeUpdate()">Cancle</button>';
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
          
          
          
          <?php else: ?>
          
          <!-- Employee Field -->
          <div class="controls-row" id="employeeupdate">
            <h4 class="span4">Employee: </h4>
            <h4 class="controls span6">No</h4>
            <a class="controls span2 btn btn-primary" id="employeebutton"onclick="addEmployeeUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div> 
          
     <script>
         
         
       
         
                function yesEmployeeUpdate()
                {
                    $("#hideSave").hide();
                    $("#prev_adm").show();
                }
                
                function noEmployeeUpdate()
                {
                  $("#prev_adm").hide();
                  $("#hideSave").show();
                }
                
    
    
                function removeEmployeeUpdate()
                {
                    var id = "employee";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addEmployeeUpdate()
                {
                    var value = "<?php echo $EMPLOYEE_STATUS['IS_EMPLOYED']; ?>";
                    var id = "employee";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<div>'
                        add +='<?php echo form_open("update_employee_info/update_employee/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Employee: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="yes" id="'+id+'" name="'+id+'" onclick="yesEmployeeUpdate()" ';
                        if(value=='yes') add += 'checked';
                        add +='>yes';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="no" id="'+id+'" name="'+id+'" onclick="noEmployeeUpdate()" ';
                        if(value=='no') add += 'checked';
                        add +='>no';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4" id="hideSave">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEmployeeUpdate()">Cancle</button>';
                        add +='</div>';
                        add +='<div class="span"></div>';
                        add +='<div>'
                        add +='<div class="control-group" id="prev_adm">';
                        add +='<div class="controls-row" >';
                        add +='<h4 class="span4" style="color: red">Update Employee Status: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" id="employeestatus" name="employeestatus" value="Part Time">Part Time';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" id="employeestatus" name="employeestatus" value="Full Time">Full Time';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEmployeeUpdate()">Cancle</button>';
                        add +='</div>';
                        add +='</div>';
                        
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    $("#prev_adm").hide();
                    
                }
         
     </script>    
          
          <?php endif; ?>
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
            
                
     
 </script>
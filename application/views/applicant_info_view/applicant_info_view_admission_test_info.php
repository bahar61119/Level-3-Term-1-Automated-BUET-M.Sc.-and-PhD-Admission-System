<fieldset>
          <legend>Admission Test</legend>
          
          <!-- PRESENT_ADM_TEST Field -->
          <div class="controls-row" id="admissiontestupdate">
            <h4 class="span4">Present in Admission Test: </h4>
            <h4 class="controls span6"><?php echo $ADMISSION_TEST['PRESENT_ADM_TEST']; ?></h4>
            <a class="controls span2 btn btn-primary" id="admissiontestbutton"onclick="addAdmissiontestUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!--MARKS Field -->
          <div class="controls-row" id="admissionmarksupdate">
            <h4 class="span4">Admission Test Marks: </h4>
            <h4 class="controls span6"><?php echo $ADMISSION_TEST['MARKS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="admissionmarksbutton"onclick="addAdmissionmarksUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
         
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
                
                function removeAdmissiontestUpdate()
                {
                    var id = "admissiontest";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addAdmissiontestUpdate()
                {
                    var value = "<?php echo $ADMISSION_TEST['PRESENT_ADM_TEST']; ?>";
                    var id = "admissiontest";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_admissiontest_info/update_admissiontest/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Present in Admission Test: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="PENDING" id="'+id+'" name="'+id+'"';
                        if(value=='PENDING') add += 'checked';
                        add +='>PENDING';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="yes" id="'+id+'" name="'+id+'" ';
                        if(value=='yes') add += 'checked';
                        add +='>yes';
                        add +='</div>';
                        add +='<div class="radio span4">';
                        add +='<input type="radio" value="no" id="'+id+'" name="'+id+'" ';
                        if(value=='no') add += 'checked';
                        add +='>no';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeAdmissiontestUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeAdmissionmarksUpdate()
                {
                    var id = "admissionmarks";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addAdmissionmarksUpdate()
                {
                    var id = "admissionmarks";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_admissiontest_info/update_admissionmarks/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Admission Test Marks:: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $ADMISSION_TEST['MARKS']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeAdmissionmarksUpdate()">Cancle</button>';
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

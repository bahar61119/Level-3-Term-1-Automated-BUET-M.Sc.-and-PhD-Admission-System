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
  
                function removePre_admissionUpdate()
                {
                   $('#pre_admissionupdate_script').remove();
                   $('#prev_adm').remove();
                   $("#pre_admissionbutton").show();   
                }
                
                
                
                function addPre_admissionUpdate()
                {
                    <?php $PROGRAM = $CURRENT_ADMISSION_INFO['PROGRAM']; ?>
                    var value = "<?php echo $CURRENT_ADMISSION_INFO['PRE_ADMISSION']; ?>";
                    var add ='<div class="controls-row" id="pre_admissionupdate_script">';
                        add +='<?php echo form_open("update_desire_info/update_pre_admission/$APPLICANT_SERIAL/$PROGRAM");?>';
                        add +='<div class="span12">';
                        add +='<h4 class="span4" style="color: red">Update Previous Admission: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" name="pre_admission" id="pre_admission" onchange="pre_adm()" value="yes"';
                        if(value=='yes') add += 'checked';
                        add +='>Yes';
                        add +='</div>';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" name="pre_admission" id="pre_admission" onchange="removePre_adm()" value="no" ';
                        if(value=='no') add += 'checked';
                        add +='>No';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4" id="hideSave">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePre_admissionUpdate()">Cancle</button>';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="control-group" id="prev_adm">';
                            add +='  <!-- Previous Student Id Field -->';
                            add +='  <div class="control-group controls-row">';
                            add +='    <h4 class="span4" style="color: red">Update Previous Student Id: </h4>';
                            add +='    <div class="controls span4">';
                            add +='      <input type="text" class="input-xlarge" id="pre_std_id" name="pre_std_id">';
                            add +='    </div>';
                            add +='  </div>';

                            add +='  <!-- Previous Department or Institute Field -->';
                            add +='  <div class="control-group controls-row">';
                            add +='    <h4 class="span4" style="color: red">Update Previous Department or Institute: </h4>';
                            add +='    <div class="controls span4">';
                            add +='      <input type="text" class="input-xlarge" id="pre_dept_inst" name="pre_dept_inst">';
                            add +='    </div>';
                            add +='  </div>';

                            add +='  <!-- Previous Semester Field -->';
                            add +='  <div class="control-group controls-row">';
                            add +='    <h4 class="span4" style="color: red">Update Previous Semester: </h4>';
                            add +='    <div class="controls span4">';
                            add +='      <input type="text" class="input-xlarge" id="pre_semester" name="pre_semester">';
                            add +='    </div>';
                            add +='  </div>';
                            add +='<div class="controls span4 offset8">';
                            add +='     <button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                            add +='     <button class="btn span6" data-dismiss="alert" type="button" onclick="removePre_admissionUpdate()">Cancle</button>';
                            add +='</div>';
                            add +='<br/>';
                            add +='<br/>';
                            add +='</div>';
                        add += modal;
                        
                            
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    
                    $("#pre_admissionupdate").append(add);
                    $("#pre_admissionbutton").hide();
                    $("#prev_adm").hide();    
                    
                }
                
                
                function pre_adm()
                {
                    $("#hideSave").hide();
                    $("#prev_adm").show();
                    
                }
                function removePre_adm()
                {
                     $("#prev_adm").hide();
                     $("#hideSave").show();
                }
                
    
    
</script>

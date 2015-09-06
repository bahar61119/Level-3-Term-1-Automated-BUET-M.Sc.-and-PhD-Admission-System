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
                        
                function removePre_admission_st_idUpdate()
                {
                   $('#pre_admission_st_idupdate_script').remove();
                   $("#pre_admission_st_idbutton").show();   
                }
                
                function addPre_admission_st_idUpdate()
                {
                    var add ='<div class="controls-row" id="pre_admission_st_idupdate_script">';
                    
                        add +='<?php echo form_open("update_pre_admission_info/update_pre_admission_st_id/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Pre Admission Student Id: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $PRE_ADMISSION['PRE_STD_ID']; ?>" id="pre_admission_st_id" name="pre_admission_st_id">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePre_admission_st_idUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#pre_admission_st_idupdate").append(add);
                    $("#pre_admission_st_idbutton").hide();
                    
                }
                
                function removePre_admission_deptUpdate()
                {
                   $('#pre_admission_deptupdate_script').remove();
                   $("#pre_admission_deptbutton").show();   
                }
                
                function addPre_admission_deptUpdate()
                {
                    var add ='<div class="controls-row" id="pre_admission_deptupdate_script">';
                    
                        add +='<?php echo form_open("update_pre_admission_info/update_pre_admission_dept/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Pre Admission Department: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $PRE_ADMISSION['PRE_DEPT_INST']; ?>" id="pre_admission_dept" name="pre_admission_dept">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePre_admission_deptUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#pre_admission_deptupdate").append(add);
                    $("#pre_admission_deptbutton").hide();
                    
                }
                
                function removePre_admission_semUpdate()
                {
                   $('#pre_admission_semupdate_script').remove();
                   $("#pre_admission_sembutton").show();   
                }
                
                function addPre_admission_semUpdate()
                {
                    var add ='<div class="controls-row" id="pre_admission_semupdate_script">';
                    
                        add +='<?php echo form_open("update_pre_admission_info/update_pre_admission_sem/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Pre Admission Semester: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $PRE_ADMISSION['PRE_SEMESTER']; ?>" id="pre_admission_sem" name="pre_admission_sem">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removePre_admission_semUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                        
                    $("#pre_admission_semupdate").append(add);
                    $("#pre_admission_sembutton").hide();
                    
                }
                
</script>
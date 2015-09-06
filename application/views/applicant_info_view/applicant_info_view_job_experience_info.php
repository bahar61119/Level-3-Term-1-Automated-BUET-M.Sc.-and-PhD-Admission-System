 
        <?php $job_total = sizeof($JOB_EXP);?>
        <?php for($i = 0;$i<$job_total;$i++):?>
        <?php $ID = $JOB_EXP[$i]['ID'];?>
        <fieldset id="job_exp_add">
          <legend>Job Experience</legend>
          
        <!-- Designation Field -->
          <div class="controls-row" id="<?php echo "jobdesignation{$JOB_EXP[$i]['ID']}update" ; ?>">
            <h4 class="span4">Designation: </h4>
            <h4 class="controls span6"><?php echo $JOB_EXP[$i]['DESIGNATION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "jobdesignation{$JOB_EXP[$i]['ID']}button" ; ?>" onclick="addJobdesignationUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
        
        <!-- Job Description Field -->
         <div class="controls-row" id="<?php echo "jobdescription{$JOB_EXP[$i]['ID']}update" ; ?>">
            <h4 class="span4">Job Description: </h4>
            <h4 class="controls span6"><?php echo $JOB_EXP[$i]['JOB_DESCRIPTION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "jobdescription{$JOB_EXP[$i]['ID']}button" ; ?>" onclick="addJobdescriptionUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
        
        <!-- Job Duration From Field -->
          <div class="controls-row" id="<?php echo "jobdurationfrom{$JOB_EXP[$i]['ID']}update" ; ?>">
            <h4 class="span4">Job Duration From: </h4>
            <h4 class="controls span6"><?php echo $JOB_EXP[$i]['EXP_DURATION_FROM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "jobdurationfrom{$JOB_EXP[$i]['ID']}button" ; ?>" onclick="addJobdurationfromUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Job Duration To Field -->
          <div class="controls-row" id="<?php echo "jobdurationto{$JOB_EXP[$i]['ID']}update" ; ?>">
            <h4 class="span4">Job Duration To: </h4>
            <h4 class="controls span6"><?php echo $JOB_EXP[$i]['EXP_DURATION_TO']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "jobdurationto{$JOB_EXP[$i]['ID']}button" ; ?>" onclick="addJobdurationtoUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          <!-- Job Organization Field -->
          <div class="controls-row" id="<?php echo "joborganization{$JOB_EXP[$i]['ID']}update" ; ?>">
            <h4 class="span4">Job Organization: </h4>
            <h4 class="controls span6"><?php echo $JOB_EXP[$i]['EXP_ORGANIZATION']; ?></h4>
          <a class="controls span2 btn btn-primary" id="<?php echo "joborganization{$JOB_EXP[$i]['ID']}button" ; ?>" onclick="addJoborganizationUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
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
            
              function removeJobdesignationUpdate()
                {
                    var id = "<?php echo "jobdesignation{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addJobdesignationUpdate()
                {
                    var id = "<?php echo "jobdesignation{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_job_experience_info/update_jobdesignation/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous Job Designation: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $JOB_EXP[$i]['DESIGNATION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeJobdesignationUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeJobdescriptionUpdate()
                {
                    var id = "<?php echo "jobdescription{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addJobdescriptionUpdate()
                {
                    var id = "<?php echo "jobdescription{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_job_experience_info/update_jobdescription/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous Job Descriptionn: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $JOB_EXP[$i]['JOB_DESCRIPTION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeJobdescriptionUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeJoborganizationUpdate()
                {
                    var id = "<?php echo "joborganization{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addJoborganizationUpdate()
                {
                    var id = "<?php echo "joborganization{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_job_experience_info/update_joborganization/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous Job Oganization: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $JOB_EXP[$i]['EXP_ORGANIZATION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeJoborganizationUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeJobdurationfromUpdate()
                {
                    var id = "<?php echo "jobdurationfrom{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addJobdurationfromUpdate()
                {
                    var id = "<?php echo "jobdurationfrom{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_job_experience_info/update_jobdurationfrom/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous Job Duration From: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $JOB_EXP[$i]['EXP_DURATION_FROM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeJobdurationfromUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeJobdurationtoUpdate()
                {
                    var id = "<?php echo "jobdurationto{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addJobdurationtoUpdate()
                {
                    var id = "<?php echo "jobdurationto{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_job_experience_info/update_jobdurationto/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous Job Duration To: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $JOB_EXP[$i]['EXP_DURATION_TO']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeJobdurationtoUpdate()">Cancle</button>';
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


        <?php endfor;?>
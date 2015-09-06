<fieldset>
          <legend>Eligibility for Admission Test</legend>
          
          <!-- FULFILL_MIN_REQUIREMENT Field -->
          <div class="controls-row" id="eligibilityfulfilminrequpdate">
            <h4 class="span4">Fulfills minimum requirement: </h4>
            <h4 class="controls span6"><?php echo $ELIGIBILITY['FULFILL_MIN_REQUIREMENT']; ?></h4>
            <a class="controls span2 btn btn-primary" id="eligibilityfulfilminreqbutton"onclick="addEligibilityfulfilminreqUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- IS_ELIGIBLE_ADM_TEST Field -->
          <div class="controls-row" id="eligibilityadmissiontestupdate">
            <h4 class="span4">Is Eligible For Admission Test: </h4>
            <h4 class="controls span6"><?php echo $ELIGIBILITY['IS_ELIGIBLE_ADM_TEST']; ?></h4>
            <a class="controls span2 btn btn-primary" id="eligibilityadmissiontestbutton"onclick="addEligibilityadmissiontestUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
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
                
                function removeEligibilityfulfilminreqUpdate()
                {
                    var id = "eligibilityfulfilminreq";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addEligibilityfulfilminreqUpdate()
                {
                    var value = "<?php echo $ELIGIBILITY['FULFILL_MIN_REQUIREMENT']; ?>";
                    var id = "eligibilityfulfilminreq";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_eligibility_info/update_eligibilityfulfilminreq/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Fulfills minimum requirement: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEligibilityfulfilminreqUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeEligibilityadmissiontestUpdate()
                {
                    var id = "eligibilityadmissiontest";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addEligibilityadmissiontestUpdate()
                {
                    var value = "<?php echo $ELIGIBILITY['IS_ELIGIBLE_ADM_TEST']; ?>";
                    var id = "eligibilityadmissiontest";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_eligibility_info/update_eligibilityadmissiontest/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Is Eligible For Admission Test: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeEligibilityadmissiontestUpdate()">Cancle</button>';
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
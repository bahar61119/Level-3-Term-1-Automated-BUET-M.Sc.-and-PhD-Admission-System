<fieldset>
          <!-- ADD Comment Field -->
          <div class="controls-row" id="addcommentupdate">
            <h4 class="span9"></h4>
            <a class="controls span3 btn btn-danger btn-large" id="addcommentbutton"onclick="addAddcommentUpdate()"><i class="icon-shopping-cart icon-white"></i>Add Comment</a>
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
                
                
                function removeAddcommentUpdate()
                {
                    var id = "addcomment";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addAddcommentUpdate()
                {
                    var id = "addcomment";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_addcomment_info/update_addcomment/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Add Comment</h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" placeholder="comment" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeAddcommentUpdate()">Cancle</button>';
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

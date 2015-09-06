
        <?php $ref_total = sizeof($REFERENCE);?>
        <?php for($i = 0;$i<$ref_total;$i++):?>
        <?php $ID = $REFERENCE[$i]['ID'];?>
        <fieldset id="ref_add">
        <legend>Reference</legend>
          
        <!-- Reference Name Field -->
          <div class="controls-row" id="<?php echo "referencename{$REFERENCE[$i]['ID']}update" ; ?>">
            <h4 class="span4">Reference Name: </h4>
            <h4 class="controls span6"><?php echo $REFERENCE[$i]['REF_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "referencename{$REFERENCE[$i]['ID']}button" ; ?>" onclick="addReferencenameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
        
          <!-- Reference Address Field -->
          <div class="controls-row" id="<?php echo "referenceaddress{$REFERENCE[$i]['ID']}update" ; ?>">
            <h4 class="span4">Reference Address: </h4>
            <h4 class="controls span6"><?php echo $REFERENCE[$i]['REF_ADDRESS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "referenceaddress{$REFERENCE[$i]['ID']}button" ; ?>" onclick="addReferenceaddressUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
        
        <!-- Reference Phone Field -->
          <div class="controls-row" id="<?php echo "referencephone{$REFERENCE[$i]['ID']}update" ; ?>">
            <h4 class="span4">Reference Phone: </h4>
            <h4 class="controls span6"><?php echo $REFERENCE[$i]['REF_MOBILE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "referencephone{$REFERENCE[$i]['ID']}button" ; ?>" onclick="addReferencephoneUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
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
            
              function removeReferencephoneUpdate()
                {
                    var id = "<?php echo "referencephone{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addReferencephoneUpdate()
                {
                    var id = "<?php echo "referencephone{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_reference_info/update_referencephone/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Reference Phone: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $REFERENCE[$i]['REF_MOBILE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeReferencephoneUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeReferencenameUpdate()
                {
                    var id = "<?php echo "referencename{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addReferencenameUpdate()
                {
                    var id = "<?php echo "referencename{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_reference_info/update_referencename/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Reference Phone: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $REFERENCE[$i]['REF_NAME']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeReferencenameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeReferenceaddressUpdate()
                {
                    var id = "<?php echo "referenceaddress{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addReferenceaddressUpdate()
                {
                    var id = "<?php echo "referenceaddress{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_reference_info/update_referenceaddress/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Reference Phone: </h4>';
                        add +='<div class="controls span4">';
                        add +='<textarea class="input-xlarge"  rows="3"  id="'+id+'" name="'+id+'"></textarea>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeReferenceaddressUpdate()">Cancle</button>';
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
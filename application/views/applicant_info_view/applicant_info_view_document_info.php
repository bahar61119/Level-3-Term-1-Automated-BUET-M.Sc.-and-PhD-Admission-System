<fieldset>
          <legend>Document Information</legend>
          
          <!-- REQUIRED_MISSING_DOC Field -->
          <div class="controls-row" id="documentrequiredmissingdocupdate">
            <h4 class="span4">Required Missing Document : </h4>
            <h4 class="controls span6"><?php echo $DOCUMENT_INFO['REQUIRED_MISSING_DOC']; ?></h4>
            <a class="controls span2 btn btn-primary" id="documentrequiredmissingdocbutton"onclick="addDocumentrequiredmissingdocUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- EMP_LET_CONSENT_PRE_FORM Field -->
          <div class="controls-row" id="documentempcinpresfupdate">
            <h4 class="span4">Employer's Letter of Consent in Prescribed form: </h4>
            <h4 class="controls span6"><?php echo $DOCUMENT_INFO['EMP_LET_CONSENT_PRE_FORM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="documentempcinpresfbutton"onclick="addDocumentempcinpresfUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          <br/>
          <br/>
          <br/>
          </div>
          
          <!-- CER_MEN_TOTAL_CREDIT_HR_EARNED Field -->
          <div class="controls-row" id="documentcermencrehrdocupdate">
            <h4 class="span4">Certificate Mentioning Total Credit Hour Earned: </h4>
            <h4 class="controls span6"><?php echo $DOCUMENT_INFO['CER_MEN_TOTAL_CREDIT_HR_EARNED']; ?></h4>
            <a class="controls span2 btn btn-primary" id="documentcermencrehrdocbutton"onclick="addDocumentcermencrehrdocUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
            <br/>
            <br/>
            <br/>
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
                
                function removeDocumentrequiredmissingdocUpdate()
                {
                    var id = "documentrequiredmissingdoc";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addDocumentrequiredmissingdocUpdate()
                {
                    var value = "<?php echo $DOCUMENT_INFO['REQUIRED_MISSING_DOC']; ?>";
                    var id = "documentrequiredmissingdoc";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_document_info/update_documentrequiredmissingdoc/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Required Missing Document: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeDocumentrequiredmissingdocUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeDocumentempcinpresfUpdate()
                {
                    var id = "documentempcinpresf";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addDocumentempcinpresfUpdate()
                {
                    var value = "<?php echo $DOCUMENT_INFO['EMP_LET_CONSENT_PRE_FORM']; ?>";
                    var id = "documentempcinpresf";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_document_info/update_documentempcinpresf/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Employer\'s Letter of Consent in Prescribed form: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeDocumentempcinpresfUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeDocumentcermencrehrdocUpdate()
                {
                    var id = "documentcermencrehrdoc";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addDocumentcermencrehrdocUpdate()
                {
                    var value = "<?php echo $DOCUMENT_INFO['CER_MEN_TOTAL_CREDIT_HR_EARNED']; ?>";
                    var id = "documentcermencrehrdoc";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_document_info/update_documentcermencrehrdoc/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Certificate Mentioning Total Credit Hour Earned: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeDocumentcermencrehrdocUpdate()">Cancle</button>';
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
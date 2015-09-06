
        <fieldset id="secondary_add">
          <legend>Secondary Information</legend>
          
          <!-- Secondary Degree Obtained From Field -->
          <div class="controls-row" id="secondarydegreefromupdate">
            <h4 class="span4">Degree Obtained From: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['CER_DEG_OBT_FROM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreefrombutton"onclick="addSecondarydegreefromUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Degree Name Field -->
          <div class="controls-row" id="secondarydegreenameupdate">
            <h4 class="span4">Degree Name: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['DEGREE_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreenamebutton"onclick="addSecondarydegreenameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Board Field -->
          <div class="controls-row" id="secondarydegreeboardupdate">
            <h4 class="span4">Board: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['BOARD']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreeboardbutton"onclick="addSecondarydegreeboardUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>

          <?php if($SECONDARY['GRADE_SYSTEM']=='GPA'):?>
          
          <!-- Secondary Grade Field -->
          <div class="controls-row" id="secondarydegreegpaupdate">
            <h4 class="span4">GPA: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_GPA['GPA']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreegpabutton"onclick="addSecondarydegreegpaUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- GPA_AB_3_5 Field -->
          <div class="controls-row">
            <h4 class="span4">GPA Above 3.5 : </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_GPA['GPA_AB_3_5']; ?></h4>
          </div>
          
          
          <!-- GPA_LESS_2 Field -->
          <div class="controls-row">
            <h4 class="span4">Grade Less than 2.0 : </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_GPA['GPA_LESS_2']; ?></h4>
          </div>
          
          <!-- GPA_SCALE Field -->
          <div class="controls-row" id="secondarydegreegradescaleupdate">
            <h4 class="span4">Grade Scale: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_GPA['GPA_SCALE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreegradescalebutton"onclick="addSecondarydegreegradescaleUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          
           <script>
              
            
            
                
                function removeSecondarydegreegpaUpdate()
                {
                    var id = "secondarydegreegpa";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreegpaUpdate()
                {
                    var id = "secondarydegreegpa";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreegpa/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update CGPA: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY_GPA['GPA'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreegpaUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }   
                
       ///////////////////////////////////////////////////////////////////////////////////
       
       
                function removeSecondarydegreegradescaleUpdate()
                {
                    var id = "secondarydegreegradescale";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreegradescaleUpdate()
                {
                    var id = "secondarydegreegradescale";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreegradescale/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Grade S: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY_GPA['GPA_SCALE'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreegradescaleUpdate()">Cancle</button>';
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
          
          <!-- Percentage of Marks Field -->
          <div class="controls-row" id="secondarydegreepermarksupdate">
            <h4 class="span4">Percentage of Marks: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_MARKS['PER_MARKS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreepermarksbutton"onclick="addSecondarydegreepermarksUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- FIRST_DIV Field -->
          <div class="controls-row">
            <h4 class="span4">First Division : </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_MARKS['FIRST_DIV']; ?></h4>
          </div>
          
          <!-- THIRD_DIV Field -->
          <div class="controls-row">
            <h4 class="span4">Third Division : </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_MARKS['THIRD_DIV']; ?></h4>
          </div>
          <!-- Total Marks Field -->
          <div class="controls-row" id="secondarydegreetotalmarksupdate">
            <h4 class="span4">Total Marks: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_MARKS['TOTAL_MARKS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreetotalmarksbutton"onclick="addSecondarydegreetotalmarksUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          
           <script>
              
           
                function removeSecondarydegreepermarksUpdate()
                {
                    var id = "secondarydegreepermarks";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreepermarksUpdate()
                {
                    var id = "secondarydegreepermarks";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreepermarks/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Percentage of Marks: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY_MARKS['PER_MARKS'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreepermarksUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }   
                
       ///////////////////////////////////////////////////////////////////////////////////
       
       
                function removeSecondarydegreetotalmarksUpdate()
                {
                    var id = "secondarydegreetotalmarks";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreetotalmarksUpdate()
                {
                    var id = "secondarydegreetotalmarks";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreetotalmarks/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Total Marks: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY_MARKS['TOTAL_MARKS'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreetotalmarksUpdate()">Cancle</button>';
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
          
          <?php endif; ?>
          
          <!-- Passing Year Field -->
          <div class="controls-row" id="secondarydegreepassingyearupdate">
            <h4 class="span4">Passing Year: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['PASSING_YEAR']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreepassingyearbutton"onclick="addSecondarydegreepassingyearUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration From Field -->
          <div class="controls-row" id="secondarydegreedurationfromupdate">
            <h4 class="span4">Duration From : </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['DURATION_FROM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreedurationfrombutton"onclick="addSecondarydegreedurationfromUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration To Field -->
          <div class="controls-row" id="secondarydegreedurationtoupdate">
            <h4 class="span4">Duration To: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['DURATION_TO']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreedurationtobutton"onclick="addSecondarydegreedurationtoUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="controls-row" id="secondarydegreedurationupdate">
            <h4 class="span4">Duration Of Degree: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['DURATION_OF_DEGREE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreedurationbutton"onclick="addSecondarydegreedurationUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Major Field Field -->
          <div class="controls-row" id="secondarydegreemajorupdate">
            <h4 class="span4">Major Field: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['MAJOR_FIELD_SPECIALIZATION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreemajorbutton"onclick="addSecondarydegreemajorUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- CMT_EQUIVALENCE_COMMITTEE Field -->
          <div class="controls-row" id="secondarydegreecmtfromeqcomupdate">
            <h4 class="span4">Comment From Equivalence Committee: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY['CMT_EQUIVALENCE_COMMITTEE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreecmtfromeqcombutton"onclick="addSecondarydegreecmtfromeqcomUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
            <br/>
            <br/>
            <br/>
          </div>
          
          <!-- TRANSCRIPT Field -->
          <div class="controls-row" id="secondarydegreetranscriptupdate">
            <h4 class="span4">Transcript: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_DOCUMENT['TRANSCRIPT']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreetranscriptbutton"onclick="addSecondarydegreetranscriptUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- CERTIFICATE Field -->
          <div class="controls-row" id="secondarydegreecertificateupdate">
            <h4 class="span4">Certificate: </h4>
            <h4 class="controls span6"><?php echo $SECONDARY_DOCUMENT['CERTIFICATE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="secondarydegreecertificatebutton"onclick="addSecondarydegreecertificateUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
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
            
              function removeSecondarydegreefromUpdate()
                {
                    var id = "secondarydegreefrom";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreefromUpdate()
                {
                    var id = "secondarydegreefrom";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreefrom/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous BSc Degree Obtained From: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['CER_DEG_OBT_FROM'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreefromUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
               
                
                
           
               
              
                
            ///////////////////////////////////////////////////////////
            
                function removeSecondarydegreenameUpdate()
                {
                    var id = "secondarydegreename";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreenameUpdate()
                {
                    var id = "secondarydegreename";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreename/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update BSc Degree Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['DEGREE_NAME'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreenameUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                  ///////////////////////////////////////////////////////////
            
                function removeSecondarydegreeboardUpdate()
                {
                    var id = "secondarydegreeboard";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreeboardUpdate()
                {
                    var id = "secondarydegreeboard";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreeboard/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update BSc Degree Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['BOARD'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreeboardUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
             
                
                
             ///////////////////////////////////////////////////////
                
                function removeSecondarydegreepassingyearUpdate()
                {
                    var id = "secondarydegreepassingyear";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreepassingyearUpdate()
                {
                    var id = "secondarydegreepassingyear";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreepassingyear/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Passing Year: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge"  value="<?php echo $SECONDARY['PASSING_YEAR'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreepassingyearUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                
              ////////////////////////////////////////////////////
              
                function removeSecondarydegreedurationfromUpdate()
                {
                    var id = "secondarydegreedurationfrom";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreedurationfromUpdate()
                {
                    var id = "secondarydegreedurationfrom";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreedurationfrom/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration From: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $SECONDARY['DURATION_FROM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreedurationfromUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                ////////////////////////////////////////////////
                
                 function removeSecondarydegreedurationtoUpdate()
                {
                    var id = "secondarydegreedurationto";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreedurationtoUpdate()
                {
                    var id = "secondarydegreedurationto";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreedurationto/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration To: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $SECONDARY['DURATION_FROM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreedurationtoUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                 ////////////////////////////////////////////////
                
                function removeSecondarydegreedurationUpdate()
                {
                    var id = "secondarydegreeduration";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreedurationUpdate()
                {
                    var id = "secondarydegreeduration";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreeduration/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['DURATION_OF_DEGREE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreedurationUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                
                
                  ////////////////////////////////////////////////
                
                function removeSecondarydegreemajorUpdate()
                {
                    var id = "secondarydegreemajor";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreemajorUpdate()
                {
                    var id = "secondarydegreemajor";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreemajor/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Major Field: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['MAJOR_FIELD_SPECIALIZATION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreemajorUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeSecondarydegreecmtfromeqcomUpdate()
                {
                    var id = "secondarydegreecmtfromeqcom";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreecmtfromeqcomUpdate()
                {
                    var id = "secondarydegreecmtfromeqcom";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreecmtfromeqcom/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Comment From Equivalence Comittee: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $SECONDARY['CMT_EQUIVALENCE_COMMITTEE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreecmtfromeqcomUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
               /////////////////////////////////////////////////////////
             
                function removeSecondarydegreetranscriptUpdate()
                {
                    var id = "secondarydegreetranscript";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreetranscriptUpdate()
                {
                    var value = "<?php echo $SECONDARY_DOCUMENT['TRANSCRIPT']; ?>";
                    var id = "secondarydegreetranscript";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreetranscript/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Trancsript: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreetranscriptUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                ////////////////////////////////////////////////
                
                function removeSecondarydegreecertificateUpdate()
                {
                    var id = "secondarydegreecertificate";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addSecondarydegreecertificateUpdate()
                {
                    var value = "<?php echo $SECONDARY_DOCUMENT['CERTIFICATE']; ?>";
                    var id = "secondarydegreecertificate";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_secondary_info/update_secondarydegreecertificate/$APPLICANT_SERIAL");?>';
                        add +='<h4 class="span4" style="color: red">Update Certificate: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeSecondarydegreecertificateUpdate()">Cancle</button>';
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

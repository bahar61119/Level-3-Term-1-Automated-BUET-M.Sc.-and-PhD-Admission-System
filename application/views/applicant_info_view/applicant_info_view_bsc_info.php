       
       
        <?php $bsc_total = sizeof($BSC_BASIC_INFO);?>
        <?php for($i = 0;$i<$bsc_total;$i++):?> 
        <?php $ID = $BSC_BASIC_INFO[$i]['ID'];?>
        <fieldset id="bsc_add">
          <legend>BSc Information</legend>
          
          <!-- BSc Degree Obtained From Field -->
          <div class="controls-row" id="<?php echo "bscdegreefrom{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Degree Obtained From: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreefrom{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreefromUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Credit Transfer Field -->
          <div class="controls-row" id="<?php echo "bsccredittransfer{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Credit Transfer: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['CREDIT_TRANSFER']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bsccredittransfer{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBsccredittransferUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <?php if($BSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM']=="BUET"):?>
          
          <!-- BUET Graduation Department Field -->
          <div class="controls-row" id="<?php echo "bscdegreefrombuetdepartment{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}update" ; ?>">
            <h4 class="span4">BUET Graduation Department: </h4>
            <h4 class="controls span6"><?php echo $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['DEPARTMENT']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreefrombuetdepartment{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}button" ; ?>" onclick="addBscdegreefrombuetdepartmentUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- BUET Student ID Field -->
          <div class="controls-row" id="<?php echo "bscdegreebuetstid{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}update" ; ?>">
            <h4 class="span4">BUET Student ID: </h4>
            <h4 class="controls span6"><?php echo $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['STUDENT_ID']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreebuetstid{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}button" ; ?>" onclick="addBscdegreebuetstidUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- TESTIMONIAL_DSW_PROVIDED Field -->
          <div class="controls-row" id="<?php echo "bscdegreebuetdsw{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}update" ; ?>">
            <div>
            <h4 class="span4">Testimonial Provided From DSW: </h4>
            <h4 class="controls span6"><?php echo $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['TESTIMONIAL_DSW_PROVIDED']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreebuetdsw{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}button" ; ?>" onclick="addBscdegreebuetdswUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
            </div> 
            <br/>
            <br/>
            <br/>
          </div>
          
          <!-- CMT_DSW_OFFICE Field -->
          <div class="controls-row" id="<?php echo "bscdegreebuetdswcmt{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}update" ; ?>">
            <h4 class="span4">Comment From DSW: </h4>
            <h4 class="controls span6"><?php echo $BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['CMT_DSW_OFFICE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreebuetdswcmt{$BUET_GRATUDE[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID']}button" ; ?>" onclick="addBscdegreebuetdswcmtUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <script>
          
           <?php $BSC_ID = $BUET_GRATUDE[$ID]['BSC_ID'];?>
                
                function removeBscdegreefrombuetdepartmentUpdate()
                {
                    var id = "<?php echo "bscdegreefrombuetdepartment{$BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreefrombuetdepartmentUpdate()
                {
                    var id = "<?php echo "bscdegreefrombuetdepartment{$BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreefrombuetdepartment/$APPLICANT_SERIAL/$BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous BUET Department: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BUET_GRATUDE[$BSC_ID]['DEPARTMENT']  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreefrombuetdepartmentUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                
                function removeBscdegreebuetstidUpdate()
                {
                    var id = "<?php echo "bscdegreebuetstid{$BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreebuetstidUpdate()
                {
                    var id = "<?php echo "bscdegreebuetstid{$BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreebuetstid/$APPLICANT_SERIAL/$BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous BUET Student ID: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BUET_GRATUDE[$BSC_ID]['STUDENT_ID']  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreebuetstidUpdate()">Cancle</button>';
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
                
                function removeBscdegreebuetdswUpdate()
                {
                    var id = "<?php echo "bscdegreebuetdsw{$BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreebuetdswUpdate()
                {
                    var value = "<?php echo $BUET_GRATUDE[$BSC_ID]['TESTIMONIAL_DSW_PROVIDED'];  ?>";
                    var id = "<?php echo "bscdegreebuetdsw{$BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreebuetdsw/$APPLICANT_SERIAL/$BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Testimonial Provided From DSW: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreebuetdswUpdate()">Cancle</button>';
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
                
                function removeBscdegreebuetdswcmtUpdate()
                {
                    var id = "<?php echo "bscdegreebuetdswcmt{$BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreebuetdswcmtUpdate()
                {
                    var id = "<?php echo "bscdegreebuetdswcmt{$BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreebuetdswcmt/$APPLICANT_SERIAL/$BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Comment From DSW office: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BUET_GRATUDE[$BSC_ID]['CMT_DSW_OFFICE']  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreebuetdswcmtUpdate()">Cancle</button>';
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
          
          <?php endif;?>
          
          <!-- Degree Name Field -->
          <div class="controls-row" id="<?php echo "bscdegreename{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Degree Name: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['DEGREE_NAME']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreename{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreenameUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Credit Earned Field -->
          <div class="controls-row" id="<?php echo "bscdegreecreditearned{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Credit Earned: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['CREDIT_EARNED']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreecreditearned{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreecreditearnedUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Credit Earned Without Exemption Field -->
          <div class="controls-row" id="<?php echo "bscdegreecreditearnedwithoutexemp{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Credit Earned Without Exemption: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['CRE_EARN_WITHOUT_EXEMPTION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreecreditearnedwithoutexemp{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreecreditearnedwithoutexempUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
            <br/>
            <br/>
            <br/>
          </div>
          
          
          <?php if($BSC_BASIC_INFO[$i]['GRADE_SYSTEM']=='CGPA'):?>
          
          <!-- Secondary Grade Field -->
          <div class="controls-row" id="<?php echo "bscdegreecgpa{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">CGPA: </h4>
            <h4 class="controls span6"><?php echo $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']]['CGPA']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreecgpa{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreecgpaUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- CGPA_AB_2_5 Field -->
          <div class="controls-row">
            <h4 class="span4">CGPA Above 2.5 : </h4>
            <h4 class="controls span6"><?php echo $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']]['CGPA_AB_2_5']; ?></h4>
          </div>
          
          <!-- GPA_SCALE Field -->
          <div class="controls-row" id="<?php echo "bscdegreegradescale{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Grade Scale: </h4>
            <h4 class="controls span6"><?php echo $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']]['CGPA_SCALE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreegradescale{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreegradescaleUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          
          <script>
              
               <?php $CGPA_ID = $BSC_CGPA[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID'];?>
                
                
                function removeBscdegreecgpaUpdate()
                {
                    var id = "<?php echo "bscdegreecgpa{$CGPA_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreecgpaUpdate()
                {
                    var id = "<?php echo "bscdegreecgpa{$CGPA_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreecgpa/$APPLICANT_SERIAL/$CGPA_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update CGPA: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_CGPA[$CGPA_ID]['CGPA'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreecgpaUpdate()">Cancle</button>';
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
       
       
                function removeBscdegreegradescaleUpdate()
                {
                    var id = "<?php echo "bscdegreegradescale{$CGPA_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreegradescaleUpdate()
                {
                    var id = "<?php echo "bscdegreegradescale{$CGPA_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreegradescale/$APPLICANT_SERIAL/$CGPA_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Grade S: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_CGPA[$CGPA_ID]['CGPA_SCALE'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreegradescaleUpdate()">Cancle</button>';
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
          <div class="controls-row" id="<?php echo "bscdegreepermarks{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Percentage of Marks: </h4>
            <h4 class="controls span6"><?php echo $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']]['PER_MARKS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreepermarks{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreepermarksUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- MARKS_AB_50_PER Field -->
          <div class="controls-row">
            <h4 class="span4">Marks Above 50% : </h4>
            <h4 class="controls span6"><?php echo $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']]['MARKS_AB_50_PER']; ?></h4>
          </div>
          
          <!-- Total Marks Field -->
          <div class="controls-row" id="<?php echo "bscdegreetotalmarks{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Total Marks: </h4>
            <h4 class="controls span6"><?php echo $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']]['TOTAL_MARKS']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreetotalmarks{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreetotalmarksUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <script>
              
               <?php $MARKS_ID = $BSC_MARKS[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID'];?>
                
                
                function removeBscdegreepermarksUpdate()
                {
                    var id = "<?php echo "bscdegreepermarks{$MARKS_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreepermarksUpdate()
                {
                    var id = "<?php echo "bscdegreepermarks{$MARKS_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreepermarks/$APPLICANT_SERIAL/$MARKS_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Percentage of Marks: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_MARKS[$MARKS_ID]['PER_MARKS'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreepermarksUpdate()">Cancle</button>';
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
       
       
                function removeBscdegreetotalmarksUpdate()
                {
                    var id = "<?php echo "bscdegreetotalmarks{$MARKS_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreetotalmarksUpdate()
                {
                    var id = "<?php echo "bscdegreetotalmarks{$MARKS_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreetotalmarks/$APPLICANT_SERIAL/$MARKS_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Total Marks: </h4>';
                         add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_MARKS[$MARKS_ID]['TOTAL_MARKS'];  ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreetotalmarksUpdate()">Cancle</button>';
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
          <div class="controls-row" id="<?php echo "bscdegreepassingyear{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Passing Year: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['PASSING_YEAR']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreepassingyear{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreepassingyearUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration From Field -->
          <div class="controls-row" id="<?php echo "bscdegreedurationfrom{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Duration From : </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['DURATION_FROM']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreedurationfrom{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreedurationfromUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration To Field -->
          <div class="controls-row" id="<?php echo "bscdegreedurationto{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Duration To: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['DURATION_TO']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreedurationto{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreedurationtoUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="controls-row" id="<?php echo "bscdegreeduration{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Duration Of Degree: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['DURATION_OF_DEGREE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreeduration{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreedurationUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- Major Field Field -->
          <div class="controls-row" id="<?php echo "bscdegreemajor{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Major Field: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['MAJOR_FIELD_SPECIALIZATION']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreemajor{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreemajorUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- CMT_EQUIVALENCE_COMMITTEE Field -->
          <div class="controls-row" id="<?php echo "bscdegreecmtfromeqcom{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Comment From Equivalent Committee: </h4>
            <h4 class="controls span6"><?php echo $BSC_BASIC_INFO[$i]['CMT_EQUIVALENCE_COMMITTEE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreecmtfromeqcom{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreecmtfromeqcomUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
            <br/>
            <br/>
            <br/>
          </div>
          
          <!-- TRANSCRIPT Field -->
          <div class="controls-row" id="<?php echo "bscdegreetranscript{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Transcript: </h4>
            <h4 class="controls span6"><?php echo $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']]['TRANSCRIPT']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreetranscript{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreetranscriptUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- CERTIFICATE Field -->
          <div class="controls-row" id="<?php echo "bscdegreecertificate{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Certificate: </h4>
            <h4 class="controls span6"><?php echo $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']]['CERTIFICATE']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreecertificate{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreecertificateUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- TESTIMONIAL Field -->
          <div class="controls-row" id="<?php echo "bscdegreetestimonial{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Testimonial: </h4>
            <h4 class="controls span6"><?php echo $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']]['TESTIMONIAL']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreetestimonial{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreetestimonialUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
          </div>
          
          <!-- TESTIMONIAL_AUTHORIZED_PERSON Field -->
          <div class="controls-row" id="<?php echo "bscdegreetestimonialauthorized{$BSC_BASIC_INFO[$i]['ID']}update" ; ?>">
            <h4 class="span4">Testimonial Authorized Person: </h4>
            <h4 class="controls span6"><?php echo $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']]['TESTIMONIAL_AUTHORIZED_PERSON']; ?></h4>
            <a class="controls span2 btn btn-primary" id="<?php echo "bscdegreetestimonialauthorized{$BSC_BASIC_INFO[$i]['ID']}button" ; ?>" onclick="addBscdegreetestimonialauthorizedUpdate()"><i class="icon-shopping-cart icon-white"></i>Update</a>
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
            
              function removeBscdegreefromUpdate()
                {
                    var id = "<?php echo "bscdegreefrom{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreefromUpdate()
                {
                    var id = "<?php echo "bscdegreefrom{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreefrom/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Previous BSc Degree Obtained From: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['CER_DEG_OBT_FROM'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreefromUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
               
                
                function removeBsccredittransferUpdate()
                {
                    var id = "<?php echo "bsccredittransfer{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBsccredittransferUpdate()
                {
                    var value = "<?php echo $BSC_BASIC_INFO[$i]['CREDIT_TRANSFER']; ?>";
                    
                    var id = "<?php echo "bsccredittransfer{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bsccredittransfer/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Credit Transfer: </h4>';
                        add +='<div class="controls span4">';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" value="yes" id="'+id+'" name="'+id+'" ';
                        if(value=='yes') add += 'checked';
                        add +='>yes';
                        add +='</div>';
                        add +='<div class="radio span6">';
                        add +='<input type="radio" value="no" id="'+id+'" name="'+id+'" ';
                        if(value=='no') add += 'checked';
                        add +='>no';
                        add +='</div>';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBsccredittransferUpdate()">Cancle</button>';
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
            
                function removeBscdegreenameUpdate()
                {
                    var id = "<?php echo "bscdegreename{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreenameUpdate()
                {
                    var id = "<?php echo "bscdegreename{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreename/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update BSc Degree Name: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['DEGREE_NAME'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreenameUpdate()">Cancle</button>';
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
            
                function removeBscdegreecreditearnedUpdate()
                {
                    var id = "<?php echo "bscdegreecreditearned{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreecreditearnedUpdate()
                {
                    var id = "<?php echo "bscdegreecreditearned{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreecreditearned/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Credit Earned: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['CREDIT_EARNED'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreecreditearnedUpdate()">Cancle</button>';
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
            
                function removeBscdegreecreditearnedwithoutexempUpdate()
                {
                    var id = "<?php echo "bscdegreecreditearnedwithoutexemp{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreecreditearnedwithoutexempUpdate()
                {
                    var id = "<?php echo "bscdegreecreditearnedwithoutexemp{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreecreditearnedwithoutexemp/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Credit Earned Without Exemption: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['CRE_EARN_WITHOUT_EXEMPTION'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreecreditearnedwithoutexempUpdate()">Cancle</button>';
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
                
                function removeBscdegreepassingyearUpdate()
                {
                    var id = "<?php echo "bscdegreepassingyear{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreepassingyearUpdate()
                {
                    var id = "<?php echo "bscdegreepassingyear{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreepassingyear/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Passing Year: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge"  value="<?php echo $BSC_BASIC_INFO[$i]['PASSING_YEAR'] ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreepassingyearUpdate()">Cancle</button>';
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
              
                function removeBscdegreedurationfromUpdate()
                {
                    var id = "<?php echo "bscdegreedurationfrom{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreedurationfromUpdate()
                {
                    var id = "<?php echo "bscdegreedurationfrom{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreedurationfrom/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration From: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['DURATION_FROM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreedurationfromUpdate()">Cancle</button>';
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
                
                 function removeBscdegreedurationtoUpdate()
                {
                    var id = "<?php echo "bscdegreedurationto{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreedurationtoUpdate()
                {
                    var id = "<?php echo "bscdegreedurationto{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreedurationto/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration To: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="date" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['DURATION_FROM']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreedurationtoUpdate()">Cancle</button>';
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
                
                function removeBscdegreedurationUpdate()
                {
                    var id = "<?php echo "bscdegreeduration{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreedurationUpdate()
                {
                    var id = "<?php echo "bscdegreeduration{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreeduration/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Duration: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['DURATION_OF_DEGREE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreedurationUpdate()">Cancle</button>';
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
                
                function removeBscdegreemajorUpdate()
                {
                    var id = "<?php echo "bscdegreemajor{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreemajorUpdate()
                {
                    var id = "<?php echo "bscdegreemajor{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreemajor/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Major Field: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['MAJOR_FIELD_SPECIALIZATION']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreemajorUpdate()">Cancle</button>';
                        add +='</div>';
                        add += modal;
                        add +='<?php echo form_close();?>';
                        
                        add +='</div>';
                        
                    var update = "#"+id+"update";
                    var button = "#"+id+"button";    
                    $(update).append(add);
                    $(button).hide();
                    
                }
                
                function removeBscdegreecmtfromeqcomUpdate()
                {
                    var id = "<?php echo "bscdegreecmtfromeqcom{$ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreecmtfromeqcomUpdate()
                {
                    var id = "<?php echo "bscdegreecmtfromeqcom{$ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreecmtfromeqcom/$APPLICANT_SERIAL/$ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Comment From Equivalence Comittee: </h4>';
                        add +='<div class="controls span4">';
                        add +='<input type="text" class="input-xlarge" value="<?php echo $BSC_BASIC_INFO[$i]['CMT_EQUIVALENCE_COMMITTEE']; ?>" id="'+id+'" name="'+id+'">';
                        add +='</div>';
                        add +='<div class="controls span4">';
                        add +='<button role="button" data-toggle="modal" class="btn btn-success span6"  href="#myModal">Save</button>';
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreecmtfromeqcomUpdate()">Cancle</button>';
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
                <?php $DOCUMENT_BSC_ID = $BSC_DOCUMENT[$BSC_BASIC_INFO[$i]['ID']]['BSC_ID'];?>
                
                
                function removeBscdegreetranscriptUpdate()
                {
                    var id = "<?php echo "bscdegreetranscript{$DOCUMENT_BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreetranscriptUpdate()
                {
                    var value = "<?php echo $BSC_DOCUMENT[$DOCUMENT_BSC_ID]['TRANSCRIPT']; ?>";
                    var id = "<?php echo "bscdegreetranscript{$DOCUMENT_BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreetranscript/$APPLICANT_SERIAL/$DOCUMENT_BSC_ID");?>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreetranscriptUpdate()">Cancle</button>';
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
                
                function removeBscdegreecertificateUpdate()
                {
                    var id = "<?php echo "bscdegreecertificate{$DOCUMENT_BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreecertificateUpdate()
                {
                    var value = "<?php echo $BSC_DOCUMENT[$DOCUMENT_BSC_ID]['CERTIFICATE']; ?>";
                    var id = "<?php echo "bscdegreecertificate{$DOCUMENT_BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreecertificate/$APPLICANT_SERIAL/$DOCUMENT_BSC_ID");?>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreecertificateUpdate()">Cancle</button>';
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
                
                function removeBscdegreetestimonialUpdate()
                {
                    var id = "<?php echo "bscdegreetestimonial{$DOCUMENT_BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreetestimonialUpdate()
                {
                    var value = "<?php echo $BSC_DOCUMENT[$DOCUMENT_BSC_ID]['TESTIMONIAL']; ?>";
                    var id = "<?php echo "bscdegreetestimonial{$DOCUMENT_BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreetestimonial/$APPLICANT_SERIAL/$DOCUMENT_BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Testimonial: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreetestimonialUpdate()">Cancle</button>';
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
                
                function removeBscdegreetestimonialauthorizedUpdate()
                {
                    var id = "<?php echo "bscdegreetestimonialauthorized{$DOCUMENT_BSC_ID}"; ?>";
                    var update = "#"+id+"update_script";
                    var button = "#"+id+"button";
                   $(update).remove();
                   $(button).show();   
                }
                
                function addBscdegreetestimonialauthorizedUpdate()
                {
                    var value = "<?php echo $BSC_DOCUMENT[$DOCUMENT_BSC_ID]['TESTIMONIAL_AUTHORIZED_PERSON']; ?>";
                    var id = "<?php echo "bscdegreetestimonialauthorized{$DOCUMENT_BSC_ID}"; ?>";
                    var add ='<div class="controls-row" id="'+id+'update_script">';
                        add +='<?php echo form_open("update_bsc_info/update_bscdegreetestimonialauthorized/$APPLICANT_SERIAL/$DOCUMENT_BSC_ID");?>';
                        add +='<h4 class="span4" style="color: red">Update Testimonial Authorized: </h4>';
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
                        add +='<button class="btn span6" data-dismiss="alert" type="button" onclick="removeBscdegreetestimonialauthorizedUpdate()">Cancle</button>';
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
    
    
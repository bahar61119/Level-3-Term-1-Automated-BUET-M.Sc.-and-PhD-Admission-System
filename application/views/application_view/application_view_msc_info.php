        <?php if($CURRENT_ADMISSION['PROGRAM']=="PhD"):?>
        <?php $msc_total = sizeof($MSC['CER_DEG_OBT_FROM']);?>
        <?php for($i = 0;$i<$msc_total;$i++):?>
        <fieldset id="msc_add">
          <legend>MSc Information</legend>
          
          <!-- MSc Degree Obtained From Field -->
          <div class="controls-row">
            <h4 class="span4">Degree Obtained From: </h4>
            <h4 class="controls"><?php echo $MSC['CER_DEG_OBT_FROM'][$i]; ?></h4>
          </div>
          
          <!-- Credit Transfer Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Transfer: </h4>
            <h4 class="controls"><?php echo $MSC['CREDIT_TRANSFER'][$i]; ?></h4>
          </div>
          
          <?php if($MSC['CER_DEG_OBT_FROM'][$i]=="BUET"):?>
          <?php $a=$i+1; ?>
          <!-- BUET Masters Department Field -->
          <div class="controls-row">
            <h4 class="span4">BUET Masters Department: </h4>
            <h4 class="controls"><?php echo $MSC['DEPARTMENT']["MSC{$a}"]; ?></h4>
          </div>
          
          <!-- BUET Student ID Field -->
          <div class="controls-row">
            <h4 class="span4">BUET Student ID: </h4>
            <h4 class="controls"><?php echo $MSC['STUDENT_ID']["MSC{$a}"]; ?></h4>
          </div>
          <?php endif;?>
          
          <!-- Degree Name Field -->
          <div class="controls-row">
            <h4 class="span4">Degree Name: </h4>
            <h4 class="controls"><?php echo $MSC['DEGREE_NAME'][$i]; ?></h4>
          </div>
          
          <!-- Credit Earned Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Earned: </h4>
            <h4 class="controls"><?php echo $MSC['CREDIT_EARNED'][$i]; ?></h4>
          </div>
          
          <!-- Credit Earned Without Exemption Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Earned Without Exemption: </h4>
            <h4 class="controls"><?php echo $MSC['CRE_EARN_WITHOUT_EXEMPTION'][$i]; ?></h4>
          </div>
          
          
          <!-- MSc Grade System Field -->
          <div class="controls-row">
            <h4 class="span4">Grade System: </h4>
            <h4 class="controls"><?php echo $MSC['GRADE_SYSTEM'][$i]; ?></h4>
          </div>
          
          <!-- MSc Grade Field -->
          <div class="controls-row">
            <h4 class="span4">Grade: </h4>
            <h4 class="controls"><?php echo $MSC['GRADE'][$i]; ?></h4>
          </div>
          
          <!-- MSc Grade Scale Field -->
          <div class="controls-row">
            <h4 class="span4">Grade Scale: </h4>
            <h4 class="controls"><?php echo $MSC['GRADE_SCALE'][$i]; ?></h4>
          </div>
          
          <!-- Passing Year Field -->
          <div class="controls-row">
            <h4 class="span4">Passing Year: </h4>
            <h4 class="controls"><?php echo $MSC['PASSING_YEAR'][$i]; ?></h4>
          </div>
          
          <!-- Duration From Field -->
          <div class="controls-row">
            <h4 class="span4">Duration From : </h4>
            <h4 class="controls"><?php echo $MSC['DURATION_FROM'][$i]; ?></h4>
          </div>
          
          <!-- Duration To Field -->
          <div class="controls-row">
            <h4 class="span4">Duration To: </h4>
            <h4 class="controls"><?php echo $MSC['DURATION_TO'][$i]; ?></h4>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="controls-row">
            <h4 class="span4">Duration Of Degree: </h4>
            <h4 class="controls"><?php echo $MSC['DURATION_OF_DEGREE'][$i]; ?></h4>
          </div>
          
          <!-- Major Field Field -->
          <div class="controls-row">
            <h4 class="span4">Major Field: </h4>
            <h4 class="controls"><?php echo $MSC['MAJOR_FIELD_SPECIALIZATION'][$i]; ?></h4>
          </div>
          
        </fieldset>
        <?php endfor;?>
        <?php endif;?>
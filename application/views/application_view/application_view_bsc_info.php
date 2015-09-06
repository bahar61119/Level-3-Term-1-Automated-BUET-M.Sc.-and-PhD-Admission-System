       
       
        <?php $bsc_total = sizeof($BSC['CER_DEG_OBT_FROM']);?>
        <?php for($i = 0;$i<$bsc_total;$i++):?>
        <fieldset id="bsc_add">
          <legend>BSc Information</legend>
          
          <!-- BSc Degree Obtained From Field -->
          <div class="controls-row">
            <h4 class="span4">Degree Obtained From: </h4>
            <h4 class="controls"><?php echo $BSC['CER_DEG_OBT_FROM'][$i]; ?></h4>
          </div>
          
          <!-- Credit Transfer Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Transfer: </h4>
            <h4 class="controls"><?php echo $BSC['CREDIT_TRANSFER'][$i]; ?></h4>
          </div>
          
          <?php if($BSC['CER_DEG_OBT_FROM'][$i]=="BUET"):?>
          <?php $a=$i+1; ?>
          <!-- BUET Graduation Department Field -->
          <div class="controls-row">
            <h4 class="span4">BUET Graduation Department: </h4>
            <h4 class="controls"><?php echo $BSC['DEPARTMENT']["BSC{$a}"]; ?></h4>
          </div>
          
          <!-- BUET Student ID Field -->
          <div class="controls-row">
            <h4 class="span4">BUET Student ID: </h4>
            <h4 class="controls"><?php echo $BSC['STUDENT_ID']["BSC{$a}"]; ?></h4>
          </div>
          
          <?php endif;?>
          
          <!-- Degree Name Field -->
          <div class="controls-row">
            <h4 class="span4">Degree Name: </h4>
            <h4 class="controls"><?php echo $BSC['DEGREE_NAME'][$i]; ?></h4>
          </div>
          
          <!-- Credit Earned Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Earned: </h4>
            <h4 class="controls"><?php echo $BSC['CREDIT_EARNED'][$i]; ?></h4>
          </div>
          
          <!-- Credit Earned Without Exemption Field -->
          <div class="controls-row">
            <h4 class="span4">Credit Earned Without Exemption: </h4>
            <h4 class="controls"><?php echo $BSC['CRE_EARN_WITHOUT_EXEMPTION'][$i]; ?></h4>
          </div>
          
          
          <!-- BSc Grade System Field -->
          <div class="controls-row">
            <h4 class="span4">Grade System: </h4>
            <h4 class="controls"><?php echo $BSC['GRADE_SYSTEM'][$i]; ?></h4>
          </div>
          
          <!-- BSc Grade Field -->
          <div class="controls-row">
            <h4 class="span4">Grade: </h4>
            <h4 class="controls"><?php echo $BSC['GRADE'][$i]; ?></h4>
          </div>
          
          <!-- BSc Grade Scale Field -->
          <div class="controls-row">
            <h4 class="span4">Grade Scale: </h4>
            <h4 class="controls"><?php echo $BSC['GRADE_SCALE'][$i]; ?></h4>
          </div>
          
          <!-- Passing Year Field -->
          <div class="controls-row">
            <h4 class="span4">Passing Year: </h4>
            <h4 class="controls"><?php echo $BSC['PASSING_YEAR'][$i]; ?></h4>
          </div>
          
          <!-- Duration From Field -->
          <div class="controls-row">
            <h4 class="span4">Duration From : </h4>
            <h4 class="controls"><?php echo $BSC['DURATION_FROM'][$i]; ?></h4>
          </div>
          
          <!-- Duration To Field -->
          <div class="controls-row">
            <h4 class="span4">Duration To: </h4>
            <h4 class="controls"><?php echo $BSC['DURATION_TO'][$i]; ?></h4>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="controls-row">
            <h4 class="span4">Duration Of Degree: </h4>
            <h4 class="controls"><?php echo $BSC['DURATION_OF_DEGREE'][$i]; ?></h4>
          </div>
          
          <!-- Major Field Field -->
          <div class="controls-row">
            <h4 class="span4">Major Field: </h4>
            <h4 class="controls"><?php echo $BSC['MAJOR_FIELD_SPECIALIZATION'][$i]; ?></h4>
          </div>
          
        </fieldset>
        <?php endfor;?>
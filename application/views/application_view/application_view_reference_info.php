        
        
        <?php $ref_total = sizeof($REFERENCE['REF_NAME']);?>
        <?php for($i = 0;$i<$ref_total;$i++):?>
        <fieldset id="ref_add">
        <legend>Reference</legend>
          
        <!-- Reference Name Field -->
          <div class="controls-row">
            <h4 class="span4">Reference Name: </h4>
            <h4 class="controls"><?php echo $REFERENCE['REF_NAME'][$i]; ?></h4>
          </div>
        
          <!-- Reference Address Field -->
          <div class="controls-row">
            <h4 class="span4">Reference Address: </h4>
            <h4 class="controls"><?php echo $REFERENCE['REF_ADDRESS'][$i]; ?></h4>
          </div>
        
        <!-- Reference Phone Field -->
          <div class="controls-row">
            <h4 class="span4">Reference Phone: </h4>
            <h4 class="controls"><?php echo $REFERENCE['REF_MOBILE'][$i]; ?></h4>
          </div>
         </fieldset>
        
        <?php endfor;?>
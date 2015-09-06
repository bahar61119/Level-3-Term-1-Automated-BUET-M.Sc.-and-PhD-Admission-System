<fieldset>
          <legend>Employee Status</legend>
          
          <?php if($EMPLOYED['IS_EMPLOYED']=="yes"):?>
          
          <!-- Employee Field -->
          <div class="controls-row">
            <h4 class="span4">Employee: </h4>
            <h4 class="controls">Yes</h4>
          </div> 
          
          <!-- Employee Status Field -->
          <div class="controls-row">
            <h4 class="span4">Employee Status: </h4>
            <h4 class="controls"><?php echo $EMPLOYED['EMP_STATUS']; ?></h4>
          </div> 
          
          <?php else: ?>
          
          <!-- Employee Field -->
          <div class="controls-row">
            <h4 class="span4">Employee: </h4>
            <h4 class="controls">No</h4>
          </div> 
          
          <?php endif; ?>
</fieldset>

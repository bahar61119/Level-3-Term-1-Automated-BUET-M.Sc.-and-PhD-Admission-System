<fieldset>
          <legend>Contact Information</legend>
          
          <!-- Present Address Field -->
          <div class="controls-row">
            <h4 class="span4">Present Address: </h4>
            <h4 class="controls"><?php echo $CONTACT['PRESENT_ADDRESS']; ?></h4>
          </div>
          
          <!-- Permanent Address Field -->
          <div class="controls-row">
            <h4 class="span4">Permanent Address: </h4>
            <h4 class="controls"><?php echo $CONTACT['PERMAMENT_ADDRESS']; ?></h4>
          </div>
          
          <!-- Email Field -->
          <div class="controls-row">
            <h4 class="span4">Email: </h4>
            <h4 class="controls"><?php echo $CONTACT['EMAIL']; ?></h4>
          </div>
          
         
          <?php foreach($PHONE as $number):?>
          <!-- Phone Field -->
          <div class="controls-row">
            <h4 class="span4">Phone: </h4>
            <h4 class="controls"><?php echo $number; ?></h4>
          </div>
          <?php endforeach; ?>
</fieldset>

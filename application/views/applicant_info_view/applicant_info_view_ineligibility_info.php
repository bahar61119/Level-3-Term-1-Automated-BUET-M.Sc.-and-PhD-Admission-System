<fieldset>
          <legend>Comments on Student</legend>
           <?php if(isset($COMMENT_ON)):?>
          <?php for($i=0;$i<sizeof($COMMENT_ON);$i++):?>
          <!-- REASON Field -->
          <div class="controls-row" id="ineligibilityupdate">
            <h4 class="span4">Reason: </h4>
            <h4 class="controls span6"><?php echo $COMMENT_ON[$i]['COMMENTS']; ?></h4>
            <a class="controls span2 btn btn-primary" role="button" data-toggle="modal" href="#myModal"  id="ineligibilitybutton" ><i class="icon-shopping-cart icon-white"></i>Delete</a>
          </div>
          
           <?php $COMMENT = $COMMENT_ON[$i]['COMMENTS']; ?>
        <!-- Modal -->
       <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               <h3 id="myModalLabel">Application Form</h3>
           </div>
           <div class="modal-body">
                 <h4 style="color: red">Are you sure?</h4>
           </div>
           <div class="modal-footer">
               <a class="btn btn-primary" href="<?php echo site_url("delete_comment_info/delete_comment/$APPLICANT_SERIAL/$COMMENT");?>">Submit</a>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
           </div>
       </div>
        <?php endfor; ?>
        <?php endif; ?>
        <?php if(isset($INELIGIBILITY)):?>
        <?php for($i=0;$i<sizeof($INELIGIBILITY);$i++):?>
          <!-- REASON Field -->
          <div class="controls-row">
            <h4 class="span4">Reason: </h4>
            <h4 class="controls span6"><?php echo $INELIGIBILITY[$i]['COMMENTS']; ?></h4>
          </div>
       <?php endfor; ?>
          <?php endif; ?>
</fieldset>

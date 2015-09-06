<section>
    <div class="page-header ">
        <h1>Pending Admin List</h1>
        <h4>Total Pending Admin: <?php echo $TOTAL_RESULT; ?></h4>
    </div>
    <div class="row-fluid cntainer">
    <fieldset>
          <div class="controls-row">
           <section id="tables">
             <div class="wrapper">  
              <table class="table table-bordered table-striped table-hover">
                <thead >
                  <tr style="background-color: azure;">
                    <?php foreach($MEMBER_TITLE as $TITLE => $VALUE):?>
                    <th <?php if($SORT_BY == $TITLE) echo "class= \"SORT_$SORT_ORDER\""?> style="text-align: center"><?php echo anchor("admin_info/admin_list/$TITLE/" .
                            (($SORT_ORDER=='ASC' && $SORT_BY == $TITLE)?'DESC':'ASC'),
                            $VALUE); ?>
                    </th>
                    <?php endforeach;?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($MEMBERS as $MEMBER):?>
                  <tr>
                    <?php  $MEMBER_SERIAL = $MEMBER['ID']?>    
                    <?php foreach($MEMBER_TITLE as $TITLE => $VALUE):?>
                      <td style="text-align: center"><a href="<?php echo site_url("admin_info/admin_individual_info/$MEMBER_SERIAL"); ?>"><?php echo $MEMBER[$TITLE]; ?></a></td>
                    <?php endforeach;?>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
             </div>
            </section>
          </div>
        
        <?php if(strlen($PAGINATION)): ?>
        <div>
              <?php echo $PAGINATION; ?>
        </div>
        <?php endif;?>
    </fieldset>   
        
        
<!-- ------------------------------------------------------------------------------------------------- -->             
       
     </div>
    
     <div align="right">
         <a  class="btn btn-success btn-large" href="<?php echo site_url("admin");?>" >Back To Main Menu</a>
     </div>
</section>


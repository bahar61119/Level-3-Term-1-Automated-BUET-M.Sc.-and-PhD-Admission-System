<section>
    <div class="page-header ">
        <h1><?php echo $TITLE; ?></h1>
        <h4>Total Applicant : <?php echo $TOTAL_APPLICANT; ?></h4>
    </div>
    <div class="row-fluid cntainer">
    <fieldset>
          <div class="controls-row">
           <section id="tables">
             <div class="wrapper">  
              <table class="table table-bordered table-striped table-hover" style="width: auto;">
                <thead>
                  <tr style="background-color: azure;">
                    <?php foreach($APPLICANT_TITLE as $TITLE => $VALUE):?>
                    <th <?php if($SORT_BY == $TITLE) echo "class= \"SORT_$SORT_ORDER\""?> style="text-align: center"><?php echo anchor("admin/category_individual/$TABLE_NAME/$TITLE/" .
                            (($SORT_ORDER=='ASC' && $SORT_BY == $TITLE)?'DESC':'ASC'),
                            $VALUE); ?>
                    </th>
                    <?php endforeach;?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($APPLICANTS as $APPLICANT):?>
                  <tr>
                    <?php  $APPLICANT_SERIAL = $APPLICANT['APPLICANT_SERIAL']?>    
                    <?php foreach($APPLICANT_TITLE as $TITLE => $VALUE):?>
                      <td style="text-align: center;"><a href="<?php echo site_url("applicant_info/info_list/$APPLICANT_SERIAL"); ?>"><?php echo $APPLICANT[$TITLE]; ?></a></td>
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


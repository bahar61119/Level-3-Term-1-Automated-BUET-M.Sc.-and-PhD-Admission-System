
<?php $this->load->library('table_library'); ?>

<section>
    <div class="page-header ">
        <h1>Search</h1>
    </div>
    <div class="row-fluid cntainer">
    
   <fieldset>
      <div class="controls-row form-signin">
          <?php echo form_open('search/search_form');?>
          <fieldset>
                <div>
                    <lable class="span3"><h4><strong>Search</strong></h4></lable>    
                    <?php
                            $data = array(
                                'name'=>"search",
                                'placeholder'=>"Search",
                                'id'=>"search"
                            );
                            echo form_input($data, set_value('search'),'class="span8"');
                    ?>
                </div>
                
                <div id="table">
                   <lable class="span3"><h4><strong>Category</strong></h4></lable> 
                   <select class="span8" id="category" name="category" onChange="selectColumn()">
                       <?php foreach($TABLES_TITLE as $TITLE => $VALUE):?>
                       <option value="<?php echo $TITLE; ?>"><?php echo $VALUE; ?></option>
                       <?php endforeach; ?>
                   </select>
                </div>
                
        </fieldset>
         <div>
            <button class="btn  btn-warning span4 offset4" type="submit" name="sumbit">Search</button>
         </div>
      </div>
    </fieldset>
     <div class="page-header ">
        <h3>Search Results For <Strong style="color:red;"><?php echo $TABLE_TITLE; ?></Strong></h3>
        <h4 style="color: green;">Total Search Results : <Strong style="color:red;"><?php echo $TOTAL_RESULT; ?></Strong> </h4>
    </div>   
        
    <fieldset>
          <div class="controls-row">
           <section id="tables">
             <div class="wrapper">  
              <table class="table table-bordered table-striped table-hover" style="width: auto;">
                <thead>
                  <tr style="background-color: azure;">
                    <?php foreach($APPLICANT_TITLE as $TITLE => $VALUE):?>
                    <th <?php if($SORT_BY == $TITLE) echo "class= \"SORT_$SORT_ORDER\""?> style="text-align: center"><?php echo anchor("search/search_results/$QUERY_ID/$TABLE_NAME/$TITLE/" .
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
    
    <div align="right">
         <a  class="btn btn-success btn-large" href="<?php echo site_url("search");?>" >Back To Main Menu</a>
    </div>
</section>

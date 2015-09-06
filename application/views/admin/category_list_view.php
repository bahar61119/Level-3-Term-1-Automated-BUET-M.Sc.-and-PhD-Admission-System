
<section>
    <div class="page-header ">
        <h1>Category List</h1>
    </div>
    <div class="row-fluid cntainer">
        
    <fieldset>
          <div class="controls-row">
            <ul>
                <?php foreach($TABLE_TITLE as $TITLE => $VALUE):?>
                    <li><a href="<?php echo site_url("admin/category_individual/$TITLE"); ?>"><?php echo $VALUE; ?></a></li>
                <?php endforeach;?>
            </ul>
          </div>
          
    </fieldset>   
 
       
                    
                  
     
        
        
        
<!-- ------------------------------------------------------------------------------------------------- -->             
       
     </div>
    
</section>

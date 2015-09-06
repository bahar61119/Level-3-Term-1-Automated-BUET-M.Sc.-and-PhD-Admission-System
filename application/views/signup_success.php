<div class="form-signin">
    <form class="form-signin">
        <h2 class="form-signup-heading">Your account has been created</h2>
        <?php 
            $data=array(
                'class'=>'btn btn-large btn-block btn-success',
                'type'=>'button',
                'name'=>'newaccount'
            );
            
            echo anchor('login','Sign In',$data);
        ?>
        </form>
</div>
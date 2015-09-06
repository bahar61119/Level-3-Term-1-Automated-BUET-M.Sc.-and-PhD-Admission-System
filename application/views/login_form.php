<section class="span6 offset3">
        &nbsp;
        
        <?php
            $data = array(
                    'class'=>'form-signin'
                    );
            echo form_open('login/check_validate',$data);
        ?>
        <h2 class="form-signin-heading">Database Management</h2>
        <strong style="color : red"><?php echo validation_errors(); ?></strong>  
        <input type="text" class="input-block-level" name="username" placeholder="Username">
        <input type="password" class="input-block-level" name="password" placeholder="Password">
        <div class="controls controls-row">
        <button class="btn btn-large btn-block btn-primary" type="submit" name="sumbit">Sign in</button>
        <?php 
            $data=array(
                'class'=>'btn btn-large btn-block btn-success',
                'type'=>'button',
                'name'=>'newaccount'
            );
            
            echo anchor('login/signup','Create a New Account',$data);
        ?>
        
        </div>
      </form>
</section> 

<section class="span6 offset3">

<?php
   $data = array(
        'class'=>'form-signin'
   );
   echo form_open('login/create_member',$data);
?>    
<h2 class="form-signup-heading">Create an account</h2>
<strong style="color : red"><?php echo validation_errors(); ?></strong>  
<fieldset>
    <legend> Personal Information </legend>
        <input type="text" class="input-block-level" name="firstname" placeholder="First Name">
        <input type="text" class="input-block-level" name="lastname" placeholder="Last Name">
        <input type="text" class="input-block-level" name="designation" placeholder="Designation">
        <input type="text" class="input-block-level" name="address" placeholder="Address">
        <input type="text" class="input-block-level" name="phone" placeholder="Phone">
        <input type="text" class="input-block-level" name="emailaddress" placeholder="Email Address">
</fieldset>
<fieldset>
    <legend> Login Information </legend>
        <input type="text" class="input-block-level" name="username" placeholder="Username">
        <input type="password" class="input-block-level" name="password" placeholder="Password">
        <input type="password" class="input-block-level" name="password1" placeholder="Confirm Password">
        <button class="btn btn-large btn-block btn-primary" type="submit" name="sumbit">Create Account</button>
</fieldset>

</section>

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/navbar'); ?>
<?php $logged = $this->session->userdata('is_logged_in'); ?> 
<div class="container">    
    <?php //$this->load->view('includes/navbar_1'); ?>
    <?php //$this->load->view('includes/typography'); ?>
    <?php $this->load->view('includes/masthead'); ?>
    <?php 
    if(!$logged)$this->load->view('includes/navbar_second'); 
    else $this->load->view('includes/navbar_member');
    ?>
        <div>
            <div class="row-fluid">
                <div class="span3 ">
                    <?php
                    if(!$logged) $this->load->view('includes/navs'); 
                    else $this->load->view('includes/navs_member');
                    ?>
                </div>
                <div class="span9">
                    <?php $this->load->view($main_content);?>
                </div>
            </div>
        </div>
    
    <?php //$this->load->view('login_form');     ?>
    <?php //$this->load->view('includes/buttons'); ?>
    <?php //$this->load->view('includes/forms'); ?>
    <?php //$this->load->view('includes/miscellaneous'); ?>
    <?php //$this->load->view('includes/tables'); ?>
    <?php //$this->load->view('includes/labels'); ?>
    <?php //$this->load->view('includes/progress_bars'); ?>
    <?php //$this->load->view('includes/alerts_messages'); ?>
    <?php $this->load->view('includes/footer'); ?>
</div>

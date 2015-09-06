  <!-- Navbar
    ================================================== -->
 <div class="navbar transparent navbar-fixed-top ">
   <div class="navbar-inner">
     <div class="container">
        <?php $url= base_url(); ?>
         <a class="brand" href="http://www.buet.ac.bd/">Bangladesh University of Engineering and Technology</a>
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav pull-right" id="main-menu-right">
            
            <?php
            $logged = $this->session->userdata('is_logged_in');
            
            if(!$logged){
                $username= 'Public';
                $value= 'Sign In';
                $url= base_url().'index.php/login/index';
                $url1= base_url();
            }
            else{
                $username= $this->session->userdata('username');
                $value= 'Sign Out';
                $url= base_url().'index.php/site/logout';
                $url1= base_url();
            }
            ?> 
            <li><a rel="tooltip" target="_blank" href="<?php echo $url1 ?>" title="<?php echo ($logged)?'Member':'Public' ; ?>" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);"><?php echo $username; ?><!--<i class="icon-share-alt"></i>--></a></li>
            <li><a rel="tooltip" target="_blank" href="<?php echo $url ?>" title="<?php echo ($logged)?'Click to Log Out':'Click to Log In' ; ?>" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap']);"><?php echo $value; ?><!--<i class="icon-share-alt"></i>--></a></li>
        </ul>
       </div>
     </div>
   </div>
 </div>


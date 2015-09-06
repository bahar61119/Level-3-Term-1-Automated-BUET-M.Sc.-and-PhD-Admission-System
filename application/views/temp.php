<div>
    <?php if(isset($PHOTO)): ?>
    <a href="<?php echo base_url() . 'images/' . $PHOTO ;?>">
    <img src="<?php echo base_url() . 'images/' .$PHOTO; ?>" width="240" height="200" class="img-rounded"/>
    </a>
    <?php endif; ?>
</div>
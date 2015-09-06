
<div class="offset4">
    <?php if(isset($PHOTO)): ?>
    <a href="<?php echo base_url() . 'images/' . $PHOTO['FILE_NAME'] ;?>">
    <img src="<?php echo base_url() . 'images/' .$PHOTO['FILE_NAME']; ?>" width="240" height="200" class="img-rounded"/>
    </a>
    <?php endif; ?>
</div>

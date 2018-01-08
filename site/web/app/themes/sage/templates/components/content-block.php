<?php if( '' !== get_post()->post_content ) : ?>
    <div class="content-block">
        <?php echo get_post()->post_content; ?>
    </div>
<?php endif; ?>
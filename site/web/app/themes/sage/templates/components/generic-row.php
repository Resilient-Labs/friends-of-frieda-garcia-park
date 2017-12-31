<section class="generic-row">
    <?php if (get_sub_field('image')): ?>
        <div class="generic-row-media-wrapper">
            <img src="<?php the_sub_field('image');?>">
        </div>
    <?php endif;?>
    <?php if (get_sub_field('content')): ?>
        <div class="generic-row-content-wrapper">
            <?php the_sub_field('content'); ?>
        </div>
    <?php endif; ?>
</section>
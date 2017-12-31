<div class="card-alt">
    <?php if (get_sub_field('image')): ?>
        <div class="card-alt-media-wrapper">
            <img src="<?php the_sub_field('image');?>">
        </div>
    <?php endif;?>
    <?php if (get_sub_field('content')): ?>
        <div class="card-alt-content-wrapper">
            <?php the_sub_field('content'); ?>
        </div>
    <?php endif; ?>
</div>
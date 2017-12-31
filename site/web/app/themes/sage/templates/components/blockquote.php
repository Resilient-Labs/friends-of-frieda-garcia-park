<aside class="blockquote">
    <?php if (get_sub_field('image')) : ?>
        <img src="<?php the_sub_field('image'); ?>"/>
    <?php endif; ?>
    <?php if (get_sub_field('blockquote')) : ?>
        <blockquote>
            <?php the_sub_field('blockquote'); ?>
        </blockquote>
    <?php endif; ?>
</aside>
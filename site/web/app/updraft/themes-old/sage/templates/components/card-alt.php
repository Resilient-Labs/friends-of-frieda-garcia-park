<?php if( have_rows('card_alt') ): ?>
    <section class="card-alt-row">
        <?php while ( have_rows('card_alt') ) : the_row(); ?>
            <div class="card-alt">
                <?php if (get_sub_field('image')) : ?>
                    <img src="<?php the_sub_field('image');?>">
                <?php endif;?>
                <?php if (get_sub_field('content')) : ?>
                    <div class="card-alt-content-wrapper">
                        <?php the_sub_field('content');?>
                    </div>
                <?php endif;?>
        </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
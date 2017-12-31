<?php if( have_rows('card_alt') ): ?>
    <section class="card-alt-section">
        <div class="card-alt-row">
            <?php if (get_sub_field('title')): ?>
                <?php the_sub_field('title'); ?>
            <?php endif; ?>
            <?php while ( have_rows('card_alt') ) : the_row(); ?>
                    <?php get_template_part('templates/components/card-alt'); ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
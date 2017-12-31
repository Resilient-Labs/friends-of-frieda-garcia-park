<?php
/**
* Template Name: Generic Page Layout
*/
?>

<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <section class="template generic layout">
        <?php while ( have_posts() ) : the_post(); // loop through the data ?>

            <?php if( have_rows('generic_layout') ): // check if the flexible content field name Front Layout has rows of data ?>
                <?php while ( have_rows('generic_layout') ) : the_row(); // loop through the rows of data ?>
                
                    <?php if( get_row_layout() == 'hero_banner_row_layout' ): // check if the row layout has information ?>
                        
                        <?php get_template_part('templates/layouts/hero-banner-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'generic_row_row_layout'): // check if the row layout has information ?>

                        <?php get_template_part('templates/layouts/generic-row-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'content_row_layout'): // check if the row layout has information ?>
                        
                        <?php get_template_part('templates/layouts/content-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'blockquote_row_layout'): // check if the row layout has information ?>

                        <?php get_template_part('templates/layouts/blockquote-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'card_alt_row_layout'): // check if the row layout has information ?>

                        <?php get_template_part('templates/layouts/card-alt-row-layout'); ?>

                    <?php endif; ?>
                <?php endwhile; ?>

            <?php else : // no layouts found ?>
                <?php get_template_part('templates/components/empty-state'); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </section>
<?php endif; ?>
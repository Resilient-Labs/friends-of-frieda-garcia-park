<?php
/**
* Template Name: Events Layout
*/
?>
<?php if ( have_posts() ) : // ?>
    <section class="template events layout">
        <?php while ( have_posts() ) : the_post(); // loop through the data ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
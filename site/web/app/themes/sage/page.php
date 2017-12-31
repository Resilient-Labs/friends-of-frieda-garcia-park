<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <section class="default layout template">
        <?php while (have_posts()) : the_post(); ?>
            <div class="default-row">
                <?php get_template_part('templates/page', 'header'); ?>
                <?php get_template_part('templates/content', 'page'); ?>
            </div>
        <?php endwhile; ?>
    </section>
<?php else : ?> 

<?php endif; ?>

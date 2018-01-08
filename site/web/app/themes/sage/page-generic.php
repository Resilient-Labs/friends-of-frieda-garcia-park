<?php
/**
* Template Name: Generic Page Template
*/
?>
<section class="page-generic template">
    <div class="generic-title">
        <h2><?php the_title(); ?></h2>
    </div>
    <?php get_template_part('templates/components/hero-banner'); ?>
    <?php get_template_part('templates/components/content-block'); ?>
    <?php get_template_part('templates/components/card-alt'); ?>
    <?php get_template_part('templates/components/generic-row'); ?>
</section>
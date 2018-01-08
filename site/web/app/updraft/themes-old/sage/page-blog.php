<?php
/**
* Template Name: Blog Template
*/
// Helpful links for pagination:
// http://callmenick.com/post/custom-wordpress-loop-with-pagination
// https://roots.io/upping-php-requirements-in-your-wordpress-themes-and-plugins/
?>

<section class="blog-page">
    <section class="blog-page-posts">
      <?php

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

  $custom_args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      'paged' => $paged
    );

  $custom_query = new WP_Query( $custom_args ); ?>

  <?php if ( $custom_query->have_posts() ) : ?>

    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <?php get_template_part('templates/content-blog', get_post_type() ); ?>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    <?php
      // if (function_exists(Roots\Sage\Extras\custom_pagination)) {
        Roots\Sage\Extras\custom_pagination($custom_query->max_num_pages,"",$paged);
      // }
    endif;
    ?>

  <?php wp_reset_postdata(); ?>
  </section>

<aside class="blog-sidebar">
  <strong>Stay Connected</strong>
  <?php get_template_part('templates/sidebar-social');?>
</aside>
</section>

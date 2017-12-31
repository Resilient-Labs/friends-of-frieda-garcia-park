<?php
/**
* Template Name: Blog Template
*/
// Helpful links for pagination:
// http://callmenick.com/post/custom-wordpress-loop-with-pagination
// https://roots.io/upping-php-requirements-in-your-wordpress-themes-and-plugins/
?>

<section class="layout template blog blog-page">
    <div class="blog-page-posts">
    <?php

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $custom_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $paged
        );

    $custom_query = new WP_Query( $custom_args ); ?>

    <?php if ( $custom_query->have_posts() ) : ?>

    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
        <?php get_template_part('templates/content-blog', get_post_type() ); ?>
        <section class="blog-post-row">
            <div class="img-wrap">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_field('blog-post-image');?>"/>
                </a>
            </div>
            <article <?php post_class(); ?>>
                <div class="content entry-summary clearfix">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
                <p class="byline author vcard"><?= __('By', 'sage'); ?>
                    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a>
                </p>

                <?php the_excerpt(); ?>
                </div>
            </article>
        </section>

    <?php endwhile; ?>
    
    <?php
      // if (function_exists(Roots\Sage\Extras\custom_pagination)) {
        Roots\Sage\Extras\custom_pagination($custom_query->max_num_pages,"",$paged); // Pagination
      // }
    endif;
    ?>

    <?php wp_reset_postdata(); ?>
    </div>

    <?php get_template_part('templates/components/social-sidebar');?>
</section>

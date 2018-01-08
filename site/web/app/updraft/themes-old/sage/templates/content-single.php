<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/components/hero-banner'); ?>
  <section class="single-blog-post-content">
    <article <?php post_class(); ?>>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <a class="btn" href="<?php echo home_url();?>/blog">
          <i class="fa fa-long-arrow-left"></i> Back to Blog
      </a>
    </article>
  </section>
<?php endwhile; ?>

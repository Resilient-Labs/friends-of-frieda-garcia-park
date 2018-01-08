<?php while (have_posts()) : the_post(); ?>
  <section class="hero banner">
    <h3><?php the_title(); ?></h3>
    <img src="<?php echo get_field('blog-post-image');?>"/>
  </section>
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
<?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>

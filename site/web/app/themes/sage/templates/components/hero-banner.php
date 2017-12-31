<?php if( have_rows('hero_banner') ): ?>
  <?php while ( have_rows('hero_banner') ) : the_row(); ?>
    <section class="hero-banner">
      <img src="<?php echo the_sub_field('image'); ?>"/>
      <div class="hero-banner-content-wrapper">
        <?php the_sub_field('content'); ?>
      </div>
    </section>
 <?php endwhile; ?>
<?php elseif ( get_field('blog-post-image') || has_post_thumbnail() ) : ?>
  <section class="hero-banner">
    <?php if ( has_post_thumbnail() ) : ?> 
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <div class="hero-banner-content-wrapper">
      <h3><?php the_title(); ?></h3>
    </div>
  </section>
<?php endif; ?>

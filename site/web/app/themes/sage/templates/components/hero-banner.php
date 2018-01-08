<?php if( have_rows('hero_banner') ): ?>
  <?php while ( have_rows('hero_banner') ) : the_row(); ?>
    <section class="hero-banner">
      <img src="<?php echo the_sub_field('banner_image'); ?>"/>
      <div class="hero-banner-content-wrapper">
        <h3><?php the_sub_field('banner_text'); ?></h3>
      </div>
    </section>
 <?php endwhile; ?>
<?php endif; ?>

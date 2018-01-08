<?php if( have_rows('generic_row') ): ?>
   <?php while ( have_rows('generic_row') ) : the_row(); ?>
     <section class="generic-row">
       <div class="generic-row-media-wrapper">
         <img src="<?php the_sub_field('generic_row_image');?>">
       </div>
       <div class="generic-row-content-wrapper">
         <h2><?php the_sub_field('generic_row_title'); ?></h2>
         <p><?php the_sub_field('generic_row_content'); ?></p>
         <?php if (get_sub_field('generic_row_cta')) : ?>
              <a class="cta button" href="<?php echo get_sub_field('generic_row_cta')['url']; ?>">
                <?php echo get_sub_field('generic_row_cta')['title']; ?>
                &nbsp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
          <?php endif; ?>
        </div>
      </section>
  <?php endwhile; ?>
<?php endif; ?>

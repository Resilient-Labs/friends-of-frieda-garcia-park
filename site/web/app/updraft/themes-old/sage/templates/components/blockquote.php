<?php if( have_rows('blockquote_section') ): ?>
   <?php while ( have_rows('blockquote_section') ) : the_row(); ?>
      <section class="container-about clearfix">
        <article>
          <?php echo get_sub_field('content'); ?>
        </article>
        <aside>
          <?php if (get_sub_field('image')) : ?>
            <img src="<?php echo get_sub_field('image'); ?>"/>
          <?php endif; ?>
          <?php if (get_sub_field('blockquote')) : ?>
            <blockquote>
              <span>&ldquo;</span><?php echo get_sub_field('blockquote'); ?>&rdquo;
            </blockquote>
          <?php endif; ?>
        </aside>
      </section>
  <?php endwhile; ?>
<?php endif; ?>
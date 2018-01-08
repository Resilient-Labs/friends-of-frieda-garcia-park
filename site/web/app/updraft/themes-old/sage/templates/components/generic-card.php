<?php if( have_rows('generic_card') ): ?>
   <?php while ( have_rows('generic_card') ) : the_row(); ?>
     <div class="generic-card">
       <figure>
         <img src="<?php the_sub_field('generic_card_image');?>">
       </figure>
       <div>
       <p><?php the_sub_field('generic_card_text');?></p>
     </div>
   </div>
  <?php endwhile; ?>
<?php endif; ?>

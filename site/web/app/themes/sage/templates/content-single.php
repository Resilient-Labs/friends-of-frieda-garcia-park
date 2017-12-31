<?php while (have_posts()) : the_post(); ?>
  <article class="layout content-single">
    <div class="content-single-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <div class="content-single-footer">
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
  </article>
<?php endwhile; ?>

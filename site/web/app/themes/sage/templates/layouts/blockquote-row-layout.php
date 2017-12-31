<?php if( have_rows('blockquote_section') ): ?>
    <?php while ( have_rows('blockquote_section') ) : the_row(); ?>
    <section class="blockquote-section">
        <div class="blockquote-row">
            <div class="blockquote-content-wrapper">
                <?php the_sub_field('content'); ?>
            </div>
            <?php get_template_part('templates/components/blockquote'); ?>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
<?php
/**
* Template Name: Gallery Layout
*/
?>

<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <section class="template gallery layout">
        <?php while ( have_posts() ) : the_post(); // loop through the data ?>
            <?php $images = get_field('gallery');

            if ( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>" caption="<?php echo $image['caption'] ?>" />
                <?php endforeach; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </section>
    <div id="gallery-modal" class="hidden">
        <div id="gallery-modal-row"></div>
    </div>
<?php endif; ?>
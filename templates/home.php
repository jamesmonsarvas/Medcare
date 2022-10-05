<?php /* Template Name: Home */ get_header();?>

<?php if( have_rows('hero') ): ?>
    <?php while( have_rows('hero') ): the_row(); 

        // Get sub field values.
        $image = get_sub_field('image');
        $link = get_sub_field('link');

        ?>
        <div id="hero">
            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
            <div class="content">
                <?php the_sub_field('caption'); ?>
                <a href="<?php echo esc_url( $link['url'] ); ?>"><?php echo esc_attr( $link['title'] ); ?></a>
            </div>
        </div>
        <style type="text/css">
            #hero {
                background-color: <?php the_sub_field('color'); ?>;
            }
        </style>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
<?php /* Template Name: Home */ get_header();?>

<?php if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); 

        // Get sub field values.
        $heading = get_sub_field( 'heading' );
        $description = get_sub_field( 'description' );
        $image = get_sub_field( 'image' );
        $link = get_sub_field( 'link' );
        
        ?>

        <!-- Banner -->
        <section class="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h1 class="banner__heading">
                            <?php echo $heading; ?>
                        </h1>
                        <div class="banner__desc">
                            <?php echo $description; ?>
                        </div>
                        <div class="banner__cta">
                            <a href="<?php echo $link['url']; ?>" class="solid-btn"><?php echo $link['title']; ?></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <figure class="banner__image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('healthcare') ): ?>
    <?php while( have_rows('healthcare') ): the_row(); 

        // Get sub field values.
        $heading = get_sub_field( 'heading' );
        $description = get_sub_field( 'description' );
        $image = get_sub_field( 'image' );
        $link = get_sub_field( 'link' );
        
        ?>

        <!-- Healthcare-->
        <section class="healthcare">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <figure class="healthcare__image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="healthcare__col-2--padding">
                            <h1 class="healthcare__heading">
                                <?php echo $heading; ?>
                            </h1>
                            <div class="healthcare__desc">
                                <?php echo $description; ?>
                            </div>
                            <div class="healthcare__cta">
                                <a href="<?php echo $link['url']; ?>" class="solid-btn"><?php echo $link['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>


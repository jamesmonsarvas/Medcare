<?php
/* Template Name: Home */

get_header();
?>

<?php if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); 

<<<<<<< Updated upstream
        // Get sub field values.
        $heading = get_sub_field( 'heading' );
        $description = get_sub_field( 'description' );
        $image = get_sub_field( 'image' );
        $link = get_sub_field( 'link' );
        
=======
    <?php while( have_rows('banner') ): the_row();  ?>

        <?php
            // Get sub field values.
            $heading = get_sub_field( 'heading' );
            $description = get_sub_field( 'description' );
            $image = get_sub_field( 'image' );
            $link = get_sub_field( 'link' );
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
        // Get sub field values.
        $heading = get_sub_field( 'heading' );
        $description = get_sub_field( 'description' );
        $image = get_sub_field( 'image' );
        $link = get_sub_field( 'link' );
        
=======
    <?php while( have_rows('healthcare') ): the_row(); ?>

        <?php
            // Get sub field values.
            $heading = get_sub_field( 'heading' );
            $description = get_sub_field( 'description' );
            $image = get_sub_field( 'image' );
            $link = get_sub_field( 'link' );
            $list = get_sub_field( 'list' );
>>>>>>> Stashed changes
        ?>

        <!-- Healthcare-->
        <section class="healthcare">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 image__column">
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

<<<<<<< Updated upstream
=======
<?php if( have_rows('plan') ): ?>

    <?php while( have_rows('plan') ): the_row(); ?>

        <?php $heading = get_sub_field('heading'); ?>

        <!-- Plan -->
        <section id="plans" class="plan">
            <div class="container">
                <div class="row justify-content-center align-items-center plan__section">
                    <div class="col-lg-12 col-md-12 col-sm-12 align-items-center">
                        <h2 class="plan__title">
                            <?php echo $heading; ?>
                        </h2>
                    </div>

                    <?php if( have_rows('repeater') ): ?>

                        <?php while( have_rows('repeater') ): the_row(); ?>

                        <?php 
                            $repeater_heading = get_sub_field('heading');
                            $repeater_price = get_sub_field('price');
                            $repeater_list = get_sub_field('list');
                            $repeater_link = get_sub_field('link');
                        ?>

                        <div class="col-lg-4 col-md-4 col-sm-4 plan__col">
                            <div class="plan__inner">
                                <div class="plan__box">
                                    <h3 class="plan__heading">
                                        <?php echo $repeater_heading; ?>
                                    </h3>

                                    <h2 class="plan__price">
                                        &#8369; <?php echo $repeater_price; ?>
                                    </h2>

                                    <?php echo $repeater_list; ?>

                                    <p>
                                        <a class="solid-btn btn-outline" href="<?php echo $repeater_link['url'] ?>"><?php echo $repeater_link['title'] ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<section id="booking" class="booking-form">
    <div class="container">

        <?php if( is_user_logged_in() ) : ?>

            <div class="row">
                <div class="col-12">
                    <div class="booking-form__amelia">
                        <h2>Book An Appointment</h2>
                        <?php echo do_shortcode( '[ameliabooking]' ); ?>
                    </div>
                </div>
            </div>

        <?php else : ?>

            <div class="row">
                <div class="col-12">
                    <div class="booking-form__signup">
                        <div class="booking-form__content">
                            <h2>You need an account to book an appointment</h2>
                            <p>
                                Click here to
                                <a href="<?php echo get_site_url() . '/my-account/' ?>">login</a>
                                or
                                <a href="<?php echo get_site_url() . '/sign-up/' ?>">register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>
</section>

>>>>>>> Stashed changes
<?php get_footer(); ?>


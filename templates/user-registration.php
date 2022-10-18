<?php
/**
 * Template Name: User Registration
 */

if ( is_user_logged_in() ) {
    wp_redirect( home_url() );
}

get_header();
?>

<section class="signup">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="signup__content">
                    <div class="site-branding">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/medcare-logo.svg' ?>" alt="Medcare">
                        </a>
                    </div><!-- .site-branding -->
                    <div class="signup__heading">
                        <h1>
                            Welcome to <span>MedCare</span>
                            Medical Center
                        </h1>
                        <a href="<?php echo home_url(); ?>" style="display: inline-block; margin-top: 50px;">Back to home</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="signup__form">
                    <h2>Sign Up</h2>
                    <?php echo do_shortcode( '[user_registration_form id="161"]' ); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
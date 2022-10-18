<?php /* Template Name: Home */ get_header();?>

<?php if( have_rows('banner') ): ?>

    <?php while( have_rows('banner') ): the_row();  ?>

        <?php
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
                            <a href="<?php echo $link['url']; ?>" class="solid-btn"><?php echo $link['title']; ?> <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        
                    <div class="banner__icon d-flex">

                        <?php if( have_rows('repeater') ): ?>

                                <?php while( have_rows('repeater') ): the_row(); ?>

                                    <?php
                                    $repeater_image = get_sub_field( 'image' );
                                    $repeater_title = get_sub_field( 'title' );
                                    ?>

                                    <div class="col-padding col-lg-4 col-md-4 col-sm-4 d-flex align-items-center">  
                                        <figure class="repeater__icons">
                                            <img src="<?php echo $repeater_image[ 'url' ]; ?>" alt="<?php echo $repeater_image[ 'alt' ] ?>">
                                        </figure>
                                        <h4 class="repeater__title"> <?php echo $repeater_title?> </h4>
                                    </div>

                            <?php endwhile; ?>

                        <?php endif; ?>

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

    <?php while( have_rows('healthcare') ): the_row(); ?>

        <?php
            // Get sub field values.
            $heading = get_sub_field( 'heading' );
            $description = get_sub_field( 'description' );
            $image = get_sub_field( 'image' );
            $link = get_sub_field( 'link' );
            $list = get_sub_field( 'list' );
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
                            <div class="healthcare__list">
                                <?php echo $list ?>;
                            </div>
                            <div class="healthcare__cta">
                                <a href="<?php echo $link['url']; ?>" class="solid-btn"><?php echo $link['title']; ?> <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('plan') ): ?>

    <?php while( have_rows('plan') ): the_row(); ?>

        <?php $heading = get_sub_field('heading'); ?>

        <!-- Plan -->
        <section class="plan">
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

<?php get_footer(); ?>


<?php /* Template Name: About */ get_header();?>

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

        <!-- Healthcare -->
        <section class="healthcare">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6 image__column">
                        <figure class="healthcare__image">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </figure>

                        <?php if( have_rows('group') ): ?>

                            <?php while( have_rows('group') ): the_row(); ?>

                            <?php 
                            $heading = get_sub_field( 'heading' );
                            ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 under-image">
                                <h3 class="container-heading">
                                    <?php echo $heading; ?>
                                </h3>

                                <?php if( have_rows('repeater') ): ?>

                                    <?php while( have_rows('repeater') ): the_row(); ?>

                                    <?php 
                                    $repeater_heading = get_sub_field('title');
                                    $repeater_description = get_sub_field('description');
                                    ?>

                                    <h4 class="heading-title">
                                        <?php echo $repeater_heading; ?>
                                    </h4>
                                    <?php echo $repeater_description; ?>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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

<?php if( have_rows('statement') ): ?>
    
    <?php while( have_rows('statement') ): the_row();  ?>

        <?php 
            $mission_heading = get_sub_field('mission');
            $mission_statement = get_sub_field('mission_statement');
            $vision_heading = get_sub_field('vision');
            $vision_statement = get_sub_field('vision_statement');
        ?>

        <!-- Statement -->
        <section class="statement">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="column-wrapper">
                            <h2 class="mission-heading">
                                <?php echo $mission_heading; ?>
                            </h2>
                            <div class="mission-statement">
                                <?php echo $mission_statement; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="column-wrapper">
                            <h2 class="vision-heading">
                                <?php echo $vision_heading; ?>
                            </h2>
                            <div class="vision-statement">
                                <?php echo $vision_statement; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>

<?php endif; ?>

<?php if( have_rows('values') ): ?>

    <?php while( have_rows('values') ): the_row(); ?>

        <?php 
            $values_heading = get_sub_field('heading');
            $values_description = get_sub_field('description');
            $values_image = get_sub_field('image');
        ?>
        
        <section class="values">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="column-wrapper">
                            <h2 class="values-title">
                                <?php echo $values_heading; ?>
                            </h2>
                            <div class="values-description">
                                <?php echo $values_description; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center">
                        <div class="column-wrapper">
                            <figure class="values-image">
                                <img src="<?php echo $values_image['url']; ?>" alt="<?php echo $values_image['alt']; ?>">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php if( have_rows('team') ): ?>

    <?php while( have_rows('team') ): the_row(); ?>

        <?php 
            $team_heading = get_sub_field('heading');
        ?>

        <section class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="column-wrapper">
                            <h2 class="team__heading">
                                <?php echo $team_heading; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php if( have_rows('repeater') ): ?>

                            <?php while ( have_rows('repeater') ): the_row(); ?>

                                <?php 
                                    $repeater_image = get_sub_field('image');
                                    $repeater_name = get_sub_field('name');
                                    $repeater_title = get_sub_field('title');
                                ?>

                                <div class="col-lg-3 col-md-3 col-sm-3 d-flex justify-content-center">
                                    <div class="column-wrapper">
                                        <figure class="team__image">
                                            <img src="<?php echo $repeater_image['url']; ?>" alt="<?php echo $repeater_url['alt']; ?>">
                                        </figure>
                                        <h3 class="team__name">
                                            <?php echo $repeater_name; ?>
                                        </h3>
                                        <h4 class="team__title">
                                            <?php echo $repeater_title; ?>
                                        </h4>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>


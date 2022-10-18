<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medcare
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medcare' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div>
			
				<div class="col-lg-7 col-md-7 col-sm-">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-3">
					<nav class="secondary-nav">
						<ul>
							<?php if( is_user_logged_in() ) : ?>
								<li>
									<button class="toggle-profile">Account <i class="fas fa-angle-down"></i></button>
									<ul>
										<li><a href="<?php echo get_site_url() . '/client' ?>">Dashboard</a></li>
										<li><a href="<?php echo get_site_url() . '/my-account/' ?>">Profile</a></li>
										<li><a href="<?php echo get_site_url() . '/my-account/user-logout' ?>">Logout</a></li>
									</ul>
								</li>
							<?php else : ?>
								<li><a href="<?php echo get_site_url() . '/my-account/' ?>">Log In</a></li>
								<li><a href="<?php echo get_site_url() . '/sign-up/' ?>" class="solid-btn">Sign Up</a></li>
							<?php endif; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

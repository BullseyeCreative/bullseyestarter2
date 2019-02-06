<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
 	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class('site-wrapper'); ?>>
	<noscript>
		<style>
			#masthead.loading {
				opacity: 1;
			}
		</style>
	</noscript>
	<div class="off-canvas-wrapper">

	<?php get_template_part('template-parts/menu-off-canvas'); ?>

	<div id="page" class="site off-canvas-content" data-off-canvas-content id="offCanvas">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bc' ); ?></a>

		<header id="masthead" class="site-header">

			<?php
				// Uncomment for mobile dropdown navigation
				get_template_part('template-parts/menu-topbar');
			?>

			<?php if( is_front_page() && get_theme_mod('home_header_image') ) : ?>
				<div class="header-image-outer-wrap">
					<div class="image-overlay">
					</div>
					<div class="header-image-wrap show-for-small-only">
						<div class="img-bg">
							<?php echo bc_header_image_small(); ?>
						</div>
					</div>
					<div class="header-image-wrap hide-for-small-only">
						<div class="img-bg">
							<?php echo bc_header_image_large(); ?>
						</div>
					</div>
					<header class="front-entry-header">
						<div class="row">
							<div class="columns small-12 medium-10 medium-offset-1">
								<?php if (bc_has_headline()): ?>
									<h1 class="entry-title"><?php bc_headline(); ?></h1>
								<?php else: ?>
									<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</header><!-- .entry-header -->
				</div>
			<?php endif; ?>


		</header><!-- #masthead -->


		<div class="site-content-wrap">
<div id="content" class="site-content row">

<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Susty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php susty_wp_post_thumbnail(); ?>

	<div>
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'susty' ),
			'after'  => '</div>',
		) );
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

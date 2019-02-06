<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */

?>
</div><!-- .site-conent-wrap .row-->
</div><!-- #content .row-->

	<footer id="colophon" class="site-footer">
		<div class="row">
			<div class="site-info small-12 large-6 columns">
				<ul class="menu footer-menu copyright-menu">
					<li>&copy <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</li>
				</ul>
				<?php get_sidebar(); ?>
			</div>
			<div class="site-info small-12 large-6 columns">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu' => 'Footer Menu',
					'container' => false, // remove nav container
					'container_class' => '', // class of container
					'menu_class' => 'footer-menu menu left', // adding custom nav class
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'before' => '', // before each link <a>
					'after' => '', // after each link </a>
					'link_before' => '', // before each link text
					'link_after' => '', // after each link text
					'depth' => 5, // limit the depth of the nav
					'fallback_cb' => false, // fallback function (see below)
				) ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The sidebar containing the main widget area. To use uncomment the widget area registration function in functions.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_WP:_By_Bullseye_Creative
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="copyright-widget-area" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

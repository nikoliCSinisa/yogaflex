<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogaflex
 */

if ( ! is_active_sidebar( 'yogabar' ) ) {
	return;
}
?>

<div class="col-lg-4 sidebar-widgets">
	<div class="widget-wrap">
		<?php dynamic_sidebar( 'yogabar' ); ?>
	</div><!-- .widget-wrap -->
</div> <!-- .sidebar-widgets -->


		
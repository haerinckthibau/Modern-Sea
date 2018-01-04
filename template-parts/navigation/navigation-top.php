<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Modern Sea
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'modernsea' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo modernsea_get_svg( array( 'icon' => 'bars' ) );
		echo modernsea_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'modernsea' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( modernsea_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo modernsea_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'modernsea' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->

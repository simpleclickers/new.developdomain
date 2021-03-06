<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 1 or 2
 */

?>

	<footer class="site-footer">

		<nav id="site-footer-navigation" class="footer-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Footer Navigation', 'oneortwo-ltd' ); ?>">
			<?php
			wp_nav_menu(
				[
					'fallback_cb'    => false,
					'theme_location' => 'footer',
					'menu_id'        => 'footer-menu',
					'menu_class'     => 'menu container',
					'container'      => false,
					'depth'          => 1,
				]
			);
			?>
		</nav><!-- #site-navigation-->

		<div class="container site-info">
			<?php wds_acme_display_copyright_text(); ?>
			<?php wds_acme_display_social_network_links(); ?>
		</div><!-- .site-info -->

	</footer><!-- .site-footer container-->

	<?php wds_acme_display_mobile_menu(); ?>
	<?php wp_footer(); ?>

</body>

</html>

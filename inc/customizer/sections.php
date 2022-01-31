<?php
/**
 * Customizer sections.
 *
 * @package 1 or 2
 */

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function wds_acme_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'wds_acme_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'oneortwo-ltd' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'wds_acme_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'oneortwo-ltd' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'oneortwo-ltd' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'wds_acme_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'oneortwo-ltd' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'wds_acme_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'oneortwo-ltd' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', 'wds_acme_customize_sections' );

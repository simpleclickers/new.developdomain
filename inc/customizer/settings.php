<?php
/**
 * Customizer settings.
 *
 * @package 1 or 2
 */

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function wds_acme_customize_additional_scripts( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'wds_acme_header_scripts',
		[
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		'wds_acme_header_scripts',
		[
			'label'       => esc_attr__( 'Header Scripts', 'oneortwo-ltd' ),
			'description' => esc_attr__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'oneortwo-ltd' ),
			'section'     => 'wds_acme_additional_scripts_section',
			'type'        => 'textarea',
		]
	);

	// Register a setting.
	$wp_customize->add_setting(
		'wds_acme_footer_scripts',
		[
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		'wds_acme_footer_scripts',
		[
			'label'       => esc_attr__( 'Footer Scripts', 'oneortwo-ltd' ),
			'description' => esc_attr__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'oneortwo-ltd' ),
			'section'     => 'wds_acme_additional_scripts_section',
			'type'        => 'textarea',
		]
	);
}

add_action( 'customize_register', 'wds_acme_customize_additional_scripts' );

/**
 * Register a social icons setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function wds_acme_customize_social_icons( $wp_customize ) {
	// Create an array of our social links for ease of setup.
	$social_networks = [
		'facebook',
		'instagram',
		'twitter',
		'linkedin',
	];

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'wds_acme_' . $network . '_link',
			[
				'default'           => '',
				'sanitize_callback' => 'esc_url',
			]
		);

		// Create the setting field.
		$wp_customize->add_control(
			'wds_acme_' . $network . '_link',
			[
				'label'   => /* translators: the social network name. */ sprintf( esc_attr__( '%s URL', 'oneortwo-ltd' ), ucwords( $network ) ),
				'section' => 'wds_acme_social_links_section',
				'type'    => 'text',
			]
		);
	}
}

add_action( 'customize_register', 'wds_acme_customize_social_icons' );

/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function wds_acme_customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'wds_acme_copyright_text',
		[
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		]
	);

	// Create the setting field.
	$wp_customize->add_control(
		new Text_Editor_Custom_Control(
			$wp_customize,
			'wds_acme_copyright_text',
			[
				'label'       => esc_attr__( 'Copyright Text', 'oneortwo-ltd' ),
				'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'oneortwo-ltd' ),
				'section'     => 'wds_acme_footer_section',
				'type'        => 'textarea',
			]
		)
	);
}

add_action( 'customize_register', 'wds_acme_customize_copyright_text' );

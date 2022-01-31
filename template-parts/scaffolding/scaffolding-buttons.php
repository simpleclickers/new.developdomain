<?php
/**
 * The template used for displaying Buttons in the scaffolding library.
 *
 * @package 1 or 2
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Buttons', 'oneortwo-ltd' ); ?></h2>
	<?php
		// Button.
		wds_acme_display_scaffolding_section(
			[
				'title'       => 'Button',
				'description' => 'Display a button.',
				'usage'       => '<button class="button" href="#">Click Me</button>',
				'output'      => '<button class="button">Click Me</button>',
			]
		);
		?>
</section>

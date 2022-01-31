<?php
/**
 * The template used for displaying colors & fonts in the scaffolding library.
 *
 * @package 1 or 2
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Globals', 'oneortwo-ltd' ); ?></h2>

	<?php
		// Theme colors.
		wds_acme_display_global_scaffolding_section(
			[
				'global_type' => 'colors',
				'title'       => 'Colors',
				'arguments'   => [
					'Blue'         => '#21759b',
					'Light Yellow' => '#fff9c0',
					'Black'        => '#000000',
					'White'        => '#FFFFFF',
					'Red'          => '#f00000',
				],
			]
		);

		// Theme fonts.
		wds_acme_display_global_scaffolding_section(
			[
				'global_type' => 'fonts',
				'title'       => 'Fonts',
				'arguments'   => [
					'Sans'  => '"Open Sans", sans-serif',
					'Serif' => 'Roboto, Georgia, Times, "Times New Roman", serif',
					'Code'  => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace',
					'Pre'   => '"Courier 10 Pitch", Courier, monospace',
				],
			]
		);
		?>
</section>

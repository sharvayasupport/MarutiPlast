<?php
global $goldy_mex_themetype;
// Our Sponsors Section
	new \Kirki\Section(
		'our_sponsors_section',
		[
			'title'       => esc_html__( 'Our Sponsors', 'goldy-mex' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 160,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_mex_our_sponsors_main_title',
			'label'    => esc_html__( 'Our Sponsors Title', 'goldy-mex' ),
			'section'  => 'our_sponsors_section',
			'default'  => esc_html__( 'Our Sponsors', 'goldy-mex' ),
			'priority' => 10,
			'partial_refresh'    => [
				'goldy_mex_our_sponsors_main_title' => [
					'selector'        => '.our_sponsors_section',
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_mex_our_sponsors_section_content',
			'label'    => esc_html__( 'Our Sponsors Items Content', 'goldy-mex' ),
			'row_label' => array( 'value' => 'Sponsors item' ),
			'section'  => 'our_sponsors_section',
			'priority' => 10,
			'default'  => [
				[
					'image'    => '',
				],
				[
					'image'    => '',
				],
				[
					'image'    => '',
				],
			],
			'fields'   => [
				'image'    => [
					'type'		  => 'image',
					'label'       => esc_html__( 'Image:', 'goldy-mex' ),
				],
			],
			'choices' => [
				'limit' => ($goldy_mex_themetype['themtypeis']=='normal') ? 5 : 100,
			],
			'partial_refresh'    => [
				'goldy_mex_our_sponsors_main_title' => [
					'selector'        => '.our_sponsors_section',
					'render_callback' => function() {
					    return get_theme_mod('goldy_mex_our_sponsors_section_content');
					}
				],
			],
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_text_color',
			'label'       => __( 'Text Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#000000',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_bg_color',
			'label'       => __( 'Background Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#f0f9fb',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section',
					'property' => 'background',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_arrow_color',
			'label'       => __( 'Arrow Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#ffffff',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section .our_sponsors_contain .owl-nav button',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_arrow_bg_color',
			'label'       => __( 'Arrow Background Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#273641',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section .our_sponsors_contain .owl-nav button',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_arrow_text_hover_color',
			'label'       => __( 'Arrow Text Hover Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#ffffff',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section .our_sponsors_contain button.owl-prev:hover,
									.our_sponsors_section .our_sponsors_contain button.owl-next:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'our_sponsors_arrow_bghover_color',
			'label'       => __( 'Arrow Background Hover Color', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'default'     => '#4f2d4f',
			'priority'    => 160,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.our_sponsors_section .our_sponsors_contain button.owl-prev:hover,
									.our_sponsors_section .our_sponsors_contain button.owl-next:hover',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_mex_our_sponsors_slider_autoplay',
			'label'       => esc_html__( 'Autoplay', 'goldy-mex' ),
			'section'     => 'our_sponsors_section',
			'priority' 	  => 160,
			'default'     => 'true',
			'placeholder' => esc_html__( 'Choose an option', 'goldy-mex' ),
			'choices'     => [
				'true' => esc_html__( 'True', 'goldy-mex' ),
				'false' => esc_html__( 'False', 'goldy-mex' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'goldy_mex_our_sponsors_slider_autoplay_speed',
			'label'    => esc_html__( 'AutoplaySpeed', 'goldy-mex' ),
			'section'  => 'our_sponsors_section',
			'default'  => esc_html__( '1000', 'goldy-mex' ),
			'priority' => 160,
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'goldy_mex_our_sponsors_autoplay_timeout',
			'label'    => esc_html__( 'AutoplayTimeout', 'goldy-mex' ),
			'section'  => 'our_sponsors_section',
			'default'  => esc_html__( '5000', 'goldy-mex' ),
			'priority' => 160,
		]
	);
?>
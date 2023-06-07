<?php 

	$welding_work_custom_style = '';

	// Logo Size
	$welding_work_logo_top_padding = get_theme_mod('welding_work_logo_top_padding');
	$welding_work_logo_bottom_padding = get_theme_mod('welding_work_logo_bottom_padding');
	$welding_work_logo_left_padding = get_theme_mod('welding_work_logo_left_padding');
	$welding_work_logo_right_padding = get_theme_mod('welding_work_logo_right_padding');

	if( $welding_work_logo_top_padding != '' || $welding_work_logo_bottom_padding != '' || $welding_work_logo_left_padding != '' || $welding_work_logo_right_padding != ''){
		$welding_work_custom_style .=' .logo {';
			$welding_work_custom_style .=' padding-top: '.esc_attr($welding_work_logo_top_padding).'px; padding-bottom: '.esc_attr($welding_work_logo_bottom_padding).'px; padding-left: '.esc_attr($welding_work_logo_left_padding).'px; padding-right: '.esc_attr($welding_work_logo_right_padding).'px;';
		$welding_work_custom_style .=' }';
	}

	// Header Image
	$header_image_url = welding_work_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$welding_work_custom_style .=' #inner-pages-header {';
			$welding_work_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;';
		$welding_work_custom_style .=' }';
	} else {
		$welding_work_custom_style .=' #inner-pages-header {';
			$welding_work_custom_style .=' background: radial-gradient(circle at center, rgba(0,0,0,0) 0%, #000000 100%); ';
		$welding_work_custom_style .=' }';
	}

	$welding_work_slider_hide_show = get_theme_mod('welding_work_slider_hide_show',false);
	if( $welding_work_slider_hide_show == true){
		$welding_work_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$welding_work_custom_style .=' display:none;';
		$welding_work_custom_style .=' }';
	}
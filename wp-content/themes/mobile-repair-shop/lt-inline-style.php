<?php 

	$mobile_repair_shop_custom_css = '';

	// Site Title Color
	$mobile_repair_shop_site_title_color = get_theme_mod('mobile_repair_shop_site_title_color');
	$mobile_repair_shop_custom_css .= '.logo h1 a, .logo p.site-title a {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_site_title_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	// Site Tagline Color
	$mobile_repair_shop_site_tagline_color = get_theme_mod('mobile_repair_shop_site_tagline_color');
	$mobile_repair_shop_custom_css .= '.logo p.site-description {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_site_tagline_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	// Slider
	$mobile_repair_shop_slider_hide_show = get_theme_mod('mobile_repair_shop_slider_hide_show',false);
	if($mobile_repair_shop_slider_hide_show == true){
		$mobile_repair_shop_custom_css .= '.page-template-home-custom .inner-head {';
			$mobile_repair_shop_custom_css .= 'display: none;';
		$mobile_repair_shop_custom_css .= '}';
	}

	// Menus Color
	$mobile_repair_shop_menu_color = get_theme_mod('mobile_repair_shop_menu_color');
	$mobile_repair_shop_custom_css .= '.primary-navigation ul li a {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_menu_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_menu_hover_color = get_theme_mod('mobile_repair_shop_menu_hover_color');
	$mobile_repair_shop_custom_css .= '.primary-navigation ul li a:hover {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_menu_hover_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_submenu_color = get_theme_mod('mobile_repair_shop_submenu_color');
	$mobile_repair_shop_custom_css .= '.primary-navigation ul.sub-menu li a {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_submenu_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_submenu_hover_color = get_theme_mod('mobile_repair_shop_submenu_hover_color');
	$mobile_repair_shop_custom_css .= '.primary-navigation ul.sub-menu li a:hover {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_submenu_hover_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	//Topbar color
	$mobile_repair_shop_topbar_text_color = get_theme_mod('mobile_repair_shop_topbar_text_color');
	$mobile_repair_shop_custom_css .= '.top-header p, .top-header a{';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_topbar_text_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_social_icons_color = get_theme_mod('mobile_repair_shop_social_icons_color');
	$mobile_repair_shop_custom_css .= '.top-header p i {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_social_icons_color) . ';';
	$mobile_repair_shop_custom_css .= '}';
	
	$mobile_repair_shop_timing_color = get_theme_mod('mobile_repair_shop_timing_color');
	$mobile_repair_shop_custom_css .= '.contact-detail p {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_timing_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	// Slider Color
	$mobile_repair_shop_slider_title_color = get_theme_mod('mobile_repair_shop_slider_title_color');
	$mobile_repair_shop_custom_css .= '#slider .inner_carousel h1 {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_slider_title_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_slider_text_color = get_theme_mod('mobile_repair_shop_slider_text_color');
	$mobile_repair_shop_custom_css .= '#slider .inner_carousel p {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_slider_text_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_slider_btn_text_color = get_theme_mod('mobile_repair_shop_slider_btn_text_color');
	$mobile_repair_shop_slider_btn_border_color = get_theme_mod('mobile_repair_shop_slider_btn_border_color');
	$mobile_repair_shop_custom_css .= '#slider .read-btn a {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_slider_btn_text_color) . '; border-color: ' . esc_attr($mobile_repair_shop_slider_btn_border_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_slider_btn_text_hover_color = get_theme_mod('mobile_repair_shop_slider_btn_text_hover_color');
	$mobile_repair_shop_slider_btnbg_hover_color = get_theme_mod('mobile_repair_shop_slider_btnbg_hover_color');
	$mobile_repair_shop_slider_btn_border_hover_color = get_theme_mod('mobile_repair_shop_slider_btn_border_hover_color');
	$mobile_repair_shop_custom_css .= '#slider .read-btn a:hover {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_slider_btn_text_hover_color) . '; border-color: ' . esc_attr($mobile_repair_shop_slider_btn_border_hover_color) . '; background-color: ' . esc_attr($mobile_repair_shop_slider_btnbg_hover_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_slider_npbtn_color = get_theme_mod('mobile_repair_shop_slider_npbtn_color');
	$mobile_repair_shop_slider_npbtnbg_color = get_theme_mod('mobile_repair_shop_slider_npbtnbg_color');
	$mobile_repair_shop_custom_css .= '#slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_slider_npbtn_color) . '; background-color: ' . esc_attr($mobile_repair_shop_slider_npbtnbg_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	// Product color options
	$mobile_repair_shop_product_title_color = get_theme_mod('mobile_repair_shop_product_title_color');
	$mobile_repair_shop_custom_css .= '.woocommerce ul.products li.product .woocommerce-loop-product__title {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_product_title_color) . ' !important;';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_product_price_color = get_theme_mod('mobile_repair_shop_product_price_color');
	$mobile_repair_shop_custom_css .= '.woocommerce ul.products li.product .price {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_product_price_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_product_btn_color = get_theme_mod('mobile_repair_shop_product_btn_color');
	$mobile_repair_shop_product_btn_bg_color = get_theme_mod('mobile_repair_shop_product_btn_bg_color');
	$mobile_repair_shop_custom_css .= '.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, a.added_to_cart.wc-forward {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_product_btn_color) . '; background-color: ' . esc_attr($mobile_repair_shop_product_btn_bg_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_product_btn_hover_color = get_theme_mod('mobile_repair_shop_product_btn_hover_color');
	$mobile_repair_shop_product_sale_color = get_theme_mod('mobile_repair_shop_product_sale_color');
	$mobile_repair_shop_custom_css .= '.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, a.added_to_cart.wc-forward:hover {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_product_sale_color) . '; background-color: ' . esc_attr($mobile_repair_shop_product_btn_hover_color) . ';';
	$mobile_repair_shop_custom_css .= '}';

	$mobile_repair_shop_product_sale_bg_color = get_theme_mod('mobile_repair_shop_product_sale_bg_color');
	$mobile_repair_shop_product_sale_color = get_theme_mod('mobile_repair_shop_product_sale_color');
	$mobile_repair_shop_custom_css .= '.woocommerce span.onsale {';
		$mobile_repair_shop_custom_css .= 'color: ' . esc_attr($mobile_repair_shop_product_sale_color) . '; background-color: ' . esc_attr($mobile_repair_shop_product_sale_bg_color) . ';';
	$mobile_repair_shop_custom_css .= '}';
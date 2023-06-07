<?php
/**
 * Display Header.
 * @package Mobile Repair Shop
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'mobile-repair-shop' ); ?></a>
		<div id="header">
			<div class="container position-relative">
				<div class="header-box">
					<div class="row">
						<div class="col-lg-3 col-md-4 align-self-center pe-md-0">
							<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
						</div>
						<div class="col-lg-9 col-md-8 align-self-end">
							<?php  get_template_part( 'template-parts/header/top', 'bar' ); ?>
							<div class="menu-section text-lg-center">
								<div class="<?php if( get_theme_mod( 'mobile_repair_shop_sticky_header', false) != '') { ?>sticky-menubox<?php } else { ?>close-sticky <?php } ?>">
						    		<?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(is_singular()) {?>
		<div class="inner-head">
			<img src="<?php if ( get_header_image() ){ echo esc_url(get_header_image()); } else { echo esc_url(get_template_directory_uri()) ?>/assets/images/slider-bg.png<?php }?>" class="head-img" alt="<?php echo esc_html('Header Background Image', 'mobile-repair-shop'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<div class="header-content">
							<h1><?php single_post_title(); ?></h1>
							<div class="lt-breadcrumbs">
								<?php mobile_repair_shop_breadcrumb(); ?>
							</div>
						</div>
					</div>
					<?php if(has_post_thumbnail()){?>
						<div class="col-lg-6 col-md-6 align-self-end">
							<div class="header-image">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
					<?php }?>
				</div>
				
			</div>
		</div>
	<?php }?>
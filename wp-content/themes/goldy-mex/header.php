<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldy-mex
 */


global $goldy_mex_default, $goldy_mex_themetype;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<?php

if($goldy_mex_themetype['pluginactive']=='yes'){
	$body_class_added='slivery_active';
}else{
	$body_class_added='slivery_notactive';
}

?>
<body <?php body_class($body_class_added); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goldy-mex' ); ?></a>
			<header id="masthead" class="site-header <?php echo esc_attr(get_theme_mod( 'goldy_mex_header_layout'));?>">	
				<?php if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {?>
				<div class="top_bar_info">
					<?php
						goldy_mex_social_section();
					?>
				</div>
				<?php } ?>
				<div class="main_site_header">
					<div class="header_info">

						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
							<div class="header_logo">
								<?php
								if ( is_front_page() && is_home() ) :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								else :
									?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
								endif;
								$sharp_tian_description = get_bloginfo( 'description', 'display' );
								if ( $sharp_tian_description || is_customize_preview() ) :
									?>
									<p class="site-description"><?php echo esc_html($sharp_tian_description); ?></p>
								<?php endif; ?>
							</div>
						</div><!-- .site-branding -->
						<div class="menu_call_button">
							<div class="call_button_info">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" id="navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
										<i class="fa fa-bars"></i>
									</button>
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>							
								</nav>
								<div class="mobile_menu main-navigation" id="mobile_primary">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
									<button class="menu-toggle" id="mobilepop"  aria-expanded="false">
										<i class="fa fa-close"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header><!-- #masthead -->	
			
		<?php if($goldy_mex_themetype['pluginactive']=='yes'){?>
	<?php echo esc_attr(goldy_mex_breadcrumb_sections());}
	
	if ( is_front_page() ) {

			if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {
				?>
				<div class="theme_section_info">
					<?php 
						$goldy_mex_diseble = get_theme_mod( 'goldy_mex_diseble' );
						$goldy_mex_diseble_array =  explode(",",$goldy_mex_diseble);

						$glodly_ordring = get_theme_mod( 'globalddd_ordering' );
						$glodly_sortable =  explode(",",$glodly_ordring);

						$orderarr = array('goldy_mex_featuredimage_slider','goldy_mex_our_portfolio_section','goldy_mex_widget_section','goldy_mex_about_section','goldy_mex_featured_section','goldy_mex_appointment_section','goldy_mex_our_team_section','goldy_mex_our_testimonial_section','goldy_mex_our_sponsors_section','goldy_mex_services_section');
						$orderarr = apply_filters('goldy_mex_order_settings', $orderarr);
						$global_ordering_array = get_theme_mod( 'global_ordering',$orderarr );
						?>
						<?php
						if(!empty($glodly_ordring)){
							foreach ($glodly_sortable as $glodly_sortables => $glodly_sortable_value) { 
								if(!in_array( $glodly_sortable_value, $goldy_mex_diseble_array)){
									call_user_func($glodly_sortable_value);
								}		
							}
						}elseif(!empty($global_ordering_array)){
							foreach ($global_ordering_array as $global_ordering_arraydd) { 
								if(!in_array( $global_ordering_arraydd, $goldy_mex_diseble_array)){
									call_user_func($global_ordering_arraydd);
								}		
							}
						}
							
					?>
				</div>
				<?php
		}else { ?>
			<div class="theme_section_info">
				<?php 
					$goldy_mex_diseble = get_theme_mod( 'goldy_mex_diseble' );
					$goldy_mex_diseble_array =  explode(",",$goldy_mex_diseble);

					$glodly_ordring = get_theme_mod( 'globalddd_ordering' );
					$glodly_sortable =  explode(",",$glodly_ordring);

					$orderarr = array('goldy_mex_featuredimage_slider','goldy_mex_featured_section','goldy_mex_our_sponsors_section');
					
					$orderarr = apply_filters('goldy_mex_order_settings', $orderarr);
					$global_ordering_array = get_theme_mod( 'global_ordering',$orderarr );
					?>
					<?php
						if(!empty($glodly_ordring)){
							foreach ($glodly_sortable as $glodly_sortables => $glodly_sortable_value) { 
								if(!in_array( $glodly_sortable_value, $goldy_mex_diseble_array)){
									call_user_func($glodly_sortable_value);
								}		
							}
						}elseif(!empty($global_ordering_array)){
							foreach ($global_ordering_array as $global_ordering_arraydd) { 
								if(!in_array( $global_ordering_arraydd, $goldy_mex_diseble_array)){
									call_user_func($global_ordering_arraydd);
								}		
							}
						}
					?>
			</div>
			<?php
		}
	}

?>
	<div class="goldy_mex_container_data">
		<?php
		if(get_post_meta(get_the_ID(),'sidebar_select',true)){
			?>
			<div class="goldy_mex_container_info <?php echo esc_attr(get_post_meta(get_the_ID(),'sidebar_select',true));?> <?php echo esc_attr(get_theme_mod( 'goldy_mex_container_blog_layout','grid_view'));?> <?php echo esc_attr(get_theme_mod( 'goldy_mex_container_page_layout','content_boxed'));?>">
				<?php
		}else{
		?>
		<div class="goldy_mex_container_info <?php echo esc_attr(get_theme_mod( 'sidebar_post_layout'.get_post_type(),'right_sidebar'));?> <?php echo esc_attr(get_theme_mod( 'goldy_mex_container_blog_layout','grid_view'));?> <?php echo esc_attr(get_theme_mod( 'goldy_mex_container_page_layout','content_boxed'));?>">
<?php }
<?php
/**
 * The header for our theme
 *
 * @subpackage Welding Work
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'welding-work' ); ?></a>

<div id="header">
	<div class="main-header">
		<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1438 121.737">
			<path id="Path_8" data-name="Path 8" d="M-24.014,0H1386.014C1393.738,0,1400,6.879,1400,15.365v91.007c0,8.486-6.262,15.365-13.986,15.365H-4.648c-7.724,0-13.986-6.879-13.986-15.365L-38,15.365C-38,6.879-31.738,0-24.014,0Z" transform="translate(38)" fill="#fff"/>
			<path id="Rectangle_1" data-name="Rectangle 1" d="M131.765,874.52l207.673.106c41.862,0,43.313-62.884,115.269-59.784H1500v78.592H120Z" transform="translate(-62 -771.731)" fill="#222a35" fill-rule="evenodd"/>
		</svg>
		<div class="container">
			
			<div class="header-inn">
			<div class="row mx-0">
				<div class="col-lg-3 col-md-12 align-self-center">
					<div class="logo text-center">
						<?php if ( has_custom_logo() ) : ?>
		            		<?php the_custom_logo(); ?>
			            <?php endif; ?>
		             	<?php if (get_theme_mod('welding_work_show_site_title',true)) {?>
		          			<?php $blog_info = get_bloginfo( 'name' ); ?>
			                <?php if ( ! empty( $blog_info ) ) : ?>
			                  	<?php if ( is_front_page() && is_home() ) : ?>
			                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                  	<?php else : ?>
		                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                  		<?php endif; ?>
			                <?php endif; ?>
			            <?php }?>
			            <?php if (get_theme_mod('welding_work_show_tagline',true)) {?>
			                <?php $description = get_bloginfo( 'description', 'display' );
		                  	if ( $description || is_customize_preview() ) : ?>
			                  	<p class="site-description"><?php echo esc_html($description); ?></p>
		              		<?php endif; ?>
		          		<?php }?>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-sm-12 align-self-center">

					<div class="topheader ">
						<div class="row">
							<div class="col-lg-8 col-md-12">
							<?php if(get_theme_mod('welding_work_topbar_text') != ''){ ?>
								<p class="topbar-text">
									<?php echo esc_html(get_theme_mod('welding_work_topbar_text')); ?>  	
								</p>
							<?php }?>
							</div>
							<div class="col-lg-4 col-md-12">
							<?php if(get_theme_mod('welding_work_facebook_url') != '' || get_theme_mod('welding_work_twitter_url') != '' || get_theme_mod('welding_work_instagram_url') != '' || get_theme_mod('welding_work_pinterest_url') != ''){ ?>
								<div class="social-icons text-center">
									<?php if(get_theme_mod('welding_work_facebook_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('welding_work_facebook_url')) ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'welding-work'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('welding_work_twitter_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('welding_work_twitter_url')) ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'welding-work'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('welding_work_instagram_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('welding_work_instagram_url')) ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'welding-work'); ?></span></a>
									<?php }?>
									<?php if(get_theme_mod('welding_work_pinterest_url') != ''){?>
										<a href="<?php echo esc_url(get_theme_mod('welding_work_pinterest_url')) ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'welding-work'); ?></span></a>
									<?php }?>
								</div>
							<?php }?>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="bottomheader">
						<div class="row">
							<div class="col-lg-9 col-md-9">
								<div class="menu-bar">
									<div class="toggle-menu responsive-menu text-md-left text-center">
										<?php if(has_nav_menu('primary')){ ?>
											<button onclick="welding_work_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','welding-work'); ?></span></button>
										<?php }?>
									</div>
									<div id="sidelong-menu" class="nav sidenav">
										<nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'welding-work' ); ?>">
											<?php if(has_nav_menu('primary')){
												wp_nav_menu( array( 
													'theme_location' => 'primary',
													'container_class' => 'main-menu-navigation clearfix' ,
													'menu_class' => 'clearfix',
													'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
													'fallback_cb' => 'wp_page_menu',
												) ); 
											} ?>
											<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="welding_work_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','welding-work'); ?></span></a>
										</nav>
										
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3">
								<div class="mob-y">
									<div class="contact-btn">
										<a href="<?php echo esc_url(get_theme_mod('welding_work_contact_btn_url')); ?>"><?php echo esc_html(get_theme_mod('welding_work_contact_btn_text')); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<?php if(is_singular()) {?>
	<div id="inner-pages-header">
		<div class="header-overlay"></div>
	    <div class="header-content">
		    <div class="container"> 
		      	<h1><?php single_post_title(); ?></h1><br>
		      	<div class="theme-breadcrumb mt-2">
					<?php welding_work_breadcrumb();?>
				</div>
		    </div>
		</div>
	</div>
<?php } ?>
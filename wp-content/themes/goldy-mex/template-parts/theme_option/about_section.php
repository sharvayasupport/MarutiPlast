<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
	?>
		<div class="about_section_info">
			<div class="about_data">
				<div class="about_section_container">
						<div class="about_featured_image scroll-element js-scroll slide-left">
							<div class="about_pic">
								<!-- <div class="about-deep-pink-floating-img about-deep-pink-circle-xl"> </div> -->
								<?php if(get_theme_mod( 'about_section_image')){ ?>
									<img src="<?php echo esc_attr(get_theme_mod( 'about_section_image')); ?>" alt="The Last of us">

								<?php }else{
									?>
									<img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us">
									<?php
								} ?>
							</div>
						</div>
					
					<!-- Layout1 -->
					
						<div class="about_container_data scroll-element js-scroll slide-right">
							<?php
							if(!empty(get_theme_mod( 'goldy_mex_about_main_title',$goldy_mex_default['options']['goldy_mex_about_main_title']))){
								?>
								<div class="goldy_mex_about_main_title heading_main_title">
									<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_about_main_title',$goldy_mex_default['options']['goldy_mex_about_main_title'] )); ?></h2>
									<span class="separator"></span>
								</div>
								<?php
							} 
							?>	
							<div class="entry-header">
								<div class="about_title">
									<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_about_section_layout_title',$goldy_mex_default['options']['goldy_mex_about_section_layout_title'])); ?></h2>
								</div>
								<div class="about_sub_heading">
									<p><?php echo esc_html(get_theme_mod( 'goldy_mex_about_section_layout_subheading',$goldy_mex_default['options']['goldy_mex_about_section_layout_subheading'])); ?></p>
								</div>
								<div class="about_description">
									<p><?php echo esc_html(get_theme_mod( 'goldy_mex_about_section_layout_desc',$goldy_mex_default['options']['goldy_mex_about_section_layout_desc'])); ?></p>
								</div>
								<?php if(!empty(get_theme_mod( 'goldy_mex_about_section_layout_btn_link',$goldy_mex_default['options']['goldy_mex_about_section_layout_btn_link']))){ ?>
								<div class="about_btn">
									<a class="buttons" href="<?php echo esc_attr(get_theme_mod( 'goldy_mex_about_section_layout_btn_link',$goldy_mex_default['options']['goldy_mex_about_section_layout_btn_link'])); ?>"><?php echo esc_html(get_theme_mod( 'goldy_mex_about_section_layout_btn',$goldy_mex_default['options']['goldy_mex_about_section_layout_btn'] )); ?></a>
								</div>
								<?php } ?>
							</div>
						</div>
					<!-- Layout1 -->
				</div>
			</div>
		</div>
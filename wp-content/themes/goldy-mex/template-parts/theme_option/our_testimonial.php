<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
$our_testimonial  = get_theme_mod( 'our_testimonial_content',$goldy_mex_default['options']['our_testimonial_content']);

if(empty($our_testimonial)){
	$our_testimonial  = $goldy_mex_default['options']['goldy_mex_our_testimonial_section_content'];
}

	?>
		<div class="our_testimonial_section">
			<div class="our_testimonial_info scroll-element js-scroll fade-in-bottom">
				<div class="our_testimonial_main_title">
					<div class="testimonial_title heading_main_title">
						<h2><?php echo esc_html(get_theme_mod( 'our_testimonial_main_title',$goldy_mex_default['options']['our_testimonial_main_title'])); ?></h2>
						<span class="separator"></span>
					</div>
					<div class="our_testimonial_main_disc">
						<p><?php echo esc_html(get_theme_mod( 'our_testimonial_desc',$goldy_mex_default['options']['our_testimonial_desc']));?></p>
					</div>
				</div>
				<div class="owl-carousel owl-theme testinomial_owl_slider" id="testinomial_owl_slider">
					<?php
					foreach ( $our_testimonial as $info_item ) { 
							?>
							<div class="our_testimonial_data" >
								<div class="our_testimonial_data_info">
									<div class="our_testimonial_icon">
	                                    <i class="fa fa-quote-left"></i>
	                                </div>
									<div class="testimonials_center_border"></div>
									<div class="testimonials_content">
										<div class="testinomial_description">
											<p><?php echo esc_html($info_item['text']) ?></p>
										</div>
										<div class="our_testimonials_container">
											<div class="testimonials_image">
												<div class="image_testimonials">
													<?php
													if(!empty($info_item['image'])){
														?>
														<img src="<?php echo esc_attr($info_item['image']);  ?>" alt="">
														<?php
													}else{
														?>
														<img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="">								
														<?php
													}
													?>
												</div>
											</div>
											<div class="testimonials_title">
												<h3><?php echo esc_html($info_item['title']) ?></h3>
												<h4><?php echo  esc_attr($info_item['subtitle']) ?></h4>
											</div>
											
										</div>
									</div>												
								</div>						
							</div>
							<?php
					    }
					// }
					?>
				</div>
			</div>
		</div>
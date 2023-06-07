<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
$our_team  = get_theme_mod( 'goldy_mex_our_team_content',$goldy_mex_default['options']['goldy_mex_our_team_content']);
if(empty($our_team)){
	$our_team  = $goldy_mex_default['options']['goldy_mex_our_team_content'];
}
	?>
		<div class="our_team_section">
			<div class="our_team_info scroll-element js-scroll fade-in-bottom">
				<div class="our_team_main_title">
					<div class="our_team_tit heading_main_title">
						<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_our_team_main_title',$goldy_mex_default['options']['goldy_mex_our_team_main_title'])); ?></h2>
					</div>

					<div class="our_team_main_disc">
						<p><?php echo esc_html(get_theme_mod( 'goldy_mex_our_team_desc',$goldy_mex_default['options']['goldy_mex_our_team_desc']));?></p>
					</div>
				</div>
				<div class="our_team_data">
					<?php 
					foreach ( $our_team as $info_item ) {
						// echo "<pre>";
						// print_r($info_item);
						// echo "<pre>";
								
						?>
						<div class="our_team_container">							
							<div class="our_team_container_data">
								<div class="out_team_single_img">	
									<div class="our_team_img">
										<div class="out_team_pic">
											<?php
											if(!empty( $info_item['image'])){
												?>
												<img src="<?php echo esc_attr($info_item['image']); ?>">
												<?php
											}else{
												?>
												<img class="our_team_main_image" src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us">
												<?php
											}
											?>
										</div>
									</div>
								</div>
								<div class="our_team_icon_contain">
									<div class="our_teams_contain">
										<div class="our_team_title">
											<a href="<?php echo esc_html($info_item['link_url']); ?>">
												<h3><?php echo esc_html($info_item['title']); ?></h3>
											</a>
										</div>
										<div class="our_team_headline">
											<p><?php echo esc_html($info_item['subtitle']);?></p>
										</div>
									</div>
									
								</div>	
							</div>
						</div>
							<?php
					} 
					?>
				</div>
			</div>
		</div>
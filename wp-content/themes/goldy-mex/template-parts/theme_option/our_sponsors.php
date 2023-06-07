<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
if(empty(get_theme_mod( 'goldy_mex_our_sponsors_section_content')) && !is_plugin_active('slivery-extender/slivery-extender.php')){?>
	<div class="block_data_info">
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 1 - Theme Options', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'To begin customizing your site go to <strong>Appearance → Customizer</strong> and select <strong>Theme Option</strong>. Use the options to build your site.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 2 - Setup Our Sponsors', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Our Sponsors</strong>. Simply add an image and link to create stunning sponsors section.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 3 - Setup Style', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Our Sponsors</strong>. Simply add Text, Arrow Text and Arrow Background Color.', 'goldy-mex' ); ?>'</p>
			</div>
		</div>
	</div>
<?php
}else{
	$our_sponsors  = get_theme_mod( 'goldy_mex_our_sponsors_section_content',$goldy_mex_default['options']['goldy_mex_our_sponsors_section_content']);
	if(empty($our_sponsors)){
		$our_sponsors  = $goldy_mex_default['options']['goldy_mex_our_sponsors_section_content'];
	}
?>
	<div class="our_sponsors_section">
		<div class="our_sponsors_info scroll-element js-scroll fade-in-bottom">
			<div class="our_sponsors_data">
				<div class="our_sponsors_title heading_main_title">
					<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_our_sponsors_main_title',$goldy_mex_default['options']['goldy_mex_our_sponsors_main_title'] )); ?></h2>
					<span class="separator"></span>
				</div>
			</div>
			<div class="our_sponsors_contain">
				<div id="our_sponsors_demo" class="owl-carousel owl-theme our_sponsors_demo">
					<?php
					foreach($our_sponsors as $info_item ){
							?>
							<div class="our_sponsors_main">
								<div class="our_sponsors_img">
									<?php if(!empty( $info_item['image']) && !empty( $info_item['link_url'])){
										?>
										<a href='<?php echo esc_attr($info_item['link_url']);?>'><img src="<?php echo esc_attr($info_item['image'])?>"></a>
										<?php
									}else{
										?>
										<a href='#'><img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"></a>
										<?php
									} ?>
									<div class="our_spon_area"></div>

								</div>
							</div>

					<?php 
					} 
				// 	} ?>

				</div>
			</div>
		</div>
	</div>	
	<?php 
}	
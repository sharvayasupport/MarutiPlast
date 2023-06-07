<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
if(empty(get_theme_mod( 'goldy_mex_featured_section_content')) && !is_plugin_active('slivery-extender/slivery-extender.php')){?>
	<div class="block_data_info">
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 1 - Theme Options', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'To begin customizing your site go to <strong>Appearance → Customizer</strong> and select <strong>Theme Option</strong>. Use the options to build your site.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 2 - Setup Featured Section', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Featured Section</strong>. Simply add an icon, title and text to create stunning featured.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 3 - Setup Style', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Featured Section</strong>. Simply Customize Featured Section With Contain Text, Background Color And Other Options.', 'goldy-mex' ); ?>'</p>
			</div>
		</div>
	</div>
<?php
}else{
$featured_section  = get_theme_mod( 'goldy_mex_featured_section_content',$goldy_mex_default['options']['goldy_mex_featured_section_content']);
if(empty($featured_section)){
	$featured_section  = $goldy_mex_default['options']['goldy_mex_featured_section_content'];
}
?>
	<div class="featured-section_data">
		<div class="featured_section_info">
			<?php
			if(!empty(get_theme_mod( 'goldy_mex_featured_section_main_title',$goldy_mex_default['options']['goldy_mex_featured_section_main_title'] ))){
				?>
				<div class="featured-section_title heading_main_title">
					<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_featured_section_main_title',$goldy_mex_default['options']['goldy_mex_featured_section_main_title'] )); ?></h2>
				</div>
				<?php
			} 
			?>	
			<div class="featured_section_discription">
				<p><?php echo esc_html(get_theme_mod('goldy_mex_featured_section_description',$goldy_mex_default['options']['goldy_mex_featured_section_description'] )); ?></p>
			</div>
		    <div id="featured-section" class="featured-section section scroll-element js-scroll fade-in-bottom">
				<div class="card-container featured_content">
				<?php 
					foreach ( $featured_section as $info_item ) {
						?>
						<div class="section-featured-wrep" style="visibility: visible;animation-duration: 2s;animation-name: zoomIn;">
							<div class="featured-thumbnail"> 
								<?php 
									do_action('goldy_featured_section_loop',$info_item);
								?>
							</div>
						</div>
						<?php
					} ?>
				</div>
			</div>
		</div>
	</div>
	<?php
}
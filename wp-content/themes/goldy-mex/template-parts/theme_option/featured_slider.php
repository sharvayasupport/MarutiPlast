<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
if(empty(get_theme_mod( 'goldy_mex_featuredimage_slider')) && !is_plugin_active('slivery-extender/slivery-extender.php')){?>
	<div class="block_data_info">
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 1 - Theme Options', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'To begin customizing your site go to <strong>Appearance → Customizer</strong> and select <strong>Theme Option</strong>. Use the options to build your site.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 2 - Setup Slider', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Featured Slider</strong>. Simply add an image, title and text to create stunning slides.', 'goldy-mex' ); ?></p>
			</div>
		</div>
		<div class="block_section">
			<div class="block_contant">
				<h3><?php echo __( 'Step 3 - Setup Style', 'goldy-mex' ); ?></h3>
				<p><?php echo __( 'Go to <strong>Theme Option → Featured Slider</strong>. Simply add Text, Arrow Text and Arrow Background Color.', 'goldy-mex' ); ?>'</p>
			</div>
		</div>
	</div>
<?php
}else{
	$featuredimage_slider  = get_theme_mod( 'goldy_mex_featuredimage_slider',$goldy_mex_default['options']['goldy_mex_featuredimage_slider']);
if(empty($featuredimage_slider)){
	$featuredimage_slider  = $goldy_mex_default['options']['goldy_mex_featuredimage_slider'];
}
if ( ! empty( $featuredimage_slider ) ) {
// $featuredimage_slider = json_decode( $featuredimage_slider );
?>
	<div class="featured_slider_image">
		<div id="owl-demo" class="owl-carousel owl-theme featuredimage_slider">
			<?php	
				foreach ( $featuredimage_slider as $info_item ) {
					?>								
					<div class="item">
						<div class="hentry-inner">
							<div class="post-thumbnail">
								<?php if(!empty($info_item['image'])){ ?>
									<img src="<?php echo $info_item['image']; ?>" alt="The Last of us">

								<?php }else{
									?>
									<img src="<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us">
									<?php
								} ?> 
							</div>				
						  	<div class="entry-container">
						  		<?php if($info_item['title']){
						  			?>
						  			<header class=" featured_slider_title entry-header">					
									<h1 class="entry-title">
								  		<?php echo esc_attr($info_item['title']); ?>
								  	</h1>
								</header>
						  			<?php
						  		} ?>						
							  	<div class="featured_slider_disc entry-summary"><?php echo esc_html($info_item['text']); ?></div>
							  	<?php if($info_item['link_text'] != ''){ 
							  			if(!empty($info_item['link_url'])) {
							  				if(!empty($info_item['link_text'])) {?>
								  	<div class="image_btn button">
										<a href="<?php echo esc_attr($info_item['link_url']); ?>" class="buttons"><?php echo esc_html($info_item['link_text']); ?></a>
									</div>
								<?php } } }?>
							</div>
						</div>								
					</div>	
					<?php							
				}
		?>
		</div>
	</div>
	<?php
	}
}

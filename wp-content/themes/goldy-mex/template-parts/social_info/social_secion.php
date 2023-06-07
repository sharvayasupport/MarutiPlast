<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldy-mex
 */
global $goldy_mex_default;
// $number = get_theme_mod( 'silvary_contact_info_number',$goldy_mex_default);
// echo "<pre>";
// print_r($number);
// echo "</pre>";
?>
<div class="header_topbar_info">
<?php
if ( is_plugin_active('slivery-extender/slivery-extender.php') ) {?>
	<div class="header_top_bar">
		<?php if(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'])){ ?>
		<?php if(!empty(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time']))){ ?>
				<div class="opening_time_data">
					<div class="opening_icon">
						<i class="fa fa-clock-o"></i>
					</div>
					<div class="opening_info">
						<a href="<?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_opening_time',$goldy_mex_default['options']['goldy_mex_opening_time'] )); ?></p></a>
					</div>
				</div>
				
		<?php } } ?>
		<?php if(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'])){ ?>
		<?php if(!empty(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number']))){ ?>
				<div class="contact_data">
					<div class="contact_icon">
						<i class="fa fa-phone"></i>
					</div>
					<div class="contact_info">
						<a href="tel:<?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_contact_info_number',$goldy_mex_default['options']['goldy_mex_contact_info_number'] )); ?></p></a>
					</div>
				</div>
				
		<?php } } 
		if(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )){
			if(!empty(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] ))){ ?>
			<div class="email_data">
				<div class="email_icon">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="email_info">
					<a href="mailto:<?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?>"><p><?php echo esc_html(get_theme_mod( 'goldy_mex_email_info_number',$goldy_mex_default['options']['goldy_mex_email_info_number'] )); ?></p></a>
				</div>
			</div>
		<?php } 
	}?>
	</div>
	
	<div class="header_social_icon">
	<?php 
	if(get_theme_mod( 'goldy_mex_display_social_icon',$goldy_mex_default['options']['goldy_mex_display_social_icon']) != ''){ 
		?>
			<div class="social_icon_info">
				<div class="social_data">
					<?php 
					$social_icon_section_content  = get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']);
					if ( ! empty( $social_icon_section_content ) ) {
						// $social_icon_section_content = json_decode( $social_icon_section_content );
						foreach ( $social_icon_section_content as $info_item ) {
							if(get_theme_mod( 'goldy_mex_social_icon_section_content',$goldy_mex_default['options']['goldy_mex_social_icon_section_content']) != ''){
								if(!empty($info_item['link_url'])){
								?>
								<a class="social_icon" href="<?php echo esc_attr($info_item['link_url']);?>" target="_blank">
									<i class="fa <?php echo esc_attr($info_item['icon_value']);?>"></i>
								</a>
								<?php
								}
							}
						}
					} ?>
				</div>
			</div>
		
		<?php 
	}
	?>
	</div>
<?php } ?>
</div>
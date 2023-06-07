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
 	<div class="appointment_section_info">
 		<div class="appointment_data">
 			<div class="appointment_featured_image">
 				<div class="appointment_bg_image">
 					<?php if(get_theme_mod( 'goldy_mex_book_an_appointment_section_image')){ ?>
 						<style>
 						.appointment_featured_image {
						   	background-image: url("<?php echo esc_attr(get_theme_mod( 'goldy_mex_book_an_appointment_section_image')); ?>");
						}
 						</style>
 					<?php }else{ ?>
 					<style>
						.appointment_featured_image {
						   	background-image: url("<?php echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg");
						}
					</style>
					<?php } ?>
 					<!-- <img src="<?php //echo esc_attr(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"> -->
 				</div>
 			</div>
 			<div class="appointment_fields_data">
 				<div class="appointment_main_title">
 					<div class="appointment_title heading_main_title">
						<h2><?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_main_title',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_main_title'] )); ?></h2>
						<span class="separator"></span>
					</div>
 				</div>
 				<div class="appointment_field">
					<div class="af_table_data">
						<form method="post" class="appoinment_reset">
							<div class="af_input_fields">
								<input type="text" name="appointment_name" id="appointment_name" size="70" class="appointment_name" placeholder="<?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_name_ph',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_name_ph'] )); ?>">
							</div>
							<div class="af_input_fields">
								<input type="email" name="appointment_email" id="appointment_email" size="70" class="appointment_email" placeholder="<?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_email_ph',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_email_ph'] )); ?>">
							</div>
							<div class="af_input_fields">
								<input type="text" name="appointment_monumber" id="appointment_monumber" size="70" class="appointment_monumber" placeholder="<?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_number_ph',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_number_ph'] )); ?>">
							</div>
							<div class="af_input_fields">
								<textarea rows="5" cols="72" name="appointment_query" id="appointment_query" class="appointment_query" placeholder="<?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_query_ph',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_query_ph'] )); ?>"></textarea>
							</div>
							<div class="bookan_appoinment_button">
								<a class="buttons" href="" name="submit" id="appoinment_book" class="make_appointment_btn" ><?php echo esc_html(get_theme_mod( 'goldy_mex_book_an_appoinment_btn_text',$goldy_mex_default['options']['goldy_mex_book_an_appoinment_btn_text'] )); ?></a>
							</div>
						</form>
						<div class="validation_error"></div>
						<div class="email_success"></div>
					</div>
 				</div>
 			</div>
 		</div>
 	</div>
<!-- Companies We've Collaborated With -->
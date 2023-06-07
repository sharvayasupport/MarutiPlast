<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldy-mex
 */

?>

</div>
</div>
	<footer id="colophon" class="site-footer">
		<div class="footer_info">
			<div class="main_footer">
				<div class="container_footer">
					<div class="site_icon_nav_footer">
						<div class='footer_logo footer_widgets'>
							<div class="logo_images">		        	
								<div class="footer_description">
									<?php
						        		dynamic_sidebar('goldy_mex_footer1'); 
						        	?>
								</div>	
							</div>
						</div>	
					    <div class="footer_nav_bar footer_widgets">
							<?php
							   dynamic_sidebar('goldy_mex_footer3'); 
							?>			
						</div>
						<div class="footer_categories footer_widgets">
							<?php
			        		dynamic_sidebar('goldy_mex_footer4'); 
			        	?>
						</div>
			        	
			        	<div class="footer_about_company footer_widgets">
			        		<?php
			        		dynamic_sidebar('goldy_mex_footer5'); 
			        	?>
			        	</div>	        	
					</div>
				</div>
			</div>
			<?php
			
			$allowedtags = array(
				'a' => array(
					'href' => array (),
					'target' => array(),
					'title' => array (),
					'class' => array(),
				),
				'div' => array(
					'class' => array (),
				),
				'em' => array(),
				'i' => array(),
				'b' => array(),
				'strong' => array(),
				'p' => array(),
				'br' => array(),
				'hr' => array(),
			);

			if(get_theme_mod('silvery_footer_copyright_text')){
					?>
					<div class="footer_copyright_text">
						<p><?php echo wp_kses(get_theme_mod('silvery_footer_copyright_text'), $allowedtags ); ?></p>
					</div>
					<?php
				}else{ ?>
			<div class="copyright_info">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'goldy-mex' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'goldy-mex' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'goldy-mex' ), 'goldy-mex', '<a href="https://www.inverstheme.com/">inverstheme</a>' );
				} ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
<!-- </div> --><!-- #page -->
<button type="button" class="scrollingUp scrolling-btn is-active" aria-label="<?php echo esc_attr__( 'scrollingUp', 'goldy-mex' ); ?>"><i class="fa fa-angle-up"></i></button>
<?php wp_footer(); ?>

</body>
</html>

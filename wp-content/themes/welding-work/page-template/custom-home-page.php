<?php
/**
 * Template Name: Custom Home
 */
get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'welding_work_above_slider' ); ?>

	<?php if( get_theme_mod('welding_work_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			    <?php $welding_work_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'welding_work_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $welding_work_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($welding_work_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $welding_work_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>      
				    <div class="carousel-inner" role="listbox">
				      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
					        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
					        	<div class="overlay"></div>
					        	<div class="sliderimg">
					        		<div class="imgflsh"></div>
		            				<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
							    </div>
			        			<div class="slider_content">
						            <!-- <div class="inner-carousel"> -->
						              	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						          	    <p class="mb-0"><?php $welding_work_excerpt = get_the_excerpt(); echo esc_html( welding_work_string_limit_words( $welding_work_excerpt, esc_attr(get_theme_mod('welding_work_slider_excerpt_length','15') ) )); ?></p>
						          	    <ul>
							          	    <li>
							              		<a href="<?php the_permalink(); ?>" class="read-btn"><?php echo esc_html('Read More','welding-work'); ?></a>
							              	</li>
							              	<li>
												<a href="<?php echo esc_url(get_theme_mod('welding_work_slider_aboutusbtn_link')); ?>" class="read-btn"><?php echo esc_html('About Us','welding-work'); ?></a>
											</li>
										</ul>
									<!-- </div> -->
				            	</div>
					        </div>
				      	<?php $i++; endwhile; 
				      	wp_reset_postdata();?>
				    </div>
			    <?php else : ?>
			    	<div class="no-postfound"></div>
	      		<?php endif;
			    endif;?>
				<div class="arrows">
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
			      	<span class="screen-reader-text"><//?php esc_html_e( 'Prev','welding-work' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
			      	<span class="screen-reader-text"><//?php esc_html_e( 'Next','welding-work' );?></span>
			    </a> 
				</div>
			        
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1503" height="155.28" viewBox="0 0 1503 155.28">
			  <defs>
			    <linearGradient id="linear-gradient" x1="0.993" y1="0.621" x2="0.007" y2="0.631" gradientUnits="objectBoundingBox">
			      <stop offset="0" stop-color="#ffa200"/>
			      <stop offset="1" stop-color="#ff6f00"/>
			    </linearGradient>
			  </defs>
			  <path id="Rectangle_1" data-name="Rectangle 1" d="M-110,910H363.809c38.048,0,107.433-110.548,172.834-104H1393l-.46,154H-110Z" transform="translate(110 -805.72)" fill-rule="evenodd" fill="url(#linear-gradient)"/>
			  <path id="Rectangle_1-2" data-name="Rectangle 1" d="M-110,915H379.783c38.175,0,103.87-106.548,169.488-100H1392V951H-110Z" transform="translate(110 -795.72)" fill="#222a35" fill-rule="evenodd"/>
			</svg>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>
	 
	<?php do_action('welding_work_below_slider'); ?>

	<?php if( get_theme_mod('welding_work_service_category_setting') != '' || get_theme_mod('welding_work_section_title') != '' ){?>
		<section id="service-section">
			<div class="container"> 
				<div class="section-title">
					<?php if(get_theme_mod('welding_work_section_title') != ''){ ?>
						<h3 class="text-center"><?php echo esc_html(get_theme_mod('welding_work_section_title')); ?></h3>
					<?php }?>
				</div>
	        	<div class="row ">  
	        		<?php $welding_work_catData1 =  get_theme_mod('welding_work_service_category_setting');
					if($welding_work_catData1){ 
						$args = array(
							'post_type' => 'post',
							'category_name' => $welding_work_catData1,
				        );
				        $i=1; ?>
		        		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			        			<div class="col-lg-4 col-md-6">
			          				<div class="service-box ">
			          					<?php if(has_post_thumbnail()) { ?>
			          						<div class="service-img">
			          							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			          						</div>
			          					<?php }?>
	          							<div class="service-content">
				            				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
				            				<p><?php $welding_work_excerpt = get_the_excerpt(); echo esc_html( welding_work_string_limit_words( $welding_work_excerpt,8 ) ); ?></p>
			            				</div>
			          				</div>
			          			</div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
		      		<?php }?>
	          	</div>
			</div>
		</section>
	<?php }?>

	<?php do_action('welding_work_below_service_section'); ?>

	<?php if( get_theme_mod('welding_work_blog_category_setting') != '' || get_theme_mod('welding_work_blogsection_title') != '' ){?>
		<section id="blog-section" >
			<div class="container"> 
				<div class="section-title">
					<?php if(get_theme_mod('welding_work_blogsection_title') != ''){ ?>
						<h3 class="text-center "><?php echo esc_html(get_theme_mod('welding_work_blogsection_title')); ?></h3>
					<?php }?>
				</div>
	        	<div class="row ">  
	        		<?php $welding_work_catData1 =  get_theme_mod('welding_work_blog_category_setting');
					if($welding_work_catData1){ 
						$args = array(
							'post_type' => 'post',
							'category_name' => $welding_work_catData1,
				        );
				        $i=1; ?>
		        		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			        			<div class="col-lg-4 col-md-6">
			          				<div class="blog-box ">
			          					<?php if(has_post_thumbnail()) { ?>
			          						<div class="blog-img">
			          							<?php the_post_thumbnail(); ?>
			          							<div class="blog-date">
									            	<div class="blog-dbg"></div>
									            		<div class="row">
															<div class="col-md-6 col-sm-6 col-xs-6 date">
																<i class="fa fa-calendar"></i><?php echo get_the_date( 'M j, Y' ); ?>
										            		</div>
											                <div class="col-md-6 col-sm-6 col-xs-6 comments">
											                	<i class="fa fa-comment"></i><?php echo $my_var = get_comments_number(); ?> Comments
											                		<!-- <i class="fa fa-user" aria-hidden="true"></i><//?//php echo get_the_author(); ?> -->
											                </div> 
										            </div>
									                <div class="clearfix"></div>
									            </div>
									            
			          						</div>
			          					<?php }?>
										
	          							<div class="blog-content">
										
				            				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							              	<p><?php $welding_work_excerpt = get_the_excerpt(); echo esc_html( welding_work_string_limit_words( $welding_work_excerpt,18 ) ); ?></p>
							              	<a href="<?php the_permalink(); ?>" class="blog-btn"><?php echo esc_html('Read More', 'welding-work'); ?></a>
			            				</div>
			          				</div>
			          			</div>
			          		<?php $i++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
		      		<?php }?>
	          	</div>
			</div>
		</section>
	<?php }?>
	<?php do_action('welding_work_below_blog_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>
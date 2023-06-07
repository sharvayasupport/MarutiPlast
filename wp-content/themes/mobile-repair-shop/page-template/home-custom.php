<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'mobile_repair_shop_above_slider' ); ?>

  <?php if( get_theme_mod('mobile_repair_shop_slider_hide_show', false) != ''){ ?> 
    <section id="slider" class="m-0 p-0 mw-100">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
        <?php $mobile_repair_shop_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'mobile_repair_shop_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $mobile_repair_shop_content_pages[] = $mod;
            }
          }
          if( !empty($mobile_repair_shop_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $mobile_repair_shop_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(get_theme_mod('mobile_repair_shop_slider_bg_image') != ''){?>
                <div class="sliderbg-img">
                  <img src="<?php echo esc_url(get_theme_mod('mobile_repair_shop_slider_bg_image')); ?>" alt="<?php echo esc_attr('Slider Background Image', 'mobile-repair-shop'); ?>">
                </div>
              <?php } else {?>
                <div class="sliderbg-img">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider-bg.png" alt="<?php echo esc_attr('Slider Background Image', 'mobile-repair-shop'); ?>">
                </div>
              <?php }?>
              <div class="slider-content">
                <div class="row">
                  <div class="col-lg-5 col-md-6 align-self-center">
                    <div class="carousel-caption">
                      <div class="inner_carousel">
                        <h1><?php the_title(); ?></h1>
                        <p class="my-2"><?php $mobile_repair_shop_excerpt = get_the_excerpt(); echo esc_html( mobile_repair_shop_string_limit_words( $mobile_repair_shop_excerpt,20 ) ); ?></p>
                        <div class="read-btn mt-md-4">
                          <a href="<?php echo esc_url(get_permalink()); ?>"><span><?php esc_html_e( 'Read More', 'mobile-repair-shop' ); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Read More', 'mobile-repair-shop' );?></span></a>
                          <?php if(get_theme_mod('mobile_repair_shop_slider_btn_url2') != '' || get_theme_mod('mobile_repair_shop_slider_btn_text2') != ''){?>
                            <a href="<?php echo esc_url(get_theme_mod('mobile_repair_shop_slider_btn_url2')); ?>" class="ms-3"><span><?php echo esc_html( get_theme_mod('mobile_repair_shop_slider_btn_text2') ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mobile_repair_shop_slider_btn_text2') );?></span></a>
                          <?php }?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="offset-lg-1 col-lg-6 col-md-6 align-self-center">
                    <div class="slider-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous', 'mobile-repair-shop' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next', 'mobile-repair-shop' );?></span>
        </a>
      </div>   
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'mobile_repair_shop_below_slider' ); ?>

  <?php if( get_theme_mod('mobile_repair_shop_service_category') != ''){ ?>
    <section id="service-section" class="pb-5">
      <div class="container">
        <div class="row">
          <?php $mobile_repair_shop_catData =  get_theme_mod('mobile_repair_shop_service_category');
          if($mobile_repair_shop_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($mobile_repair_shop_catData,'mobile-repair-shop'))); ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>  
              <div class="col-lg-4 col-md-6 px-3">
                <div class="service-box text-center mb-4">
                  <h3><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                  <div class="service-img">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="service-content">
                    <p class="mb-2"><?php $mobile_repair_shop_excerpt = get_the_excerpt(); echo esc_html( mobile_repair_shop_string_limit_words( $mobile_repair_shop_excerpt,20 ) ); ?></p>
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html('Read More', 'mobile-repair-shop'); ?><span class="screen-reader-text"><?php echo esc_html('Read More', 'mobile-repair-shop'); ?></span></a>
                  </div>
                </div>
              </div>
            <?php endwhile; 
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'mobile_repair_shop_below_best_sellers' ); ?>

  <div class="container entry-content py-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>
<?php get_footer(); ?>
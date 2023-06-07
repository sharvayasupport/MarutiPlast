<?php 
/*
* Display Top Bar
*/
?>
<?php if( get_theme_mod('mobile_repair_shop_show_topbar', false) != false){ ?>
  <div class="top-header">
    <div class="row">
      <div class="col-lg-8 col-md-6 text-center align-self-center contact-detail text-md-end text-center">
        <?php if(get_theme_mod('mobile_repair_shop_email') != ''){ ?>
          <p><i class="fas fa-envelope me-2"></i><?php echo esc_html('Email:', 'mobile-repair-shop'); ?> <a href="mailto:<?php echo esc_attr(get_theme_mod('mobile_repair_shop_email')); ?>"><?php echo esc_html(get_theme_mod('mobile_repair_shop_email')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('mobile_repair_shop_email')); ?></span></a></p>
        <?php }?>
      </div>
      <div class="col-lg-4 col-md-6 align-self-center contact-detail text-md-end text-center">
        <?php if(get_theme_mod('mobile_repair_shop_phone') != ''){ ?>
          <p><i class="fas fa-phone me-2"></i><?php echo esc_html('Call Now:', 'mobile-repair-shop'); ?> <a href="tel:<?php echo esc_attr(get_theme_mod('mobile_repair_shop_phone')); ?>"><?php echo esc_html(get_theme_mod('mobile_repair_shop_phone')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('mobile_repair_shop_phone')); ?></span></a></p>
        <?php }?>
      </div>
    </div>
  </div>
<?php }?>
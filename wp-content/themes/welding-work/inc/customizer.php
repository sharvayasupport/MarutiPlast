<?php
/**
 * Welding Work: Customizer
 *
 * @subpackage Welding Work
 * @since 1.0
 */

use WPTRT\Customize\Section\Welding_Work_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Welding_Work_Button::class );

	$manager->add_section(
		new Welding_Work_Button( $manager, 'welding_work_pro', [
			'title' => __( 'Welding Work Pro', 'welding-work' ),
			'priority' => 0,
			'button_text' => __( 'Go Pro', 'welding-work' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/welding-work-wordpress-theme', 'welding-work')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'welding-work-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'welding-work-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function welding_work_customize_register( $wp_customize ) {

	$wp_customize->add_setting('welding_work_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('welding_work_logo_padding',array(
		'label' => __('Logo Margin','welding-work'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('welding_work_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'welding_work_sanitize_float'
	));
	$wp_customize->add_control('welding_work_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','welding-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('welding_work_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'welding_work_sanitize_float'
	));
	$wp_customize->add_control('welding_work_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','welding-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('welding_work_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'welding_work_sanitize_float'
	));
	$wp_customize->add_control('welding_work_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','welding-work'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('welding_work_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'welding_work_sanitize_float'
 	));
 	$wp_customize->add_control('welding_work_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','welding-work'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('welding_work_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'welding_work_sanitize_checkbox'
	));
	$wp_customize->add_control('welding_work_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','welding-work'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('welding_work_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'welding_work_sanitize_checkbox'
	));
	$wp_customize->add_control('welding_work_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','welding-work'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_panel( 'welding_work_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'welding-work' ),
		'description' => __( 'Description of what this panel does.', 'welding-work' ),
	) );

	$wp_customize->add_section( 'welding_work_theme_options_section', array(
    	'title'      => __( 'General Settings', 'welding-work' ),
		'priority'   => 30,
		'panel' => 'welding_work_panel_id'
	) );

	$wp_customize->add_setting('welding_work_theme_options',array(
		'default' => 'One Column',
		'sanitize_callback' => 'welding_work_sanitize_choices'
	));
	$wp_customize->add_control('welding_work_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','welding-work'),
		'section' => 'welding_work_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','welding-work'),
		   'Right Sidebar' => __('Right Sidebar','welding-work'),
		   'One Column' => __('One Column','welding-work'),
		   'Grid Layout' => __('Grid Layout','welding-work')
		),
	));

	$wp_customize->add_setting('welding_work_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'welding_work_sanitize_choices'
	));
	$wp_customize->add_control('welding_work_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','welding-work'),
        'section' => 'welding_work_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','welding-work'),
            'Right Sidebar' => __('Right Sidebar','welding-work'),
            'One Column' => __('One Column','welding-work')
        ),
	));

	$wp_customize->add_setting('welding_work_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'welding_work_sanitize_choices'
	));
	$wp_customize->add_control('welding_work_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','welding-work'),
        'section' => 'welding_work_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','welding-work'),
            'Right Sidebar' => __('Right Sidebar','welding-work'),
            'One Column' => __('One Column','welding-work')
        ),
	));

	$wp_customize->add_setting('welding_work_archive_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'welding_work_sanitize_choices'
	));
	$wp_customize->add_control('welding_work_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','welding-work'),
        'section' => 'welding_work_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','welding-work'),
            'Right Sidebar' => __('Right Sidebar','welding-work'),
            'One Column' => __('One Column','welding-work'),
            'Grid Layout' => __('Grid Layout','welding-work')
        ),
	));

	//Header
	$wp_customize->add_section( 'welding_work_header' , array(
    	'title'    => __( 'Header Section', 'welding-work' ),
		'priority' => null,
		'panel' => 'welding_work_panel_id'
	) );

	$wp_customize->add_setting('welding_work_topbar_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('welding_work_topbar_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Topbar Text','welding-work'),
	   	'section' => 'welding_work_header',
	));

	$wp_customize->add_setting('welding_work_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('welding_work_facebook_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Facebook URL','welding-work'),
	   	'section' => 'welding_work_header',
	));

	$wp_customize->add_setting('welding_work_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('welding_work_twitter_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Twitter URL','welding-work'),
	   	'section' => 'welding_work_header',
	));

	$wp_customize->add_setting('welding_work_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('welding_work_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','welding-work'),
	   	'section' => 'welding_work_header',
	));

	$wp_customize->add_setting('welding_work_pinterest_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('welding_work_pinterest_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Pinterest URL','welding-work'),
	   	'section' => 'welding_work_header',
	));


	$wp_customize->add_setting('welding_work_contact_btn_text',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('welding_work_contact_btn_text',array(
		'label'	=> __('Button Text','welding-work'),
		'section' => 'welding_work_header',
		'type' => 'text'
	));

    $wp_customize->add_setting('welding_work_contact_btn_url',array(
		'default' => '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('welding_work_contact_btn_url',array(
		'label'	=> __('Button URL','welding-work'),
		'section' => 'welding_work_header',
		'type' => 'url'
	));


	//home page slider
	$wp_customize->add_section( 'welding_work_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'welding-work' ),
		'description'=> __('<b>Note :</b> Image Size Should be 945*754.','welding-work'),
		'priority' => null,
		'panel' => 'welding_work_panel_id'
	) );

	$wp_customize->add_setting('welding_work_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'welding_work_sanitize_checkbox'
	));
	$wp_customize->add_control('welding_work_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','welding-work'),
	   	'section' => 'welding_work_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'welding_work_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'welding_work_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'welding_work_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'welding-work' ),
			'section' => 'welding_work_slider_section',
			'type' => 'dropdown-pages'
		));
	}


	$wp_customize->add_setting('welding_work_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'welding_work_sanitize_float'
	));
	$wp_customize->add_control('welding_work_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Description Excerpt Length','welding-work'),
		'section' => 'welding_work_slider_section',
	));

	$wp_customize->add_setting('welding_work_slider_aboutusbtn_link',array(
		'default' => '#',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('welding_work_slider_aboutusbtn_link',array(
		'label'	=> __('About Us Button Link','welding-work'),
		'section' => 'welding_work_slider_section',
		'type' => 'url'
	));



	//Service Section
	$wp_customize->add_section('welding_work_service_section',array(
		'title'	=> __('Service Section','welding-work'),
		'description'=> __('<b>Note :</b> This section will appear below the Slider section.','welding-work'),
		'panel' => 'welding_work_panel_id',
	));

    $wp_customize->add_setting('welding_work_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('welding_work_section_title',array(
		'label'	=> __('Section Title','welding-work'),
		'section' => 'welding_work_service_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst1[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst1[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('welding_work_service_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'welding_work_sanitize_choices',
	));
	$wp_customize->add_control('welding_work_service_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst1,
		'label' => __('Select Category to display Post','welding-work'),
		'section' => 'welding_work_service_section',
	));


	//blog Section
	$wp_customize->add_section('welding_work_blog_section',array(
		'title'	=> __('Blog Section','welding-work'),
		'description'=> __('<b>Note :</b> This section will appear below the Service section.','welding-work'),
		'panel' => 'welding_work_panel_id',
	));

    $wp_customize->add_setting('welding_work_blogsection_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('welding_work_blogsection_title',array(
		'label'	=> __('Section Title','welding-work'),
		'section' => 'welding_work_blog_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst1[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst1[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('welding_work_blog_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'welding_work_sanitize_choices',
	));
	$wp_customize->add_control('welding_work_blog_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst1,
		'label' => __('Select Category to display Post','welding-work'),
		'section' => 'welding_work_blog_section',
	));


	//Footer
    $wp_customize->add_section( 'welding_work_footer', array(
    	'title'  => __( 'Footer Text', 'welding-work' ),
		'priority' => null,
		'panel' => 'welding_work_panel_id'
	) );

	$wp_customize->add_setting('welding_work_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'welding_work_sanitize_checkbox'
    ));
    $wp_customize->add_control('welding_work_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','welding-work'),
       'section' => 'welding_work_footer'
    ));

	$wp_customize->add_setting('welding_work_footer_link',array(
		'default' => 'https://www.luzuk.com/themes/free-welding-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('welding_work_footer_link',array(
		'label'	=> __('Footer Link','welding-work'),
		'section' => 'welding_work_footer',
		'setting' => 'welding_work_footer_link',
		'type' => 'text'
	));

    $wp_customize->add_setting('welding_work_footer_copy',array(
		'default' => 'Welding Work WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('welding_work_footer_copy',array(
		'label'	=> __('Footer Text','welding-work'),
		'section' => 'welding_work_footer',
		'setting' => 'welding_work_footer_copy',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'welding_work_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'welding_work_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'welding_work_customize_register' );

function welding_work_customize_partial_blogname() {
	bloginfo( 'name' );
}

function welding_work_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if (class_exists('WP_Customize_Control')) {

   	class Welding_Work_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="welding-work-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="welding-work-icon-list clearfix">
	                <?php
	                $welding_work_font_awesome_icon_array = welding_work_font_awesome_icon_array();
	                foreach ($welding_work_font_awesome_icon_array as $welding_work_font_awesome_icon) {
	                   $icon_class = $this->value() == $welding_work_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($welding_work_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function welding_work_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'welding_work_customizer_script' );
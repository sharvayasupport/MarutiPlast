<?php
/**
 * Singleton class for handling the theme's customizer integration.
 */
final class Flexeo_Customize {

	/**
	 * Returns the instance.
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ),999 );
	}

	/**
	 * Sets up the customizer sections.
	 */
	public function sections( $manager ) {

		// Load custom sections.
         require_once ATUA_THEME_INC_DIR . '/customizer/controls/code/upgrade/section-pro.php';

        // Register custom section types.
		$manager->register_section_type( 'Atua_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Atua_Customize_Section_Pro(
				$manager,
				'atua',
				array(
                    'pro_text' => esc_html__( 'Upgrade to Flexeo Pro','flexeo' ),
                    'pro_url'  => 'https://desertthemes.com/themes/flexeo-pro/',
                    'priority' => 0
                )
			)
		);
	}
}
// Doing this customizer thang!
Flexeo_Customize::get_instance();
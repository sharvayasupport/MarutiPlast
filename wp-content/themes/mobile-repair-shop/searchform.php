<?php
/**
 * Displaying search forms in Mobile Repair Shop
 * @package Mobile Repair Shop
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'mobile-repair-shop' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'mobile-repair-shop' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label> 
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'mobile-repair-shop' ); ?>">
</form>
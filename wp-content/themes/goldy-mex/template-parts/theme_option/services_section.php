<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldy-mex
 */
global $goldy_mex_default;

?>
    <div class="services_section">
        <div class="services_section_info">
            <div class="service_data">
                <div class="our_services_title heading_main_title">
                    <h2><?php echo esc_html(get_theme_mod( 'goldy_mex_our_services_main_title',$goldy_mex_default['options']['goldy_mex_our_services_main_title'] )); ?></h2>
                    <span class="separator"></span>
                </div>
            </div>
            <div class="services_main_content">
                <div class="services_inner_data">
                    <div class="widget_section_one">
                        <div class="widget_inner_data">
                            <div class="sercice_innerdata">
                                <div class="first_widget_heading">
                                    <h3><?php echo esc_html(get_theme_mod( 'goldy_mex_our_services_first_widget_title',$goldy_mex_default['options']['goldy_mex_our_services_first_widget_title'] )); ?></h3>
                                </div>
                                <div class="first_widget_desc">
                                    <p><?php echo esc_html(get_theme_mod('goldy_mex_our_services_first_widget_desc',$goldy_mex_default['options']['goldy_mex_our_services_first_widget_desc'])); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_section_two">
                        <div class="widget_inner_data">
                            <div class="service_hours_data">
                                <div class="two_widget_heading">
                                    <h3><?php echo esc_html(get_theme_mod('goldy_mex_our_services_second_widget_title',$goldy_mex_default['options']['goldy_mex_our_services_second_widget_title'])); ?></h3>
                                </div>
                                <div class="two_widget_desc">
                                    <p><?php echo esc_html(get_theme_mod('goldy_mex_our_services_second_widget_desc',$goldy_mex_default['options']['goldy_mex_our_services_second_widget_desc'])); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget_section_three">
                        <div class="widget_inner_td_data">
                            <div class="timetable_opening">
                                <div class="tdt_heading">
                                    <h3><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_title',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_title'])); ?></h3>
                                </div>
                                <div class="inner_table_data">
                                    <div class="timedate_data">
                                        <p><strong><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc1',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc1'])); ?></strong></p>
                                        <p><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc2',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc2'])); ?></p>
                                    </div>
                                    <div class="timedate_data">
                                        <p><strong><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc3',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc3'])); ?></strong></p>
                                        <p><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc4',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc4'])); ?></p>
                                    </div>
                                    <div class="timedate_data">
                                        <p><strong><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc5',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc5'])); ?></strong></p>
                                        <p><?php echo esc_html(get_theme_mod('goldy_mex_our_services_third_widget_desc6',$goldy_mex_default['options']['goldy_mex_our_services_third_widget_desc6'])); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
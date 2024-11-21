<?php
    /**
     * Plugin Name: Advance Widgets For Elementor
     * Description: Enhance your development creativity with this powerful plugin. All widgets included are completely free!
     * Version:     1.0.0
     * Author:      Noman Khan
     * Author URI:  https://www.linkedin.com/in/nomankhandeveloper/
     * Text Domain: advance-widgets-for-elementor
     */
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }

    function register_advance_widgets( $widgets_manager ) {
        require_once( __DIR__ . '/widgets/content-slider/content-slider.php' );
        $widgets_manager->register( new \Content_Slider_Widget() );
    }
    add_action( 'elementor/widgets/register', 'register_advance_widgets' );
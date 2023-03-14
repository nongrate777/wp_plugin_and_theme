<?php
/*
 * Plugin Name: Test PHP version
 * Description: The plugin will only work when using PHP 7.4+
 * Version:     1.0
 * Requires PHP: 7.4

 */

class Testing {
    function __construct() {
        add_action( 'admin_init', array( $this, 'check_version' ) );

        if ( ! self::compatible_version() ) {
            return;
        }
    }

    function activation_check() {
        if ( ! self::compatible_version() ) {
            deactivate_plugins( plugin_basename( __FILE__ ) );
            wp_die( __( 'This plugin requires PHP 7.4 or higher!', 'default' ) );
        }
    }

    function check_version() {
        if ( ! self::compatible_version() ) {
            if ( is_plugin_active( plugin_basename( __FILE__ ) ) ) {
                deactivate_plugins( plugin_basename( __FILE__ ) );
                add_action( 'admin_notices', array( $this, 'disabled_notice' ) );

                if ( isset( $_GET['activate'] ) ) {
                    unset( $_GET['activate'] );
                }
            }
        }
    }

    function disabled_notice() {
        echo '<strong>' . esc_html__( 'This plugin requires PHP 7.4 or higher! Your version - ', 'default' ) . PHP_VERSION . '</strong>';
    }

    static function compatible_version() {
        if ( version_compare(PHP_VERSION, '7.4', '<') ) {
            return false;
        }
        return true;
    }
}
global $test;
$test = new Testing();
register_activation_hook( __FILE__, array( 'Testing', 'activation_check' ) );


add_filter( 'the_title', function( $title ) {
    return $title . ' ' . get_the_date();
} );


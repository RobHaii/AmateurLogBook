<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @author 				Robel Hayelom and Biniam Kassahun
 * @link 				http://et3aa.com
 * @since 				1.0.0
 * @package 			AmateurLogBook
 *
 * @wordpress-plugin
 * Plugin Name: 		AmateurLogBook
 * Plugin URI: 			http://et3aa.com
 * Description: 		A simple way to manage and display Amateur Radio Station
 * Version: 			1.0.0
 * Author: 				Robel Hayelom And Biniam Kassahun
 * Author URI: 			http://et3aa.com
 * License: 			GPL-2.0+
 * License URI: 		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: 		now-amateur-log-book
 * Domain Path: 		/languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Used for referring to the plugin file or basename
if ( ! defined( 'NOW_HIRING_FILE' ) ) {
    define( 'NOW_HIRING_FILE', plugin_basename( __FILE__ ) );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-now-amateur-log-book-activator.php
 */
function Activate_AmateurLogBook() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-now-AmateurLogBook-activator.php';
    AmateurLogBook_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-now-AmateurLogBook-deactivator.php
 */
function Deactivate_AmateurLogBook() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-now-AmateurLogBook-deactivator.php';
    AmateurLogBook_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'Activate_AmateurLogBook' );
register_deactivation_hook( __FILE__, 'Deactivate_AmateurLogBook' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-now-AmateurLogBook.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 		1.0.0
 */
function run_Now_Hiring() {

    $plugin = new AmateurLogBook();
    $plugin->run();

}
run_Now_Hiring();

<?php
/*
Plugin Name: WP Plugin Starter
Plugin URI: http://github.com/webguymofassel/wppluginstarter
Description: A plugin starter template
Author: Md Mofassel Hossain
Author URI: http://bootscore.com
version: 1.0
License: GPL2
Text Domain: wppluginstarter
*/

// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

/*
 * BOOTSCORE PLUGIN CONSTANTS
 *
*/

if( !defined( 'WPPS_PLUGIN_BASE_FILE' ) )		
	define( 'WPPS_PLUGIN_BASE_FILE', __FILE__ );

if( !defined( 'WPPS_PLUGIN_BASE_DIR' ) ) 		
	define( 'WPPS_PLUGIN_BASE_DIR', dirname( WPPS_PLUGIN_BASE_FILE ) );

if( !defined( 'WPPS_PLUGIN_URL' ) ) 	
	define( 'WPPS_PLUGIN_URL', plugin_dir_url( WPPS_PLUGIN_BASE_FILE ) );

/*
 * To enqueue plugin styles
 *
*/
function wppluginstarter_plugin_load_scripts() {

    wp_enqueue_style('wppluginstarter_plugin_main_style', WPPS_PLUGIN_URL . 'style.css');

    wp_enqueue_script('wppluginstarter_plugin_mainjs', WPPS_PLUGIN_URL . 'js/functions.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', 'wppluginstarter_plugin_load_scripts');

/*
 * To enqueue plugin admin styles
 *
*/
function wppluginstarter_plugin_load_admin_scripts() {

    wp_enqueue_style('wppluginstarter_plugin_admin_style', WPPS_PLUGIN_URL . 'css/admin.css');

}
add_action('admin_head', 'wppluginstarter_plugin_load_admin_scripts');

/*
 * Bootscore Plguin functions
 *
*/
require_once( WPPS_PLUGIN_BASE_DIR . '/inc/functions.php' );


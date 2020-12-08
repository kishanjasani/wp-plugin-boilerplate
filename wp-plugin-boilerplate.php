<?php
/**
 * Plugin Name: WP Boilerplate For Plugin
 * Description: Boilerplate plugin to start write code with better structure, autoload class functionality and pre-written code for minify SCSS and JS.
 * Plugin URI:  https://github.com/kishanjasani/wp-plugin-boilerplate
 * Author:      Kishan
 * Author URI:  http://kishanjasani.wordpress.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.0
 * Text Domain: wp-plugin-boilerplate
 *
 * @package wp-plugin-boilerplate
 */

define( 'JK_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'JK_PLUGIN_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

// Defining settings constants.
define( 'JK_PLUGIN_SLUG', 'wp-plugin-boilerplate' );

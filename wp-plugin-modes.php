<?php
/**
 * Plugin Name:       WP Plugin Modes
 * Plugin URI:        https://github.com/mateab7593/wp-plugin-modes
 * Description:       A WordPress plugin skeleton with Figma plugin integration.
 * Version:           1.0.0
 * Author:            mateab7593
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-plugin-modes
 * Domain Path:       /languages
 *
 * @package WpPluginModes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WP_PLUGIN_MODES_VERSION', '1.0.0' );
define( 'WP_PLUGIN_MODES_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_PLUGIN_MODES_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once WP_PLUGIN_MODES_PLUGIN_DIR . 'includes/class-wp-plugin-modes.php';

/**
 * Begins execution of the plugin.
 */
function run_wp_plugin_modes() {
	$plugin = new WP_Plugin_Modes();
	$plugin->run();
}

run_wp_plugin_modes();

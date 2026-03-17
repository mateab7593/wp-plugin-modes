<?php
/**
 * The core plugin class.
 *
 * @package WpPluginModes
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WP_Plugin_Modes
 *
 * Defines internationalization, admin-specific hooks, and public-facing hooks.
 */
class WP_Plugin_Modes {

	/**
	 * The loader that's responsible for maintaining and registering all hooks.
	 *
	 * @var array $actions Actions registered with WordPress.
	 */
	protected $actions = array();

	/**
	 * Initialize the plugin.
	 */
	public function __construct() {
		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
	}

	/**
	 * Load the required dependencies for this plugin.
	 */
	private function load_dependencies() {
		// Future: include additional classes here.
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 */
	private function set_locale() {
		add_action(
			'plugins_loaded',
			function () {
				load_plugin_textdomain(
					'wp-plugin-modes',
					false,
					dirname( plugin_basename( WP_PLUGIN_MODES_PLUGIN_DIR . 'wp-plugin-modes.php' ) ) . '/languages/'
				);
			}
		);
	}

	/**
	 * Register all of the hooks related to the admin area.
	 */
	private function define_admin_hooks() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
	}

	/**
	 * Register all of the hooks related to the public-facing functionality.
	 */
	private function define_public_hooks() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_public_assets' ) );
	}

	/**
	 * Enqueue admin styles and scripts.
	 */
	public function enqueue_admin_assets() {
		wp_enqueue_style(
			'wp-plugin-modes-admin',
			WP_PLUGIN_MODES_PLUGIN_URL . 'assets/css/admin.css',
			array(),
			WP_PLUGIN_MODES_VERSION
		);

		wp_enqueue_script(
			'wp-plugin-modes-admin',
			WP_PLUGIN_MODES_PLUGIN_URL . 'assets/js/admin.js',
			array( 'jquery' ),
			WP_PLUGIN_MODES_VERSION,
			true
		);
	}

	/**
	 * Enqueue public styles and scripts.
	 */
	public function enqueue_public_assets() {
		wp_enqueue_style(
			'wp-plugin-modes',
			WP_PLUGIN_MODES_PLUGIN_URL . 'assets/css/public.css',
			array(),
			WP_PLUGIN_MODES_VERSION
		);

		wp_enqueue_script(
			'wp-plugin-modes',
			WP_PLUGIN_MODES_PLUGIN_URL . 'assets/js/public.js',
			array( 'jquery' ),
			WP_PLUGIN_MODES_VERSION,
			true
		);
	}

	/**
	 * Run the plugin.
	 */
	public function run() {
		// Hooks are registered in the constructor; nothing additional needed here.
	}
}

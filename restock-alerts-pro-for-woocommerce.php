<?php
/**
 * Plugin Name: Restock Alerts Pro for WooCommerce | Back In Stock Notify
 * Requires Plugins: woocommerce
 * Plugin URI: https://storeboostkit.com/product/restock-alerts-for-woocommerce/
 * Description: Add a Notify Me button for out of stock items. Store owner gets the list, user gets email when back in stock.
 * Version: 1.3.1
 * Author: Store Boost Kit
 * Author URI: https://storeboostkit.com/
 * Text Domain: restock-alerts-for-woocommerce
 * Domain Path: /languages/
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * WC requires at least: 9.6
 * WC tested up to: 10.4.0
 *
 * @package restock-alerts-for-woocommerce
 */

defined( 'ABSPATH' ) || exit;

if ( did_action( 'restaler_initialized' ) ) {
	deactivate_plugins( 'restock-alerts-for-woocommerce/restock-alerts-for-woocommerce.php' );
	register_activation_hook( __FILE__, 'restaler_on_plugin_activation' );
	return;
} else {
	if ( ! defined( 'RESTALER_PLUGIN_FILE' ) ) {
		define( 'RESTALER_PLUGIN_FILE', __FILE__ );
	}

	if ( ! defined( 'RESTALER_VERSION' ) ) {
		define( 'RESTALER_VERSION', '1.3.1' );
	}

	if ( ! defined( 'RESTALER_PATH' ) ) {
		define( 'RESTALER_PATH', plugin_dir_path( __FILE__ ) );
	}

	if ( ! defined( 'RESTALER_URL' ) ) {
		define( 'RESTALER_URL', plugin_dir_url( __FILE__ ) );
	}

	if ( ! class_exists( '\RESTALER\RESTALER' ) ) {
		require_once __DIR__ . '/includes/class-restaler.php';

		/**
		 * Returns the main instance of RESTALER.
		 *
		 * @since  1.0
		 * @return RESTALER
		 */
		function restaler() {
			return \RESTALER\RESTALER::instance();
		}

		// Global for backwards compatibility.
		$GLOBALS['restaler'] = restaler();		

		require_once dirname( RESTALER_PLUGIN_FILE ) . '/install.php';

		register_activation_hook( RESTALER_PLUGIN_FILE, array( 'RESTALER\Install', 'init' ) );
	}
}

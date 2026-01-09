<?php
/**
 * Onboarding welcome page.
 *
 * @package restock-alerts-for-woocommerce\admin\
 * @author Store Boost Kit <storeboostkit@gmail.com>
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="intro">
	<div class="header">
		<h2><?php esc_html_e( 'Welcome to Restock Alerts', 'restock-alerts-for-woocommerce' ); ?></h2>
		<p class="sub-heading"><strong><?php esc_html_e( 'Thank you for installing Restock Alerts Pro for WooCommerce!', 'restock-alerts-for-woocommerce' ); ?></strong></p>
	</div>

	<div class="section">
		<h3><?php esc_html_e( 'Why you\'ll love this?', 'restock-alerts-for-woocommerce' ); ?></h3>
		<ul>
			<li><strong><?php esc_html_e( 'Automatic restock alerts', 'restock-alerts-for-woocommerce' ); ?></strong><?php esc_html_e( ' - Notify customers instantly when items are back in stock', 'restock-alerts-for-woocommerce' ); ?></li>
			<li><strong><?php esc_html_e( 'Smart stock monitoring', 'restock-alerts-for-woocommerce' ); ?></strong><?php esc_html_e( ' - CRON scheduling & threshold alerts ensure no restock goes unnoticed', 'restock-alerts-for-woocommerce' ); ?></li>
			<li><strong><?php esc_html_e( 'Beautiful email campaigns', 'restock-alerts-for-woocommerce' ); ?></strong><?php esc_html_e( ' - Customizable templates with professional designs & dynamic mail tags', 'restock-alerts-for-woocommerce' ); ?></li>
			<li><strong><?php esc_html_e( 'Subscriber & email logs', 'restock-alerts-for-woocommerce' ); ?></strong><?php esc_html_e( ' - Track alerts, manage subscribers, and export lists in CSV', 'restock-alerts-for-woocommerce' ); ?></li>
			<li><strong><?php esc_html_e( 'Seamless WooCommerce integration', 'restock-alerts-for-woocommerce' ); ?></strong><?php esc_html_e( ' - Works with simple & variable products, no third-party services required', 'restock-alerts-for-woocommerce' ); ?></li>
		</ul>
	</div>
	<p><?php esc_html_e( 'In just a few steps, you\'ll be ready to set expiry rules for your products.', 'restock-alerts-for-woocommerce' ); ?></p>
</div>

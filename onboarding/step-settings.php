<?php
/**
 * Onboarding settings page.
 *
 * @package restock-alerts-for-woocommerce\admin\
 * @author Store Boost Kit <storeboostkit@gmail.com>
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

?>

<div class="settings">
	<h2><?php esc_html_e( 'Configure General Settings', 'restock-alerts-for-woocommerce' ); ?></h2>
	<p><?php esc_html_e( 'Set your default preferences for product expiry. You can always change these later in the plugin settings.', 'restock-alerts-for-woocommerce' ); ?></p>
	<div class="section setting-fields">
		<form>
			<?php wp_nonce_field( 'stobokit_save_settings', 'stobokit_save_settings_nonce' ); ?>
			<div class="field-wrap">
				<label><?php esc_html_e( 'From Name', 'restock-alerts-for-woocommerce' ); ?></label>
				<input type="text" min="1" name="stobokit_email_from_name">
			</div>
			<div class="field-wrap">
				<label><?php esc_html_e( 'From Email Address', 'restock-alerts-for-woocommerce' ); ?></label>				
				<input type="text" min="1" name="stobokit_email_from_email">
			</div>
			<div class="field-wrap">
				<label><?php esc_html_e( 'Enable Follow Up', 'restock-alerts-for-woocommerce' ); ?></label>				
				<input type="checkbox" value="1" name="restaler_enable_followup">
			</div>
			<div class="field-wrap">
				<label><?php esc_html_e( 'Discount Amount', 'restock-alerts-for-woocommerce' ); ?></label>				
				<input type="number" value="20" name="restaler_discount_amount">
			</div>
			<div class="field-wrap">
				<label><?php esc_html_e( 'Coupon Expires In', 'restock-alerts-for-woocommerce' ); ?></label>				
				<input type="number" min="1" name="restaler_coupon_expires_in">
			</div>
			<span class="save-general-settings btn btn-green"><?php esc_html_e( 'Save', 'restock-alerts-for-woocommerce' ); ?></span>

			<span class="settings-notice below"></span>
		</form>
	</div>
</div>

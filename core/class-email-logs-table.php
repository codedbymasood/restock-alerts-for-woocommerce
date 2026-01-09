<?php
/**
 * Email logs table.
 *
 * @package restock-alerts-for-woocommerce\core\
 * @author Store Boost Kit <storeboostkit@gmail.com>
 * @version 1.0
 */

namespace STOBOKIT;

defined( 'ABSPATH' ) || exit;

/**
 * Cron table.
 */
class Email_Logs extends \STOBOKIT\List_Table {
	/**
	 * Constructor.
	 *
	 * @param array $args Arguements.
	 */
	public function __construct( $args = array() ) {
		parent::__construct( $args );

		add_filter( 'email_logs_table_columns', array( $this, 'custom_columns' ) );
		add_filter( 'email_logs_table_sortable_columns', array( $this, 'sortable_columns' ) );
	}

	/**
	 * Custom columns.
	 *
	 * @return array
	 */
	public function custom_columns() {
		return array(
			'cb'      => '<input type="checkbox" />',
			'id'      => esc_html__( 'ID', 'restock-alerts-for-woocommerce' ),
			'email'   => esc_html__( 'Email', 'restock-alerts-for-woocommerce' ),
			'subject' => esc_html__( 'Subject', 'restock-alerts-for-woocommerce' ),
			'sent'    => esc_html__( 'Sent', 'restock-alerts-for-woocommerce' ),
			'sent_at' => esc_html__( 'Sent At', 'restock-alerts-for-woocommerce' ),
		);
	}

	/**
	 * Sortable columns.
	 *
	 * @return array
	 */
	public function sortable_columns() {
		return array(
			'id'      => array( 'id', true ),
			'email'   => array( 'email', false ),
			'sent'    => array( 'sent', false ),
			'sent_at' => array( 'sent_at', false ),
		);
	}

	/**
	 * Subject column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_subject( $item ) {
		return isset( $item['subject'] ) ? $item['subject'] : '';
	}

	/**
	 * Email column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_email( $item ) {
		return isset( $item['to_email'] ) ? $item['to_email'] : '';
	}

	/**
	 * Status column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_sent( $item ) {
		return $item['sent'] ? $item['sent'] : '-';
	}

	/**
	 * Created at column.
	 *
	 * @param array $item Table row item.
	 * @return string
	 */
	public function column_sent_at( $item ) {
		return $item['sent_at'] ? $item['sent_at'] : $item['sent_at'];
	}
}

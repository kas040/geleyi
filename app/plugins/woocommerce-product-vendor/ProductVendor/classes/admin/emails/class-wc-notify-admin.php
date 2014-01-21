<?php

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * New Order Email
 *
 * An email sent to the admin when a new product is created.
 *
 * @class    WC_Email_Notify_Admin
 * @version  2.0.0
 * @extends  WC_Email
 * @author   WooThemes
 * @package  WooCommerce/Classes/Emails
 */


class WC_Email_Notify_Admin extends WC_Email
{


	/**
	 * Constructor
	 */
	function __construct()
	{
		$this->id          = 'admin_new_vendor_product';
		$this->title       = __( 'New Vendor Product', 'wc_product_vendor' );
		$this->description = __( 'New order emails are sent when a new product is submitted by a vendor', 'wc_product_vendor' );

		$this->heading = __( 'New product submitted: {product_name}', 'wc_product_vendor' );
		$this->subject = __( '[{blogname}] New product submitted by {vendor_name} - {product_name}', 'wc_product_vendor' );

		$this->template_base  = dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/views/emails/';
		$this->template_html  = 'new-product.php';
		$this->template_plain = 'new-product.php';

		// Triggers for this email
		add_action( 'transition_post_status', array( $this, 'trigger' ), 10, 3 );

		// Call parent constuctor
		parent::__construct();

		// Other settings
		$this->recipient = $this->get_option( 'recipient' );

		if ( !$this->recipient )
			$this->recipient = get_option( 'admin_email' );
	}


	/**
	 * trigger function.
	 *
	 * @access public
	 * @return void
	 *
	 * @param unknown $order_id
	 */
	function trigger( $post_id, $post )
	{
		if ( !PV_Vendors::is_vendor( $post->post_author ) ) {
			return;
		}

		$this->find[ ]      = '{product_name}';
		$this->product_name = $post->post_title;
		$this->replace[ ]   = $this->product_name;

		$this->find[ ]     = '{vendor_name}';
		$this->vendor_name = PV_Vendors::get_vendor_shop_name( $post->post_author );
		$this->replace[ ]  = $this->vendor_name;

		$this->post_id = $post_id;

		$this->send( $this->get_recipient(), $this->get_subject(), $this->get_content(), $this->get_headers(), $this->get_attachments() );
	}

	/**
	 * get_content_html function.
	 *
	 * @access public
	 * @return string
	 */
	function get_content_html()
	{
		ob_start();
		woocommerce_get_template( $this->template_html, array(
															 'product_name'  => $this->product_name,
															 'vendor_name'   => $this->vendor_name,
															 'post_id'       => $this->post_id,
															 'email_heading' => $this->get_heading()
														), $this->template_base, $this->template_base );

		return ob_get_clean();
	}


	/**
	 * get_content_plain function.
	 *
	 * @access public
	 * @return string
	 */
	function get_content_plain()
	{
		ob_start();
		woocommerce_get_template( $this->template_plain, array(
															  'product_name'  => $this->product_name,
															  'vendor_name'   => $this->vendor_name,
															  'post_id'       => $this->post_id,
															  'email_heading' => $this->get_heading()
														 ), $this->template_base, $this->template_base );

		return ob_get_clean();
	}


	/**
	 * Initialise Settings Form Fields
	 *
	 * @access public
	 * @return void
	 */
	function init_form_fields()
	{
		$this->form_fields = array(
			'enabled'    => array(
				'title'   => __( 'Enable/Disable', 'wc_product_vendor' ),
				'type'    => 'checkbox',
				'label'   => __( 'Enable this email notification', 'wc_product_vendor' ),
				'default' => 'yes'
			),
			'recipient'  => array(
				'title'       => __( 'Recipient(s)', 'woocommerce' ),
				'type'        => 'text',
				'description' => sprintf( __( 'Enter recipients (comma separated) for this email. Defaults to <code>%s</code>.', 'woocommerce' ), esc_attr( get_option( 'admin_email' ) ) ),
				'placeholder' => '',
				'default'     => ''
			),
			'subject'    => array(
				'title'       => __( 'Subject', 'wc_product_vendor' ),
				'type'        => 'text',
				'description' => sprintf( __( 'This controls the email subject line. Leave blank to use the default subject: <code>%s</code>.', 'wc_product_vendor' ), $this->subject ),
				'placeholder' => '',
				'default'     => ''
			),
			'heading'    => array(
				'title'       => __( 'Email Heading', 'wc_product_vendor' ),
				'type'        => 'text',
				'description' => sprintf( __( 'This controls the main heading contained within the email notification. Leave blank to use the default heading: <code>%s</code>.', 'wc_product_vendor' ), $this->heading ),
				'placeholder' => '',
				'default'     => ''
			),
			'email_type' => array(
				'title'       => __( 'Email type', 'wc_product_vendor' ),
				'type'        => 'select',
				'description' => __( 'Choose which format of email to send.', 'wc_product_vendor' ),
				'default'     => 'html',
				'class'       => 'email_type',
				'options'     => array(
					'plain'     => __( 'Plain text', 'wc_product_vendor' ),
					'html'      => __( 'HTML', 'wc_product_vendor' ),
					'multipart' => __( 'Multipart', 'wc_product_vendor' ),
				)
			)
		);
	}


}

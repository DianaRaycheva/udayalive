<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php
/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
<!--p><?php #printf( __( "Recent order with %s ", 'woocommerce' ), get_option( 'blogname' ) ); ?></p-->
<!--h2 style="text-align: center;">Order Details</h2>
<img style="display: inline-block;width: 100%;" src="https://udayalive.com/wp-content/uploads/2015/12/devider.png" alt="" /-->
<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
#do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
#do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>
<div style="display: inline-block;width: 49%;float: left;">
<h2 style="text-align: center;">Ticket Holder Information</h2>
<img style="display: inline-block;width: 100%;" src="https://udayalive.com/wp-content/uploads/2015/12/devider.png" alt="" />
<?php
kia_display_email_order_meta( $order, $sent_to_admin, $plain_text );
?></div>
<!--span> +</span--><?php


#$billing_first_name =  get_post_meta($wpo_wcpdf->export->order->id,'_billing_first_name',true);
#echo get_post_meta($wpo_wcpdf->export->order->id,'_billing_first_name',true);
/*$wpo_wcpdf->billing_email();
$wpo_wcpdf->billing_phone();
$wpo_wcpdf->payment_method();
$wpo_wcpdf->shipping_method();*/
#$billing_last_name = get_post_meta($wpo_wcpdf->export->order->id,'_billing_last_name',true);
#$billing_company = get_post_meta($wpo_wcpdf->export->order->id,'_billing_company',true);
#$billing_address = get_post_meta($wpo_wcpdf->export->order->id,'_billing_address_1',true);
#$billing_address2 = get_post_meta($wpo_wcpdf->export->order->id,'_billing_address_2',true);
#$billing_city = get_post_meta($wpo_wcpdf->export->order->id,'_billing_city',true);
#$billing_postcode = get_post_meta($wpo_wcpdf->export->order->id,'_billing_postcode',true);
#$billing_country = get_post_meta($wpo_wcpdf->export->order->id,'_billing_country',true);
#$billing_state = get_post_meta($wpo_wcpdf->export->order->id,'_billing_state',true);
#$billing_email = get_post_meta($wpo_wcpdf->export->order->id,'_billing_email',true);
#$billing_phone = get_post_meta($wpo_wcpdf->export->order->id,'_billing_phone',true);
#$billing_paymethod = get_post_meta($wpo_wcpdf->export->order->id,'_payment_method',true);

#echo '<span>++</span>';
#echo $billing_first_name;
#echo $billing_last_name;
#echo $billing_company;
#echo $billing_address;
#echo $billing_city;
#echo $billing_postcode;
#echo $billing_country;
#echo $billing_state;
#echo $billing_email;
#echo $billing_phone;
#echo $billing_paymethod;
#get_billing_address();

?> <div style="display: inline-block;width: 49%;float: right;"><h2 style="text-align: center">Billing Information</h2>
<img style="display: inline-block;width: 100%;" src="https://udayalive.com/wp-content/uploads/2015/12/devider.png" alt="" />
<p><strong>First name:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_first_name', true ); ?> </p> <?php

$order = new WC_Order($order_id);

// here the customer data
$customer = get_userdata($order->customer_user);
echo $customer->display_name;

?><p><strong>Last name:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_last_name', true ); ?> </p> <?php
	
?><p><strong>E-mail:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_email', true ); ?> </p> <?php
	
?><p><strong>Phone:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_phone', true ); ?> </p> <?php

?><p><strong>Country:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_country', true ); ?> </p> <?php
	
?><p><strong>City:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_city', true ); ?> </p> <?php
	
?><p><strong>Address:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_address_1', true ); ?> </p> <?php
	
?><p><strong>Postcode:</strong> <?php
$customer_id = get_current_user_id();
print get_user_meta( $customer_id, 'billing_field_779', true ); ?> </p> </div><?php

?><p><strong>Date:</strong> <?php
$customer_id = get_current_user_id();
echo date_i18n( "Y-m-d", strtotime( $order_completed_date . ' + ' . $expiry . ' DAY' ) ); ?> </p> </div><?php

 
	
/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_order_details', $order ); ?></div></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {

$("#shiptobilling-checkbox").change(function(){ //capture when the checkbox is clicked
    if($(this).is(":checked")){ // check if it is checked or not (goto else)
		$("[id^='billing_']").each(function(){ // for each input whose ID starts with shipping_
			data=$(this).attr("id") // get the full id of the input - e.g. shipping_first_name
			tmpID = data.split('billing_'); // split the ID so we get an array with e.g. a blank first element and a second element with the value first_name - tmpID[0]=nothing and tmpID[1]=the input ID with shipping_ removed
			$(this).val($("#shipping_"+tmpID[1]).val()) // set the value of the corresponding shipping input with the value of the corresponding billing input - as above tmpID[1] would equal first_name 
		})
    }else{
		$("[id^='billing_']").each(function(){
			$(this).val("") // checkbox is not checked so clear all inputs whose ID starts with shipping_
		})
      }
}) 


});

</script>
<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>
<!--info here-->
<!--div style="text-align:center;background: rgba(255,255,255,.9);" class="alert" role="alert"><h2 style="font-family:bebas-neue; text-align:center;">TICKET HOLDER’S NAME</h2>
<span style="color:rgba(0,0,0,.7);font-weight:300;font-family:proxima-nova; font-size:20px;display:inline-block;margin-bottom:15px;">Upon hotel check in you must present ID that exactly matches ticket holder’s name entered here.</span><br />
<input style="width:400px;" type="text" placeholder="Your Ticket Holder's name" />
</div-->
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
			<?php kia_extra_checkout_fields(); ?>
				<?php #do_action( 'woocommerce_checkout_billing' ); ?>
					<p class="form-row" id="shiptobilling">
						<input id="shiptobilling-checkbox" class="input-checkbox" type="checkbox" name="shiptobilling" value="1">
						<label style="display:inline-block;" for="shiptobilling-checkbox" class="checkbox">Copy to Billing</label>
					</p>
				<!--input id="shiptobilling-checkbox" class="input-checkbox" type="checkbox" name="shiptobilling" value="1" onchange="onchangeHandler(this)"-->
	<?php #kia_extra_tos_checkout_fields(); ?>
	<h3 style="text-align:center;">TERMS & CONDITIONS</h3>
	<section class="tos-info">
	<ul>
		<li>Once you purchase, you will receive an order confirmation. If you do not see this, please check your junk/spam folder. If still no luck, please email <a href="mailto:tickets@udaya.com">tickets@udaya.com</a> with your full name and date of purchase.</li>
		<li>IDENTIFICATION matching the name of the TICKET HOLDER is REQUIRED for hotel check in and entry to the festival.</li>
		<li>All ticket packages grant full access to the 5-day festival.</li>
		<li>Advertised yoga instructors, musicians, and artists are confirmed at this time, but are subject to change.</li>
		<li>Event is rain or shine.</li>
		<li>Tickets cancelled by April 30, 2016 will be refunded except for $100.00 cancellation fee. Cancellation requests should be sent to <a href="mailto:totickets@udaya.com">totickets@udaya.com</a>. No <a href="mailto:totickets@udaya.com">cancelations</a> after May 01, 2016 will be accepted.</li>
		<li>For ticket and checkout inquiries please email <a href="mailto:tickets@udaya.com">tickets@udaya.com</a>.</li>
	</ul>
	
	<form id="tos" onsubmit="return checkForm(this);">
	<?php #tos_checkout_field( $checkout ); ?>
	<?php tos_extra_checkout_fields(); ?>
	<!--input id="field_terms" type="checkbox" required name="terms"><span style="margin-left:5px;">I have read and agree to the above <u>Terms & Conditions</u></span-->
	<!--input type="checkbox" name="q" id="a-0" required /-->
	</form>
	 
	 <!--form action="../" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('please agree'); return false; }">
    <input type="checkbox" name="checkbox" value="check" id="agree" />
    <input type="submit" name="" value="" />
</form-->
	 
	</section>
	
			</div>

			<div class="col-2">
				<?php #shipping details form ?>
				<?php #do_action( 'woocommerce_checkout_shipping' ); ?>
				
				<?php #milen this code does not work because the form and the endif it is not closed before the checkout review ?>
				<!--h3 id="order_review_heading"><?php #_e( 'Your order', 'woocommerce' ); ?></h3-->
				<?php #do_action( 'woocommerce_checkout_order_review' ); ?>
				<?php #do_action( 'woocommerce_checkout_after_order_review' ); ?>
				<?php #do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php #testing, works - closed if statement ?>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
				<?php #do_action( 'woocommerce_checkout_billing' ); ?>
				<h3 style="text-align:center;margin-top:61px;" id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
				<!--div class="" style="margin-bottom:12px;">&nbsp;</div-->
	<?php endif; ?>
	<?php #do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
				
			</div>
		</div>
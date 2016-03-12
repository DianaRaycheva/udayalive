<?php global $product; ?>
<li style="display: inline-block;" class="col-sm-4">
	<a style="position: relative" href="<?php echo esc_url( get_permalink( $product->id ) ); ?>">
		<div><?php 
		echo do_action( 'woocommerce_before_shop_loop_item_title' ); ?></div>
		<div class="product-info"><span><?php echo esc_attr( $product->get_title() ); ?></span>
		<span><?php echo $product->get_price_html(); ?></span></div>
		<!--<span class="product-title"><?php echo $product->get_title(); ?></span>-->
	</a>
	<?php if ( ! empty( $show_rating ) ) echo $product->get_rating_html(); ?>
</li>

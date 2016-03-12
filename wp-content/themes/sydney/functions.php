<?php
/**
 * Sydney functions and definitions
 *
 * @package Sydney
 */


if ( ! function_exists( 'sydney_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sydney_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sydney, use a find and replace
	 * to change 'sydney' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sydney', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Content width
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1170; /* pixels */
	}

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('sydney-large-thumb', 830);
	add_image_size('sydney-medium-thumb', 550, 400, true);
	add_image_size('sydney-small-thumb', 230);
	add_image_size('sydney-service-thumb', 350);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sydney' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sydney_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sydney_setup
add_action( 'after_setup_theme', 'sydney_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sydney_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sydney' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$widget_areas = get_theme_mod('footer_widget_areas', '3');
	for ($i=1; $i<=$widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'sydney' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	//Register the front page widgets
	if ( function_exists('siteorigin_panels_activate') ) {
		register_widget( 'Sydney_List' );
		register_widget( 'Sydney_Services_Type_A' );
		register_widget( 'Sydney_Services_Type_B' );
		register_widget( 'Sydney_Facts' );
		register_widget( 'Sydney_Clients' );
		register_widget( 'Sydney_Testimonials' );
		register_widget( 'Sydney_Skills' );
		register_widget( 'Sydney_Action' );
		register_widget( 'Sydney_Video_Widget' );
		register_widget( 'Sydney_Social_Profile' );
		register_widget( 'Sydney_Employees' );
		register_widget( 'Sydney_Latest_News' );
		register_widget( 'Sydney_Contact_Info' );
	}

}
add_action( 'widgets_init', 'sydney_widgets_init' );

/**
 * Load the front page widgets.
 */
if ( function_exists('siteorigin_panels_activate') ) {
	require get_template_directory() . "/widgets/fp-list.php";
	require get_template_directory() . "/widgets/fp-services-type-a.php";
	require get_template_directory() . "/widgets/fp-services-type-b.php";
	require get_template_directory() . "/widgets/fp-facts.php";
	require get_template_directory() . "/widgets/fp-clients.php";
	require get_template_directory() . "/widgets/fp-testimonials.php";
	require get_template_directory() . "/widgets/fp-skills.php";
	require get_template_directory() . "/widgets/fp-call-to-action.php";
	require get_template_directory() . "/widgets/video-widget.php";
	require get_template_directory() . "/widgets/fp-social.php";
	require get_template_directory() . "/widgets/fp-employees.php";
	require get_template_directory() . "/widgets/fp-latest-news.php";
	require get_template_directory() . "/widgets/contact-info.php";
}

/**
 * Enqueue scripts and styles.
 */
function sydney_scripts() {

	/*if ( get_theme_mod('body_font_name') !='' ) {
	    wp_enqueue_style( 'sydney-body-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('body_font_name')) );
	} else {
	    wp_enqueue_style( 'sydney-body-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600');
	}

	if ( get_theme_mod('headings_font_name') !='' ) {
	    wp_enqueue_style( 'sydney-headings-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('headings_font_name')) );
	} else {
	    wp_enqueue_style( 'sydney-headings-fonts', '//fonts.googleapis.com/css?family=Raleway:400,500,600');
	}*/
	
	
	wp_enqueue_style( 'sydney-style', get_stylesheet_uri() );

	#wp_enqueue_style( 'sydney-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
	
	wp_enqueue_style( 'sydney-ie9', get_template_directory_uri() . '/css/ie9.css', array( 'sydney-style' ) );
	wp_style_add_data( 'sydney-ie9', 'conditional', 'lte IE 9' );
	
	#moved to the footer - test-footer
	#wp_enqueue_script( 'sydney-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'),'', true );
	#wp_enqueue_script( 'sydney-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'),'', true );
	#wp_enqueue_script( 'sydney-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	#wp_enqueue_script( 'custom-added', get_template_directory_uri() . '/js/custom.js', '', true );

	/*if ( get_theme_mod('blog_layout') == 'masonry-layout' && (is_home() || is_archive()) ) {

		wp_enqueue_script( 'sydney-masonry-init', get_template_directory_uri() . '/js/masonry-init.js', array('jquery-masonry'),'', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
	#wp_enqueue_script( 'responsive-kris', get_template_directory_uri() );
}
add_action( 'wp_enqueue_scripts', 'sydney_scripts' );

/**
 * Enqueue Bootstrap
 */
function sydney_enqueue_bootstrap() {
	wp_enqueue_style( 'sydney-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'sydney_enqueue_bootstrap', 9 );

/**
 * Change the excerpt length
 */
function sydney_excerpt_length( $length ) {

  $excerpt = get_theme_mod('exc_lenght', '55');
  return $excerpt;

}
add_filter( 'excerpt_length', 'sydney_excerpt_length', 999 );

/**
 * Blog layout
 */
function sydney_blog_layout() {
	$layout = get_theme_mod('blog_layout','classic');
	return $layout;
}

/**
 * Menu fallback
 */
function sydney_menu_fallback() {
	echo '<a class="menu-fallback" href="' . admin_url('nav-menus.php') . '">' . __( 'Create your menu here', 'sydney' ) . '</a>';
}

/**
 * Header image overlay
 */
function sydney_header_overlay() {
	$overlay = get_theme_mod( 'hide_overlay', 0);
	if ( !$overlay ) {
		echo '<div class="overlay"></div>';
	}
}

/**
 * Polylang compatibility
 */
if ( function_exists('pll_register_string') ) :
function sydney_polylang() {
	for ( $i=1; $i<=5; $i++) {
		pll_register_string('Slide title ' . $i, get_theme_mod('slider_title_' . $i), 'Sydney');
		pll_register_string('Slide subtitle ' . $i, get_theme_mod('slider_subtitle_' . $i), 'Sydney');
	}
	pll_register_string('Slider button text', get_theme_mod('slider_button_text'), 'Sydney');
	pll_register_string('Slider button URL', get_theme_mod('slider_button_url'), 'Sydney');
}
add_action( 'admin_init', 'sydney_polylang' );
endif;

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Page builder support
 */
require get_template_directory() . '/inc/page-builder.php';

/**
 * Slider
 */
require get_template_directory() . '/inc/slider.php';

/**
 * Styles
 */
require get_template_directory() . '/inc/styles.php';

/**
 * Theme info
 */
require get_template_directory() . '/inc/theme-info.php';

/**
 * Woocommerce basic integration
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 *TGM Plugin activation.
 */
require_once dirname( __FILE__ ) . '/plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'sydney_recommend_plugin' );
function sydney_recommend_plugin() {

    $plugins = array(
        array(
            'name'               => 'Page Builder by SiteOrigin',
            'slug'               => 'siteorigin-panels',
            'required'           => false,
        ),
        array(
            'name'               => 'Types - Custom Fields and Custom Post Types Management',
            'slug'               => 'types',
            'required'           => false,
        ),
    );

    tgmpa( $plugins);

}

#woocommerce addons udaya
#define('WOOCOMMERCE_USE_CSS', false);
#removes ordering and quantity from products
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
#remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
#remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
#add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
#add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

#add woocommerce support to the theme
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

#removes related products from the product page
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

#changes add to cart text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
function woo_custom_cart_button_text() {
        return __( 'Proceed to checkout', 'woocommerce' );
}

add_filter ('add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}
#removes success add to cart notification at checkout

#milen custom shortcodes (homepage menu)
function homepage_menu($atts) {
	return '
	<!--menu section-->
<div class="ulhome-menu-container">
<div class="row">
<!--item 1-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/experience"/><img src="https://udayalive.com/wp-content/uploads/2016/03/get-inv.jpg"  alt="Event Info" />
<h5 class="menu-name">Experience</h5>
</a></div><!--/item 1-->

<!--item 2-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/teachers/"><img src="https://udayalive.com/wp-content/uploads/2016/03/exp.jpg" alt="Yoga Teachers" />
<h5 class="menu-name">Teachers</h5>
</a></div><!--/item 2-->

<!--item 3-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/musicians/"><img src="https://udayalive.com/wp-content/uploads/2015/12/musicians-picture.jpg" alt="musicians" />
<h5 class="menu-name">Musicians</h5>
</a></div><!--/item 3-->

<!--item 4-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://www.udaya.com/" target="_blank"><img src="https://udayalive.com/wp-content/uploads/2016/02/practice-inline.jpg" alt="Practise online" />
<h5 class="menu-name">Practice online</h5>
</a></div><!--/item 4-->

<!--item 5-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/travel-and-lodging/"><img src="https://udayalive.com/wp-content/uploads/2016/03/rila-resort.jpg" alt="Travel and Lodging" />
<h5 class="menu-name">Travel and Lodging</h5>
</a></div><!--/item 5-->

<!-- item 6-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/rila-resort/"><img src="https://udayalive.com/wp-content/uploads/2016/03/rr.jpg" alt="Rila Resort" />
<h5 class="menu-name">Rila Resort</h5>
</a></div><!--/item 6-->

<!--item 7-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/purchasepass/"><img src="https://udayalive.com/wp-content/uploads/2016/01/purchasepass-1.jpg" alt="Purchase pass" />
<h5 class="menu-name">Purchase Pass</h5>
</a></div><!--/item 7-->

<!--item 8-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/get-involved/"><img src="https://udayalive.com/wp-content/uploads/2016/03/exp-2.jpg" alt="Get Involved" />
<h5 class="menu-name">Get Involved</h5>
</a></div><!--/item 8-->

<!--item 9-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/faq/"><img src="https://udayalive.com/wp-content/uploads/2016/03/faq-menu.jpg" alt="FAQ" />
<h5 class="menu-name">F.A.Q</h5>
</a><!--/item 9-->
<div><!-- end row-->
</div><!--/menu-->
	';
};
add_shortcode('homepage_menu', 'homepage_menu');

#milen custom checkout field woocommerce
function kia_filter_checkout_fields($fields){
    $fields['extra_fields'] = array(
            'shipping_first_name' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'First Name' ),
				'class' => array('ul-field')
                ),
			'shipping_last_name' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Last Name' ),
				'class' => array('ul-field'),
                ),
			'shipping_email' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Email Address' ),
				'class' => array('ul-field'),
                ),
			'shipping_phone' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Phone' ),
				'class' => array('ul-field'),
                ),
            /*'ticket_country' => array(
                'type' => 'country',
                'required'      => true,
                'label'    => __( 'Country', 'woocommerce' ),
				'class'    => array( 'ul-field form-row-wide', 'address-field', 'update_totals_on_change'),
                ),*/
            'shipping_country' => array(
                'type'     => 'country',
                'label'    => __( 'Country'),
                'required' => true,
                'class'    => array( 'ul-field'),
            ),
			'shipping_city' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Town / City' ),
				'class' => array('ul-field'),
                ),
			'shipping_address_1' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Address' ),
				'class' => array('ul-field'),
                ),
			'shipping_field_779' => array(
                'type' => 'text',
                'required'      => true,
                'label' => __( 'Postcode' ),
				'class' => array('ul-field'),
                )
            
            );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'kia_filter_checkout_fields' );

// display the extra field on the checkout form
function kia_extra_checkout_fields(){ 

    $checkout = WC()->checkout(); ?>

    <div class="extra-fields">
    <h3 style="text-align:center;"><?php _e( 'TICKET HOLDER INFORMATION' ); ?></h3>

    <?php foreach ( $checkout->checkout_fields['extra_fields'] as $key => $field ) : ?>

            <?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

        <?php endforeach; ?>
    </div>

<?php }
#add_action( 'woocommerce_checkout_after_customer_details' ,'kia_extra_checkout_fields' );

// save the extra field when checkout is processed
function kia_save_extra_checkout_fields( $order_id, $posted ){
    if( isset( $posted['shipping_first_name'] ) ) {
        update_post_meta( $order_id, '_shipping_first_name', sanitize_text_field( $posted['shipping_first_name'] ) );
    }
    if( isset( $posted['shipping_last_name'] ) ) {
        update_post_meta( $order_id, '_shipping_last_name', sanitize_text_field( $posted['shipping_last_name'] ) );
    }
    if( isset( $posted['shipping_email'] ) ) {
        update_post_meta( $order_id, '_shipping_email', sanitize_text_field( $posted['shipping_email'] ) );
    }
    if( isset( $posted['shipping_phone'] ) ) {
        update_post_meta( $order_id, '_shipping_phone', sanitize_text_field( $posted['shipping_phone'] ) );
    }
    if( isset( $posted['shipping_country'] ) ) {
        update_post_meta( $order_id, '_shipping_country', sanitize_text_field( $posted['shipping_country'] ) );
    }
    if( isset( $posted['shipping_city'] ) ) {
        update_post_meta( $order_id, '_shipping_city', sanitize_text_field( $posted['shipping_city'] ) );
    }
    if( isset( $posted['shipping_address_1'] ) ) {
        update_post_meta( $order_id, '_shipping_address_1', sanitize_text_field( $posted['shipping_address_1'] ) );
    }
    if( isset( $posted['shipping_field_779'] ) ) {
        update_post_meta( $order_id, '_shipping_field_779', sanitize_text_field( $posted['shipping_field_779'] ) );
    }
}
add_action( 'woocommerce_checkout_update_order_meta', 'kia_save_extra_checkout_fields', 10, 2 );

// display the extra data in the order admin panel
function kia_display_order_data_in_admin( $order ){  ?>
    <div class="order_data_column">
        <h4><?php _e( 'TICKET HOLDER INFORMATION', 'woocommerce' ); ?></h4>
        <?php 
            echo '<p><strong>' . __( 'First Name' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_first_name', true ) . '</p>';
            echo '<p><strong>' . __( 'Last Name' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_last_name', true ) . '</p>';
            echo '<p><strong>' . __( 'Email Address' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_email', true ) . '</p>';
            echo '<p><strong>' . __( 'Phone' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_phone', true ) . '</p>';
            echo '<p><strong>' . __( 'Country' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_country', true ) . '</p>';
            echo '<p><strong>' . __( 'City' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_city', true ) . '</p>';
            echo '<p><strong>' . __( 'Address' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_address_1', true ) . '</p>';
            echo '<p><strong>' . __( 'Postcode' ) . ':</strong>' . get_post_meta( $order->id, '_shipping_field_779', true ) . '</p>';
?>
    </div>
<?php }
add_action( 'woocommerce_admin_order_data_after_order_details', 'kia_display_order_data_in_admin' );

#show the ticket holder information in the emails
function kia_display_email_order_meta( $order, $sent_to_admin, $plain_text ) {
    $shipping_first_name = get_post_meta( $order->id, '_shipping_first_name', true );
    $shipping_last_name = get_post_meta( $order->id, '_shipping_last_name', true );
    $shipping_email = get_post_meta( $order->id, '_shipping_email', true );
    $shipping_phone = get_post_meta( $order->id, '_shipping_phone', true );
    $shipping_country = get_post_meta( $order->id, '_shipping_country', true );
    $shipping_last_name = get_post_meta( $order->id, '_shipping_last_name', true );
    $shipping_city = get_post_meta( $order->id, '_shipping_city', true );
    $shipping_address_1 = get_post_meta( $order->id, '_shipping_address_1', true );
    $shipping_field_779 = get_post_meta( $order->id, '_shipping_field_779', true );
    if( $plain_text ){
        echo 'First Name' . $shipping_first_name . '';
        echo 'Last Name' . $shipping_last_name . '';
        echo 'E-mail:' . $shipping_email . '';
        echo 'Phone' . $shipping_phone . '';
        echo 'Country' . $shipping_country . '';
        echo 'City' . $shipping_city . '';
        echo 'Address' . $shipping_address_1 . '';
        echo 'Postcode' . $shipping_field_779 . '';
    } else {
        echo '
        <!--h2 style="text-align:center;">Ticket holder Information:</h2><img class="maildivider" src="https://udayalive.com/wp-content/uploads/2015/12/devider.png" alt=""-->
        <div class="info-field">
        <p><strong> First Name:</strong> '  . $shipping_first_name . '</p>
        <p><strong> Last Name:</strong> '  . $shipping_last_name . '</p>
		<p><strong> E-mail:</strong> '  . $shipping_email . '</p>
		<p><strong> Phone:</strong> '  . $shipping_phone . '</p>
		</div>
		<div class="info-field">
		<p><strong> Country:</strong> '  . $shipping_country . '</p>
		<p><strong> City:</strong> '  . $shipping_city . '</p>
		<p><strong> Address:</strong> '  . $shipping_address_1 . '</p>
		<p><strong> Postcode:</strong> '  . $shipping_field_779 . '</p>
		</div>
';
    }
}
#add_action('woocommerce_email_customer_details', 'kia_display_email_order_meta', 30, 3 );

#milen checkbox field for the ToS at the checkout page
function tos_filter_checkout_fields($fields){
    $fields['tos_extra_fields'] = array(
            'tos_field_checkbox' => array(
                'type' => 'checkbox',
                'required'      => true,
                'label' => __( 'I have read and agree to the above terms' ),
				'class' => array('ul_tos'),
                ),
            );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'tos_filter_checkout_fields' );

function tos_extra_checkout_fields(){ 

    $checkout = WC()->checkout(); ?>

    <div class="tos-extra-fields">
    <!--h3 style="text-align:center;"><?php _e( '' ); ?></h3-->

    <?php foreach ( $checkout->checkout_fields['tos_extra_fields'] as $key => $field ) : ?>

            <?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

        <?php endforeach; ?>
        
    </div>

<?php }
#add_action( 'woocommerce_checkout_after_customer_details' ,'kia_extra_checkout_fields' );

#countries field copy fo checkout form
function custom_override_checkout_fields( $fields ) {
     $fields['billing_country'] = 'test';
     return $fields;
};

?>
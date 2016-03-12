<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?>
<?php #echo '<small>udaya front</small>'; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" media="screen"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" media="screen"> -->
<!-- <link rel="pingback" href="<?php #bloginfo( 'pingback_url' ); ?>"> -->
<?php #if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
<?php #if ( get_theme_mod('site_favicon') ) : ?>
<!-- 	<link rel="shortcut icon" href="<?php #echo esc_url(get_theme_mod('site_favicon')); ?>" /> -->
<?php #endif; ?>
<?php #endif; ?>

<!--Adobe Typekit Fonts-->
<!-- <script src="https://use.typekit.net/wro8ray.js"></script> -->
<!-- <script>try{Typekit.load({ async: true });}catch(e){}</script> -->
<!--/Adobe Typekit Fonts-->


<script> jQuery( document ).ready(function() { 
//Homepage mailchimp and purchase pass button to fade on play click
jQuery('body').on('click','.ms-slide-vpbtn', function(){ 
		$('.fade-fade').hide();
	}); 

jQuery('body').on('click','.ms-slide-vcbtn', function(){ 
		$('.fade-fade').show();
	});
	
//Add an Arrow down to the sub-menu
jQuery('.sub-menu').parent().append('<i class="fa fa-sort-desc menu-arrows"></i>');

//Teachers and Musicians toggle (read more)
jQuery(".tchr_content").hide();
jQuery(".show_hide").on("click", function () {
        var txt = $(".tchr_content").is(':visible') ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt).css({'right': '15px', 'position': 'absolute', 'bottom': '0'});
		$(".show_hide.ei").css({'right': '0','padding': '10px 20px'});
        $(this).next('.tchr_content').slideToggle(200);
    });
	
jQuery('#tabsUl a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

//Experience page - display alt for images as span
jQuery(".exp-alt-img img").each(function(i, ele) {
     var alt = this.alt;
          $(this).closest(".exp-alt-img").append("<span>"+alt+"</span>");
 });
 
//Home page - main menu button - show the menu
jQuery(".mmenu-btn").on("click", function () {
     $('html, body').animate({
        scrollTop: $(".ulhome-menu-container").offset().top -50
    }, 1000);
    }); 

//Fix the active state in Tabs for PageBuilder plugin
jQuery('.pt-tabs .nav-item:first-of-type a').removeClass('active');	
jQuery('.pt-tabs .nav-item:first-of-type').addClass('active');		

});//jQuery
	</script>

	<!--milen-->
	<script type="text/javascript" src="https://udayalive.com/wp-content/themes/sydney/js/main.min.js?ver=4.4.1" ></script>
	<!--Libraries-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js" async></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" async></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" async></script>
	
	
	
	
	
	
	<script type="text/javascript" src="https://udayalive.com/wp-content/themes/sydney/js/scripts.js?ver=4.4.1" ></script>
	<script type="text/javascript" src="https://udayalive.com/wp-content/themes/sydney/js/custom.js?ver=1" ></script>
	
	<script type="text/javascript" src="https://udayalive.com/wp-content/themes/sydney/js/skip-link-focus-fix.js?ver=20130115" ></script>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive-kris.css" type="text/css" media="screen" />

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '897225620375131');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=897225620375131&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<header id="masthead" class="site-header homePage-header fade-fade" role="banner">
		<div class="header-wrap header-bcgd">
            <div class="container">
                <div class="row">
				<div class="col-md-2 col-sm-6 col-xs-6">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-10 col-sm-6 col-xs-6 navigation-col">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php sydney_slider_template(); ?>

	<div class="header-image">
		<?php sydney_header_overlay(); ?>
		<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>">
	</div>

	<div id="content" class="page-wrap homePage">
		<div class="container content-wrapper homePage2">
			<div class="row">	
			
			
			

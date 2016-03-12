<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script src="https://use.typekit.net/wro8ray.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/responsive.css" type="text/css" media="screen" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73122405-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
$(document).ready(function () {
    $(".tchr_content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".tchr_content").is(':visible') ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt);
        $(this).next('.tchr_content').slideToggle(200);
    });
});
</script>
<script>
$( document ).ready(function() {
	$(window).scroll(function() {

    if ($(this).scrollTop()>=180)
     {
        $('.fade-fade').fadeOut();
     }
    else
     {
      $('.fade-fade').fadeIn();
     }
 }); 
});
</script>
<script type="text/javascript">

	$( document ).ready(function(){
		
	//$(".ms-slide-vpbtn").click(function(){ console.log("I am clicked"); alert('clicked'); });
		
	});
	
</script>
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
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-10 col-sm-6 col-xs-12 navigation-col">
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
			
			
			
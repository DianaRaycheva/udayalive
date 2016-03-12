<?php die(); ?><!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" media="screen"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" media="screen"> -->
<!-- <link rel="pingback" href=""> -->
<!-- 	<link rel="shortcut icon" href="" /> -->

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
<title>UDAYA &#8211; Udaya Live Festival</title>
        <script type="text/javascript">
            var woocs_drop_down_view = "ddslick";
            var woocs_current_currency = {"name":"BGN","rate":1.7833,"symbol":"&#1083;&#1074;.","position":"right","is_etalon":0,"hide_cents":0,"description":"Bulgarian Lev","flag":"https:\/\/udayalive.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
            var woocs_default_currency = {"name":"USD","rate":1,"symbol":"&#36;","position":"right","is_etalon":1,"hide_cents":0,"description":"USA dollar","flag":"https:\/\/udayalive.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
            var woocs_array_of_get = '{}';
        
            woocs_array_no_cents = '["JPY","TWD"]';

            var woocs_ajaxurl = "https://udayalive.com/wp-admin/admin-ajax.php";
            var woocs_lang_loading = "loading";
            var woocs_shop_is_cached =0;
        </script>
        <link rel="alternate" type="application/rss+xml" title="UDAYA &raquo; Feed" href="https://udayalive.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="UDAYA &raquo; Comments Feed" href="https://udayalive.com/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"https:\/\/udayalive.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.1"}};
			!function(a,b,c){function d(a){var c,d=b.createElement("canvas"),e=d.getContext&&d.getContext("2d");return e&&e.fillText?(e.textBaseline="top",e.font="600 32px Arial","flag"===a?(e.fillText(String.fromCharCode(55356,56806,55356,56826),0,0),d.toDataURL().length>3e3):"diversity"===a?(e.fillText(String.fromCharCode(55356,57221),0,0),c=e.getImageData(16,16,1,1).data.toString(),e.fillText(String.fromCharCode(55356,57221,55356,57343),0,0),c!==e.getImageData(16,16,1,1).data.toString()):("simple"===a?e.fillText(String.fromCharCode(55357,56835),0,0):e.fillText(String.fromCharCode(55356,57135),0,0),0!==e.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='siteorigin-panels-front-css'  href='https://udayalive.com/wp-content/plugins/siteorigin-panels/css/front.css?ver=2.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-bootstrap-css'  href='https://udayalive.com/wp-content/themes/sydney/css/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='https://udayalive.com/wp-content/plugins/accordions/css/jquery-ui.css?ver=4.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='accordions_style-css'  href='https://udayalive.com/wp-content/plugins/accordions/css/style.css?ver=4.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='//udayalive.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.4.13' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='//udayalive.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.4.13' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='//udayalive.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=2.4.13' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-style-css'  href='https://udayalive.com/wp-content/themes/sydney/style.css?ver=4.4.1' type='text/css' media='all' />
<style id='sydney-style-inline-css' type='text/css'>
.site-header { position:relative;background-color:rgba(255,255,255,0.9);}
.admin-bar .site-header,.admin-bar .site-header.float-header { top:0;}
.site-header.fixed {position:relative;}
.site-header.float-header {padding:20px 0;}
body, #mainnav ul ul a { font-family:'proxima nova', sans-serif!important;}
h1, h2, h3, h4, h5, h6, #mainnav ul li a, .portfolio-info, .roll-testimonials .name, .roll-team .team-content .name, .roll-team .team-item .team-pop .name, .roll-tabs .menu-tab li a, .roll-testimonials .name, .roll-project .project-filter li a, .roll-button, .roll-counter .name-count, .roll-counter .numb-count button, input[type="button"], input[type="reset"], input[type="submit"] { font-family:'bebas-neue', sans-serif;}
.site-title { font-size:32px; }
.site-description { font-size:16px; }
#mainnav ul li a { font-size:18px; }
h1 { font-size:32px; }
h2 { font-size:42px; }
h3 { font-size:32px; }
h4 { font-size:25px; }
h5 { font-size:20px; }
h6 { font-size:18px; }
body { font-size:18px; }
.header-image { background-size:cover;}
.header-image { height:300px; }
.widget-area .widget_fp_social a,#mainnav ul li a:hover, .sydney_contact_info_widget span, .roll-team .team-content .name,.roll-team .team-item .team-pop .team-social li:hover a,.roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before,.roll-testimonials .name,.roll-button.border,.roll-button:hover,.roll-icon-list .icon i,.roll-icon-list .content h3 a:hover,.roll-icon-box.white .content h3 a,.roll-icon-box .icon i,.roll-icon-box .content h3 a:hover,.switcher-container .switcher-icon a:focus,.go-top:hover,.hentry .meta-post a:hover,#mainnav > ul > li > a.active, #mainnav > ul > li > a:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .text-color, .social-menu-widget a, .social-menu-widget a:hover, .archive .team-social li a, a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#e0a71c}
.preloader .pre-bounce1, .preloader .pre-bounce2,.roll-team .team-item .team-pop,.roll-progress .progress-animate,.roll-socials li a:hover,.roll-project .project-item .project-pop,.roll-project .project-filter li.active,.roll-project .project-filter li:hover,.roll-button.light:hover,.roll-button.border:hover,.roll-button,.roll-icon-box.white .icon,.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span,.go-top,.bottom .socials li:hover a,.sidebar .widget:before,.blog-pagination ul li.active,.blog-pagination ul li:hover a,.content-area .hentry:after,.text-slider .maintitle:after,.error-wrap #search-submit:hover,#mainnav .sub-menu li:hover > a,#mainnav ul li ul:after, button, input[type="button"], input[type="reset"], input[type="submit"], .panel-grid-cell .widget-title:after { background-color:#e0a71c}
.roll-socials li a:hover,.roll-socials li a,.roll-button.light:hover,.roll-button.border,.roll-button,.roll-icon-list .icon,.roll-icon-box .icon,.owl-theme .owl-controls .owl-page span,.comment .comment-detail,.widget-tags .tag-list a:hover,.blog-pagination ul li,.hentry blockquote,.error-wrap #search-submit:hover,textarea:focus,input[type="text"]:focus,input[type="password"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="date"]:focus,input[type="month"]:focus,input[type="time"]:focus,input[type="week"]:focus,input[type="number"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="color"]:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .archive .team-social li a { border-color:#e0a71c}
.site-header.float-header { background-color:rgba(255,255,255,0.9);}
@media only screen and (max-width: 991px) { .site-header { background-color:#ffffff;}}
.site-title a, .site-title a:hover { color:#ffffff}
.site-description { color:#000000}
#mainnav ul li a, #mainnav ul li::before { color:#000000}
#mainnav .sub-menu li a { color:#000000}
#mainnav .sub-menu li a { background:#1c1c1c}
.text-slider .maintitle, .text-slider .subtitle { color:#ffffff}
body { color:#767676}
#secondary { background-color:#ffffff}
#secondary, #secondary a, #secondary .widget-title { color:#767676}
.footer-widgets { background-color:#252525}
.site-footer { background-color:#ffffff}
.site-footer,.site-footer a { color:#666666}
.overlay { background-color:#000000}
.page-wrap { padding-top:83px;}
.page-wrap { padding-bottom:100px;}

</style>
<!--[if lte IE 9]>
<link rel='stylesheet' id='sydney-ie9-css'  href='https://udayalive.com/wp-content/themes/sydney/css/ie9.css?ver=4.4.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='wm-fonticons-css'  href='https://udayalive.com/wp-content/plugins/webman-amplifier/assets/font/fontello.css?ver=1.2.9.2' type='text/css' media='screen' />
<link rel='stylesheet' id='mc4wp-form-themes-css'  href='https://udayalive.com/wp-content/plugins/mailchimp-for-wp/assets/css/form-themes.min.css?ver=3.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ms-main-css'  href='https://udayalive.com/wp-content/plugins/masterslider/public/assets/css/masterslider.main.css?ver=2.15.0' type='text/css' media='all' />
<link rel='stylesheet' id='ms-custom-css'  href='https://udayalive.com/wp-content/uploads/masterslider/custom.css?ver=32.8' type='text/css' media='all' />
<link rel='stylesheet' id='pt-tabs-style-css'  href='https://udayalive.com/wp-content/plugins/tabs-widget-for-page-builder/assets/css/style.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-currency-switcher-css'  href='https://udayalive.com/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=4.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://udayalive.com/wp-content/plugins/jetpack/css/jetpack.css?ver=3.9.4' type='text/css' media='all' />
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/woocommerce-currency-switcher/js/price-slider.js?ver=4.4.1'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/tabs-widget-for-page-builder/assets/js/main.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/woocommerce-currency-switcher/js/jquery.ddslick.min.js?ver=4.4.1'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/woocommerce-currency-switcher/js/front.js?ver=4.4.1'></script>
<link rel='https://api.w.org/' href='https://udayalive.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://udayalive.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://udayalive.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.4.1" />
<meta name="generator" content="WooCommerce 2.4.13" />
<link rel="canonical" href="https://udayalive.com/" />
<link rel='shortlink' href='https://wp.me/P76bMC-RB' />
<script>var ms_grabbing_curosr='https://udayalive.com/wp-content/plugins/masterslider/public/assets/css/common/grabbing.cur',ms_grab_curosr='https://udayalive.com/wp-content/plugins/masterslider/public/assets/css/common/grab.cur';</script>
<meta name="generator" content="MasterSlider 2.15.0 - Responsive Touch Image Slider" />

<link rel='dns-prefetch' href='//i0.wp.com'>
<link rel='dns-prefetch' href='//i1.wp.com'>
<link rel='dns-prefetch' href='//i2.wp.com'>
<style type='text/css'>img#wpstats{display:none}</style>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="website" />
<meta property="og:title" content="UDAYA" />
<meta property="og:description" content="Udaya Live Festival" />
<meta property="og:url" content="https://udayalive.com/" />
<meta property="og:site_name" content="UDAYA" />
<meta property="og:image" content="https://udayalive.com/wp-content/uploads/2016/03/faq-menu.jpg" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:card" content="summary" />
<style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 3323 */ #pg-3323-0 , #pl-3323 .panel-grid-cell .so-panel , #pl-3323 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } @media (max-width:780px){ #pg-3323-0 .panel-grid-cell , #pg-3323-1 .panel-grid-cell { float:none;width:auto } #pl-3323 .panel-grid { margin-left:0;margin-right:0 } #pl-3323 .panel-grid-cell { padding:0 }  } </style><script type="text/javascript">
/* <![CDATA[ */
	var wpNotesIsJetpackClient = true;
	var wpNotesIsJetpackClientV2 = true;
/* ]]> */
</script>
<link rel="stylesheet" href="https://udayalive.com/wp-content/themes/sydney/responsive-kris.css" type="text/css" media="screen" />

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

<body class="home page page-id-3323 page-template page-template-home-template page-template-home-template-php logged-in _masterslider _msp_version_2.15.0 siteorigin-panels siteorigin-panels-home currency-bgn">
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>	
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

	<header id="masthead" class="site-header homePage-header fade-fade" role="banner">
		<div class="header-wrap header-bcgd">
            <div class="container">
                <div class="row">
				<div class="col-md-2 col-sm-6 col-xs-6">
		        					<a href="https://udayalive.com/" title="UDAYA"><img class="site-logo" src="https://udayalive.com/wp-content/uploads/2016/01/logo-e1453148090217.png" alt="UDAYA" /></a>
		        				</div>
				<div class="col-md-10 col-sm-6 col-xs-6 navigation-col">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<div class="menu-top-menu-container"><ul id="menu-top-menu" class="menu"><li id="menu-item-3573" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3323 current_page_item menu-item-3573"><a href="https://udayalive.com/">Home</a></li>
<li id="menu-item-3921" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3921"><a href="#">Event Info</a>
<ul class="sub-menu">
	<li id="menu-item-3570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3570"><a href="https://udayalive.com/experience/">Experience</a></li>
	<li id="menu-item-3922" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3922"><a href="https://udayalive.com/travel-and-lodging/">Travel &#038; Hotel</a></li>
	<li id="menu-item-4247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4247"><a href="https://udayalive.com/faq/">F.A.Q.</a></li>
</ul>
</li>
<li id="menu-item-3713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3713"><a href="https://udayalive.com/purchasepass/">Purchase Pass</a></li>
<li id="menu-item-3722" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3722"><a href="#">Line Up</a>
<ul class="sub-menu">
	<li id="menu-item-3725" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3725"><a href="https://udayalive.com/teachers/">Teachers</a></li>
	<li id="menu-item-3726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3726"><a href="https://udayalive.com/musicians/">Musicians</a></li>
</ul>
</li>
<li id="menu-item-3931" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3931"><a href="https://udayalive.com/get-involved/">Get Involved</a></li>
<li id="menu-item-3716" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3716"><a href="http://udaya.com">Practice Online</a></li>
<li id="menu-item-3940" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3940"><a href="https://udayalive.com/cart/"><i class="fa fa-shopping-cart"></i></a></li>
</ul></div>					</nav><!-- #site-navigation -->
				</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	
	<div class="header-image">
		<div class="overlay"></div>		<img class="header-inner" src="" width="1920" alt="UDAYA">
	</div>

	<div id="content" class="page-wrap homePage">
		<div class="container content-wrapper homePage2">
			<div class="row">	
			
			
			
<style>
.ms-skin-default{
    top: -10px!important;
}
#content{
	margin:0!important;
}
</style>
 <div id="primary" class="content-area col-md-12">
	<main id="main" class="post-wrap" role="main">

			<div id="pl-3323"><div class="panel-grid" id="pg-3323-0" ><div class="siteorigin-panels-stretch sydney-stretch panel-row-style" style="padding: 100px 0; " data-stretch-type="full-stretched" ><div class="panel-grid-cell" id="pgc-3323-0-0" ><div class="so-panel widget widget_sow-editor panel-first-child" id="panel-3323-0-0-0"><div class="hp-video panel-widget-style" ><div class="so-widget-sow-editor so-widget-sow-editor-base">
<div class="siteorigin-widget-tinymce textwidget">
	
		<!-- MasterSlider -->
		<div id="P_MS56e42e6cc43e7" class="master-slider-parent fp_slider  ms-parent-id-28"  >
				
			
			<!-- MasterSlider Main -->
			<div id="MS56e42e6cc43e7" class="master-slider ms-skin-default" >
				 				 
				<div  class="ms-slide" data-delay="3" data-fill-mode="fill"  >
					<img src="https://i2.wp.com/udayalive.com/wp-content/plugins/masterslider/public/assets/css/blank.gif?w=1170&#038;ssl=1" alt="" title="" data-src="https://udayalive.com/wp-content/uploads/2016/02/landing-page.jpg" data-recalc-dims="1" />

					<img  class="ms-layer col-xs-6 col-md-8 col-lg-9 img-responsive" src="https://i0.wp.com/udayalive.com/wp-content/plugins/masterslider/public/assets/css/blank.gif?w=1170&#038;ssl=1" data-src="https://udayalive.com/wp-content/uploads/2016/01/home-page-heading.png" alt="" style=""    data-ease="easeOutQuint"        data-type="image"         data-offset-x="5" data-offset-y="-111" data-origin="mc" data-position="normal" data-recalc-dims="1" />


					<a href="https://www.youtube.com/embed/uJ9NvgpVdNw" data-type="video" ></a>
				</div>

			</div>
			<!-- END MasterSlider Main -->

			 
		</div>
		<!-- END MasterSlider --> 
		
		<script>
		(function ( $ ) {
			"use strict";

			$(function () {
				var masterslider_43e7 = new MasterSlider();

				// slider controls
                    
				// slider setup
				masterslider_43e7.setup("MS56e42e6cc43e7", {
						width           : 1000,
						height          : 500,
						minHeight       : 0,
						space           : 0,
						start           : 1,
						grabCursor      : true,
						swipe           : false,
						mouse           : false,
						keyboard        : false,
						layout          : "fullscreen", 
						wheel           : false,
						autoplay        : false,
						instantStartLayers:true,
						loop            : true,
						shuffle         : false,
						preload         : 2,
						heightLimit     : true,
						autoHeight      : false,
						smoothHeight    : true,
						endPause        : false,
						overPause       : false,
						fillMode        : "fill", 
						centerControls  : false,
						startOnAppear   : false,
						layersMode      : "center", 
						autofillTarget  : "", 
						hideLayers      : false, 
						fullscreenMargin: 0,
						speed           : 20, 
						dir             : "h", 
						view            : "basic"
				});
				

				
				window.masterslider_instances = window.masterslider_instances || [];
				window.masterslider_instances.push( masterslider_43e7 );
			 });
			
		})(jQuery);
		</script> 
		
</div></div></div></div><div class="so-panel widget widget_mc4wp_form_widget" id="panel-3323-0-0-1"><div class="hp-mailchimp fade-fade panel-widget-style" ><h3 class="widget-title">JOIN OUR MAILING LIST</h3><!-- MailChimp for WordPress v3.1.1 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-5" class="mc4wp-form mc4wp-form-3204 mc4wp-form-theme mc4wp-form-theme-dark" method="post" data-id="3204" data-name="Udaya Live" ><div class="mc4wp-form-fields"><label>Email Address</label>
<input type="email" name="EMAIL" placeholder="myname@website.com" required>
<input type="submit" value="Subscribe">
<div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></div><input type="hidden" name="_mc4wp_timestamp" value="1457794668" /><input type="hidden" name="_mc4wp_form_id" value="3204" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-5" /></div><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></div></div><div class="so-panel widget widget_sow-editor" id="panel-3323-0-0-2"><div class="hp-purchasepass panel-widget-style" ><div class="so-widget-sow-editor so-widget-sow-editor-base">
<div class="siteorigin-widget-tinymce textwidget">
	<a class="pp-home-btn fade-fade fade-elements" href="https://udayalive.com/purchasepass/"><img src="https://i0.wp.com/udayalive.com/wp-content/uploads/2016/01/purchasepass-homepagebutton-1.png?w=1170&#038;ssl=1" alt="Purchase Pass" data-recalc-dims="1" /></a></div></div></div></div><div class="so-panel widget widget_sow-image panel-last-child" id="panel-3323-0-0-3"><div class="mmenu-btn fade-fade panel-widget-style" ><div class="so-widget-sow-image so-widget-sow-image-base">
	<img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2016/02/purchasepass-button.png?fit=250%2C253&amp;ssl=1" width="250" height="253"  class="so-widget-image" style="max-width:100%; height:auto; display:block" />
</div></div></div></div></div></div><div class="panel-grid" id="pg-3323-1" ><div style="padding: 100px 0; " class="panel-row-style" ><div class="panel-grid-cell" id="pgc-3323-1-0" ><div class="so-panel widget widget_sow-editor panel-first-child panel-last-child" id="panel-3323-1-0-0"><div class="so-widget-sow-editor so-widget-sow-editor-base">
<div class="siteorigin-widget-tinymce textwidget">
	
	<!--menu section-->
<div class="ulhome-menu-container">
<div class="row">
<!--item 1-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/experience"/><img src="https://i0.wp.com/udayalive.com/wp-content/uploads/2016/03/get-inv.jpg?w=1170&#038;ssl=1"  alt="Event Info" data-recalc-dims="1" />
<h5 class="menu-name">Experience</h5>
</a></div><!--/item 1-->

<!--item 2-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/teachers/"><img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2016/03/exp.jpg?w=1170&#038;ssl=1" alt="Yoga Teachers" data-recalc-dims="1" />
<h5 class="menu-name">Teachers</h5>
</a></div><!--/item 2-->

<!--item 3-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/musicians/"><img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2015/12/musicians-picture.jpg?w=1170&#038;ssl=1" alt="musicians" data-recalc-dims="1" />
<h5 class="menu-name">Musicians</h5>
</a></div><!--/item 3-->

<!--item 4-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://www.udaya.com/" target="_blank"><img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2016/02/practice-inline.jpg?w=1170&#038;ssl=1" alt="Practise online" data-recalc-dims="1" />
<h5 class="menu-name">Practice online</h5>
</a></div><!--/item 4-->

<!--item 5-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/travel-and-lodging/"><img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2016/03/rila-resort.jpg?w=1170&#038;ssl=1" alt="Travel and Lodging" data-recalc-dims="1" />
<h5 class="menu-name">Travel and Lodging</h5>
</a></div><!--/item 5-->

<!-- item 6-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/rila-resort/"><img src="https://i0.wp.com/udayalive.com/wp-content/uploads/2016/03/rr.jpg?w=1170&#038;ssl=1" alt="Rila Resort" data-recalc-dims="1" />
<h5 class="menu-name">Rila Resort</h5>
</a></div><!--/item 6-->

<!--item 7-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/purchasepass/"><img src="https://i2.wp.com/udayalive.com/wp-content/uploads/2016/01/purchasepass-1.jpg?w=1170&#038;ssl=1" alt="Purchase pass" data-recalc-dims="1" />
<h5 class="menu-name">Purchase Pass</h5>
</a></div><!--/item 7-->

<!--item 8-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/get-involved/"><img src="https://i2.wp.com/udayalive.com/wp-content/uploads/2016/03/exp-2.jpg?w=1170&#038;ssl=1" alt="Get Involved" data-recalc-dims="1" />
<h5 class="menu-name">Get Involved</h5>
</a></div><!--/item 8-->

<!--item 9-->
<div class="col-lg-4 col-sm-6 col-xs-12 home-menu-item">
<a href="https://udayalive.com/faq/"><img src="https://i1.wp.com/udayalive.com/wp-content/uploads/2016/03/faq-menu.jpg?w=1170&#038;ssl=1" alt="FAQ" data-recalc-dims="1" />
<h5 class="menu-name">F.A.Q</h5>
</a><!--/item 9-->
<div><!-- end row-->
</div><!--/menu-->
	</div></div></div></div></div></div></div>
	</main><!-- #main -->
</div><!-- #primary -->
 
 
</div><!-- row -->
</div><!-- container -->
</div><!-- #content -->
</div><!-- #page .hfeed.site -->

<footer class="container-fluid row test-footer">

<!--Typekit fonts-->
<script src="https://use.typekit.net/wro8ray.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!--/Typekit fonts-->

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
	
	
	<div id="test-footer" class="site-footer test-footer col-lg-12" role="contentinfo"></div>
</footer>

<!-- #colophon -->


	<div style="display:none">
	</div>
<link rel='stylesheet' id='wpcom-notes-admin-bar-css'  href='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.css?ver=3.9.4-201610' type='text/css' media='all' />
<link rel='stylesheet' id='noticons-css'  href='https://s0.wp.com/i/noticons/noticons.css?ver=3.9.4-201610' type='text/css' media='all' />
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/jetpack/modules/photon/photon.js?ver=20130122'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/jquery/ui/accordion.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='//udayalive.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='//udayalive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=2.4.13'></script>
<script type='text/javascript' src='//udayalive.com/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='//udayalive.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=2.4.13'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/js/devicepx-jetpack.js?ver=201610'></script>
<script type='text/javascript' src='https://secure.gravatar.com/js/gprofiles.js?ver=2016Maraa'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":"63ab0defe85de9cdfd6953f4ae073368"};
/* ]]> */
</script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/jetpack/modules/wpgroho.js?ver=4.4.1'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/wp-embed.min.js?ver=4.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var panelsStyles = {"fullContainer":"body"};
/* ]]> */
</script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/siteorigin-panels/js/styling.min.js?ver=2.2.2'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/masterslider/public/assets/js/jquery.easing.min.js?ver=2.15.0'></script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/masterslider/public/assets/js/masterslider.min.js?ver=2.15.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='https://udayalive.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js?ver=3.1.1'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/underscore.min.js?ver=1.6.0'></script>
<script type='text/javascript' src='https://udayalive.com/wp-includes/js/backbone.min.js?ver=1.1.2'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/js/mustache.js?ver=3.9.4-201610'></script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/mu-plugins/notes/notes-common-v2.js?ver=3.9.4-201610'></script>
<script type='text/javascript' src='https://s0.wp.com/wp-content/mu-plugins/notes/admin-bar-v2.js?ver=3.9.4-201610'></script>
<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}})();</script>        <script type="text/javascript">
            try {
                jQuery(function () {
                    jQuery.cookie('woocommerce_cart_hash', null, {path: '/'});
                });
            } catch (e) {

            }
        </script>
        </body>
</html>

<!-- Dynamic page generated in 1.008 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-03-12 14:57:48 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic Legacy Super Cache -->
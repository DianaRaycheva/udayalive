<?php
/**
 * Template Name: Test Template
 *
 * @package WordPress
 * @subpackage Sydney
 * @since Sydney for Udaya
 */
 ?>
<?php get_header('test-header'); ?>
<style>
.home-menu-item {
	-webkit-height: 225px!important;
	height: -webkit-height(225px!important);
    height: 225px;
    z-index: 400;
	margin-bottom: 10px;
}
.home-menu-item a {
    overflow: hidden;
    display: inline-block;
    height: inherit;
    width: 100%;
	position: relative;
	margin-bottom: 0!important;
}
.home-menu-item h5 {
    font-family: "bebas-neue";
    text-align: center;
    letter-spacing: 1px;
    background: rgba(0,0,0,.6);
    position: absolute;
    bottom: 0;
    margin: 0!important;
    width: 100%;
    padding: 10px!important;
    line-height: 25px;
    color: rgba(255,255,255,.9);
    font-weight: 100;
    height: initial!important;
}
.home-menu-item img {
    width: 100%;
    height: 100%!important;
    -ms-transform: scale(1,1);
    -webkit-transform: scale(1,1);
    transform: scale(1,1);
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
}
</style>


<script>
jQuery( document ).ready(function() {
$('body').on('click','.ms-slide-vpbtn', function(){
   $('.fade-fade').hide();
});
});

</script>
<?php masterslider(19); ?>
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" class="fade-fade fade-elements home-fade"><form id="mc-embedded-subscribe-form" class="validate" action="//theultimateyogi.us4.list-manage.com/subscribe/post?u=6409bdd1c872768c6ca9af2ed&amp;id=bc06937756" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
<div id="mc_embed_signup_scroll">
<div class="mc-field-group">
<h6 class="mailchimp_heading">Join Our Mailing List</h6>
<div class="clear"></div>
<!--<label for="mce-EMAIL">Email Address </label> --><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="E-mail address" />

</div>
<div id="mce-responses" class="clear"></div>
<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_6409bdd1c872768c6ca9af2ed_bc06937756" type="text" value="" /></div>
<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>
</div>
</form></div>
<script src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js" type="text/javascript"></script><script type="text/javascript">// <![CDATA[
(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
// ]]></script><!--End mc_embed_signup-->
<a class="pp-home-btn fade-fade fade-elements" href="https://udayalive.com/purchasepass/"><img src="https://udayalive.com/wp-content/uploads/2016/01/purchasepass-homepagebutton-1.png" alt="Purchase Pass" /></a>

<?php echo homepage_menu($atts); ?>

<?php get_footer(); ?>

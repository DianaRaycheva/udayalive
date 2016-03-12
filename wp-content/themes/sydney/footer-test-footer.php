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


<?php wp_footer(); ?>
</body>
</html>

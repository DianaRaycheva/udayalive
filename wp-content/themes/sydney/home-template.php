<?php 
/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage Sydney
 * @since Sydney for Udaya
 */
 
 get_header('front-header'); ?>
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

			<?php while ( have_posts() ) : the_post(); 

				    the_content();
					
					endwhile; // end of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->
 
 
<?php get_footer('test-footer'); ?>
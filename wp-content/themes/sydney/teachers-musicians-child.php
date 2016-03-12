<?php get_header(); ?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); 

					the_content();
				
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					
				 endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
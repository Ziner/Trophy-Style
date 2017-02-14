<?php
/**
 * The template for displaying Category pages.
 *
 */
get_header();
?>

<div class="clear"></div>
<!-- blog title ends -->
<div class="blog_pages_wrapper default_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--page start-->

				<?php
				if ( have_posts() ):


					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
					/* Run the loop for the archives page to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-archives.php and that will be used instead.
					 */
					while ( have_posts() ) {
						the_post();
						get_template_part( 'templates/content' );
					}
					?>
					<div class="clear"></div>
					<nav id="nav-single"> <span class="nav-previous">
							<?php next_posts_link( __( '&larr; Older posts', 'one-page' ) ); ?>
						</span> <span class="nav-next">
							<?php previous_posts_link( __( 'Newer posts &rarr;', 'one-page' ) ); ?>
						</span> </nav>
				<?php endif; ?>

                <!--End Page-->
                <div class="clear"></div>
            </div>
            <!--Sidebar-->
            <div class="col-md-4">
                <!--Start Sidebar-->
				<?php get_sidebar(); ?>
                <!--End Sidebar-->
            </div>
            <div class="clear"></div>

        </div>
    </div>
</div>

<div class="clear"></div>
<?php get_footer(); ?>

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
                <div class="content-bar">
					<?php
					if ( have_posts() ) : the_post();
						the_content();
					endif;
					wp_link_pages( array( 'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'one-page' ) . '</span>', 'after' => '</div>' ) );
					?>
                </div>
                <!--End Page-->
                <div class="clear"></div>
                <!--Start Comment box-->
				<?php comments_template(); ?>
                <!--End Comment box-->
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

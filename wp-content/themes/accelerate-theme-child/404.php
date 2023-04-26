<?php
/**
 * The template for displaying the 404 not found page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div id="not-found-main" class="main-content" role="main">
            <div class="not-found-container">
                <?php 
                    $url_to_my_attachment = "http://localhost:8888/accelerate/wp-content/uploads/2023/04/map.png";
                    $attachment_id = attachment_url_to_postid($url_to_my_attachment);

                echo wp_get_attachment_image($attachment_id); ?>
                <div class="not-found-text">
                    <h1>Whoops, Took a Wrong Turn...</h1>
                    <p>Sorry, this page no longer exists, never existed or has been
                        moved. We feel like complete jerks for totally misleading you.</p>
                    <p>Feel free to take a look around our <a href="http://localhost:8888/accelerate/blog/">blog</a> or some of
                        our featured <a href="http://localhost:8888/accelerate/case-studies/">work</a>.</p>
                </div>       
            </div>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
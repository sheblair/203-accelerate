<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
                $section_1_heading = get_field('section_1_heading');
                $section_1_paragraph = get_field('section_1_paragraph');
                $section_1_image = get_field('section_1_image');
                $section_2_heading = get_field('section_2_heading');
                $section_2_paragraph = get_field('section_2_paragraph');
                $section_2_image = get_field('section_2_image');
                $section_3_heading = get_field('section_3_heading');
                $section_3_paragraph = get_field('section_3_paragraph');
                $section_3_image = get_field('section_3_image');
                $section_4_heading = get_field('section_4_heading');
                $section_4_paragraph = get_field('section_4_paragraph');
                $section_4_image = get_field('section_4_image');
                $size = "medium";
                $bottom_heading = get_field('bottom_heading');
                $contact_button_label = get_field('contact_button_label');
                $contact_button_url = get_field('contact_button_url');
            ?>

            <div class="about-top-section">
                <?php the_content(); ?>

                <div class="section-1">
                    <h3><?php if($section_1_heading) {
                        echo $section_1_heading;
                    } ?></h3>
                    <p><?php if($section_1_paragraph) {
                        echo $section_1_paragraph;
                    } ?></p>
                    <div class="section-1-image">
                        <?php if($section_1_image) {
                            echo wp_get_attachment_image( $section_1_image, $size );
                        } ?>
                    </div>
                </div>

                <div class="section-2">
                    <h3><?php if($section_2_heading) {
                        echo $section_2_heading;
                    } ?></h3>
                    <p><?php if($section_2_paragraph) {
                        echo $section_2_paragraph;
                    } ?></p>
                    <div class="section-2-image">
                        <?php if($section_2_image) {
                            echo wp_get_attachment_image( $section_2_image, $size );
                        } ?>
                    </div>
                </div>

                <div class="section-3">
                    <h3><?php if($section_3_heading) {
                        echo $section_3_heading;
                    } ?></h3>
                    <p><?php if($section_3_paragraph) {
                        echo $section_3_paragraph;
                    } ?></p>
                    <div class="section-3-image">
                        <?php if($section_3_image) {
                            echo wp_get_attachment_image( $section_3_image, $size );
                        } ?>
                    </div>
                </div>

                <div class="section-4">
                    <h3><?php if($section_4_heading) {
                        echo $section_4_heading;
                    } ?></h3>
                    <p><?php if($section_4_paragraph) {
                        echo $section_4_paragraph;
                    } ?></p>
                    <div class="section-4-image">
                        <?php if($section_4_image) {
                            echo wp_get_attachment_image( $section_4_image, $size );
                        } ?>
                    </div>
                </div>
            </div>
            
            <div class="about-bottom-section">
                <h2><?php if($bottom_heading) { echo $bottom_heading; } ?></h2>
                <a href="<?php echo $contact_button_url; ?>"><button><?php echo $contact_button_label ?></button></a>
            </div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
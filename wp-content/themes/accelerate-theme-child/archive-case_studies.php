<?php
/**
 * The template for displaying case studies archive page
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
                $services = get_field('services');
                $client = get_field('client');
                $link = get_field('site_link');
                $image_1 = get_field('image_1');
            ?>

            <article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
                    <h4><?php echo $services; ?></h4>
                    <?php the_excerpt(); ?>
                    <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project ›</a></p>
                </aside>
                <div class="case-study-images archive">
                    <?php if($image_1) { ?>
                        <img src="<?php echo $image_1; ?>" class='archive-image'>
                    <?php } ?>
                </div>                
            </article>
			
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the About page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<section class="about-page-header">
		<div class="about-header">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class='about-hero'>
					<p><span class="green">Accelerate</span> is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .container -->
	</section><!-- .about-page-header -->
	<section class="about-list">
		<div class="about-content">
			<ul class="about-featured-services">
				<?php while ( have_posts() ) : the_post();?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>

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
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div id= class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</section> <!-- .home-page duplicate for about page-->

<section class="our-services">
	<div class="our-services-header">
		<h3>Our Services</h3>
		<p>We take pride in our clients and the content we create for them.  Here's a brief overview of our offered services.</p>
	</div>
	<div class="all-services">
		<ul id="about-services">
			<?php query_posts('posts_per_page=4&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post();
			$icon = get_field("icon");
			$size ="thumbnail";
			?>
			<li class="individual-services">
				<figure>
					<?php echo wp_get_attachment_image($icon, $size); ?>
				</figure>
<!-- <div id="svcs"> -->
					<h4><?php the_title(); ?></h4>
					<p><?php the_content(); ?></p>
<!-- </div> -->
			</li>
			<?php endwhile; //end of the loop. ?>
			<?php wp_reset_query(); //resets the altered query back to the original ?>
		</ul>
	</div>
	<div class="call-to-action">
		<h3>Interested in working with us?</h3>
		<a class="button" href="<?php echo contact_url(); ?>/contact-us">Contact Us</a>
	</div>
</section>

<?php get_footer(); ?>

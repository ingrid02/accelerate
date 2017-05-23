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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
					$services = get_field('services');
					$client = get_field('client');
					$site_link = get_field('site_link');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
					$size = "full"; ?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<h6>Client: <?php echo $client; ?></h6>
				<?php the_content(); ?>
				<p><a href="<?php echo $link;?>">Site Link</a></p>
				</aside>

				<div class="case-studies-images">
				<?php if($image_1) { ?>
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
				<?php }?>

				<?php if($image_2) { ?>
					<?php echo wp_get_attachment_image( $image_2, $size ); ?>
				<?php }?>

				<?php if($image_3) { ?>
				<?php echo wp_get_attachment_image( $image_3, $size ); ?>
					<?php }?>
				</div>
			</article>
			<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
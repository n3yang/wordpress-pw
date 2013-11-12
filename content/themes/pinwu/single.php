<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Pinwu
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_permalink() ?>
				<?php the_content()?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

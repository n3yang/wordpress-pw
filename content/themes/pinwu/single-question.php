<?php
/**
 * The Template for displaying single question.
 *
 * @package WordPress
 * @subpackage Pinwu
 */

get_header(); ?>


<h1>question template</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_permalink() ?>
				<?php the_content()?>

			<?php endwhile; // end of the loop. ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
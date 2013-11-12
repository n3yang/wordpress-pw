<?php
/**
 * The index template file for Pinwu.
 *
 * @package WordPress
 * @subpackage Pinwu
 */

get_header(); ?>

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			switch (get_post_type()) {
				case 'product':
					get_template_part('index', 'product');
					break;
				
				case 'question':
					get_template_part('index', 'question');
					break;
					
				default:
					get_template_part( 'index', 'default' );
					break;
			}
			?>

<?php get_footer(); ?>
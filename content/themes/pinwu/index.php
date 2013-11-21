<?php
/**
 * The index template file for Pinwu.
 *
 * @package WordPress
 * @subpackage Pinwu
 */

//get_header(); ?>

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */var_dump($wp_query->query_vars);var_dump($_GET);
			if (get_query_var('taxonomy') == 'genre') {
				get_template_part('index', 'product');
			} else if (get_query_var('post_type') == 'question') {
				get_template_part('index', 'question');
			} else {
				get_template_part( 'index', 'default' );
			}
			?>

<?php // get_footer(); ?>
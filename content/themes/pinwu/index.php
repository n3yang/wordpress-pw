<?php
/**
 * The index template file for Pinwu.
 *
 * @package WordPress
 * @subpackage Pinwu
 */
get_header(); 

if (get_query_var('taxonomy') == 'genre') {
	get_template_part('index', 'product');
} else if (get_query_var('post_type') == 'question') {
	get_template_part('index', 'question');
} else if (get_query_var('category_name')) {
	get_template_part('category', get_query_var('category_name'));
} else if (get_query_var('s')) {
	get_template_part('search');
} else {
	get_template_part( 'index', 'default' );
}
			
get_footer();
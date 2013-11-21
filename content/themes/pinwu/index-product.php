<?php

$genre_obj = get_term_by('slug', get_query_var('genre'), 'genre');
var_dump($wp_query->query_vars);

$menu = pinwu_get_product_menu_setting($genre_obj->term_id);
foreach ($menu as $key => $value) {
	foreach ($value as $term1) {
		// echo '<h3>'.$term1->name.'</h3>';
	}
}




$args = array(
	'post_type'			=> 'product',
	'posts_per_page'	=> 1,
	'paged'				=> get_query_var('paged') ? get_query_var('paged') : 1,
);

$posts = query_posts($args);
var_dump($posts);
if ( have_posts() ){
while(have_posts()) : the_post();
the_title();
endwhile;
}



pingwu_pagin_nav();
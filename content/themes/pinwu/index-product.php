<?php

// the_ID();
// var_dump(get_category());

// var_dump(get_query_var('genre'));

$args = array(
	'post_type'=>'product',
	'posts_per_page'	=> 1,
	);
$posts = query_posts($args);
// get_category();
var_dump($posts);

if ( have_posts() ){


}

echo get_query_var('page');


pingwu_pagin_nav(1);
twentythirteen_paging_nav();
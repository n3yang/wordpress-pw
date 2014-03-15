<?php 
get_header(); ?>

<?php
while ( have_posts() ) {
	the_post();
	get_template_part( 'content', 'page' );
	comments_template( '', true );
}
?>

<?php get_footer(); ?>
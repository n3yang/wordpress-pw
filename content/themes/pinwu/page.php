<?php 
get_header(); ?>

<?php
while ( have_posts() ) {
	the_content();
}
?>

<?php get_footer(); ?>
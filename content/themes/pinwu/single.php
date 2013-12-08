<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Pinwu
 */
get_header();
$the_page_post_id = get_the_ID();
?>

	<!--
	<div class="crumbs base-clear">
    	<div class="crumbs-list">
        	<span>
            	<a href="#" class="home-icon">首页</a>
            </span>
        	<span>
            	<a href="#">卧房定制家居</a>
            </span>
        	<span>
            	<a href="#">新实用主义书房家具</a>
            </span>
        </div>
    </div>
	/Crumbs-->
    
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/products.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/products.js"></script>
    
	<!--ListOfProducts-->
    <div class="main">
    	
        <?php echo pinwu_get_ad_banner() ?>
                
        <div class="products base-clear">
        	<?php get_sidebar() ?>
            
<?php
$posts = query_posts(array('p'=>$the_page_post_id));
if (have_posts()){
	the_post(); 
	$cats = get_the_category($post->ID);
	if (count($cats)>1){
		$cat_name = $cats[0]->cat_name;
	}
}
?>

            <div class="products-right">
            	<div class="products-list-wrap">
   
                    <div class="products-list-result">
                    	<div class="products-list-result-title">
                        	<div class="ti dib-wrap">
                            	<span class="dib"><a class="active"><?php echo $cat_name ?></a></span>
                            </div>
                        </div>
                        <div class="products-info">
                        	<div class="products-info-c">
                            	
                                <!--以下部分为文章内容-->
                                <div class="news-content">
                                	
                                    <h1><?php the_title() ?></h1>
                                    
                                    <h2>
                                    	<span><?php the_date() ?></span>
                                        <span>作者：<?php the_author() ?></span>
                                    </h2>
                                    
                                    <div class="news-con-text">
                                    	<?php the_content(); ?>
                                    </div>
                                    
                                </div>
                                <!--以上部分为文章内容-->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div> 
    <!--/ListOfProducts-->

<?php get_footer(); ?>
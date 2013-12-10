<?php
/**
 * The Template for displaying single question.
 *
 * @package WordPress
 * @subpackage Pinwu
 */

$the_page_post_id = get_the_ID();
get_header(); ?>


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
$posts = query_posts(array('post_type'=>'question', 'p'=>$the_page_post_id));
if (have_posts()){
	the_post();
}
?>
            <div class="products-right">
                <div class="products-list-wrap">
                    <div class="products-list-screen qa-wrap base-clear">
                        

                        <div class="qa-title">
                            <p><?php the_title() ?><span class="t-h">?</span></p>
                        </div>
                        <p class="time"><?php echo the_date() ?></p>
                        <div class="qa-q">
                            <p class="qa-q-t">咨询内容</p>
                            <?php the_content() ?>
                        </div>
                        <div class="qa-a">
                            <p class="qa-a-t">品屋回复</p>
                            <?php the_excerpt() ?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div> 
    <!--/ListOfProducts-->
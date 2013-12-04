
<?php

$the_page_cat_id = get_query_var('cat');
$the_page_cat_name = get_cat_name($the_page_cat_id);
$the_page_paged = get_query_var('paged');

get_header(); ?>

	<!--Crumbs
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
        	<div class="products-left">
            	<!--products-left-box-->
            	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>常见问题解答</span>
                    </div>
                    <div class="products-left-box-list-qa">
                    	<ul>
                    	<?php
						$posts = query_posts(array('post_type'=>'question', 'posts_per_page'=>8));
						if (have_posts()){ while(have_posts()) : the_post();
						?>
                        	<li>
                            	<a href="<?php the_permalink() ?>">
                                	<em>·</em><?php the_title() ?>
                                </a>
                            </li>
                        <?php endwhile;}?>
                        </ul>
                    </div>
                </div>
                
            	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>经典定制推荐</span>
                    </div>
                    <div class="products-left-box-list">
                    	<ul>
                    	<?php
						$posts = query_posts(array('post_type'=>'product', 'posts_per_page'=>3, 'genre'=> 'classic'));
						if (have_posts()){ while(have_posts()) : the_post();
						?>
                        	<li>
                            	<a href="<?php the_permalink() ?>">
                                    <div class="p-l-i">
                                        <?php the_post_thumbnail(array(140,140)) ?>
                                    </div>
                                    <div class="p-l-t">
                                        <p><?php the_title() ?><p>
                                        <P>优惠价<span>￥<?php echo get_post_meta(get_the_ID(), 'PRODUCT_PRICE', true); ?></span></P>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;}?>
                        </ul>
                    </div>
                </div>
                
             	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>热销排行</span>
                    </div>
                    <div class="products-left-box-list">
                    	<ul>
                    	<?php
						$posts = query_posts(array('post_type'=>'product', 'posts_per_page'=>3, 'genre'=> 'hot'));
						if (have_posts()){ while(have_posts()) : the_post();
						?>
                        	<li>
                            	<a href="<?php the_permalink() ?>">
                                    <div class="p-l-i">
                                        <?php the_post_thumbnail(array(140,140)) ?>
                                    </div>
                                    <div class="p-l-t">
                                        <p><?php the_title() ?><p>
                                        <P>优惠价<span>￥<?php echo get_post_meta(get_the_ID(), 'PRODUCT_PRICE', true); ?></span></P>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;}?>
                        </ul>
                    </div>
                </div>
                <!--/products-left-box-->
            </div>
            
            <div class="products-right">
            	<div class="products-list-wrap">
   
                    <div class="products-list-result">
                    	<div class="products-list-result-title">
                        	<div class="ti dib-wrap">
                            	<span class="dib"><a class="active"><?php echo $the_page_cat_name ?></a></span>
                            </div>
                        </div>
                        <div class="products-info">
                        	<div class="products-info-c">
                            	
                                <!--以下部分为文章内容-->
                                <div class="news-list">
                                    <ul>
                                    	<?php
                                    	$args = array(
                                    		'cat'				=> $the_page_cat_id,
                                    		'posts_per_page'	=> 1,
                                    		'paged'				=> $paged>1 ? $paged : 1
                                    	);
										$posts = query_posts($args);
										if (have_posts()){ while(have_posts()) : the_post();
										?>
                                        <li>
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            <span><?php the_date() ?></span>
                                        </li>
                                    	<?php endwhile;} ?>
                                    </ul>
                                </div>
                                <!--以上部分为文章内容-->                                
                                <p>
                                    <?php pingwu_pagin_nav(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div> 
    <!--/ListOfProducts-->


<?php
get_footer() ?>
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Pinwu
 */
get_header();
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
        
        <!--products-bigPic-show-->
        
        <div class="products-show base-clear">
        	<div class="products-show-left">
            	<div class="big-pic-show">
                	<img id="big-pic" src="<?php bloginfo('template_url'); ?>/images/b1.jpg" />
                </div>
                
                <div class="big-pic-list base-clear">
                	<div id="l-b" class="left-btn">
                    	<a href="javascript:;">&lt;</a>
                    </div>
                    <div class="list-wrap">
                    	<ul id="s-pic-list">
                                <?php
                                for ($i=1; $i < 7; $i++) {
                                    if (MultiPostThumbnails::has_post_thumbnail(get_post_type(), "single-image-$i")){
                                        echo '<li><img src="'
                                        .MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), "single-image-$i", NULL, 'single-image-thumbnail')
                                        .'" data-big="'
                                        .MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), "single-image-$i")
                                        .'" /></li>';
                                    }
                                }
                                ?>
                        </ul>
                    </div>
                	<div id="r-b" class="right-btn">
                    	<a href="javascript:;">&gt;</a>
                    </div>
                </div>
                
            </div>
        	<div class="products-show-right">
            
            	<div class="products-show-info">
                
                	<h1><?php the_title() ?></h1>
                    
                    <div class="info-wrap">
                        <p class="info-p">
                            <?php the_excerpt() ?>
                        </p>                    
                    </div>
                    
                    <div class="fw-wrap">
                    </div>
                    
                    <div class="material">
                    	<?php 
                    	
                    	$terms = get_the_terms(get_the_ID(), 'genre');
                    	foreach ($terms as $term) {
                            if ($term->parent>0){
                                $term_image_src = z_taxonomy_image_url($term->term_id);
                                if (!empty($term_image_src)){
                                    $term_parent = get_term($term->parent, 'genre');
                                    echo '<p>'.$term_parent->name.'：<span class="mater-pic"><b></b>';
                                    echo '<img src="'.$term_image_src.'" />';
                                    echo '</span><span class="ms">'.$term->description.'</span></p>'."\n";
                                }
                            }
                    	}
                    	
                    	?>
                        <div class="tip">该套餐款式可设计，尺寸可变化，颜色可选择，预算可高低。</div>
                    </div>
                    
                    <div class="price">
                    	<h2>网上优惠价：<span><?php echo get_post_meta(get_the_ID(), 'PRODUCT_PRICE', true); ?></span><em>(仅供参考，请以实际成交价为准)</em></h2>
                        <p>定制周期：30天左右（视配送距离而定）</p>
                    </div>
                    
                    <div class="contact">
                    	<a href="#" class="contact-btn"></a>
                        <span>联系电话：400-610-1360</span>
                    </div>
                    
                </div>
                
                <div class="lcad">
                	<img src="<?php bloginfo('template_url'); ?>/images/diy-btn.gif" />
                </div>
                
            </div>
        </div>
        
        <!--/products-bigPic-show-->
        
        
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
                            	<span class="dib"><a class="active" href="#a1">本套餐产品介绍</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a2">套餐详情</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a3">定制优势</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a4">定制流程</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a5">购物保障</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a6">实样参考</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a7">门店活动</a></span>
                                <span class="dib l">|</span>
                            	<span class="dib"><a href="#a8">照片</a></span>
                            </div>
                        </div>
                        <div class="products-info">
                        	<div class="products-info-c">
                            	
                                <!--以下部分为文章内容-->
                                <!--news
                                <div class="tit-wrap">
                                	<h2 id="a1">
                                    	<span class="arrow-up"></span>
                                        套餐详情
                                    </h2>
                                </div>
                            	<news-title-->
                                <?php the_content() ?>

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
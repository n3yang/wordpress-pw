<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Pinwu
 */
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
    	
        <?php echo get_ad_banner() ?>
        
        
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
                    	<p>当前柜身：<span class="mater-pic"><b></b><img src="<?php bloginfo('template_url'); ?>/images/c1.jpg" ></span><span class="ms">面板描述：高端、大气、上档次</span></p>
                    	<p>当前柜身：<span class="mater-pic"><b></b><img src="<?php bloginfo('template_url'); ?>/images/c2.jpg" ></span><span class="ms">面板描述：高端、大气、上档次</span></p>
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
                        	<li>
                            	<a href="#">
                                	<em>·</em>有类似大班台的双人大书桌
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>书柜组合衣柜，介绍一下？
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>有类似大班台的双人大书桌
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>有类似大班台的双人大书桌
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>儿童书柜设计有什么讲究?
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>书柜组合衣柜，介绍一下？
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>儿童书柜设计有什么讲究?
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<em>·</em>书柜组合衣柜，介绍一下？
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>经典定制推荐</span>
                    </div>
                    <div class="products-left-box-list">
                    	<ul>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
            	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>热销排行</span>
                    </div>
                    <div class="products-left-box-list">
                    	<ul>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                    <div class="p-l-i">
                                        <img src="<?php bloginfo('template_url'); ?>/images/left-p-img.jpg" />
                                    </div>
                                    <div class="p-l-t">
                                        <p>简约主义家居APOIU1<p>
                                        <p>优惠价<span>￥48505</span></p>
                                    </div>
                                </a>
                            </li>
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
                        	<div class="products-info-t">
                            	<p>1、量身定制风格打造：满足不同层次阶段不同消费水平的人群。但是在现代家具风格方面我们还是以大众化的风格基调为标准，不会太另类或者专注与某种特别人群而设计考虑。<br><br>
2、特殊房型完美攻克：这个系列会针对一些特殊户型比如有凹位的位置如何解决或者飘窗的合理利用等等方面结合我们的板材给予最理想的处理，使家居的合理性体现得完美无瑕。</p>
                            </div>
                        	<div class="products-info-c">
                            	
                                <!--以下部分为文章内容-->
                                <!--news-title-->
                                <div class="tit-wrap">
                                	<h2 id="a1">
                                    	<span class="arrow-up"></span>
                                        套餐详情
                                    </h2>
                                </div>
                            	<!--/news-title-->
                                
                                
                                <div class="tit-wrap">
                                	<h2 id="a2">
                                    	<span class="arrow-up"></span>
                                        定制优势
                                    </h2>
                                </div>
                                
                                
                                <!--news-c-->
                                <div class="c-wrap">
                                    <p>
                                        1、量身定制风格打造：满足不同层次阶段不同消费水平的人群。但是在现代家具风格方面我们还是以大众化的风格基调为标准，不会太另类或者专注与某种特别人群而设计考虑。
                                        2、特殊房型完美攻克：这个系列会针对一些特殊户型比如有凹位的位置如何解决或者飘窗的合理利用等等方面结合我们的板材给予最理想的处理，使家居的合理性体现得完美无瑕。
                                    </p>
                                    <img src="<?php bloginfo('template_url'); ?>/images/lz.gif">
                                </div>
                                <!--/news-c-->
                                
                                <div class="tit-wrap">
                                	<h2 id="a3">
                                    	<span class="arrow-up"></span>
                                        定制流程
                                    </h2>
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
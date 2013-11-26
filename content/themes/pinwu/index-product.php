<?php

$paged = get_query_var('paged');
// get filter setting from request
// style-feature-price-board-keyword(re)
$filters = explode('-', get_query_var('filter'));
for ($i=0; $i < 4; $i++) { 
	$filters[$i] = !empty($filters[$i]) ? $filters[$i] : 0;
}
$filters = array_combine(array('style', 'feature', 'price', 'board'), $filters);

// get menu setting
$genre_obj = get_term_by('slug', get_query_var('genre'), 'genre');
$product_menu = pinwu_get_product_menu_setting($genre_obj->term_id);
$term_base_link = get_term_link($genre_obj, 'room');
$setting = pinwu_get_product_setting($genre_obj->term_id);
$nav_nth = $setting['nav_nth'];
?>
	<!--Crumbs-->
<!--
	<div class="crumbs base-clear">
    	<div class="crumbs-list">
        	<span>
            	<a href="#" class="home-icon">首页</a>
            </span>
        	<span>
            	<a href="#">卧房定制家居</a>
            </span>
        </div>
    </div>
-->
	<!--/Crumbs-->
    

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/products.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/products.js"></script>
    <script type="text/javascript">nav_active_nth=<?php echo $nav_nth;?></script>
	<!--ListOfProducts-->
    <div class="main">
    	
        <?php echo pinwu_get_ad_banner() ?>
        
        <div class="products base-clear">
        	<div class="products-left">
            	<!--products-left-box-->
            	<div class="products-left-box">
                	<div class="products-left-box-title">
                    	<span>经典定制推荐</span>
                    </div>
                    <div class="products-left-box-list">
                    	<ul>
	                    <?php
						$posts = query_posts(array('post_type'=>'product', 'posts_per_page'=>3, 'genre'=> 'classic'));
						if (have_posts()){
						while(have_posts()) : the_post();
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
						<?php endwhile; } ?>
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
						if (have_posts()){
						while(have_posts()) : the_post();
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
                            <?php endwhile; } ?>
                        </ul>
                    </div>
                </div>
                <!--/products-left-box-->
            </div>
            
            
            <div class="products-right">
            	<div class="products-list-wrap">
                	<div class="products-list-title">
                    	<h2><span><?php echo $product_menu['name'] ?>筛选</span><em></em></h2>
                	</div>

                    <div class="products-list-screen">
					<?php 
					$filter_names = array('style'=>'风格', 'feature'=>'功能', 'price'=>'价格', 'board'=>'板材');
					foreach ($product_menu as $key => $value) {
						echo '<dl class="base-clear">';
						echo '<dt>'.$filter_names[$key].'：</dt>';
						echo '<dd class="dib-wrap">';
						$link_all = implode('-', array_merge($filters, array($key=>0)));
						$css_active = $filters[$key]==0 ? ' active' : '';
						echo "<span class=\"dib$css_active\">";
						echo "<a href=\"$term_base_link/filter/$link_all\">全部</a></span>\n";
						foreach ($value as $term) {
							$link = $term_base_link . '/filter/' . implode('-', array_merge($filters,array($key=>$term->term_id)));
							$css_active = $filters[$key]==$term->term_id ? ' active' : '';
							echo '<span class="dib'.$css_active.'"><a href="'.$link.'">'.$term->name."</a></span>\n";
						}
						echo '</dd>';
						echo "</dl>\n";
					}
					?>
                    </div>
                    
                    <div class="products-list-result">
                    	<div class="products-list-result-title">
                        	<div class="t base-clear">
                            	<span>筛选结果</span>
                            	<div class="handover">
                                	<a id="noPicText" class="active" title="文本展示" href="javascript:;"></a>
                                	<a id="PicText" title="图文列表" href="javascript:;"></a>
                            	</div>
                            </div>
                        </div>
                        <div id="p-list" class="products-list-result-list">
                        	<ul class="base-clear">

<?php
// build tax condition
$tax_query['relation'] = 'AND';
foreach ($filters as $key => $value) {
	if (!empty($value)) {
		$tax_query[] = array(
			'taxonomy'	=> 'genre',
			'field'		=> 'id',
			'terms'		=> $value
		);
	}
}
// add product genre
$tax_query[] = array(
	'taxonomy'	=> 'genre',
	'field'		=> 'id',
	'terms'		=> $genre_obj->term_id,
);

$args = array(
	'post_type'			=> 'product',
	'posts_per_page'	=> 1,
	'paged'				=> $paged>1 ? $paged : 1,
	'tax_query'			=> $tax_query
);
$posts = query_posts($args);
if ( have_posts() ){
while(have_posts()) : the_post();
?>
                                <li>
                                    <div class="p-l-i">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_post_thumbnail(array(140,140)) ?>
                                        </a>
                                    </div>
                                    <div class="p-l-t">
                                        <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><p>
                                        <P>优惠价：<span>￥<?php echo get_post_meta(get_the_ID(), 'PRODUCT_PRICE', true);?></span></P>
                                        <P class="p-btn"><span><a href="#">在线咨询</a></span><span><a href="<?php the_permalink() ?>">详情</a></span></P>
                                    </div>
                                </li>
<?php
endwhile;
} else {
	echo '<li>没有查询到信息</li>';
}
?>

                            </ul>
                            <p>
                                <?php pingwu_pagin_nav(); ?>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div> 
    <!--/ListOfProducts-->

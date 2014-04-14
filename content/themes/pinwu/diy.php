<?php
/**
 * Template Name: DIY Page
 * The template for pinwu DIY page
 * 
 * @package WordPress
 * @subpackage Pinwu
 */

// the default feature
$filters['feature_id'] = !empty($_REQUEST['feature']) ? intval($_REQUEST['feature']) : 81;
$filters['board_id'] = !empty($_REQUEST['board']) ? intval($_REQUEST['board']) : 0;
$filters['ground_id'] = !empty($_REQUEST['ground']) ? intval($_REQUEST['ground']) : 0;
$filters['wall_id'] = !empty($_REQUEST['wall']) ? intval($_REQUEST['wall']) : 0;

// get the product info
$tax_query['relation'] = 'AND';
foreach ($filters as $key => $value) {
	if ($value > 0) {
		$tax_query[] = array(
			'taxonomy'	=> 'genre',
			'field'		=> 'id',
			'terms'		=> $value
		);
	}
}

$args = array(
	'post_type'			=> 'product',
	'posts_limit'		=> 1,
	'tax_query'			=> $tax_query
);
$posts = query_posts($args);
$product = array();
if ( have_posts() ){
	$post = $posts[0];
	preg_match('/src="([^"]+)" /', get_the_post_thumbnail($post->ID, 'large'), $matches);
	$product['thumb_src'] = !empty($matches[1]) ? $matches[1] : '';
	$product['link'] = get_permalink($post->ID);
}

// return ajax request, and break;
if ($_REQUEST['method']=='ajax') {
	exit(json_encode($product));
}


// get the wall/board/ground's setting with page_feature_id from function.php
/*
$settings = pinwu_get_product_setting();
foreach ($settings as $setting) {
	if (in_array($filters['feature_id'], $setting['feature'])) {
		$page_boards = $setting['board'];
		$page_walls = $setting['wall'];
		$page_grounds = $setting['ground'];
	}
}
*/
// get the wall/board/ground's same setting 
$page_boards = range(409, 416, 411, 407);
$page_walls = range(501, 504);
$page_grounds = range(601, 604);


// show header
get_header();
?>




	<!--Crumbs
	<div class="crumbs base-clear">
    	<div class="crumbs-list">
        	<span>
            	<a href="#" class="home-icon">首页</a>
            </span>
        	<span>
            	<a href="#">用户登录</a>
            </span>
        </div>
    </div>
	/Crumbs-->
    	


	<!--HomeDiy-->
    
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/homeDiy.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/homeDiy.js"></script>
    <script>
		var default_fun_id = <?php echo $filters['feature_id'] ?>;
		var nav_active_nth = 8;
	</script>
    
    
    <div class="homeDiy-wrap">
    	
        <div class="changePic">
        	<img class="changePic1" src="<?php bloginfo('template_url'); ?>/images/ic_banner1.jpg" />
        	<img class="changePic2" src="<?php bloginfo('template_url'); ?>/images/ic_banner2.jpg" />
        	<img class="changePic3" src="<?php bloginfo('template_url'); ?>/images/ic_banner3.jpg" />
        </div>
        
        <div class="experienceroom-wrap">
        	<div class="experienceroom-title">
            	<p>
                	选择一个你喜欢的功能分类，开始你的设计之旅..
                	<span class="t-h">Step1 选择功能分类</span>
                </p>
            </div>
            
            <div class="experienceroom-function">
            	<a id="pre" class="pre" href="javascript:;" title="上一页"></a>
                <div id="bscroll" class="bscroll">
                	<ul id="scroll2">
                		<?php
                		// get the feature term with thumb
                		$terms = get_terms('genre', array('parent'=>80, 'hide_empty'=>1, 'orderby'=>'slug'));
                		foreach ($terms as $key => $term) {
                			$thumb = z_taxonomy_image_url($term->term_id);
                			if (!empty($thumb)){
                		?>
                    	<li id="li<?php echo $term->term_id ?>" class="active">
                        	<a href="/diy/?feature=<?php echo $term->term_id; ?>">
                            	<img src="<?php echo $thumb ?>" alt="" title="" />
                                <p>
                                	<span><?php echo $term->name ?></span>
                                </p>
                            </a>
                        </li>
                        <?php
                			} // end if
                		} // end foreach
                        ?>
                    </ul>
                </div>
            	<a id="next" class="next" href="javascript:;" title="下一页"></a>
            </div>
			<div class="experienceroom-effect base-clear">
            	
                <div id="effect_bigPic" class="effect-bigPic">
                	<div class="effect-bigPic-result">
                    	<a id="effect_bigPic_link" href="#">
                        	<img src="<?php bloginfo('template_url'); ?>/images/effect-pic.jpg" />
                        </a>
                    </div>
                    <div class="effect-bigPic-result-link base-clear">
                    	<a id="result_link_l"  href="#" class="result-link-l">查看方案详情</a>
                        <a class="result-link-r" href="/measure"></a>
                    </div>
            	</div>
                <div id="effect_choose" class="effect-choose">
                    <dl class="base-clear">
                    	<dt>选择板材</dt>
                        <dd data-name="board">
                        	<?php
                        	$terms = get_terms('genre', array('include'=>$page_boards, 'hide_empty'=>1, 'orderby'=>'slug'));
                        	foreach ($terms as $term):
                        		$thumb_url = z_taxonomy_image_url($term->term_id);
                        		if ($thumb_url):
                        	?>
                        	<div class="" data-id="<?php echo $term->term_id ?>">
                                <span class="e-c-p">
                                    <img src="<?php echo $thumb_url ?>" />
                                    <em></em>
                                </span>
                            	<p><?php echo $term->name ?></p>
                            </div>
							<?php
								endif;
							endforeach;
							?>
                        </dd>
                    </dl>
                    <dl class="base-clear">
                    	<dt>选择地面</dt>
                        <dd data-name="ground">
                        	<?php
                        	$terms = get_terms('genre', array('include'=>$page_grounds, 'hide_empty'=>1, 'orderby'=>'slug'));
                        	foreach ($terms as $term):
                        		$thumb_url = z_taxonomy_image_url($term->term_id);
                        		if ($thumb_url):
                        	?>
                        	<div class="" data-id="<?php echo $term->term_id ?>">
                                <span class="e-c-p">
                                    <img src="<?php echo $thumb_url ?>" />
                                    <em></em>
                                </span>
                            	<p><?php echo $term->name ?></p>
                            </div>
							<?php
								endif;
							endforeach;
							?>
                        </dd>
                    </dl>
                    <dl class="base-clear">
                    	<dt>选择墙面</dt>
                        <dd data-name="wall">
                        	<?php
                        	$terms = get_terms('genre', array('include'=>$page_walls, 'hide_empty'=>1, 'orderby'=>'slug'));
                        	foreach ($terms as $term):
                        		$thumb_url = z_taxonomy_image_url($term->term_id);
                        		if ($thumb_url):
                        	?>
                        	<div class="" data-id="<?php echo $term->term_id ?>">
                                <span class="e-c-p">
                                    <img src="<?php echo $thumb_url ?>" />
                                    <em></em>
                                </span>
                            	<p><?php echo $term->name ?></p>
                            </div>
                            <?php
                            	endif;
                            endforeach;
                            ?>
                        </dd>
                    </dl>
                </div>
            </div>
            
        </div>

    </div>
    <script>
		var feature="";
		//post    a.php?feature=1&board=2&ground=1&wall=123
		//{src:"";url:"";}
		//$
    </script>

   

    <div class="no-box">
        <h1><em></em>特殊推荐</h1>
        <ul class="base-clear">
        	<?php
			$posts = query_posts(array('post_type'=>'product', 'posts_per_page'=>7, 'genre'=> 'classic'));
			if (have_posts()){ while(have_posts()) : the_post();
        	?>
            <li>
                <a href="<?php the_permalink() ?>">
                    <i><?php the_post_thumbnail(array(150,113)) ?></i>
                    <span><?php the_title() ?></span>
                </a>
            </li>
	        <?php endwhile;} ?>
        </ul>
    </div>
	<!--/HomeDiy-->

<?php
get_footer();
?>
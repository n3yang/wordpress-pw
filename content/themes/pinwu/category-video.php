<?php

$the_page_cat_slug = get_query_var('category_name');
$cat = get_term_by( 'slug', $the_page_cat_slug, 'category' );
$the_page_cat_name = !is_object($cat) ? '' : $cat->name;
$the_page_paged = get_query_var('paged');

get_header();
?>
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
	<script type="text/javascript">var nav_active_nth=9</script>
	
	<!--ListOfProducts-->
	<div class="main">
		
		<?php echo pinwu_get_ad_banner() ?>

		<div class="products base-clear">
			<?php get_sidebar() ?>
			
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
                                <div class="video-list">
                                    <ul>
										<?php
										$args = array(
											'category_name'		=> $the_page_cat_slug,
											'posts_per_page'	=> 10,
											'paged'				=> $paged>1 ? $paged : 1
										);
										$posts = query_posts($args);
										if (have_posts()){ while(have_posts()) : the_post();
										?>
                                        <li>
                                            <span class="video-thumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(270,180)) ?><p><?php the_title() ?></p></a></span>
                                            <span class="video-summary">
                                            	<p class="video-view-more"><?php the_excerpt() ?></p>
                                            	<p><a href="<?php the_permalink() ?>">查看详情&gt;&gt;</a></p>
                                            </span>
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
get_footer();
?>
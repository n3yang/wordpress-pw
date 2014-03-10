
	<!--index-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/index.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>
	<script type="text/javascript">var nav_active_nth=1</script>

	<!--main-->
	<div class="main base-clear">

		<div class="main-l">
			
			<div class="slide base-clear">
				<div class="slide-big">
					<ul class="slide-imgs">
						<?php
							$posts = get_posts(array('category'=>20));
							foreach ($posts as $post):
						?>
						<li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array(690,398), array('alt'=>get_the_title())) ?></a>
						</li>
						<?php endforeach ?>

					</ul>
				</div>
				<div class="slide-small">
                	<h1></h1>
					<ul class="slide-nav">
						<li>
							<i></i>
							<a href="javascript:;"></a>
						</li>
						<li>
							<i></i>
							<a href="javascript:;"></a>
						</li>
						<li>
							<i></i>
							<a href="javascript:;"></a>
						</li>
						<li>
							<i></i>
							<a href="javascript:;"></a>
						</li>
						<li>
							<i></i>
							<a href="javascript:;"></a>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<div class="main-r">
			
			<div class="main-img-link">
				<a href="/measure"><img src="<?php bloginfo('template_url'); ?>/images/path-btn.gif" alt=""></a>
			</div>
			<div class="main-img-link">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/main-ad.gif" alt=""></a>
			</div>
			
			<div class="news-wrap">
				<h1>品屋快报<a href="<?php echo get_category_link(10) ?>">更多</a></h1>
				<ul>
					<?php
						$posts = get_posts(array('category'=>10));
						foreach ($posts as $post):
					?>
					<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>

		</div>
		
	</div>
	<!--/main-->

	<!-- index-info 字数限制为11字 -->
	<div class="index-info base-clear">
		<div class="info-l base-clear">
			<div class="info-list-2">
				<dl>
					<dt>新品推荐</dt>
					<dd><a href="#"><em></em>冷艳摩卡色调卧房</a></dd>
					<dd><a href="#"><em></em>中式古韵卧房11件套</a></dd>
					<dd><a href="#"><em></em>多功能设计让客餐厅更弹</a></dd>
					<dd><a href="#"><em></em>黄色点缀雅致书房 </a></dd>
				</dl>
				<dl>
					<dt>新品推荐</dt>
					<dd class="h"><a href="#"><em></em>冷艳摩卡色调卧房</a></dd>
					<dd><a href="#"><em></em>中式古韵卧房11件套</a></dd>
					<dd><a href="#"><em></em>多功能设计让客餐厅更弹</a></dd>
					<dd><a href="#"><em></em>黄色点缀雅致书房 </a></dd>
				</dl>
			</div>
			<div class="info-list-3">
				<dl>
					<dt>新品推荐</dt>
					<dd class="n"><a href="#"><em></em>冷艳摩卡色调卧房</a></dd>
					<dd><a href="#"><em></em>中式古韵卧房11件套</a></dd>
					<dd><a href="#"><em></em>多功能设计让客餐厅更弹</a></dd>
					<dd><a href="#"><em></em>黄色点缀雅致书房 </a></dd>
					<dd><a href="#"><em></em>缔造多元儿童房￥12960</a></dd>
					<dd><a href="#"><em></em>厨房清新优雅风范</a></dd>
				</dl>
				<dl>
					<dt>新品推荐</dt>
					<dd><a href="#"><em></em>冷艳摩卡色调卧房</a></dd>
					<dd class="n"><a href="#"><em></em>中式古韵卧房11件套</a></dd>
					<dd><a href="#"><em></em>多功能设计让客餐厅更弹</a></dd>
					<dd><a href="#"><em></em>黄色点缀雅致书房 </a></dd>
					<dd><a href="#"><em></em>缔造多元儿童房￥12960</a></dd>
					<dd><a href="#"><em></em>厨房清新优雅风范</a></dd>
				</dl>
			</div>
				
			<div class="info-list-4">
				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/images/hd.jpg" />
				</a>
			</div>	
		</div>

		<div class="info-r">
			<div class="info-img"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad1.jpg" /></a></div>
			<div class="info-img"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad2.jpg" /></a></div>
			<div class="info-img"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ad3.jpg" /></a></div>
		</div>
	</div>
	<!--/index-info-->

	<!--path-info-->
	<div class="path-info other-box base-clear">
		<h1><em>1F</em>功能定制</h1>
		<div class="path-l">
		<?php
			$posts = get_posts(array('category'=>21, 'posts_per_page'=>2));
			foreach ($posts as $post):
		?>
			<div class="path-img-wrap">
				<a href="<?php the_permalink() ?>" class="path-a">
					<b></b>
					<span class="path-img">
						<?php the_post_thumbnail(array(270,180)) ?>
					</span>
					<span class="path-text base-clear">
						<i><?php the_title() ?></i><em></em>
					</span>
				</a>
			</div>
		<?php endforeach ?>

		</div>
		<div class="path-r">
			<div class="path-big">
				<a href="#">
					<img src="<?php bloginfo('template_url'); ?>/images/path-big.gif" />
				</a>
			</div>

			<div class="ask-wrap base-clear">
				<div class="ask-list">
					<?php
						$posts = get_posts(array('posts_per_page'=>8, 'post_type'=>'question'));
						foreach ($posts as $post):
					?>
					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
					<?php endforeach ?>
				</div>
				<div class="ask-img">
					<a href=""><img src="<?php bloginfo('template_url'); ?>/images/ask-pic.jpg" /></a>
				</div>
			</div>	

		</div>
	</div>
	<!--/path-info-->


	<div class="pic-show other-box big-l base-clear">

		<h1><em>2F</em>特色定制</h1>
		<?php
		$posts = get_posts(array('posts_per_page'=>6, 'category'=> 22));
		$post = $posts[0];
		unset($posts[0]);
		?>
		<div class="big-pic-show">
			<a href="<?php the_permalink() ?>">
				<i><?php the_post_thumbnail(array(400,305)) ?></i>
				<span><?php the_title() ?></span>
			</a>
		</div>
		<div class="small-pic-show">
			<div class="s-t-p">
				<div class="s-t-p-i">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p1.jpg" />
						<div class="s-t-p-t">
							<strong>2013最佳定制方案</br>为您精挑细选的设计</strong>
							<p>30个城市,45个客户,8000多人</br>4星级以上点评点评分数</p>
							<em></em>
						</div>
					</a>
				</div>
			</div>

			<div class="s-p-list">
				<ul class="base-clear">
				<?php foreach ($posts as $post): ?>
					<li>
						<a href="<?php the_permalink() ?>">
							<i><?php the_post_thumbnail(array(140,105)) ?></i>
							<span><?php the_title() ?></span>
						</a>
					</li>
				<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>


	<div class="pic-show other-box big-r base-clear">

		<h1><em>3F</em>热销定制</h1>
		<?php
		$posts = get_posts(array('posts_per_page'=>6, 'category'=> 23));
		$post = $posts[0];
		unset($posts[0]);
		?>
		<div class="big-pic-show">
			<a href="<?php the_permalink() ?>">
				<i><?php the_post_thumbnail(array(400,305)) ?></i>
				<span><?php the_title() ?></span>
			</a>
		</div>

		<div class="small-pic-show">
			<div class="s-t-p">
				<div class="s-t-p-i">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p2.jpg" />
						<div class="s-t-p-t">
							<strong>2013最佳定制方案</br>为您精挑细选的设计</strong>
							<p>30个城市,45个客户,8000多人</br>4星级以上点评点评分数</p>
							<em></em>
						</div>
					</a>
				</div>
			</div>

			<div class="s-p-list">
				<ul class="base-clear">
					<?php foreach ($posts as $post) : ?>
					<li>
						<a href="<?php the_permalink() ?>">
							<i>
								<?php the_post_thumbnail(array(140, 105)) ?>
							</i>
							<span><?php the_title() ?></span>
						</a>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>

	

	<div class="banner-ad">
		<a href="#">
			<img src="<?php bloginfo('template_url'); ?>/images/banner-ad.jpg" />
		</a>
	</div>



	<div class="pic-show other-box big-l base-clear">

		<h1><em>4F</em>智能家居</h1>
		<?php
		$posts = get_posts(array('posts_per_page'=>6, 'category'=> 24));
		$post = $posts[0];
		unset($posts[0]);
		?>
		<div class="big-pic-show">
			<a href="#">
				<i><?php the_post_thumbnail(array(400, 305)) ?></i>
				<span><?php the_title() ?></span>
			</a>
		</div>

		<div class="small-pic-show">
			<div class="s-t-p">
				<div class="s-t-p-i">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p3.jpg" />
						<div class="s-t-p-t">
							<strong>2013最佳定制方案</br>为您精挑细选的设计</strong>
							<p>30个城市,45个客户,8000多人</br>4星级以上点评点评分数</p>
							<em></em>
						</div>
					</a>
				</div>
			</div>

			<div class="s-p-list">
				<ul class="base-clear">
					<?php foreach ($posts as $post): ?>
					<li>
						<a href="<?php the_permalink() ?>">
							<i><?php the_post_thumbnail(array(140, 105)) ?></i>
							<span><?php the_title() ?></span>
						</a>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>


	<div class="pic-show other-box big-r base-clear">

		<h1><em>5F</em>百变定制</h1>
		<?php
		$posts = get_posts(array('posts_per_page'=>6, 'category'=> 25));
		$post = $posts[0];
		unset($posts[0]);
		?>
		<div class="big-pic-show">
			<a href="<?php the_permalink() ?>">
				<i><?php the_post_thumbnail(array(400, 305)) ?></i>
				<span><?php the_title() ?></span>
			</a>
		</div>

		<div class="small-pic-show">
			<div class="s-t-p">
				<div class="s-t-p-i">
					<a href="#">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p4.jpg" />
						<div class="s-t-p-t">
							<strong>2013最佳定制方案</br>为您精挑细选的设计</strong>
							<p>30个城市,45个客户,8000多人</br>4星级以上点评点评分数</p>
							<em></em>
						</div>
					</a>
				</div>
			</div>

			<div class="s-p-list">
				<ul class="base-clear">
					<?php foreach($posts as $post): ?>
					<li>
						<a href="<?php the_permalink() ?>">
							<i><?php the_post_thumbnail(array(140, 105)) ?></i>
							<span><?php the_title() ?></span>
						</a>
					</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

	</div>

	
	<div class="no-box">
		<h1><em>6F</em>我秀我家</h1>
		<ul class="base-clear">
		<?php
		$posts = get_posts(array('posts_per_page'=>7, 'category'=> 26));
		foreach ($posts as $post) :
		?>
			<li>
				<a href="<?php the_permalink() ?>">
					<i><?php the_post_thumbnail(array(150, 113)) ?></i>
					<span><?php the_title() ?></span>
				</a>
			</li>
		<?php endforeach ?>
		</ul>

	</div>
	<!--/index-->

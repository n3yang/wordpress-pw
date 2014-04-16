
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
					<dt>衣帽间</dt>
					<dd><a href="http://www.51efc.com/product/934.html"><em></em>“L”型卧式的隐藏衣帽间</a></dd>
					<dd><a href="http://www.51efc.com/product/348.html"><em></em>圣托里尼经典白色系</a></dd>
					<dd><a href="http://www.51efc.com/product/948.html"><em></em>衣帽间就要以我为中心</a></dd>
					<dd><a href="http://www.51efc.com/product/954.html"><em></em>我的家像个“变色龙” </a></dd>
				</dl>
				<dl>
					<dt>电视柜组合</dt>
					<dd class="h"><a href="http://www.51efc.com/product/1607.html"><em></em>色彩简单组合更具立体感</a></dd>
					<dd><a href="http://www.51efc.com/product/1622.html"><em></em>简约演绎另类地中海风格</a></dd>
					<dd><a href="http://www.51efc.com/product/777.html"><em></em>让我们将组合最大化</a></dd>
					<dd><a href="http://www.51efc.com/product/617.html"><em></em>黑巧克力搭配牛奶的滋味 </a></dd>
				</dl>
			</div>
			<div class="info-list-3">
				<dl>
					<dt>书柜组合</dt>
					<dd><a href="http://www.51efc.com/product/1713.html"><em></em>完美的“凸”形掩饰设计</a></dd>
					<dd class="n"><a href="http://www.51efc.com/product/1313.html"><em></em>小巧、多功能的北欧书柜</a></dd>
					<dd><a href="http://www.51efc.com/product/367.html"><em></em>小卧室同样拥有独立书柜</a></dd>
					<dd><a href="http://www.51efc.com/product/1750.html"><em></em>功能化的阅读空间 </a></dd>
					<dd><a href="http://www.51efc.com/product/1797.html"><em></em>占天不占地提升空间收纳</a></dd>
					<dd><a href="http://www.51efc.com/product/1802.html"><em></em>书房来袭独立大空间设计</a></dd>
				</dl>
				<dl>
					<dt>整体衣柜</dt>
					<dd class="n"><a href="http://www.51efc.com/product/1348.html"><em></em>小空间、大储物</a></dd>
					<dd><a href="http://www.51efc.com/product/1631.html"><em></em>“黑”与“红”，勾画新中式</a></dd>
					<dd><a href="http://www.51efc.com/product/1594.html"><em></em>在“绿野仙踪”找寻勇敢的心</a></dd>
					<dd><a href="http://www.51efc.com/product/1340.html"><em></em>用简单线条唱出幽美旋律 </a></dd>
					<dd><a href="http://www.51efc.com/product/1335.html"><em></em>黑、白、红的经典演义</a></dd>
					<dd><a href="http://www.51efc.com/product/423.html"><em></em>做一个优雅的公主梦</a></dd>
				</dl>
			</div>
				
			<div class="info-list-4">
				<a href="/activities-315">
					<img src="<?php bloginfo('template_url'); ?>/images/hd.jpg" />
				</a>
			</div>	
		</div>

		<div class="info-r">
			<div class="info-img"><a href="http://www.51efc.com/product/2695.html"><img src="<?php bloginfo('template_url'); ?>/images/ad1.jpg" /></a></div>
			<div class="info-img"><a href="http://www.51efc.com/product/genre/study"><img src="<?php bloginfo('template_url'); ?>/images/ad2.jpg" /></a></div>
			<div class="info-img"><a href="http://www.51efc.com/product/2005.html"><img src="<?php bloginfo('template_url'); ?>/images/ad3.jpg" /></a></div>
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
					<a href="http://www.51efc.com/measure"><img src="<?php bloginfo('template_url'); ?>/images/ask-pic.jpg" /></a>
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
					<a href="http://www.51efc.com/product/genre/room">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p1.jpg" />
						<div class="s-t-p-t">
							<strong>每个人都有自己的性格</br>都有自己梦想的生活环境</strong>
							<p>“小资”不是指你也不是指我或者他</br>而是一种生活的情调这种情调品屋带给你</p>
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
					<a href="http://www.51efc.com/product/genre/study">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p2.jpg" />
						<div class="s-t-p-t">
							<strong>它有一种让人无法抗拒的魅力</br>它能使人一瞬间就停住脚步</strong>
							<p>它是我们创作上的里程碑</br>它是您生活中的伴侣 爱上它，爱上品屋</p>
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
					<a href="http://www.51efc.com/product/genre/room">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p3.jpg" />
						<div class="s-t-p-t">
							<strong>相知后就不能忘记</br>因为这是一个新的世界</strong>
							<p>相守后就不能分离</br>因为这是一生的关怀--智在品屋</p>
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
					<a href="http://www.51efc.com/product/genre/wood">
						<img src="<?php bloginfo('template_url'); ?>/images/s-t-p4.jpg" />
						<div class="s-t-p-t">
							<strong>生活是变化的</br>需求是变化的</strong>
							<p>定制就是变的艺术</br>变在品屋、变在生活、变在家</p>
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

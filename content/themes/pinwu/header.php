<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Pinwu
 */
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php bloginfo( 'name' );?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/ui.css"/>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/global.js"></script>

<?php wp_head();?>
</head>

<body>
<!-- site-nav -->
<div class="site-nav">
	<div class="site-nav-bd">
		<ul class="site-nav-bd-r">
			<?php
			$current_user = wp_get_current_user();
			if ($current_user->ID==0) {
			?>
			<li class="login-info menu">
				<div class="menu-hd">
					<a href="/login">用户登录</a> | <a href="/login">注册</a>
				</div>
			</li>
			<?php
			} else {
			?>
			<li class="login-info menu">
				<div class="menu-hd">
					<a href="#"><?php echo $current_user->user_login; ?></a> | <a href="/login?act=out">退出</a>
				</div>
			</li>
			<?php } ?>
			<li class="weibo menu">
				<div class="menu-hd">
					<a href="#">
						<span class="weibo-icon"></span>
						<span>官方微博</span>
					</a>
				</div>
			</li>
		</ul>
	</div>
</div>
<!-- /site-nav -->

<div class="wrap">
	

	<!-- head -->
	<div class="head">
		<div class="head-wrap">
			<div class="logo">
				<a href="/">
					<img src="<?php bloginfo('template_url'); ?>/images/logo.gif" />
				</a>			
			</div>
			<div class="search">
				<div class="search-wrap">
					<form action="/search/" method="post" id="search-form">
						<div id="search-input" class="search-input">
							<label id="search-label">请输入您要搜索的关键字</label>
							<input type="text" value="" name="s" id="search-text" />
						</div>
						<input class="search-btn" type="button" value=""/>
					</form>
				</div>
				<div class="search-keyword dib-wrap">
<!--
 					<span class="dib">
						<a href="#">榻榻米衣柜</a>
					</span>
					<span class="dib">
						<a href="#">电视柜</a>
					</span>
					<span class="dib">
						<a href="#">飘窗利用</a>
					</span>
					<span class="dib h">
						<a href="#">儿童房</a>
					</span>
					<span class="dib">
						<a href="#">定制床</a>
					</span>
					<span class="dib">
						<a href="#">多功能书房设计</a>
					</span>
					<span class="dib">
						<a href="#">进门玄关的鞋柜如何设计？</a>
					</span>
-->
				</div>
			</div>
			<div class="tel"></div>
		</div>
	</div>
	<!-- /head -->
	
	<div class="nav base-clear">

		<!-- nav -->
		<div class="nav-wrap">
			<ul class="base-clear">
				<li>
					<a href="/" title="首页">首页</a>
				</li>
				<li>
					<a href="/product/genre/room" title="卧房家具定制">卧房家具定制</a>
				</li>
				<li>
					<a href="/product/genre/study" title="书房家具定制">书房家具定制</a>
				</li>
				<li>
					<a href="/product/genre/door" title="门的世界">门的世界</a>
				</li>
				<li>
					<a href="/product/genre/chest" title="整体衣柜">整体衣柜</a>
				</li>
				<li>
					<a href="/diy" title="家具DIY">家具DIY</a>
				</li>
				<li>
					<a href="/product/genre/young" title="青少年房定制">青少年房定制</a>
				</li>
				<li>
					<a href="#" title="智能家居">智能家居</a>
				</li>
				<li>
					<a href="/article/category/video" title="视频展示">视频展示</a>
				</li>
				<li>
					<a href="#" title="定制导购">定制导购</a>
				</li>
				<li>
					<a href="/question" title="问答">问答</a>
				</li>
			</ul>
		</div>
		<!-- /nav -->

		<!-- map -->
		<div id="show-btn" class="map-btn">
			<a href="javascript:;" title="展示店地址">展示店地址</a>
			<div id="map-box">
				<div class="map-wrap">
					<img src="<?php bloginfo('template_url'); ?>/images/map.gif" />
				</div>
			</div>
			<div id="map-i"></div>
		</div>
		<!-- /map -->

	</div>
	
	<!-- path -->
	<div class="path">
		<a href="/measure">
			<img src="<?php bloginfo('template_url'); ?>/images/path.gif" />
		</a>
	</div>
	<!-- /path -->

	<!--TOP-Head-->
	
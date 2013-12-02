<?php
/**
 * The template for displaying the footer.
 * 
 * @package WordPress
 * @subpackage Pinwu
 */
?>


	<div class="foot">

		<div class="foot-link base-clear">
			<ul>
				<li>
					<a href="#">注册新用户</a>
				</li>
				<li>
					<a href="#">了解产品工艺</a>
				</li>
				<li>
					<a href="#">服务流程</a>
				</li>
				<li>
					<a href="#">常见问题解答</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="#">免费上门量尺设计</a>
				</li>
				<li>
					<a href="#">电话预约</a>
				</li>
				<li>
					<a href="#">在线咨询预约</a>
				</li>
				<li>
					<a href="#">网络申请</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="#">全国配送中心</a>
				</li>
				<li>
					<a href="#">售后服务</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="#">量尺送200元</a>
				</li>
				<li>
					<a href="#">优惠的购买价格</a>
				</li>
			</ul>
			<ul class="show-map">
				<li>
					<span class="base-clear">
						<em>朝阳分店：</em>
						<p>朝阳区熊市口路甲85250号<br>TEL 010-56565645<img src="<?php bloginfo('template_url'); ?>/images/look-map.gif" /><p>
					</span>
				</li>
				<li>
					<span class="base-clear">
						<em>朝阳分店：</em>
						<p>朝阳区熊市口路甲85250号<br>TEL 010-56565645<img src="<?php bloginfo('template_url'); ?>/images/look-map.gif" /><p>
					</span>
				</li>
			</ul>
			<div class="show-map-box">
			</div>
		</div>

		<div class="footer-hd">
			<span class="dib-wrap">
				<a class="dib" href="#">关于我们</a>
				<em class="dib">|</em>
				<a class="dib" href="#">联系我们</a>
				<em class="dib">|</em>
				<a class="dib" href="#">友情链接</a>
			</span>
		</div>

		<div class="footer-hd">
			<span>2013-2014 © 品屋（北京）家居用品有限公司 <br>版权所有 
经营许可证编号: <a href="">京B2-2006123122</a> 备案号: <a href="">京ICP备080012346号</a> 备案编号:440112312
			</span>
		</div>
		<div class="footer-hd">
			<span>
				<img src="<?php bloginfo('template_url'); ?>/images/conpy.gif" />
			</span>
		</div>
	</div>

</div>
<script type="text/javascript">
if (typeof(nav_active_nth)!='undefined') { 
	$('.nav-wrap ul li:nth-child('+nav_active_nth+')').attr('class','active');
}
</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

    global $wpdb;
    echo "<pre>";
    print_r( $wpdb->queries );
    echo "</pre>";

	wp_footer();
?>
</body>
</html>
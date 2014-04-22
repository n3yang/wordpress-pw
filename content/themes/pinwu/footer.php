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
					<a href="http://www.51efc.com/login">注册新用户</a>
				</li>
				<li>
					<a href="#">定制流程</a>
				</li>
				<li>
					<a href="http://www.51efc.com/question">常见问题</a>
				</li>
				<li>
					<a href="#">定制优势</a>
				</li>
				<li>
					<a href="#">品屋特色</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://www.51efc.com/product/genre/room">卧房家具定制</a>
				</li>
				<li>
					<a href="http://www.51efc.com/product/genre/study">书房客厅定制</a>
				</li>
				<li>
					<a href="http://www.51efc.com/product/genre/young">青少年房定制</a>
				</li>
				<li>
					<a href="http://www.51efc.com/product/genre/wood">实木家具定制</a>
				</li>
				<li>
					<a href="http://www.51efc.com/diy">空间DIY</a>
				</li>
				<li>
					<a href="http://www.51efc.com/#">智能家居</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://www.51efc.com/genuine" target="_blank">正品保证</a>
				</li>
				<li>
					<a href="http://www.51efc.com/privacy" target="_blank">隐私保护</a>
				</li>
				<li>
					<a href="http://www.51efc.com/statement" target="_blank">免责声明</a>
				</li>
			</ul>
			<ul>
				<li>
					<a href="#">八项免费服务</a>
				</li>
				<li>
					<a href="javascript:;" onclick="NTKF.im_openInPageChat()">订单查询</a>
				</li>
				<li>
					<a href="javascript:;" onclick="NTKF.im_openInPageChat()">活动咨询</a>
				</li>
			</ul>
			<ul class="show-map">
				<li>
					<span class="base-clear">
						<em>地址：</em>
						<p>北京市朝阳区十里河居然靓屋灯饰城5-020<a href="http://j.map.baidu.com/cAZTA" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/look-map.gif" style="vertical-align: middle;" /></a><p>
					</span>
				</li>
				<li>
					<span class="base-clear">
						<em>联系电话：</em>
						<p>010-87373685<p>
					</span>
				</li>
				<li>
					<span class="base-clear">
						<em>服务热线：</em>
						<p>400-666-6490<p>
					</span>
				</li>
				<li>
					<span class="base-clear">
						<em>企业邮箱：</em>
						<p>51efc@51efc.com<p>
					</span>
				</li>
			</ul>
			<div class="show-map-box">
			</div>
		</div>

		<div class="footer-hd">
			<span class="dib-wrap">
				<a class="dib" href="http://www.51efc.com/joined">了解品屋</a>
				<em class="dib">|</em>
				<a class="dib" href="http://www.51efc.com/joined">加入品屋</a>
				<em class="dib">|</em>
				<a class="dib" href="#">友情链接</a>
			</span>
		</div>

		<div class="footer-hd">
			<span>2013-2014 © 品屋（北京）家居用品有限公司 <br>版权所有 
<!-- 经营许可证编号: <a href="">京B2-2006123122</a> --> 备案号: <a href="">京ICP备13050627号-1</a> <!-- 备案编号:440112312 -->
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
<script language="javascript" type="text/javascript">
<?php $current_user = wp_get_current_user(); ?>
NTKF_PARAM = {
  siteid:"kf_9858",                            //Ntalker提供平台基础id,
  settingid:"kf_9858_1393396291892",          //Ntalker分配的缺省客服组id  
  uid:"<?php echo $current_user->ID==0 ? '' : $current_user->ID; ?>",                                //用户id
  uname:"<?php echo $current_user->user_login; ?>",                     //用户名
}
</script>
<script type="text/javascript" src="http://download.ntalker.com/t2d2/ntkfstat.js?" charset="utf-8"></script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

    // global $wpdb;
    // echo "<pre>";
    // print_r( $wpdb->queries );
    // echo "</pre>";

	wp_footer();
?>
</body>
</html>
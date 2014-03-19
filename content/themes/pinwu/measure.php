<?php
/**
 * Template Name: Measure Page
 * The template for measure page
 * 
 * @package WordPress
 * @subpackage Pinwu
 */
if (!empty($_POST['submit'])) {
	$current_user = wp_get_current_user();
	if (!$current_user->ID){
		$error = '请登录后再提交测量信息';
	}
	
	$error = '';
	if (empty($_POST['uname'])) {
		$error = '请输入您的姓名';
	} else if (empty($_POST['tel'])) {
		$error = '请输入您的手机号';
	} else if (sanitize_email($_POST['email'])=='') {
		$error = '请输入您的电子邮箱';
	} else if (empty($_POST['address'])) {
		$error = '请输入您的地址';
	}
	
	if (empty($error)) {
		$content = array(
			'name'	=> $_POST['uname'],
			'tel'	=> $_POST['tel'],
			'sex'	=> $_POST['sex'],
			'email'	=> sanitize_email($_POST['email']),
			'address'=> $_POST['address'],
			'stage'	=> $_POST['stage'],
			'area'	=> $_POST['area'],
			'time'	=> $_POST['time'],
		);
		$postarr = array(
			'post_content'	=> serialize($content),
			'post_type'		=> 'measure',
			'post_author'	=> $current_user->ID,
			'post_status'	=> 'private',
		);
		
		$ins_id = wp_insert_post($postarr);
		if ($ins_id>0){
			exit('<script type="text/javascript" charset="utf-8">alert("申请成功！我们的工作人员会尽快与您取得联系！");location.href="/";</script>');
		} else {
			exit('<script type="text/javascript" charset="utf-8">alert("申请失败！请您稍后再试！");location.href="/";</script>');
		}
	}
}


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
    
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/login.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/happy.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/happy.methods.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/login.js"></script>
    
	
    
    <!--login & register-->
	<div class="login-wrap base-clear">
    	<!--login-->
		<div class="fmleft-box">

        	<div class="experienceroom-title">
            	<p>
                	在右侧申请免费量尺吧
                	<span class="t-h">免费量尺设计流程</span>
                </p>
            </div>
            <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td width="161" align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf01.gif" data-original="<?php bloginfo('template_url'); ?>/images/design_lf01.gif" width="161" height="116"></td>
                    <td width="306">&nbsp;</td>
                    <td width="161" align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf02.gif" data-original="<?php bloginfo('template_url'); ?>/images/design_lf02.gif" width="161" height="116"></td>
                    <td width="360">&nbsp;</td>
                    <td width="161" align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf03.gif" data-original="<?php bloginfo('template_url'); ?>/images/design_lf03.gif" width="161" height="116"></td>
                    </tr>
                  <tr>
                    <td width="174" valign="top" class="t12_02">1、上门量尺：沟通业主需求，确定家具尺寸及摆放位置，记录业主户型的装修风格及个性特点。</td>
                    <td rowspan="3">&nbsp;</td>
                    <td width="161" valign="top" class="t12_02">2、方案分析：由室内设计师、软装设计师、结构设计师、工艺设计师组团对业主需求及户型特点进行个性分析，提出解决方案。</td>
                    <td rowspan="3">&nbsp;</td>
                    <td width="161" valign="top" class="t12_02">3、方案制作：根据方案分析，制作输出平面布置方案、各空间多角度实景效果图、各空间的全屋家具报价表。</td>
                    </tr>
                  <tr>
                    <td valign="top" class="t12_02"><img src="<?php bloginfo('template_url'); ?>/images/design_lf04.gif" data-original="<?php bloginfo('template_url'); ?>/images/design_lf04.gif" width="161" height="116"></td>
                    <td width="161" valign="top" class="t12_02"><img src="<?php bloginfo('template_url'); ?>/images/design_lf05.gif" data-original="<?php bloginfo('template_url'); ?>/images/design_lf05.gif" width="161" height="116"></td>
                    <td width="161" valign="top" class="t12_02"><img src="<?php bloginfo('template_url'); ?>/images/design_lf06.gif" width="161" height="116"></td>
                  </tr>
                  <tr>
                    <td valign="top" class="t12_02">4、确定方案：到门店看样，与设计师沟通确定方案。</td>
                    <td width="161" valign="top" class="t12_02">5、订单处理：您的订单通过网络进入自动化生产排产处理中心。</td>
                    <td width="161" valign="top" class="t12_02">6、网络查询：您可以随时随地通过互联网查询您的订单情况。</td>
                  </tr>
                  <tr>
                    <td align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf07.gif" width="161" height="116"></td>
                    <td>&nbsp;</td>
                    <td align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf08.gif" width="161" height="116"></td>
                    <td>&nbsp;</td>
                    <td align="left" valign="bottom"><img src="<?php bloginfo('template_url'); ?>/images/design_lf09.gif" width="161" height="116"></td>
                    </tr>
                  <tr>
                    <td width="174" valign="top" class="t12_02">7、订单生产：您的订单进入自动化定制生产线，完成加工和包装。</td>
                    <td rowspan="3">&nbsp;</td>
                    <td width="161" rowspan="3" valign="top" class="t12_02">8、预约送货：物流部门工作人员和您预约时间送货上门。</td>
                    <td rowspan="3">&nbsp;</td>
                    <td width="161" rowspan="3" valign="top" class="t12_02">9、上门安装：我们的工人师傅完成安装。</td>
                    </tr>
                  <tr>
                    <td valign="top" class="t12_02"><img src="<?php bloginfo('template_url'); ?>/images/design_lf010.gif" width="174" height="124"></td>
                  </tr>
                  <tr>
                    <td valign="top" class="t12_02">10、售后服务：客服中心的工作人员启动售后服务。</td>
                  </tr>
                </tbody>
            </table>
                        
</div>
        <!--/login-->
        <!--register-->
        <div class="fmright-box">
        	<div class="reg-form-wrap">
            	<h1><img src="<?php bloginfo('template_url'); ?>/images/free-top-title.gif" /></h1>
                <p style="text-align:center">（即日起，预约免费上门量尺成功，即送200元代金券）</p>
                <?php if (!empty($error)): ?>
				<div class="error-box">
                	<p><?php echo $error ;?></p>
                </div>
                <?php endif;?>
                <form id="free_measure" method="post" action="">
                    <div class="form-line2">
                    	<label for="name">姓名：</label>
                        <input id="name" name="uname" class="ui-input" type="text" />
                    </div>
                    <div class="form-line2">
                    	<label for="tel">手机：</label>
                        <input id="tel" name="tel" class="ui-input" type="text" />
                    </div>
                    <div class="form-line2">
                    	<label for="sex">性别：</label>
                        <select id="sex" name="sex">
							<option value="男" selected="selected">男</option>
							<option value="女">女</option>
                        </select>
                    </div>
                    <div class="form-line2">
                    	<label for="email">电子邮箱：</label>
                        <input id="email" name="email" class="ui-input" type="text" />
                    </div>
                    <div class="base-clear"></div>
					<div class="form-line3">
                    	<label for="address">地址：</label>
                        <input id="address" name="address" class="ui-input" type="text" />
                    </div>
                    <div class="base-clear"></div>
                    <div class="form-line2">
                    	<label for="stage">装修阶段：</label>
                        <select id="stage" name="stage">
							<option value="准备装修" selected="selected">准备装修</option>
							<option value="正在装修">正在装修</option>
							<option value="装修完成">装修完成</option>
                        </select>
                    </div>
                  <div class="form-line2">
                    	<label for="area">面积：</label>
                        <select id="area" name="area">
							<option value="80平米以下" selected="selected">80平米以下</option>
							<option value="80-100平米">80-100平米</option>
							<option value="100-120平米">100-120平米</option>
							<option value="120-150平米">120-150平米</option>
							<option value="150平米以上">150平米以上</option>
                        </select>
                  </div>
                  <div class="form-line2">
                    	<label for="time">希望上门日期：</label>
                        <select id="time" name="time">
							<option value="三天内" selected="selected">三天内</option>
							<option value="一周内">一周内</option>
							<option value="一个月内">一个月内</option>
							<option value="一个月以后">一个月以后</option>
                        </select>
                  </div>
                  
                  <div class="base-clear"></div>
                 	<!-- 
					<div class="form-line3">
                    	<label for="v_code_reg">验证码：</label>
                        <input id="v_code_reg" name="v_code" class="ui-input w-80" type="text" />
                        <span class="pic-code"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/image.jpg" /></a></span>
                        <span class="pic-code"><a href="#">换一张</a></span>
                    </div>
                    -->
                    <div class="form-line m-195">
                    	<input class="form-btn" id="login_btn" type="submit" name="submit" value="即刻申请" />
                    </div>
                    
                </form>
            </div>
        </div>
        <!--/register-->
    </div>
	<!--/login & register-->


<?php
get_footer();
?>
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
            
            <div style="width:580px; height:824px; margin: 0 auto;">
                <img src="http://51efc.com/content/themes/pinwu/images/lc.gif" width="580" height="824" />
            </div>
                        
        </div>
        <!--register-->
        <div class="fmright-box" style="height:914px">
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
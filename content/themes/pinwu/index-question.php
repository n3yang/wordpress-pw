<?php

if ($_POST['submit']){
	$max_file_size = 2048000;
	$error = '';
	$current_user = wp_get_current_user();
	if ($current_user->ID==0) {
		$error = '请登录后再提问';
	} else if (empty($_POST['qa_title'])) {
		$error = '请输入标题';
	} else if (empty($_POST['qa_con'])) {
		$error = '请输入内容';
	} else if (!empty($_FILES['qa_pic']['name'])) {
		$filetype = wp_check_filetype($_FILES['qa_pic']['name']);
		if (!preg_match('/^image/', $filetype['type'])) {
			$error = '只允许上传图片文件';
		} else if ($_FILES['qa_pic']['size']>$max_file_size) {
			$error = '允许上传的图片的大小最大为2M';
		}
	}
	if (!empty($error)) {
		echo('<script type="text/javascript" charset="utf-8">alert("'.$error.'");</script>');
	} else {
		// insert post
		$qa = array(
			'post_type'		=> 'question',
			'post_title'	=> sanitize_title($_POST['qa_title']),
			'post_content'	=> sanitize_title($_POST['qa_con']),
			'post_status'	=> 'draft',
			'post_author'	=> $current_user->ID,
		);
		$qa_id = wp_insert_post($qa);
		if (intval($qa_id)<1){
			$error = '提交问题时发生错误，请联系我们的管理员';
			echo('<script type="text/javascript" charset="utf-8">alert("'.$error.'");</script>');
		}
		$upload_dir = wp_upload_dir();
		$filetype = wp_check_filetype($_FILES['qa_pic']['name']);
		$filename = $_FILES['qa_pic']['name'];
		if(file_exists($upload_dir['path'].'/'.$filename)){
			$path_parts = pathinfo($filename);
			$filename = $path_parts['filename'].'-'.time().'.'.$path_parts['extension'];
		}
		$filepath = $upload_dir['path'] . '/' . $filename;
		move_uploaded_file($_FILES['qa_pic']['tmp_name'], $filepath);
		$attachment = array(
			'guid'				=> $filepath,
			'post_mime_type'	=> $filetype['type'],
			'post_title'		=> preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			'post_content'		=> '',
			'post_status'		=> 'inherit'
		);
		$attach_id = wp_insert_attachment($attachment, $filepath, $qa_id);
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		$attach_data = wp_generate_attachment_metadata( $attach_id, $filepath );
		wp_update_attachment_metadata( $attach_id,  $attach_data );
		echo('<script type="text/javascript" charset="utf-8">alert("提交成功，感谢您的支持，请持续关注我们的审核与答复！");</script>');
	}


}

?>

	<!--Crumbs-->
	<!-- <div class="crumbs base-clear">
		<div class="crumbs-list">
			<span>
				<a href="#" class="home-icon">首页</a>
			</span>
			<span>
				<a href="#">卧房定制家居</a>
			</span>
		</div>
	</div> -->
	<!--/Crumbs-->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/products.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/login.css"/>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/happy.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/happy.methods.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/login.js"></script>
	<script type="text/javascript">var nav_active_nth=11</script>
	
	<!--ListOfProducts-->
	<div class="main">
		
		
		<div class="qa_list base-clear">
		
			<div class="qa_list_left">
				<div class="qa_list_title">
				</div>
				<div class="qa_list_box">
				
					<div class="qa_list_wrap">
						<ul>
							<?php
							$args = array(
								'post_type'			=> 'question',
								'posts_per_page'	=> 15,
								'paged'				=> $paged>1 ? $paged : 1
							);
							$posts = query_posts($args);
							if (have_posts()){
								while(have_posts()) : the_post();
							?>
							<li>
								<a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?><span>详情</span></a>
							</li>
							<?php endwhile;} ?>
						</ul>
						<br>
						<?php pingwu_pagin_nav(); ?>
					</div>
					
				</div>
			</div>
			<div class="qa_list_right">
				<div class="qa_list_title">
				</div>
				<div class="qa_list_box">
				
					<div class="qa_form_wrap">
						<div class="qa_form_title">
							<ul class="base-clear">
								<li class="qa_t">
									<a href="javascript:;">请先登录，登录后提问</a>
									<span></span>
								</li>
								<li class="q_a">
									<a class="q_kf" href="javascript:;" onclick="NTKF.im_openInPageChat()"></a>
								</li>
								<li class="q_a">
									<a class="q_map" href="javascript:;"></a>
								</li>
								<li class="q_a">
									<a class="q_tel" href="javascript:;"></a>
								</li>
								<li class="q_a">
									<a class="q_em" href="javascript:;"></a>
								</li>
							</ul>
						</div>
						
						<div class="qa_form">
							<form id="qa" action="" method="post" enctype="multipart/form-data">
								<div class="form-line">
									<label for="qa_title">标题：</label>
									<input id="qa_title" name="qa_title" class="ui-input" type="text" />
								</div>
								<div class="form-line">
									<label for="qa_con">内容：</label>
									<textarea name="qa_con" id="qa_con"></textarea>
								</div>
								<div class="form-line">
									<label for="qa_pic">图片：</label>
									<input id="qa_pic" name="qa_pic" type="file">
									<p class="input-info">小于2M</p>
								</div>
								<!--
								<div class="form-line">
									<label for="v_code">验证码：</label>
									<input id="v_code" name="v_code" class="ui-input w-80" type="text" />
									<span class="pic-code"><a href="#"><img src="images/image.jpg" /></a></span>
									<span class="pic-code"><a href="#">换一张</a></span>
								</div>
							-->
								<div class="form-line m-195">
									<input class="form-btn" id="qa_btn" name="submit" type="submit" value="提交" />
								</div>
							</form>
						</div>
						
					</div>
					
					<div class="qa_merit">
						<h4>您也可以通过以下方式跟我们联系</h4>
						<p><strong>公司电话：</strong>86-010-87373685&nbsp;&nbsp;&nbsp;&nbsp;<strong>电子邮箱：</strong>51efc@51efc.com</p>
						<p><strong>公司地址：</strong>北京市十里河居然靓屋灯饰城5-020</p>
						<p><span><a href="javascript:;" onclick="NTKF.im_openInPageChat()">在线咨询</a></span></p>
					</div>
				
				</div>
			</div>
			
		</div>
		
	</div> 
	<!--/ListOfProducts-->

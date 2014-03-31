<?php
/**
 * Pinwu functions and definitions
 * 
 * @package WordPress
 * @subpackage Pinwu
 */


// turn off auto update
remove_action( 'wp_version_check', 'wp_version_check' );
add_filter( 'pre_site_transient_update_core', function(){return;});
remove_action('wp_head', 'wp_generator');

// 
add_filter('the_permalink', function($a){
	if (get_post_type()=='post'){
		$link = get_post_meta(get_the_ID(), 'POST_LINK', true);
		return empty($link) ? $a : $link;
	}
	return $a;
});

// add user's tel in user pannel
add_filter('user_contactmethods', function ($user_contactmethods){
    $user_contactmethods ['tel'] = '电话';
    return $user_contactmethods ;
});

// echo z_taxonomy_image_url($cat->term_id);


/********** customize product post START **********/
// hook into the init action and call create_product_taxonomies when it fires
add_action( 'init', 'create_product_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "product"
function create_product_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'				=> '产品分类',
		'all_items'			=> '所有分类',
		'add_new_item'		=> '添加新分类',
		'menu_name'			=> '产品分类',
	);
	$args = array(
		'hierarchical'	  => true,
		'labels'			=> $labels,
		'show_ui'		   => true,
		'show_admin_column' => true,
		'query_var'		 => true,
		'rewrite'		   => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'product' ), $args );
}


add_theme_support('post-thumbnails');
// add_theme_support('post-formats', array('video') );
// add_theme_support('post-formats',array('gallery'));

add_action('init','create_product_post_type');
function create_product_post_type(){ 
	$post_type="product";
	$args=array(
		'label'				=> '产品',
		'public'			=> true,
		'menu_position'		=> 5,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'supports'			=> array(
			'title','editor','author','thumbnail','excerpt','page-attributes','custom-fields'
		),
		'taxonomies' 		=> array('genre'),
		'labels'			=>array(
			'add_new'			=>'添加',
			'all_items'			=>'所有产品',
			'add_new_item'		=>'增加一个新的产品',
			'view_item'			=>'查看',
			'edit_item'			=>'编辑',
			'search_items'		=>'搜索',
			'not_found'			=>'没有找到此产品',
			'not_found_in_trash'	=>'回收站中没有找到此产品',
			'menu_name'			=>'产品',
			'description'		=>'展示家居产品，show time',
		),
		'rewrite' => array('slug' => 'product', 'with_front'=>false),
		'has_archive' => true,
	);
	register_post_type($post_type,$args);

	// add filter param in rewrite rules
	add_rewrite_tag('%filter%','([^&]+)');
	add_rewrite_rule('^product/genre/([^/]*)/filter/([^/]*)/?$', 'index.php?genre=$matches[1]&filter=$matches[2]', 'top' );
	add_rewrite_rule('^product/genre/([^/]*)/filter/([^/]*)/page/?([0-9]{1,})/?$', 'index.php?genre=$matches[1]&filter=$matches[2]&paged=$matches[3]', 'top' );
}

// more thumbnail
if (class_exists('MultiPostThumbnails')){
	for ($i=1;$i<7;$i++) {
		new MultiPostThumbnails(array(
			'label'	=> "详情页图片$i",
			'id'	=> "single-image-$i",
			'post_type' => 'product'
			)
		);
	}
	add_image_size('single-image-thumbnail', 140, 140);
}
//MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');


/********** customize product post END **********/




/********** customize question post START **********/
// register new post-type: question
add_action('init','create_question_post_type');
function create_question_post_type(){ 
	$post_type="question";
	$args=array(
		'label'				=> '问答',
		'public'			=> true,
		'menu_position'		=> 7,
		'capability_type'	=> 'post',
		'hierarchical'		=> false,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'supports'			=> array(
			'title','editor','thumbnail','page-attributes'
		),
		'labels'			=>array(
			'add_new'			=>'添加问题',
			'all_items'			=>'所有问答',
			'add_new_item'		=>'增加一个新的问答',
			'view_item'			=>'查看',
			'edit_item'			=>'编辑',
			'search_items'		=>'搜索',
			'not_found'			=>'没有找到此问答',
			'not_found_in_trash'	=>'回收站中没有找到此问答',
			'menu_name'			=>'问答',
			'description'		=>'问答创建与回复',
		),
		'rewrite' => array('slug' => 'question', 'with_front'=>false),
		'has_archive' => true,
	);
	register_post_type($post_type,$args);
}

// show auth in the question page of admin list
function question_cpt_columns($columns) {
	$new_columns = array(
		'author' => '提问者',
	);
	return array_merge($columns, $new_columns);
}
add_filter('manage_question_posts_columns' , 'question_cpt_columns');

// add reply box in question edit page
function question_add_reply_box() {
	add_meta_box(
		'question_post_excerpt',
		'问题解答',
		function ($post) {
			if ($post->post_type = 'question'){
				wp_editor( htmlspecialchars_decode($post->post_excerpt), 'excerpt' );
			}
		},
		'question'
	);
}
add_action( 'add_meta_boxes', 'question_add_reply_box' );

// show attachment in question edit page
function question_add_attach_show_box() {
	add_meta_box(
		'question_post_attach',
		'相关图片',
		function ($post) {
			$attachments = get_posts(array('post_type'=>'attachment', 'post_parent'=>$post->ID), 'full');
			echo '<ul>';
			foreach ($attachments as $attachment) {
				echo '<li>';
				echo wp_get_attachment_link($attachment->ID);
				echo '<p>' . apply_filters('the_title', $attachment->post_title) . '</p>';
				echo '</li>';
			}
			echo '</ul>';
		},
		'question'
	);
}
add_action('add_meta_boxes', 'question_add_attach_show_box');

/********** customize question post END **********/



/********** customize measure post START **********/


// register new post-type: measure
add_action('init',function (){ 
	$post_type = "measure";
	$args = array(
		'label'				=> '量尺',
		'menu_position'		=> 7,
		'capability_type'	=> 'post',
		'capability'		=> array('read_post'),
		'hierarchical'		=> false,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'supports'			=> array(
			'editor',
		),
		'labels'			=>array(
			'add_new'			=>'添加新登记',
			'all_items'			=>'所有登记',
			'add_new_item'		=>'增加一条新的记录',
			'not_found'			=>'没有相关记录',
			'not_found_in_trash'	=>'回收站中相关记录',
		),
		'exclude_from_search'	=> true,
		'publicly_queryable'	=> true,
	);
	register_post_type($post_type,$args);

});

add_filter( 'manage_edit-measure_columns', 'pinwu_edit_measure_columns' ) ;
function pinwu_edit_measure_columns( $columns ) {
	$columns = array(
		'cb' => '<input type="checkbox" />',
		'content' => '登记内容',
		'date' => __( 'Date' )
	);
	return $columns;
}

add_action('manage_measure_posts_custom_column', function($column) {
	global $post;
	if ($column == 'content') {
		$content = unserialize($post->post_content);
		foreach ($content as $k => $v) {
			switch ($k) {
				case 'name':
					echo '姓名';
				break;
				case 'tel':
					echo '电话';
				break;
				case 'email':
					echo '电子邮箱';
				break;
				case 'address':
					echo '地址';
				break;
				case 'sex':
					echo '性别';
				break;
				case 'stage':
					echo '装修阶段';
				break;
				case 'area':
					echo '面积';
				break;
				case 'time':
					echo '希望上门日期';
				break;
			}
			echo '：'.sanitize_text_field($v).'<br />';
		}
	}
});



/********** customize measure post END **********/


/********** customize the admin pannel ***********/
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
	// add_menu_page( 'custom menu title', 'custom menu', 'manage_options', '/aa/test.php', '', '', 8 );
	remove_menu_page('edit-comments.php');
	remove_menu_page('tools.php');
	remove_menu_page('plugins.php');
	remove_submenu_page('themes.php', 'themes.php');
	remove_submenu_page('themes.php', 'customize.php');
	remove_submenu_page('themes.php', 'widgets.php');
	remove_submenu_page('index.php', 'update-core.php');
	remove_submenu_page('edit.php?post_type=measure', 'post-new.php?post_type=measure');
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');

	remove_submenu_page('options-general.php', 'options-general.php');
	remove_submenu_page('options-general.php', 'options-reading.php');
	remove_submenu_page('options-general.php', 'options-discussion.php');
	remove_submenu_page('options-general.php', 'options-permalink.php');
	remove_submenu_page('options-general.php', 'options-general.php?page=zci-options');

	// post page
	remove_meta_box('commentstatusdiv', 'post', 'normal');
	remove_meta_box('commentsdiv', 'post', 'normal');
	remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
	remove_meta_box('trackbacksdiv', 'post', 'normal');

	// customize dashboard
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
	remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');  // Recent Drafts
	remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
	remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
	remove_meta_box('welcome_panel', 'dashboard', 'normal');   // Other WordPress News


	add_meta_box('dashboard_welcome_mail', '邮箱', function(){echo '<a href="http://mail.51efc.com/" target="_blank">点击登陆</a>';}, 'dashboard', 'normal');
	add_filter('admin_footer_text', function(){});
	add_filter('update_footer', function(){echo '感谢使用';});
}
// remove the logo in admin login page
add_action('login_head', function(){
	echo '<style type="text/css">h1 a {background-image: none !important; }</style>';
});
// show admin bar never
show_admin_bar(false);
// remove some nodes in admin bar
add_action( 'admin_bar_menu', 'remove_wp_admin_bar', 999 );
function remove_wp_admin_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('wp-logo');
	$wp_admin_bar->remove_node('comments');
	$wp_admin_bar->remove_node('updates');
}


add_action( 'load-index.php', function () {
	update_user_meta( get_current_user_id(), 'show_welcome_panel', 0 );
});

/********** customize the admin panel **********/


/********** the video **********/
/**
 * unregister the youku handler (in zh_CN.php)
 * register new handler: youku_center
 */
wp_embed_unregister_handler('youku');
function wp_embed_handler_youku_center( $matches, $attr, $url, $rawattr ) {
	$embed = sprintf(
		'<p style="text-align:center"><embed src="http://player.youku.com/player.php/sid/%1$s/v.swf" allowFullScreen="true" quality="high" width="480" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed></p>',
		esc_attr( $matches['video_id'] ) );

	return apply_filters( 'embed_youku_center', $embed, $matches, $attr, $url, $rawattr );
}
wp_embed_register_handler( 'youku_center',
	'#https?://v\.youku\.com/v_show/id_(?<video_id>[a-z0-9_=\-]+)#i',
	'wp_embed_handler_youku_center' );


/********** the video end **********/




/**
 * print the page bar
 * @param  integer $range 
 * @return bool    all ways true
 */
function pingwu_pagin_nav($range = 4){
	global $wp_query;
	$paged = get_query_var('paged');
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	echo '<div class="jogger">';
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend'>首页</a>";}
	previous_posts_link('上页');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link('下页');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend'>尾页</a>";}
    echo '</div>';}
}

/**
 * return product settings
 * 
 */
function pinwu_get_product_setting($term_id=NULL) {
	$setting = array(
		'51'	=> array( // 卧房
			'style'		=> array(101, 102, 103, 104, 105, 106, 107, 108, 109, 110), // 风格
			'feature'	=> array(201, 202, 231, 611, 230), // 功能
			'price'		=> array(311, 312, 306, 313, 314), // 价格
			'board'		=> array(409, 405, 406, 410, 404, 416, 420, 414, 411, 421, 412, 403, 413, 407), // 板材
			'wall'		=> array(501, 502, 503, 504, 505, 506, 507, 508, 509), // 墙面
			'ground'	=> array(601, 602, 603, 604, 605, 606, 607, 608, 609), // 地面
			'slug'		=> 'room',
			'name'		=> '卧房定制',
			'nav_nth'	=> 2,
		),
		'52'	=> array( // 书房
			'style'		=> array(101, 102, 103, 104, 105, 106, 107, 108, 109, 110), // 风格
			'feature'	=> array(206, 204, 613, 614, 615, 230), // 功能
			'price'		=> array(315, 316, 317, 318, 308, 314), // 价格
			'board'		=> array(409, 405, 406, 410, 404, 416, 420, 414, 411, 421, 412, 403, 413, 407), // 板材
			'wall'		=> array(501, 502, 503, 504, 505, 506, 507, 508, 509), // 墙面
			'ground'	=> array(601, 602, 603, 604, 605, 606, 607, 608, 609), // 地面
			'slug'		=> 'study',
			'name'		=> '书房客厅',
			'nav_nth'	=> 3,
		),
		'53'	=> array( // 门的世界
			'style'		=> array(101, 102, 103, 104, 105, 106, 107, 108, 109, 110), // 风格
			'feature'	=> array(210, 214, 216, 217, 219, 220, 230), // 功能
			'price'		=> array(301, 302, 304, 307, 309, 310), // 价格
			'board'		=> array(436, 437, 438, 439, 440), // 板材
			'wall'		=> array(501, 502, 503, 504, 505, 506, 507, 508, 509), // 墙面
			'ground'	=> array(601, 602, 603, 604, 605, 606, 607, 608, 609), // 地面
			'slug'		=> 'door',
			'name'		=> '移门世界',
			'nav_nth'	=> 6,
		),
		'54'	=> array( // 实木定制
			'style'		=> array(122, 123, 112, 124, 125), // 风格
			'feature'	=> array(202, 210, 616, 617, 232, 613, 614, 618, 619, 230), // 功能
			'price'		=> array(319, 318, 320, 321, 322), // 价格
			'board'		=> array(418, 419, 422, 423, 424, 425, 426, 427, 428, 429, 430, 431), // 板材
			'wall'		=> array(501, 502, 503, 504, 505, 506, 507, 508, 509), // 墙面
			'ground'	=> array(601, 602, 603, 604, 605, 606, 607, 608, 609), // 地面
			'slug'		=> 'chest',
			'name'		=> '实木定制',
			'nav_nth'	=> 5,
		),
		'55'	=> array( // 青少年房
			'style'		=> array(105, 121, 126, 127, 128), // 风格
			'feature'	=> array(210, 232, 227, 230), // 功能
			'price'		=> array(311, 312, 306, 313, 314), // 价格
			'board'		=> array(409, 410, 416, 407, 432, 433, 434, 435), // 板材
			'wall'		=> array(501, 502, 503, 504, 505, 506, 507, 508, 509), // 墙面
			'ground'	=> array(601, 602, 603, 604, 605, 606, 607, 608, 609), // 地面
			'slug'		=> 'young',
			'name'		=> '青少年房',
			'nav_nth'	=> 4,
		),
	);
	
	return empty($setting[$term_id]) ? $setting : $setting[$term_id];
}



function pinwu_get_product_menu_setting($genre_term_id) {
	
	$menu = pinwu_get_product_setting();
	
	if ($menu[$genre_term_id]) {
		foreach ($menu[$genre_term_id] as $k=>$v) {
			if (in_array($k, array('style', 'feature', 'price', 'board'))) {
				$array = get_terms('genre', array('include'=>$v, 'hide_empty'=>0, 'orderby'=>'id'));
				// order by menu setting
				foreach ($v as $order_term_id){
					foreach ($array as $term){
						if ($term->term_id==$order_term_id) {
							$return[$k][] = $term;
						}
					}
				}
			}
		}
	}
	// print_r(	$array);
	return $return;
}


/**
 * return A.D. banner HTML code
 */
function pinwu_get_ad_banner()
{
	return '<div class="products-ad">
        	<a href="#">
            	<img src="'.get_template_directory_uri().'/images/products-ad.gif" />
            </a>
        </div>';
}

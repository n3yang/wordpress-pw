<?php

// register new post-type: 
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
			// 'add_new'			=>'添加问题',
			// 'all_items'			=>'所有问答',
			// 'add_new_item'		=>'增加一个新的问答',
			// 'view_item'			=>'查看',
			// 'edit_item'			=>'编辑',
			// 'search_items'		=>'搜索',
			// 'not_found'			=>'没有找到此问答',
			// 'not_found_in_trash'	=>'回收站中没有找到此问答',
			// 'menu_name'			=>'问答',
			// 'description'		=>'问答创建与回复',
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

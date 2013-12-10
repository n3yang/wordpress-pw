<?php

// register new post-type: 
add_action('init',function (){ 
	$post_type="measure";
	$args=array(
		'label'				=> '订制',

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

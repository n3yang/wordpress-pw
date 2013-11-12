<?php

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
// function myplugin_save_postdata( $post_id ) {

//   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
//   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
//       return $post_id;

//   // Check the user's permissions.
//   if ( 'page' == $_POST['post_type'] ) {

//     if ( ! current_user_can( 'edit_page', $post_id ) )
//         return $post_id;
  
//   } else {

//     if ( ! current_user_can( 'edit_post', $post_id ) )
//         return $post_id;
//   }

//   /* OK, its safe for us to save the data now. */

// 	if (empty($_POST['myplugin_new_field'])){
// 		return false;
// 	}
//   // Sanitize user input.
//   $mydata = sanitize_text_field( $_POST['myplugin_new_field'] );

//   // Update the meta field in the database.
//   update_post_meta( $post_id, '_my_meta_value_key', $mydata );
// }
// add_action( 'save_post', 'myplugin_save_postdata' );


// 从问答列表中删除回答
// add_filter('parse_query', function ($query){
// 	global $pagenow, $typenow;
// 	if ($typenow=='question' && $pagenow=='edit.php') {
// 		$query->query_vars['post_parent'] = 0;
// 	}
// });



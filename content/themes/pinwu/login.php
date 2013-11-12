<?php
/**
 * Template Name: Login Page
 * The template for pinwu login & registration page
 * 
 * @package WordPress
 * @subpackage Pinwu
 */


// do login
if (isset($_POST['wp-submit'])) {
	$result = wp_signon();
	if (is_wp_error($result)) {
		$message = preg_replace('/<a(.*)<\/a>？/', '', $result->get_error_message());
	}
}

// do sign up
if (isset($_POST['signupSubmit'])) {
	if (empty($_POST['username'])){
		$message = '请输入用户名';
	}
	if (empty($_POST['password'])) {
		$message = '请输入密码';
	}
	if (empty($_POST['email'])) {
		$message = '请输入Email地址';
	}
 	// if (){
		# code...
	// }
}
?>

<?php 
// create login form
$formHtml = wp_login_form(array('echo'=>false));
echo preg_replace('/action="(.*)" /', 'action="/login" ', $formHtml);

?>

<div>
	<ul>
		<form action="" id="signupForm" name="signupForm" method="post">
			<li>username:<input type="text" id="username" name="username"></li>
			<li>nickname:<input type="text" id="nickname" name="nickname"></li>
			<li>email:<input type="text" id="email" name="email"></li>
			<li>password:<input type="password" id="password" name="password"></li>
			<li>password:<input type="password" id="passwordRetry" name="passwordRetry"></li>
			<li>mobile: <input type="text" id="mobile" name="mobile" /></li>
			<li><input type="submit" name="signupSubmit" value="signup" /></li>
		</form>
	</ul>
</div>
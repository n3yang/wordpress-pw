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
		$error = preg_replace('/<a(.*)<\/a>？/', '', $result->get_error_message());
	}
}

// do sign up
if (isset($_POST['signup_submit'])) {
	if (empty($_POST['username'])){
		$error = '请输入用户名';
	}
	if (empty($_POST['password'])) {
		$error = '请输入密码';
	}
	if ($_POST['password_retype']!=$_POST['password']){
		$error = '两次输入的密码不一样';
	}
	if (empty($_POST['email']) ) {
		$error = '请输入正确的Email地址';
	}
	// if (){
		# code...
	// }



	if (!$error){
		$user_id = username_exists( $_POST['username'] );
		if ( !$user_id and email_exists($user_email) == false ) {
			$user_id = wp_create_user( $_POST['username'], $_POST['password'], $_POST['email'] );
			var_dump($user_id);
		} else {
			$error = __('User already exists.  Password inherited.');
		}
	}
}
?>

<?php 
// create login form
$formHtml = wp_login_form(array('echo'=>false));
echo preg_replace('/action="(.*)" /', 'action="/login" ', $formHtml);

?>

<div>
	<ul>
		<?php echo $error ?>
		<form action="" id="signup_form" name="signup_form" method="post">
			<li>username:<input type="text" id="username" name="username"></li>
			<li>nickname:<input type="text" id="nickname" name="nickname"></li>
			<li>email:<input type="text" id="email" name="email"></li>
			<li>password:<input type="password" id="password" name="password"></li>
			<li>password:<input type="password" id="password_retype" name="password_retype"></li>
			<li>mobile: <input type="text" id="mobile" name="mobile" /></li>
			<li><input type="submit" name="signup_submit" value="signup" /></li>
		</form>
	</ul>
</div>
// JavaScript Document

$(document).ready(function () {
	$('#login').isHappy({
	  fields: {
		'#login_username': {
		  required: true,
		  message: '您输入的用户名有误'
		},
		'#login_password': {
		  required: true,
		  message: '您输入的密码有误',
		  test: happy.ispassword 
		},
		/*
		'#v_code': {
		  required: true,
		  message: '您输入的验证码有误'
		}
		*/
	  }
	});
	
	
	
	$('#reg').isHappy({
	  fields: {
		'#username': {
		  required: true,
		  message: '您输入的用户名有误'
		},
		'#password': {
		  required: true,
		  message: '您输入的密码有误',
		  test: happy.ispassword 
		},
		'#r_password': {
		  required: true,
		  message: '两次密码输入不相同，请仔细检查重新输入',
		  test: happy.equalRegPassword
		},
		'#email': {
		  required: true,
		  message: '您输入的邮箱有误',
		  test: happy.email
		},
		'#tel': {
		  required: true,
		  message: '您输入的手机号码有误',
		  test: happy.isMob
		},
		/*
		'#v_code_reg': {
		  required: true,
		  message: '您输入的验证码有误'
		}
		*/
	  }
	});
}); 
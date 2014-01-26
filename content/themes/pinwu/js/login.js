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
		}
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
		}
	  }
	});
	

	$('#qa').isHappy({
	  fields: {
		'#qa_title': {
		  required: true,
		  message: '请输入标题，标题不能为空'
		},
		'#qa_con': {
		  required: true,
		  message: '请输入内容，内容不能为空'
		}
	  }
	});
	
	
	$(".q_a").hover(function(){
		$(this).find("a").animate({
			top: -60
		},300)
	},function(){
		$(this).find("a").animate({
			top: 0
		},300)
	})
	
	
}); 
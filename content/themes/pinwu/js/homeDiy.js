// JavaScript Document


$(document).ready(function(){
	
	//DiyTopBanner Show
	var ic_i = 0;
	setInterval(change,3000);
	function change(){
		ic_i++;
		if(ic_i<3){
			$(".changePic"+(ic_i+1)).show();
		}else{
			ic_i=0;
			$(".changePic1").fadeIn(800);
		}
		$(".changePic"+ic_i).fadeOut(800);
	}
	
	//Diy-function
	(function(fun_id) {
		var u = $("#scroll2"),
			li = u.find("li"),
			len = li.length,
			l = $("#pre"),
			r = $("#next"),
			n = 0,
			num = parseInt(len/5);
		
		li.removeClass("active");
		for(var i=0;i<li.length; i++){
			
			if(li[i].id == 'li'+fun_id){
				li.eq(i).addClass("active");
				n = parseInt(i/5);
			}
		}
		u.css("width", len*228);
		an(n);
		l.click(function(){
			n<=0 ? n=0 : n--
			an(n);
		})
		r.click(function(){
			n>=num ? n=num : n++
			an(n);
		})		
		function an(n){
			u.animate({"left":n*-1140},200);
		}
		
	})(default_fun_id);
	
	
	
	(function(){
		
		var box = $("#effect_choose");
		var dl = box.find("dl");
		var dt = box.find("dt");
		var dd = box.find("dd");
		var xBox = dd.find("div");
		
		
		dt.click(function(){
			dl.addClass("default").find(dd).fadeOut(0);
			if($(this).parent().hasClass("default")){
				$(this).parent().find(dd).fadeIn(300);
				$(this).parent().removeClass("default")
			}
		});
		
		dd.find("div").click(function(){
			var board = 0,
				ground = 0,
				wall = 0,
				p = $(this).parent();
			p.find("div").removeClass("active");
			$(this).addClass("active");

			$("#effect_choose dd .active").each(function(i){
				if (i==0) {
					board = $(this).attr('data-id');
				} else if(i==1) {
					ground = $(this).attr('data-id');
				} else {
					wall = $(this).attr('data-id');
				}
			});

			$.ajax({
				type: "POST",
				url: "/diy/?method=ajax",
				timeout: 5000,
				async: false,
				dataType: 'json',
			    data: {
				    "feature":default_fun_id,
				   	"board":board,
					"ground":ground,
					"wall":wall
				},
				success: function(d){
					// console.log(d);
					if (d.thumb_src) {
						$('#effect_bigPic_link, #result_link_l').attr('href', d.link);
						$('#effect_bigPic_link img').attr('src', d.thumb_src);
					};
				},
				error: function() {
					
				}
			});
			
		})
		
	})()
	
	
})
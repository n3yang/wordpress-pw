//setCookie
function setCookie(name, value, iDay){
	var oDate=new Date();
	oDate.setDate(oDate.getDate()+iDay);
	document.cookie = name+'='+ value +';expires='+ oDate;
}
//getCookie
function getCookie(name){
	var arr=document.cookie.split('; ');
	var i=0;
	for(i=0;i<arr.length;i++)
	{
		var arr2=arr[i].split('=');
		if(arr2[0]==name)
		{
			return arr2[1];
		}
	}
	return '';
}
//removeCookie
function removeCookie(name){
	setCookie(name, '1', -1);
}




$(document).ready(function(){
	//切换
	(function() {
		
		var no = $("#noPicText"), yes = $("#PicText"), box = $("#p-list");
		
		no.click(function(){
			yes.removeClass("active");
			$(this).addClass("active");
			box.addClass("noPicTextList");
			setCookie("ifShowPic", "no", 7);
		});
		
		yes.click(function(){
			no.removeClass("active");
			$(this).addClass("active");
			box.removeClass("noPicTextList");
			setCookie("ifShowPic", "yes", 7);
		});
		
		yes.click();
		
		if(getCookie("ifShowPic") == "yes"){
			yes.click();
		}else{
			no.click();
		}
		
	})();
	
	//bigShow
	(function() {
		
		var u = $("#s-pic-list"),
			li = u.find("li"),
			len = li.length,
			l = $("#l-b"),
			r = $("#r-b"),
			b = $("#big-pic"),
			n = 0;
		
		u.css("width", len*175);
		
		an(0);
			
		li.click(function(){
			var i = $(this).index();
			n = i;
			an(n);
		})
		
		l.click(function(){
			n<=0 ? n=0 : n--
			an(n);
		})
		
		r.click(function(){
			n>=len-1 ? n=len-1 : n++
			an(n);
		})
		
		function an(n){
			li.removeClass("active").eq(n).addClass("active");
			b.attr("src", li.eq(n).find("img").attr("data-big"));
			u.animate({"left":n*-175},200);
		}
		
		
	})();
	
})
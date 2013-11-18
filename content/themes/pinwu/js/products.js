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
		
		if(getCookie("ifShowPic") == "yes"){
			yes.click();
		}else{
			no.click();
		}
		
	})();
	
})
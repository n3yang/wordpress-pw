


$(document).ready(function(){

	//search
	(function(){
		var l = $("#search-label");
		var p = $("#search-text");
		$("#search-input").click(function(){
			if(l.hasClass("search-label-hid") && p.val() == ""){
				l.removeClass("search-label-hid")
				p.blur().val("")
			}else{
				l.addClass("search-label-hid")
				p.focus()
			}
		})
		p.blur(function(){
			if($(this).val()==""){
				l.removeClass("search-label-hid")
				$(this).val("")
			}
		})

		$(".search-btn").click(function() {
			location.href='/search/'+encodeURI($("#search-text").val());
		});
		$("#search-form").submit(function() {
			location.href='/search/'+encodeURI($("#search-text").val());
			return false;
		})
		
	})();

	//map
	(function(){
		var m = $("#map-box");
		var i = $("#map-i");
		$("#show-btn").hover(function(){
			m.show();
			i.show();
		},function(){
			m.hide();
			i.hide();
		})
	})();

	//go-to-top
	(function() {
	   	var $backBox = $('<div class="backBox"><a class="backWeixin" title="微信"><em></em></a><a class="backKefu" title="在线客服" href="javascript:;" onclick="NTKF.im_openInPageChat()" ></a><a class="backLiangchi" href="http://www.51efc.com/measure" title="免费量尺设计"></a><a class="backHoudong" href="http://www.51efc.com/activities-315" title="最新活动"></a></div>'),
	    	$backToTopEle = $('<a class="backToTop" title="返回顶部"></a>').appendTo($backBox);
	    	$backBox.appendTo($("body"));

	        $(".backToTop").click(function() {
	        	$("html, body").animate({ scrollTop: 0 }, 120);
	    	})

	        $(".backWeixin").hover(function(){
	        	$(this).find("em").show();
	        },function(){
	        	$(this).find("em").hide();
	        })

	    	function $backToTopFun() {
		        var st = $(document).scrollTop(), winh = $(window).height();
		        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
		        if (!window.XMLHttpRequest) {
		            $backToTopEle.css("top", st + winh - 166);    
		        }
		    };
	    $(window).bind("scroll", $backToTopFun);
	    $(function() { $backToTopFun(); });
	})();
})
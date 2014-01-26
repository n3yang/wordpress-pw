


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
	    var $backToTopTxt = "返回顶部", $backToTopEle = $('<a class="backToTop"></a>').appendTo($("body"))
	        .attr("title", $backToTopTxt).click(function() {
	        $("html, body").animate({ scrollTop: 0 }, 120);
	    }), $backToTopFun = function() {
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
(function($){
	$.fn.slide=function(E){
		
		var G={
			actClass:"cur",
			navContainerClass:".focus_pic_preview",
			focusContainerClass:".focus_pic",
			animTime:600,
			delayTime:5000
		};
		
		if(E){
			$.extend(G,E)
		}
		
		var C=G.actClass, D=G.navContainerClass, B=G.focusContainerClass, F=G.animTime, H=G.delayTime, I=null;
		
		return this.each(function(){
			
			var O=$(this), M=$(D+" li",O), P=$(B+" li",O), L=M.length, K=O.height();
			
			M.each(function(index){
				Y=O.find("h1");
				if(0==index) {
					$(this).addClass(C);
					Y.html($(B+" li").eq(index).find("img").attr("alt"))
				}
				$(this).find("a").html(P.eq(index).find("a").html());
			})

			function N(R){
				var V=K*R*-1;
				var U=$(B+" li",O), W=null, T=null;
				for(var S=0;S<=R;S++){
					W=U.eq(S);
					T=W.find('script[type="text/templ"]');
					if(T.length>0){
						W.html(T.html())
					}
				}
				$(B,O).stop().animate({top:V},F);
				var Y=O.find("h1"), X=Y.height();
				Y.height(0).html($(B+" li").eq(R).find("img").attr("alt")).animate({height:X},300)
				$(D+" li").eq(R).addClass(C).siblings().removeClass(C)
			}
			
			function Q(){
				if(I){
					clearInterval(I)
				}
				I=setInterval(function(){
					var R=$(D+" li."+C).index();
					N((R+1)%L)
				},H)
			}
			
			O.hover(function(){
				if(I){
					clearInterval(I)
				}
			},function(){
				Q()
			});
		
			var J=null;
			
			M.hover(function(){
				
				var R=$(this).index();
				
				if(I){
					clearInterval(I)
				}
				J=setTimeout(function(){
					N(R)
				},300)
			},function(){
				if(J){
					clearTimeout(J)
				}
				Q()
			}).click(function(T){
				var R=$(this).index(), S=P.eq(R).find("a");
				if(document.uniqueID||window.opera){
					S[0].click();
					T.stopPropagation();
					T.preventDefault()
				}
			});
			
			Q()
			
		})
	}
	
})(jQuery);

$(document).ready(function(){
	//slide
	$(".slide").slide({
		navContainerClass:".slide-nav",
		focusContainerClass:".slide-imgs",
		delayTime:3000
	});

})
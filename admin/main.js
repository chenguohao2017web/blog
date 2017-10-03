;(function(){
	$('.d').click(function(){
		var children = $('.d1');
		if(children.css('display') == 'none'){
			children.slideDown();
		}else{
			children.slideUp();
		}
	})

	$('.e').click(function(){
		var children = $('.e1');
		if(children.css('display') == 'none'){
			children.slideDown();
		}else{
			children.slideUp();
		}
	})

// 浏览器时下窗口文档域高度
	// $(document).height()

// 浏览器时下窗口可视区域高度
	// var height = $(window).height(); 

	var height = parseInt($(window).height())-82;
	var obj = $(".container-fluid .content");
	var obj2 = $(".content-right");
	// console.log(height);
	$(obj).css("height",height);
	$(obj2).css("height",height);
})();

/*Notice board code start*/
$(document).ready(function(e) {
	$(scrollMe = function(){
		$var = $('.scroller:visible').children("div").first().html();
		$('.scroller:visible').children("div").first().slideUp(function(){
			$(this).remove();
		});
		$('.scroller:visible').append('<div class="notice_box">'+ $var +'</div>');
		$('.scroller:visible').children("div").last().hide().slideDown();
	});
	setInterval(function(){ scrollMe() },3000);
	
});

/*Photo  code start*/
$(document).ready(function(e) {
	$(phslid = function(){
		$var = $('.photoslide:visible').children("div").first().html();
		$('.photoslide:visible').children("div").first().slideUp(function(){
			$(this).remove();
		});
		$('.photoslide:visible').append('<div class="photo_box">'+ $var +'</div>');
		$('.photoslide:visible').children("div").last().hide().slideDown();
	});
	setInterval(function(){ phslid() },3000);
	
});
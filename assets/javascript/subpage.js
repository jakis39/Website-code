var topButtonOn = 0;
$(document).ready(function(){
	$('#navtop').addClass('nav_persist');
	$(window).scroll(mobileSticky);
});

var mobileSticky = function() {
	var y = $(window).scrollTop(),
		topbutton = $('#top_button');

	if((topButtonOn == 1) && (y < 5)){
		topbutton.stop(true,true).fadeOut();
		topButtonOn = 0;
	}
	else if((y > 5) && (topButtonOn == 0)) {
		topbutton.stop(true,true).delay(600).fadeIn();
		topButtonOn = 1;
	}
};

$('#top_button').click(function(){
	$('html, body').animate({
		scrollTop: 0
	}, 1000);
	return false;
});
var topButtonOn = 0;
var THEME = 0;
$(document).ready(function(){
	init();
	$('#menu_button').click(toggleMenu);
	$('.navbar ul li a').click(closeMenu);
	if(isPhone()){
		var timeoutID = window.setTimeout(function(){
			$('.headerwrapper').removeClass("hide");
			$('.content_section:first-child').css('margin-top','0');
		}, 1000);
	}
	$(window).scroll(scrollLogic);
	$(window).resize(init);


	/*$(window).resize(function(){
		var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
		$('#devicewidth')[0].innerHTML = 'device width: ' + width;
	});*/

	//var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
	//$('#devicewidth')[0].innerHTML = 'device width: ' + width;
});

var init = function(){
	$(window).unbind("scroll",sticky);
	$(window).unbind("resize",sticky);
	$(window).unbind("scroll",mobileSticky);

	if(isPhone()){
		$('#navtop').addClass('nav_persist');
		$(window).scroll(mobileSticky);
	}
	else{
		$(window).scroll(sticky);
		$(window).resize(sticky);
		$('a.innerPostBox').hover(function(){
			$(this).addClass('hover');
		},function(){
			$(this).removeClass('hover');
		});
	}
}

var sticky = function() {
	var y = $(window).scrollTop(),
		header = $('#header'),
		headerwrapper = $('.headerwrapper'),
		navtop = $('#navtop'),
		main = $('#main'),
		topbutton = $('#top_button');

	if((topButtonOn == 1) && (y < 5)){
		topbutton.stop(true,true).animate({opacity:0},function(){$(this).css('visibility','hidden')});
		topButtonOn = 0;
	}
	else if((y > 5) && (topButtonOn == 0)) {
		topbutton.stop(true,true).delay(600).css('visibility','visible').animate({opacity:1});
		topButtonOn = 1;
	}
	if( y > ((header.height()) - (navtop.height())) ) {
		navtop.addClass('nav_persist');
	}
	if( y > ((headerwrapper.height()) - (navtop.height())) ) {
		navtop.addClass('nav_shadow');
	} 
	if( y < header.height() ) {
		navtop.removeClass('nav_persist');
	}
	if( y < headerwrapper.height() ) {
		navtop.removeClass('nav_shadow');
	}
};

var mobileSticky = function() {
	var y = $(window).scrollTop(),
		topbutton = $('#top_button');

	if((topButtonOn == 1) && (y < 5)){
		topbutton.stop(true,true).animate({opacity:0},function(){$(this).css('visibility','hidden')});
		topButtonOn = 0;
	}
	else if((y > 5) && (topButtonOn == 0)) {
		topbutton.stop(true,true).delay(600).css('visibility','visible').animate({opacity:1});
		topButtonOn = 1;
	}
};

var toggleMenu = function(){
	$('#nav').toggleClass("show");
	$('#menu_button').toggleClass("active");

	if($('#nav').hasClass("show")){
		$('#main').click(closeMenu);
		console.log('binding');
	}
	else{
		$('#main').unbind( "click",closeMenu);
		console.log('unbinding');
	}
}

var closeMenu = function(){
	$('#nav').removeClass("show");
	$('#menu_button').removeClass("active");
	$('#main').unbind("click",closeMenu);
}

var scrollLogic = function(){
	var thirdWindowHeight = (window.innerHeight)/3;
	var effectiveScroll = $(window).scrollTop() + thirdWindowHeight;

	var about = $('#about')[0].offsetTop;
	var blog = $('#blog')[0].offsetTop;
	var projects = $('#projects')[0].offsetTop;
	var resume = $('#resume')[0].offsetTop;
	var contact = $('#contact')[0].offsetTop;

	if(effectiveScroll > contact){
		toggleHighlight('contact');
	}
	else if(effectiveScroll > resume){
		toggleHighlight('resume');
	}
	else if(effectiveScroll > projects){
		toggleHighlight('projects');
	}
	else if(effectiveScroll > blog){
		toggleHighlight('blog');
	}
	else if(effectiveScroll > about){
		toggleHighlight('about');
	}
	else{
		$(".navlink").removeClass('highlight');
		$(".content_section").removeClass('highlight');
	}
}

var toggleHighlight = function(section){
	$(".content_section").removeClass('highlight');
	$("#"+section).addClass('highlight');

	$('.navlink').removeClass('highlight');
	$('#nav_'+section).addClass('highlight');
}

$('#top_button').click(function(){
	$('#top_button').stop(true,true).fadeOut();
	$('html, body').animate({
		scrollTop: ($( $.attr(this, 'href') ).offset().top)-50
	}, 1000, function(){topButtonOn = 0;});
	return false;
});

$('.navlink').click(function(){
	$('html, body').animate({
		scrollTop: ($( $.attr(this, 'href') ).offset().top)-50
	}, 1000);
	return false;
});

jQuery(function() {
   jQuery.support.placeholder = false;
   test = document.createElement('input');
   if('placeholder' in test) jQuery.support.placeholder = true;
});

$(function() {
	if(!$.support.placeholder) { 
		$('#namelabel').removeClass('hidden');
		$('#emaillabel').removeClass('hidden');
		$('#bodylabel').removeClass('hidden');
	}
});

var isValidEmail = function(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

// Contact Form
$("#contact").submit(function(e){
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var text = $("#text").val();
    var robot = $("#space").val();
    var dataString = 'name=' + name + '&email=' + email + '&text=' + text + '&robot=false';


    if (!isValidEmail(email)){
    	$("#email").addClass('validate_border');
    	$('#emailvalidate').animate({height:'1.6em'}, 300);
    }
    else{
    	$("#email").removeClass('validate_border');
    	$('#emailvalidate').animate({height:'0'}, 300);
    }

    if(text.length < 15){
    	$("#text").addClass('validate_border');
    	$('#textvalidate').animate({height:'1.6em'}, 300);
    }
    else{
    	$("#text").removeClass('validate_border');
    	$('#textvalidate').animate({height:'0'}, 300);
    }

    if(name.length < 1){
    	$("#name").addClass('validate_border');
    	$('#namevalidate').animate({height:'1.6em'}, 300);
    }
    else{
    	$("#name").removeClass('validate_border');
    	$('#namevalidate').animate({height:'0'}, 300);
    }

    if (isValidEmail(email) && (text.length > 15) && (name.length > 1) && (robot.length == 0)){
        $.ajax({
            type: "POST",
            url: "assets/contactcomplete.php",
            data: dataString,
            success: function(result){
            	if(result == "true"){
            		$('#contact_form').fadeOut(500, function(){
	                    $('#contact_success').fadeIn(1000);
	                });
            	}
            	else{
            		$('#contact_form').fadeOut(500, function(){
	                    $('#contact_fail').fadeIn(1000, function(){
	                    	$("#name").val("");
							$("#email").val("");
							$("#text").val("");
	                    	var timeoutID = window.setTimeout(function(){
								$('#contact_fail').fadeOut(400, function(){
				                    $('#contact_form').fadeIn(400);
				                });
							}, 3000);
	                    });
	                });
            	}
                
            }
        });
    }
    return false;
});

var validateRefresh = function(){
    var name = $("#name").val();
    var email = $("#email").val();
    var text = $("#text").val();

    if (!isValidEmail(email)){
        $("#email").addClass('validate_border');
        $('#emailvalidate').animate({height:'1.6em'}, 300);
    }
    else{
        $("#email").removeClass('validate_border');
        $('#emailvalidate').animate({height:'0'}, 300);
    }

    if(text.length < 60){
        $("#text").addClass('validate_border');
        $('#textvalidate').animate({height:'1.6em'}, 300);
    }
    else{
        $("#text").removeClass('validate_border');
        $('#textvalidate').animate({height:'0'}, 300);
    }

    if(name.length < 1){
        $("#name").addClass('validate_border');
        $('#namevalidate').animate({height:'1.6em'}, 300);
    }
    else{
        $("#name").removeClass('validate_border');
        $('#namevalidate').animate({height:'0'}, 300);
    }
}

var switchTheme = function()
{
	if(THEME == 0)
	{
		loadCSSFile("alt");
		THEME = 1;
	}
	else
	{
		removeCSSFile("alt");
		THEME = 0;
	}
}

loadCSSFile = function(name) {
	console.log("loading file")
	var cssLink = $("<link rel='stylesheet' type='text/css' href='assets/css/"+name+".css'>");
	$("head").append(cssLink);
};

removeCSSFile = function(name) {
	console.log($('link[rel=stylesheet][href~="'+name+'.css"]'))
	$('link[rel=stylesheet][href="assets/css/'+name+'.css"]').remove();
};
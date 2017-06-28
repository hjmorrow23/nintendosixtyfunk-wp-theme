jQuery(document).ready(function($) { 
	$(window).scroll(function() {
	    
	    winHgt = $(window).innerHeight();
	    
	    if ($(window).scrollTop() > winHgt ) { 
	        $('.nav-bar').css({"background":"rgba(0, 0, 0, 1)", "transition":"0.5s"});
	        $('.main-nav a').css('color', 'white');
	        $('.logo a').css('color', 'white');
	        $('.menu-icon').css('color', 'white');
	    } else if ($(window).scrollTop() < winHgt ) { 
	        $('.nav-bar').css('background', 'rgba(255, 255, 255, 1)');
	        $('.main-nav a').css('color', 'black');
	        $('.logo a').css('color', 'black');
	        $('.menu-icon').css('color', 'black');
	    }
	});
	
	//Include Mobile Nav
	$('.menu-icon').click(function() {
	    if ($('.page-container').hasClass('active')) {
	        $('.page-container').removeClass('active');
	        $('.page-container').addClass('hide-mobile');
	        $('.menu-icon').html('&#9776;');
	        $('.menu-icon').removeClass('cross');
	        
	    } else {
	        $('.page-container').addClass('active');
	        $('.page-container').removeClass('hide-mobile');
	        $('.menu-icon').html('&#735;');
	        $('.menu-icon').addClass('cross');
	    }    
	});
	
	/*
	$('.mobile-nav a').click(function(){
		$('.page-container').removeClass('active');
	    $('.page-container').addClass('hide-mobile');
	    $('.hamburger').html('&#9776;');
	    $('.hamburger').removeClass('cross');
	});
	*/
});
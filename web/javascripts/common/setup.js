/**
 * Set up common scripts. 
 */
$(document).ready( function() {
	
	// javascript enabled
	$('body').removeClass('js-disabled');
	
	// foundation
	$(document).foundation();

	alert('test');
	
	// navigation effects
	var longuest_duration = 0;
	$('.navigation li:not(.active)').each(function(){
		var duration = Math.floor((Math.random() * 1500) + 500);
		$(this).animate({left: 0}, duration, function(){});
		
		if (duration > longuest_duration) {
			longuest_duration = duration;
		}
	});
	
	// process effects
	var duration = 1000;

	// onload opacity
	$('.container .process .box').each(function(){	
		$(this).animate({
			opacity: 1
			}, duration, function () {}
		);
		
		duration += 400;
	});
	
	setTimeout("$('.navigation li:not(.active):not(.client_area)').hover(function(){" +
			"$(this).stop().animate({width:'100%', backgroundColor: '#B8383D'}, 500);" +
			"$('a', this).stop().animate({color:'#fff'}, 300);" +
			"}, function(){ " +
			"$(this).stop().animate({width:'90%', backgroundColor: '#efefef'}, 500); " +
			"$('a', this).stop().animate({color:'#756868'}, 300);" +
			"});", longuest_duration);
		
	
});

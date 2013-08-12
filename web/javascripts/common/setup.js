/**
 * Set up common scripts. 
 */
$(document).ready( function() {
	
	// javascript enabled
	$('body').removeClass('js-disabled');
	
	// foundation
	$(document).foundation();
	
	$('.process .meet a.email, .process .meet a.phone').qtip({
		position: {
			corner: {
				target: 'topMiddle',
				tooltip: 'bottomMiddle'
			}
		},
		style: {
			background: '#282828',
			color: '#fff',
			border: {
		         width: 1,
		         radius: 5,
		         color: '#282828'
		      },
		},
		hide: {
		      fixed: true,
		      delay: 500
		}
	});
	
	// navigation effects
	var longuest_duration = 0;
	$('.navigation li:not(.active)').each(function(){
		$(this).css('left', '-250px');
		var duration = Math.floor((Math.random() * 1500) + 500);
		$(this).animate({left: 0}, duration, function(){});
		
		if (duration > longuest_duration) {
			longuest_duration = duration;
		}
	});
	
	// process effects
	var duration = 1000;
	var box = $('.container .process .box');
	// onload opacity
	box.each(function(){
		
		$(this).animate({
			opacity: 0
		}, 1);
		
		$(this).animate({
			opacity: 1
			}, duration
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

/**
 * Set up common scripts. 
 */
$(document).ready( function() {
	
	// javascript enabled
	$('body').removeClass('js-disabled');
	
	// foundation
	$(document).foundation();
	
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
	var css_classes = ['meet', 'plan', 'dev', 'testing', 'launch'];
	
	var duration = 1000;

	for (var i = 0; i <= css_classes.length - 1; i++) {
		
		// onload opacity
		var box = $('.container .process .' + css_classes[i]);
		
		box.animate({
			opacity: 1
			}, duration, function () {}
		);
		
		duration += 400;
	}
	
	setTimeout("$('.navigation li:not(.active):not(.client_area)').hover(function(){" +
			"$(this).stop().animate({width:'100%', backgroundColor: '#B8383D'}, 500);" +
			"$('a', this).stop().animate({color:'#fff'}, 700);" +
			"}, function(){ " +
			"$(this).stop().animate({width:'90%', backgroundColor: '#efefef'}, 500); " +
			"$('a', this).stop().animate({color:'#756868'}, 700);" +
			"});", longuest_duration);

});

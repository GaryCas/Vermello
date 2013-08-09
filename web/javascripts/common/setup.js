/**
 * Set up common scripts. 
 */
$(document).ready( function() {
	
	// javascript enabled
	$('body').removeClass('js-disabled');
	
	// navigation effects
	$('.navigation li').hover(function(){
		$(this).addClass('focus');	
	}, function(){	
		$(this).removeClass('focus');
	});
	
	// process effects
	var css_classes = new Array();
	css_classes[0] = '.meet';
	css_classes[1] = '.plan';
	css_classes[2] = '.mockup';
	css_classes[3] = '.testing';
	css_classes[4] = '.launch';
	
	var duration = 1000;
	
	for (var i = 0; i <= css_classes.length; i++) {
		
		$('.container .process ' + css_classes[i]).animate({
			opacity:1
			}, duration, function () {}
		);
		
		duration += 300;
	}
	
});
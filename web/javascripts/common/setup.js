/**
 * Set up common scripts. 
 */
$(document).ready( function() {
	
	/*
	 * Search input effect 
	 */
	var search_input = $('.top-wrapper .search input'); 
	
	search_input.focus( function() {
		$(this).animate({
			width: '60%'
		}, 300,function() {
			
		});
	});
	
	search_input.blur( function() {
		$(this).animate({
			width: '45%'
		}, 300,function() {
			
		});
	});
	
});
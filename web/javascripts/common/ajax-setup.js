/**
 * Setup AJAX application
 */
$(document).ready(function() {
	
	/*
	 * Click events on all links
	 */
    var History = window.History;
    
    if (History.emulated.pushState && History.getHash()) {
    	History.Adapter.trigger(window, "statechange");
    }

    History.Adapter.bind(window,'statechange',function() {
        var State = History.getState();
        goToPage(State.url);
    });

    $(this).on('click', 'a', function(event) {
        event.preventDefault();
        History.pushState(null, $('title').html(), $(this).attr('href'));
    });
	
});

/**
 * 
 * @param href
 */
function goToPage(href) {

	$.ajax({
		url: href,
		success: function (response) {
			
			var options = { left: '-=50%', opacity: 0.1 };
			loadSection('.content', options, 350, response);
			
			var options = { opacity: 0.1 };
			loadSection('.breadcrumbs', options, 350, response);
			
			var options = { opacity: 0.1 };
			loadSection('.top-wrapper', options, 350, response);

	}});
};

/**
 * 
 * @param section
 * @param options
 * @param speed
 */
function loadSection(selector, options, speed, response) {
	
	var section = $(selector);
	var saved_options = {};
	
	for(var opt in options) {
		saved_options[opt] = section.css(opt);
	}
	
	var saved_content = section.html();
	var new_content = $(selector, response).html();
	
	if (saved_content != new_content) {
		section.animate(options, speed, function() {		
			section.html(new_content);	
			section.animate(saved_options, speed, function() {	
			});
		});
	}
}




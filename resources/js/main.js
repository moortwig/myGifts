var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');
		// functions here
		app.nano();
		app.divHeight();		
	},


	/*
		nanoScroller
	*/
	nano: function() {
		console.log('nanoScroller');
		$('.nano').nanoScroller();
	},


	/*
		Set height at index page sections
	*/
	divHeight: function() {
		console.log('sectionHeight');
		var height = $(window).height();
		$('.section-wrapper').css('height', height);
		// $('.landing-text').css('height', height*0.8);
	}
}

/*
	Initialise things
*/
app.init();
smoothScroll.init();

// $(document).ready(function() {});
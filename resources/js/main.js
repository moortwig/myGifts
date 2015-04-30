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
		var windowHeight = $(window).height();

		$('.index-page').css('height', windowHeight);
	}
}

/*
	Initialise things
*/
app.init();
// smoothScroll.init();

// $(document).ready(function() {});
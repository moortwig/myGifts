var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');
		// functions here
		app.nano();
		app.divHeight();
		// app.stickyFooter();		
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

		$('.section-wrapper').css('height', windowHeight);
	},

	/*
		Set sticky footer
	*/
	/*stickyFooter: function() {
		console.log('stickyFooter');
		var footerHeight = $('.footer').height(true);
		var outerHeight = $(window).outerHeight(true);
		// TODO get class name and use that for the $().css

		$('.wrapper').css('height', outerHeight);
	}*/
}

/*
	Initialise things
*/
app.init();
smoothScroll.init();

// $(document).ready(function() {});
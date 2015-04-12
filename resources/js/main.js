var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');
		// functions here
		app.nano();
		app.divHeight();
		app.stickyFooter();		
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
		var landingHeight = $('.landing-section').height();
		var windowHeight = $(window).height();
		// var signupHeight = windowHeight - footerHeight;
		// var footerHeight = $('#footer').height();
		// console.log(signupHeight);

		$('.section-wrapper').css('height', windowHeight);
		// $('.section-wrapper').css('signupHeight', windowHeight - footerHeight);
		// $('.landing-text').css('height', height*0.8);
	},

	stickyFooter: function() {
		console.log('stickyFooter');
		//
	}
}

/*
	Initialise things
*/
app.init();
smoothScroll.init();

// $(document).ready(function() {});
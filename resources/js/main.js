var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');
		// functions here
		app.nano();
		app.sectionHeight();
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
	sectionHeight: function() {
		// TODO:
		// get the height value
		// set that value to class .section-wrapper
		console.log('sectionHeight');
		var height = $(window).height();
		$('.section-wrapper').css('height', height);
	}
}

/*
	Initialise app
*/
app.init();


// $(document).ready(function() {});
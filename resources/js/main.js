var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');
		// functions here
		app.nano();
		// app.divHeight();		
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

		$('.sign-up-page').css('height', windowHeight);
	}

	// bgImage: function() {
	// 	console.log('sets background image');
	// 	// TODO:
	// 	// hämta närmaste child
	// 	// gör en switch case
	// 	// om child har class "x"
	// 	// sätt in bakgrundsbild till body element
	// }
}

/*
	Initialise things
*/
app.init();
// smoothScroll.init();

// $(document).ready(function() {});
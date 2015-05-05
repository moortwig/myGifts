var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log('init');

		// function(s) here
		app.nano();	
	},

	/*
		nanoScroller
	*/
	nano: function() {
		console.log('nanoScroller');
		$('.nano').nanoScroller();
	},

}

/*
	Initialise it!
*/
app.init();

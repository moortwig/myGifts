var app = {

	/*
		Initialise JS
	*/
	init: function() {
		console.log("init");
		// functions here
		app.nano();
	},


	/*
		nanoScroller
	*/
	nano: function() {
		console.log("nanoScroller");
		$(".nano").nanoScroller();
	}
}

/*
	Initialise app
*/
app.init();


// $(document).ready(function() {});
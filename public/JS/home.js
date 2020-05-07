$(document).ready(function(){
	

	$('.menu-item').click(function() {
		/* Act on the event */

		$('.menu-item').removeClass('active');
		$(this).addClass('active');
		console.log("Hello");

	});

});

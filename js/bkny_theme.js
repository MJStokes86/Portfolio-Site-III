jQuery(document).ready(function($) {



	jQuery('.parallax-window').parallax( "50%", 0.4);

	jQuery('#toggle').click(function(){
		jQuery(this).toggleClass('active');
		jQuery('#overlay').toggleClass('open');

	});






});

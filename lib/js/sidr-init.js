jQuery(document).ready(function() {

	 jQuery('body').swipe( {
        //Single swipe handler for left swipes
        swipeLeft: function () {
            $.sidr('close', 'sidr');
        },
        swipeRight: function () {
            $.sidr('open', 'sidr');
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold: 45
    });

	jQuery('#nav-toggle').sidr({
		name: 'sidr',
		source: '.nav-brand, #main-navigation, .social-media',
		 onOpen: function(){
       // Change the menu icon on open
   },
   onClose: function(){
	jQuery('#nav-toggle i.fa-bars').attr('i');   }

	});
}); 
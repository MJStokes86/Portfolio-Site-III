jQuery(document).ready(function($) {



	jQuery('.parallax-window').parallax( "50%", 0.4);

	jQuery('#toggle').click(function(){
		jQuery(this).toggleClass('active');
		jQuery('#overlay').toggleClass('open');

	});


   jQuery(window).scroll(function(){                          
            if (jQuery(this).scrollTop() > 200) {
                jQuery('.navbar-fixed-top').fadeIn(500);
            } else {
                jQuery('.navbar-fixed-top').fadeOut(500);
            }
        });

// var form = jQuery('comment-form');

// new Request({
//     url: form.action,
//     method: 'post',
//     onRequest: function() {},
//     onSuccess: function(content) {},
//     onComplete: function() {}
// }).send(form.toQueryString() + '&is_legit=1');


});

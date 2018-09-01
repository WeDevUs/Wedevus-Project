$(window).load(function() {
 $('.loader').fadeOut('slow', function(){
     $('.loader').hide();
    });

});

jQuery(document).ready(function() {
    var offset = 220;
    var duration = 1000;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.top-arrow').fadeIn(duration);
        } else {
            jQuery('.top-arrow').fadeOut(duration);
        }
    });
    jQuery('.top-arrow').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
jQuery(document).ready(function($) {
        
    $.fn.headerScroll = function() {
        var $header = $('header');
        $(window).scroll(function() {
        
            if ($(window).scrollTop() > 0) {
                $header.addClass('feint');
            } else {
                $header.removeClass('feint');
            }
            
        });
    }
    
    
    if ($(window).width() > 980) {
        $.fn.headerScroll();
    }  
});
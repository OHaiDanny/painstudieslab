//(function ($) {
//    var winWidth;
//    var speed;
//    var BGPos;
//    var yPosOld;
//    
//    function initializeParallax() {
//        speed = 2;
//        BGPos = $('.parallaxContainer').css('backgroundPosition').split(" ");
//        yPosOld = BGPos[1].replace('px','');
//    }
//    
//    function parallax() {
//        var yPos = ($(window).scrollTop() / speed);
//        var newCoords = Number(yPosOld) + Number(yPos);
//        var coords = 'right ' + newCoords + 'px';
//        $('.parallaxContainer').css("backgroundPosition", coords);
//    }
//    
//    if ($(window).width() <= 879) {
//        $(document).ready(initializeParallax);
//        $(window).resize(initializeParallax);
//    }
//    $(window).scroll(parallax);
//    
//})(jQuery);
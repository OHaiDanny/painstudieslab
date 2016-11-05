    (function ($) {
    
    // for parallax
    var winWidth;
    var speed;
    var BGPos;
    var yPosOld;
    
    $(window).resize(function() {
          resizeProject();
          homeImgResize();
          //ctaResize();
          truncate();
          initializeParallax();
    }).trigger('resize');
    
    $(window).resize(function() {
        //ctaResize();
    });
    
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('#home-img .slogan').addClass('fade');
            $('.disappear').addClass('fade');
        } else {
            $('#home-img .slogan').removeClass('fade');
            $('.disappear').removeClass('fade');
        }
        parallax();
    });
    
    function initializeParallax() {
        speed = 12;
        BGPos = $('.parallaxContainer').css('backgroundPosition').split(" ");
        yPosOld = BGPos[1].replace('px','');
    }
    
    function parallax() {
        var yPos = -($(window).scrollTop() / speed);
        var newCoords = Number(yPosOld) + Number(yPos);
        var coords = 'right ' + newCoords + 'px';
        $('.parallaxContainer').css("backgroundPosition", coords);
    }

    function resizeProject() {
        $('#project .image-filler').height($('#project .image-filler').width());
    }

    function homeImgResize() {
        if ($(window).width() >= 980) {
            $("#home-img .featureImg").height($(window).outerHeight() - 180);
            $("#home-img .featureImg.full").height($(window).outerHeight() - 50);
        } else {
            $("#home-img .featureImg.full").height($(window).outerHeight() - 200);
        }
    }
    
    function ctaResize() {
        $('.cta .img-crop').height($('.cta .img-crop').width());
    }

    function truncate() {
        $('.truncate').succinct({
            size: 500
        });
    }
    
    })(jQuery);
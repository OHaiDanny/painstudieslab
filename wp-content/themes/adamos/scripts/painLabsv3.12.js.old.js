/* JAVSCRIPT FOR PAIN LABS WEBSITE */

(function ($) {
      $(document).ready(function() {
          resizeProject();
          featureImgResize();
          ctaResize();
          //truncate();
      });
    
    $(window).resize(function() {
        ctaResize();
    })
    
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $('#home-img .slogan').addClass('fade');
            $('.disappear').addClass('fade');
        } else {
            $('#home-img .slogan').removeClass('fade');
            $('.disappear').removeClass('fade');
        }
    });
    
    function resizeProject() {
        $('#project .image-filler').height($('#project .image-filler').width());
    }

    function featureImgResize() {
        if ($(window).width() >= 980) {
            $("#primary #content .featureImg").height($(window).outerHeight()); // 214 is the height of the top nav and the h1 box below.
            $("#primary #content .featureImg.full").height($(window).outerHeight());
        } else {
            $("#primary #content .featureImg.full").height($(window).outerHeight());
        }
    }
    
    function ctaResize() {
        $('.cta .img-crop').height($('.cta .img-crop').width());
    }
    
//
//    function documentReadyFunction() {
//        // functions for document ready
//        onPageLoadOrResize();
//        onPageLoad();
//    }
//
//    function windowResizeFunction() { // functions for window resize
//        onPageLoadOrResize();
//    }
//
//    function onPageLoad() {
//        truncate();
//    }
//
//    function onPageLoadOrResize() {
//        //resizeHomeSubGroup();
//        //projectSmartContentResize();
//        resizeProject();
//        featureImgResize();
//        ctaResize();
//    }

    //function resizeHomeSubGroup() {
//        winWidth = $(window).width();
//        if (winWidth > 780) {
//            $('#home-subgroup .img-crop').height($('#home-subgroup .img-crop').width());
//        } else {
//            $('#home-subgroup .img-crop').css({
//                height: '220px'
//            });
//        }
    //}
    
//    function projectSmartContentResize() {
//        var contentHeight = $('#Project .image-filler .content').outerHeight();
//        var container = $('#Project a');
//        container.on('mouseover', function() {
//            $(this).find('.image-filler').css('bottom', -400+contentHeight);
//        }).on('mouseleave', function() {
//            $(this).find('.image-filler').css('bottom', '-400px');
//        });
//    }


//    function truncate() {
//        $('.truncate').succinct({
//            size: 500
//        });
//    }

})(jQuery);
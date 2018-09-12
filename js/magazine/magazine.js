$(function() {

    $(".magazine-cover").height($(window).height() - 55);
    $(window).on("resize", function() {

        $(".magazine-cover").height($(window).height() - 55);

    });

    $('.magazine-arrow').click(function() {
        $('html,body').animate({
            scrollTop: $('.magazine').offset().top - 70
        }, 700);
    });


});
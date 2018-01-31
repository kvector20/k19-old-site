$(function() {

    $(".lamp").on("click", function() {
        $(this).toggleClass("filter");
        $("body, .pusher").toggleClass("light");
        $(".letter").toggleClass("active");
        if ($(".letter").hasClass("active")) {
            $(".ghost").css("filter", "invert(26%)");
        } else {
            $(".ghost").css("filter", "invert(75%)");
        }
    });

    new WOW().init(); // wow.js for scrolling animation


});
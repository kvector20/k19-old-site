$(function() {
    new WOW().init(); // wow.js for scrolling animation

    $(".intro").height($(window).height());
    $(window).on("resize", function() {
        $(".intro").height($(window).height());
    });

    $("#message").on("blur", function() {
        if ($(this).val().replace(/ /g, '').length >= 20) {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        } else {
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");
        }
    });

    $('#inputEmail, #inputUserName, #inputTelephone').on("blur", function(event) {
        if ($(this).is(":invalid")) {
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
    });



});
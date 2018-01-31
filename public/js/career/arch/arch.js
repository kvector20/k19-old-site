$(function() {

	$('input').on("blur", function(event) {
        if ($(this).is(":invalid")) {
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
        }
    });

});
$(function() {

	$('input').on("blur", function(event) {
        if ($(this).is(":invalid")) {
            $(this).removeClass("is-valid");
            $(this).addClass("is-invalid");
            $(this).siblings('.input-group-prepend').removeClass('text-success');
            $(this).siblings('.input-group-prepend').addClass('text-danger');
            $(this).siblings('.input-group-prepend').find("i.fa").removeClass('rorate-clock');
            $(this).siblings('.input-group-prepend').find("i.fa").addClass('rotate-anticlock');
        } else {
            $(this).removeClass("is-invalid");
            $(this).addClass("is-valid");
            $(this).siblings('.input-group-prepend').removeClass('text-danger');
            $(this).siblings('.input-group-prepend').addClass('text-success');
            $(this).siblings('.input-group-prepend').find("i.fa").removeClass('rotate-anticlock');
            $(this).siblings('.input-group-prepend').find("i.fa").addClass('rotate-clock');
        }
    });

});
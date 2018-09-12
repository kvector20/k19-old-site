$(function() {

	$(".wrapper").css("min-height", $(window).height() - $("footer").height());
	$(window).on('resize', function() {
		$(".wrapper").css("min-height", $(window).height() - $("footer").height());
	});


	$("#login-button").click(function(event){
		event.preventDefault();
		var valid = true;
		$(this).siblings('input').each(function() {
			if($(this).is(":invalid")) {
		        $(this).removeClass("is-valid");
		        $(this).addClass("is-invalid");
		        valid = false;
	    	} else {
		        $(this).removeClass("is-invalid");
		        $(this).addClass("is-valid");
				
		    }
		});
		if (valid) {
			$('form').fadeOut(500);
			$('.wrapper').addClass('form-success');
			$("form").submit();
		}
	});

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
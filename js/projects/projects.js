$(document).ready(function() {

    var modal = $(".modal");
    var modalImg = $(".modal-content");
    var captionText = $(".caption");

    $(".myImg").click(function() {
        var txt = $(this).siblings(".card-body").find(".card-text").text();
        modal.css("display", "block");
        modalImg.attr("src", $(this).attr("src"));
        captionText.text(txt);
    });


    modalImg.click(function(e) {
        e.stopPropagation();
    });

    var span = $(".close");
    span.click(function() {
        modal.css("display", "none");
    });

    modal.click(function() {
        modal.css("display", "none");
    });

    $('.card-body').each(function() { 
        if ($(this).find("p").text() == '') {
            $(this).css("padding", "0");
        }
    });

});
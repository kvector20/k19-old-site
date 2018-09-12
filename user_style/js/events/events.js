$(function(){
    $('section .timeline .event .event-head').on('click' ,function(){
        $(this).next().slideToggle(400);
    });
});
$(function(){
    var con = $('.left-wires .connection:eq(0)');
    $(con).find('.iwire').addClass('red');
    $(con).find('.owire').addClass('black');
    $('.inputs input:eq(0)').addClass('invalid');

    $('input, select').each(function(){
        $(this).addClass('invalid');
    });

    $('input, select').on("blur", function(event) {

        if ($(this).is(":invalid")) {
            $(this).removeClass("valid");
            $(this).addClass("invalid");

            $('.btn-line').removeClass('green');
            $('.btn-line').addClass('gray');
            $('.submit').removeClass('red');
            $('.submit').addClass('gray');

            var index = $(this).index();
            
            if (index % 2 == 1) {
                if (index == 1) {
                    index = 0
                }
                else if (index == 3) {
                    index = 1;
                }
                else if (index == 5) {
                    index = 2
                }

                var connection = $('.right-wires .connection:eq(' + index + ')');
                $(connection).find('.riwire').removeClass('black');
                $(connection).find('.rowire').removeClass('red');
                $(connection).find('.riwire').addClass('gray');
                $(connection).find('.rowire').addClass('gray');
            }
            else{
                index = index / 2;
                
                var connection = $('.left-wires .connection:eq(' + index + ')');
                $(connection).find('.iwire').removeClass('red');
                $(connection).find('.owire').removeClass('black');
                $(connection).find('.riwire').addClass('gray');
                $(connection).find('.rowire').addClass('gray');


            }

        } else {
            $(this).removeClass("invalid");
            $(this).addClass("valid");

            var allValid = true;
            
            var index = $(this).index();

            $('input, select').each(function(){
                if($(this).hasClass('valid') == false){
                    allValid = false;
                }
            });

            if (allValid == true){
                $('.btn-line').removeClass('gray');
                $('.btn-line').addClass('green');
                $('.submit').removeClass('gray');
                $('.submit').addClass('red');
            }
            
            if (index % 2 == 1) {
                if (index == 1) {
                    index = 0
                }
                else if (index == 3) {
                    index = 1;
                }
                else if (index == 5) {
                    index = 2
                }

                var connection = $('.right-wires .connection:eq(' + index + ')');
                $(connection).find('.riwire').removeClass('gray');
                $(connection).find('.rowire').removeClass('gray');
                $(connection).find('.riwire').addClass('black');
                $(connection).find('.rowire').addClass('red');
            }
            else{
                index = index / 2;
                
                var connection = $('.left-wires .connection:eq(' + index + ')');
                $(connection).find('.iwire').removeClass('gray');
                $(connection).find('.owire').removeClass('gray');
                $(connection).find('.iwire').addClass('red');
                $(connection).find('.owire').addClass('black');
            }
        }
    });
});

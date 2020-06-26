$(document).on('click', '.category', function () {
    $('.card-body').removeAttr('style');

    var id = $(this).attr('data-id');

    if(id == 1){
        $('[data-type-id = 1]').css('background','chartreuse');
    }
    if(id == 2){
        $('[data-type-id = 2]').css('background','chartreuse');
    }
    if(id == 3){
        $('[data-type-id = 3]').css('background','chartreuse');
    }
    if(id == 4){
        $('[data-type-id = 4]').css('background','chartreuse');
    }
    if(id == 5){
        $('[data-type-id = 5]').css('background','chartreuse');
    }

});
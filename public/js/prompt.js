$(document).ready(function () {
    $('.delete').mousemove(function (e) {
        $('#prompt-delete').css({'left': e.clientX + 20, 'top': e.clientY - 20}).fadeIn(100, function () {
            
        });
    });
    $('.delete').mouseout(function () {
        $('#prompt-delete').fadeOut(500, function () {
            
        });
    });


    $('.edit-link').mousemove(function (e) {
        $('#prompt-edit').css({'left': e.clientX + 20, 'top': e.clientY - 20}).fadeIn(100, function () {

        });
    }).mouseout(function () {
        $('#prompt-edit').fadeOut(500, function () {

        });
    });

});
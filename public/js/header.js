$(document).ready(function(){

    $('.main-menu li a').each(function () {

        var url = window.location.href;
        var current_url = this.href;
        if(current_url == url )
        {
            $(this).addClass('active');
        }
    });

    var click = 0;
    $('#create-user').click(function (e) {
        e.preventDefault();


        if (!click)
        {
            $('#new-user').slideDown(500, function () {

            });
            click++;
        }
        else
        {
            $('#new-user').slideUp(500, function () {

            });
            click = 0;
        }
    });

    var click_ajax = 0;
    $('#create-user-ajax').click(function (e) {
        e.preventDefault();


        if (!click)
        {
            $('#new-user-ajax').slideDown(500, function () {

            });
            click++;
        }
        else
        {
            $('#new-user-ajax').slideUp(500, function () {

            });
            click = 0;
        }
    });
});
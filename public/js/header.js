$(document).ready(function(){

    $('.main-menu li a').each(function () {

        var url = window.location.href;
        var current_url = this.href;
        if(current_url == url )
        {
            $(this).addClass('active');
        }
    });
});
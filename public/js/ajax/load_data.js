$(document).ready(function() {

    var click = 0;

    $('body').on('click', '#get-data', function(e){
        e.preventDefault();
        $('body').css('opacity', 0.5);
        $('#preload').css('display', 'block');
        //$('#ajax-data table tbody').append('<img src=\'/images/load.gif\'>');

        $.ajax({
            method: 'POST',
            url: '/load_data',
        }).done(function (data) {
            $('body').css('opacity', 1);
            $('#preload').css('display', 'none');
            console.log(data);
            $('#ajax-data').html(data);
        }).fail(function (data) {
            $('body').css('opacity', '1');
            $('#preload').css('display', 'none');
            alert('error');
            console.log(data);
        });
        });
    
    $('body').on('click', '.pagination a', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        $('body').css('opacity', 0.5);
        $('#preload').css('display', 'block');
        $.ajax({
            method: 'POST',
            url : url,

        }).done(function (data) {
            $('body').css('opacity', 1);
            $('#preload').css('display', 'none');
            $('#ajax-data').html(data);
        }).fail(function () {
            alert('Articles could not be loaded.');
            console.log(data);
        });
        window.history.pushState("", "", url);
    });
});
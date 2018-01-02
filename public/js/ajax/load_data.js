$(document).ready(function() {

    var click = 0;

    $('body').on('click', '#get-data', function(e){
        e.preventDefault();
        $('body').css('opacity', 0.5);
        $('#preload').css('display', 'block');
        //$('#ajax-data table tbody').append('<img src=\'/images/load.gif\'>');

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/load_data',
            success: function(data){
                console.log(data);
            },
            error: function(data){
                console.log(data);
            }

        });
        });
    
    $('body').on('click', '.pagination a', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        $('body').css('opacity', 0.5);
        $('#preload').css('display', 'block');
        $.ajax({
            url : url,
            method: 'POST',
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
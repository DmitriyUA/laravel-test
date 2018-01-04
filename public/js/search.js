$(document).ready(function () {

    var search = $('#search').val().toLowerCase();

    $('table td').each(function () {

        if($(this).text().toLowerCase().indexOf(search) != -1)
        {
            $(this).addClass('found');
        }
    });
    console.log(search);
});
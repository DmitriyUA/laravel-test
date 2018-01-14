$(document).ready(function(){
    var click = 0;


    $('#edcontent').click(function (e) {
        e.preventDefault();


        if (!click)
        {
            $('#edit-file-content').slideDown(500, function () {

            });
            click++;
        }
        else
        {
            $('#edit-file-content').slideUp(500, function () {

            });
            click = 0;
        }
    });
});
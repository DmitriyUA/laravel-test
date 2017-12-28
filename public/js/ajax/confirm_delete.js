$(document).ready(function() {

    $(".delete").click(function(){
        var id = $(this).val();
        $("#send-id").attr('value', id);
    });
});
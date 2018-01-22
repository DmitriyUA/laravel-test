$(document).ready(function ()
{
    var url = window.location.pathname.split('/');
    var count_select = 0;
    var select_one = 0;
    var fall = true;
    $('#delete').click(function (e) {

        $('.delete-group').each(function () {
            if($(this).prop("checked"))
            {
                fall = false;
            }
        });
        if(fall == true)
        {
            if(url[1] == 'en')
            {
                var please_select_records = 'Please select one or more records';
            }
            else var please_select_records = 'Выберите пожалуйста одну или более записей';
            alert(please_select_records);
            e.preventDefault();
        }
        else
        {
            if(url[1] == 'en')
            {
                var delete_select_records = 'Delete selected records?';
            }
            else var delete_select_records = 'Удалить выбранные записи?';

            if(!confirm(delete_select_records))
            {
                e.preventDefault();
                $('.delete-group').prop('checked', false);
                fall = true;
                count_select = 0;
            }
        }
    });

    $('#select-all').click(function () {
        if(count_select == 0)
        {
            $('.delete-group').prop('checked', true);
            count_select = 1;
        }
        else if (count_select == 1)
        {
            $('.delete-group').prop('checked', false);
            count_select = 0;
        }
    });
    console.log(url);
});
$(document).ready(function ()
{
    var count_select = 0;
    var fall = true;
    $('#delete').click(function (e) {

        $('.delete-group').each(function () {
            if($(this).prop("checked"))
            {
                fall = false;
            }
            else
            console.log();

            //console.log('Prop Checked '+$(this).prop("checked"));
        });
        //$('#delete').click(function (e) {
        //    if(!($('.delete-group').prop("checked")))
        //    {
//
        //        alert('Please select one or more records');
        //        e.preventDefault();
        //    }
        if(fall == true)
        {
            alert('Please select one or more records');
            e.preventDefault();
        }
        else
        {
            if(!confirm('Delete selected records?'))
            {
                e.preventDefault();
                $('.delete-group').removeAttr('checked');
                fall = true;
                count_select = 0;
            }
        }
        console.log('FALL variable '+fall);
        });

    $('#select-all').click(function () {
        if(count_select == 0)
        {
            $('.delete-group').attr('checked', 'checked');
            count_select = 1;
        }
        else if (count_select == 1)
        {
            $('.delete-group').removeAttr('checked');
            count_select = 0;
        }
    });
});
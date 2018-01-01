$(document).ready(function() {

    var click = 0;

    $('body').on('click', '#get-data', function(e){
        e.preventDefault();
        $('body').css('opacity', 0.5);
        $('#preload').css('display', 'block');
        //$('#ajax-data table tbody').append('<img src=\'/images/load.gif\'>');
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/load_data',
            data: {'query_to_db':1},
        }).done(function (data) {
            $('body').css('opacity', 1);
            $('#preload').css('display', 'none');
            console.log(data);
            if (data.users.data.length == 0)
            {
                $('#ajax-data table tbody').empty();
                $('#ajax-data table tbody').append(
                    "<tr><td colspan='5'><h5 style='text-align: center'>Table is empty</h5></td></tr>"
                );
            }
            else
            {
                $('#ajax-data table tbody').empty();
                for (var i = 0; i < data.users.data.length; i++) {
                    $('#ajax-data table tbody').append(
                        "<tr>\n" +
                        "<th scope='row'>" + data.users.data[i].id + "</th>\n" +
                        "<td>" + data.users.data[i].name + "</td>\n" +
                        "<td>" + data.users.data[i].surname + "</td>\n" +
                        "<td>" + data.users.data[i].age + "</td>\n" +
                        "<td>" + data.users.data[i].created_at + "</td>\n" +
                        "</tr>"
                    );
                }
            }}).fail(function (data) {
            $('body').css('opacity', '1');
            $('#preload').css('display', 'none');
            alert('error');
        });
        });
    });
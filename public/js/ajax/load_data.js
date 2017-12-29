$(document).ready(function() {

    var click = 0;

    $('#get-data').click(function(){
        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/load_data',
            data: {'query_to_db': 'SELECT * FROM users'},
            success: function (data) {
                if (data.users.length == 0)
                {
                    $('#ajax-data table tbody').empty();
                    $('#ajax-data table tbody').append(
                        "<tr><td colspan='5'><h5 style='text-align: center'>Table is empty</h5></td></tr>"
                    );
                }
                else
                {
                $('#ajax-data table tbody').empty();
                    for (var i = 0; i < data.users.length; i++) {
                        $('#ajax-data table tbody').append(
                            "<tr>\n" +
                            "<th scope='row'>" + data.users[i].id + "</th>\n" +
                            "<td>" + data.users[i].name + "</td>\n" +
                            "<td>" + data.users[i].surname + "</td>\n" +
                            "<td>" + data.users[i].age + "</td>\n" +
                            "<td>" + data.users[i].created_at + "</td>\n" +
                            "</tr>"
                        );
                    }
                    console.log(data.users);
            }},
            error: function () {
                alert('error');
            }
        });
    });
});
$(document).ready(function() {

    var click = true;

    $('#load-data').click(function(){
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
                if (click)
                {
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
                }

                click = false;
            },
            error: function () {
                alert('error');
            }
        });
        $('#load-data').addClass('d-none');
    });


    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    //Add user
    $('#add-user').click(function (e) {
        e.preventDefault();

        var name = $("input[name=name]").val();
        var surname = $("input[name=surname]").val();
        var age = $("input[name=age]").val();
        console.log(name);
        console.log(surname);
        console.log(age);

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/create_ajax',
            data: {'name':name, 'surname':surname, 'age':age},
            success: function (data) {
                alert(data.msg);
                console.log(data.input);
            },
            error: function () {
                alert('error');
            }
        });
        }
    );
});
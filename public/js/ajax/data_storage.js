$(document).ready(function() {
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
                data: {'name': name, 'surname': surname, 'age': age},
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
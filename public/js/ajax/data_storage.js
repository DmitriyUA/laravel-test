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

                if(name == '' || surname == '' || age == '')
                {
                        alert("Fill in all the fields");
                }
                else if(isNaN(age))
                {
                    alert("Field 'Age' must be a integer beetween 18 and 99");
                }
                else if(age < 18 || age > 99)
                {
                    alert("Field 'Age' must be a integer beetween 18 and 99");
                }


            else {
                $.ajax({
                    type: 'POST',
                    url: '/create_ajax',
                    data: {'name': name, 'surname': surname, 'age': age}
                }).done(function (data) {
                    alert(data.msg);
                    console.log(data);
                    window.location.href = "/ajax";
                }).fail(function (data) {
                    alert('Users could not be loaded.');
                });
            }
        }
    );
});
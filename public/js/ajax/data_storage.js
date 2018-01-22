$(document).ready(function() {
    var url = window.location.pathname.split('/');
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
                    if(url[1] == 'en')
                    {
                        var fill_in_all_fields = 'Fill in all the fields!';
                    }
                    else var fill_in_all_fields = 'Заполните все поля!';
                    alert(fill_in_all_fields);
                }
                else if(isNaN(age))
                {
                    if(url[1] == 'en')
                    {
                        var field_age_must_be_int = 'Value of the field \"Age\" must be a integer beetween 18 and 99';
                    }
                    else var field_age_must_be_int = 'Значение поля \"Возраст\" должно быть целочисленного типа в интервале 18 и 99';
                    alert(field_age_must_be_int);
                }
                else if(age < 18 || age > 99)
                {
                    if(url[1] == 'en')
                    {
                        var field_age_must_be_int = 'Value of the field \"Age\" must be a integer beetween 18 and 99';
                    }
                    else var field_age_must_be_int = 'Значение поля \"Возраст\" должно быть целочисленного типа в интервале 18 и 99';
                    alert(field_age_must_be_int);
                }


            else {
                $.ajax({
                    type: 'POST',
                    url: '/create_ajax',
                    data: {'name': name, 'surname': surname, 'age': age}
                }).done(function (data) {
                    alert(data.msg);
                    //window.location.href = "/ajax";
                }).fail(function (data) {
                    alert('Users could not be loaded.');
                });
            }
        }
    );
    console.log(url);
});
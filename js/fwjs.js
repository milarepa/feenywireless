$(document).ready(function() {
    $('postForm').submit(function(event) {
        $('#name + .throw_error').empty();
        $('#success').empty();

        var postForm = { //Fetch form data
            'name'  : $('input[name=name]').val()
            'pass'  : $('input[pass=pass]').val()
        };

        $.ajax({ //jQuery.ajax()
            type        : 'POST',
            url         : '../lib/lgn.php',
            data        : postForm,
            dataType    : 'json', //javascript object
            success     : function(data) {

            if (!data.success) {
                if (data.errors.name) {
                    $('.throw_error').fadeIn(1000).html(data.errors.name);
                }
            } else {
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>');
                }
            }
        });
        event.preventDefault();
    });
});

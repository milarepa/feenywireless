$(document).ready(function() {
    $('postForm').submit(function(event) { //Trigger on form submit
        $('#name + .throw_error').empty(); //Clear the messages first
        $('#success').empty();

        var postForm = { //Fetch form data
            'name'  : $('input[name=name]').val() //Store name fields value
        };

        $.ajax({ //Process the form using $.ajax()
            type        : 'POST', //Method type
            url         : '../lib/lgn.php', //Your form processing file url
            data        : postForm, //Forms name
            dataType    : 'json',
            success     : function(data) {

            if (!data.success) { //If fails
                if (data.errors.name) { //Returned if any error from process.php
                    $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                }
            } else {
                    $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>');
                }
            }
        });
        event.preventDefault();
    });
});

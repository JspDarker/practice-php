/**
 * click submit: check field empty = background color: red;
 * when user enter text: clear background, check validate with event onkeyup display res under
 *
 *
 * **/
$(function ()  {
    $('#demoForm').validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "name": {
                required: true,
                maxlength: 50,
                minlength: 3
            },
            "email": {
                required: true,
                isEmail: true,
                email: true
            },
            "password": {
                required: true,
                minlength: 6,
                isPassword: true
            },
            "pass_confirm": {
                required: true,
                equalTo: "#password",
                minlength: 6
            }
        }
    });
});
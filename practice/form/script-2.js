/**
 * click submit: check field empty = background color: red;
 * when user enter text: clear background, check validate with event onkeyup display res under
 *
 *
 * **/
$(function() {

    $.validator.setDefaults({
        errorClass: 'text-danger', // not working -> oke because element is label(text-danger) so not input(is-invalid)
        highlight: function(element) {
            $(element)
                .closest('.form-group')
                .find('input')
                .addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-group')
                .find('input')
                .removeClass('is-invalid')
                .addClass('is-valid')
        }
    });

    /**     CUSTOM VALIDATION FOR STYLE ME **/

    $.validator.addMethod('strongPassword',function( value, element) {
        return this.optional(element)
        || /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/.test(value);
    },'min length 6 character of 1 letter and 1 number');

    $.validator.addMethod('isUsername',function(value, element) { // begin a letter !important
        return this.optional(element)
        || /^[a-zA-Z]([._-]?[a-zA-Z0-9]+)*$/.test(value.toLowerCase());
    },'must begin 1 letter');

    $.validator.addMethod('isName',function(value, element) {
        return this.optional(element)
        || /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/.test(value.trim());
    },'name must valid');

    $.validator.addMethod('isEmail',function(value, element) {
        return this.optional(element)
        || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
           .test(value.toLowerCase());
    },'email invalid as text.@.text.c.o.m');



    $('#register-form').validate({

        rules: {
            userName: {
                required: true,
                nowhitespace: true,
                isUsername: true, // begin a letter -> username valid
                minlength: 3,
                maxlength:30
            },
            name: { //name=name
                required: true,
                isName: true,
                minlength: 3,
                maxlength:40
            },
            email: { // name=email
                required: true,
                isEmail: true,
                nowhitespace: true
            },
            password: {
                required: true,
                minlength: 6,
                strongPassword: true
            },
            pass_confirm: {
                required: true,
                equalTo: "#password"
            }

        },
        messages: {
            email: { // your handler error with style's your
                required: 'field important!'
                // email: 'please enter a email validate'
            }
        }

    });
    /*if($a){
        obj.show();
    } else {
        obj.hide();
    }
    $a = 5;
    var methodName = ($a ? 'show' : 'hide');
    obj[methodName]();
    function dark(a) {
        if(a) {
            this.a = a;
        } else {
            this.a = 'new String';
        }
        return this.a;
    }
    dark("a");*/
});
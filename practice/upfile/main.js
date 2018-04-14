$(function() {

    $.validator.setDefaults({
        errorClass: 'text-danger',
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

    $.validator.addMethod('isUsername',function(value, element) { // begin a letter !important
        return this.optional(element)
            || /^[a-zA-Z]([._-]?[a-zA-Z0-9]+)*$/.test(value.toLowerCase());
    },'must begin 1 letter');

    $.validator.addMethod('isName',function(value, element) {
        return this.optional(element)
            || /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/.test(value.trim());
    },'name must valid');

    $('#formUserId').validate({

        rules: {
            name: {
                required: true,
                isName: true,
                minlength: 4,
                maxlength:40
            },
            userId: {
                required: true,
                isUsername: true,
                minlength: 6
            }
        },
        message:{}

    });

});
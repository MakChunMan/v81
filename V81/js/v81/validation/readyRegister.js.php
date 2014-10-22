/*
 *  Document   : readyRegister.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Register page
 */
<? include("../../../zh/zh_.php"); ?>
$.validator.setDefaults({
        submitHandler: function() {
            $.ajax({
                url: "http://127.0.0.1/do/PAGE/DO_REGISTER",
                data: $('#form-register').serialize(),
                type: "post",                
                cache: false
            }).done(function( html ) {
                alert(html);
                if($.trim(html).match("^Error")){
                    // Server side validation and display error msg
                    $('#error-msg').html(html.replace("Error:","")+"<br/>");
                } else {
                    $('#form-register').html(html.replace("Msg:","")+"<br/><br/>");
                }
            });
        }
    });
    
var ReadyRegister = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Register form - Initialize Validation */
            $('#form-register').validate({
                errorClass: 'help-block animation-slideUp', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    if (e.closest('.form-group').find('.help-block').length === 2) {
                        e.closest('.help-block').remove();
                    } else {
                        e.closest('.form-group').removeClass('has-success has-error');
                        e.closest('.help-block').remove();
                    }
                },
                rules: {
/***            'register-username': {
                        required: true,
                        minlength: 3
                    }, ****/
                    'register-email': {
                        required: true,
                        email: true
                    },
                    'register-password': {
                        required: true,
                        minlength: 5
                    },
                    'register-password-verify': {
                        required: true,
                        equalTo: '#register-password'
                    },
                    'register-terms': {
                        required: true
                    }
                },
                messages: {
 /***           'register-username': {
                        required: '<?=$MSG["zh"]["Missing Username"]?>',
                        minlength: '<?=$MSG["zh"]["Missing Username"]?>'
                    }, ***/
                    'register-email': '<?=$MSG["zh"]["Missing Email"]?>',
                    'register-password': {
                        required: '<?=$MSG["zh"]["Missing Password"]?>',
                        minlength: '<?=$MSG["zh"]["Length Password"]?>'
                    },
                    'register-password-verify': {
                        required: '<?=$MSG["zh"]["Missing Password"]?>',
                        minlength: '<?=$MSG["zh"]["Length Password"]?>',
                        equalTo: 'Please enter the same password as above'
                    },
                    'register-terms': {
                        required: '<?=$MSG["zh"]["Accept terms"]?>'
                    }
                }
            });
        }
    };
}();
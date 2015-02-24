/*
 *  Document   : login.js
 *  Date     : 2014-01-06
 *  Description: Custom javascript code used in Login page
 */
 <? include("../../../zh/zh_.php"); ?>
$.validator.setDefaults({
		submitHandler: function() {
			$.ajax({
				url: "/do/PAGE/DO_LOGIN",
				data: $('#form-login').serialize(),
                type: "post",				
				cache: false
			}).done(function( html ) {
				if($.trim(html).match("^Error")){
					// Server side validation and display error msg
					$('#error-msg').html(html.replace("Error:","")+"<br/>");
				} else {
					self.location = "/do/PAGE/PUB_MAIN";
				}
			});
		}
	});

/***** Client Side Checking ***/
var ReadyLogin = function() {

    return {
        init: function() {
            /* Login form - Initialize Validation */
            $('#form-login').validate({
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
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'login-email': {
                        required: true,
                        email: true
                    },
                    'login-password': {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    'login-email': "<?=$MSG["zh"]["Missing Email"]?>",
                    'login-password': {
                        required: "<?=$MSG["zh"]["Missing Password"]?>",
                        minlength: '<?=$MSG["zh"]["Length Password"]?>'
                    }
                }
            });
        }
    };
}();
/*
 *  Document   : reminder.js
 *  Date     : 2014-10-13
 *  Description: Custom javascript code used in Forget Password page
 */
<? include("../../../zh/zh_.php"); ?>

$.validator.setDefaults({
		submitHandler: function() {
			$.ajax({
				url: "http://127.0.0.1/do/PAGE/DO_REMINDER",
				type: "post",
				data: $('#form-reminder').serialize(),
				cache: false
			}).done(function( html ) {
				if($.trim(html).match("^Error")){
					// Server side validation and display error msg
					$('#error-msg').html(html.replace("Error:","")+"<br/>");
					$('#reminder-email').val("");
				} else {
					$('#form-reminder').html(html.replace("Msg:","")+"<br/>");
				}
			});
		}
	});

/***** Client Side Checking ***/
var ReadyReminder = function() {
    return {
        init: function() {
            /* Reminder form - Initialize Validation */
            $('#form-reminder').validate({
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
                    'reminder-email': {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    'reminder-email': "<?=$MSG["zh"]["Missing Email"]?>"
                }
            });
        }
    };
}();
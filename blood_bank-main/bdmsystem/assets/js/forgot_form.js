//forgot pass
jQuery('#forgot_form').on('submit', function (e) {
	jQuery('#form_forgot_msg').html(' <font color="Black">Please wait...</font>');
	jQuery.ajax({
		url: 'forgot_submit.php',
		type: 'post',
		data: jQuery('#forgot_form').serialize(),
		success: function (result) {
			jQuery('#form_forgot_msg').html('');
			jQuery('#forgot_submit').attr('disabled', false);
			var data = jQuery.parseJSON(result);
			if (data.status == 'error') {
				jQuery('#form_forgot_msg').html(data.msg);
			}
			if (data.status == 'success') {
				jQuery('#form_forgot_msg').html(data.msg);
				jQuery('#forgot_form')[0].reset();
				//window.location.href='login.php';

			}
			//	console.log(result);
		}

	});
	e.preventDefault();
});
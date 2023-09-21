$(document).ready(function(){
	/* Init login & password for the demo version */
	$('#zdk-login-dialog').bind("zdklogindialogaftershow", function() {
		$('#zdk-login-dialog input[name=login_name]').val('znetdk');
		$('#zdk-login-dialog input[name=password]').val('demo');
	});
});
<?php
function Insert_Forgot_Password_Form($atts) {
	global $wpdb, $user_message, $feup_success;
	global $ewd_feup_user_table_name;
		
	$Custom_CSS = get_option("EWD_FEUP_Custom_CSS");
	$Use_Captcha = get_option("EWD_FEUP_Use_Captcha");

	// Get the attributes passed by the shortcode, and store them in new variables for processing
	extract( shortcode_atts( array(
				'redirect_page' => '#',
				'loggedin_page' => '/',
				'reset_email_url' => '',
				'reveal_no_username' => 'No',
				'submit_text' => __('Reset password', 'front-end-only-users')),
			$atts
		)
	);
	$feup_Label_Email =  get_option("EWD_FEUP_Label_Email");
	if ($feup_Label_Email == "") {$feup_Label_Email = __("Email", 'front-end-only-users');}
	if (get_option("EWD_FEUP_Label_Reset_Password") != "") {$submit_text = get_option("EWD_FEUP_Label_Reset_Password");}

	if ($feup_success and $redirect_page != '#' and isset($_POST['Reset_Password_Submit'])) {FEUPRedirect($redirect_page);}
		
	$User = new FEUP_User();
	if ($User->Is_Logged_In() and $redirect_page != '#') {FEUPRedirect($loggedin_page);}
		
	$ReturnString = "";
												
	$ReturnString .= "<style type='text/css'>";
	$ReturnString .= $Custom_CSS;
	 $ReturnString .= EWD_FEUP_Add_Modified_Styles();
	
		
		
	$ReturnString .= "<div id='ewd-feup-forgot-password-form-div' class='ewd-feup-form-div'>";
	if (isset($user_message['Message'])) {$ReturnString .= $user_message['Message'];}
	$ReturnString .= "<form action='#' method='post' id='ewd-feup-forgot-password-form' class='feup-pure-form feup-pure-form-aligned'>";
	if (!isset($Time)) { $Time = "";}
	$ReturnString .= "<input type='hidden' name='ewd-feup-check' value='" . sha1(md5($Time.(isset($Salt)?$Salt:""))) . "'>";
	$ReturnString .= "<input type='hidden' name='ewd-feup-time' value='" . $Time . "'>";
	$ReturnString .= "<input type='hidden' name='ewd-feup-reset-email-url' value='".$reset_email_url."'>";
	$ReturnString .= "<input type='hidden' name='ewd-feup-action' value='forgot-password'>";
	$ReturnString .= "<input type='hidden' name='ewd-feup-reveal-no-username' value='".$reveal_no_username."'>";
	$ReturnString .= "<div class='feup-pure-control-group'>";
	$ReturnString .= "<label for='Email' id='ewd-feup-reset-password' class='ewd-feup-field-label'>" . $feup_Label_Email . ": </label>";
	$ReturnString .= "<input type='email' class='ewd-feup-text-input pure-input-1-3' name='Email' value='' />";
	$ReturnString .= "</div>";
	if ($Use_Captcha == "Yes") {$ReturnString .= EWD_FEUP_Add_Captcha();}
	$ReturnString .= "<div class='feup-pure-control-group'><label for='submit'></label><input type='submit' class='ewd-feup-submit feup-pure-button feup-pure-button-primary' name='Reset_Password_Submit' value='" . $submit_text . "'></div>";
	$ReturnString .= "</form>";
	$ReturnString .= "</div>";
	
	return $ReturnString;
}
add_shortcode("forgot-password", "Insert_Forgot_Password_Form");
?>
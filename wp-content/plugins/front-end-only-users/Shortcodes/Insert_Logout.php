<?php 
/* The function that creates the HTML on the front-end, based on the parameters
* supplied in the product-catalog shortcode */
function Insert_Logout($atts) {
		// Include the required global variables, and create a few new ones
		$Salt = get_option("EWD_FEUP_Hash_Salt");
		$Custom_CSS = get_option("EWD_FEUP_Custom_CSS");
		$Create_WordPress_Users = get_option("EWD_FEUP_Create_WordPress_Users");
		$CookieName = urlencode("EWD_FEUP_Login" . "%" . sha1(md5(get_site_url().$Salt))); 
		$feup_Label_Successful_Logout_Message =  get_option("EWD_FEUP_Label_Successful_Logout_Message");
		if ($feup_Label_Successful_Logout_Message == "") {$feup_Label_Successful_Logout_Message = __("You have been successfully logged out." , 'front-end-only-users');}
		$ReturnString="";
		
		// Get the attributes passed by the shortcode, and store them in new variables for processing
		extract( shortcode_atts( array(
				'no_message' => '',
				'redirect_page' => '#',
				'include_wordpress' => '',
				'no_redirect' => 'No',
				'submit_text' => 'Logout'),
				$atts
			)
		);
		
		if ($include_wordpress == "") {$include_wordpress = $Create_WordPress_Users;}
		if ($no_redirect != "Yes" and isset($_COOKIE[$CookieName])) {$redirect_page = get_the_permalink();}
		if ($include_wordpress != "Only") {setcookie($CookieName, "", time()-3600, "/");}
		if ($include_wordpress == "Yes" or $include_wordpress == "Only") {wp_logout();}
		$_COOKIE[urldecode($CookieName)] = "";
		if ($redirect_page != "#") {FEUPRedirect($redirect_page);}
		
		$ReturnString .= "<style type='text/css'>";
		$ReturnString .= $Custom_CSS;
		$ReturnString .= EWD_FEUP_Add_Modified_Styles();
		
		
		$ReturnString .= "<div class='feup-information-div'>";
		$ReturnString .= $feup_Label_Successful_Logout_Message;
		$ReturnString .= "</div>";
		
		if ($no_message != "Yes") {return $ReturnString;}
}
add_shortcode("logout", "Insert_Logout");

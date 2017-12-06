<?php 
	$Login_Time = get_option("EWD_FEUP_Login_Time");
	$Minimum_Password_Length = get_option("EWD_FEUP_Minimum_Password_Length");
	$Include_WP_Users = get_option("EWD_FEUP_Include_WP_Users");
	$Sign_Up_Email = get_option("EWD_FEUP_Sign_Up_Email");
	$Custom_CSS = get_option("EWD_FEUP_Custom_CSS");
	$Default_User_Level = get_option("EWD_Default_User_Level");
	$Use_Crypt = get_option("EWD_FEUP_Use_Crypt");
	$Username_Is_Email = get_option("EWD_FEUP_Username_Is_Email");
	$Required_Field_Symbol = get_option("EWD_FEUP_Required_Field_Symbol");
	$Show_TinyMCE = get_option("EWD_FEUP_Show_TinyMCE");

	$Use_Captcha = get_option("EWD_FEUP_Use_Captcha");
	$Allow_Level_Choice = get_option("EWD_FEUP_Allow_Level_Choice");
	$Track_Events = get_option("EWD_FEUP_Track_Events");
	$Admin_Approval = get_option("EWD_FEUP_Admin_Approval");
	$Email_On_Admin_Approval = get_option("EWD_FEUP_Email_On_Admin_Approval");
	$Admin_Email_On_Registration = get_option("EWD_FEUP_Admin_Email_On_Registration");
	$Email_Confirmation = get_option("EWD_FEUP_Email_Confirmation");
	$Default_User_Level = get_option("EWD_Default_User_Level");
	$Create_WordPress_Users = get_option("EWD_FEUP_Create_WordPress_Users");
	$Login_Options = get_option("EWD_FEUP_Login_Options");
	if (!is_array($Login_Options)) {$Login_Options = array();}

	$Email_Messages_Array = get_option("EWD_FEUP_Email_Messages_Array");
	if (!is_array($Email_Messages_Array)) {$Email_Messages_Array = array();}
	
	$Facebook_App_ID = get_option("EWD_FEUP_Facebook_App_ID");
	$Facebook_Secret = get_option("EWD_FEUP_Facebook_Secret");
	$Twitter_Key = get_option("EWD_FEUP_Twitter_Key");
	$Twitter_Secret = get_option("EWD_FEUP_Twitter_Secret");
	
	$Payment_Frequency = get_option("EWD_FEUP_Payment_Frequency");
	$Payment_Types = get_option("EWD_FEUP_Payment_Types");
	$Membership_Cost = get_option("EWD_FEUP_Membership_Cost");
	$Levels_Payment_Array = get_option("EWD_FEUP_Levels_Payment_Array");
	$Pricing_Currency_Code = get_option("EWD_FEUP_Pricing_Currency_Code");
	$Thank_You_URL = get_option("EWD_FEUP_Thank_You_URL");
	$Discount_Codes_Array = get_option("EWD_FEUP_Discount_Codes_Array");
	$Payment_Gateway = get_option("EWD_FEUP_Payment_Gateway");
	$PayPal_Email_Address = get_option("EWD_FEUP_PayPal_Email_Address");
	$Stripe_Live_Secret = get_option("EWD_FEUP_Stripe_Live_Secret");
	$Stripe_Live_Publishable = get_option("EWD_FEUP_Stripe_Live_Publishable");
	$Stripe_Plan_ID = get_option("EWD_FEUP_Stripe_Plan_ID");

	$WooCommerce_Integration = get_option('EWD_FEUP_WooCommerce_Integration');
	$First_Name_Field = get_option('EWD_FEUP_WooCommerce_First_Name_Field');
	$Last_Name_Field = get_option('EWD_FEUP_WooCommerce_Last_Name_Field');
	$Company_Field = get_option('EWD_FEUP_WooCommerce_Company_Field');
	$Address_Line_One_Field = get_option('EWD_FEUP_WooCommerce_Address_Line_One_Field');
	$Address_Line_Two_Field = get_option('EWD_FEUP_WooCommerce_Address_Line_Two_Field');
	$City_Field = get_option('EWD_FEUP_WooCommerce_City_Field');
	$Postcode_Field = get_option('EWD_FEUP_WooCommerce_Postcode_Field');
	$Country_Field = get_option('EWD_FEUP_WooCommerce_Country_Field');
	$State_Field = get_option('EWD_FEUP_WooCommerce_State_Field');
	$Email_Field = get_option('EWD_FEUP_WooCommerce_Email_Field');
	$Phone_Field = get_option('EWD_FEUP_WooCommerce_Phone_Field');

	$First_Install_Version = floatval(get_option("EWD_FEUP_First_Install_Version"));

	$feup_Label_Login =  get_option("EWD_FEUP_Label_Login");
	$feup_Label_Logout =  get_option("EWD_FEUP_Label_Logout");
	$feup_Label_Username =  get_option("EWD_FEUP_Label_Username");
	$feup_Label_Register =  get_option("EWD_FEUP_Label_Register");
	$feup_Label_Successful_Logout_Message =  get_option("EWD_FEUP_Label_Successful_Logout_Message");
	$feup_Label_Require_Login_Message =  get_option("EWD_FEUP_Label_Require_Login_Message");

	$feup_Label_Upgrade_Account =  get_option("EWD_FEUP_Label_Upgrade_Account");
	$feup_Label_Update_Account =  get_option("EWD_FEUP_Label_Update_Account");
	$feup_Label_Upgrade_Level_Message =  get_option("EWD_FEUP_Label_Upgrade_Level_Message");
	$feup_Label_Level =  get_option("EWD_FEUP_Label_Level");
	$feup_Label_Next =  get_option("EWD_FEUP_Label_Next");
	$feup_Label_Discount_Message =  get_option("EWD_FEUP_Label_Discount_Message");
	$feup_Label_Discount_Code =  get_option("EWD_FEUP_Label_Discount_Code");
	$feup_Label_Use_Discount_Code =  get_option("EWD_FEUP_Label_Use_Discount_Code");
	$feup_Label_Edit_Profile =  get_option("EWD_FEUP_Label_Edit_Profile");
	$feup_Label_Current_File =  get_option("EWD_FEUP_Label_Current_File");
	$feup_Label_Current_Picture =  get_option("EWD_FEUP_Label_Current_Picture");
	$feup_Label_Update_Picture =  get_option("EWD_FEUP_Label_Update_Picture");
	$feup_Label_Confirm_Email_Message =  get_option("EWD_FEUP_Label_Confirm_Email_Message");
	$feup_Label_Incorrect_Confirm_Message =  get_option("EWD_FEUP_Label_Incorrect_Confirm_Message");
	$feup_Label_Captcha_Fail =  get_option("EWD_FEUP_Label_Captcha_Fail");
	$feup_Label_Login_Successful =  get_option("EWD_FEUP_Label_Login_Successful");
	$feup_Label_Login_Failed_Confirm_Email =  get_option("EWD_FEUP_Label_Login_Failed_Confirm_Email");
	$feup_Label_Select_Valid_Profile =  get_option("EWD_FEUP_Label_Select_Valid_Profile");
	$feup_Label_Nonlogged_Message =  get_option("EWD_FEUP_Label_Nonlogged_Message");
	$feup_Label_Low_Account_Level_Message =  get_option("EWD_FEUP_Label_Low_Account_Level_Message");
	$feup_Label_High_Account_Level_Message =  get_option("EWD_FEUP_Label_High_Account_Level_Message");
	$feup_Label_Wrong_Account_Level_Message =  get_option("EWD_FEUP_Label_Wrong_Account_Level_Message");
	$feup_Label_Restrict_Access_Message =  get_option("EWD_FEUP_Label_Restrict_Access_Message");
	$feup_Label_Login_Failed_Admin_Approval =  get_option("EWD_FEUP_Label_Login_Failed_Admin_Approval");
	$feup_Label_Login_Failed_Payment_Required =  get_option("EWD_FEUP_Label_Login_Failed_Payment_Required");
	$feup_Label_Login_Failed_Incorrect_Credentials =  get_option("EWD_FEUP_Label_Login_Failed_Incorrect_Credentials");

	$feup_Label_Please =  get_option("EWD_FEUP_Label_Please");
	$feup_Label_To_Continue =  get_option("EWD_FEUP_Label_To_Continue");
	$feup_Label_Password =  get_option("EWD_FEUP_Label_Password");
	$feup_Label_Repeat_Password =  get_option("EWD_FEUP_Label_Repeat_Password");
	$feup_Label_Password_Strength =  get_option("EWD_FEUP_Label_Password_Strength");
	$feup_Label_Reset_Password =  get_option("EWD_FEUP_Label_Reset_Password");
	$feup_Label_Email =  get_option("EWD_FEUP_Label_Email");
	$feup_Label_Reset_Code =  get_option("EWD_FEUP_Label_Reset_Code");
	$feup_Label_Change_Password =  get_option("EWD_FEUP_Label_Change_Password");
	$feup_Label_Too_Short =  get_option("EWD_FEUP_Label_Too_Short");
	$feup_Label_Mismatch =  get_option("EWD_FEUP_Label_Mismatch");
	$feup_Label_Weak =  get_option("EWD_FEUP_Label_Weak");
	$feup_Label_Good =  get_option("EWD_FEUP_Label_Good");
	$feup_Label_Strong =  get_option("EWD_FEUP_Label_Strong");

	$feup_Styling_Form_Font =  get_option("EWD_FEUP_Styling_Form_Font");
	$feup_Styling_Form_Font_Size =  get_option("EWD_FEUP_Styling_Form_Font_Size");
	$feup_Styling_Form_Font_Weight =  get_option("EWD_FEUP_Styling_Form_Font_Weight");
	$feup_Styling_Form_Font_Color =  get_option("EWD_FEUP_Styling_Form_Font_Color");
	$feup_Styling_Form_Margin =  get_option("EWD_FEUP_Styling_Form_Margin");
	$feup_Styling_Form_Padding =  get_option("EWD_FEUP_Styling_Form_Padding");
	$feup_Styling_Submit_Bg_Color =  get_option("EWD_FEUP_Styling_Submit_Bg_Color");
	$feup_Styling_Submit_Font =  get_option("EWD_FEUP_Styling_Submit_Font");
	$feup_Styling_Submit_Font_Color =  get_option("EWD_FEUP_Styling_Submit_Font_Color");
	$feup_Styling_Submit_Margin =  get_option("EWD_FEUP_Styling_Submit_Margin");
	$feup_Styling_Submit_Padding =  get_option("EWD_FEUP_Styling_Submit_Padding");

	$feup_Styling_Userlistings_Font =  get_option("EWD_FEUP_Styling_Userlistings_Font");
	$feup_Styling_Userlistings_Font_Size =  get_option("EWD_FEUP_Styling_Userlistings_Font_Size");
	$feup_Styling_Userlistings_Font_Weight =  get_option("EWD_FEUP_Styling_Userlistings_Font_Weight");
	$feup_Styling_Userlistings_Font_Color =  get_option("EWD_FEUP_Styling_Userlistings_Font_Color");
	$feup_Styling_Userlistings_Margin = get_option("EWD_FEUP_Styling_Userlistings_Margin");
	$feup_Styling_Userlistings_Padding = get_option("EWD_FEUP_Styling_Userlistings_Padding");
	$feup_Styling_Userprofile_Label_Font =  get_option("EWD_FEUP_Styling_Userprofile_Label_Font");
	$feup_Styling_Userprofile_Label_Font_Size =  get_option("EWD_FEUP_Styling_Userprofile_Label_Font_Size");
	$feup_Styling_Userprofile_Label_Font_Weight =  get_option("EWD_FEUP_Styling_Userprofile_Label_Font_Weight");
	$feup_Styling_Userprofile_Label_Font_Color =  get_option("EWD_FEUP_Styling_Userprofile_Label_Font_Color");
	$feup_Styling_Userprofile_Content_Font =  get_option("EWD_FEUP_Styling_Userprofile_Content_Font");
	$feup_Styling_Userprofile_Content_Font_Size =  get_option("EWD_FEUP_Styling_Userprofile_Content_Font_Size");
	$feup_Styling_Userprofile_Content_Font_Weight =  get_option("EWD_FEUP_Styling_Userprofile_Content_Font_Weight");
	$feup_Styling_Userprofile_Content_Font_Color =  get_option("EWD_FEUP_Styling_Userprofile_Content_Font_Color");

?>

<div class="wrap feup-options-page-tabbed">
<div class="feup-options-submenu-div">
	<ul class="feup-options-submenu feup-options-page-tabbed-nav">
		<li><a id="Basic_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == '' or $Display_Tab == 'Basic') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Basic');">Basic</a></li>
		<li><a id="Premium_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Premium') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Premium');">Premium</a></li>
		<li><a id="Payment_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Payment') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Payment');">Payment</a></li>
		<li><a id="WooCommerce_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'WooCommerce') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('WooCommerce');">Commerce</a></li>
		<li><a id="Labelling_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Labelling') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Labelling');">Labelling</a></li>
		<li><a id="Styling_Menu" class="MenuTab options-subnav-tab <?php if ($Display_Tab == 'Styling') {echo 'options-subnav-tab-active';}?>" onclick="ShowOptionTab('Styling');">Styling</a></li>
	</ul>
</div>



<div class="feup-options-page-tabbed-content">
<form method="post" action="admin.php?page=EWD-FEUP-options&DisplayPage=Options&Action=EWD_FEUP_UpdateOptions">
	<?php wp_nonce_field( 'EWD_FEUP_Admin_Nonce', 'EWD_FEUP_Admin_Nonce' );  ?>
	<div id='Basic' class='feup-option-set'>
	<h2 id="basic-options" class="feup-options-tab-title">Basic Options</h2>
	<table class="form-table">
	<tr>
		<th scope="row">Login Time</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Login Time</span></legend>
			<label title='Login Time'><input type='text' name='login_time' value='<?php echo $Login_Time; ?>' /><span> Minutes</span></label><br />
			<p>For reference: 1440 minutes in a day, 10080 minutes in a week, 43200 minutes in a 30-day month, 525600 minutes in a year</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Minimum Password Length</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Minimum Password Length</span></legend>
			<label title='Minimum Password Length'><input type='text' name='minimum_password_length' value='<?php echo $Minimum_Password_Length; ?>' /></label><br />
			<p>We recommend 6 or more, but at a minimum, this should be set to 3.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Include WordPress Users</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Include WordPress Users</span></legend>
			<label title='Yes'><input type='radio' name='include_wp_users' value='Yes' <?php if($Include_WP_Users == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='include_wp_users' value='No' <?php if($Include_WP_Users == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
			<p>Should WordPress users automatically be imported into the plugin, so that they can access restricted areas and create profiles?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Sign Up Email</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Sign Up Email</span></legend>
				<select name='sign_up_email'>
					<option value='-1' <?php echo ($Sign_Up_Email == -1 ? "selected" : ""); ?>>No</option>
					<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
						<option value='<?php echo $Email_Message_Item['ID']; ?>' <?php echo ($Sign_Up_Email == $Email_Message_Item['ID'] ? "selected" : ""); ?>><?php echo $Email_Message_Item['Name']; ?></option>
					<?php } ?>
				</select>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Custom CSS</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Custom CSS</span></legend>
			<textarea name='custom_css'><?php echo $Custom_CSS ?></textarea><br />
			<p>Custom CSS that should be included on any page that uses one of the FEUP shortcodes.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Use Crypt</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Use Crypt</span></legend>
			<label title='Yes'><input type='radio' name='use_crypt' value='Yes' <?php if($Use_Crypt == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='use_crypt' value='No' <?php if($Use_Crypt == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
			<p>Should the plugin use crypt to encode user passwords? (Higher security)<br /><strong>Warning! All current user passwords will permanently stop working when switching between encoding methods!</strong></p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Username is Email</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Username is Email</span></legend>
			<label title='Yes'><input type='radio' name='username_is_email' value='Yes' <?php if($Username_Is_Email == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='username_is_email' value='No' <?php if($Username_Is_Email == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
			<p>Should your users register using their e-mail addresses instead of by creating usernames?</p>
			</fieldset>
		</td>
		</tr>
		<th scope="row">Required Field Symbol</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Required Field Symbol</span></legend>
			<label title='Login Time'><input type='text' name='required_field_symbol' value='<?php echo $Required_Field_Symbol; ?>' /></label><br />
			<p>Appears next to each required field on the registration form. Default value is an asterisk (*).</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Shortcode Builder</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Shortcode Builder</span></legend>
			<label title='Yes'><input type='radio' name='show_tinymce' value='Yes' <?php if($Show_TinyMCE == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='show_tinymce' value='No' <?php if($Show_TinyMCE  == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
			<p>Should a shortcode builder be added to the tinyMCE toolbar in the page editor?</p>
			</fieldset>
		</td>
		</tr>
		</table>
	</div>

<div id='Premium' class='feup-option-set feup-hidden'>
	<h2 id="premium-options" class="feup-options-tab-title">Premium Options</h2>
	<table class="form-table">
		<tr>
		<th scope="row">Captcha</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Captcha</span></legend>
			<label title='Yes'><input type='radio' name='use_captcha' value='Yes' <?php if($Use_Captcha == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='use_captcha' value='No' <?php if($Use_Captcha == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Should Captcha be added to the registration and forgot password forms to prevent spamming? (requires image-creation support for your PHP installation)</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Allow Level Choice</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Allow Level Choice</span></legend>
			<label title='Yes'><input type='radio' name='allow_level_choice' value='Yes' <?php if($Allow_Level_Choice == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='allow_level_choice' value='No' <?php if($Allow_Level_Choice == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Should users be able to select their user level when registering?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Track User Activity</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Track User Activity</span></legend>
			<label title='Yes'><input type='radio' name='track_events' value='Yes' <?php if($Track_Events == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='track_events' value='No' <?php if($Track_Events == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>See what pages, attachments, images, etc. each user has looked at, in what order and when, to better tailor your content to your members.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Email Confirmation</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Email Confirmation</span></legend>
			<label title='Yes'><input type='radio' name='email_confirmation' value='Yes' <?php if($Email_Confirmation == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='email_confirmation' value='No' <?php if($Email_Confirmation == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Make users confirm their e-mail address before they can log in.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Admin Approval of Users</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Admin Approval of Users</span></legend>
			<label title='Yes'><input type='radio' name='admin_approval' value='Yes' <?php if($Admin_Approval == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='admin_approval' value='No' <?php if($Admin_Approval == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Require users to be approved by an administrator in the WordPress back-end before they can log in.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Email On Admin Approval</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Email On Admin Approval</span></legend>
				<select name='email_on_admin_approval'>
					<option value='-1' <?php echo ($Email_On_Admin_Approval == -1 ? "selected" : ""); ?>>No</option>
					<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
						<option value='<?php echo $Email_Message_Item['ID']; ?>' <?php echo ($Email_On_Admin_Approval == $Email_Message_Item['ID'] ? "selected" : ""); ?>><?php echo $Email_Message_Item['Name']; ?></option>
					<?php } ?>
				</select>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Admin Email On Registration</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Admin Email On Registration</span></legend>
				<select name='admin_email_on_registration'>
					<option value='-1' <?php echo ($Admin_Email_On_Registration == -1 ? "selected" : ""); ?>>No</option>
					<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
						<option value='<?php echo $Email_Message_Item['ID']; ?>' <?php echo ($Admin_Email_On_Registration == $Email_Message_Item['ID'] ? "selected" : ""); ?>><?php echo $Email_Message_Item['Name']; ?></option>
					<?php } ?>
				</select>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Default User Level</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Default User Level</span></legend>
			<label title='Default User Level'><select name='default_user_level' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>></label>
				<option value='0'>None (0)</option>
				<?php foreach ($Levels as $Level) {
						echo "<option value='" . $Level->Level_ID . "' ";
						if ($Default_User_Level == $Level->Level_ID) {echo "selected=selected";}
						echo ">" . $Level->Level_Name . " (" . $Level->Level_Privilege . ")</option>";
				}?> 
			</select>
			<p>Which level should users be set to when they register (created on the "Levels" tab)?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Create WordPress User</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Create WordPress User</span></legend>
			<label title='Yes'><input type='radio' name='create_wordpress_users' value='Yes' <?php if($Create_WordPress_Users == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='create_wordpress_users' value='No' <?php if($Create_WordPress_Users == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Should a WordPress account also be created on registration for each user? This can be used with the login form attribute "wordpress_form" to let users log in to both the FEUP plugin and WordPress at the same time.<br />Only applies to new account and only works if "Username is Email" is set to "Yes".</p>
			</fieldset>
		</td>
		</tr>
		<tr>
			<th scope="row">Login Options</th>
			<td>
				<fieldset><legend class="screen-reader-text"><span>Login Options</span></legend>
					<label title='Twitter'><input id='ewd-feup-twitter-login-option' type='checkbox' name='login_options[]' value='Twitter' <?php if(in_array("Twitter", $Login_Options)) {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/> <span>Twitter</span></label><br />
					<label title='Facebook'><input id='ewd-feup-facebook-login-option' type='checkbox' name='login_options[]' value='Facebook' <?php if(in_array("Facebook", $Login_Options)) {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/> <span>Facebook</span></label><br />
					<p>Should users be able to include their Facebook or Twitter accounts on sign up, and then use that account to log in?</p>
				</fieldset>
			</td>
		</tr>
		<tr class='ewd-feup-facebook-login-option'>
			<th scope="row">Facebook App ID</th>
			<td>
				<fieldset><legend class="screen-reader-text"><span>Facebook App ID</span></legend>
					<input type='text' name='facebook_app_id' value='<?php echo $Facebook_App_ID; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/>
					<p>The App ID displayed when you created the Facebook API application request.<br />
				Check out <a href='https://www.youtube.com/watch?v=txCfgVmsR7g'> this tutorial</a> if you need help getting an App ID or App Secret.</p>
				</fieldset>
			</td>
		</tr>
		<tr class='ewd-feup-facebook-login-option'>
			<th scope="row">Facebook Secret</th>
			<td>
				<fieldset><legend class="screen-reader-text"><span>Facebook Secret</span></legend>
					<input type='text' name='facebook_secret' value='<?php echo $Facebook_Secret; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/>
					<p>The secret displayed when you created the Facebook API application request.</p>
				</fieldset>
			</td>
		</tr>
		<tr class='ewd-feup-twitter-login-option'>
			<th scope="row">Twitter Key</th>
			<td>
				<fieldset><legend class="screen-reader-text"><span>Twitter Key</span></legend>
					<input type='text' name='twitter_key' value='<?php echo $Twitter_Key; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/>
					<p>The key displayed when you created the Twitter API application request.<br />
				Check out <a href='https://www.youtube.com/watch?v=9ckccMDhtQI'> this tutorial</a> if you need help getting an App ID or App Secret.</p>
				</fieldset>
			</td>
		</tr>
		<tr class='ewd-feup-twitter-login-option'>
			<th scope="row">Twitter Secret</th>
			<td>
				<fieldset><legend class="screen-reader-text"><span>Twitter Secret</span></legend>
					<input type='text' name='twitter_secret' value='<?php echo $Twitter_Secret; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>/>
					<p>The secret displayed when you created the Twitter API application request.</p>
				</fieldset>
			</td>
		</tr>
		</table>
</div>

<div id='Payment' class='feup-option-set feup-hidden'>
	<h2 id="payment-options" class="feup-options-tab-title">Payment Options</h2>
	<table class="form-table">
		<tr>
		<th scope="row">Payment Frequency</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Payment Frequency</span></legend>
			<label title='None'><input type='radio' name='payment_frequency' value='None' <?php if($Payment_Frequency == "None") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>None</span></label><br />
			<label title='One Time'><input type='radio' name='payment_frequency' value='One_Time' <?php if($Payment_Frequency == "One_Time") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>One Time</span></label><br />
			<label title='Yearly'><input type='radio' name='payment_frequency' value='Yearly' <?php if($Payment_Frequency == "Yearly") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yearly</span></label><br />
			<label title='Monthly'><input type='radio' name='payment_frequency' value='Monthly' <?php if($Payment_Frequency == "Monthly") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Monthly</span></label><br />
			<p>Should payments (subscriptions) to your site be possible, and if so, how often are they charged?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Payment Type</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Payment Type</span></legend>
			<label title='Membership'><input type='radio' name='payment_types' value='Membership' <?php if($Payment_Types == "Membership") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Membership</span></label><br />
			<label title='Levels'><input type='radio' name='payment_types' value='Levels' <?php if($Payment_Types == "Levels") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Levels</span></label><br />
			<p>Are payments necessary for membership, or only for certain levels?</p>
			</fieldset>
		</td>
		</tr>

		<tr>
		<th scope="row">Membership Cost</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Membership Cost</span></legend>
			<label title='Membership Cost'><input type='text' name='membership_cost' value='<?php echo $Membership_Cost; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>If payment type is set to levels, which levels should require payment and how much should that payment be?</p>
			</fieldset>
		</td>
		</tr>

		<tr>
		<th scope="row">Level Payments</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Level Payments</span></legend>
			<table id='ewd-feup-level-payments-table'>
				<tr>
					<th></th>
					<th>Level</th>
					<th>Payment Amount</th>
					<!--<th>Cumulative?</th>-->
				</tr>
				<?php 
					$Counter = 0;
					if (!is_array($Levels_Payment_Array)) {$Levels_Payment_Array = array();}
					foreach ($Levels_Payment_Array as $Levels_Payment_Item) { 
						echo "<tr id='ewd-feup-level-payment-row-" . $Counter . "'>";
							echo "<td><a class='ewd-feup-delete-level-payment' data-levelpaymentid='" . $Counter . "'>Delete</a></td>";
							echo "<td><input type='hidden' name='Level_Payment_" . $Counter . "_Level' value='" . $Levels_Payment_Item['Level'] . "'/>";
							foreach ($Levels as $Level) {if ($Level->Level_ID == $Levels_Payment_Item['Level']) {echo $Level->Level_Name;}}
							echo "</td>";
							echo "<td><input type='hidden' name='Level_Payment_" . $Counter . "_Amount' value='" . $Levels_Payment_Item['Amount'] ."'/>" . $Levels_Payment_Item['Amount'] . "</td>";
							//echo "<td><input type='hidden' name='Level_Payment_" . $Counter . "_Cumulative' value='" . $Levels_Payment_Item['Cumulative'] . "'/>" . $Levels_Payment_Item['Cumulative'] . "</td>";
						echo "</tr>";
						$Counter++;
					} 
					//echo "<tr><td colspan='4'><a class='ewd-feup-add-level-payment' data-nextid='" . $Counter . "'>Add</a></td></tr>";
					echo "<tr><td colspan='3'><a class='ewd-feup-add-level-payment' data-nextid='" . $Counter . "'>Add</a></td></tr>";
				?>
			</table>
			<p>If payment type is set to levels, which levels should require payment and how much should that payment be?<br />
			<!--Is the payment amount cumulative? Ex. If payments are cumulative, if level 1 is $2 and level 2 is an additional $2, then the total cost for level 2 would be $4.--></p>
			</fieldset>
		</td>
		</tr>
		
		<tr>
		<th scope="row">"Thank You" Page URL</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>"Thank You" Page URL</span></legend>
			<label title='Thank You Page URL'><input type='text' name='thank_you_url' value='<?php echo $Thank_You_URL; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>What page should customers be taken to after successfully completing a payment?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Pricing Currency</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Pricing Currency</span></legend>
			<label title='Pricing Currency'></label><select name='pricing_currency_code' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>>
			<option value="AUD" <?php if($Pricing_Currency_Code == "AUD") {echo " selected=selected";} ?>><?php _e("Australian Dollar", 'EWD_UASP'); ?></option>
			<option value="BRL" <?php if($Pricing_Currency_Code == "BRL") {echo " selected=selected";} ?>><?php _e("Brazilian Real", 'EWD_UASP'); ?></option>
			<option value="CAD" <?php if($Pricing_Currency_Code == "CAD") {echo " selected=selected";} ?>><?php _e("Canadian Dollar", 'EWD_UASP'); ?></option>
			<option value="CZK" <?php if($Pricing_Currency_Code == "CZK") {echo " selected=selected";} ?>><?php _e("Czech Koruna", 'EWD_UASP'); ?></option>
			<option value="DKK" <?php if($Pricing_Currency_Code == "DKK") {echo " selected=selected";} ?>><?php _e("Danish Krone", 'EWD_UASP'); ?></option>
			<option value="EUR" <?php if($Pricing_Currency_Code == "EUR") {echo " selected=selected";} ?>><?php _e("Euro", 'EWD_UASP'); ?></option>
			<option value="HKD" <?php if($Pricing_Currency_Code == "HKD") {echo " selected=selected";} ?>><?php _e("Hong Kong Dollar", 'EWD_UASP'); ?></option>
			<option value="HUF" <?php if($Pricing_Currency_Code == "HUF") {echo " selected=selected";} ?>><?php _e("Hungarian Forint", 'EWD_UASP'); ?></option>
			<option value="ILS" <?php if($Pricing_Currency_Code == "ILS") {echo " selected=selected";} ?>><?php _e("Israeli New Sheqel", 'EWD_UASP'); ?></option>
			<option value="JPY" <?php if($Pricing_Currency_Code == "JPY") {echo " selected=selected";} ?>><?php _e("Japanese Yen", 'EWD_UASP'); ?></option>
			<option value="MYR" <?php if($Pricing_Currency_Code == "MYR") {echo " selected=selected";} ?>><?php _e("Malaysian Ringgit", 'EWD_UASP'); ?></option>
			<option value="MXN" <?php if($Pricing_Currency_Code == "MXN") {echo " selected=selected";} ?>><?php _e("Mexican Peso", 'EWD_UASP'); ?></option>
			<option value="NOK" <?php if($Pricing_Currency_Code == "NOK") {echo " selected=selected";} ?>><?php _e("Norwegian Krone", 'EWD_UASP'); ?></option>
			<option value="NZD" <?php if($Pricing_Currency_Code == "NZD") {echo " selected=selected";} ?>><?php _e("New Zealand Dollar", 'EWD_UASP'); ?></option>
			<option value="PHP" <?php if($Pricing_Currency_Code == "PHP") {echo " selected=selected";} ?>><?php _e("Philippine Peso", 'EWD_UASP'); ?></option>
			<option value="PLN" <?php if($Pricing_Currency_Code == "PLN") {echo " selected=selected";} ?>><?php _e("Polish Zloty", 'EWD_UASP'); ?></option>
			<option value="GBP" <?php if($Pricing_Currency_Code == "GBP") {echo " selected=selected";} ?>><?php _e("Pound Sterling", 'EWD_UASP'); ?></option>
			<option value="RUB" <?php if($Pricing_Currency_Code == "RUB") {echo " selected=selected";} ?>><?php _e("Russian Ruble", 'EWD_UASP'); ?></option>
			<option value="SGD" <?php if($Pricing_Currency_Code == "SGD") {echo " selected=selected";} ?>><?php _e("Singapore Dollar", 'EWD_UASP'); ?></option>
			<option value="SEK" <?php if($Pricing_Currency_Code == "SEK") {echo " selected=selected";} ?>><?php _e("Swedish Krona", 'EWD_UASP'); ?></option>
			<option value="CHF" <?php if($Pricing_Currency_Code == "CHF") {echo " selected=selected";} ?>><?php _e("Swiss Franc", 'EWD_UASP'); ?></option>
			<option value="TWD" <?php if($Pricing_Currency_Code == "TWD") {echo " selected=selected";} ?>><?php _e("Taiwan New Dollar", 'EWD_UASP'); ?></option>
			<option value="THB" <?php if($Pricing_Currency_Code == "THB") {echo " selected=selected";} ?>><?php _e("Thai Baht", 'EWD_UASP'); ?></option>
			<option value="TRY" <?php if($Pricing_Currency_Code == "TRY") {echo " selected=selected";} ?>><?php _e("Turkish Lira", 'EWD_UASP'); ?></option>
			<option value="USD" <?php if($Pricing_Currency_Code == "USD") {echo " selected=selected";} ?>><?php _e("U.S. Dollar", 'EWD_UASP'); ?></option>
			</select>
			<p>What currency are your subscriptions priced in?</p>
			</fieldset>
		</td>
		</tr>

		<tr>
		<th scope="row">Discount Codes</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Discount Codes</span></legend>
			<table id='ewd-feup-discount-codes-table'>
				<tr>
					<th></th>
					<th>Code</th>
					<th>Discount Amount</th>
					<th>Recurring Discount?</th>
					<th>Applies To?</th>
					<th>Expiry</th>
				</tr>
				<?php 
					$Counter = 0;
					if (!is_array($Discount_Codes_Array)) {$Discount_Codes_Array = array();}
					foreach ($Discount_Codes_Array as $Discount_Code_Item) { 
						echo "<tr id='ewd-feup-discount-code-row-" . $Counter . "'>";
							echo "<td><a class='ewd-feup-delete-discount-code' data-reminderid='" . $Counter . "'>Delete</a></td>";
							echo "<td><input type='hidden' name='Discount_Code_" . $Counter . "_Code' value='" . $Discount_Code_Item['Code'] . "'/>" . $Discount_Code_Item['Code'] . "</td>";
							echo "<td><input type='hidden' name='Discount_Code_" . $Counter . "_Amount' value='" . $Discount_Code_Item['Amount'] . "'/>" . $Discount_Code_Item['Amount'] . "</td>";
							echo "<td><input type='hidden' name='Discount_Code_" . $Counter . "_Recurring' value='" . $Discount_Code_Item['Recurring'] ."'/>" . $Discount_Code_Item['Recurring'] . "</td>";
							echo "<td><input type='hidden' name='Discount_Code_" . $Counter . "_Applicable' value='" . $Discount_Code_Item['Applicable'] . "'/>" . $Discount_Code_Item['Applicable'] . "</td>";
							echo "<td><input type='hidden' name='Discount_Code_" . $Counter . "_Expiry' value='" . $Discount_Code_Item['Expiry'] . "'/>" . $Discount_Code_Item['Expiry'] . "</td>";
						echo "</tr>";
						$Counter++;
					} 
					echo "<tr><td colspan='6'><a class='ewd-feup-add-discount-code' data-nextid='" . $Counter . "'>Add</a></td></tr>";
				?>
			</table>
			<p>Are you offering any discount codes on subscriptions?<br />
			A recurring discount code means the subscription price will always be reduced (for yearly or monthly payments)<br />
			Codes can be applicable only to specific membership levels (using the 'Applicable' field)</p>
			</fieldset>
		</td>
		</tr>

		<tr>
		<th scope="row">Payment Gateway</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Payment Gateway</span></legend>
			<label title='PayPal'><input type='radio' id='ewd-feup-paypal-option' name='payment_gateway' value='PayPal' <?php if($Payment_Gateway == "PayPal") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>PayPal</span></label><br />
			<label title='Stripe'><input type='radio' id='ewd-feup-stripe-option' name='payment_gateway' value='Stripe' <?php if($Payment_Gateway == "Stripe") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Stripe</span></label><br />
			<p>Which payment gateway should be used to process payments?<br/>
			To use Stripe as your payment gateway, please make sure you have PHP version 5.3 or higher and please try out a test payment as well.</p>
			</fieldset>
		</td>
		</tr>

		<tr class='ewd-feup-paypal-option ewd-feup-specific-payment-option'>
		<th scope="row">PayPal Email Address</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>PayPal Email Address</span></legend>
			<label title='PayPal Email Address'><input type='text' name='paypal_email_address' value='<?php echo $PayPal_Email_Address; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>If PayPal payments are required or optional, what e-mail address is associated with the PayPal account?</p>
			</fieldset>
		</td>
		</tr>

		<tr class='ewd-feup-stripe-option ewd-feup-specific-payment-option'>
		<th scope="row">Stripe Live Secret</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Stripe Live Secret</span></legend>
			<label title='Stripe Live Secret'><input type='text' name='stripe_live_secret' value='<?php echo $Stripe_Live_Secret; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>Paste your live secret key.</p>
			</fieldset>
		</td>
		</tr>

		<tr class='ewd-feup-stripe-option ewd-feup-specific-payment-option'>
		<th scope="row">Stripe Live Publishable</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Stripe Live Publishable</span></legend>
			<label title='Stripe Live Publishable'><input type='text' name='stripe_live_publishable' value='<?php echo $Stripe_Live_Publishable; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>Paste your live publishable key.</p>
			</fieldset>
		</td>
		</tr>

		<tr class='ewd-feup-stripe-option ewd-feup-specific-payment-option'>
		<th scope="row">Stripe Plan ID</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Stripe Plan ID</span></legend>
			<label title='Stripe Live Publishable'><input type='text' name='stripe_plan_id' value='<?php echo $Stripe_Plan_ID; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></label><br />
			<p>The ID of the Stripe payment plan you have set up. This only needs to be included if you are using recurring payments.<br />
			Please note that at this time, Stripe recurring payments cannot be used with multiple level payments or with discount codes.</p>
			</fieldset>
		</td>
		</tr>

	</table>
</div>

<div id='WooCommerce' class='feup-option-set feup-hidden'>
	<h2 id="woocommerce-options" class="feup-options-tab-title">WooCommerce Integration Options</h2>
		<table class="form-table">
		<tr>
		<th scope="row">WooCommerce Integration</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>WooCommerce Integration</span></legend>
			<label title='Yes'><input type='radio' name='woocommerce_integration' value='Yes' <?php if($WooCommerce_Integration == "Yes") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>Yes</span></label><br />
			<label title='No'><input type='radio' name='woocommerce_integration' value='No' <?php if($WooCommerce_Integration == "No") {echo "checked='checked'";} ?> <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /> <span>No</span></label><br />
			<p>Should checkout fields in WooCommerce automatically be filled in for logged in users?</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">First Name Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>First Name Field</span></legend>
			<label title='First Name Field'><input type='text' name='first_name_field' value='<?php echo $First_Name_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?>  /></label><br />
			<p>The name of the FEUP field that should be filled in as "First Name" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Last Name Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Last Name Field</span></legend>
			<label title='Last Name Field'><input type='text' name='last_name_field' value='<?php echo $Last_Name_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Last Name" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Company Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Company Field</span></legend>
			<label title='Company Field'><input type='text' name='company_field' value='<?php echo $Company_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Company" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Address Line One Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Address Line One Field</span></legend>
			<label title='Address Line One Field'><input type='text' name='address_line_one_field' value='<?php echo $Address_Line_One_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Address Line One" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Address Line Two Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Address Line Two Field</span></legend>
			<label title='Address Line Two Field'><input type='text' name='address_line_two_field' value='<?php echo $Address_Line_Two_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Address Line Two" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">City Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>City Field</span></legend>
			<label title='City Field'><input type='text' name='city_field' value='<?php echo $City_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "City" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Postcode Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Postcode Field</span></legend>
			<label title='Postcode Field'><input type='text' name='postcode_field' value='<?php echo $Postcode_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Postcode" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Country Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Country Field</span></legend>
			<label title='Country Field'><input type='text' name='country_field' value='<?php echo $Country_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Country" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">State Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>State Field</span></legend>
			<label title='State Field'><input type='text' name='state_field' value='<?php echo $State_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "State" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Email Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Email Field</span></legend>
			<label title='Email Field'><input type='text' name='email_field' value='<?php echo $Email_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Email" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		<tr>
		<th scope="row">Phone Field</th>
		<td>
			<fieldset><legend class="screen-reader-text"><span>Phone Field</span></legend>
			<label title='Phone Field'><input type='text' name='phone_field' value='<?php echo $Phone_Field; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></label><br />
			<p>The name of the FEUP field that should be filled in as "Phone" for billing and shipping in WooCommerce.</p>
			</fieldset>
		</td>
		</tr>
		</table>
		</div>
		<!-- Labelling -->
		<div id='Labelling' class='feup-option-set feup-hidden'>
			<h2 id="labelling-options" class="feup-options-tab-title">Labelling Options</h2>
			<div class="feup-label-description"> Apply custom labelling to the front-end users plugin </div>
			<div id='labelling-view-options' class="feup-options-div feup-options-flex">

				<div class='feup-subsection'>
				<div class='feup-subsection-header'>User Profile</div>
					<div class='feup-subsection-content' id='feup-subsection-inline'>
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Please</div>
							<div class='feup-option-input'><input type='text' name='feup_label_please' value='<?php echo $feup_Label_Please; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Login</div>
							<div class='feup-option-input'><input type='text' name='feup_label_login' value='<?php echo $feup_Label_Login; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>To Continue</div>
							<div class='feup-option-input'><input type='text' name='feup_label_to_continue' value='<?php echo $feup_Label_To_Continue; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Logout</div>
							<div class='feup-option-input'><input type='text' name='feup_label_logout' value='<?php echo $feup_Label_Logout; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Username</div>
							<div class='feup-option-input'><input type='text' name='feup_label_username' value='<?php echo $feup_Label_Username; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Register</div>
							<div class='feup-option-input'><input type='text' name='feup_label_register' value='<?php echo $feup_Label_Register; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Level</div>
							<div class='feup-option-input'><input type='text' name='feup_label_level' value='<?php echo $feup_Label_Level; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Next</div>
							<div class='feup-option-input'><input type='text' name='feup_label_next' value='<?php echo $feup_Label_Next; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Edit Profile</div>
							<div class='feup-option-input'><input type='text' name='feup_label_edit_profile' value='<?php echo $feup_Label_Edit_Profile; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Current file:</div>
							<div class='feup-option-input'><input type='text' name='feup_label_current_file' value='<?php echo $feup_Label_Current_File; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Current Picture - </div>
							<div class='feup-option-input'><input type='text' name='feup_label_current_picture' value='<?php echo $feup_Label_Current_Picture; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Update Picture - </div>
							<div class='feup-option-input'><input type='text' name='feup_label_update_picture' value='<?php echo $feup_Label_Update_Picture; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Discount Code</div>
							<div class='feup-option-input'><input type='text' name='feup_label_discount_code' value='<?php echo $feup_Label_Discount_Code; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
		 				<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Use Discount Code</div>
							<div class='feup-option-input'><input type='text' name='feup_label_use_discount_code' value='<?php echo $feup_Label_Use_Discount_Code; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
							<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Have a discount code? Enter it below.</div>
							<div class='feup-option-input'><input type='text' name='feup_label_discount_message' value='<?php echo $feup_Label_Discount_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
					</div> 
				</div> 
				<div class='feup-subsection'>
				<div class='feup-subsection-header'>Update Account</div>
					<div class='feup-subsection-content' id='feup-subsection-inline'>
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Password</div>
							<div class='feup-option-input'><input type='text' name='feup_label_password' value='<?php echo $feup_Label_Password; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Repeat Password</div>
							<div class='feup-option-input'><input type='text' name='feup_label_repeat_password' value='<?php echo $feup_Label_Repeat_Password; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Password Strength</div>
							<div class='feup-option-input'><input type='text' name='feup_label_password_strength' value='<?php echo $feup_Label_Password_Strength; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Reset Password</div>
							<div class='feup-option-input'><input type='text' name='feup_label_reset_password' value='<?php echo $feup_Label_Reset_Password; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Upgrade Account</div>
							<div class='feup-option-input'><input type='text' name='feup_label_upgrade_account' value='<?php echo $feup_Label_Upgrade_Account; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
 						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Update Account</div>
							<div class='feup-option-input'><input type='text' name='feup_label_update_account' value='<?php echo $feup_Label_Update_Account; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Email</div>
							<div class='feup-option-input'><input type='text' name='feup_label_email' value='<?php echo $feup_Label_Email; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Reset code</div>
							<div class='feup-option-input'><input type='text' name='feup_label_reset_code' value='<?php echo $feup_Label_Reset_Code; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Change Password</div>
							<div class='feup-option-input'><input type='text' name='feup_label_change_password' value='<?php echo $feup_Label_Change_Password; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Too Short</div>
							<div class='feup-option-input'><input type='text' name='feup_label_too_short' value='<?php echo $feup_Label_Too_Short; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Mismatch</div>
							<div class='feup-option-input'><input type='text' name='feup_label_mismatch' value='<?php echo $feup_Label_Mismatch; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Weak</div>
							<div class='feup-option-input'><input type='text' name='feup_label_weak' value='<?php echo $feup_Label_Weak; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Good</div>
							<div class='feup-option-input'><input type='text' name='feup_label_good' value='<?php echo $feup_Label_Good; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-labelling-option'>
							<div class='feup-option-label'>Strong</div>
							<div class='feup-option-input'><input type='text' name='feup_label_strong' value='<?php echo $feup_Label_Strong; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
					</div>
				</div>
				<div class='feup-subsection'>
				<div class='feup-subsection-header'>User Messages</div>
					<div class='feup-subsection-content' id='feup-subsection-inline'>
						<div class='feup-subsection-half'>
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>You have been successfully logged out.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_successful_logout_message' value='<?php echo $feup_Label_Successful_Logout_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Please login to access this content.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_restrict_access_message' value='<?php echo $feup_Label_Restrict_Access_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>You must be logged in to access this page.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_restricted_message' value='<?php echo $feup_Label_Require_Login_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Select the level you'd like to upgrade to using the form below:</div>
								<div class='feup-option-input'><input type='text' name='feup_label_upgrade_level_message' value='<?php echo $feup_Label_Upgrade_Level_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Thanks for confirming your e-mail address!</div>
								<div class='feup-option-input'><input type='text' name='feup_label_confirm_email_message' value='<?php echo $feup_Label_Confirm_Email_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Please select a valid user profile</div>
								<div class='feup-option-input'><input type='text' name='feup_label_select_valid_profile' value='<?php echo $feup_Label_Select_Valid_Profile; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Login successful</div>
								<div class='feup-option-input'><input type='text' name='feup_label_login_successful' value='<?php echo $feup_Label_Login_Successful; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Login failed - you need to confirm your e-mail before you can log in</div>
								<div class='feup-option-input'><input type='text' name='feup_label_login_failed_confirm_email' value='<?php echo $feup_Label_Login_Failed_Confirm_Email; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Login failed - an administrator needs to approve your registration before you can log in</div>
								<div class='feup-option-input'><input type='text' name='feup_label_login_failed_admin_approval' value='<?php echo $feup_Label_Login_Failed_Admin_Approval; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
						</div> 
						<div class='feup-subsection-half'>
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>This content is only for non-logged in users</div>
								<div class='feup-option-input'><input type='text' name='feup_label_nonlogged_message' value='<?php echo $feup_Label_Nonlogged_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Sorry, your account level is too low to access this content.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_low_account_level_message' value='<?php echo $feup_Label_Low_Account_Level_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Sorry, your account level is too high to access this content.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_high_account_level_message' value='<?php echo $feup_Label_High_Account_Level_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Sorry, your account isn't the correct level to access this content.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_wrong_account_level_message' value='<?php echo $feup_Label_Wrong_Account_Level_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>The confirmation number provided was incorrect. Please contact the site administrator for assistance.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_incorrect_confirm_message' value='<?php echo $feup_Label_Incorrect_Confirm_Message; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>The Captcha text did not match the image.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_captcha_fail' value='<?php echo $feup_Label_Captcha_Fail; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Payment required. Please use the form below to pay your membership or subscription fee.</div>
								<div class='feup-option-input'><input type='text' name='feup_label_login_failed_payment_required' value='<?php echo $feup_Label_Login_Failed_Payment_Required; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
							<div class='feup-option feup-labelling-option'>
								<div class='feup-option-label'>Login failed - incorrect username or password</div>
								<div class='feup-option-input'><input type='text' name='feup_label_login_failed_incorrect_credentials' value='<?php echo $feup_Label_Login_Failed_Incorrect_Credentials; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
							</div> 
						</div> 
					</div> 
				</div> 
			</div>
		</div>

<!-- Styling -->
		<div id='Styling' class='feup-option-set feup-hidden'>
			<h2 id="styling-options" class="feup-options-tab-title">Styling Options</h2>
			<div class="feup-label-description"> Apply custom styling to the front-end users plugin </div>
			<div id='styling-view-options' class="feup-options-div feup-options-flex">

				<div class='feup-subsection'>
					<div class='feup-subsection-header'>Form Fields</div>
					<div class='feup-subsection-content'>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Family</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_form_font' value='<?php echo $feup_Styling_Form_Font; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Size</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_form_font_size' value='<?php echo $feup_Styling_Form_Font_Size; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Weight</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_form_font_weight' value='<?php echo $feup_Styling_Form_Font_Weight; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_form_font_color' value='<?php echo $feup_Styling_Form_Font_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Row Margin</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_form_margin' value='<?php echo $feup_Styling_Form_Margin; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>			
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Row Padding</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_form_padding' value='<?php echo $feup_Styling_Form_Padding; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
					</div>
				</div>
				<div class='feup-subsection'>
					<div class='feup-subsection-header'>Submit Button</div>
					<div class='feup-subsection-content'>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Background Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_submit_bg_color' value='<?php echo $feup_Styling_Submit_Bg_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Family</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_submit_font' value='<?php echo $feup_Styling_Submit_Font; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Font Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_submit_font_color' value='<?php echo $feup_Styling_Submit_Font_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Button Margin</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_submit_margin' value='<?php echo $feup_Styling_Submit_Margin; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Button Padding</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_submit_padding' value='<?php echo $feup_Styling_Submit_Padding; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
					</div>
				</div>
				<div class='feup-subsection'>
					<div class='feup-subsection-header'>User Listings</div>
					<div class='feup-subsection-content'>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Font Family</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userlistings_font' value='<?php echo $feup_Styling_Userlistings_Font; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Font Size</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userlistings_font_size' value='<?php echo $feup_Styling_Userlistings_Font_Size; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Font Weight</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userlistings_font_weight' value='<?php echo $feup_Styling_Userlistings_Font_Weight; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Font Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_userlistings_font_color' value='<?php echo $feup_Styling_Userlistings_Font_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Row Margin</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userlistings_margin' value='<?php echo $feup_Styling_Userlistings_Margin; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>			
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Listing Row Padding</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userlistings_padding' value='<?php echo $feup_Styling_Userlistings_Padding; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div> 
					</div>
				</div>
				<div class='feup-subsection'>
					<div class='feup-subsection-header'>User Profile Page</div>
					<div class='feup-subsection-content' id='feup-subsection-inline'>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Label Font Family</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_label_font' value='<?php echo $feup_Styling_Userprofile_Label_Font; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Label Font Size</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_label_font_size' value='<?php echo $feup_Styling_Userprofile_Label_Font_Size; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Label Font Weight</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_label_font_weight' value='<?php echo $feup_Styling_Userprofile_Label_Font_Weight; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Label Font Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_userprofile_label_font_color' value='<?php echo $feup_Styling_Userprofile_Label_Font_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Content Font</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_content_font' value='<?php echo $feup_Styling_Userprofile_Content_Font; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Content Font Size</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_content_font_size' Content='<?php echo $feup_Styling_Userprofile_Content_Font_Size; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Content Font Weight</div>
							<div class='feup-option-input'><input type='text' name='feup_styling_userprofile_content_font_weight' value='<?php echo $feup_Styling_Userprofile_Content_Font_Weight; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
						<div class='feup-option feup-styling-option'>
							<div class='feup-option-label'>Content Font Color</div>
							<div class='feup-option-input'><input type='text' class='ewd-feup-spectrum' name='feup_styling_userprofile_content_font_color' value='<?php echo $feup_Styling_Userprofile_Content_Font_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes" and $First_Install_Version >= 2.7) {echo "disabled";} ?> /></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<p class="submit"><input type="submit" name="Options_Submit" id="submit" class="button button-primary" value="Save Changes"  /></p></form>

		</div>
		</div>
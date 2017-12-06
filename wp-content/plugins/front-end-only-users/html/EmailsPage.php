<?php 
	$Admin_Email = get_option("EWD_FEUP_Admin_Email");
	$Email_Field = get_option("EWD_FEUP_Email_Field");
	$Password_Reset_Email = get_option("EWD_FEUP_Password_Reset_Email");

	$Username_Is_Email = get_option("EWD_FEUP_Username_Is_Email");

	$Email_Messages_Array = get_option("EWD_FEUP_Email_Messages_Array");
	if (!is_array($Email_Messages_Array)) {$Email_Messages_Array = array();}

	$Email_Reminder_Background_Color = get_option("EWD_FEUP_Email_Reminder_Background_Color");
	$Email_Reminder_Inner_Color = get_option("EWD_FEUP_Email_Reminder_Inner_Color");
	$Email_Reminder_Text_Color = get_option("EWD_FEUP_Email_Reminder_Text_Color");
	$Email_Reminder_Button_Background_Color = get_option("EWD_FEUP_Email_Reminder_Button_Background_Color");
	$Email_Reminder_Button_Text_Color = get_option("EWD_FEUP_Email_Reminder_Button_Text_Color");
	$Email_Reminder_Button_Background_Hover_Color = get_option("EWD_FEUP_Email_Reminder_Button_Background_Hover_Color");
	$Email_Reminder_Button_Text_Hover_Color = get_option("EWD_FEUP_Email_Reminder_Button_Text_Hover_Color");

	$Mailchimp_Integration = get_option("EWD_FEUP_Mailchimp_Integration");
	$Mailchimp_API_Key = get_option("EWD_FEUP_Mailchimp_API_Key");
	$Mailchimp_List_ID = get_option("EWD_FEUP_Mailchimp_List_ID");
	$Mailchimp_Sync_Fields = get_option("EWD_FEUP_Mailchimp_Sync_Fields");
	if (!is_array($Mailchimp_Sync_Fields)) {$Mailchimp_Sync_Fields = array();}

	$Levels = $wpdb->get_results("SELECT * FROM $ewd_feup_levels_table_name ORDER BY Level_Privilege ASC");
	//$Fields = $wpdb->get_results("SELECT Field_Name, Field_ID FROM $ewd_feup_fields_table_name");
?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br /></div><h2>Email Settings</h2>

<p>We've switched to using the default WordPress SMTP mail function. To send SMTP email, use a plugin such as <a href='https://wordpress.org/plugins/wp-mail-smtp/'>WP Mail SMTP</a> to input your settings</p>


<form method="post" action="admin.php?page=EWD-FEUP-options&DisplayPage=Emails&Action=EWD_FEUP_UpdateEmailSettings">
<?php wp_nonce_field( 'EWD_FEUP_Admin_Nonce', 'EWD_FEUP_Admin_Nonce' );  ?>
<table class="form-table">
<?php if ($Username_Is_Email == "No") { ?>
<tr>
<th scope="row">Email Field Name</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Email Field Name</span></legend>
	<label title='Email Field Name'>
		<select name='email_field'> 
			<?php foreach ($Fields as $Field) { ?>
				<option value='<?php echo $Field->Field_Name; ?>' <?php echo ($Field->Field_Name == $Email_Field ? 'selected' : ''); ?>><?php echo $Field->Field_Name; ?></option>
			<?php } ?>
		</select>
	</label><br />
	<p>The name of the field that should be used to send the e-mail to for your registration form, if "Username is Email" on the "Options" tab isn't set to "Yes". Note: this field can be left blank is "Username is Email" is set to "Yes".</p>
	</fieldset>
</td>
</tr>
<?php } ?>
<tr>
<th scope="row">Admin Email</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Admin Email</span></legend>
	<label title='Admin Email'><input type='text' name='admin_email' value='<?php echo $Admin_Email; ?>' /> </label><br />
	<p>If "Admin Email on Registration" is set to "Yes", what email address should the notification email be sent to?</p>
	</fieldset>
</td>
</tr>
<tr>
<th scope="row">Password Reset Email</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>Password Reset Email</span></legend>
		<select name='password_reset_email'>
			<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
				<option value='<?php echo $Email_Message_Item['ID']; ?>' <?php echo ($Password_Reset_Email == $Email_Message_Item['ID'] ? "selected" : ""); ?>><?php echo $Email_Message_Item['Name']; ?></option>
			<?php } ?>
		</select>
	</fieldset>
</td>
</tr>
<tr>
	<th scope="row" colspan="2">E-mail Messages</th>
</tr>
<tr>
	<td colspan="2">
		<fieldset><legend class="screen-reader-text"><span>E-mail Messages</span></legend>
		<table id='ewd-feup-email-messages-table'>
			<tr>
				<th></th>
				<th>Email Name</th>
				<th>Message Subject</th>
				<th>Message</th>
			</tr>
			<?php
				$Counter = 0;
				$Max_ID = 0;
				foreach ($Email_Messages_Array as $Email_Message_Item) {
					echo "<tr id='ewd-feup-email-message-" . $Counter . "'>";
						echo "<td><input type='hidden' name='Email_Message_" . $Counter . "_ID' value='" . $Email_Message_Item['ID'] . "' /><a class='ewd-feup-delete-message' data-messagecounter='" . $Counter . "'>Delete</a></td>";
						echo "<td><input class='ewd-feup-array-text-input' type='text' name='Email_Message_" . $Counter . "_Name' value='" . $Email_Message_Item['Name']. "'/></td>";
						echo "<td><input class='ewd-feup-array-text-input' type='text' name='Email_Message_" . $Counter . "_Subject' value='" . $Email_Message_Item['Subject']. "'/></td>";
						echo "<td><textarea class='ewd-feup-array-textarea' name='Email_Message_" . $Counter . "_Body' rows='5'>" . stripslashes($Email_Message_Item['Message']) . "</textarea></td>";
					echo "</tr>";
					$Counter++;
					$Max_ID = max($Max_ID, $Email_Message_Item['ID']);
				}
				$Max_ID++;
				echo "<tr><td colspan='4'><a class='ewd-feup-add-email' data-nextcounter='" . $Counter . "' data-maxid='" . $Max_ID . "'>Add</a></td></tr>";
			?>
		</table>
		<ul>
			<li>Use the table above to build emails for your users.</li>
			<li>You can use [section]...[/section] and [footer]...[/footer] to split up the content of your email. You can also include a link button, like so: [button link='LINK_URL_GOES_HERE']BUTTON_TEXT[/button]</li>
			<li>You can also put any of the field values for the fields you've created in the "Fields" tab by putting in [field-slug] (the field's slug surrounded by square brackets).</li>
			<li>Use the area at the bottom of the page to send yourself a sample email.</li>
		</ul>
		</fieldset>
	</td>
</tr>

<tr>
	<th scope="row">Send Sample E-mail</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span>Send Sample E-mail</span></legend>
			<div class="ewd-feup-send-sample-email-labels">Select E-mail:</div>
			<select class='ewd-feup-test-email-selector'>
				<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
					<option value="<?php echo $Email_Message_Item['ID']; ?>"><?php echo $Email_Message_Item['Name']; ?></option>
				<?php } ?>
			</select><br/>
			<div class="ewd-feup-send-sample-email-labels">E-mail Address:</div>
			<input type='text' class='ewd-feup-test-email-address' />
			<p><button type='button' class='ewd-feup-send-test-email'>Send Sample E-mail</button></p>
			<p>Make sure that you click the "Save Changes" button below before sending the test message, to receive the most recent version of your email.</p>
		</fieldset>
	</td>
</tr>

<tr><th colspan=2><h3>Premium Email Options</h3></th></tr>
<tr>
	<th scope="row">Send E-mail to Users</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span>Send E-mail to Users</span></legend>
			<div class="ewd-feup-send-sample-email-labels">Select E-mail:</div>
			<select class='ewd-feup-email-blast-selector'>
				<?php foreach ($Email_Messages_Array as $Email_Message_Item) { ?>
					<option value="<?php echo $Email_Message_Item['ID']; ?>"><?php echo $Email_Message_Item['Name']; ?></option>
				<?php } ?>
			</select><br/>
			<div class="ewd-feup-send-sample-email-labels">Select User Level:</div>
			<select class='ewd-feup-blast-level-selector'>
				<option value="0">All Levels</option>
				<?php  foreach ($Levels as $Level) { ?>
					<option value='<?php echo $Level->Level_ID; ?>' ><?php echo $Level->Level_Name; ?></option>
				<?php } ?>
			</select><br/>
			<p><button type='button' class='ewd-feup-send-email-blast' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?>>Send E-mail Blast</button></p>
			<p>Make sure that you click the "Save Changes" button below before sending the test message, so users receive the most recent version of your email.</p>
		</fieldset>
	</td>
</tr>

<tr>
	<th scope="row">Email Styling</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span>Email Styling</span></legend>
			<table id='ewd-feup-email-reminder-styling-table'>
				<!--<tr>
					<th>Email Background Color</th>
					<th>Button Background Color</th>
					<th>Button Background Hover Color</th>
					<th>Button Text Color</th>
					<th>Button Text Hover Color</th>
				</tr>-->
				<tr>
					<td>Email Background Color<br/>
			      <div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_background_color' value='<?php echo $Email_Reminder_Background_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
					<td>Inner Background Color<br />
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_inner_color' value='<?php echo $Email_Reminder_Inner_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
					<td>Email Text Color<br />
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_text_color' value='<?php echo $Email_Reminder_Text_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
				</tr>
				<tr>
					<td>Button Background Color<br/>
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_button_background_color' value='<?php echo $Email_Reminder_Button_Background_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
					<td>Button Back Hover Color<br/>
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_button_background_hover_color' value='<?php echo $Email_Reminder_Button_Background_Hover_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
					<td>Button Text Color<br/>
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_button_text_color' value='<?php echo $Email_Reminder_Button_Text_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
					<td>Button Text Hover Color<br/>
						<div class='feup-option-input'><input type='text' class='feup-spectrum' name='email_reminder_button_text_hover_color' value='<?php echo $Email_Reminder_Button_Text_Hover_Color; ?>' <?php if ($EWD_FEUP_Full_Version != "Yes") {echo "disabled";} ?> /></div>
					</td>
				</tr>
			</table>
		</fieldset>
	</td>
</tr>

<tr><th colspan=2><h3>MailChimp Integration Options</h3></th></tr>
<tr>
	<th scope="row">Enable MailChimp Integration</th>
	<td>
		<fieldset><legend class="screen-reader-text"><span>Enable MailChimp Integration</span></legend>
		<label title='Yes'><input type='radio' name='mailchimp_integration' value='Yes' <?php if($Mailchimp_Integration == "Yes") {echo "checked='checked'";} ?> /> <span>Yes</span></label><br />
		<label title='No'><input type='radio' name='mailchimp_integration' value='No' <?php if($Mailchimp_Integration == "No") {echo "checked='checked'";} ?> /> <span>No</span></label><br />
		<p>Should users automatically be added to your MailChimp email list?</p>
		</fieldset>
	</td>
</tr>
<tr>
<th scope="row">MailChimp API Key</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>MailChimp API Key</span></legend>
	<label title='Mailchimp API Key'><input type='text' name='mailchimp_api_key' value='<?php echo $Mailchimp_API_Key; ?>' /> </label><br />
	<p>Create an API key for your Mailchimp account, and enter that key in the field above.</p>
	</fieldset>
</td>
</tr>
<tr>
<th scope="row">MailChimp List ID</th>
<td>
	<fieldset><legend class="screen-reader-text"><span>MailChimp List ID</span></legend>
	<label title='Mailchimp List ID'><input type='text' name='mailchimp_list_id' value='<?php echo $Mailchimp_List_ID; ?>' /> </label><br />
	<p>What is the ID of the MailChimp list that you'd like to add your users to?</p>
	</fieldset>
</td>
</tr>
<tr>
	<th scope="row" colspan="2">MailChimp Import Fields</th>
</tr>
<tr>
	<td colspan="2">
		<fieldset><legend class="screen-reader-text"><span>MailChimp Import Fields</span></legend>
		<table id='ewd-feup-mc-fields-table'>
			<tr>
				<th></th>
				<th>Field Name</th>
				<th>MailChimp Merge Field Tag</th>
			</tr>
			<?php
				$Counter = 0;
				$Max_ID = 0;
				foreach ($Mailchimp_Sync_Fields as $Mailchimp_Sync_Field) {
					echo "<tr id='ewd-feup-mc-field-" . $Counter . "'>";
						echo "<td><a class='ewd-feup-delete-mc-field' data-mcfieldcounter='" . $Counter . "'>Delete</a></td>";
						echo "<td><select class='ewd-feup-array-select' name='Field_ID_" . $Counter . "'>";
						foreach ($Fields as $Field) {echo "<option value='" . $Field->Field_ID . "' " . ($Mailchimp_Sync_Field['Field_ID'] == $Field->Field_ID ? "selected" : "") . ">" . $Field->Field_Name . "</option>";}
						echo "</select></td>";
						echo "<td><input class='ewd-feup-array-text-input' type='text' name='Mailchimp_Field_ID_" . $Counter . "' value='" . $Mailchimp_Sync_Field['Mailchimp_Field_ID']. "'/></td>";
					echo "</tr>";
					$Counter++;
				}
				echo "<tr><td colspan='3'><a class='ewd-feup-add-mc-field' data-nextcounter='" . $Counter . "'>Add</a></td></tr>";
			?>
		</table>
		<ul>
			<li>Use the table above to select fields to import into MailChimp.</li>
		</ul>
		</fieldset>
	</td>
</tr>
</table>
<p class="submit"><input type="submit" name="Options_Submit" id="submit" class="button button-primary" value="Save Changes"  /></p></form>

</div>
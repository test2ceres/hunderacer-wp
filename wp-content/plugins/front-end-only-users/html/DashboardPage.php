<?php
	$Admin_Approval = get_option("EWD_FEUP_Admin_Approval");

	//start review box
	if(get_option('EWD_FEUP_Hide_Dash_Review_Ask')){
		$hideReview = get_option('EWD_FEUP_Hide_Dash_Review_Ask');
	}
	else {
		add_option('EWD_FEUP_Hide_Dash_Review_Ask', 'No');
	}

	$hideReviewBox = isset($_POST["hide_feup_review_box_hidden"])   ?  $_POST["hide_feup_review_box_hidden"] : '';
	if($hideReviewBox == 'Yes'){
		update_option('EWD_FEUP_Hide_Dash_Review_Ask', 'Yes');
		header('Location: admin.php?page=EWD-FEUP-options');
	}
	//end review box
?>

<div id="fade" class="ewd-feup-dark_overlay"></div>
<div id="ewd-dashboard-top" class="metabox-holder">


<!-- Upgrade to pro link box -->
<?php if ($EWD_FEUP_Full_Version != "Yes" or get_option("EWD_FEUP_Trial_Happening") == "Yes") { ?>
<div id="ewd-feup-dashboard-top-upgrade">
	<div id="ewd-feup-dashboard-top-upgrade-left">
		<div id="ewd-dashboard-pro" class="postbox ewd-feup-postbox-collapsible" >
			<div class="handlediv" title="Click to toggle"></div><h3 class='hndle ewd-feup-dashboard-h3'><span><?php _e("UPGRADE TO FULL VERSION", 'front-end-only-users') ?></span></h3>
			<div class="inside">
				<h3><?php _e("What you get by upgrading:", 'front-end-only-users') ?></h3>
				<div class="clear"></div>
				<ul>
					<li><span>User Levels: Ability to create different user levels and to specify a default user level for users to be set to when they register (created on the “Levels” tab). Different user level groups can have access to different user content, allowing for easy and effective user management.</span></li>
					<li><span>PayPal integration: Ability to charge users a one-time, annual, or monthly membership fee through PayPal.</span></li>
					<li><span>Admin approval of users and email confirmation so that you know your user's email addresses exist.</span></li>
					<li><span>Statistics: This feature allows you to gather information about frontend users and how they are using your site, as well as to see what pages each user has visited.</span></li>
					<li><span>Access to e-mail support.</span></li>
				</ul>
				<div class="clear"></div>
				<a class="purchaseButton" href="http://www.etoilewebdesign.com/plugins/front-end-only-users/" target="_blank">
					Click here to purchase the full version
				</a>
				<div class="clear"></div>
				<div class="full-version-form-div">
					<form action="admin.php?page=EWD-FEUP-options" method="post">
						<div class="form-field form-required">
							<!-- <label for="Catalogue_Name"><?php _e("Product Key", 'front-end-only-users') ?></label> -->
							<input name="Key" type="text" value="" size="40" placeholder="<?php _e('Enter product key or free trial code here', 'front-end-only-users'); ?>" />
						</div>
						<input type="submit" name="EWD_FEUP_Upgrade_To_Full" value="<?php _e('UPGRADE', 'front-end-only-users'); ?>">
					</form>
				</div>
			</div>
		</div>
	</div> <!-- ewd-feup-dashboard-top-upgrade-left -->
	<?php if (get_option("EWD_FEUP_Trial_Happening") != "No") { ?>
		<div id="ewd-feup-dashboard-top-upgrade-right">
			<div id="ewd-dashboard-pro" class="postbox ewd-feup-postbox-collapsible" >
				<div class="handlediv" title="Click to expand"></div>
				<h3 class="hndle ewd-feup-dashboard-h3">&nbsp;</h3>
				<div class="inside">
					<div class="topPart">
						<?php
						if(!get_option("EWD_FEUP_Trial_Happening")){
							_e("Want to try out the premium features first?", 'front-end-only-users');
						}
						else{
							_e("Your free trial is currently active", 'front-end-only-users');
						}
						?>
					</div>
					<div class="clear"></div>
					<div class="bottomPart">
						<?php if(!get_option("EWD_FEUP_Trial_Happening")){ ?>
							Use code<br /><span class="freeTrialText">&nbsp;EWD Trial&nbsp;</span><br />for a free 7-day trial!
						<?php }
						else{ ?>
							Your trial expires at <span class="freeTrialText"><?php echo date("Y-m-d H:i:s", get_option("EWD_FEUP_Trial_Expiry_Time")); ?> GMT</span>. <a href="http://www.etoilewebdesign.com/plugins/front-end-only-users/" class="freeTrialPurchaseLink" target="_blank">Upgrade here</a> before then to retain any premium changes made!
						<?php } ?>
					</div> <!-- bottomPart -->
				</div> <!-- inside -->
			</div> <!-- postbox -->
		</div> <!-- ewd-feup-dashboard-top-upgrade-right -->
	<?php } ?>
</div> <!-- ewd-feup-dashboard-top-upgrade -->
<?php } ?>


<?php /* echo get_option('plugin_error');*/ ?>
<?php if (get_option("EWD_FEUP_Update_Flag") == "Yes" or get_option("EWD_FEUP_Install_Flag") == "Yes") {?>
		<div id="side-sortables" class="metabox-holder ">
			<div id="feup-upgrade" class="postbox " >
				<div class="handlediv" title="Click to toggle"></div>
				<h3 class='hndle'><span><?php _e("Thank You!", 'front-end-only-users') ?></span></h3>
				<div class="inside">
					<?php /* if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'front-end-only-users'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Subscribe to our YouTube channel ", 'front-end-only-users'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'front-end-only-users');?> </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.4.21!", 'front-end-only-users'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Subscribe to our YouTube channel ", 'front-end-only-users'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'front-end-only-users');?> </li></ul><?php } */ ?>

					<?php /* if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing Front-End Only Users.", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?> </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.5.4!", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?> </li></ul><?php } */ ?>

					<?php  if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing Front-End Only Users.", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?>  </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 3.0.12!", 'front-end-only-users'); ?><br> <a href='https://wordpress.org/support/view/plugin-reviews/front-end-only-users?filter=5'><?php _e("Please rate our plugin", 'front-end-only-users'); ?></a> <?php _e("if you find Front-End Only Users useful!", 'front-end-only-users');?> </li></ul><?php }  ?>

					<?php /* if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?>  </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 3.0.9!", 'front-end-only-users'); ?><br> <a href='http://wordpress.org/plugins/order-tracking/'><?php _e("Try out order tracking plugin ", 'front-end-only-users'); ?></a> <?php _e("if you ship orders and find the Ultimate Product Catalogue Plugin useful!", 'front-end-only-users');?> </li></ul><?php } */ ?>
					<?php /* if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?>  </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.3.9!", 'front-end-only-users'); ?><br> <a href='http://wordpress.org/support/topic/error-hunt'><?php _e("Please let us know about any small display/functionality errors. ", 'front-end-only-users'); ?></a> <?php _e("We've noticed a couple, and would like to eliminate as many as possible.", 'front-end-only-users');?> </li></ul><?php } */ ?>

					<?php /* if (get_option("EWD_FEUP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'front-end-only-users'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Check out our YouTube channel ", 'front-end-only-users'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'front-end-only-users');?> </li></ul>
					<?php } elseif ($Full_Version == "Yes") { ?><ul><li><?php _e("Thanks for upgrading to version 2.6!", 'front-end-only-users'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'front-end-only-users'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'front-end-only-users');?> </li></ul>
					<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 3.0!", 'front-end-only-users'); ?><br> <?php _e("Love the plugin but don't need the premium version? Help us speed up product support and development by donating. Thanks for using the plugin!", 'front-end-only-users');?>
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="AQLMJFJ62GEFJ">
										<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
										<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
										</form>
										</li></ul>
					<?php } */ ?>
				</div>
			</div>
		</div>
<?php
update_option('EWD_FEUP_Update_Flag', "No");
update_option('EWD_FEUP_Install_Flag', "No");
}
EWD_FEUP_Get_EWD_Blog();
EWD_FEUP_Get_Changelog();
?>


	<?php if ( time() < 1511845201 and $EWD_FEUP_Full_Version != "Yes" ) { ?>
		<a href="https://www.etoilewebdesign.com/license-payment/"><img src="http://www.etoilewebdesign.com/Screenshots/blackFridaypromotionbanner1200.png" style="position: relative; float: left; width: 100%; height: auto; border: none;" /></a>
		<div style="clear: both;"></div>
	<?php } ?>


	<div id="ewd-dashboard-box-orders" class="ewd-feup-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/feup-buttonsicons-full-06.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value"><span class="displaying-num"><?php echo $wpdb->get_var("SELECT COUNT(User_ID) FROM $ewd_feup_user_table_name"); ?></span>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Users", 'front-end-only-users') ?>
		  </div>
		</div>
	</div>
	<div id="ewd-dashboard-box-links" class="ewd-feup-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/feup-buttonsicons-05.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value ewd-font-22"><?php echo $wpdb->get_var("SELECT User_Last_Login FROM $ewd_feup_user_table_name ORDER BY User_Last_Login DESC"); ?>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Last Login Time", 'front-end-only-users') ?>
		  </div>
		</div>
	</div>
	<div id="ewd-dashboard-box-views" class="ewd-feup-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/feup-buttonsicons-03.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value"><?php echo $wpdb->get_var("SELECT SUM(User_Total_Logins) FROM $ewd_feup_user_table_name"); ?>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Total Logins", 'front-end-only-users') ?>
		  </div>
		</div>
	</div>

	<div id="ewd-dashboard-box-support" class="ewd-feup-dashboard-box" >
		<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/feup-buttonsicons-04.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  	<div class="ewd-dashboard-box-support-value">
			<form id="form1" runat="server">
			<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Click here for support</a>
		  		</div>
			</div>
		</div>
	<div id="light" class="ewd-feup-bright_content">
            <asp:Label ID="lbltext" runat="server" Text="Hey there!"></asp:Label>
            <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
		</br>
		<h2>Need help?</h2>
		<p>You may find the information you need with our support tools.</p>
		<a href="https://www.youtube.com/playlist?list=PLEndQUuhlvSolfe-rIpI3eK_TmfeEDPeH"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/support_icons_feup-01.png" /></a>
		<a href="https://www.youtube.com/playlist?list=PLEndQUuhlvSolfe-rIpI3eK_TmfeEDPeH"><h4>Youtube Tutorials</h4></a>
		<p>Our tutorials show you the basics of setting up your plugin, to the more specific utilization of our features.</p>
		<div class="ewd-feup-clear"></div>
		<a href="https://wordpress.org/support/plugin/front-end-only-users"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/support_icons_feup-03.png"/></a>
		<a href="https://wordpress.org/support/plugin/front-end-only-users"><h4>WordPress Forum</h4></a>
		<p>We make sure to answer your questions within a 24hrs frame during our business days. Search within our threads to find your answers. If it has not been addressed, please create a new thread!</p>
		<div class="ewd-feup-clear"></div>
		<a href="http://www.etoilewebdesign.com/plugins/front-end-only-users/documentation-front-end-only-users/"><img src="<?php echo plugins_url(); ?>/front-end-only-users/images/support_icons_feup-02.png"/></a>
		<a href="http://www.etoilewebdesign.com/plugins/front-end-only-users/documentation-front-end-only-users/"><h4>Documentation</h4></a>
		<p>Most information concerning the installation, the shortcodes and the features are found within our documentation page.</p>
        </div>
	</form>

<!--END TOP BOX-->
</div>


<br class="clear" />


<!-- A list of the products in the catalogue -->
<div id="col-left">
<div class="col-wrap">
	<div id='ewd-feup-one-click-install'>
		<a class='ewd-feup-one-click-install-div-load button button-primary'>Open One-Click Installer</a>
	</div>
	<div id='ewd-feup-one-click-blur'></div>
	<div id='ewd-feup-one-click-install-div' class='ewd-feup-oci-no-show'><?php include EWD_FEUP_CD_PLUGIN_PATH . "html/OneClickInstall.php"; ?></div>
</div>
</div>


<br class="clear" />



<!--Middle box-->
<div class="ewd-dashboard-middle">
<div id="col-full">
<h3 class="ewd-feup-dashboard-h3"><?php _e("Recent User Activity", 'front-end-only-users'); ?></h3>

<?php
	$Sql = "SELECT * FROM $ewd_feup_user_table_name ORDER BY User_Last_Login DESC LIMIT 0,10";
	$myrows = $wpdb->get_results($Sql);
?>

<div>
	<table class='ewd-feup-overview-table wp-list-table widefat fixed striped posts'>
		<thead>
			<tr>
				<th><?php _e("Username", 'front-end-only-users'); ?></th>
				<th><?php _e("Last Login", 'front-end-only-users'); ?></th>
				<th><?php _e("Total Logins", 'front-end-only-users'); ?></th>
				<th><?php _e("Joined Date", 'front-end-only-users'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($myrows) {
		  			foreach ($myrows as $User) {
						echo "<tr id='User-" . $User->User_ID ."'>";
						echo "<td class='name column-name'>";
						echo "<strong>";
						echo "<a class='row-title' href='admin.php?page=EWD-FEUP-options&Action=EWD_FEUP_User_Details&Selected=User&User_ID=" . $User->User_ID ."' title='Edit " . $User->Username . "</a></strong>";
						echo "<br />";
						echo "<div class='username'>" . $User->Username . "</div>";
						echo "</td>";
						echo "<td class='description column-last-login'>" . $User->User_Last_Login . "</td>";
						echo "<td class='description column-description'>" . $User->User_Total_Logins . "</td>";
						echo "<td class='users column-required'>" . $User->User_Date_Created . "</td>";
						echo "</tr>";
					}
				}
			?>
		</tbody>
	</table>
</div>
<br class="clear" />
</div>
</div>

<?php if($hideReview != 'Yes'){ ?>
<div id='ewd-feup-dashboard-leave-review' class='ewd-feup-leave-review postbox ewd-feup-postbox-collapsible'>
	<h3 class='hndle ewd-feup-dashboard-h3'>Leave a Review <span></span></h3>
	<div class='ewd-dashboard-content'>
		<div class="ewd-dashboard-leave-review-text">
			If you enjoy this plugin and have a minute, please consider leaving a 5-star review. Thank you!
		</div>
		<a href="https://wordpress.org/support/plugin/front-end-only-users/reviews/" class="ewd-dashboard-leave-review-link" target="_blank">Leave a Review!</a>
		<div class="clear"></div>
	</div>
	<form action="admin.php?page=EWD-FEUP-options" method="post">
		<input type="hidden" name="hide_feup_review_box_hidden" value="Yes">
		<input type="submit" name="hide_feup_review_box_submit" class="ewd-dashboard-leave-review-dismiss" value="I've already left a review">
	</form>
</div>
<div class="clear"></div>
<?php } ?>

<!-- END MIDDLE BOX -->

<!-- FOOTER BOX -->
<!-- A list of the products in the catalogue -->
<div class="ewd-dashboard-footer">
<div id='ewd-dashboard-updates' class='ewd-feup-updates postbox ewd-feup-postbox-collapsible'>
<h3 class='hndle ewd-feup-dashboard-h3' id='ewd-recent-changes'><?php _e("Recent Changes", 'front-end-only-users'); ?> <i class="fa fa-cog" aria-hidden="true"></i></h3>
<div class='ewd-dashboard-content' ><?php echo get_option('EWD_FEUP_Changelog_Content'); ?></div>
</div>

<div id='ewd-dashboard-blog' class='ewd-feup-blog postbox ewd-feup-postbox-collapsible'>
<h3 class='hndle ewd-feup-dashboard-h3'>News <i class="fa fa-rss" aria-hidden="true"></i></h3>
<div class='ewd-dashboard-content'><?php echo get_option('EWD_FEUP_Blog_Content'); ?></div>
</div>

<div id="ewd-dashboard-plugins" class='ewd-feup-plugins postbox ewd-feup-postbox-collapsible' >
	<h3 class='hndle ewd-feup-dashboard-h3'><span><?php _e("Goes great with:", 'front-end-only-users') ?></span><i class="fa fa-plug" aria-hidden="true"></i></h3>
	<div class="inside">
		<div class="ewd-dashboard-plugin-icons">
			<div style="width:50%">
				<a target='_blank' href='https://wordpress.org/plugins/ultimate-faqs/'><img style="width:100%" src='<?php echo plugins_url(); ?>/front-end-only-users/images/Related_FAQ.png'/></a>
			</div>
			<div>
				<h3>Ultimate FAQs</h3> <p>An easy-to-use FAQ plugin that lets you create, order and publicize FAQs, insert 3 styles of FAQs on a page.</p>
			</div>

		</div>
		<div class="ewd-dashboard-plugin-icons">
			<div style="width:50%">
				<a target='_blank' href='https://wordpress.org/plugins/order-tracking/'><img style="width:100%" src='<?php echo plugins_url(); ?>/front-end-only-users/images/Related_OTP.png'/></a>
			</div>
			<div>
				<h3>Status Tracking</h3><p>Allows you to manage orders or projects quickly and easily by posting updates that can be viewed through the front-end of your WordPress site.</p>
			</div>

		</div>
	</div>
</div>
</div>








<?php
function EWD_FEUP_Get_EWD_Blog() {
	$Blog_URL = EWD_FEUP_CD_PLUGIN_PATH . 'Blog.html';
	$Blog = file_get_contents($Blog_URL);

	update_option('EWD_FEUP_Blog_Content', $Blog);
}

function EWD_FEUP_Get_Changelog() {
	$Readme_URL = EWD_FEUP_CD_PLUGIN_PATH . 'readme.txt';
	$Readme = file_get_contents($Readme_URL);

	$Changes_Start = strpos($Readme, "== Changelog ==") + 15;
	$Changes_Section = substr($Readme, $Changes_Start);

	$Changes_Text = substr($Changes_Section, 0, strposX($Changes_Section, "=", 5));

	$Changes_Text = str_replace("= ", "<h3>", $Changes_Text);
	$Changes_Text = str_replace(" =", "</h3>", $Changes_Text);
	$Changes_Text = str_replace("- ", "<br />- ", $Changes_Text);

	update_option('EWD_FEUP_Changelog_Content', $Changes_Text);
}

function strposX($haystack, $needle, $number){
    if($number == '1'){
        return strpos($haystack, $needle);
    }elseif($number > '1'){
        return strpos($haystack, $needle, strposX($haystack, $needle, $number - 1) + strlen($needle));
    }else{
        return error_log('Error: Value for parameter $number is out of range');
    }
}

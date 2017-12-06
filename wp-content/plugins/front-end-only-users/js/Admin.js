/* Used to show and hide the admin tabs for FEUP */
function ShowTab(TabName) {
		jQuery(".OptionTab").each(function() {
				jQuery(this).addClass("HiddenTab");
				jQuery(this).removeClass("ActiveTab");
		});
		jQuery("#"+TabName).removeClass("HiddenTab");
		jQuery("#"+TabName).addClass("ActiveTab");
		
		jQuery(".nav-tab").each(function() {
				jQuery(this).removeClass("nav-tab-active");
		});
		jQuery("#"+TabName+"_Menu").addClass("nav-tab-active");
}

function ShowMoreOptions() {
	jQuery(".feup-email-advanced-settings").toggle();
	jQuery(".feup-email-toggle-show").toggle();
	jQuery(".feup-email-toggle-hide").toggle();

	return false;
}

function ShowOptionTab(TabName) {
	jQuery(".feup-option-set").each(function() {
		jQuery(this).addClass("feup-hidden");
	});
	jQuery("#"+TabName).removeClass("feup-hidden");
	
	jQuery(".options-subnav-tab").each(function() {
		jQuery(this).removeClass("options-subnav-tab-active");
	});
	jQuery("#"+TabName+"_Menu").addClass("options-subnav-tab-active");
}

jQuery(document).ready(function() {	
	jQuery('.ewd-feup-one-click-install-div-load').on('click', function() {
		jQuery('#ewd-feup-one-click-install-div').removeClass('ewd-feup-oci-no-show');
		jQuery('#ewd-feup-one-click-install-div').addClass('ewd-feup-oci-main-event');
		jQuery('#ewd-feup-one-click-blur').addClass('ewd-feup-grey-out');
		jQuery('#ewd-feup-one-click-blur').width(jQuery('#ewd-feup-one-click-blur').width() + 180);
	});

	jQuery('#ewd-feup-one-click-blur').on('click', function() {
		jQuery('#ewd-feup-one-click-install-div').addClass('ewd-feup-oci-no-show');
		jQuery('#ewd-feup-one-click-install-div').removeClass('ewd-feup-oci-main-event');
		jQuery('#ewd-feup-one-click-blur').removeClass('ewd-feup-grey-out');
	});

});

/* This code is required to make changing the field order a drag-and-drop affair */
jQuery(document).ready(function() {	
	jQuery('.fields-list').sortable({
		items: '.list-item',
		opacity: 0.6,
		cursor: 'move',
		axis: 'y',
		update: function() {
			var order = jQuery(this).sortable('serialize') + '&action=ewd_feup_update_field_order';
			jQuery.post(ajaxurl, order, function(response) {});
		}
	});

	/*jQuery('.levels-list').sortable({
		items: '.list-item',
		opacity: 0.6,
		cursor: 'move',
		axis: 'y',
		update: function() {
			var order = jQuery(this).sortable('serialize') + '&action=ewd_feup_update_levels_order';
			alert(order);
			jQuery.post(ajaxurl, order, function(response) {alert(response);});
		}
	});*/
});

jQuery(document).ready(function() {
	SetDiscountDeleteHandlers();

	jQuery('.ewd-feup-add-discount-code').on('click', function(event) {
		var ID = jQuery(this).data('nextid');

		var HTML = "<tr id='ewd-feup-discount-code-row-" + ID + "'>";
		HTML += "<td><a class='ewd-feup-delete-discount-code' data-reminderID='" + ID + "'>Delete</a></td>";
		HTML += "<td><input type='text' name='Discount_Code_" + ID + "_Code'></td>";
		HTML += "<td><input type='text' name='Discount_Code_" + ID + "_Amount'></td>";
		HTML += "<td><select name='Discount_Code_" + ID + "_Recurring'>";
		HTML += "<option value='No'>No</option>";
		HTML += "<option value='Yes'>Yes</option>";
		HTML += "</select></td>";
		HTML += "<td><select name='Discount_Code_" + ID + "_Applicable'>";
		HTML += "<option value='Membership'>Membership</option>";
		//HTML += "<option value='Level'>Hour(s)</option>";
		//HTML += "<option value='Days'>Day(s)</option>";
		HTML += "</select></td>";
		HTML += "<td><input type='datetime-local' name='Discount_Code_" + ID + "_Expiry'></td>";
		HTML += "</tr>";

		//jQuery('table > tr#ewd-feup-add-reminder').before(HTML);
		jQuery('#ewd-feup-discount-codes-table tr:last').before(HTML);

		ID++;
		jQuery(this).data('nextid', ID); //updates but doesn't show in DOM

		SetDiscountDeleteHandlers();

		event.preventDefault();
	});
});

function SetDiscountDeleteHandlers() {
	jQuery('.ewd-feup-delete-discount-code').on('click', function(event) {
		var ID = jQuery(this).data('reminderid');
		var tr = jQuery('#ewd-feup-discount-code-row-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

jQuery(document).ready(function() {
	SetLevelDeleteHandlers();

	jQuery('.ewd-feup-add-level-payment').on('click', function(event) {
		var ID = jQuery(this).data('nextid');

		var HTML = "<tr id='ewd-feup-level-payment-row-" + ID + "'>";
		HTML += "<td><a class='ewd-feup-delete-level-payment' data-levelpaymentid='" + ID + "'>Delete</a></td>";
		HTML += "<td><select class='ewd-feup-insert-levels' name='Level_Payment_" + ID + "_Level'></select></td>";
		HTML += "<td><input type='text' name='Level_Payment_" + ID + "_Amount'><input type='hidden' name='Level_Payment_" + ID + "_Cumulative' value='No'></td>";
		//HTML += "<td><select name='Level_Payment_" + ID + "_Cumulative'>";
		//HTML += "<option value='No'>No</option>";
		//HTML += "<option value='Yes'>Yes</option>";
		//HTML += "</select></td>";
		HTML += "</tr>";

		jQuery('#ewd-feup-level-payments-table tr:last').before(HTML);

		ID++;
		jQuery(this).data('nextid', ID); //updates but doesn't show in DOM

		SetLevelDeleteHandlers();
		GetEWDFEUPLevelOptions();

		event.preventDefault();
	});
});

function SetLevelDeleteHandlers() {
	jQuery('.ewd-feup-delete-level-payment').on('click', function(event) {
		var ID = jQuery(this).data('levelpaymentid');
		var tr = jQuery('#ewd-feup-level-payment-row-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

function GetEWDFEUPLevelOptions() {
	var data = 'action=get_ewd_feup_levels';
	jQuery.post(ajaxurl, data, function(response) {
		Levels = jQuery.parseJSON(response);
		jQuery(Levels).each(function() {
			jQuery('.ewd-feup-insert-levels').append("<option value='"+this.Level_ID+"'>"+this.Level_Name+"</option>");
		});
		jQuery('.ewd-feup-insert-levels').removeClass('ewd-feup-insert-levels');
	});
}

jQuery(document).ready(function() {
	SetMessageDeleteHandlers();

	jQuery('.ewd-feup-add-email').on('click', function(event) {
		var Counter = jQuery(this).data('nextcounter');
		var Max_ID = jQuery(this).data('maxid');

		var HTML = "<tr id='ewd-feup-email-message-" + Counter + "'>";
		HTML += "<td><input type='hidden' name='Email_Message_" + Counter + "_ID' value='" + Max_ID + "' /><a class='ewd-feup-delete-message' data-messagecounter='" + Counter + "'>Delete</a></td>";
		HTML += "<td><input type='text' name='Email_Message_" + Counter + "_Name'></td>";
		HTML += "<td><input type='text' name='Email_Message_" + Counter + "_Subject'></td>";
		HTML += "<td><textarea name='Email_Message_" + Counter + "_Body'></textarea></td>";
		HTML += "</tr>";

		//jQuery('table > tr#ewd-feup-add-reminder').before(HTML);
		jQuery('#ewd-feup-email-messages-table tr:last').before(HTML);

		Counter++;
		Max_ID++;
		jQuery(this).data('nextcounter', Counter); //updates but doesn't show in DOM
		jQuery(this).data('maxid', Max_ID); //updates but doesn't show in DOM

		SetMessageDeleteHandlers();

		event.preventDefault();
	});
});

function SetMessageDeleteHandlers() {
	jQuery('.ewd-feup-delete-message').on('click', function(event) {
		var ID = jQuery(this).data('messagecounter');
		var tr = jQuery('#ewd-feup-email-message-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

jQuery(document).ready(function() {
	jQuery('.ewd-feup-send-test-email').on('click', function() {
		jQuery('.ewd-feup-test-email-response').remove();

		var Email_Address = jQuery('.ewd-feup-test-email-address').val();
		var Email_To_Send = jQuery('.ewd-feup-test-email-selector').val();

		if (Email_Address == "" || Email_To_Send == "") {
			jQuery('.ewd-feup-send-test-email').after('<div class="ewd-feup-test-email-response">Error: Select an email and enter an email address before sending.</div>');
		}

		var data = 'Email_Address=' + Email_Address + '&Email_To_Send=' + Email_To_Send + '&action=feup_send_test_email';
        jQuery.post(ajaxurl, data, function(response) {
        	jQuery('.ewd-feup-send-test-email').after(response);
        });
	});

	jQuery('.ewd-feup-send-email-blast').on('click', function() {
		jQuery('.ewd-feup-email-blast-response').remove();

		var Email_Level = jQuery('.ewd-feup-blast-level-selector').val();
		var Email_To_Send = jQuery('.ewd-feup-email-blast-selector').val();

		if (Email_To_Send == "") {
			jQuery('.ewd-feup-send-test-email').after('<div class="ewd-feup-email-blast-response">Error: Select an email and enter an email address before sending.</div>');
		}

		var data = 'Email_Level=' + Email_Level + '&Email_To_Send=' + Email_To_Send + '&action=feup_send_email_blast';
        jQuery.post(ajaxurl, data, function(response) {
        	jQuery('.ewd-feup-send-email-blast').after(response);
        });
	});
});

jQuery(document).ready(function() {
	SetMCFieldDeleteHandlers();

	jQuery('.ewd-feup-add-mc-field').on('click', function(event) {
		var Counter = jQuery(this).data('nextcounter');

		var HTML = "<tr id='ewd-feup-mc-field-" + Counter + "'>";
		HTML += "<td><a class='ewd-feup-delete-mc-field' data-mcfieldcounter='" + Counter + "'>Delete</a></td>";
		HTML += "<td><select name='Field_ID_" + Counter + "'>";
		jQuery(ewd_feup_field_data).each(function(index, el) {
			HTML += "<option value='" + el.Field_ID + "'>" + el.Field_Name + "</option>";
		});
		HTML += "</td>";
		HTML += "<td><input type='text' name='Mailchimp_Field_ID_" + Counter + "'></td>";
		HTML += "</tr>";

		//jQuery('table > tr#ewd-feup-add-reminder').before(HTML);
		jQuery('#ewd-feup-mc-fields-table tr:last').before(HTML);

		Counter++;
		jQuery(this).data('nextcounter', Counter); //updates but doesn't show in DOM

		SetMCFieldDeleteHandlers();

		event.preventDefault();
	});
});

function SetMCFieldDeleteHandlers() {
	jQuery('.ewd-feup-delete-message').on('click', function(event) {
		var ID = jQuery(this).data('messagecounter');
		var tr = jQuery('#ewd-feup-email-message-'+ID);

		tr.fadeOut(400, function(){
            tr.remove();
        });

		event.preventDefault();
	});
}

jQuery(document).ready(function() {
	jQuery('.ewd-feup-spectrum').spectrum({
		showInput: true,
		showInitial: true,
		preferredFormat: "hex",
		allowEmpty: true
	});

	jQuery('.ewd-feup-spectrum').css('display', 'inline');

	jQuery('.ewd-feup-spectrum').on('change', function() {
		if (jQuery(this).val() != "") {
			jQuery(this).css('background', jQuery(this).val());
			var rgb = EWD_FEUP_hexToRgb(jQuery(this).val());
			var Brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
			if (Brightness < 100) {jQuery(this).css('color', '#ffffff');}
			else {jQuery(this).css('color', '#000000');}
		}
		else {
			jQuery(this).css('background', 'none');
		}
	});

	jQuery('.ewd-feup-spectrum').each(function() {
		if (jQuery(this).val() != "") {
			jQuery(this).css('background', jQuery(this).val());
			var rgb = EWD_FEUP_hexToRgb(jQuery(this).val());
			var Brightness = (rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000;
			if (Brightness < 100) {jQuery(this).css('color', '#ffffff');}
			else {jQuery(this).css('color', '#000000');}
		}
	});
});

function EWD_FEUP_hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}

jQuery(document).ready(function() {
	jQuery('#ewd-feup-facebook-login-option').on('change', {optionType: "facebook"}, EWD_FEUP_Update_Options);
	jQuery('#ewd-feup-twitter-login-option').on('change', {optionType: "twitter"}, EWD_FEUP_Update_Options);
	
	EWD_FEUP_Update_Options();
});

function EWD_FEUP_Update_Options(params) {
	if (params === undefined || params.data.optionType == "facebook") {
		if (jQuery('#ewd-feup-facebook-login-option').is(':checked')) {
			jQuery('.ewd-feup-facebook-login-option').removeClass('feup-hidden');
		}
		else {
			jQuery('.ewd-feup-facebook-login-option').addClass('feup-hidden');
		}
	}
	if (params === undefined || params.data.optionType == "twitter") {
		if (jQuery('#ewd-feup-twitter-login-option').is(':checked')) {
			jQuery('.ewd-feup-twitter-login-option').removeClass('feup-hidden');
		}
		else {
			jQuery('.ewd-feup-twitter-login-option').addClass('feup-hidden');
		}
	}
}

jQuery(document).ready(function() {
	jQuery('#ewd-feup-paypal-option').on('change', EWD_FEUP_Update_Options);
	jQuery('#ewd-feup-stripe-option').on('change', EWD_FEUP_Update_Options);
	
	EWD_FEUP_Update_Options();
});

function EWD_FEUP_Update_Options(params) {
	if (jQuery('#ewd-feup-paypal-option').is(':checked')) {
		jQuery('.ewd-feup-paypal-option').removeClass('feup-hidden');
	}
	else {
		jQuery('.ewd-feup-paypal-option').addClass('feup-hidden');
	}
	if (jQuery('#ewd-feup-stripe-option').is(':checked')) {
		jQuery('.ewd-feup-stripe-option').removeClass('feup-hidden');
	}
	else {
		jQuery('.ewd-feup-stripe-option').addClass('feup-hidden');
	}
}

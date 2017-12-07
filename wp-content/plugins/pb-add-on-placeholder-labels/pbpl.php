<?php

/*
    Plugin Name: Profile Builder - Placeholder Labels Add-On
    Plugin URI: http://www.cozmoslabs.com/
	Description: This plugin transform labels of Profile Builder forms into placeholders.
	Author: Cozmoslabs, Cristophor Hurduban
	Version: 2.3.7
	Author URI: http://www.cozmoslabs.com
	License: GPL2


    == Copyright ==
    Copyright 2014 Cozmoslabs (www.cozmoslabs.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/* Define plugin directory */
define( 'PBPL_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ) );

/*
 * Function that enqueues the necessary scripts in the front-end area
 *
 * @since v.1.0
 *
 */
function pbpl_scripts_and_styles() {
	if( file_exists( PBPL_PLUGIN_DIR . '/assets/js/init.js' ) ) {
		wp_enqueue_script( 'pbpl_init', plugin_dir_url( __FILE__ ) . 'assets/js/init.js', array( 'jquery' ) );
	}

	if( file_exists( PBPL_PLUGIN_DIR . '/assets/css/style.css' ) ) {
		wp_enqueue_style( 'pbpl_css', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
	}

	if( is_rtl() ) {
		if( file_exists( PBPL_PLUGIN_DIR . '/assets/css/rtl.css' ) ) {
			wp_enqueue_style( 'pbpl_css_rtl', plugin_dir_url( __FILE__ ) . 'assets/css/rtl.css' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'pbpl_scripts_and_styles' );


/*
 * Function that adds a new class to each form field
 *
 * @since v.1.0
 *
 * @param string		$field		Contain the class of each form field
 *
 * @return string
 */
function pbpl_field_css_class( $field ) {
	$field = esc_attr( $field );

	if( strpos( $field, 'wppb-subscription-plans' ) == false ) {
		$field = $field . ' pbpl-class';
	}

	return $field;
}


/*
 * Function that adds a new placeholder attribute to each form field
 *
 * @since v.1.0
 *
 * @param array		$field		Contain each form field
 *
 * @return string
 */
function pbpl_extra_attribute( $extra_attribute, $field ) {
	$extra_attr_only_for = array(
		'Default - Username',
		'Default - First Name',
		'Default - Last Name',
		'Default - Nickname',
		'Default - E-mail',
		'Default - Website',
		'Default - Password',
		'Default - Repeat Password',
		'Default - Biographical Info',
		'Input',
		'Textarea',
		'Email Confirmation',
		'Phone',
		'Colorpicker',
		'Datepicker',
		'Number',
		'Validation',
	);

	if( ! empty ( $field ) && in_array( $field['field'], $extra_attr_only_for ) ) {
		$extra_attribute .= 'placeholder = "' . esc_attr( $field['field-title'] ) . ( ( $field['required'] == 'Yes' ) ? '*' : '' ) . '"';
	}

	return $extra_attribute;
}


/*
 * Function that adds a new placeholder attribute to each WooCommerce Add-on form field
 *
 * @since v.1.1
 *
 * @param array		$field		Contain each form field
 *
 * @return string
 */
function pbpl_woo_extra_attribute( $extra_attribute, $field ) {
	$extra_attribute .= 'placeholder = "' . esc_attr( $field['label'] ) . ( ( $field['required'] == 'Yes' ) ? '*' : '' ) . '"';

	return $extra_attribute;
}


/*
 * Function that adds a Meta Box on each edit Register and Edit-Profile forms when Multiple Forms are active
 *
 * @since v.2.0
 *
 */
function pbpl_add_meta_boxes() {
	$pbpl_pb_moduleSettings = get_option( 'wppb_module_settings', 'not_found' );

	if( $pbpl_pb_moduleSettings != 'not_found' ) {

		if( $pbpl_pb_moduleSettings['wppb_multipleRegistrationForms'] == 'show' ) {
			add_meta_box( 'pbpl-rf-side', __( 'Placeholder Labels', 'pbpl' ), 'pbpl_meta_box_content', 'wppb-rf-cpt', 'side', 'low' );
		}

		if( $pbpl_pb_moduleSettings['wppb_multipleEditProfileForms'] == 'show' ) {
			add_meta_box( 'pbpl-epf-side', __( 'Placeholder Labels', 'pbpl' ), 'pbpl_meta_box_content', 'wppb-epf-cpt', 'side', 'low' );
		}

	}
}
add_action( 'add_meta_boxes', 'pbpl_add_meta_boxes' );


/*
 * Function that adds content to Meta Boxes on each edit Register and Edit-Profile forms
 *
 * @since v.2.0
 *
 * @param object		$post		Contain the post data
 */
function pbpl_meta_box_content( $post ) {
	$pbpl_select_value = get_post_meta( $post->ID, 'pbpl-active', true );
	$pbpl_select_value = esc_attr( $pbpl_select_value );

	?>
	<div class="wrap">
		<p>
			<label for="pbpl-active" ><?php _e( 'Replace labels with placeholders:', 'pbpl' ) ?></label>
		</p>
		<select name="pbpl-active" id="pbpl-active" class="mb-select">
			<option value="yes" <?php selected( $pbpl_select_value, 'yes' ); ?>><?php _e( 'Yes', 'pbpl' ) ?></option>
			<option value="no" <?php selected( $pbpl_select_value, 'no' ); ?>><?php _e( 'No', 'pbpl' ) ?></option>
		</select>
	</div>
<?php
}


/*
 * Function that saves the Meta Box option
 *
 * @since v.2.0
 *
 */
function pbpl_save_meta_box_option() {
	global $post;

	if( isset( $_POST['pbpl-active'] ) ) {
		$pbpl_select_value = sanitize_text_field( $_POST['pbpl-active'] );

		update_post_meta( $post->ID, 'pbpl-active', $pbpl_select_value );
	}
}
add_action( 'save_post', 'pbpl_save_meta_box_option' );


/*
 * Function that activate or deactivate replacement of labels with placeholders in form
 *
 * @since v.2.0
 *
 * @param array		$form		Contain the form args
 */
function pbpl_activate( $form ) {
	$pbpl_pb_moduleSettings = get_option( 'wppb_module_settings', 'not_found' );

	if( ( $pbpl_pb_moduleSettings != 'not_found' && isset( $pbpl_pb_moduleSettings['wppb_multipleRegistrationForms'] ) && $pbpl_pb_moduleSettings['wppb_multipleRegistrationForms'] == 'show' ) || ( $pbpl_pb_moduleSettings != 'not_found' && isset( $pbpl_pb_moduleSettings['wppb_multipleEditProfileForms'] ) && $pbpl_pb_moduleSettings['wppb_multipleEditProfileForms'] == 'show' ) ) {
		if( ! empty( $form['ID'] ) ) {
			$pbpl_saved_value = get_post_meta( $form['ID'], 'pbpl-active', true );

			if( $pbpl_saved_value == 'no' ) {
				return;
			} else {
				pbpl_add_filters();
			}
		} else {
			pbpl_add_filters();
		}
	} else {
		pbpl_add_filters();
	}
}
add_action( 'wppb_form_args_before_output', 'pbpl_activate' );


/*
 * Function that adds the necessary filters
 *
 * @since v.2.0
 *
 */
function pbpl_add_filters() {
	add_filter( 'wppb_field_css_class', 'pbpl_field_css_class', 10, 1 );
	add_filter( 'wppb_extra_attribute', 'pbpl_extra_attribute', 10, 2 );
	add_filter( 'wppb_woo_extra_attribute', 'pbpl_woo_extra_attribute', 10, 2 );
	add_filter( 'wppb_extra_select_option', 'pbpl_extra_select_option', 10, 3 );
	add_filter( 'wppb_select2_multiple_arguments', 'pbpl_select2_multiple_placeholder', 10, 3 );
}

/*
 * Function that adds the necessary filters
 *
 * @since v.2.3.4
 *
 */
function pbpl_extra_select_option( $option, $field, $item_title ) {
	$option = '<option value="" class="custom_field_select_option '. apply_filters( 'wppb_fields_extra_css_class', '', $field ) .'" disabled '. ( $field['field'] == 'Select (User Role)' ? '' : ( $field['field'] == 'Select2 (Multiple)' ? '' : 'selected' ) ) .'>'. esc_attr( $item_title ) . ( $field['required'] == 'Yes' ? '*' : '' ) .'</option>';

	return $option;
}

/*
 * Function that adds placeholder for Select2 Multiple field
 *
 * @since v.2.3.4
 *
 */
function pbpl_select2_multiple_placeholder( $arguments, $form_location, $field ) {
	$arguments['placeholder'] = esc_attr( $field['field-title'] ) . ( $field['required'] == 'Yes' ? '*' : '' );

	return $arguments;
}

/*
 * Function that adds placeholder for Recover Password form fields
 *
 * @since v.2.3.4
 *
 */
function pbpl_recover_password( $extra_attr, $input_title, $input_type ) {
	$extra_attr .= ' placeholder="'. esc_attr( $input_title ) . '" ';

	return $extra_attr;
}
add_filter( 'wppb_recover_password_extra_attr', 'pbpl_recover_password', 10, 3 );
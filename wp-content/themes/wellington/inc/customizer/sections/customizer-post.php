<?php
/**
 * Post Settings
 *
 * Register Post Settings section, settings and controls for Theme Customizer
 *
 * @package Wellington
 */

/**
 * Adds post settings in the Customizer
 *
 * @param object $wp_customize / Customizer Object.
 */
function wellington_customize_register_post_settings( $wp_customize ) {

	// Add Section for Post Settings.
	$wp_customize->add_section( 'wellington_section_post', array(
		'title'    => esc_html__( 'Post Settings', 'wellington' ),
		'priority' => 30,
		'panel'    => 'wellington_options_panel',
	) );

	// Add Setting and Control for Excerpt Length.
	$wp_customize->add_setting( 'wellington_theme_options[excerpt_length]', array(
		'default'           => 10,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'wellington_theme_options[excerpt_length]', array(
		'label'    => esc_html__( 'Excerpt Length', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[excerpt_length]',
		'type'     => 'text',
		'priority' => 2,
	) );

	// Add Post Details Headline.
	$wp_customize->add_control( new Wellington_Customize_Header_Control(
		$wp_customize, 'wellington_theme_options[postmeta_headline]', array(
			'label'    => esc_html__( 'Post Meta', 'wellington' ),
			'section'  => 'wellington_section_post',
			'settings' => array(),
			'priority' => 20,
		)
	) );

	// Add Meta Date setting and control.
	$wp_customize->add_setting( 'wellington_theme_options[meta_date]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[meta_date]', array(
		'label'    => esc_html__( 'Display post date', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[meta_date]',
		'type'     => 'checkbox',
		'priority' => 30,
	) );

	// Add Meta Author setting and control.
	$wp_customize->add_setting( 'wellington_theme_options[meta_author]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[meta_author]', array(
		'label'    => esc_html__( 'Display post author', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[meta_author]',
		'type'     => 'checkbox',
		'priority' => 40,
	) );

	// Add Single Posts Headline.
	$wp_customize->add_control( new Wellington_Customize_Header_Control(
		$wp_customize, 'wellington_theme_options[single_post_headline]', array(
			'label'    => esc_html__( 'Single Posts', 'wellington' ),
			'section'  => 'wellington_section_post',
			'settings' => array(),
			'priority' => 50,
		)
	) );

	// Add Meta Category setting and control.
	$wp_customize->add_setting( 'wellington_theme_options[meta_category]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[meta_category]', array(
		'label'    => esc_html__( 'Display post categories on single posts', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[meta_category]',
		'type'     => 'checkbox',
		'priority' => 60,
	) );

	// Add Meta Tags setting and control.
	$wp_customize->add_setting( 'wellington_theme_options[meta_tags]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[meta_tags]', array(
		'label'    => esc_html__( 'Display post tags on single posts', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[meta_tags]',
		'type'     => 'checkbox',
		'priority' => 70,
	) );

	// Add Post Navigation setting and control.
	$wp_customize->add_setting( 'wellington_theme_options[post_navigation]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[post_navigation]', array(
		'label'    => esc_html__( 'Display post navigation on single posts', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[post_navigation]',
		'type'     => 'checkbox',
		'priority' => 80,
	) );

	// Add Featured Images Headline.
	$wp_customize->add_control( new Wellington_Customize_Header_Control(
		$wp_customize, 'wellington_theme_options[featured_images]', array(
			'label'    => esc_html__( 'Featured Images', 'wellington' ),
			'section'  => 'wellington_section_post',
			'settings' => array(),
			'priority' => 90,
		)
	) );

	// Add Setting and Control for featured images on blog and archives.
	$wp_customize->add_setting( 'wellington_theme_options[post_image_archives]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[post_image_archives]', array(
		'label'    => esc_html__( 'Display on blog and archives', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[post_image_archives]',
		'type'     => 'checkbox',
		'priority' => 100,
	) );

	// Add Setting and Control for featured images on single posts.
	$wp_customize->add_setting( 'wellington_theme_options[post_image_single]', array(
		'default'           => true,
		'type'              => 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wellington_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'wellington_theme_options[post_image_single]', array(
		'label'    => esc_html__( 'Display on single posts', 'wellington' ),
		'section'  => 'wellington_section_post',
		'settings' => 'wellington_theme_options[post_image_single]',
		'type'     => 'checkbox',
		'priority' => 110,
	) );

	// Add Partial for Excerpt Length and Post Images on blog and archives.
	$wp_customize->selective_refresh->add_partial( 'wellington_blog_layout_partial', array(
		'selector'         => '.site-main .post-wrapper',
		'settings'         => array(
			'wellington_theme_options[excerpt_length]',
			'wellington_theme_options[post_image_archives]',
		),
		'render_callback'  => 'wellington_customize_partial_blog_layout',
		'fallback_refresh' => false,
	) );
}
add_action( 'customize_register', 'wellington_customize_register_post_settings' );

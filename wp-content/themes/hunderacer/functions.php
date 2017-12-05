<?php
/**
 * modify functional.
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('admin_head', 'admin_hunderacer_custom_fonts');
function admin_hunderacer_custom_fonts() {
    wp_enqueue_style('admin_styles', get_template_directory_uri(). '/css/style.css');
}

/**
 * Add custom sizes for slider top home page
 */
function hunderacer_add_image_sizes() {

    // Add Slider Image Size.
    add_image_size( 'hunderacer-slider-image', 380, 165, true );

    // Add different thumbnail sizes for Magazine Posts widgets.
    add_image_size( 'hunderacer-thumbnail-list', 190, 130, true );
    add_image_size( 'hunderacer-thumbnail-detail', 190, 190, true );

}
add_action( 'after_setup_theme', 'hunderacer_add_image_sizes' );


if ( ! function_exists( 'hunderacer_more_link_slide' ) ) :
    /**
     * Displays the more link on slider post
     */
    function hunderacer_more_link_slide($titlePost, $exrt) {
        wpdocs_custom_excerpt_length(50);
        ?>
        <p>
            <?php echo $exrt . '...';?>
            <a href="<?php echo esc_url( get_permalink() ) ?>" class="more-slider-link"><?php esc_html_e( 'Beskrivelse af ' . $titlePost, 'hunderacer' ); ?></a>
        </p>

    <?php
    }
endif;

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length() {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

if ( ! function_exists( 'hunderacer_more_link' ) ) :
    /**
     * Displays the more link on slider post
     */
    function hunderacer_more_link($string, $limit) {
        return wp_trim_words($string, $limit) . '<a href="' . esc_url( get_permalink() ) . '" class="more-slider-link">Læs mere »</a>';
    }
endif;

//custom widget titles
add_filter('widget_title', 'update_widget_title', 10, 3);
function update_widget_title($title, $instance, $wid){
    $arrTitle = explode(' ', $title);
    if (count($arrTitle) == 2) {
        $title = $arrTitle[0] . ' <span class="color-oragne">' . $arrTitle[1] . '</span>';
    }
    return $title;
}
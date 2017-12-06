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
    add_image_size( 'hunderacer-thumbnail-cate', 90, 80, true );
}
add_action( 'after_setup_theme', 'hunderacer_add_image_sizes' );


if ( ! function_exists( 'hunderacer_more_link_slide' ) ) :
    /**
     * Displays the more link on slider post
     */
    function hunderacer_more_link_slide($titlePost, $exrt) {
        ?>
        <p>
            <?php echo $exrt . '...';?>
            <a href="<?php echo esc_url( get_permalink() ) ?>" class="more-slider-link"><?php esc_html_e( 'Beskrivelse af ' . $titlePost, 'hunderacer' ); ?></a>
        </p>

    <?php
    }
endif;


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
function update_widget_title($title){
    $arrTitle = explode(' ', $title);
    if (count($arrTitle) == 2) {
        $title = $arrTitle[0] . ' <span class="color-oragne">' . $arrTitle[1] . '</span>';
    }
    return $title;
}

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

        $title = single_cat_title( '', false );
        if (strpos ($title, '-') !== false) {
            $title = str_replace('–', '<span class="color-oragne">-', $title) . '</span>';
        }
        if (strpos ($title, '&#8211;') !== false) {
            $title = str_replace('&#8211;', '<span class="color-oragne">-', $title) . '</span>';
        }
    } elseif ( is_tag() ) {

        $title = single_tag_title( '', false );

    } elseif ( is_author() ) {

        $title = '<span class="vcard">' . get_the_author() . '</span>' ;

    }

    return $title;

});

if ( ! function_exists( 'hunderacer_entry_meta' ) ) :
    /**
     * Displays the date, author and categories of a post
     * <div class="meta">
    <div class="submitted">Skrevet af <a href="/brugere/admin/" title="View user profile.">admin</a> på Wed, 2017-05-31</div>

    <div class="terms terms-inline">
    Kategori: 		  <ul class="links inline"><li class="taxonomy_term_734 first last"><a href="/category/blog/nyheder/" rel="tag" title="nyheder">Nyheder</a></li>
    </ul>		</div>
    </div>
     */
    function hunderacer_entry_meta() {

       echo '<div class="meta"><div class="submitted">Skrevet af ';
       the_author_posts_link();
       echo ' på ';
        the_time('D, Y-m-d');
        echo  '</div>';

                echo '<div class="terms terms-inline">
                    Kategori: ' .  get_the_tag_list() . '
                </div>
            </div>';
    }
endif;
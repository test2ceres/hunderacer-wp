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
        return wp_trim_words($string, $limit, '.') . ' <br/><a href="' . esc_url( get_permalink() ) . '" class="more-slider-link">Læs mere »</a>';
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

if ( ! function_exists( 'hunderacer_article_meta' ) ) :
    /**
     * Displays the date of a post
     *
    <div class="views-field-created"><span class="field-content"><span class="field-content">Posted on Man, 2017-12-04</span></span>
    </div>
     */
    function hunderacer_article_meta() {

        echo ' <div class="views-field-created"><span class="field-content"><span class="field-content">Posted on ';
        the_time('D, Y-m-d');
        echo '</span></span></div>';
    }
endif;

if ( ! function_exists( 'hunderacer_get_features_post' ) ) :
    /**
     * Displays the features of posts.
     * <div class="meta">
    <div class="submitted">Skrevet af <a href="/brugere/admin/" title="View user profile.">admin</a> på Wed, 2017-05-31</div>

    <div class="terms terms-inline">
    Kategori: 		  <ul class="links inline"><li class="taxonomy_term_734 first last"><a href="/category/blog/nyheder/" rel="tag" title="nyheder">Nyheder</a></li>
    </ul>		</div>
    </div>
     */
    function hunderacer_get_features_post($postID) {
        $metaFeatures = get_field_objects($postID);
        if (is_array($metaFeatures) && count($metaFeatures) > 0) {
            echo '<div class="rate-block-wrapper"><div class="rate-block"><div class="rate-block-top"></div><div class="rate-block-cen"><h4>' . __('Hunderacens Egenskaber:', 'hunderacer') . '</h4><ul>';
            foreach ( $metaFeatures as $key => $fieldArr ) {
                if (in_array($key, array('size', 'dominans', 'care', 'egnet_som_familiehund', 'lydighed'))) {
                    $value = !empty ($fieldArr['value']) ? $fieldArr['value'] : $fieldArr['default_value'];
                    echo '<li>' . '<img src=" ' . get_stylesheet_directory_uri() . '/images/rate-2-' . $value . '.png" />' . $fieldArr['label'] .  '</li>';
                }
            }
            echo '</ul></div><div class="rate-block-bot"></div></div></div>';
        }
    }
endif;

/*  Short Codes Image Features */
// Add Shortcode
function hunderacer_image_features( $atts ) {

    // Attributes
    extract(shortcode_atts( array('post_id' => get_the_ID()), $atts));

    $value = get_post_meta($post_id, '_multi_img_array', true);
    if($value)
    {
        $temp = explode(",", $value);
        ?>
        <div id="widget_photo_wrapper">
            <div class="widget_photo_content">
                <ul class="hunderacer-image-features">
                    <?php
                    if ($temp)
                    {
                        $ind = 0;
                        foreach ( $temp as $t_val )
                        {
                            if(wp_get_attachment_url($t_val))
                            {
                                ?>
                                <li><a href="<?php echo wp_get_attachment_url($t_val); ?>" rel="lightbox[gallery-0]"><?php echo wp_get_attachment_image($t_val , 'hunderacer-thumbnail-detail'); ?></a></li>
                            <?php
                            }
                        }
                    }
                    else
                    {
                        if(wp_get_attachment_url($t_val))
                        {
                            ?>
                            <li><a href="<?php echo wp_get_attachment_url($t_val); ?>" rel="lightbox[gallery-0]"><?php echo wp_get_attachment_image($value , 'hunderacer-thumbnail-detail'); ?></a></li>
                        <?php
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>
    <?php
    }

}

add_shortcode( 'hunderacer_multiple_images', 'hunderacer_image_features' );

/***
 * function to get title of the articles and news
*/
 function the_hunderacer_title_articles($title)
 {
     $titleArr = explode(' ', $title);
     if (count($titleArr) > 0) {
         $titleNew = '';
         foreach ($titleArr as $k => $text) {
            if ($k == 1 ) {
                $titleNew .= '<span>' . $text. ' ';
             }elseif ($k == (count($titleArr) - 1)) {
                 $titleNew .= ' ' . $text . '</span>';
             } else{
                 $titleNew .= $text . ' ';
             }
         }
        return $titleNew;
     }
     return $title;
 }
<?php
/**
 *
 * content of item for category page
 */

?>
<div id="post-<?php the_ID()?>" class="views-row">

    <div class="views-field-title">
        <span class="field-content">
            <span class="field-content">
                <h2>
                    <a href="<?php the_permalink();?>">
                        <?php
                        echo the_hunderacer_title_articles(get_the_title());
                        ?>
                    </a>
                </h2>
            </span>
        </span>
    </div>
    <?php hunderacer_article_meta();?>

    <div class="views-field-field-news-image-fid">
        <?php
        if (has_post_thumbnail()) {
            wellington_slider_image( 'hunderacer-thumbnail-list', array( 'class' => 'img-blog-item' ) );
        }
        ?>
    </div>

    <div class="views-field-teaser">
        <?php echo hunderacer_more_link(strip_tags(get_the_content()), 75); ?>
    </div>
</div>
<?php
/**
 *
 * content of item for category page
 */

?>
<li id="post-<?php echo the_ID()?>" class="views-row views-row-1 views-row-odd views-row-first">
    <div class="archive-content-item">
        <div class="img-block">
            <?php wellington_post_image( 'hunderacer-thumbnail-cate' ); ?>
        </div>
        <div class="text">
                <?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
            <div class="entry-content clearfix">
                <?php echo hunderacer_more_link(strip_tags(get_the_content()),75); ?>
            </div><!-- .entry-content -->
        </div>
    </div>
</li>
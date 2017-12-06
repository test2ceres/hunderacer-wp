<?php
/**
 * The template for displaying blog items
 *
 * @package Hunderacer
 */

?>
<div id="node-<?php echo the_ID()?>" class="node clearfix">
    <?php the_title( sprintf( '<h3 class="blog-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <div class="facebook-like">
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo esc_url( get_permalink() )?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=25" scrolling="no" style="border:none; overflow:hidden; width:450px; height:25px;" allowtransparency="true" frameborder="0"></iframe>
    </div>

    <div class="meta">
        <?php hunderacer_entry_meta(); ?>
    </div>

    <div class="content-blog-lists">
        <?php
        if (has_post_thumbnail()) {
            wellington_slider_image( 'hunderacer-thumbnail-list', array( 'class' => 'img-blog-item' ) );
        }
        ?>
        <div class="short-desc">
            <?php echo hunderacer_more_link(get_the_excerpt(),78); ?>
        </div>
    </div>
</div><!-- entry of blog -->
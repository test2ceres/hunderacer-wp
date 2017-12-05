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
        <?php wellington_entry_meta(); ?>
    </div>

    <div class="content">
        <div class="field field-type-filefield field-field-blog-image">
            <div class="field-items">
                <div class="field-item"><a href="/blog/s%C3%A5dan-tager-du-kampen-op-mod-hundeh%C3%A5r-i-huset/" class="imagecache imagecache-homepage_dog_photo190x130 imagecache-linked imagecache-homepage_dog_photo190x130_linked"><img src="http://hunderacer.info/sites/default/files/imagecache/homepage_dog_photo190x130/rsz_adorable-1866531_640.jpg" alt="" title="" class="imagecache imagecache-homepage_dog_photo190x130" width="190" height="130"></a></div>
            </div>
        </div>
        <p>Der er ingen tvivl om, at der er utrolig mange fordele og ikke mindst glæder ved at have en hund. Udover den øger ekstremt manges livsglæde og gør folk trygge, øger den også den fysiske aktivitet for os mennesker. Undersøgelser har ligeledes vist, at en hund kan hjælpe med at gøre et menneske mere socialt. Der er altså mange goder ved at have en hund som et ekstra familiemedlem.<br>
            <a href="/blog/s%C3%A5dan-tager-du-kampen-op-mod-hundeh%C3%A5r-i-huset/" class="more-link">Læs mere</a></p>
    </div>
</div><!-- entry of blog -->
<?php
/**
 * The template for displaying medium posts in Magazine Post widgets
 *
 * @package Wellington
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'medium-post clearfix' ); ?>>

	<?php wellington_post_image( 'hunderacer-thumbnail-list' ); ?>

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->
    <div class="entry-content clearfix">
        <?php echo hunderacer_more_link(get_the_excerpt(),15); ?>

    </div><!-- .entry-content -->
</article>

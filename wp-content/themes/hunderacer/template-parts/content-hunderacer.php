<?php
/**
 * The template for displaying single posts
 *
 * @package Wellington
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title custom-title-hunderacer">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    <div class="entry-image-features">
        <?php wellington_post_image_single(); ?>

        <?php hunderacer_get_features_post(get_the_ID()); ?>
    </div>
	<div class="entry-content clearfix">

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wellington' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php
        if (is_category('hunderacer')):
        do_shortcode('[hunderacer_multiple_images]');
        endif;
        ?>
		<?php //wellington_entry_categories(); ?>
		<?php //wellington_entry_tags(); ?>
		<?php //do_action( 'wellington_author_bio' ); ?>
		<?php //wellington_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>

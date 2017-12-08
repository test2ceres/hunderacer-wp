<?php
/**
 * The template for displaying single posts
 *
 * @package Wellington
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
        <h1 class="custom-title-hunderacer blog-size-title">
		<?php
        echo the_hunderacer_title_articles(get_the_title()); ?>
        </h1>
	</header><!-- .entry-header -->
    <div class="meta">
        <?php hunderacer_entry_meta(); ?>
    </div>
	<div class="entry-content clearfix blog-detail">
        <?php wellington_post_image_single(); ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //wellington_entry_categories(); ?>
		<?php //wellington_entry_tags(); ?>
		<?php //do_action( 'wellington_author_bio' ); ?>
		<?php //wellington_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>

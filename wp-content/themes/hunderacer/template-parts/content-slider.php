<?php
/**
 * The template for displaying articles in the slideshow loop
 *
 * @package Wellington
 */

?>

<li id="slide-<?php the_ID(); ?>" class="zeeslide clearfix">

	<?php wellington_slider_image( 'hunderacer-slider-image', array( 'class' => 'slide-image' ) ); ?>

	<div class="slide-content clearfix">

		<?php the_title( sprintf( '<h2 class="slide-title entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-content clearfix">
			<?php hunderacer_more_link_slide(get_the_title(), get_the_excerpt()); ?>

		</div><!-- .entry-content -->

	</div>

</li>

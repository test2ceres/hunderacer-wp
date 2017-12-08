<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wellington
 */

get_header(); ?>

	<section id="primary" class="content-archive content-area">
		<main id="main" class="site-main container-c" role="main">

		<?php
		if ( have_posts() ) : ?>
            <?php
            if (is_category()) {
                //show info of category
            ?>
                <?php
                if (!is_category('nyheder') && !is_category('articles')) {
                ?>
                <header class="page-header">

                    <?php
                        the_archive_title( '<h1 class="archive-title">', '</h1>' );
                    ?>
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>

                </header><!-- .page-header -->
                    <?php } else { $categories = get_the_category();?>
                    <div class="header-article-blog">
                        <ul class="tabs">
                            <li>
                                <a class="<?php echo ($categories[0]->slug=='nyheder' ? 'active' : '')?>" href="/nyheder/"><span>Nyheder</span></a>
                            </li>
                            <li>
                                <a href="/articles/" class="<?php echo ($categories[0]->slug=='articles'  ? 'active' : '')?>""><span>Articles</span></a>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                <div class="entry-content archive-category">
                    <?php
                    if (is_category('hunderacer')) {
                        //get_template_part( 'template-parts/content', 'search-filter-item' );
                     ?>
                        <ul class="dogs">
                        <?php while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'category-item' );
                        endwhile; ?>
                        </ul>
                    <?php } else if (is_category('blog')) {
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'category-item-blog' );
                        endwhile;
                    } else { ?>
                        <div class=" view-News ">
                    <?php
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', 'category-item-articles' );
                        endwhile;
                    ?>
                        </div>
                   <?php } ?>
                </div>
            <?php
            } else {
            ?>
			<header class="page-header">

				<?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
				<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>

			</header><!-- .page-header -->

			<div id="post-wrapper" class="post-wrapper clearfix">

				<?php while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content' );

				endwhile; ?>

			</div>
            <?php  } ?>

            <?php wellington_pagination(); ?>
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>

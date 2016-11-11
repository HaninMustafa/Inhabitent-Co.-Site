<?php
/**
 * The main blog posts file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text">
						 <?php single_post_title(); ?>
					</h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- Get content -->
				<?php get_template_part( 'template-parts/content' ); ?>



			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
			<!-- get pagination -->
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<!-- get no content template -->
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

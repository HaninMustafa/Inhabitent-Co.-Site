<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="site-main-shop">
		<main id="main" class="" role="main">

		<?php if ( have_posts() ) : ?>
<div class="container">

			<header class="page-header-shop">
				<h1 class="page-title">
        <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				</h1>
					<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->



			<?php /* Start the Loop */ ?>
			<div class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-grid-item">
				<?php
					get_template_part( 'template-parts/content','adventure' );
				?>

			</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>

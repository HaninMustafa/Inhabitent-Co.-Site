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
				<h2>Shop Stuff</h2>
					<!-- // the_archive_title( '<h1 class="page-title">', '</h1>' ); -->
					<?php	$terms = get_terms( 'product_type' );?>
<div class="shop-links">

					<?php foreach ( $terms as $term ) :  ?>

					<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );				?>
							<a href="<?php echo get_term_link( $term ); ?>">
								<?php echo $term->name ?>
							</a>

					<?php endforeach; ?>
				</div>
			</header><!-- .page-header -->



			<?php /* Start the Loop */ ?>
			<div class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="product-grid-item">
				<?php
					get_template_part( 'template-parts/content','product' );
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

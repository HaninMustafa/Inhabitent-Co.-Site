<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="site-main-shop">
		<main id="main" class="site-main" role="main">
<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>


			<article class="single-product-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header id="single-product" class="entry-header single-product-img">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</header><!-- .entry-header -->


				<div class="">
					<div class="single-product-title">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>

				<div class="single-product-price">
					<?php echo CFS()->get( 'product_price' ); ?>
				</div>

				<div class="single-product-content">
					<?php the_content(); ?>
				</div>

					<div class="social-buttons">
					   <a href="" type="" class="black-btn"><i class="fa fa-facebook"></i>Like</a>
					   <a href="" type="" class="black-btn"><i class="fa fa-twitter"></i>Tweet</a>
					   <a href="" type="" class="black-btn"><i class="fa fa-pinterest"></i>Pin</a>
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

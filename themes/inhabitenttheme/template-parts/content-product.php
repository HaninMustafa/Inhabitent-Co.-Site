<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>


<div class="img-wrap-product">
  <a href="<?php echo get_permalink() ?>">
    <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
  </a>
</div>

<div class="product-info">
		<?php the_title('<h2 class="entry-title-product">', '</h2>' ); ?>
<div class="price">
    <?php echo CFS()->get( 'product_price' );?>
  </div>
  </div>

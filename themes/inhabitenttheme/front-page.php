<?php
/**
 * The template for displaying all pages.
 *Template Name: Front Page
 * @package inhabitent_theme_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="hero-area">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo">
    </section>

<!-- shop cards -->
    <section class="shop-cards">
      <div class="container">
      <h2>Shop Stuff</h2>
<div class="products-box">
    <?php  $terms = get_terms( 'product_type' );?>
    <?php foreach ( $terms as $term ) :  ?>
      <div class="product-wrap">
  <?php $url= get_term_link( $term->slug,'product_type'); ?>
        <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" />
        <p><?php echo $term->description?></p>
        <p><a  class="btn" href="<?php echo $url ?>"><?php echo $term->name ?> Stuff</a></p>
      </div>
      <?php endforeach; ?>
    </div>
    </div>
    </section>

<!-- /**adventure Loop*/ -->

<section class="latest-journal">
  <div class="container">
  <h2>Inhabitent Journal</h2>
  <ul class="journal-list">
    <?php $args = array(
   'order' => 'DESC',
   'posts_per_page' => 3,
   'post_type' => 'post', );
$journal_posts =  get_posts( $args );?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<li>
<div class="thumbnail-wrapper">
   <?php the_post_thumbnail( 'original' ); ?>
 </div>
 <div class="journal-info-wrapper">
   <span>
   <?php the_date(); ?>
 </span>/<?php comments_number('0 Comments'); ?>
   </span>
   <h3 class="entry-title">
     <a href="<?php the_permalink(); ?>">
       <?php the_title(); ?>
     </a>
     </h3>
     <a href="<?php the_permalink(); ?>" class="black-btn">Read Entry</a>
 </div>
 <a href="#"></a>
 </li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</section>

<!-- /**adventure Loop(above)*/ -->
<section class="container adventures-area">
  <h2>Latest Adventures</h2>
<ul class="full-flex">
  <li class="full">
    <div class=" story-wrapper img1">
      <div class="story-info">
        <h3 class="entry-title">
          <a href="#">Getting Back to Nature in a Canoe</a>
        </h3>
        <a class="white-btn" href="#">Read More</a>
      </div>
    </div>
  </li>

  <ul class="half-flex">
    <li class="half">
      <div class="story-wrapper img2">
        <div class="story-info">
          <h3 class="entry-title">
            <a href="#">Taking in the View at Big Mountain</a>
          </h3>
          <a class="white-btn" href="#">Read More</a>
        </div>
      </div>
    </li>

<ul class="quarter-flex">
  <li class="quarter">
    <div class="story-wrapper img3">
      <div class="story-info">
        <h3 class="entry-title">
          <a href="#">Taking in the View at Big Mountain</a>
        </h3>
        <a class="white-btn" href="#">Read More</a>
      </div>
    </div>
  </li>
  <li class="quarter">
    <div class=" story-wrapper img4">
      <div class="story-info">
        <h3 class="entry-title">
          <a href="#">Star-Gazing at the Night Sky</a>
        </h3>
        <a class="white-btn" href="#">Read More</a>
      </div>
    </div>
  </li>
</ul>
</ul>
</ul>
<p class="see-more">
  <a class="btn" href="#">More Adventures</a>
</p>
</section>

  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>

<?php
/**
 * The template for displaying the about page.
 *Template Name: About Page
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="about-hero">

</div>

    <div class="about-content">
     <?php while ( have_posts() ) : the_post(); ?>
       <?php get_template_part( 'template-parts/content', 'page' ); ?>

       <section class="">

           <h1 class="title">Our story</h1>
           <?php echo CFS()->get( 'our_story' ); ?>

           <h1 class="title">Our team</h1>
           <?php echo CFS()->get( 'our_team' ); ?>

       </section>
          <?php endwhile; // End of the loop. ?>
        </div>

   </main><!-- #main -->

 </div><!-- #primary -->

<?php get_footer(); ?>

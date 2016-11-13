<?php
/**
 * The template for displaying the about page.
 *Template Name: About Page
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

     <?php while ( have_posts() ) : the_post(); ?>
       <div class="hero-wrap">
       <div class="about-hero" style="linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4))">
       <?php get_template_part( 'template-parts/content', 'page' ); ?>
     </div>
   </div>

     <div class="about-content container">
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

<?php
/**
 * The template for displaying all pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package espace
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
   exit; // Exit if accessed directly.
} ?>

<!-- <article class="post"> -->
      <?php if (have_posts()) : ?>
         <div class="row justify-content-between">
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-10-g-1 col-md-6 col-lg-4 mb-4 overflow-hidden">
               <div class="card img-fluid" style="max-width: 20rem; height: 100%">
               <img src="<?php the_field('photo'); ?>"/>
                  <div class="card-body">
                        <h6 class='card-title' style="text-align:center"><a href="<?php the_permalink(); ?>"><?php the_field('categorie'); ?></a></h6>
                        <p class="card-text mx-3 my-3"><span id='or'>CARLO BEACH</span></p>
                        <p class="card-text mx-3 my-3">ACCESSIBLE PMR VUE MER BORD DE MER</p>
                        <p class="card-text mt-4">à partir de <?php echo(get_field("prix")); ?> € / nuit</p>
                  </div>
                  <a href="#" class="btn">DECOUVREZ</a>
               </div>
            </div>
      <?php endwhile; ?>
         </div><!--/row-->
</div><!--/container-->
         <?php else : ?>
            <h1>Pas d'articles</h1>
         <?php endif; ?>
</section>
<!-- </article> -->
<?php get_footer(); ?>
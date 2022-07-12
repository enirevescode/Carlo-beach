<?php
/*
  Template Name: Full-width
  Template Post Type: post, page, product
*/

// if (!defined('ABSPATH')) {
//    exit; // Exit if accessed directly.
// } ?>

<?php get_header('apropos'); ?>

<div class="container pt-3">
   <h2>Sharing true moments <span id="or">sous le soleil de Monaco</span></h2>
   <div class="deco"></div>

   <div class="row">
      <div class="col-8">
         <p class="open"></p><br></div>
      <div class="col-4"></div>
         <p class="open m-2">Une légende des années 30 revisitée par Rialtoi. Le Carlo Beach offre une expérience de vie résolument moderne, mariant l'esprit des années folles sur la Riviera à l'intimité préservée d'une villégiature de luxe. Avec le spectacle de la mer.</p>
      </div>
   </div><!--/row-->
</div><!--/container-->


<?php get_template_part('./content/apropos_info'); ?>
<br>


<?php get_footer(); ?>
<?php
/*
  Template Name: Full-width
  Template Post Type: post, page, product
*/

// if (!defined('ABSPATH')) {
//    exit; // Exit if accessed directly.
// } ?>

<?php get_header('chbres'); ?>

<div class="container pt-3">
   <h2>Luxe, calme et volupté <span id="or">sous le soleil de Monaco</span></h2>
   <div class="deco"></div>

   <div class="row">
      <div class="col-8">
         <p class="open"></p><br></div>
      <div class="col-4"></div>
         <p class="open m-2">Des chambres aux charmantes loggias aux Suites, tout est affaire de lumière au Monte-Carlo Beach.
            À l’intérieur, un design élégant et moderne, à l’extérieur, le spectacle de la mer.</p>
      </div>
   </div><!--/row-->
</div><!--/container-->


<?php get_template_part('./content/loop_chbres'); ?>
<br>


<?php get_footer(); ?>
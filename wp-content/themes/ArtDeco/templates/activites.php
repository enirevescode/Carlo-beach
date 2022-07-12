<?php
/*
  Template Name: Full-width
  Template Post Type: post, page, product
*/

// if (!defined('ABSPATH')) {
//    exit; // Exit if accessed directly.
// } ?>


<?php get_header('activites'); ?>
<?php get_template_part('./content/encart_activites'); ?>

<?php get_template_part('./content/loop_activites'); ?>
<br>

<?php get_footer(); ?>
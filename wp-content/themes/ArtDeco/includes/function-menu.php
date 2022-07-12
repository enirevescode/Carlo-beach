<?php

///// Retirer les éléments inutiles de wp /////

function sgtheme_remove_menu_pages() {
  //remove_menu_page( 'tools.php' );
   remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'sgtheme_remove_menu_pages' );

// Register Custom Navigation Walker
require_once('bootstrap_5_wordpress-navbar_walker_main.php');
<?php

// constante pour la version.
define('sgtheme_version', '5.1.1');
//chargement de scripts
//chargement dans le front-end
function sgtheme_scripts()
{
//==========================================
  //======= chargement des styles =========
//==========================================

  wp_enqueue_style(
     'sgtheme_bootstrap-style',
     get_template_directory_uri() . '/css/bootstrap.min.css',
     array(), sgtheme_version, 'all');
  //lien avec style
  wp_enqueue_style(
     'parent-style',
     get_template_directory_uri() . '/style.css',
     array('sgtheme_bootstrap-style'), sgtheme_version, 'all');

    //  wp_enqueue_style(
    //     'sgtheme_font-awesome',
    //     get_template_directory_uri() . '/css/font-awesome.min.css',
    //     array(), sgtheme_version, 'all');
  
// chargement des scripts
// le menu hamburger
  wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), sgtheme_version, true);
  
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), sgtheme_version, true);

  wp_enqueue_script('sgtheme_script', get_template_directory_uri() . '/js/sgtheme.js', array('jquery', 'bootstrap-js'), sgtheme_version, true);
}

add_action('wp_enqueue_scripts', 'sgtheme_scripts');



// chargement dans l'admin. de wp
function sgtheme_admin_scripts()
{

// chargement des styles dans l'admin
  wp_enqueue_style('sgtheme_bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), sgtheme_version);
}
add_action('admin_init', 'sgtheme_admin_scripts');

/**********************************************/
///////////////// UTILITAIRES
/**********************************************/


// retirer la version de wp pour + de sécurité

// enlève les guillemets à la française
//remove_filter ('the_content', 'wptexturize');

// support du titre pour seo
	add_theme_support('title-tag');




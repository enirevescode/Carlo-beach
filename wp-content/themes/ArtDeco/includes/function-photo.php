<?php

/**********************************************/
///////////////// UTILITAIRES
/**********************************************/
function sgtheme_setup()
{
// support vignettes= images à la une
	add_theme_support('post-thumbnails');

// taille image card smartphone
	add_image_size('smartph', 358, 200, true);
	add_image_size('slider', 1030, 650, true );
}
// activation de l'onglet 'menu'...
	register_nav_menu('main-menu', 'Main menu');


add_action('after_setup_theme', 'sgtheme_setup');
// prise en charge des images mises en avant
add_theme_support('post-thumbnails');
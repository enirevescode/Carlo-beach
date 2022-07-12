<?php

 function sgtheme_remove_menu_pages() {
	//remove_menu_page( 'tools.php' );
   remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'sgtheme_remove_menu_pages' );

define('sgtheme_version', '1');
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
function sgtheme_setup()
{
// support vignettes= images à la une
	add_theme_support('post-thumbnails');

// taille image card smartphone
	add_image_size('smartph', 443, 221, true);
	add_image_size('slider', 1030, 650, true );

// retirer la version de wp pour + de sécurité
	remove_action('wp_head', 'wp_generator');
// enlève les guillemets à la française
//remove_filter ('the_content', 'wptexturize');

// support du titre pour seo
	add_theme_support('title-tag');

// activation de l'onglet 'menu'...
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Menu en bas de site'
));


add_action('after_setup_theme', 'sgtheme_setup');

	/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Custom Navigation Walker
	require_once('includes/bootstrap_5_wordpress-navbar_walker_main.php');
}

/***********************************************************/
// faire apparaître les widgets et sidebares ds le dasboard
/***********************************************************/

// function sgtheme_widgets_init(){
// 	register_sidebar(array(
// 		'name' => 				'Footer Widget Zone',
// 		'description' => 		'Widget affichés dans le footer : 4 au max',
// 		'id' => 					'Widgetizd-footer',
// 		'before_widget' => 	'<div id="%1$s" class="col-xs-12 col-sm-6 col-md-3 %2$s"><div class="inside-widget">',//on rend responsive
// 		'after_widget' => 	'</div></div>',
// 		'before_title' => 	'<h2 class="h3 text-center">',
// 		'after_title' => 		'</h2>',
// 	));
// }
// add_action('widgets_init', 'sgtheme_widgets_init');


/**********************************************/
///Custom Post Type slider ds galerie photos //
/**********************************************/

function sgtheme_slider_init () {
	$labels = array(
		'name' => 'Carousel',
		'singular_name' => 'Image',
		'add_new' => 'Ajoutez 1 image',
		'edit_item' => 'Modifiez',
		'new_item' => 'Nouveau',
		'all_items' => 'Voir liste',
		'view_item' => 'Voir l\' élément',
		'search_item' => 'Cherchez 1 image',
		'not_found' => 'Aucun élément trouvé',
		'not_found_in_trash' => 'Aucun élément dans la corbeille',
		'menu_name' => 'Slider'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'rewite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierachical' => false,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-star-filled',
		'publicly_queryable' => false,
		'show_in_nav_menus' => true,
		'exlude_from_search' => true,
		'supports' => array ('title', 'page-attributes', 'thumbnail')
	);
register_post_type('sgtheme_slider', $args);
} //end function sgdelcio_slider_init

add_action('init', 'sgtheme_slider_init');

/*******************************************************/
////AJOUT IMAGE ET RANG D'APPARITION DS LE CPT SLIDER///
/*****************************************************/

add_filter('manage_edit-sgtheme_slider_columns', 'sgtheme_col_change'); // cela ajout des champs de noms de colonnes.
function sgtheme_col_change($columns) {
	$columns['sgtheme_slider_image_order'] = "ordre";
	$columns['sgtheme_slider_image'] = "image affichée";

	return $columns;
}
	add_action('manage_sgtheme_slider_posts_custom_column', 'sgtheme_content_show', 10,2);
function sgtheme_content_show ($column, $post_id) {
		global $post;
		if($column == 'sgtheme_slider_image') {
			echo the_post_thumbnail(array(100,100));
			}
		if($column == 'sgtheme_slider_image_order') {
			echo $post->menu_order;
		}
}

/************************************************************/
///tri auto sur l'ordre ds la colonne admin pr le CPT SLIDER/
/**********************************************************/

function sgtheme_change_slides_order($query) {
	global $post_type, $pagenow;

	if($pagenow == 'edit.php' && $post_type == 'sgtheme_slider') {
		$query-> query_vars['orderby'] = 'menu_order';
		$query-> query_vars['order'] = 'asc';
	}
}
add_action('pre_get_posts', 'sgtheme_change_slides_order');


/************************************************************/
///                 CPT CHAMBRES                            /
/**********************************************************/
//require_once(//get_template_directory() . '/includes/cpt_chbres.php');


	function my_single_template($single) {
		// Récupère la variable globale $post qui contient les informations de l'article demandé
		global $post;
	
		// Récupère le chemin vers les fichiers de style du thème, ce qui nous donne le chemin exact du dossier du thème enfant
		// auquel nous ajoutons le dossier "/single" dans lequel se trouveront nos modèles spécifiques à chaque catégorie
		$single_path = get_stylesheet_directory() . '/single';
	 
		// Cette boucle traverse toutes les catégories de l'article actuel
		foreach((array)get_the_category() as $cat) :
					
				  // Pour chaque catégorie le système va voir si un fichier existe pour cette catégorie
				  // Par exemple si cet article appartient à la catégorie "SEO" dont le slug est "seo"
				  // cette fonction regardera si le fichier "/single/single-seo.php" existe.
				  // Si ce fichier existe c'est cette valeur qui est retournée et WordPress utilisera ce modèle
				  if(file_exists($single_path . '/single-' . $cat->slug . '.php'))
				  return $single_path . '/single-' . $cat->slug . '.php';
		  
		endforeach;
	}
	
	// Enregistrement du filtre
	add_filter('single_template', 'my_single_template');

	
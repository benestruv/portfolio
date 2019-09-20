<?php

require_once get_template_directory() . '/inc/scripts.php';
require_once get_template_directory() . '/inc/disableGutenberg.php';

add_theme_support('post-thumbnails');

require_once get_template_directory() . '/wp_bootstrap_navwalker.php';

// ADD YOUR FILES HERE TO "AUTOLOAD" ORDER MATTERS
$files = ['utils', 'queries', 'common'];
foreach ($files as $file) {
    require(get_template_directory() . '/includes/' . $file . '.php');
}

// POST TYPE \\
add_action('init','register_portfolio');
function register_portfolio()
{
	// Les labels
	$labels = array (
		'name' 			=> 'Portfolio',
		'singular_name' => 'Réalisation',
		'all_items'           => __( 'Toutes les réalisations'),
		'view_item'           => __( 'Voir les réalisations'),
		'add_new_item'        => __( 'Ajouter une nouvelle réalisation'),
		'add_new'             => __( 'Ajouter une réalisation'),
		'edit_item'           => __( 'Editer la réalisation'),
		'update_item'         => __( 'Modifier la réalisation'),
		'search_items'        => __( 'Rechercher une réalisation'),
		'not_found'           => __( 'Réalisation non trouvée'),
		'not_found_in_trash'  => __( 'Réalisation non trouvée dans la corbeille'),
		'menu_name'			=> 'Portfolio'
		);
		
		// 
		
		$args = array(
			'labels'              => $labels,
			'slug' => 'realisation',
			'description' => 'realisation',
			'url' => 'realisation',
			'menu_icon'			  => 'dashicons-images-alt2',
			'public'              => true,
			'public_queryable'              => true,
			'rewrite'			  => array( 'slug' => 'portfolio'),
			'capability-type' 	  => 'post',
			'show_in_rest' 		  => true,
			'hierarchical'        => false,
			'has_archive'         => true,
			'menu-position' 	  => 5,
			'supports'            => array( 'title', 'editor', 'author', 'thumbnail' ),
		);
		
		// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
		register_post_type( 'portfolio', $args );
	}
		

?>
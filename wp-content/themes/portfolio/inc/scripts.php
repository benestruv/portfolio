<?php 
/*---------------------------------------------------------------------------------*/
/*  SCRIPTS
/*---------------------------------------------------------------------------------*/
function portfolio_scripts() {
    wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ('jquery', false, false));
    wp_enqueue_style('bootstrapcss','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/css/main.css', array(), filemtime(get_template_directory() . '/dist/css/main.css'), false);
    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    //wp_enqueue_script ('carousel', get_template_directory_uri().'/owlcarousel/owl.carousel.min.js');
    //wp_enqueue_script ('pagination', get_template_directory_uri().'/js/libs/pagination.js');



    // AJAX
    wp_enqueue_script ('script', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0', true );
    wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
    // Burger Menu
    //wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/js/libs/burger-menu.js', array( 'jquery' ) );
}

add_action('wp_enqueue_scripts', 'portfolio_scripts');
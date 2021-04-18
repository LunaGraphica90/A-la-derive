<?php

/**************Pour ajouter les liens des styles CSS au head**************/
function register_styles(){
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style("style", get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_style('font-OpenSans', 'href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&display=swap');
    wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
}

add_action( 'wp_enqueue_scripts', 'register_styles' );


/**************Pour personnaliser 1 class CSS sur un lien <a>**************/
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

/**************Pour personnaliser 1 class CSS sur un li <li>**************/
function add_menu_list_item_class($classes, $item, $args) {
if (property_exists($args, 'list_item_class')) {
    $classes[] = $args->list_item_class;
}
return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/**************Limitation du nombre de mots sur le résumé de la page d'accueil**************/
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**************Personnalisation du moteur de recherche**************/
function your_search_form( $form ) {
  $form = 
'   <form role="search" method="get" id="search-form" class="input-group mb-3" action="' . home_url( '/' ) . '" >
    <input type="search" class="form-control" value="' . get_search_query() . '" name="s" id="s" placeholder="Rechercher un article..." />
    <input type="submit" id="searchsubmit" class="btn btn-outline-secondary" value="Allez" />
    </form>';
  return $form;
}

add_filter( 'get_search_form', 'your_search_form' );



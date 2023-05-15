<?php
function ajouter_styles() {
wp_enqueue_style(
  'style-princ',
  get_template_directory_uri() . '/style.css',
  array(),
  filemtime(get_template_directory() . '/style.css'),
); 

wp_enqueue_style("style-google-font",

"https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Tapestry&display=swap",
  false
);
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/*Enregistrement.................................*/


  function enregistrement_nav_menu()

  {
    register_nav_menus(array(
      'principal' => 'Menu principal',
      'footer'  => 'Menu pied de page', 
    ));
  }
  add_action('after_setup_theme', 'enregistrement_nav_menu', 0);

/*...........................................Modifications des choix de cours */
  function personnalisation_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'cours' par l'identifiant de votre menu
    if($args->menu == 'cours') {
// Modifier la longueur du titre en fonction de vos besoins
$sigle = substr($title,0,7);
$title = substr($title,7);
$title = "<code>".$sigle ."</code>"."<p>". wp_trim_words($title, 3, ' ... ')."<p>";
}

return $title;
}
add_filter('nav_menu_item_title', 'personnalisation_menu_item_title', 10, 4);
/*----------------------------------------- add_theme_support() */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',
                    array(
                        'height' => 150,
                        'width'  => 150,
) );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if (    $query->is_home()
            && $query->is_main_query()
            && ! is_admin() ) {
      $query->set( 'category_name', '4w4' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );


/* -----------------------------------------Enregistrer le sidebar  ---*/

function enregistrer_sidebar() {
  register_sidebar( array(
      'name' => __( 'Footer 1', '4w4-eddy-martin' ),
      'id' => 'footer_1',
      'description' => __( 'Une zone  afficher des widgets dans le footer.', '4w4-eddy-martin' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ) );

  register_sidebar( array(
      'name' => __( 'Footer 2', '4w4-Yassine-Diallo' ),
      'id' => 'footer_2',
      'description' => __( 'Une zone  afficher des widgets dans le footer.', '4w4-Yassine-Diallo' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ) );

}
add_action( 'widgets_init', 'enregistrer_sidebar' );

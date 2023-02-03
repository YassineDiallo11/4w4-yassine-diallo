<?php
function ajouter_styles() {
wp_enqueue_style(
  'style-princ',
  get_template_directory_uri() . '/style.css',
  array(),
  filemtime(get_template_directory() . '/style.css'),
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


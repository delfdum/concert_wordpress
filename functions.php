<?php
// fonction pour lier le js:
function theme_js(){
    wp_enqueue_script( 'main',
    get_template_directory_uri() . '/assets/js/main.js',
    array() );
    }
add_action( 'wp_enqueue_scripts', 'theme_js' );

// fonction déclaration menus personnalisés
function delfConcert_setup() {
  register_nav_menus(
    array(
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu de pied de page',
      'social' => 'Menu des réseaux sociaux'
    )
  );

// active fonctionnalité WP qui prend en charge le logo personnalisé
  add_theme_support('custom-logo');
  add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'delfConcert_setup');

// fonction enregistrement zones de widgets
function delfConcert_init_widgets() {
  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Zone de widgets 1',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-2',
      'name'  => 'Zone de widgets 2',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-3',
      'name'  => 'Zone de widgets 3',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-4',
      'name'  => 'Zone de widgets 4',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget-section">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title' => '</h4>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-sidebar',
      'name'  => 'Zone de widgets de la barre latérale',
      'description' => '<p>Description de la zone de widgets</p>',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init', 'delfConcert_init_widgets');

require get_template_directory() . '/inc/customizer.php';

?>

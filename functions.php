<?php

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}


function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'js/bootstrap.min.js', $dependencies, '3.3.6', true );
}


add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );


function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  }

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

?>

<?php

function mdb_enqueue_styles() {
    wp_register_style('mdb', get_template_directory_uri() . '/css/mdb.css' );
    $dependencies = array('mdb');
    wp_enqueue_style( 'mdb-style', get_stylesheet_uri(), $dependencies ); 
}

add_action( 'wp_enqueue_scripts', 'mdb_enqueue_styles' );

?>

<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }

 add_action( 'init', 'register_my_menus' );

 ?>
 


<?php

 wp_enqueue_script( 'navjs', get_template_directory_uri() . '/js/nav.js', array(), true );

 ?>
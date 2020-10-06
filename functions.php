<?php 

wp_enqueue_style( 'style', get_stylesheet_uri() );

?>

<?php

function bscss_enqueue_styles() {
    wp_register_style('bscss', 'https://cdn.jdvirtual.co.uk/cdn/css/bootstrap.css' );
    $dependencies = array('bscss');
    wp_enqueue_style( 'bscss-style', 'https://cdn.jdvirtual.co.uk/cdn/css/bootstrap.css', $dependencies ); 
}

add_action( 'wp_enqueue_scripts', 'bscss_enqueue_styles' );

?>

<?php

function mdb_enqueue_styles() {
    wp_register_style('mdb', 'https://cdn.jdvirtual.co.uk/cdn/css/mdb.css' );
    $dependencies = array('mdb');
    wp_enqueue_style( 'mdb-style', 'https://cdn.jdvirtual.co.uk/cdn/css/mdb.css', $dependencies ); 
}

add_action( 'wp_enqueue_scripts', 'mdb_enqueue_styles' );

?>


<?php

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', 'https://cdn.jdvirtual.co.uk/cdn/JS/bootstrap.js', $dependencies, '3.3.6', true );
}

function themebs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrapbundle', 'https://cdn.jdvirtual.co.uk/cdn/JS/bootstrap.bundle.js', array( 'jquery' ) );
  }

  function custom_enqueue_scripts() {
    wp_enqueue_script( 'script', 'https://cdn.jdvirtual.co.uk/cdn/farakunku/js/nav-scroll.js',  $dependencies, '3.3.6', true );
  }

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

?>
<?php

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

?>



<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'Admin' => __( 'Admin' ),
      'Sale' => __( 'Sale' )

     )
   );
 }

 add_action( 'init', 'register_my_menus' );

 ?>
 


<?php

 wp_enqueue_script( 'navjs', 'https://cdn.jdvirtual.co.uk/cdn/JS/nav-scroll.js', array(), true );

 ?>

<?php
  function wpb_load_fa() {
 
    wp_enqueue_script( 'wpb-fa', 'https://kit.fontawesome.com/1532b4fa41.js', array(), '1.0.0', true );
     
    }
     
    add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
?>



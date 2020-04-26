<?php


// if( !defined(THEME_IMG_PATH)){
//     define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img' );
//    }

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )

     )
   );
 }
 add_action( 'init', 'register_my_menus' );

function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('carousel');

    wp_register_style('themify', get_template_directory_uri() . '/css/themify-icons.css', array(), 1, 'all');
    wp_enqueue_style('themify');

    wp_register_style('flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), 1, 'all');
    wp_enqueue_style('flaticon');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('magnific');

    wp_register_style('fontawesome', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs(){

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.1.min.js', array(), 1, 1, 1);
    wp_enqueue('jquery');

    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), 1, 1, 1);
    wp_enqueue('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue('bootstrap');

    wp_register_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), 1, 1, 1);
    wp_enqueue('magnific');

    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue('carousel');

    wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), 1, 1, 1);
    wp_enqueue('easing');

    wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), 1, 1, 1);
    wp_enqueue('masonry');

    wp_register_script('masonry2', get_template_directory_uri() . '/js/masonry.pkgd.js', array(), 1, 1, 1);
    wp_enqueue('masonry2');

    wp_register_script('nice', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), 1, 1, 1);
    wp_enqueue('nice');

    wp_register_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), 1, 1, 1);
    wp_enqueue('counterup');

    wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), 1, 1, 1);
    wp_enqueue('waypoints');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue('custom');

}



/*

<!--form validation js-->
<script src="js/jquery.nice-select.min.js"></script>
 <script src="js/contact.js"></script>
 <script src="js/jquery.ajaxchimp.min.js"></script>
 <script src="js/jquery.form.js"></script>
 <script src="js/jquery.validate.min.js"></script>
 <script src="js/mail-script.js"></script>
<!-- counter js -->

*/

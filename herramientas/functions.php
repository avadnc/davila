<?php
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function herramientas_style()
{

    //carga de estilos wordpress
    wp_enqueue_style('google', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap-4.2.1/css/bootstrap.min.css');
    wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/vendor/fontawesome-5.6.1/css/all.min.css');
    wp_enqueue_style('stroyka', get_stylesheet_directory_uri() . '/fonts/stroyka/stroyka.css');



    /* <!--HEAD-->

    <!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>svg4everybody();</script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
    */

    // registro de scripts wordpress
    wp_register_script('jquery');
    wp_register_script('jquery');
    // carga de scripts wordpress
    wp_enqueue_script();
}
add_action('wp_enqueue_scripts', 'herramientas_style');

/** Image Sizes **/
add_image_size('sml_size', 300);
add_image_size('mid_size', 600);
add_image_size('lrg_size', 1200);
add_image_size('sup_size', 2400);

/**Custom Logo **/
add_theme_support('custom-logo');
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

function herramientas_menu()
{
    // menus navegacion
    register_nav_menus(array(
        'header_menu_left' => __('Menu Header Left', 'herramientas'),
        'header_menu_right' => __('Menu Header Right', 'herramientas'),
        'social_menu' => __('Menu Sociales', 'herramientas')
    ));
}

add_action('init',  'herramientas_menu');

/**Widgets**/

function herramientas_widget_init()
{
    register_sidebar(array(
        'name' => __('Nosotros_Columna_Izq', 'herramientas'),
        'id' => 'nosotros_izq',
        'description' => __('Añadir breve descripcion Columna Izq'),
        'before_widget' => '<div class="big">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => __('Nosotros_Columna_Der', 'herramientas'),
        'id' => 'nosotros_der',
        'description' => __('Añadir breve descripcion Columna Der'),
        'before_widget' => '<div class="big">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => __('footer', 'herramientas'),
        'id' => 'footer',
        'description' => __('Añadir breve descripcion para el footer'),
        'before_widget' => '<div class="big"  style="text-align:right;margin: 0">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => __('search', 'herramientas'),
        'id' => 'search',
        'description' => __('panel para la búsqueda'),
        'before_widget' => '<div class="busqueda">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'herramientas_widget_init');

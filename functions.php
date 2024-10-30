<?php

// Enqueue Styles and Scripts
function mytheme_enqueue_assets() {
    // Enqueue Font Awesome (latest version)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap', array(), null);

    // Enqueue Bootstrap CSS (version 5)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');

    // Enqueue Main Theme Style
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');

    // Enqueue Bootstrap JS Bundle with Popper (version 5)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

// Add Bootstrap Classes to Primary Menu Items
function add_bootstrap_classes_to_nav($classes, $item, $args) {
    if ($args->theme_location == 'primary-menu') {
        $classes[] = 'nav-item'; 
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_bootstrap_classes_to_nav', 10, 3);

function add_bootstrap_link_class($atts, $item, $args) {
    if ($args->theme_location == 'primary-menu') {
        $atts['class'] = 'nav-link text-white'; 
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_bootstrap_link_class', 10, 3);

// Theme Support Features
function theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_support');

// Register Navigation Menus
function register_mytheme_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text_domain'),
        'footer-menu' => __('Footer Menu', 'text_domain')
    ));
}
add_action('init', 'register_mytheme_menus');

?>

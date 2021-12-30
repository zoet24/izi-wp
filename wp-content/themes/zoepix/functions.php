<?php

// Dynamically add in title tag support
function zoepix_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'zoepix_theme_support');

// Setup menu locations
function zoepix_menus() {

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'zoepix_menus');

// Dynamically add in style sheets
function zoepix_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    // Add zoepix-bootstrap into the array box to show that zoepix-style is dependent on zoepix-bootstrap, so zoepix-bootstrap will load first
    wp_enqueue_style('zoepix-css-style', get_template_directory_uri() . "/assets/css/style.css", array('zoepix-css-bootstrap'), $version, 'all');
    wp_enqueue_style('zoepix-css-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('zoepix-css-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'zoepix_register_styles');

// Dynamically add in script sheets
function zoepix_register_scripts(){

    wp_enqueue_script('zoepix-js-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('zoepix-js-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('zoepix-js-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('zoepix-js-script', get_template_directory_uri() . "/assets/js/main.css", array(), '3.4.1', true);
    
}

add_action( 'wp_enqueue_scripts', 'zoepix_register_scripts');

?>
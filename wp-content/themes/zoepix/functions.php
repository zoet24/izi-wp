<?php

// Imports
include("functions.blocks.php");
include("functions.media.php");
include("functions.options.php");
include("functions.walker.php");

// Classes


// Remove actions
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


// Dynamically add in title tag support
function zoepix_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'zoepix_theme_support');


// Dynamically add in style sheets
function zoepix_register_styles(){

    // Add zoepix-bootstrap into the array box to show that zoepix-style is dependent on zoepix-bootstrap, so zoepix-bootstrap will load first
    wp_enqueue_style('zoepix-css-style', get_template_directory_uri() . "/dist/css/style.css");
    // wp_enqueue_style('zoepix-css-colours', get_template_directory_uri() . "/dist/css/colors.css", array(), $version, 'all');
    wp_enqueue_style('zoepix-css-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'zoepix_register_styles');


// Dynamically add in script sheets
function zoepix_register_scripts(){

    wp_enqueue_script('zoepix-js-script', get_template_directory_uri() . "/src/scripts/main.js", array(), '1.0', true);
    
}

add_action( 'wp_enqueue_scripts', 'zoepix_register_scripts');


// Setup menu locations
function zoepix_menus() {

    $locations = array(
        'main_menu' => "Main Menu",
        'footer_menu' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'zoepix_menus');


// Add logo to WP homepage
function my_login_logo_one()
{
?>
    <!-- <style type="text/css">
        body.login div#login h1 a {
            background-image: url('/app/themes/my-bones/images/logos/logo.png');
            background-size: contain;
            width: auto;
            height: 90px;
        }
    </style> -->
<?php
}

add_action('login_enqueue_scripts', 'my_login_logo_one');


?>
<?php

// Imports - Blocks
include("blocks/config/containers.php");
include("blocks/config/typography.php");

include("blocks/media/gallery-full.php");
include("blocks/media/gallery-primary.php");
include("blocks/media/gallery-secondary.php");


// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'attach_header_options' );
function attach_header_options() {
    Container::make( 'theme_options', __( 'Header Options' ) )
        ->add_fields( array(
            Field::make( 'image', 'header_logo_mobile', 'Logo Mobile' ),
            Field::make( 'image', 'header_logo_desktop', 'Logo Desktop' ),
        ) );
}

add_action( 'carbon_fields_register_fields', 'attach_footer_options' );
function attach_footer_options() {
    Container::make( 'theme_options', __( 'Footer Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'footer_email', 'Email Address' ),
            Field::make( 'text', 'footer_phone', 'Phone Number' ),
            Field::make( 'rich_text', 'footer_copyright', 'Copyright' ),
            Field::make( 'complex', 'footer_socials', __( 'Social Media Links' ) )
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'image', 'footer_socials_icon', __('Social Icon') ),
                    Field::make( 'text', 'footer_socials_link', __( 'Social Link' ) )
                        ->set_attribute( 'type', 'url' )
                ) ),
        ) );
}

add_action( 'carbon_fields_register_fields', 'attach_404_options' );
function attach_404_options() {
    Container::make( 'theme_options', __( '404 Options' ) )
        ->add_fields( array(
            Field::make( 'text', '404_text', '404 Text' )
        ) );
}

// Include components
function component($name, $args = [], $echo = true)
{
    $loc = str_replace('', '', __DIR__) . "/components/{$name}.php";

    if (!file_exists($loc)) {
        echo "component {$loc} not found";
        return false;
    }

    if (!$echo) ob_start();

    if (!empty($args) && is_array($args)) {
        if (!isset($args['class'])) $args['class'] = '';
        extract($args);
    }

    include($loc);
    if (!$echo) return ob_get_clean();
}

?>
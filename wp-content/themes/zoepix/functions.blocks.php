<?php

// Imports
// include("blocks/block-test.php");
include("blocks/media/gallery-primary.php");


// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
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
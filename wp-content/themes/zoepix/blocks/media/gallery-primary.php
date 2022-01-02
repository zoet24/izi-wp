<?php

// A primary gallery block where photos are arranged in a grid and link through to secondary gallery blocks

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixGalleryPrimary');
function zoepixGalleryPrimary() {
    // Block name and fields
    Block::make( __( 'Zoepix: Gallery Primary' ) )
	->add_fields( array(
        Field::make( 'complex', 'gallery_images', __( 'Gallery Images' ) )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'caption', __( 'Caption' ) ),
                Field::make( 'image', 'image', __( 'Image' ) ),
            ) )
	) )
    
    // Block definition
    ->set_icon('format-gallery')
    ->set_keywords([__('Gallery, Images, Grid') ])
    ->set_description(__('A responsive gallery of images arranged in columns'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $collections = $fields['gallery_images'];

		?>

        <section class="gallery-primary">
            <div class="gallery-primary__container">
                <ul class="gallery-primary__image-tiles">
                    <?php foreach ($collections as $collection) : ?>
                        <li class="gallery-primary__image-tile">
                            <? echo $collection['title']; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

		<?php
	} );
}
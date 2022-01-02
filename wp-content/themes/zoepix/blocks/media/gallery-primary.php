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
                Field::make( 'text', 'caption', __('Caption') ),
                Field::make( 'image', 'image', __('Image') ),
                Field::make( "multiselect", "image_size", "Image Size" )
                    ->add_options( array(
                        'regular' => 'Regular',
                        'horizontal' => 'Horizontal',
                        'vertical' => 'Vertical',
                        'large' => 'Large',
                    ) ),
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
                <div class="gallery-primary__image-tiles">
                    <?php foreach ($collections as $collection) : ?>
                        <a class="gallery-primary__image-tile" href="#">
                            <div class="gallery-primary__image-tile-content">
                                <img src="<?php echo wp_get_attachment_image_url($collection['image']); ?>" alt="" class="gallery-primary__image-tile-image">
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

		<?php
	} );
}
<?php

// A secondary gallery block where photos are arranged in a carousel

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixGallerySecondary');
function zoepixGallerySecondary() {
    // Block name and fields
    Block::make( __( 'Zoepix: Gallery Secondary' ) )
	->add_fields( array(
        Field::make( 'media_gallery', 'images', __('Images'))
            ->set_type( array( 'image' ) )
	) )
    
    // Block definition
    ->set_icon('format-gallery')
    ->set_keywords([__('Gallery, Images, Carousel') ])
    ->set_description(__('A responsive gallery of images arranged in a carousel'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $images = $fields['images'];

		?>

        <section class="gallery-secondary">
            <div class="gallery-secondary__container carousel__sliders">
                <div class="carousel__slider">
                    <?php foreach ($images as $image) : ?>
                        <img src="<?php echo wp_get_attachment_image_url($image, 'galleryPrimary'); ?>" alt="" class="">                            
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

		<?php
	} );
}
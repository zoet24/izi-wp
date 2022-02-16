<?php

// A fullscreen gallery block where a selection of photos play automatically

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixGalleryFullscreen');
function zoepixGalleryFullscreen() {
    // Block name and fields
    Block::make( __( 'Zoepix: Gallery Fullscreen' ) )
	->add_fields( array(
        Field::make( 'complex', 'gallery_images', __( 'Gallery Images' ) )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'image', __('Image') ),
            ) ),
        Field::make( 'select', 'remove_padding', 'Remove padding' )
            ->add_options( array(
                'yes' => 'Yes',
                'no' => 'No'
            ) )
            ->set_default_value( 'no' )
            ->set_help_text( 'Select yes to remove padding from top and bottom of section' )
	) )
    
    // Block definition
    ->set_icon('format-gallery')
    ->set_keywords([__('Gallery, Images, Grid') ])
    ->set_description(__('A fullscreen gallery of images that autoplays in a carousel'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $images = $fields['gallery_images'];
        $removePadding = $fields['remove_padding'];

		?>

        <section class="gallery-fullscreen <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="gallery-fullscreen__container">
                <div class="gallery-fullscreen__slider carousel-full__slider">
                    <?php foreach ($images as $image) : ?>
                        <?php if ($image['image']) : ?>
                            <div class="gallery-fullscreen__slide carousel-full__slide">
                                <img class="gallery-fullscreen__slide-image carousel-full__slide-image" src="<?php echo wp_get_attachment_image_url($image['image'], 'galleryPrimary'); ?>" alt="">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

		<?php
	} );
}
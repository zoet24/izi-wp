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
                Field::make( 'text', 'link', __( 'Page Link' ) )
                    ->set_attribute( 'type', 'url' )
                    ->set_help_text('Enter the URL slug for the linked page')
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
    ->set_description(__('A responsive gallery of images arranged in columns'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $collections = $fields['gallery_images'];
        $removePadding = $fields['remove_padding'];

		?>

        <section class="gallery-primary <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="gallery-primary__container">
                <div class="gallery-primary__image-tiles">
                    <?php foreach ($collections as $collection) : ?>
                        <?php if ($collection['image']) : ?>
                            <a href="<?php echo esc_html( $collection['link'] ); ?>" class="gallery-primary__image-tile gallery-primary__image-tile--<?php echo ($collection['image_size'][0]); ?>">
                                <img src="<?php echo wp_get_attachment_image_url($collection['image'], 'galleryPrimary'); ?>" alt="<?php echo esc_html( $collection['caption'] ); ?>" class="gallery-primary__image-tile-image">
                                <div class="gallery-primary__image-tile-overlay">
                                    <div class="gallery-primary__image-tile-overlay-border">
                                        <h4 class="gallery-primary__image-tile-caption"><?php echo esc_html( $collection['caption'] ); ?></h4>
                                    </div>
                                </div>
                            </a>
                        <?php else: ?>
                            <div class="gallery-primary__image-tile gallery-primary__image-tile--spacer gallery-primary__image-tile--<?php echo ($collection['image_size'][0]); ?>">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

		<?php
	} );
}
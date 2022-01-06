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
            ->set_type( array( 'image' ) ),
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
    ->set_keywords([__('Gallery, Images, Carousel') ])
    ->set_description(__('A responsive gallery of images arranged in a carousel'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $images = $fields['images'];
        $removePadding = $fields['remove_padding'];

		?>

        <section class="gallery-secondary <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="gallery-secondary__container">
                <div class="carousel__slider">
                    <?php foreach ($images as $index => $image) : ?>
                        <div class="carousel__slide">
                            <div><?php echo ($index + 1); ?></div>
                            <!-- Image title -->
                            <div><?php get_the_title($image); ?></div>
                            <!-- Image caption -->
                            <div><?php echo wp_get_attachment_caption($image); ?></div>
                            <!-- Image desription -->
                            <div><?php echo (get_post($image)->post_content); ?></div>
                            <img class="carousel__slide-image" class="carousel__slide" src="<?php echo wp_get_attachment_image_url($image, 'galleryPrimary'); ?>" alt="">
                        </div>                            
                    <?php endforeach; ?>
                </div>
                <!-- Flkty controls -->
                <?php if (count($images) > 1) : ?>
                    <div class="carousel__controls">
                        <div class="carousel__controls--buttons">
                            <button class="carousel__button carousel__prev-next-button carousel__prev" type="button" aria-label="Previous">
                                <?= getSVG('flkty-left.svg') ?>
                            </button>
                            <button class="carousel__button carousel__prev-next-button carousel__next" type="button" aria-label="Next">
                                <?= getSVG('flkty-right.svg') ?>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

		<?php
	} );
}
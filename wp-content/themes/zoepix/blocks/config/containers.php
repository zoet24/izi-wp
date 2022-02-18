<?php

// A block showing all containers

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixContainers');
function zoepixContainers() {
    // Block name and fields
    Block::make( __( 'Zoepix: Containers' ) )
	->add_fields( array(
        Field::make( 'select', 'remove_padding', 'Remove padding' )
            ->add_options( array(
                'yes' => 'Yes',
                'no' => 'No'
            ) )
            ->set_default_value( 'no' )
            ->set_help_text( 'Select yes to remove padding from the bottom of the section' )
	) )
    
    // Block definition
    ->set_icon('admin-tools')
    ->set_keywords([__('Config, Container') ])
    ->set_description(__('A block showing all containers'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $removePadding = $fields['remove_padding'];

		?>

        <section class="containers <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="containers__container containers__container--full"> Container - Full</div>
            <div class="containers__container containers__container--full-no-gutters"> Container - Full, no gutters</div>
        </section>

		<?php
	} );
}
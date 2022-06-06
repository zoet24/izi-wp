<?php

// A block showing all buttons

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixButtons');
function zoepixButtons() {
    // Block name and fields
    Block::make( __( 'Zoepix: Buttons' ) )
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
    ->set_keywords([__('Config, Buttons') ])
    ->set_description(__('A block showing all buttons'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $removePadding = $fields['remove_padding'];

		?>

        <section class="buttons <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="buttons__button"> 
                <?= component('buttons/button-primary', [
                    'colour' => 'white',
                    'link'   => '#',
                    'text'   => 'Button text!',
                ]) ?>
            </div>
            <div class="buttons__button"> 
                <?= component('buttons/button-secondary', [
                    'colour' => 'white',
                    'link'   => '#',
                    'text'   => 'Button text!',
                ]) ?>
            </div>
        </section>

		<?php
	} );
}
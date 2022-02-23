<?php

// A list of all typography elements

// Carbon Fields init
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('carbon_fields_register_fields', 'zoepixTypography');
function zoepixTypography() {
    // Block name and fields
    Block::make( __( 'Zoepix: Typography' ) )
	->add_fields( array(
        Field::make( 'text', 'text', __('Text') ),
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
    ->set_keywords([__('Heading, Text, Title, Config') ])
    ->set_description(__('A list of all typography elements'))

    // Block HTML
	->set_render_callback( function ( $fields ) {

        // Block variables
        $text = $fields['text'];
        $removePadding = $fields['remove_padding'];

		?>

        <section class="typography <?php if ($removePadding == 'yes') : ?>remove-section-padding<?php endif; ?>">
            <div class="typography__container">
                <?php if( $text ) : ?>
                    <h1 class="typography__h1">H1: <?php echo esc_html( $text ); ?></h1>
                    <h2 class="typography__h2">H2: <?php echo esc_html( $text ); ?></h2>
                    <h3 class="typography__h3">H3: <?php echo esc_html( $text ); ?></h3>
                    <h4 class="typography__h4">H4: <?php echo esc_html( $text ); ?></h4>
                    <h5 class="typography__h5">H5: <?php echo esc_html( $text ); ?></h5>
                    <h6 class="typography__h6">H6: <?php echo esc_html( $text ); ?></h6>
                    <p class="typography__p">
                        p: 
                        <?php echo esc_html( $text ); ?>
                        <?php echo esc_html( $text ); ?>
                        <?php echo esc_html( $text ); ?>
                    </p>
                    <a class="typography__a">a: <?php echo esc_html( $text ); ?></a>
                    <ol class="typography__ol">
                        <li>ol: </li>
                        <li><?php echo esc_html( $text ); ?></li>
                        <li><?php echo esc_html( $text ); ?></li>
                        <li><?php echo esc_html( $text ); ?></li>
                    </ol>
                    <ul class="typography__ul">
                        <li>ul: </li>
                        <li><?php echo esc_html( $text ); ?></li>
                        <li><?php echo esc_html( $text ); ?></li>
                        <li><?php echo esc_html( $text ); ?></li>
                    </ul>
                    <!-- Custom -->
                    
                <?php endif; ?>
            </div>
        </section>

		<?php
	} );
}
<?php get_header(); ?>
<?php component('global/header') ?>

<?php
    $text = carbon_get_theme_option( '404_text' );
?>
    
<main class="zoepix">
    <section class="page-not-found">
        <?php if( $text ) : ?>
            <div class="page-not-found__heading">
                <h1><?php echo esc_html( $text ); ?></h1>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php component('global/footer') ?>
<?php get_footer(); ?>
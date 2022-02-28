<?php
    $email = carbon_get_theme_option( 'footer_email' );
    $phone = carbon_get_theme_option( 'footer_phone' );
    $icons = carbon_get_theme_option( 'footer_socials' );
    $copyright = carbon_get_theme_option( 'footer_copyright' );
?>

<footer class="footer">
    <div class="footer__container">
        <div class="footer__subcontainer footer__subcontainer--left">
            <div class="footer__hr"></div>
            <?php if ($phone) : ?>
                <div class="footer__text footer__text--phone">
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer__subcontainer footer__subcontainer--middle">
            <?php if ($email) : ?>
                <div class="footer__text footer__text--email">
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer__subcontainer footer__subcontainer--right">
            <?php if ($icons) : ?>
                <div class="footer__text footer__text--icons">
                    <?php foreach ($icons as $icon) : ?>
                        <a class="icon icon--white" target="_blank" href="<?php echo esc_html( $icon['footer_socials_link'] ); ?>">
                            <i class="<?php echo esc_html( $icon['footer_socials_icon'] ); ?>"></i>
                        </a>                   
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="footer__hr"></div>
        </div>
    </div>
</footer>

<?php
    $logo_mobile = carbon_get_theme_option( 'header_logo_mobile' );
    $logo_desktop = carbon_get_theme_option( 'header_logo_desktop' );

    $icons = carbon_get_theme_option( 'footer_socials' );
    $copyright = carbon_get_theme_option( 'footer_copyright' );
?>

<header class="header">
    <div class="header__container">
        <button class="header__hamburger" aria-label="Toggle menu">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <nav class="header__navbar header__navbar--mobile">
            <?php wp_nav_menu([
                    'menu' => 'Main Menu',
                    'menu_class' => 'header__navbar--links',
                    'menu_id' => 'header__navbar',
                    'container' => 'div',
                    'container_class' => 'header__navbar--nav',
                    'walker' => new Zoepix_Header_Walker()
                ]);
            ?>
            <div class="header__navbar--hr"></div>
            <?php if ($icons) : ?>
                <div class="header__navbar--icons">
                    <?php foreach ($icons as $icon) : ?>
                        <a class="icon icon--black" target="_blank" href="<?php echo esc_html( $icon['footer_socials_link'] ); ?>">
                            <i class="<?php echo esc_html( $icon['footer_socials_icon'] ); ?>"></i>
                        </a>                   
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if ($copyright) : ?>
                <div class="header__navbar--copyright">
                    <h5><?php echo $copyright; ?></h5>
                </div>
            <?php endif; ?>
        </nav>
        <?php if ($logo_mobile) : ?>
            <a href="/xessus/" class="header__logo header__logo--mobile">
                <img src="<?php echo wp_get_attachment_image_url($logo_mobile, 'large'); ?>" alt="xessus logo">
            </a>
        <?php endif; ?>
        <?php if ($logo_desktop) : ?>
            <a href="/xessus/" class="header__logo header__logo--desktop">
                <img src="<?php echo wp_get_attachment_image_url($logo_desktop, 'large'); ?>" alt="Zoepix logo">
            </a>
        <?php endif; ?>
    </div>
</header>
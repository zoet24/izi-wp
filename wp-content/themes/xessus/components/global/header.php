<?php
    $logo_mobile = carbon_get_theme_option( 'header_logo_mobile' );
    $logo_desktop = carbon_get_theme_option( 'header_logo_desktop' );
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
        <nav class="header__navbar">
            <?php wp_nav_menu([
                    'menu' => 'Main Menu',
                    'menu_class' => 'header__navbar--links',
                    'menu_id' => 'header__navbar',
                    'container' => 'div',
                    'container_class' => 'header__navbar--nav',
                    'walker' => new Zoepix_Header_Walker()
                ]);
            ?>
        </nav>
        <?php if ($logo_mobile) : ?>
            <a href="/zoepix/" class="header__logo header__logo--mobile">
                <img src="<?php echo wp_get_attachment_image_url($logo_mobile, 'large'); ?>" alt="Zoepix logo">
            </a>
        <?php endif; ?>
        <?php if ($logo_desktop) : ?>
            <a href="/zoepix/" class="header__logo header__logo--desktop">
                <img src="<?php echo wp_get_attachment_image_url($logo_desktop, 'large'); ?>" alt="Zoepix logo">
            </a>
        <?php endif; ?>
    </div>
</header>
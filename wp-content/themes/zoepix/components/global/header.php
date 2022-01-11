<header class="header">
    <h1>Header</h1>
    <nav class="header__navbar">
        <?php wp_nav_menu([
                'menu' => 'Other Menu',
                'menu_class' => 'header__navbar--links',
                'menu_id' => 'header__navbar',
                'container' => 'div',
                'container_class' => 'header__navbar--nav',
                'walker' => new Zoepix_Header_Walker()
            ]);
        ?>
    </nav>
    <div class="header__navbar hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
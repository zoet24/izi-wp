<header class="header">
    <h1>Header</h1>
    <nav class="navbar">
        <?php wp_nav_menu([
                'menu' => 'Other Menu',
                'menu_class' => 'navbar__links',
                'menu_id' => 'navbar__header',
                'container' => 'div',
                'container_class' => 'navbar__nav',
                'walker' => new zoepix_Menu_Walker()
            ]);
        ?>
    </nav>
    <div class="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
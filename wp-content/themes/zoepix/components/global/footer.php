<footer class="footer">
    <h1>Footer</h1>
    <nav class="footer__navbar">
        <?php wp_nav_menu([
                'menu' => 'Main Menu',
                'menu_class' => 'footer__navbar--links',
                'menu_id' => 'footer__navbar',
                'container' => 'div',
                'container_class' => 'footer__navbar--nav',
                'walker' => new Zoepix_Footer_Walker()
            ]);
        ?>
    </nav>
</footer>

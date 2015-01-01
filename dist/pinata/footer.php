            <ul class="sidebar-footer">
                <?php dynamic_sidebar('pinata_sidebar_footer'); ?>
            </ul>
            <footer class="site-footer">
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'footer-nav',
                        'container'       => 'nav',
                        'container_class' => 'footer-nav',
                        'menu_class'      => 'menu group'
                    )); 
                ?>
                <span class="copyright">
                    &copy; Whata Piñata,
                    <?php echo date('Y'); ?>
                </span>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>

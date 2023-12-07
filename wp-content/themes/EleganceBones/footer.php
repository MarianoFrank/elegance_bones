<footer class="footer contenedor">

    <div class="contenido-footer">
        <?php
        $args = [
            "menu" => "menu-principal",
            "container" => "nav",
            "menu_class" => "menu-principal"
        ];
        wp_nav_menu($args); ?>
        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo("name") . " " . date("Y"); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
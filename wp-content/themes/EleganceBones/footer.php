<!-- Cierro el div del grid de la pagina principal -->
<?php if (is_front_page()) : ?>
    </div>
<?php endif; ?>
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
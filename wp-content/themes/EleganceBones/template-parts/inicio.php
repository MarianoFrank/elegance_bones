<?php
while (have_posts()) :
    the_post();
?>




    <div class="copy_bienvenida">
        <h1 class="titulo_bienvenida">
            <span class="animate__animated animate__fadeInRightBig"><?php echo strtok(get_the_title(), " "); ?></span>
            <span class="animate__animated animate__fadeInDownBig"><?php echo substr(strstr(get_the_title(), " "), 1); ?></span>

        </h1>
        <div class="animate__animated animate__fadeInRightBig">
            <?php
            the_content();
            ?>
        </div>

        <div class="copy_buttons animate__animated animate__zoomIn">
            <div class="principal_buttons">
                <a class="button" href=" <?php echo get_permalink(wc_get_page_id('shop')); ?>">Ver Tienda</a>
                <a class="button-secundary"  href="<?php echo get_permalink(get_page_by_path("sobre-nosotros")); ?>">Sobre Nosotros</a>

            </div>

            <?php
            $args = [
                "menu" => "menu-sociales",
                "container" => "div",
                "menu_class" => "menu-sociales",
                'link_before'    => '<span class="screen-reader-text">',
                'link_after'     => '</span>',

            ];

            wp_nav_menu($args);

            ?>

        </div>
    </div>

<?php


endwhile;
?>

<!-- Cierro el div del contendor de la pagina principal -->
<?php if (is_front_page()) : ?>
    </div> <!-- contenedor-inicio -->
    </div> <!-- grid-inicio -->
<?php endif; ?>
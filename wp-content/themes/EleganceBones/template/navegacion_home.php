<div class="barra-home">
    <?php
    $args = [
        "menu" => "menu-home",
        "container" => "nav",
        "menu_class" => "menu-home"
    ];
    wp_nav_menu($args); ?>

    <div class="iconos-derecha">

        <a class="icono-cuenta" href="<?php echo esc_url(wc_get_account_endpoint_url('mi-cuenta')); ?>">
            <i class="fa-solid fa-user"></i>
        </a>

        <?php require get_template_directory() . "/template/carrito_nav.php"; ?>

    </div>
</div>
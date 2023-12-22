<div class="barra-navegacion <?php echo (is_front_page()) ? "home-nav barra-translate" : ""; ?> ">
    <div class="barra-container">
        <?php require get_template_directory() . "/template/logo_nav.php"; ?>

        <?php require get_template_directory() . "/template/menu_principal.php"; ?>

        <div class="nav-derecha">
            <?php get_product_search_form(); ?>
            <a class="icono-cuenta" href="<?php echo esc_url(wc_get_account_endpoint_url('mi-cuenta')); ?>">
                <i class="fa-solid fa-user"></i>
            </a>

            <?php require get_template_directory() . "/template/carrito_nav.php"; ?>

        </div>

    </div>
    <div class="barra-smartphone">
        <div class="smartphone-superior">
            <?php require get_template_directory() . "/template/logo_nav.php"; ?>

            <div class="barra-smartphone-icons">
                <a class="icono-cuenta" href="<?php echo esc_url(wc_get_account_endpoint_url('mi-cuenta')); ?>">
                    <i class="fa-solid fa-user"></i>
                </a>

                <?php require get_template_directory() . "/template/carrito_nav.php"; ?>

            </div>
        </div>

        <div class="smartphone-inferior">
            <?php get_product_search_form(); ?>
            <div class="menu-icon">
                <i class=" fa-solid fa-bars"></i>
            </div>

        </div>

    </div>

</div>

<!-- Menu principal smartphone -->
<div class="menu-smartphone">
    <div class="icono-cerrar ">
        <i class="fa-solid fa-xmark"></i>
        <p class="margin-0">Cerrar</p>
    </div>
    <?php require get_template_directory() . "/template/menu_principal.php"; ?>

</div>


<!-- Mini Cart -->

<div class="mini-cart">
    <div class="icono-cerrar ">
        <i class="fa-solid fa-xmark"></i>
        <p class="margin-0">Cerrar</p>
    </div>

    <?php echo $minicart_content; ?>
</div>
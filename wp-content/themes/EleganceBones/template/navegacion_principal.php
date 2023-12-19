<div class=" barra-navegacion">
    <?php if (!is_page("inicio")) : ?>
        <div class="logo">
            <a href="<?php echo site_url("/"); ?>">
                <!-- get_template_directory_uri() retorna la ubicacion raiz del tema en el que estamos -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logotipo"></a>
        </div>
    <?php endif; ?>
    <?php
    //theme_location indica que menu de todos queremos renderizar
    $args = [
        "menu" => "menu-principal",
        "container" => "nav",
        "menu_class" => "menu-principal"
    ];

    wp_nav_menu($args);
    ?>
    <div class="nav-derecha">
        <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>">
            <i class="fa-solid fa-user"></i>
        </a>
        <!-- Carrito icon -->
        <?php // Verifica si WooCommerce está activo
        if (class_exists('WooCommerce')) {
            // Obtén el contenido del minicarrito
            ob_start();
            woocommerce_mini_cart();
            $minicart_content = ob_get_clean();
            $cart = WC()->cart;
            $cart_item_count = $cart->get_cart_contents_count();
        }
        ?>
        <div class="icono_carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            <div class="carrito-count"><?php echo $cart_item_count; ?></div>
        </div>
    </div>

</div>

<div class="mini-cart">
    <div class="icono-cerrar ">
        <i class="fa-solid fa-xmark"></i>
        <p class="margin-0">Cerrar</p>
    </div>

    <?php echo $minicart_content; ?>
</div>
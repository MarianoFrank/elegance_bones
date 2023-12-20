<div class="barra-navegacion <?php echo (is_front_page()) ? "home-nav" : ""; ?> ">
    <div class="barra-container">
        <?php if (!is_page("inicio")) : ?>
            <div class="logo">
                <a href="<?php echo site_url("/"); ?>">
                    <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
                    <h2 class="logo-text">Elegance <span>Bones</span></h2>
                </a>
            </div>
        <?php endif; ?>
        <?php
        $args = [
            "menu" => "menu-principal",
            "container" => "nav",
            "menu_class" => "menu-principal"
        ];

        wp_nav_menu($args);
        ?>
        <div class="nav-derecha">
            <?php get_product_search_form(); ?>
            <a class="icono-cuenta" href="<?php echo esc_url(wc_get_account_endpoint_url('mi-cuenta')); ?>">
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


</div>


<div class="mini-cart">
        <div class="icono-cerrar ">
            <i class="fa-solid fa-xmark"></i>
            <p class="margin-0">Cerrar</p>
        </div>

        <?php echo $minicart_content; ?>
    </div>
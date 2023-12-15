<?php
// Verifica si WooCommerce está activo
if (class_exists('WooCommerce')) {
    // Obtén el contenido del minicarrito
    ob_start();
    woocommerce_mini_cart();
    $minicart_content = ob_get_clean();
    $cart = WC()->cart;
    $cart_item_count = $cart->get_cart_contents_count();
}
?>

<div class="carrito_nav">

    <div class="mini-cart">
        <div class="icono-cerrar ">
            <i class="fa-solid fa-xmark"></i>
            <p class="margin-0">Cerrar</p>
        </div>

        <?php echo $minicart_content; ?>
    </div>

    <div class="icono_carrito">
        <div>
            <p class="margin-0">Carrito</p>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>

        <div class="carrito-count"><?php echo $cart_item_count; ?></div>
    </div></a>
</div>
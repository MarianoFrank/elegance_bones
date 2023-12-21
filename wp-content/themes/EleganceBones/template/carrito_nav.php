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
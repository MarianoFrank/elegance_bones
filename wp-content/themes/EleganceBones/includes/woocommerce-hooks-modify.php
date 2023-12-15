<?php

//Remover el contador de productos en la tienda porque queda mal
remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);

//Remover las noticias de la tienda
remove_action("woocommerce_before_shop_loop", "woocommerce_output_all_notices", 10);

//Modifica el selector de orden de la tienda por uno personalizado
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

function custom_orderby()
{
    $filters = [
        ['id' => 'menu_order', 'text' => 'Orden predeterminado'],
        ['id' => 'popularity', 'text' => 'Ordenar por popularidad'],
        ['id' => 'rating', 'text' => 'Ordenar por calificación media'],
        ['id' => 'date', 'text' => 'Ordenar por las últimas'],
        ['id' => 'price', 'text' => 'Ordenar por precio: bajo a alto'],
        ['id' => 'price-desc', 'text' => 'Ordenar por precio: alto a bajo'],
    ];

    $current_get = s($_GET);

    $current_filter = s($_GET['orderby'] ?? null);

    $index_filter = array_search($current_filter, array_column($filters, 'id'));

    $current_text = $index_filter !== false ? $filters[$index_filter]['text'] : 'Ordenar por: <i class="fa-solid fa-sort"></i>';
?>
    <div class="custom-select-container">
        <div class="custom-select">
            <span class="custom-selected-placeholder"><?php echo $current_text; ?></span>

            <ul class="custom-selected-options">
                <?php foreach ($filters as $filter) : ?>
                    <?php

                    //En cada iteracion cambio el $current_get['orderby'] para armar las urls
                    $current_get['orderby'] = $filter["id"];
                    $url_filter = esc_url(add_query_arg($current_get, $_SERVER['REQUEST_URI']));

                    $selected_class = ($current_filter === $filter['id']) ? 'class="selected"' : '';
                    ?>

                    <li><a href="<?php echo $url_filter; ?>" <?php echo $selected_class; ?>><?php echo $filter["text"]; ?></a></li>

                <?php endforeach; ?>

            </ul>
        </div>
    </div>
<?php
}

add_action('woocommerce_before_shop_loop', 'custom_orderby', 30);
//Modificacones para la pantalla del producto (content-single-product)

//Agregar container
function container_product_open()
{
    //Tambien abrimos el main
?>
    <div class="grid-producto">
    <?php

}

add_action("woocommerce_before_single_product_summary", "container_product_open", 0);

//Cerrar contenedor del producto
function container_product_close()
{
    ?>
    </div>
<?php
}

add_action("woocommerce_after_single_product_summary", "container_product_close", 0);

//Cerrar el main 
function main_product_close()
{
?>
    <?php
    if (comments_open()) : ?>
        <div class="woocommerce-tabs">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>

    <?php
}

add_action("woocommerce_after_single_product_summary", "main_product_close", 30);

//Removemos el sidebar que genera woocommerce
remove_action("woocommerce_sidebar", "woocommerce_get_sidebar", 10);

//Remover la descripcion de su lugar original
remove_filter('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

//Agregamos la descripcion despues del div de summary
function descripcion_single_product()
{
    global $product;

    $descripcion = $product->get_description();;

    if (!empty($descripcion)) {
    ?>
        <div class="descripcion">
            <h2>Descripcion</h2>
            <p>
                <?php echo nl2br($descripcion); ?>
            </p>
        </div>
<?php

    }
}

add_filter('woocommerce_single_product_summary', 'descripcion_single_product', 70);


//Quitamos el resumen para ponerlo en otro lugar
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
add_action( 'woocommerce_checkout_after_order_review', 'woocommerce_order_review', 0 );

//Cambio de lugar los productos cruzados
remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10);
add_action('woocommerce_after_cart', 'woocommerce_cross_sell_display');

<?php
//Agregar Soporte de WOOCOMMERCE a mi tema
function setup()
{
    add_theme_support(
        'woocommerce',
        apply_filters(
            'storefront_woocommerce_args',
            array(
                //tamaño de las miniaturas de los produtos
                'thumbnail_image_width' => 200,
            )
        )
    );

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action('after_setup_theme', 'setup');


function debuguear($valor)
{
    echo "<pre>";
    var_dump($valor);
    echo "</pre>";
}

require get_template_directory() . "/includes/widgets.php";
require get_template_directory() . "/includes/queries.php";


function menus()
{
    register_nav_menus([
        "menu-principal" => __("Menu principal", "gymfitness"),
    ]);
}
add_action("init", "menus");

function scriptsAndStyles()
{   //css
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", [], "6.5.1");
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", [], "8.0.1");
    wp_enqueue_style("style", get_stylesheet_uri(), ["normalize", "font-awesome"], "1.0.0");

    //js
    if (is_page("inicio")) {
        wp_enqueue_script("index", get_template_directory_uri() . '/js/index.min.js', [], "1.0.0", true);
    }
    if (is_shop() || is_product_category()) {
        wp_enqueue_script("orderby", get_template_directory_uri() . '/js/orderby.min.js', [], "1.0.0", true);
    }
}

add_action("wp_enqueue_scripts", "scriptsAndStyles");


//Sanitizar
function s($dato)
{
    if (is_array($dato)) {
        return s_array($dato);
    }
    return htmlspecialchars($dato);
}

function s_array($datos): array
{

    $s = [];
    foreach ($datos as $key => $dato) {

        if (is_array($dato)) {
            //si hay otro arreglo dentro del arreglo se llamara recursivamente
            //sanitizando todos los subarreglos
            $s[$key] = s_array($dato);
        } else {
            //si es solo un dato se sanitiza
            $s[$key] = htmlspecialchars($dato);
        }
    }

    return $s;
}

//Woocommerce cambios en los hooks
require get_template_directory() . "/includes/woocommerce-hooks-modify.php";

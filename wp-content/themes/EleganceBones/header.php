<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody&family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

    <?php if (is_active_sidebar('sidebar_descuento')) {
        dynamic_sidebar('sidebar_descuento');
    } ?>

    <header class="header">
        <div class="contenedor barra-navegacion">
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

            require get_template_directory() . "/template/carrito_nav.php";
            ?>
        </div>
    </header>
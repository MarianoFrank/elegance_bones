<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Inter:wght@400;700&display=swap" rel="stylesheet">


<body class="<?php echo is_front_page() ? "home" : ""; ?>">



    <!-- <?php if (is_active_sidebar('sidebar_descuento')) {
                dynamic_sidebar('sidebar_descuento');
            } ?> -->

    <?php if (is_front_page()) : ?>
        <div class="grid-inicio">
        <?php
        if (has_post_thumbnail()) {
            //si hay imagen la mostramos
            the_post_thumbnail("large", ["class" => "imagen-destacada"]);
        }
    endif;
        ?>

        <?php if (is_front_page()) : ?>
            <div class="contenedor-inicio ">
            <?php endif; ?>
            <img class="gradient" src="<?php echo get_template_directory_uri(); ?>/img/background.jpg" alt="background">


            <header class="header">
                <div class="container barra-navegacion">
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
<?php
/*
Template Name: Plantilla Inicio
*/
?>

<?php get_header(); ?>


<?php
get_template_part("template-parts/inicio");
require get_template_directory() . "/template/navegacion_principal.php";
?>

<main class="container">
    <?php

    productos_por_novedades('fade-down-left', 'fade-right');
    productos_destacados('fade-down-left', 'fade-right');

    $publicidad_1 = get_field('publicidad_1');
    if (!empty($publicidad_1)) : ?>
        <img src="<?php echo esc_url($publicidad_1['url']); ?>" alt="<?php echo esc_attr($publicidad_1['alt']); ?>" class="imagen_publicidad_principal" data-aos="fade-down">
    <?php endif;

    productos_por_oferta('fade-down-left', 'fade-right'); ?>

    <div class="publicidad_vertical"><?php
                                        $publicidad_2 = get_field('publicidad_2');
                                        if (!empty($publicidad_2)) : ?>
            <img src="<?php echo esc_url($publicidad_2['url']); ?>" alt="<?php echo esc_attr($publicidad_2['alt']); ?>" class="imagen_publicidad" data-aos="fade-right">
        <?php
                                        endif;

                                        $publicidad_3 = get_field('publicidad_3');
                                        if (!empty($publicidad_3)) : ?>
            <img src="<?php echo esc_url($publicidad_3['url']); ?>" alt="<?php echo esc_attr($publicidad_3['alt']); ?>" class="imagen_publicidad" data-aos="fade-left">
        <?php
                                        endif; ?>
    </div>
    <?php


    productos_por_masVendidos('fade-down-left', 'fade-right') ?>

    <a class="button btnFinal" href="<?php echo esc_url(wc_get_page_permalink('shop')) ?>">Ir a la Tienda</a>
</main>

<?php get_footer(); ?>
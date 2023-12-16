<?php
/*
Template Name: Plantilla Inicio
*/
?>

<?php get_header(); ?>

<main class="container">
    <?php
    get_template_part("template-parts/inicio");
    ?>


    <?php mostrar_productos_homepage(); ?>


</main>

<?php get_footer(); ?>
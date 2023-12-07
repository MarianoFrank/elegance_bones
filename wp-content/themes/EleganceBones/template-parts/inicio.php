<?php
while (have_posts()) :
    the_post();
?>
    <div class="bienvenida">
        <div class="contenedor-imagen">
            <?php
            if (has_post_thumbnail()) {
                //si hay imagen la mostramos
                the_post_thumbnail("large", ["class" => "imagen-destacada"]);
            }
            ?>
            <div class="filtro-ruido"></div>
        </div>
        <div class="copy_bienvenida">
            <h1 class="titulo_bienvenida" data-text="Text Glitch">
                <?php the_title(); ?>
            </h1>
            <?php
            the_content();
            ?>
        </div>
    </div>
<?php


endwhile;

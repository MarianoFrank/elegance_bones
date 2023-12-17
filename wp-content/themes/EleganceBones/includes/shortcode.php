<?php

function productos_por_oferta($aos_titulo, $aos_swiper)
{
?>
    <section class=" section ofertas">
        <h1 class="section_title" data-aos="<?php echo $aos_titulo; ?>">Ofertas</h1>
        <div class="productos-swiper" data-aos="<?php echo $aos_swiper; ?>">
            <?php
            $shortcode = '[products on_sale="true" limit="8" orderby="date" order="DESC"]';
            echo do_shortcode($shortcode);
            ?>
        </div>

    </section>
<?php
}

function productos_por_categorias($aos_titulo, $aos_swiper)
{
?>
    <section class=" section categorias">
        <h1 class="section_title" data-aos="<?php echo $aos_titulo; ?>">Categorias</h1>
        <div class="productos-swiper" data-aos="<?php echo $aos_swiper; ?>">
            <?php
            $shortcode = '[product_category category="ropa" per_page="8" orderby="date" order="DESC"]';
            echo do_shortcode($shortcode);
            ?>
        </div>

    </section>
<?php

}

function productos_por_novedades($aos_titulo, $aos_swiper)
{
?>
    <section class=" section novedades">
        <h1 class="section_title" data-aos="<?php echo $aos_titulo; ?>">Novedades</h1>
        <div class="productos-swiper" data-aos="<?php echo $aos_swiper; ?>">
            <?php
            $shortcode = '[recent_products per_page="8"]';
            echo do_shortcode($shortcode);
            ?>
        </div>
    </section>
<?php

}

function productos_por_mejorValorados($aos_titulo, $aos_swiper)
{
?>
    <section class="section mejor-valorados">
        <?php
        $shortcode = '[top_rated_products per_page="8"]';
        echo do_shortcode($shortcode);
        ?>
    </section>
<?php

}

function productos_por_masVendidos($aos_titulo, $aos_swiper)
{
?>
    <section class=" section mas-vendidos">
        <h1 class="section_title" data-aos="<?php echo $aos_titulo; ?>">Mas Vendidos</h1>
        <div class="productos-swiper" data-aos="<?php echo $aos_swiper; ?>">
            <?php
            $shortcode = '[best_selling_products per_page="8"]';
            echo do_shortcode($shortcode);
            ?>
        </div>

    </section>

<?php

}

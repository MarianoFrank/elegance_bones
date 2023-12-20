<?php
while (have_posts()) :
    the_post();

    if (has_post_thumbnail()) {
        //si hay imagen la mostramos
        the_post_thumbnail("full", ["class" => "imagen-destacada"]);
    }

    the_content();
endwhile;

<?php
while (have_posts()) :
    the_post();

    the_title("<h1 class='text-center'>", "</h1>");

    if (has_post_thumbnail()) {
        //si hay imagen la mostramos
        the_post_thumbnail("full", ["class" => "imagen-destacada"]);
    }

    the_content();
endwhile;

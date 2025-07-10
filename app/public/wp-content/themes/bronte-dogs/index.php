<?php

/**
 * Select template to use
 */
get_header();

if (is_front_page()) :

    get_template_part('templates/home');

elseif (is_page()) :

    get_template_part('templates/page');

else :

    get_template_part('templates/404');

endif;

get_footer();

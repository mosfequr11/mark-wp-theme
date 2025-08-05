<?php

function change_case_text($headnng)
{
    return strtoupper($headnng);
}

function mark_assets()
{
    wp_enqueue_style("mark", get_stylesheet_uri());
    wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), null, true);
    // wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/main.js", array(), "0.0.1", true);
    wp_enqueue_script("main-js", get_theme_file_uri() . "/assets/js/main.js", array(), "0.0.1", true);
}
add_action("wp_enqueue_scripts", "mark_assets");

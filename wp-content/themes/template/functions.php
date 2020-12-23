<?php
function enqueue_styles()
{
    wp_enqueue_style('style-css', get_template_directory_uri() . '/public/minified/css/style.css');
    wp_enqueue_style('page-css', get_template_directory_uri() . '/public/minified/css/page.css');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/public/uglified/all.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
?>
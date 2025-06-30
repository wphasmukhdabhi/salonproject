<?php
function movie_plugin_enqueue_scripts()
{
    wp_enqueue_style('movie-style', M_PLUGIN_URL . '../assets/style.css');

    wp_enqueue_script('movie-ajax', M_PLUGIN_URL . '../assets/script.js', ['jquery'], null, true);

    wp_localize_script('movie-ajax', 'movie_ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'movie_plugin_enqueue_scripts');

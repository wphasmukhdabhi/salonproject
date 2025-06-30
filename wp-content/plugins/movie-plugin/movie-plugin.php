<?php

/**
 * Plugin Name: Movie Plugin
 * Description: A custom plugin to display movies
 * Author: Hasmukh Dabhi
 * Version: 1.0
 */

if (! defined('ABSPATH')) {
    exit;
}

// Define plugin path and URL constants.
define('M_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('M_PLUGIN_URL', plugin_dir_url(__FILE__));

// Activation hook
function movie_activate_plugin()
{
    register_movie_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'movie_activate_plugin');

// Deactivation hook

function movie_deactivation_plugin()
{
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'movie_deactivation_plugin');

// includes file
require_once M_PLUGIN_PATH . 'includes/post-type.php';
require_once M_PLUGIN_PATH . 'includes/scripts.php';
// AJAX Functions
require_once M_PLUGIN_PATH . 'includes/ajax-functions.php';
// Shortcode for frontend
require_once M_PLUGIN_PATH . 'includes/shortcode.php';

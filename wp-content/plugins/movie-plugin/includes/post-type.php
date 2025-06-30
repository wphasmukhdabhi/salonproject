<?php
// register custom post type movie

function register_movie_post_type()
{
    register_post_type('movie', [
        'labels' => [
            'name' => 'Movies',
            'singular_name' => 'Movie',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Movie',
            'edit_item' => 'Edit Movie',
            'new_item' => 'New Movie',
            'view_item' => 'View Movie',
            'search_items' => 'Search Movies',
            'not_found' => 'No movies found',
            'not_found_in_trash' => 'No movies found in Trash',
            'all_items' => 'All Movies',

        ],

        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'movies'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,

    ]);

    // register custom taxonomy movie category

    register_taxonomy('movie_category', 'movie', [
        'labels' => [
            'name' => 'Movie Categories',
            'singular_name' => 'Movie Category',
            'search_items' => 'Search Categories',
            'all_items' => 'All Categories',
            'edit_item' => 'Edit Category',
            'update_item' => 'Update Category',
            'add_new_item' => 'Add New Category',
            'new_item_name' => 'New Category Name',
            'menu_name' => 'Categories',
        ],
        
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'movie-category'],
        'show_in_rest' => true,
    ]);
}

add_action('init', 'register_movie_post_type');

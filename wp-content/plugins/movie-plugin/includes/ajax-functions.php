<?php
function filter_movies_by_category()
{
    // $category_id  = intval($_POST['category_id']);
    $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;

    $args = [
        'post_type' => 'movie',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        // 'tax_query' => [
        //     [
        //         'taxonomy' => 'movie_category',
        //         'field' => 'term_id',
        //         'terms' => $cat_id
        //     ]
        // ]
    ];
    if ($category_id > 0) {
        $args['tax_query'] = [
            [
                'taxonomy' => 'movie_category',
                'field'    => 'term_id',
                'terms'    => $category_id,
            ]
        ];
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="movie-item">
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail('medium'); ?>
                <p><?php the_excerpt(); ?></p>
            </div>
<?php endwhile;
    else :
        echo '<p>No movies found.</p>';
    endif;
    wp_die();
}

add_action('wp_ajax_filter_movies', 'filter_movies_by_category');
add_action('wp_ajax_nopriv_filter_movies', 'filter_movies_by_category');

<?php
function movie_filter_shortcode()
{
    $terms = get_terms('movie_category');

    ob_start(); ?>

    <div class="movie-filter">
        <select id="movie-category">
            <option value="">Select Category</option>
            <?php foreach ($terms as $term) : ?>
                <option value="<?= $term->term_id; ?>"><?= $term->name; ?></option>
            <?php endforeach; ?>
        </select>

        <div id="movie-results"></div>
    </div>

<?php return ob_get_clean();
}
add_shortcode('movie_filter', 'movie_filter_shortcode');

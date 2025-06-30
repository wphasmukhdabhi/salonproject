jQuery(document).ready(function ($) {
    $('#movie-category').on('change', function () {
        var category_id = $(this).val();
        $('#movie-results').html('Loading...');

        $.ajax({
            url: movie_ajax_obj.ajax_url,
            method: 'POST',
            data: {
                action: 'filter_movies',
                category_id: category_id
            },
            success: function (response) {
                $('#movie-results').html(response);
            }
        });
    });
});

<?php
/**
 * Template file for displaying single posts.
 */

get_header();
get_template_part('elements/base', 'header');
get_template_part('elements/base', 'navigation');

get_template_part('elements/base', 'precontent');

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('elements/content'/*, get_post_format()*/);

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) {
            echo '<hr>';
            comments_template();
        }
    }
} else {
    echo '<p>Nothing found here. Sorry!</p>';
}

get_template_part('elements/base', 'postcontent');

get_template_part('elements/base', 'footer');
get_footer();
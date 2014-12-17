<?php

/**
 * @package Toolbox
 * @since Toolbox 0.1
 */


/**
 * Register the theme.
 */
function toolbox_setup() {
    add_theme_support('automatic-feed-links');
    register_nav_menus(array('primary' => 'Primary Menu'));
}

add_action('after_setup_theme', 'toolbox_setup');


/**
 * Queue stylesheets.
 */
function toolbox_enqueue_css() {
    $root = get_template_directory_uri();
    wp_enqueue_style('style', $root.'/dist/style.css');
}

add_action('wp_enqueue_scripts', 'toolbox_enqueue_css');


/**
 * Print HTML with meta information for the current date/time and author.
 */
function toolbox_posted_on() {
    printf('<time class="entry-date" datetime="%1$s" pubdate>%2$s</time>',
        esc_attr(get_the_date('c')),
        esc_html(get_the_date())
    );
}


/**
 * Returns true if a blog has more than 1 category
 */
function toolbox_categorized_blog() {

    $count = get_transient('category_count');

    if (!$count) {

        // Query for categories.
        $categories = get_categories(array(
            'hide_empty' => 1
        ));

        // Set the count.
        $count = count($categories);
        set_transient('category_count', $count);
    }

    return $count > 1;

}


/**
 * Flush out the transients used in toolbox_categorized_blog
 */
function toolbox_category_transient_flusher() {
    delete_transient('category_count');
}

add_action('edit_category', 'toolbox_category_transient_flusher');
add_action('save_post', 'toolbox_category_transient_flusher');

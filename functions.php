<?php

/**
 * @package Toolbox
 * @since Toolbox 0.1
 */


if (!function_exists('toolbox_setup')):
/**
 * Register the theme.
 */
function toolbox_setup() {

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support('automatic-feed-links');

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus(array('primary' => 'Primary Menu'));

	/**
	 * Add support for the Aside and Gallery Post Formats
	 */
	add_theme_support('post-formats', array('aside', 'image', 'gallery'));

}
endif;


/**
 * Register the theme.
 */
add_action('after_setup_theme', 'toolbox_setup');


if (!function_exists('toolbox_posted_on')):
/**
 * Print HTML with meta information for the current date/time and author.
 */
function toolbox_posted_on() {
	printf('<time class="entry-date" datetime="%1$s" pubdate>%2$s</time>',
		esc_attr(get_the_date('c')),
		esc_html(get_the_date())
	);
}
endif;


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

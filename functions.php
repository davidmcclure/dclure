<?php

/**
 * Toolbox functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */


if (!function_exists('toolbox_setup')):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override toolbox_setup() in a child theme, add your own toolbox_setup to your child theme's
 * functions.php file.
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
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own toolbox_posted_on to override in a child theme
 *
 * @since Toolbox 1.2
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
 *
 * @since Toolbox 1.2
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
 *
 * @since Toolbox 1.2
 */
function toolbox_category_transient_flusher() {
	delete_transient('category_count');
}
add_action('edit_category', 'toolbox_category_transient_flusher');
add_action('save_post', 'toolbox_category_transient_flusher');

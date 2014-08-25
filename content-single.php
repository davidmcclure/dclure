<?php
/**
 * @package Toolbox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="entry-meta">
			<?php toolbox_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php

			$category_list = get_the_category_list(__(', ', 'toolbox'));
			$tag_list = get_the_tag_list('', ', ');

			if (!toolbox_categorized_blog()) {

				// Just one category.
				if ($tag_list != '') {
					$meta_text = __('Tagged with %2$s.', 'toolbox');
				} else {
					$meta_text = '';
				}

      } else {

        // More than one category.
				if ($tag_list != '') {
					$meta_text = __('Posted in %1$s, tagged with %2$s.', 'toolbox');
				} else {
					$meta_text = __('Posted in %1$s.', 'toolbox');
				}

			}

			printf(
				$meta_text,
				$category_list,
				$tag_list
			);

		?>

	</footer><!-- .entry-meta -->

</article><!-- #post-<?php the_ID(); ?> -->

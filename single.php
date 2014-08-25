<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

<div id="primary">
  <div id="content" role="main">

  <?php while (have_posts()): the_post(); ?>

    <?php get_template_part('content', 'single'); ?>

    <?php if (comments_open() || get_comments_number() != '0') {
      comments_template('', true);
    } ?>

  <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

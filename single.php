<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

get_header(); ?>

<div id="primary">
  <div id="content" role="main">

  <?php while (have_posts()): the_post(); ?>
    <?php get_template_part('content', 'single'); ?>
    <?php comments_template('', true); ?>
  <?php endwhile; ?>

  </div>
</div>

<?php get_footer(); ?>

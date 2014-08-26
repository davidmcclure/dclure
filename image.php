<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

get_header(); ?>

<div id="primary" class="image-attachment">
  <div id="content" role="main">

  <?php while (have_posts()): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-meta">

          <?php $md = wp_get_attachment_metadata(); ?>

          <!-- Date. -->
          <span>Published</span>
          <span class="entry-date"><?php echo get_the_date(); ?></span>

          <!-- Size. -->
          <span>at</span>
          <a href="<?php echo wp_get_attachment_url(); ?>">
            <?php echo $md['width']; ?> x <?php echo $md['height']; ?>
          </a>

          <!-- Post. -->
          <span>in</span>
          <a href="<?php echo get_permalink($post->post_parent); ?>">
            <?php echo get_the_title($post->post_parent); ?>
          </a>

        </div>

      </header>

      <div class="entry-content">
        <div class="entry-attachment">
          <div class="attachment">

            <!-- Image. -->
            <a href="<?php echo wp_get_attachment_url(); ?>">
              <?php echo wp_get_attachment_image($post->ID, 1200); ?>
            </a>

          </div>
        </div>
      </div>

  <?php endwhile; ?>

  </div>
</div>

<?php get_footer(); ?>

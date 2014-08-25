<?php

/**
 * Image attachments.
 */

get_header(); ?>

<div id="primary" class="image-attachment">
  <div id="content" role="main">

  <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="entry-meta">

          <?php $metadata = wp_get_attachment_metadata(); ?>

          <!-- Date. -->
          <span>Published</span>
          <span class="entry-date"><?php echo get_the_date(); ?></span>

          <!-- Size. -->
          <span>at</span>
          <a href="<?php echo wp_get_attachment_url(); ?>">
            <?php echo $metadata['width']; ?> x <?php echo $metadata['height']; ?>
          </a>

          <!-- Post. -->
          <span>in</span>
          <a href="<?php echo get_permalink($post->post_parent); ?>">
            <?php echo get_the_title($post->post_parent); ?>
          </a>

        </div><!-- .entry-meta -->

      </header><!-- .entry-header -->

      <div class="entry-content">
        <div class="entry-attachment">
          <div class="attachment">

            <!-- Image. -->
            <a href="<?php echo wp_get_attachment_url(); ?>">
              <?php echo wp_get_attachment_image($post->ID, 1200); ?>
            </a>

          </div><!-- .attachment -->
        </div><!-- .entry-attachment -->
      </div><!-- .entry-content -->

  <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

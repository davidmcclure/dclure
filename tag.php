<?php

/**
 * Tag Archives.
 */

get_header(); ?>

<section id="primary">
  <div id="content" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header">
      <h1 class="page-title">
        #<?php echo single_cat_title('', false); ?>
      </h1>
    </header>

    <?php rewind_posts(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('content', 'archive'); ?>
    <?php endwhile; ?>

  <?php else : ?>

    <article id="post-0" class="post no-results not-found">

      <header class="entry-header">
        <h1 class="entry-title">
          <?php _e( 'Nothing Found', 'toolbox' ); ?>
        </h1>
      </header><!-- .entry-header -->

    </article><!-- #post-0 -->

  <?php endif; ?>

  </div><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>


<?php get_header(); ?>

<section id="primary">
  <div id="content" role="main" class="portfolio">

  <?php if (have_posts()): ?>

    <?php rewind_posts(); ?>

    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('content', 'portfolio'); ?>
    <?php endwhile; ?>

  <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>

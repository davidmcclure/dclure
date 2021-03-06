
<?php get_header(); ?>

<div id="primary">
  <div id="content" role="main">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()): the_post(); ?>
      <?php get_template_part('content', 'archive'); ?>
    <?php endwhile; ?>

  <?php else : ?>

    <article id="post-0" class="post no-results not-found">

      <header class="entry-header">
        <h1 class="entry-title">{ }</h1>
      </header>

    </article>

  <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>

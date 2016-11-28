
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">

    <!-- Date. -->
    <div class="entry-meta">
      <?php toolbox_posted_on(); ?>
    </div>

    <!-- Title. -->
    <h1 class="entry-title"><?php the_title(); ?></h1>

  </header>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <footer class="entry-meta">
    <?php

      $category_list = get_the_category_list(', ');
      $tag_list = get_the_tag_list('', ', ');

      if (!toolbox_categorized_blog()) {

        // Just one category.
        if ($tag_list != '') {
          $meta_text = 'Tagged with %2$s.';
        } else {
          $meta_text = '';
        }

      } else {

        // More than one category.
        if ($tag_list != '') {
          $meta_text = 'Posted in %1$s, tagged with %2$s.';
        } else {
          $meta_text = 'Posted in %1$s.';
        }

      }

      printf(
        $meta_text,
        $category_list,
        $tag_list
      );

    ?>

  </footer>

</article>

<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('archive'); ?>>

  <header class="entry-header">

    <!-- Date. -->
    <?php if (get_post_type() == 'post'): ?>
    <div class="entry-meta">
      <?php toolbox_posted_on(); ?>
    </div>
    <?php endif; ?>

    <!-- Title. -->
    <h1 class="entry-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>

  </header>

  <footer class="entry-meta">
    <?php if (get_post_type() == 'post'): ?>

      <!-- Categories. -->
      <?php
        $categories_list = get_the_category_list(__( ', ', 'toolbox'));
        if ($categories_list && toolbox_categorized_blog()):
      ?>
      <span class="cat-links">
        <?php printf(__('Posted to %1$s', 'toolbox'), $categories_list); ?>
      </span>
      <span class="sep"> | </span>
      <?php endif; ?>

      <!-- Tags. -->
      <?php
        $tags_list = get_the_tag_list('', __(', ', 'toolbox'));
        if ( $tags_list ) :
      ?>
      <span class="tag-links">
        <?php printf(__('Tags: %1$s', 'toolbox'), $tags_list); ?>
      </span>
      <?php endif; ?>

    <?php endif; ?>

  </footer>

</article>

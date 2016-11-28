
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Title. -->
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>

  <!-- Content. -->
  <div class="entry-content">
    <?php the_content(); ?>
  </div>

</article>

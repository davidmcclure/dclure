<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

?>

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

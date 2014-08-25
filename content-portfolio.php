<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio'); ?>>

  <?php $projLink = get_field('project_link'); ?>
  <?php $postLink = get_field('post_link'); ?>
  <?php $heroLink = $postLink ? $postLink : $projLink; ?>

  <header class="entry-header">

    <!-- Date. -->
    <div class="entry-meta">
      <?php toolbox_posted_on(); ?>
    </div>

    <!-- Title. -->
    <h1 class="entry-title">
      <?php if ($heroLink): ?>
        <a href="<?php echo $heroLink; ?>"><?php the_title(); ?></a>
      <?php else: ?>
        <?php the_title(); ?>
      <?php endif; ?>
    </h1>

  </header>

  <!-- Content. -->
  <div class="entry-content">

    <!-- Hero image. -->
    <?php if ($image = get_field('image')): ?>
      <?php if ($heroLink): ?>
        <a href="<?php echo $heroLink; ?>">
          <img src="<?php echo $image['url']; ?>" />
        </a>
      <?php else: ?>
        <img src="<?php echo $image['url']; ?>" />
      <?php endif; ?>
    <?php endif; ?>

    <!-- Body. -->
    <?php the_content(); ?>

    <!-- Project link. -->
    <?php if ($projLink): ?>
      <a href="<?php echo $projLink; ?>" class="btn btn-primary">
        <i class="fa fa-rocket"></i>
        Launch the project
      </a>
    <?php endif; ?>

    <!-- Post link. -->
    <?php if ($postLink): ?>
      <a href="<?php echo $postLink; ?>" class="btn btn-primary">
        <i class="fa fa-file-text-o"></i>
        Read the blog post
      </a>
    <?php endif; ?>

  </div>

</article>

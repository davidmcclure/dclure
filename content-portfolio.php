<?php
/**
 * Just show date, title, and metadata.
 *
 * @package Toolbox
 * @since Toolbox 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio'); ?>>

    <?php $projLink = get_field('project_link'); ?>
    <?php $postLink = get_field('post_link'); ?>
    <?php $heroLink = $postLink ? $postLink : $projLink; ?>

    <!-- Title and date. -->
	<header class="entry-header">
		<div class="entry-meta"><?php toolbox_posted_on(); ?> </div>
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
            <a href="<?php echo $projLink; ?>"
                class="btn btn-primary">Launch the project</a>
		<?php endif; ?>

        <!-- Post link. -->
		<?php if ($postLink): ?>
            <a href="<?php echo $postLink; ?>"
                class="btn btn-primary">Read the blog post</a>
		<?php endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

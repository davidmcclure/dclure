<?php
/**
 * Just show post date and title.
 *
 * @package Toolbox
 * @since Toolbox 1.0
 */
?>

<h1 class="entry-title archive"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

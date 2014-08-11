<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo" class="row">
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
      <span>All content licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC-BY</a>.</span>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

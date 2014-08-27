<?php

/**
 * @copyright   2014 David McClure
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @package     dclure
 */

?>

  </div><!-- #main -->

  <hr />

  <footer id="colophon" role="contentinfo" class="row">
    <ul>

      <!-- GitHub. -->
      <li>
        <a href="https://github.com/davidmcclure">
          <i class="fa fa-github fa-fw"></i> davidmcclure
        </a>
      </li>

      <!-- Twitter. -->
      <li>
        <a href="https://twitter.com/clured">
          <i class="fa fa-twitter fa-fw"></i> clured
        </a>
      </li>

    </ul>

    <ul>

      <!-- Dylan. -->
      <li>Yes to dance beneath the diamond sky.</li>

      <!-- License. -->
      <li>
        <span>All content licensed under</span>
        <a href="http://creativecommons.org/licenses/by/3.0">CC-BY</a>.
      </li>

    </ul>

  </footer>

</div>

<?php wp_footer(); ?>

<!-- Network edges. -->
<?php if (is_home()): ?>
  <script>
    window._edges = <?php echo get_option('tag_edges'); ?>
  </script>
<?php endif; ?>

</body>
</html>

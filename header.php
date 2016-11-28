<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php

  // Print the <title> tag.
  wp_title('|', true, 'right');
  bloginfo('name');

?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

<!-- Typekit. -->
<script type="text/javascript" src="//use.typekit.net/fgt3hkt.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="container">
<?php do_action('before'); ?>

  <header id="branding" role="banner">

    <!-- Title. -->
    <span id="site-title">
      <a href="<?php echo home_url('/'); ?>">
        <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
      </a>
    </span>

    <!-- Navigation. -->
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

  </header>

  <div id="main">

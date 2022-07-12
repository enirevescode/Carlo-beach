<!doctype html>
<!--balise auto-->
<html <?php language_attributes(); ?>>

<head>
  <title>Palace 5* Carlo-Beach</title>

  <a href="<?php echo home_url('/'); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logohotel.png" type="image/x-icon">
  </a>
  <!-- Required meta tags -->
  <!-- balise "utf-8"-->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- meta données pub-->

  <?php if (is_home()) : ?>
    <meta name="description" content="Le site d'" />
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
    <meta name="description" content="Le site d'" />
  <?php endif; ?>

  <?php if (is_page() && !is_front_page()) : ?>
    <meta name="description" content="Le site d'" />
  <?php endif; ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <body class="home blog">
    <?php wp_body_open(); ?>

    <header>
      <?php get_template_part('navbar'); ?>
      
<section id='chbres_suites'>
  <h6 class="entete_h6" id="entete"></h6>
  <h1 class="entete2 display-5">Carlo Beach<h1>
  <h1 class="entete2 display-5">Chambres & Suites<h1>
</section>
      <!--entete-->
      <?php get_template_part('./content/booking'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</header>
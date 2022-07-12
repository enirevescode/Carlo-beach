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

<body <?php body_class();?>> 
  <body class="home blog">
    <?php wp_body_open(); ?>

    <section id="bg-i_compte">
    
      <?php get_template_part('navbar'); ?>
<br>
<br>
<br>
<div class="Signup_Form">
<form action="" method="POST" id="login" class="animate text-center">
<i title="REMEMBER" onclick="savedetails()" class="fa fa-save"></i>
<!-- <center> -->
<h1>S'identifier</h1>
<input type="email" id="email" name="email" placeholder="Adresse mail*" required/>
<input type="password" id="passcode" name="passcode" placeholder="Mot de passe*" required/>
<button class="btn1" type="submit">S'identifier</button>
<section>
<span><a href="#">Mot de passe oublié ?</a></span>
<span><a onclick="Signupform()">Vous n'avez pas de compte ?</a></span>
<br>
<p class="form_compte">Rejoignez My Monte-Carlo et profitez de -15% sur votre chambre et petit-déjeuner offert.</p>
</section>
<!-- </center> -->
</form>

<form action="" method="POST" id="signup" class="animate" hidden>
<center>
<h1>S'inscrire</h1>
<input type="text" id="username" name="username" placeholder="Full name*" required/>
<input type="tel" id="mob" name="mob" placeholder="Contact no*" required/>
<input type="email" id="emailaddress" name="emailaddress" placeholder="Email Address*" required/>
<input type="text" id="password" name="password" placeholder="Password*" required/>
<input type="password" id="Cpassword" name="Cpassword" placeholder="Confirm Password*" onkeypress="Validate()" required/>
<input type="button" value="SignUp" class="btn1" onclick="ValidateSubmission()">
<section>
<span><a onclick="Loginform()">Déjà inscrit ?</a></span>
</section>
</center>
</form>
</div>
<div id="popup"></div>
<br>
<br>
<br>
<br>
</section>
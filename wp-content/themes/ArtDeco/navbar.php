<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage artdeco
 * @since artdeco 1.0
 */

?>

<nav class="navbar-one flex">
  <div class="left flex">

    <div class="hotel">

      <li class="nav-item dropdown border-end mx-0">
        <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">NOS ETABLISSEMENTS</a>

        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
          <li><a class="dropdown-item" href="#">LE ROYAL</a></li>
          <li><a class="dropdown-item" href="#">LE PRINCESSE</a></li>
          <li><a class="dropdown-item" href="#">OPERA</a></li>
        </ul>
      </li>

    </div><!--/hotel-->

    <div class="carte">
      <li class="nav-link border-end"><a id="map" role="button" class="mx-auto" href="#"></a></li>
    </div>
    
    <div class="services">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle border-end" style="color:white" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">NOS SERVICES</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <li><a class="dropdown-item" href="http://hotel.enirevescodewp.fr/restaurants/">LES RESTAURANTS</a></li>
          <li><a class="dropdown-item" href="#">LES CHAMBRES</a></li>
          <li><a class="dropdown-item" href="#">LE SPA</a></li>
        </ul>
      </li>
    </div><!--/services-->
  </div><!--/left-->

  <div class="center">
    <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotels_logo.png" alt="Monte-Carlo" width="125" height="auto"></a>
  </div>

<!--RIGHT-->

<div class="right flex">
  <?php get_search_form(); ?>
</div>
    <div class="langue">
      <li class="nav-item dropdown border-end border-start">
        <a class="nav-link dropdown-toggle" style="color:white" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">FR</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
          <li><a class="dropdown-item" href="#">Spanish</a></li>
          <li><a class="dropdown-item" href="#">Deutch</a></li>
          <li><a class="dropdown-item" href="#">Italiano</a></li>
        </ul>
      </li>
    </div><!--/langue-->

    <div id="account"><a href="http://hotel.enirevescodewp.fr/compte/" class="compte"> MON COMPTE</a></div>
  </div><!--/right-->
 
</nav><!--</navbar1-->

<nav class="navbar-second flex">
  <div class="left">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotels_logo.png" alt="Monte-Carlo" width="125" height="auto">
  </div>

  <div class="right flex">
    <ul class="flex">
      <li><a href="http://hotel.enirevescodewp.fr/chambres-suites/">CHAMBRES & SUITES</a></li>
      <li><a href="http://hotel.enirevescodewp.fr/restaurants/">RESTAURANTS</a></li>
      <li><a href="http://hotel.enirevescodewp.fr/activites/">ACTIVITES</a></li>
      <li><a href="http://hotel.enirevescodewp.fr/spa/">LE SPA</a></li>
      <li><a href="http://hotel.enirevescodewp.fr/agenda/">AGENDA</a></li>
      <li><a href="">OFFRES</a></li>
      <li><a href="http://hotel.enirevescodewp.fr/a-propos/">A PROPOS</a></li>

      <button type="button" class="btn">RESERVER</button>
    </ul>
  </div><!--/right-->
</nav><!--/navbar2-->

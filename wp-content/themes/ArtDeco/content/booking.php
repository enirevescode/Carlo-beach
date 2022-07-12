<?php
/**
* The template for displaying all content posts.
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
* @package thème
* @since 1.0.2
*/


if ( ! defined( 'ABSPATH' ) ) {exit; // Exit if accessed directly.
} ?>

<div id="booking" class="section">
<div class="section-center">
<div class="container">
<div class="row">
<div class="booking-form">
<form>
<div class="row no-margin">
<div class="col-md-3">
<div class="form-header">
<h2>HÔTEL</br>
<h2>CARLO-BEACH</h2>
</div>
</div>
<div class="col-md-7">
<div class="row no-margin">
<div class="col-md-4">
<div class="form-group">
<span class="form-label">ARRIVEE</span>
<input class="form-control" type="date">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<span class="form-label">DEPART</span>
<input class="form-control" type="date">
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<span class="form-label">CHOIX DE CHAMBRE</span>
<select class="form-control">
<option>CHAMBRES</option>
<option>JUNIOR SUITES</option>
<option>SUITES</option>
<option>DIAMOND SUITES</option>
</select>

<span class="select-arrow"></span>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<span class="form-label">PERSONNES</span>
<select class="form-control">
<option>0</option>
<option>1</option>
<option>2</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
</div>
</div>

<div class="col-md-2">
<div class="form-btn">
<button class="submit-btn">RECHERCHER DISPONIBILITES</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div><!--id.booking-->
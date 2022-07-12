<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage artdeco
 * @since artdeco 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */;?>

<form role="search" method="get" class='search-form'>
<div class="searchBox mt-2">
    <input type="text" name="s" id="search_icon" class="searchInput" placeholder="Rechercher" value="<?php the_search_query(); ?>" />
    <button class="searchButton" id="search_icon"></button>
</div>
</form><!-- </form> -->
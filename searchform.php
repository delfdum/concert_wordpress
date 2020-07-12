<!-- l'input recherche -->
<form id="searchform" method="get" action="<?php
 if (empty($_GET['?s']) || $_GET['?s'] === '') {
     echo esc_url(home_url('/404'));
 } else {
    echo esc_url(home_url('/'));
}
?>">
  <label>
    <input type="text" class="search-field" name="s" placeholder="<?php echo get_theme_mod('search_text'); ?>" value="<?php echo get_search_query(); ?>">
  	</label>
    <input type="submit" value="Rechercher">
</form>

<?php get_header(); ?>
  <main class="container site-content">
    <section class="error-404">
      <h2><?php esc_html_e( 'Erreur 404', 'delfConcert' ); ?></h2>
      <h3><?php esc_html_e( 'La page que vous cherchez n\'existe pas.', 'delfConcert' ); ?></h3>

<!-- Bouon-->
<!--!!!!!!!!!!!!! sous 2 formes celle dynamic marche pas, à revoir-->

    <a href="<?php echo get_theme_mod('fp_button_url_3') ?>">
      <!-- texte bouton 'Retouner à l'accueil du site' -->
      <button type="button" class="call-to-action"><?php echo get_theme_mod('fp_button_text_3') ?></button>
    </a>

    <a href="front-page.php">
      <button type="button" class="call-to-action">
        Retourner à l'accueil du site
      </button>
    </a>


    <?php get_search_form(); ?>




    </section>
  </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>

<?php get_header(); ?>
  <main class="container site-content">
    <section class="error-404">
      <h2><?php esc_html_e( 'Erreur 404', 'delfConcert' ); ?></h2>
      <h3><?php esc_html_e( 'La page que vous cherchez n\'existe pas.', 'delfConcert' ); ?></h3>

  <!-- moteur de recherche -->
      <?php get_search_form(); ?>

<!-- bouton qui ramène à la page accueil -->
     <a href="<?php echo get_bloginfo('url') ?>">
       <button type="button" class="call-to-action">
         Retourner à l'accueil du site
       </button>
    </a>

<!-- A SAVOIR lien qui ramène à la 'racine du site' + une page particulière
<a href="<?php //echo get_bloginfo('url') . '/blog'; ?>">
 -->

    </section>
  </main>
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>

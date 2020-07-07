<?php get_header(); ?>

  <!-- modif image arrière-plan accueil -->
  <section class="page-header front-page-header" style="background-image: url('
      <?php echo get_theme_mod('fp_container_image'); ?>
      ');">
    <!-- modif titre page -->
    <h1 class="page-title"><?php echo get_theme_mod('fp_texts_title'); ?></h1>
    <!-- bouton résa billet -->
    <a href="<?php echo get_theme_mod('fp_button_url') ?>">
      <!-- texte bouton 'Réserver mon billet' -->
      <button type="button" class="call-to-action"><?php echo get_theme_mod('fp_button_text') ?></button>
    </a>
  </section>

  <main class="container front-content">
    <section class="custom-presentation">
      <img src="./assets/images/yannis-papanastasopoulos-unsplash.jpg" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title">Un super groupe de musique</h2>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.

          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
          quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.

          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur.
        </p>
        <a href="page.html">
          <button type="button" class="call-to-action">En savoir plus</button>
        </a>
      </div>
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <i class="fas fa-birthday-cake fa-3x"></i>
        <h3 class="custom-title">Concert célébration</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-music fa-3x"></i>
        <h3 class="custom-title">L'amour de la musique</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="custom-block">
        <i class="fas fa-ticket-alt fa-3x"></i>
        <h3 class="custom-title">+3000 tickets en vente</h3>
        <p class="custom-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="custom-section">
      <blockquote class="star-quote">
        <p class="quote-content">
          Ce qui se conçoit bien s'énonce clairement et les mots pour le dire
          arrivent aisément.
        </p>
        <cite class="quote-footer">
          Boileau
        </cite>
      </blockquote>
    </section>
  </main>

<?php get_footer(); ?>

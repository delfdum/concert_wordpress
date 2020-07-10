<?php //font-page=page d'accueil ?>
<?php get_header(); ?>

  <!-- modifier image banniere arrière-plan accueil -->
  <section class="page-header front-page-header
      <?php
        if(get_theme_mod('fp_container_boxy')) :
          echo 'boxy-header';
        endif;
      ?>"
      style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
    <!-- modifier titre page -->
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_size'); ?>px;"><?php echo get_theme_mod('fp_texts_title'); ?></h1>
    <!-- bouton résa billet -->
    <a href="<?php echo get_theme_mod('fp_button_url') ?>">
      <!-- texte bouton 'Réserver mon billet' -->
      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style'); ?>"><?php echo get_theme_mod('fp_button_text') ?></button>
    </a>
  </section>
<!-- 2e contenair image +1 h2 + & sous-texte + 1 bouton  -->
  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('custom_container_image'); ?>" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title" style="font-size: <?php echo get_theme_mod('custom_texts_title_size'); ?>px;"><?php echo get_theme_mod('custom_texts_title'); ?></h2>

          <p class="custom-content"><?php echo get_theme_mod('custom_texts_description'); ?></p>
          <a href="<?php echo get_bloginfo('custom_button_url'); ?>">
            <button type="button" class="call-to-action"><?php echo get_theme_mod('custom_button_text') ?></button>
          </a>
      </div>

  <!-- 3 pictos et 3 textes -->
    </section>
    <section class="custom-blocks">
      <div class="custom-block">
        <img src="<?php echo get_theme_mod('fp_container_picto_1'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('fp_texts_title_col_1'); ?></h3>
       <p class="custom-content"><?php echo get_theme_mod('fp_texts_description_col_1'); ?></p>
      </div>
      <div class="custom-block">
        <img src="<?php echo get_theme_mod('fp_container_picto_2'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('fp_texts_title_col_2'); ?></h3>
        <p class="custom-content"><?php echo get_theme_mod('fp_texts_description_col_2'); ?></p>
      </div>
      <div class="custom-block">
        <img src="<?php echo get_theme_mod('fp_container_picto_3'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('fp_texts_title_col_3'); ?></h3>
       <p class="custom-content"><?php echo get_theme_mod('fp_texts_description_col_3'); ?></p>
      </div>
    </section>

<!-- CITATION -->
    <section class="custom-section <?php echo get_theme_mod('fp_quote_style'); ?>" style="background-color: <?php echo get_theme_mod('fp_quote_background'); ?>;">
      <blockquote class="star-quote">
        <p class="quote-content"><?php echo get_theme_mod('fp_quote_text', 'valeur par défaut'); ?></p>
       <cite class="quote-footer"><?php echo get_theme_mod('fp_quote_source'); ?></cite>
      </blockquote>
    </section>
  </main>

<?php get_footer(); ?>

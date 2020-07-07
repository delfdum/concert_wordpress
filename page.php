<?php
// Modèle de page  : page.php
// Modèle utilisé par WP pour afficher toute page du site qui n'est pas la page 'Blog', la page d'un article (single.php) ou la page d'accueil forcée (front-page.php).
 ?>

<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

    <?php if(has_post_thumbnail()) : ?>

      <section class="page-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <?php else : ?>
      <section class="page-header">
      <?php endif; ?>

    <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

    <main class="container site-content">
      <article class="entry page">
        <section class="entry-content">
          <?php the_content(); ?>

          <?php comments_template(); ?>

        </section>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
  </main>

<?php get_footer(); ?>

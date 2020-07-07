<!--
Modèle des articles (blog - liste des articles) : index.php

On sépare l'en-tête et le corps de la page en créant un fichier header.php
L'intérêt du fichier header.php est de factoriser le code de l'en-tête.
C'est-à-dire éviter de répéter le même bout code dans plusieurs fichiers
différents ayant le même en-tête.
On appelle donc la fonction get_header(); pour inclure ce fichier header.php.
-->
<?php get_header(); ?>

  <main class="container site-content">
    <section class="main-content">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>

      <article class="entry post">
        <header class="entry-header">
          <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['class' => 'featured-image', 'title' => 'Vignette']); ?>
          <?php endif; ?>

          <section class="entry-metadata">
            <section class="entry-data">
              <h6 class="publish-date"><?php the_time('d M Y'); ?></h6>

              <?php
                $categories = get_the_category();
                $separator = " ";
                $output = '';

                if($categories) {
                  forEach($categories as $category) {
                    $output .= '<h5 class="entry-category"><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></h5>' . $separator;
                  }
                }
                echo trim($output, $separator);
              ?>

            </section>

<!-- affichage dynamique des titres de chaque article  -->
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

          </section>
        </header>

        <section class="entry-content">
<!-- affichage extrait pour chaque article -->
          <?php the_excerpt(); ?>
        </section>

        <footer class="entry-footer">
          <div class="read-more">
<!-- lien dynamique vers article (page single.php) -->
            <a href="<?php the_permalink(); ?>">Lire la suite</a>
          </div>
        </footer>
      </article>
<!--fin de la boucle -->
      <?php endwhile; ?>
      <?php endif; ?>
<!-- pagination -->

      <nav class="navigation pagination">
        <?php
        the_posts_pagination(
          array(
            'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
            'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
          )
        );
        ?>
      </nav>
    </section>

    <?php get_sidebar(); ?>
  </main>
  <?php get_footer(); ?>

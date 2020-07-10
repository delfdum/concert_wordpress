<?php // single.php = Modèle d’un article ?>
<?php get_header(); ?>

  <main class="container site-content">
<!-- Condition: afficher articles si il y a -->
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <article class="entry single">
      <header class="entry-header">
        <section class="entry-metadata">
          <section class="entry-data">
<!-- nom auteur + lien vers la page des articles écrits par l'auteur -->
            <h4 class="author">
            <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?></a></h4>
<!-- date de publication -->
            <h6 class="publish-date"><?php the_time('d M Y') ?></h6>
<!-- les categories de chaque articles -->
            <?php
              $categories = get_the_category();
              $separator = " ";
              $output = '';

              if($categories) {
                forEach($categories as $category) {
                  $output .= '<h5 class="entry-category"><a href="'.get_category_link($category
                  ->term_id).'">'.$category->cat_name .'</a></h5>' . $separator;
                }
              }
              echo trim($output, $separator);
            ?>
<!-- les commentaires des internautes -->
            <h4 class="comments-number">
              <?php comments_number('Aucun commentaire', '1 commentaire',
             '% commentaires'); ?>
            </h4>
          </section>
<!-- titre de l'article -->
          <h2 class="entry-title"><?php the_title(); ?></h2>
        </section>
<!-- Partie image  en posant une condition si la vignette existe (image mise en avant), on peut afficher l'image -->
        <?php
          if(has_post_thumbnail()) :
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $thumbnail_title = get_the_title($thumbnail_id);
            the_post_thumbnail('full', ['class' => 'featured-image', 'title' => $thumbnail_title,
            'alt' => $thumbnail_alt]);
          endif;
        ?>
      </header>
<!-- partie texte sous forme de paragraphe -->
      <section class="entry-content">
        <?php the_content(); ?>
      </section>

<!-- partie auteur-->
      <section class="author-card">
        <section class="author-thumbnail">
<!-- Afficher l'avatar de l'auteur -->
         <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </section>
        <section class="author-metadata">
<!-- Afficher nom et présentation de l'auteur -->
          <h3 class="author-meta-name"><?php the_author(); ?></h3>
          <p class="author-meta-description"><?php the_author_meta('description'); ?></p>
        </section>
      </section>

<!-- Pagination avec le titre article suivant ou precedent -->
        <footer class="entry-footer">
          <?php
            the_post_navigation(
              array(
                'prev_text' => '<i class="fas fa-arrow-left"></i> %title',
                'next_text' => '%title <i class="fas fa-arrow-right"></i>'
              )
            );
          ?>

<!-- include le fichier comments.php -->
          <?php comments_template(); ?>

        </footer>
      </article>
<!-- fin de la boucle des posts -->
    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_sidebar(); ?>
  </main>
<?php get_footer(); ?>

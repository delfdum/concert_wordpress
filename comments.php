<section class="comments">
  <h3 class="comments-title">
    <?php comments_number('Aucun commentaire', '1 commentaire', '% commentaires'); ?> pour "<?php the_title(); ?>"
  </h3>
  <?php
// la liste des commentaires de l'article
    wp_list_comments();

// Pagination pour les commentaires MAIS ATTENTION régler dans wp le nombre d'affichage des commentaires.
// Dans Tableau de bord > Réglages > Commentaires > Diviser les commentaires en pages, avec X commentaires par page)
    echo '<div class="comments-pagination">';
    paginate_comments_links(
      array(
        'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
        'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
      )
    );
    echo '</div>';
// formulaire de commentaire
    comment_form(
      array(
        'title_reply'   => 'Laisser un commentaire',
        'label_submit'  => 'Publier'
      )
    );
  ?>
</section>

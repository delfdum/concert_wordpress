<!--Partie de modèle de barre latérale : sidebar.php  -->

<!-- possibilité de cacher la sidebar latérale -->
<aside class="sidebar <?php if(get_theme_mod('widgets-sidebar')) : echo 'hidden'; endif; ?>" id="widgets-sidebar">
<!--on déclare une zone de widgets -->
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
  ?>
</aside>

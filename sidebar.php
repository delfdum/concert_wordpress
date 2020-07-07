<!--Partie de modèle de barre latérale : sidebar.php  -->
<aside class="sidebar">
<!--on déclare une zone de widgets --> 
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
  ?>
</aside>

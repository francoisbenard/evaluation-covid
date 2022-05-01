<?php
/* Template Name: Modèle page */
?>

<?php get_header() ?>


<div class="container p-0">

  <h1 class="titre-page pt-5 pb-5 text-center">
    <?php the_field('titre-page') ?>
  </h1>

  <div class="p-5">
    <?php the_field('wysiwyg') ?>
  </div>

</div>


<?php get_footer() ?>
<?php get_header() ?>

<!-- bloc actualités  -->
<div class="container" style="background: #F6F6F6">
  <h1 class="titre-page pt-5 pb-5 text-center bloc-border-red">
    Actualités
  </h1>
  <div class="pt-5 pb-5 bloc-actu">
   
      
        <!-- <div class="card mb-3"> -->
        <div class="row g-0">
          <!-- <div class="col-md-4"> -->
          <h1 class="titre-actu "><?php the_title(); ?></h1>
          <p class=""><small class="text-muted"><?php the_date(); ?></small></p>
          <p class=" texte-actu"><?php the_field('sous_titre') ?></p>
          <img src="<?php echo (get_field('photo')['url']); ?>" class="mb-5" style="width:fit-content" alt="...">
          <p class=" texte-actu " style="width:fit-content">
            <?php
            // Display the Post Excerpt
            the_content() ?></p>
        </div>
      
   
  </div>
</div>
</div>
<?php get_footer() ?>
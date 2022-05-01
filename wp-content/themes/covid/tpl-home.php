<?php
/* Template Name: Modèle accueil */
?>

<?php get_header() ?>
<div class="container p-0">

  <!-- bloc je participe à la lutte  -->

  <h1 class="titre-page pt-5 pb-5 text-center">
    <?php the_field('titre_lutte') ?>
  </h1>
  <div class="text-center">
    <img src="<?php echo (get_field('image_trouvez')['url']); ?>" class="m-5 hover-img-trouvez">

    
    <a href="/index.php/souhait/">
    <img src="<?php echo (get_field('image_solidaire')['url']); ?>" class="m-5 hover-img-solidaire">
    </a>
  </div>
  <!-- bloc je souhaite etre informé   -->

  <h1 class="titre-page pt-5 pb-5 text-center bloc-border-red">
    <?php the_field('titre_etre_informe') ?>
  </h1>
  <div class="row link-actu pt-5 pb-5">
    <div class="col">
      <?php the_field('contenu_informe') ?>
    </div>
  </div>
  <!-- bloc actualités  -->
  <div style="background: #F6F6F6">
    <h1 class="titre-page pt-5 pb-5 text-center bloc-border-red">
      <?php the_field('titre_actu') ?>
    </h1>
    <div class="pt-5 pb-5 bloc-actu">
      <?php
      // Define our WP Query Parameters
      $the_query = new WP_Query('posts_per_page=3'); ?>
      <?php
      // Start our WP Query
      while ($the_query->have_posts()) : $the_query->the_post();
        // Display the Post Title with Hyperlink
      ?>
        <a href="<?php the_permalink() ?>">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo (get_field('photo')['url']); ?>" class="img-fluid img-thumbnail rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title titre-actu"><?php the_title(); ?></h5>
                  <p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
                  <p class="card-text texte-actu"><?php the_field('sous_titre'); ?></p>

                </div>
              </div>
            </div>
          </div>
        </a>
      <?php
      // Repeat the process and reset once it hits the limit
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<!-- footer -->
<?php get_footer() ?>
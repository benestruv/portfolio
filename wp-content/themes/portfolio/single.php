<?= get_header() ?>

<div class="single-container">
  <div class="btn">
    <a href="/portfolio/realisations"><span class="tiret-corail"> <i class="fas fa-arrow-left"></i> </span>Portfolio</a>
  </div><br />

  <?php if (have_posts() ):?>
  <?php while(have_posts()):the_post(); ?>
  <div class="realisation">

    <!-- IMAGE -->
    <?php $img = get_field('image_du_projet', $projet->ID);?>
    <span href=<?php echo $img["url"] ?>>
    <img src=<?php echo $img["sizes"]["large"]; ?>  class="Image du projet"/></span><br />

    <div class="details-projet">
      <div class="titre-projet">
        <h2 class="underline"><?php the_field('nom_du_projet', $projet->ID) ?></h2><br />
        <h2 class="type"><?php the_field('type_de_projet', $projet->ID) ?></h2><br />
      </div>
      <div class="description-projet">
        <p><?php the_field('description_du_projet', $projet->ID) ?></p><br />
      </div>
    </div>
  <div class="images-additionnelles">
    <?php if( have_rows('images_additionnelles') ): ?>

    <?php while( have_rows('images_additionnelles') ): the_row(); 
    // vars
    $image = get_sub_field('image_additionnelle');?>

    <div class="image-additionnelle"><img src="<?php echo $image['url']; ?>" alt="image additionnelle" title="<?php the_sub_field('image_additionnelle'); ?>"/></div>


    <?php endwhile; ?>
    <?php endif; ?>
  </div>

    <?php endwhile; ?>
    <?php else: ?>
    <p>Aucune réalisation trouvée.</p>
    <?php endif; ?>


  </div>
</div>




<?= get_footer() ?>
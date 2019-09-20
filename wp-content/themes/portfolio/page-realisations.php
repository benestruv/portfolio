<?=
/*
Template name: Portfolio
 */

get_header() ?>
<div class="cadre-noir-transparent"></div>
<?php 
    query_posts(array( 
        'post_type' => 'portfolio',
        'showposts' => 10 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
<div class="realisations">
    <div class="realisation-gauche">
        <h2>Réalisation</h2>
        <h2 class="underline liste-realisations"><a href="<?php the_permalink() ?>"><?php the_field('nom_du_projet', $projet->ID) ?></a></h2><br />
        <div class="btn btn-realisation">
        <a href="<?php the_permalink() ?>"><span class="tiret-corail"> <i class="fas fa-plus"></i> </span>Voir le projet</a>
        </div>
    </div>
    <div class="realisation-droit">
        <?php $img = get_field('apercu_du_projet', $projet->ID);?>
        <span href=<?php echo $img["url"] ?>>
        <img src=<?php echo $img["sizes"]["large"]; ?>  class="Aperçu du projet"/></span><br />
    </div>
</div>
<?php endwhile;?>

<?= get_footer() ?>
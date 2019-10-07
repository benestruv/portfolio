<?=
/*
Template name: Portfolio
 */

get_header() ?>

<form class="move">
	<fieldset>
		<a href="#sec1" class="circle"><p id="high1"><i class="fas fa-circle nav-circle"></i></p></a>
		<a href="#sec2" class="circle"><p id="high2"><i class="fas fa-circle nav-circle"></i></p></a>
		<a href="#sec3" class="circle"><p id="high3"><i class="fas fa-circle nav-circle"></i></p></a>
        <a href="#sec4" class="circle"><p id="high4"><i class="fas fa-circle nav-circle"></i></p></a>
        <a href="#sec5" class="circle"><p id="high5"><i class="fas fa-circle nav-circle"></i></p></a>
        <a href="#sec6" class="circle"><p id="high6"><i class="fas fa-circle nav-circle"></i></p></a>
        <a href="#sec7" class="circle"><p id="high7"><i class="fas fa-circle nav-circle"></i></p></a>
        <a href="#sec8" class="circle"><p id="high8"><i class="fas fa-circle nav-circle"></i></p></a>
        <!--<a href="#sec9" class="circle"><p id="high9"><i class="fas fa-circle nav-circle"></i></p></a>-->
        <!--<a href="#sec10" class="circle"><p id="high10"><i class="fas fa-circle nav-circle"></i></p></a>-->
	</fieldset>
</form>





<!--<div class="cadre-noir-transparent"></div>-->
<?php 
    query_posts(array( 
        'post_type' => 'portfolio',
        'showposts' => 10 
    ) );  
?>
<?php $count = 1; ?> <!-- initialisation du compteur -->
<?php while (have_posts()) : the_post(); ?>
<div class="realisations realisation<?php echo $count; ?> spacer s1" id="sec<?php echo $count; ?>"><!-- Ajout du compteur à la classe -->
    <div class="realisation-gauche"> 
        <h2 class="stagger2">Réalisation</h2>
        <h2 class="underline liste-realisations stagger2"><a href="<?php the_permalink() ?>"><?php the_field('nom_du_projet', $projet->ID) ?></a></h2><br />
        <div class="btn btn-realisation stagger2">
        <a href="<?php the_permalink() ?>"><span class="tiret-corail"> <i class="fas fa-plus"></i> </span>Voir le projet</a>
        </div>
    </div>
    <div class="realisation-droit">
        <?php $img = get_field('apercu_du_projet', $projet->ID);?>
        <span href=<?php echo $img["url"] ?>>
        <img src=<?php echo $img["sizes"]["large"]; ?>  class="apercu-projet"/></span><br />
    </div>
    
</div>
<?php $count++; ?> <!-- Ajout de 1 au compteur" -->
<?php endwhile;?>




<?= get_footer() ?>
<?=
/*
Template name: Accueil
 */

get_header() ?>



<div class="accueil-container">

    <div class="gauche">
        <!-- LOGO & PROFESSION -->
        <div class="accueil-gauche">
            <div class="logo">
                <!-- IMAGE -->
                <?php $img = get_field('logo', 5);?>
                    <span href=<?php echo $img["url"] ?>>
                    <img src=<?php echo $img["sizes"]["large"]; ?>  class="logo"/></span>
            </div>
            <h1 class="hide"><?php the_field('titre_du_site', 5) ?></h1>
            <p class="profession"><?php the_field('profession', 5) ?></p>
        </div>
    </div>

    <div class="droit">
        <!-- ILLUSTRATION -->
        <div class="accueil-droit">
                <!-- IMAGE -->
                <?php $img = get_field('accueil_illustration', 5);?>
                    <span href=<?php echo $img["url"] ?>>
                    <img src=<?php echo $img["sizes"]["large"]; ?>  class="accueil-illustration"/></span>
        </div>
    </div>

</div>

    
<?= get_footer() ?>
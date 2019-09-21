<?=
/*
Template name: CV
 */

get_header() ?>

<div class="cadre-noir-transparent-cv"></div>

<div class="cv">
    
    <!-- CV -->

    <div class="cv-gauche">
        <div class="cv-titre stagger">
            <a href="/portfolio/accueil">
            <?php $img = get_field('logo', 5);?>
            <span href=<?php echo $img["url"] ?>>
            <img src=<?php echo $img["sizes"]["large"]; ?>  class="logo"/></span></a><br/>
            <h2><?php the_field('fonction_visee', 9) ?></h2><br/><br/>
        </div>

        <!-- Coordonnées -->
        <div class="coordonees stagger">
            <p><?php the_field('date_de_naissance', 9) ?></p><br />
            <p><?php the_field('telephone', 9) ?></p><br />
            <p><?php the_field('adresse', 9) ?></p><br />
            <p><?php the_field('mail', 9) ?></p><br />
            <p><?php the_field('url_site', 9) ?></p>
        </div>


        <!-- A propos -->
        <div class="apropos stagger">
            <h2><?php the_field('titre_à_propos', 9) ?></h2>
            <p><?php the_field('texte_à_propos', 9) ?></p>
        </div>


        <!-- Formations -->
        <div class="formations stagger">
            <h2><?php the_field('formations_titre', 9) ?></h2>
            <?php
                if( have_rows('formation') ):
                    while ( have_rows('formation') ) : the_row();?>
                    <ul>
                            <h4><?php the_sub_field('nom_formation'); ?></h4>
                            <p><?php the_sub_field('centre_formation');?></p><span class="separator"> | </span>
                            <p><?php the_sub_field('ville_formation');?></p><span class="separator"> | </span>
                            <p><?php the_sub_field('annee_formation');?></p>
                        </li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>


        <!-- Etudes -->
        <div class="etudes stagger">
            <h2><?php the_field('etude_titre', 9) ?></h2>
            <?php
                if( have_rows('etudes') ):
                    while ( have_rows('etudes') ) : the_row();?>
                    <ul>
                        <li>
                            <h4><?php the_sub_field('nom_etudes'); ?></h4>
                            <p><?php the_sub_field('nom_ecole');?></p><span class="separator"> | </span>
                            <p><?php the_sub_field('ville_ecole');?></p><span class="separator"> | </span>
                            <p><?php the_sub_field('annee_etudes');?></p>
                        </li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>


        <!-- Expériences professionnelles -->
        <div class="experiences stagger">
            <h2><?php the_field('experience_pro_titre', 9) ?></h2>
            <?php
                if( have_rows('experiences_professionnelles') ):
                    while ( have_rows('experiences_professionnelles') ) : the_row();?>
                    <ul>
                        <li>
                            <h4><?php the_sub_field('nom_emploi'); ?></h4>
                            <p><?php the_sub_field('ville_emploi');?></p><span class="separator"> | </span>
                            <p><?php the_sub_field('annee_emploi');?></p>
                        </li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>


        <!-- Langages de programmation -->

        <div class="langage stagger">
            <h2><?php the_field('langage_titre', 9) ?></h2>
            <div class="langage-repeater">
            <?php if( have_rows('langage_programmation') ): ?>

                <?php while( have_rows('langage_programmation') ): the_row(); 
                // vars
                $image = get_sub_field('logo_language_prog');?>
 
                <div class="langage-div"><img src="<?php echo $image['url']; ?>" alt="Logo langage" class="logo-langage" title="<?php the_sub_field('nom_langage_prog'); ?>"/></div>
                

                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>


        <!-- Logiciels -->
        <div class="logiciels stagger">
            <h2><?php the_field('logiciels_titre', 9) ?></h2>
            <?php
                if( have_rows('logiciels') ):
                    while ( have_rows('logiciels') ) : the_row();?>
                    <ul>
                        <li><?php the_sub_field('nom_logiciel'); ?></li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>

        <!-- Langues -->
        <div class="langues stagger">
            <h2><?php the_field('langue_titre', 9) ?></h2>
            <?php
                if( have_rows('langues') ):
                    while ( have_rows('langues') ) : the_row();?>
                    <ul>
                        <li><?php the_sub_field('langue');?><span class="separator"> | </span>
                        <?php the_sub_field('niveau');?></li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>


        <!-- Hobbys -->
        <div class="hobbys stagger">
            <h2><?php the_field('hobby_titre', 9) ?></h2>
            <?php
                if( have_rows('hobbys') ):
                    while ( have_rows('hobbys') ) : the_row();?>
                    <ul>
                        <li><?php the_sub_field('nom_du_hobby'); ?></li>
                    </ul>
                    <?php
                    endwhile;
                else :
                endif;
            ?>
        </div>
    </div>
    <div class="cv-droit">
        <!-- IMAGE -->
        <?php $img = get_field('photo_cv', 9);?>
        <span href=<?php echo $img["url"] ?>>
        <img src=<?php echo $img["sizes"]["large"]; ?>  class="photo-cv"/></span>
    </div>
</div>



<?= get_footer() ?>
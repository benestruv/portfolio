<?=
/*
Template name: Contact
 */

get_header() ?>

<div class="cadre-noir-transparent"></div>

<div class="contact-container">

    <!-- Contact -->
    <div class="contact-gauche">
        <h2 class="underline">Contactez-moi</h2>
        <h3 class="space-top">Par mail</h3>
        <p><a href="mailto:benedicte.struvay@gmail.com"><?php the_field('mail', 11) ?></a></p>
        <h3>Par téléphone</h3>
        <p><?php the_field('tel', 11) ?></p>
    </div>


    <div class="contact-droit">
        <h2 class="underline">Réseaux sociaux</h2>
        <div class="space-top">
            <a href="https://twitter.com/eivy"><i class="fab fa-twitter"></i></a>
            <a href="https://github.com/benestruv"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/eivychan/?hl=fr"><i class="fab fa-instagram"></i></a><br />
            <a href="https://www.linkedin.com/in/b%C3%A9n%C3%A9dicte-struvay-0859bb54/"><i class="fab fa-linkedin-in"></a></i>
            <a href="https://www.deviantart.com/eivy-chan"><i class="fab fa-deviantart"></i><a>
            <a href="mailto:benedicte.struvay@gmail.com"><i class="far fa-paper-plane"></i></a>
        </div>
    </div>

</div>

<?= get_footer() ?>
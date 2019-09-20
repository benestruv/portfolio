<?= get_header() ?>

<section class="row">
    <article class="col-md-12 page-site">

        <?php
        if(have_posts()):
            while (have_posts() ): the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

        <?php endwhile;?>
        <?php endif;?>
    </article>
</section>

<?= get_footer() ?>
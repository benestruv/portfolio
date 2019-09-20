<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1"/>
    <title>Bénédicte Struvay | Portfolio</title>

    <link rel="icon" href="img\favico.ico" type="image/x-icon"/>
    <link rel="icon" href="/wp-content/themes/portfolio/img/favico.ico" type="image/x-icon" />

    <?php wp_head() ?>
</head>



<body <?php body_class(); ?>>

    <!-- navbar -->
    <div class="menu-container">
        <nav>
            <div class="nav1">
                <?php
                    $args = array(
                        'theme_location' => 'menu',
                        'menu_class' => 'menu',
                        'walker' => new wp_bootstrap_navwalker() // Compatibilité bootstrap/wp
                    );    
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="nav2">
                <a href="/portfolio"><img class="ico-menu" src="wp-content/themes/portfolio/img/favico.png"/></a>

            </div>
        </nav>
    </div>
</div>


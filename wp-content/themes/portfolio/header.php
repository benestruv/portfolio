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
            <a href="/"><?php $img = get_field('icone_accueil', 5);?>
                    <span href=<?php echo $img["url"] ?>>
                    <img src=<?php echo $img["sizes"]["large"]; ?>  class="ico-menu"/></span></a>

            </div>
        </nav>


        <!-- burger menu -->
    <div class="menu-burger">
            <div class="menu-burger-nav1">
                <?php
                    $args = array(
                        'theme_location' => 'menu',
                        'menu_class' => 'menu',
                        'walker' => new wp_bootstrap_navwalker() // Compatibilité bootstrap/wp
                    );    
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="coord-menu-cv">
                <p>0489/92.16.11</p>
                <p>benedicte.struvay<br/>@gmail.com</p>
                <a href="https://github.com/benestruv"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/eivychan/?hl=fr"><i class="fab fa-instagram"></i></a><br />
                <a href="https://www.linkedin.com/in/b%C3%A9n%C3%A9dicte-struvay-0859bb54/"><i class="fab fa-linkedin-in"></a></i>
            </div>
    
    </div>
    
    </div>
</div>


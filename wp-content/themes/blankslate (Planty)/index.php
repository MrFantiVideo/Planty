<?php
    get_header();
?>

<?php
    $theme_url = get_stylesheet_directory_uri();

    $home_page_banner_title = "BOISSON ÉNERGISANTE 100% naturelle";

    $home_page_section_1_title = "L’énergie des plantes";
    $home_page_section_1_paragraph = "Planty, c’est la première boisson énergisante composée à 100 % de produits naturels. Avec son goût frais et fruité, retrouvez votre énergie grâce aux plantes riches en vitamine B2, à n’importe quel moment de la journée.";

    $home_page_section_2_title = "Les goûts";
    $home_page_section_2_paragraph = "Nous avons une saveur pour chaque moment de votre journée.";

    $home_page_section_2_taste_1_title = "Fraise";
    $home_page_section_2_taste_1_image = $theme_url . "/assets/images/taste_strawberry.png";
    $home_page_section_2_taste_2_title = "Pample mousse";
    $home_page_section_2_taste_2_image = $theme_url . "/assets/images/taste_moss_grape.png";
    $home_page_section_2_taste_3_title = "Framboise";
    $home_page_section_2_taste_3_image = $theme_url . "/assets/images/taste_raspberry.png";
    $home_page_section_2_taste_4_title = "Citron";
    $home_page_section_2_taste_4_image = $theme_url . "/assets/images/taste_lemon.png";

    $home_page_section_3_title = "Ce qu'ils en pensent";

    $home_page_section_3_opinions_1_name = "Fatiha";
    $home_page_section_3_opinions_1_paragraph = "La meilleure boisson énergisante disponible sur le marché !";
    $home_page_section_3_opinions_1_image = $theme_url . "/assets/images/person_1.png";
    $home_page_section_3_opinions_2_name = "Véro";
    $home_page_section_3_opinions_2_paragraph = "Frais & fruité c’est parfait pour accompagner le goûter.";
    $home_page_section_3_opinions_2_image = $theme_url . "/assets/images/person_2.png";
    $home_page_section_3_opinions_3_name = "Marc";
    $home_page_section_3_opinions_3_paragraph = "Un boost d’énergie sans produits chimiques, un vrai plus dans ma journée.";
    $home_page_section_3_opinions_3_image = $theme_url . "/assets/images/person_3.png";
?>

<main>
        <div class="banner">
            <div class="banner-contents">
                <h1><?php echo get_theme_mod('home_page_banner_title', $home_page_banner_title);?></h1>
                <div class="banner-content">
                    <img src="<?php echo $theme_url;?>/assets/images/leaf_left.png" alt="Feuillage">
                    <img src="<?php echo $theme_url;?>/assets/images/leaf_right.png" alt="Feuillage">
                </div>
                <img class="can" src="<?php echo $theme_url;?>/assets/images/can.png" alt="Canette">
            </div>
        </div>
        <div class="container-border banner-border"></div>
        <div class="description">
            <h2><?php echo get_theme_mod('home_page_section_1_title', $home_page_section_1_title);?></h2>
            <p><?php echo get_theme_mod('home_page_section_1_paragraph', $home_page_section_1_paragraph);?></p>
        </div>
        <div class="tastes">
            <h2><?php echo get_theme_mod('home_page_section_2_title', $home_page_section_2_title);?></h2>
            <p><?php echo get_theme_mod('home_page_section_2_paragraph', $home_page_section_2_paragraph);?></p>
            <div class="tastes-cards">
                <div class="tastes-card">
                    <h1><?php echo get_theme_mod('home_page_section_2_taste_1_title', $home_page_section_2_taste_1_title);?></h1>
                    <img src="<?php echo get_theme_mod('home_page_section_2_taste_1_image', $home_page_section_2_taste_1_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_1_title', $home_page_section_2_taste_1_title);?>">
                </div>
                <div class="tastes-card">
                    <h1><?php echo get_theme_mod('home_page_section_2_taste_2_title', $home_page_section_2_taste_2_title);?></h1>
                    <img src="<?php echo get_theme_mod('home_page_section_2_taste_2_image', $home_page_section_2_taste_2_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_2_title', $home_page_section_2_taste_2_title);?>">
                </div>
                <div class="tastes-card">
                    <h1><?php echo get_theme_mod('home_page_section_2_taste_3_title', $home_page_section_2_taste_3_title);?></h1>
                    <img src="<?php echo get_theme_mod('home_page_section_2_taste_3_image', $home_page_section_2_taste_3_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_3_title', $home_page_section_2_taste_3_title);?>">
                </div>
                <div class="tastes-card">
                    <h1><?php echo get_theme_mod('home_page_section_2_taste_4_title', $home_page_section_2_taste_4_title);?></h1>
                    <img src="<?php echo get_theme_mod('home_page_section_2_taste_4_image', $home_page_section_2_taste_4_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_4_title', $home_page_section_2_taste_4_title);?>">
                </div>
            </div>
            <button onclick="location.href='/commander'">Commander</button>
        </div>
        <div class="container-border"></div>
        <div class="opinions">
            <h2 class="opinions-title"><?php echo get_theme_mod('home_page_section_3_title', $home_page_section_3_title);?></h2>
            <div class="opinions-cards">
                <div class="opinions-card">
                    <img src="<?php echo get_theme_mod('home_page_section_3_opinions_1_image', $home_page_section_3_opinions_1_image);?>" alt="<?php echo get_theme_mod('home_page_section_3_opinions_1_name', $home_page_section_3_opinions_1_name);?>">
                    <div class="opinions-infos">
                        <h2><?php echo get_theme_mod('home_page_section_3_opinions_1_name', $home_page_section_3_opinions_1_name);?></h2>
                        <p><?php echo get_theme_mod('home_page_section_3_opinions_1_paragraph', $home_page_section_3_opinions_1_paragraph);?></p>
                    </div>
                </div>
                <div class="opinions-card">
                    <img src="<?php echo get_theme_mod('home_page_section_3_opinions_2_image', $home_page_section_3_opinions_2_image);?>" alt="<?php echo get_theme_mod('home_page_section_3_opinions_2_name', $home_page_section_3_opinions_2_name);?>">
                    <div class="opinions-infos">
                        <h2><?php echo get_theme_mod('home_page_section_3_opinions_2_name', $home_page_section_3_opinions_2_name);?></h2>
                        <p><?php echo get_theme_mod('home_page_section_3_opinions_2_paragraph', $home_page_section_3_opinions_2_paragraph);?></p>
                    </div>
                </div>
                <div class="opinions-card">
                    <img src="<?php echo get_theme_mod('home_page_section_3_opinions_3_image', $home_page_section_3_opinions_3_image);?>" alt="<?php echo get_theme_mod('home_page_section_3_opinions_3_name', $home_page_section_3_opinions_3_name);?>">
                    <div class="opinions-infos">
                        <h2><?php echo get_theme_mod('home_page_section_3_opinions_3_name', $home_page_section_3_opinions_3_name);?></h2>
                        <p><?php echo get_theme_mod('home_page_section_3_opinions_3_paragraph', $home_page_section_3_opinions_3_paragraph);?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="can-border"></div>
    </main>

<?php
get_footer();
?>
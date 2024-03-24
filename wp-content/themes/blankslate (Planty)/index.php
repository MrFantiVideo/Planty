<?php
    get_header();
?>

<?php
    $theme_url = get_stylesheet_directory_uri();
    $home_page_banner_title = "BOISSON ÉNERGISANTE 100% naturelle";
    $home_page_banner_image = $theme_url . "/assets/images/can.png";
    $home_page_section_1_title = "L’énergie des plantes";
    $home_page_section_1_paragraph = "Planty, c’est la première boisson énergisante composée à 100 % de produits naturels. Avec son goût frais et fruité, retrouvez votre énergie grâce aux plantes riches en vitamine B2, à n’importe quel moment de la journée.";
    $home_page_section_2_title = "Les goûts";
    $home_page_section_2_paragraph = "Nous avons une saveur pour chaque moment de votre journée.";
    $home_page_section_3_title = "Ce qu'ils en pensent";
    $home_page_footer_image = $theme_url . "/assets/images/can_border.png";
?>

<main>
    <div class="banner">
        <div class="banner-contents">
            <h1><?php echo get_theme_mod('home_page_banner_title', $home_page_banner_title);?></h1>
            <div class="banner-content">
                <img src="<?php echo $theme_url;?>/assets/images/leaf_left.png" alt="Feuillage">
                <img src="<?php echo $theme_url;?>/assets/images/leaf_right.png" alt="Feuillage">
            </div>
            <img class="can" src="<?php echo get_theme_mod('home_page_banner_image', $home_page_banner_image);?>" alt="<?php echo get_theme_mod('home_page_banner_image', $home_page_banner_image);?>">
        </div>
    </div>
    <div class="container-border banner-border"></div>
    <div class="description">
        <h2><?php echo get_theme_mod('home_page_section_1_title', $home_page_section_1_title);?></h2>
        <p><?php echo get_theme_mod('home_page_section_1_paragraph', $home_page_section_1_paragraph);?></p>
    </div>
    <div class="tastes">
        <h2><?php echo get_theme_mod('home_page_section_2_title', 'Nos Goûts'); ?></h2>
        <p><?php echo get_theme_mod('home_page_section_2_paragraph', 'Découvrez nos différents goûts'); ?></p>
        <div class="tastes-cards">
            <?php
                $args = array(
                    'post_type'      => 'tastes',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <div class="tastes-card">
                            <h1><?php echo $title; ?></h1>
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <?php
                    }
                } else {
                    echo 'Pas de goûts disponibles.';
                }

                wp_reset_postdata();
            ?>
        </div>
        <button onclick="location.href='/commander'">Commander</button>
    </div>
    <div class="container-border"></div>
    <div class="opinions">
        <h2 class="opinions-title"><?php echo get_theme_mod('home_page_section_3_title', 'Ce que les gens disent');?></h2>
        <div class="opinions-cards">
            <?php
                $args = array(
                    'post_type'      => 'reviews',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $name = get_the_title();
                        $paragraph = get_the_content();
                        ?>
                        <div class="opinions-card">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            <div class="opinions-infos">
                                <h2><?php echo esc_html($name); ?></h2>
                                <p><?php echo esc_html($paragraph); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo 'Pas d\'avis disponibles.';
                }

                wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="can-border" style="background-image: url(<?php echo get_theme_mod('home_page_footer_image', $home_page_footer_image);?>);"></div>
</main>

<?php
    get_footer();
?>
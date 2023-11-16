<?php
function theme_customizer_settings($wp_customize) {

    // Page d'accueil (Onglet)
    $wp_customize->add_section('home_page_settings', array(
        'title' => __('Page d\'accueil'),
        'priority' => 100,
    ));

    // Page d'accueil (Titre)
    $wp_customize->add_setting('home_page_banner_title', array(
        'default' => 'BOISSON ÉNERGISANTE 100% naturelle',
    ));

    $wp_customize->add_control('home_page_banner_title', array(
        'label' => __('Bannière'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text'
    ));

    // Page d'accueil (Section 1 - Titre)
    $wp_customize->add_setting('home_page_section_1_title', array(
        'default' => 'L’énergie des plantes',
    ));

    $wp_customize->add_control('home_page_section_1_title', array(
        'label' => __('Section 1'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));

    // Page d'accueil (Section 1 - Paragraphe)
    $wp_customize->add_setting('home_page_section_1_paragraph', array(
        'default' => 'Planty, c’est la première boisson énergisante composée à 100 % de produits naturels. Avec son goût frais et fruité, retrouvez votre énergie grâce aux plantes riches en vitamine B2, à n’importe quel moment de la journée.'
    ));

    $wp_customize->add_control('home_page_section_1_paragraph', array(
        'description' => 'Description',
        'section' => 'home_page_settings',
        'type' => 'textarea',
    ));

    // Page d'accueil (Section 2 - Titre)
    $wp_customize->add_setting('home_page_section_2_title', array(
        'default' => 'Les goûts',
    ));

    $wp_customize->add_control('home_page_section_2_title', array(
        'label' => __('Section 2'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));

    // Page d'accueil (Section 2 - Paragraphe)
    $wp_customize->add_setting('home_page_section_2_paragraph', array(
        'default' => 'Nous avons une saveur pour chaque moment de votre journée.'
    ));

    $wp_customize->add_control('home_page_section_2_paragraph', array(
        'description' => 'Description',
        'section' => 'home_page_settings',
        'type' => 'textarea',
    ));

    // Page d'accueil (Section 2 - Image 1)
    $wp_customize->add_setting('home_page_section_2_taste_1_title', array(
        'default' => 'Fraise',
    ));
    $wp_customize->add_control('home_page_section_2_taste_1_title', array(
        'label' => __('Section 2 (Image 1)'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_2_taste_1_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/taste_strawberry.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_2_taste_1_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 2 - Image 2)
    $wp_customize->add_setting('home_page_section_2_taste_2_title', array(
        'default' => 'Pample Mousse',
    ));
    $wp_customize->add_control('home_page_section_2_taste_2_title', array(
        'label' => __('Section 2 (Image 2)'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_2_taste_2_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/taste_moss_grape.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_2_taste_2_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 2 - Image 3)
    $wp_customize->add_setting('home_page_section_2_taste_3_title', array(
        'default' => 'Framboise',
    ));
    $wp_customize->add_control('home_page_section_2_taste_3_title', array(
        'label' => __('Section 2 (Image 3)'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_2_taste_3_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/taste_raspberry.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_2_taste_3_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 2 - Image 4)
    $wp_customize->add_setting('home_page_section_2_taste_4_title', array(
        'default' => 'Citron',
    ));
    $wp_customize->add_control('home_page_section_2_taste_4_title', array(
        'label' => __('Section 2 (Image 4)'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_2_taste_4_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/taste_lemon.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_2_taste_4_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 3 - Titre)
    $wp_customize->add_setting('home_page_section_3_title', array(
        'default' => 'Ce qu\'ils en pensent',
    ));

    $wp_customize->add_control('home_page_section_3_title', array(
        'label' => __('Section 3'),
        'description' => 'Titre',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));

    // Page d'accueil (Section 3 - Avis 1)
    $wp_customize->add_setting('home_page_section_3_opinions_1_name', array(
        'default' => 'Fatiha',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_1_name', array(
        'label' => __('Section 3 (Avis 1)'),
        'description' => 'Prénom',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_1_paragraph', array(
        'default' => 'La meilleure boisson énergisante disponible sur le marché !',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_1_paragraph', array(
        'description' => 'Description',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_1_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/person_1.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_3_opinions_1_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 3 - Avis 2)
    $wp_customize->add_setting('home_page_section_3_opinions_2_name', array(
        'default' => 'Véro',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_2_name', array(
        'label' => __('Section 3 (Avis 2)'),
        'description' => 'Prénom',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_2_paragraph', array(
        'default' => 'Frais & fruité c’est parfait pour accompagner le goûter.',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_2_paragraph', array(
        'description' => 'Description',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_2_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/person_2.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_3_opinions_2_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Page d'accueil (Section 3 - Avis 3)
    $wp_customize->add_setting('home_page_section_3_opinions_3_name', array(
        'default' => 'Marc',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_3_name', array(
        'label' => __('Section 3 (Avis 3)'),
        'description' => 'Prénom',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_3_paragraph', array(
        'default' => 'Un boost d’énergie sans produits chimiques, un vrai plus dans ma journée.',
    ));
    $wp_customize->add_control('home_page_section_3_opinions_3_paragraph', array(
        'description' => 'Description',
        'section' => 'home_page_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('home_page_section_3_opinions_3_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/person_3.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_section_3_opinions_3_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

    // Nous rencontrer (Onglet)
    $wp_customize->add_section('meet_us_settings', array(
        'title' => __('Nous rencontrer'),
        'priority' => 100,
    ));

    // Nous rencontrer (Titre)
    $wp_customize->add_setting('meet_us_title', array(
        'default' => 'Nous rencontrer',
    ));

    $wp_customize->add_control('meet_us_title', array(
        'label' => __('Bannière'),
        'description' => 'Titre',
        'section' => 'meet_us_settings',
        'type' => 'text'
    ));

    // Nous rencontrer (Description)
    $wp_customize->add_setting('meet_us_description', array(
        'default' => 'Chez Planty nous sommes tous passionnés par le bien-être, et ça se retrouve dans nos boissons ! Notre start-up s’est construite au fur et à mesure de rencontres entre amoureux des plantes.',
    ));

    $wp_customize->add_control('meet_us_description', array(
        'description' => 'Description',
        'section' => 'meet_us_settings',
        'type' => 'text'
    ));

    // Staff 1
    $wp_customize->add_setting('meet_us_section_staff_1_name', array(
        'default' => 'Mégane',
    ));
    $wp_customize->add_control('meet_us_section_staff_1_name', array(
        'label' => __('Section 1 (Staff 1)'),
        'description' => 'Prénom',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_1_paragraph', array(
        'default' => 'CEO',
    ));
    $wp_customize->add_control('meet_us_section_staff_1_paragraph', array(
        'description' => 'Description',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_1_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/staff_1.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'meet_us_section_staff_1_image', array(
        'description' => 'Image',
        'section' => 'meet_us_settings',
    )));

    // Staff 2
    $wp_customize->add_setting('meet_us_section_staff_2_name', array(
        'default' => 'Brooke',
    ));
    $wp_customize->add_control('meet_us_section_staff_2_name', array(
        'label' => __('Section 1 (Staff 2)'),
        'description' => 'Prénom',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_2_paragraph', array(
        'default' => 'Nutritionniste',
    ));
    $wp_customize->add_control('meet_us_section_staff_2_paragraph', array(
        'description' => 'Description',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_2_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/staff_2.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'meet_us_section_staff_2_image', array(
        'description' => 'Image',
        'section' => 'meet_us_settings',
    )));

    // Staff 3
    $wp_customize->add_setting('meet_us_section_staff_3_name', array(
        'default' => 'Sylvie',
    ));
    $wp_customize->add_control('meet_us_section_staff_3_name', array(
        'label' => __('Section 1 (Staff 3)'),
        'description' => 'Prénom',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_3_paragraph', array(
        'default' => 'Mixologue',
    ));
    $wp_customize->add_control('meet_us_section_staff_3_paragraph', array(
        'description' => 'Description',
        'section' => 'meet_us_settings',
        'type' => 'text',
    ));
    $wp_customize->add_setting('meet_us_section_staff_3_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/staff_3.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'meet_us_section_staff_3_image', array(
        'description' => 'Image',
        'section' => 'meet_us_settings',
    )));

    // Email (Contact / Commande) (Onglet)
    $wp_customize->add_section('email_settings', array(
        'title' => __('Email (Contact / Commande)'),
        'priority' => 100,
    ));

    // Email (Contact)
    $wp_customize->add_setting('email_contact', array(
        'default' => 'planty.drinks@gmail.com',
    ));

    $wp_customize->add_control('email_contact', array(
        'label' => __('Email'),
        'description' => 'Contact',
        'section' => 'email_settings',
        'type' => 'text'
    ));

    // Email (Commande)
    $wp_customize->add_setting('email_order', array(
        'default' => 'planty.drinks@gmail.com',
    ));

    $wp_customize->add_control('email_order', array(
        'description' => 'Commande',
        'section' => 'email_settings',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customizer_settings');
?>
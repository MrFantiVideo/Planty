<?php

// Liste Personnalisable
function custom_post_types()
{
    // Labels pour l'Équipe
    $team_labels = array(
        'name'               => __('L\'équipe', 'textdomain'),
        'singular_name'      => __('Membre de l\'équipe', 'textdomain'),
        'add_new'            => __('Ajouter un membre', 'textdomain'),
        'add_new_item'       => __('Ajouter un membre', 'textdomain'),
        'edit_item'          => __('Éditer le membre', 'textdomain'),
        'new_item'           => __('Nouveau membre', 'textdomain'),
        'view_item'          => __('Voir le membre', 'textdomain'),
        'search_items'       => __('Chercher un membre', 'textdomain'),
        'not_found'          => __('Pas de membre trouvé', 'textdomain'),
        'not_found_in_trash' => __('Pas de membre trouvé dans la corbeille', 'textdomain'),
    );

    // Labels pour les Avis
    $reviews_labels = array(
        'name'               => __('Avis', 'textdomain'),
        'singular_name'      => __('Avis', 'textdomain'),
        'add_new'            => __('Ajouter un avis', 'textdomain'),
        'add_new_item'       => __('Ajouter un avis', 'textdomain'),
        'edit_item'          => __('Éditer l\'avis', 'textdomain'),
        'new_item'           => __('Nouvel avis', 'textdomain'),
        'view_item'          => __('Voir l\'avis', 'textdomain'),
        'search_items'       => __('Chercher un avis', 'textdomain'),
        'not_found'          => __('Pas d\'avis trouvé', 'textdomain'),
        'not_found_in_trash' => __('Pas d\'avis trouvé dans la corbeille', 'textdomain'),
    );

    // Labels pour les Goûts
    $tastes_labels = array(
        'name'               => __('Goûts', 'textdomain'),
        'singular_name'      => __('Goût', 'textdomain'),
        'add_new'            => __('Ajouter un goût', 'textdomain'),
        'add_new_item'       => __('Ajouter un goût', 'textdomain'),
        'edit_item'          => __('Éditer le goût', 'textdomain'),
        'new_item'           => __('Nouveau goût', 'textdomain'),
        'view_item'          => __('Voir le goût', 'textdomain'),
        'search_items'       => __('Chercher un goût', 'textdomain'),
        'not_found'          => __('Pas de goût trouvé', 'textdomain'),
        'not_found_in_trash' => __('Pas de goût trouvé dans la corbeille', 'textdomain'),
    );

    // Déclaration de l'Équipe
    register_post_type('team',
        array(
            'labels'      => $team_labels,
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
            'menu_icon'   => 'dashicons-groups'
        )
    );

    // Déclaration des Avis
    register_post_type('reviews',
        array(
            'labels'      => $reviews_labels,
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
            'menu_icon'   => 'dashicons-format-chat'
        )
    );

    // Déclaration des Goûts
    register_post_type('tastes',
        array(
            'labels'      => $tastes_labels,
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'thumbnail'),
            'menu_icon'   => 'dashicons-carrot'
        )
    );
}
add_action('init', 'custom_post_types');

// Header (Bouton Admin)
function nav_add_admin_button($items, $args)
{
    if (current_user_can('manage_options') && $args->theme_location == 'main-menu')
    {
        $position_commander = strpos($items, '<li id="menu-item-order"');
        if ($position_commander !== false)
        {
            $bouton_admin = '<li><a href="' . admin_url() . '">Admin</a></li>';
            $items = substr_replace($items, $bouton_admin, $position_commander, 0);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'nav_add_admin_button', 10, 2);

// Header (Bouton Commander)
function nav_add_class_and_id_order($class, $items, $args)
{
    if ($args->theme_location == 'main-menu' && $items->title == 'Commander')
    {
        $class[] = 'order';
        $items->ID = 'order';
    }
    return $class;
}
add_filter('nav_menu_css_class', 'nav_add_class_and_id_order', 10, 3);

// Header (Logo)
add_theme_support('custom-logo', array('height'=> 18,'width'=> 196));

function logo_planty()
{
    $logo_id = get_theme_mod('custom_logo');
    if ($logo_id)
    {
        $logo_data = wp_get_attachment_image_src($logo_id, 'full');
        the_custom_logo();
    }
    else
    {
        echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/logo.png" alt="Logo de ' . get_bloginfo('name') . '" onclick="javascript:window.location=\'' . home_url() . '\'">';
    }
}

// Footer
function register_footer_menu()
{
    register_nav_menu('footer-menu', 'Bas de page');
}
add_action('after_setup_theme', 'register_footer_menu');

// Menu dans Personnaliser
function theme_customizer_settings($wp_customize)
{
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

    // Page d'accueil (Canette)
    $wp_customize->add_setting('home_page_banner_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/can.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_banner_image', array(
        'description' => 'Image',
        'section' => 'home_page_settings',
    )));

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

    // Page d'accueil (Canette Footer)
    $wp_customize->add_setting('home_page_footer_image', array(
        'default' => get_stylesheet_directory_uri() . '/assets/images/can_border.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_footer_image', array(
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

    // L'équipe (Titre)
    $wp_customize->add_setting('meet_us_team', array(
        'default' => 'L\'équipe',
    ));

    $wp_customize->add_control('meet_us_team', array(
        'label' => __('Équipe'),
        'description' => 'Titre',
        'section' => 'meet_us_settings',
        'type' => 'text'
    ));

    // Nous contacter (Titre)
    $wp_customize->add_setting('meet_us_contact', array(
        'default' => 'Nous contacter',
    ));

    $wp_customize->add_control('meet_us_contact', array(
        'label' => __('Contact'),
        'description' => 'Titre',
        'section' => 'meet_us_settings',
        'type' => 'text'
    ));

    // Commander (Onglet)
    $wp_customize->add_section('order_settings', array(
        'title' => __('Commander'),
        'priority' => 100,
    ));

    // Commander (Titre)
    $wp_customize->add_setting('order_title', array(
        'default' => 'Commander',
    ));

    $wp_customize->add_control('order_title', array(
        'label' => __('Commander'),
        'description' => 'Titre',
        'section' => 'order_settings',
        'type' => 'text'
    ));

    // Commander (Description)
    $wp_customize->add_setting('order_description', array(
        'default' => 'Votre commande',
    ));

    $wp_customize->add_control('order_description', array(
        'description' => 'Description',
        'section' => 'order_settings',
        'type' => 'text'
    ));
    
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
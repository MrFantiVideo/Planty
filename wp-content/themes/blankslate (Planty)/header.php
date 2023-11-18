<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styles.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <?php logo_planty(['container' => true]); ?>
        <ul>
            <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
        </ul>
    </header>
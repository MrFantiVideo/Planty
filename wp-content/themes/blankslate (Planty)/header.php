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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Logo de <?php bloginfo('name'); ?>" onclick="javascript:window.location='<?php echo home_url();?>'">
        <ul>
            <li><a href="/nous-rencontrer">Nous rencontrer</a></li>
            <?php if (current_user_can('manage_options')) : ?>
                <li><a href="<?php echo admin_url(); ?>">Admin</a></li>
            <?php endif; ?>
            <li class="order"><a href="/commander">Commander</a></li>
        </ul>
    </header>
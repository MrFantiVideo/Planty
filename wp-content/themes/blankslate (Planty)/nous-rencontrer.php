<?php
/*
Template Name: Nous rencontrer
*/
?>

<?php
    get_header();
?>

<?php
    $theme_url = get_stylesheet_directory_uri();
    $meet_us_title = "Nous rencontrer";
    $meet_us_description = "Chez Planty nous sommes tous passionnés par le bien-être, et ça se retrouve dans nos boissons ! Notre start-up s’est construite au fur et à mesure de rencontres entre amoureux des plantes.";
    $meet_us_team = "L'équipe";
    $meet_us_contact = "Nous contacter";
    $email_contact = "planty.drinks@gmail.com";
?>

<main>
    <div class="meet-us">
        <img class="leaf-1" src="<?php echo $theme_url . "/assets/images/leaf_2.png";?>">
        <h1><?php echo get_theme_mod('meet_us_title', $meet_us_title);?></h1>
        <p><?php echo get_theme_mod('meet_us_description', $meet_us_description);?></p>
    </div>
    <div class="container-border"></div>
    <div class="staff">
        <h2><?php echo get_theme_mod('meet_us_team', $meet_us_team);?></h2>
        <div class="staff-cards">
            <?php
                $args = array(
                    'post_type'      => 'team',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $name = get_the_title();
                        $description = get_the_content();
                        ?>
                        <div class="staff-card">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>">
                            <h3><?php echo esc_html($name); ?></h3>
                            <p><?php echo esc_html($description); ?></p>
                        </div>
                        <?php
                    }
                } else {
                    echo 'Pas de membres de l\'équipe disponibles.';
                }

                wp_reset_postdata();
            ?>
        </div>
        <img class="leaf-2" src="<?php echo $theme_url . "/assets/images/leaf_left.png";?>">
    </div>
    <div class="contact-us">
        <div class="contact-us-form">
            <h2>Nous contacter</h2>
            <form method="post">
                <p>Nom</p>
                <input type="text" name="name">
                <p>E-mail</p>
                <input type="email" name="email">
                <p>Message</p>
                <textarea class="contact-us-message" name="message"></textarea>
                <img class="leaf-3" src="<?php echo $theme_url . "/assets/images/leaf_1.png";?>">
                <button type="submit" name="submit">Envoyer</button>
            </form>
        </div>
    <div class="can-border"></div>
    </div>
</main>

<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = get_theme_mod('email_contact', $email_contact);
        $subject = 'Nouveau message du formulaire de contact';

        if (!empty($address) && !empty($message)) {
            $headers = 'From: ' . $email;
            $message_content = "Nom: $name\n";
            $message_content .= "E-mail: $email\n";
            $message_content .= "Message:\n$message\n";
            mail($to, $subject, $message_content, $headers);
        }
    }
?>

<?php
    get_footer();
?>
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

    $meet_us_section_staff_1_image = $theme_url . "/assets/images/staff_1.png";
    $meet_us_section_staff_1_name = "Mégane";
    $meet_us_section_staff_1_paragraph = "CEO";
    $meet_us_section_staff_2_image = $theme_url . "/assets/images/staff_2.png";
    $meet_us_section_staff_2_name = "Brooke";
    $meet_us_section_staff_2_paragraph = "Nutritionniste";
    $meet_us_section_staff_3_image = $theme_url . "/assets/images/staff_3.png";
    $meet_us_section_staff_3_name = "Sylvie";
    $meet_us_section_staff_3_paragraph = "Mixologue";

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
            <h2>L'équipe</h2>
            <div class="staff-cards">
                <div class="staff-card">
                    <img src="<?php echo get_theme_mod('meet_us_section_staff_1_image', $meet_us_section_staff_1_image);?>" alt="<?php echo get_theme_mod('meet_us_section_staff_1_name', $meet_us_section_staff_1_name);?>">
                    <h3><?php echo get_theme_mod('meet_us_section_staff_1_name', $meet_us_section_staff_1_name);?></h3>
                    <p><?php echo get_theme_mod('meet_us_section_staff_1_paragraph', $meet_us_section_staff_1_paragraph);?></p>
                </div>
                <div class="staff-card">
                    <img src="<?php echo get_theme_mod('meet_us_section_staff_2_image', $meet_us_section_staff_2_image);?>" alt="<?php echo get_theme_mod('meet_us_section_staff_2_name', $meet_us_section_staff_2_name);?>">
                    <h3><?php echo get_theme_mod('meet_us_section_staff_2_name', $meet_us_section_staff_2_name);?></h3>
                    <p><?php echo get_theme_mod('meet_us_section_staff_2_paragraph', $meet_us_section_staff_2_paragraph);?></p>
                </div>
                <div class="staff-card">
                    <img src="<?php echo get_theme_mod('meet_us_section_staff_3_image', $meet_us_section_staff_3_image);?>" alt="<?php echo get_theme_mod('meet_us_section_staff_3_name', $meet_us_section_staff_3_name);?>">
                    <h3><?php echo get_theme_mod('meet_us_section_staff_3_name', $meet_us_section_staff_3_name);?></h3>
                    <p><?php echo get_theme_mod('meet_us_section_staff_3_paragraph', $meet_us_section_staff_3_paragraph);?></p>
                </div>
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
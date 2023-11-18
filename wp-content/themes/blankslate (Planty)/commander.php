<?php
/*
Template Name: Commander
*/
?>

<?php
    get_header();
?>

<?php
    $theme_url = get_stylesheet_directory_uri();

    $home_page_section_2_taste_1_title = "Fraise";
    $home_page_section_2_taste_1_image = $theme_url . "/assets/images/taste_strawberry.png";
    $home_page_section_2_taste_2_title = "Pample mousse";
    $home_page_section_2_taste_2_image = $theme_url . "/assets/images/taste_moss_grape.png";
    $home_page_section_2_taste_3_title = "Framboise";
    $home_page_section_2_taste_3_image = $theme_url . "/assets/images/taste_raspberry.png";
    $home_page_section_2_taste_4_title = "Citron";
    $home_page_section_2_taste_4_image = $theme_url . "/assets/images/taste_lemon.png";

    $email_order = "planty.drinks@gmail.com";
?>

    <main>
        <div class="order">
            <h1>Commander</h1>
            <div class="order-selection">
                <h2>Votre commande</h2>
                <div class="order-cards">
                    <div class="order-card">
                        <p><?php echo get_theme_mod('home_page_section_2_taste_1_title', $home_page_section_2_taste_1_title);?></p>
                        <img src="<?php echo get_theme_mod('home_page_section_2_taste_1_image', $home_page_section_2_taste_1_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_1_title', $home_page_section_2_taste_1_title);?>">
                        <input type="number" value="0" min="0" name="tastes_1">
                    </div>
                    <div class="order-card">
                        <p><?php echo get_theme_mod('home_page_section_2_taste_2_title', $home_page_section_2_taste_2_title);?></p>
                        <img src="<?php echo get_theme_mod('home_page_section_2_taste_2_image', $home_page_section_2_taste_2_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_2_title', $home_page_section_2_taste_2_title);?>">
                        <input type="number" value="0" min="0" name="tastes_2">
                    </div>
                    <div class="order-card">
                        <p><?php echo get_theme_mod('home_page_section_2_taste_3_title', $home_page_section_2_taste_3_title);?></p>
                        <img src="<?php echo get_theme_mod('home_page_section_2_taste_3_image', $home_page_section_2_taste_3_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_3_title', $home_page_section_2_taste_3_title);?>">
                        <input type="number" value="0" min="0" name="tastes_3">
                    </div>
                    <div class="order-card">
                        <p><?php echo get_theme_mod('home_page_section_2_taste_4_title', $home_page_section_2_taste_4_title);?></p>
                        <img src="<?php echo get_theme_mod('home_page_section_2_taste_4_image', $home_page_section_2_taste_4_image);?>" alt="<?php echo get_theme_mod('home_page_section_2_taste_4_title', $home_page_section_2_taste_4_title);?>">
                        <input type="number" value="0" min="0" name="tastes_4">
                    </div>
                </div>
            </div>
            <div class="order-infos">
                <div class="order-info">
                    <h2>Vos informations</h2>
                    <p>Nom</p>
                    <input type="text" name="name">
                    <p>Prénom</p>
                    <input type="text" name="firstname">
                    <p>E-mail</p>
                    <input type="email" name="email">
                </div>
                <div class="order-border"></div>
                <div class="order-delivery-infos">
                    <h2>Livraison</h2>
                    <p>Adresse de livraison</p>
                    <input type="text" name="address">
                    <p>Code postal</p>
                    <input type="text" name="postal">
                    <p>Ville</p>
                    <input type="text" name="city">
                </div>
            </div>
            <div class="order-button">
                <button type="submit" name="submit">Commander</button>
            </div>
        </div>
    </main>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $postal = $_POST['postal'];
    $city = $_POST['city'];
    $tastes_1 = $_POST['tastes_1'];
    $tastes_2 = $_POST['tastes_2'];
    $tastes_3 = $_POST['tastes_3'];
    $tastes_4 = $_POST['tastes_4'];
    $to = get_theme_mod('email_order', $email_order);
    $subject = 'Nouvelle commande';

    if (!empty($address) && !empty($tastes_1) && !empty($tastes_2) && !empty($tastes_3) && !empty($tastes_4)) {
        $headers = 'From: ' . $email;
        $message_content = "Nom: $name\n";
        $message_content .= "Prénom: $firstname\n";
        $message_content .= "E-mail: $email\n";
        $message_content .= "Adresse:\n$address\n";
        $message_content .= "Code postal:\n$postal\n";
        $message_content .= "Ville:\n$city\n";
        $message_content .= "Article 1:\n$tastes_1\n";
        $message_content .= "Article 2:\n$tastes_2\n";
        $message_content .= "Article 3:\n$tastes_3\n";
        $message_content .= "Article 4:\n$tastes_4\n";
        mail($to, $subject, $message_content, $headers);
    }
}
?>

<?php
    get_footer();
?>
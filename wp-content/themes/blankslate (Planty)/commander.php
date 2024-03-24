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
    $order_title = "Commander";
    $order_description = "Votre commande";
    $email_order = "fantivideo654@gmail.com";
?>

<main>
    <div class="order">
        <h1><?php echo get_theme_mod('order_title', $order_title);?></h1>
        <form method="post">
            <div class="order-selection">
                <h2><?php echo get_theme_mod('order_description', $order_description);?></h2>
                <div class="order-cards">
                    <?php
                        $args = array(
                            'post_type'      => 'tastes',
                            'posts_per_page' => -1,
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            $count = 0;
                            while ($query->have_posts()) {
                                $query->the_post();
                                $count++;
                                $title = get_the_title();
                                $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                ?>
                                <div class="order-card">
                                    <p><?php echo $title; ?></p>
                                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                                    <input type="number" value="0" min="0" name="tastes[<?php echo get_the_ID(); ?>]">
                                </div>
                                <?php
                            }
                        } else {
                            echo 'Pas de goûts disponibles.';
                        }

                        wp_reset_postdata();
                    ?>
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
        </form>
    </div>
</main>

<?php
    if (isset($_POST['submit']))
    {
        // Collecte des informations du formulaire
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $postal = $_POST['postal'];
        $city = $_POST['city'];
        $tastes = $_POST['tastes'];
        $to = get_theme_mod('email_order', $email_order);
        $subject = 'Nouvelle commande';

        // Construction du message
        $headers = 'From: ' . $email;
        $message_content = "Nom: $name\n";
        $message_content .= "Prénom: $firstname\n";
        $message_content .= "E-mail: $email\n";
        $message_content .= "Adresse:\n$address\n";
        $message_content .= "Code postal:\n$postal\n";
        $message_content .= "Ville:\n$city\n";

        // Ajout des goûts à la commande
        foreach ($tastes as $taste_id => $quantity)
        {
            if (!empty($quantity))
            {
                $taste_id = intval($taste_id);
                $taste_post = get_post($taste_id);
                if ($taste_post)
                {
                    $taste_title = $taste_post->post_title;
                    $message_content .= "Goût: $taste_title - Quantité: $quantity\n";
                }
            }
        }

        // Envoi de l'email
        if (!empty($address) && count(array_filter($tastes)) > 0)
        {
            mail($to, $subject, $message_content, $headers);
        }
    }
?>

<?php
    get_footer();
?>
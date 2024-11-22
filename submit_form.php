<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Valider les champs
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Configurer l'email
            $to = "francisdylan390@gmail.com"; // Remplacez par votre adresse email
            $subject = "Nouveau message depuis le formulaire de contact";
            $body = "Nom : $name\nEmail : $email\nMessage :\n$message";
            $headers = "From: $email";

            // Envoyer l'email
            if (mail($to, $subject, $body, $headers)) {
                echo "Merci pour votre message ! Je vous répondrai bientôt.";
            } else {
                echo "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
            }
        } else {
            echo "L'adresse email est invalide.";
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>


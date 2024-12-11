<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Valider les champs
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Valider l'email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Vérifier l'injection potentielle
            if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {
                // Configurer l'email
                $to = "francisdylan390@gmail.com"; // Remplacez par votre adresse email
                $subject = "Nouveau message depuis le formulaire de contact";
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
                $headers .= "From: noreply@votresite.com\r\n";
                $headers .= "Reply-To: $email\r\n";

                $body = "Nom : $name\nEmail : $email\nMessage :\n$message";

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
            echo "L'adresse email est invalide.";
        }
    } else {
        echo "Tous les champs sont obligatoires.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
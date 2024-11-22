<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Personnel</title>
    <link rel="stylesheet" href="perso.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur mon site personnel</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#cv">CV</a></li>
            <li><a href="#lettre">Lettre de motivation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        <!-- Section CV -->
        <section id="cv">
            <h2>Mon CV</h2>
            <a href="cv.pdf" target="_blank" class="cv-button">Télécharger mon CV</a>
        </section>

        <!-- Section Lettre de motivation -->
        <section id="lettre">
            <h2>Lettre de motivation</h2>
            <a href="lettre de motivation.pdf" target="_blank" class="lettre-button">Télécharger ma lettre de motivation</a>
        </section>

        <!-- Section Formulaire de contact -->
        <section id="contact">
            <h2>Formulaire de Contact</h2>
            <form action="submit_form.php" method="post">
                <label for="name">Nom :</label><br>
                <input type="text" id="name" name="name"><br><br>

                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email"><br><br>

                <label for="message">Message :</label><br>
                <textarea id="message" name="message"></textarea><br><br>
                
                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

    <!-- Affichage des informations dynamiques -->
    <footer>
        <?php
   $ip = $_SERVER["HTTP_X_REAL_IP"]; // Récupère l'adresse IP
   echo "<p>$ip</p>; // Affiche l'adresse IP
?>

        <!-- Afficher la date et l'heure actuelles -->
        <script>
            const date = new Date();
            document.write(`<p>Date et heure actuelles : ${date.toLocaleString()}</p>`);
        </script>

        © 2024 - Mon Site Personnel
    </footer>
</body>
</html>



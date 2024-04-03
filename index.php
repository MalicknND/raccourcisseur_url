<!-- IS SENDING A FORM -->
<?php

if (isset($_POST['url'])) {
    // variable
    $url = $_POST['url'];
    // vérification de l'url pour éviter les failles
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        // PAS UN LIEN
        header('location: ../raccourcisseur/?error=true&message=Adresse url non valide');
        exit();
    }

    // shortcut
    $shortcut = crypt($url, time());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="./images/favico.png" type="image/x-icon">
    <title>Raccourcisseur d'url</title>
</head>

<body>
    <section id="hello">

        <!-- CONTAINER -->
        <div class="container">

            <!-- HEADER -->
            <header>
                <img src="images/logo.png" alt="logo" id="logo">
            </header>

            <!-- VP -->
            <h1>Une url longue ? Raccourcissez-là ?</h1>
            <h2>Largement meilleur et plus court que les autres.</h2>

            <!-- FORM -->
            <form method="post" action="../raccourcisseur/">
                <input type="url" name="url" placeholder="Collez un lien à raccourcir">
                <input type="submit" value="Raccourcir">
            </form>

            <?php if (isset($_GET['error']) && isset($_GET['message'])) { ?>
                <div class="center">
                    <div id="result">
                        <b><?php echo htmlspecialchars($_GET['message']); ?></b>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <section id="brands">
        <div class="container">
            <h3>Ces marques nous font confiance</h3>
            <img src="./images/1.png" alt="image" class="picture">
            <img src="./images/2.png" alt="image" class="picture">
            <img src="./images/3.png" alt="image" class="picture">
            <img src="./images/4.png" alt="image" class="picture">
        </div>
    </section>
    <footer>
        <div class="container">
            <img src="./images/logo2.png" alt="logo" id="logo">
            <p>Copyright &copy; 2021 <NAME>
            </p>
            <a href="#">Contact</a> - <a href="#">A propos</a>
        </div>
    </footer>
</body>

</html>
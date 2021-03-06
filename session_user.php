<?php
//sessions
session_start(); //démarrage de la session

?>

<?php
include_once "./pages/header_inc.php";
?>

<body>
    <header>
        <a href="./Accueil_membre.php"><img src="./assets/1490877823-sport-badges06_82415.png" alt="streaming" /></a>
        <h1>Maison des ligues - tous les sports</h1>
        <ul>
            <li aria-hidden="true">
                <span class="material-icons"> visibility </span>
            </li>
            <li aria-hidden="true">
                <span class="material-icons"> light_mode </span>
            </li>
        </ul>
    </header>
    <main>
        <section>
            <h2 class=".confirm">
                Bonjour <?= $_SESSION['nom'] . " " . $_SESSION['prenom'] ?>
            </h2>
        </section>
        <section class="userInfo">
            <h2>Information</h2>
            <?php include_once "./page/user_inc.php" ?>

            <?php
            if (!empty($_POST)) {
                include_once "./page/SupprimerProfil.php";

                if ($request) {
                    print "<p class=\"success\"> Votre compte a été supprimée</p>";
                    session_destroy();
                    sleep(2);
                    header("Location: ./");
                }
            }
            ?>
            <?php include_once "./pages/ListEvent.inc.php" ?>
            <div class="btnUser">
                <a href="./ModifUser.php">Changer le profil</a>
                <form method="POST" action="">
                    <input type="submit" id="delete " name="delete " class="button" value="Supprimer ce profil">
                </form>
            </div>
            <a href="./">Deconnexion</a>
        </section>


    </main>

    <?php include_once "./pages/footer_user.inc.php" ?>
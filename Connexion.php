<?php
//sessions
session_start(); //démarrage de la session

?>
<?php
include_once("./pages/header.inc.php");
?>

<body>
    <header>
        <a href="./index.php"><img src="./assets/ligue64.png" alt="ligue" /></a>
        <h1>Maison des ligues - tous les sports</h1>
        <a href="./Connexion.php" class="connexion">
            Déconnexion <span class="material-icons"> login </span>
        </a>
    </header>

    <main>
        <!-- formulaire -->
        <section>
            <h2 class="title">
                Connexion à votre espace personnel
            </h2>
            <?php
            include_once "./pages/connect_BDD.php";
            include_once "./pages/loginCompte.php";
            ?>
            <fieldset class="connexion_compte">
                <legend>
                    <h3>Veuillez vous connecter</h3>
                </legend>
                <form action=" <?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <label for="login" class="votre_login">
                        Votre login
                    </label>
                    <input type="email" name="login" id="login" placeholder="Votre login" aria-required="true" required>
                    <label for="password">
                        Votre Password
                    </label>
                    <input type="password" name="password" id="password" placeholder="Votre password" aria-required="true" required>
                    <input type="submit" value="Connexion" class="btn">
                </form>
                <ul>
                    <li><a href=" ./formulaire.php">Si vous n'avez pas de compte <span>s'inscrire</span></a></li>
                    <li><a href="./mdpOublié.php">Mot de passe oublié ?</a></li>
                </ul>


            </fieldset>
        </section>

    </main>
    <?php
    include_once("./pages/footer.inc.php");
    ?>
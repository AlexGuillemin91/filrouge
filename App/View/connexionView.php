<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/main.css" />
    <link rel="stylesheet" href="../public/css/register.css" />
    <title>Connexion</title>
</head>

<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div class="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main>
            <section>
                <form action="" method="POST">
                    <h4>Connexion</h4>
                    <div class="infoconnexion">
                        <label for="name">Adresse Mail</label>
                        <input class="reponseconnexion" type="text" name="email" placeholder="Adresse Mail">
                    </div>
                    <div class="infoconnexion">
                        <label for="name">Mot de passe</label>
                        <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="connexion-button">
                        <!-- <input type="button" name="actionConnexion" class="boutonconnexion" value="Connexion"> -->
                        <button name="actionConnexion">Se connecter</button>
                    </div>
                    <a href="?page=register" class="pasinscrit">
                        <p>Pas encore inscrit?</p>
                    </a>
                </form>
            </section>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>
</body>

</html>
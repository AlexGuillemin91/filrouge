<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/register.css" />
    <link rel="stylesheet" href="../public/css/main.css" />
    <title>Inscription</title>
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
                    <h4>Inscription</h4>
                    <div class="infoconnexion">
                        <label for="username">Pseudo</label>
                        <input class="reponseconnexion" type="text" name="username" placeholder="Pseudo" required>
                    </div>
                    <div class="infoconnexion">
                        <label for="email">Adresse Mail</label>
                        <input class="reponseconnexion" type="email" name="email" placeholder="Adresse Mail" required>
                    </div>
                    <div class="infoconnexion">
                        <label for="password">Mot de passe</label>
                        <input class="reponseconnexion" type="password" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="connexion-button">
                        <button name="actionSaveUser">S'inscrire</button>
                    </div>
                </form>
            </section>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>
</body>

</html>
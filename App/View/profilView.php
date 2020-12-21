<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="../public/css/main.css" />
    <link rel="stylesheet" href="../public/css/profil.css" />

</head>

<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div class="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main class="content">
            <section>
                <form id="formulaire">
                    <h4>Profil</h4>
                    <div class="field">
                        <label for="userName">Pseudo: </label>
                        <input type="text" id="userName" name="userName">
                    </div>
                    <div class="field">
                        <label for="firstName">Prénom: </label>
                        <input type="text" id="firstName" name="firstName">
                    </div>
                    <div class="field">
                        <label for="lastName">Nom: </label>
                        <input type="text" id="lastName" name="lastName">
                    </div>
                    <div class="field">
                        <label for="birthDate">Date de naissance: </label>
                        <input type="date" id="birthDate" name="birthDate">
                    </div>
                    <div class="field">
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="field">
                        <label for="password">Changer mon mot de passe: </label>
                        <input type="password" id="password" name="password" placeholder="Nouveau mot de passe">
                    </div>
                    <div class=profil-button>
                        <button type="submit">Enregistrer</button>
                    </div>
                </form>
            </section>
        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/profilView.js"></script>

</body>


</html>
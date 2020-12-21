<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/accueil.css">
    <link rel="stylesheet" href="../public/css/main.css" />

    <title>Document</title>
</head>
    <!-- <article class="centre">
        <button id="button-logout">Me déconnecter</button>
        <h2 class="titre">Sondages en cours des amis</h2>
        <section class="sondages">
            <ul id="friends-surveys"></ul>
        </section>

        <h2 class="titre">Sondages de l'utilisateur</h2>
        <section class="sondages">
            <ul id="my-surveys"></ul>
        </section>
    </article> -->
<body>
    <?php
    include "../public/inc/nav.php";
    ?>
    <div class="page">
        <?php
        include "../public/inc/header.php"
        ?>
        <main>
            <div class="presentation">
                <h1>Créez et répondez à différents sondages</h1>
                <br>
                <p>Parcourez et répondez correctement aux sondages pour gagner des points</p>
            </div>
            <div class="content" id="my-surveys">
                <div class="sondage">
                    <a href="sondage.php">
                        <h3>Quel sera le score de ce match?</h3>
                    </a>
                    <div class="categorie">
                        <img src="img/volleyball-ball-solid.svg">
                    </div>
                    <div class="info">
                        <p>1 question</p>
                        <p>7624 réponses</p>
                        <p>crée par Dylan</p>
                    </div>
                    <div class="pouce">
                        <a href="#"><img src="img/thumbs-down-regular.svg"></a>
                        <a href="#"><img src="img/thumbs-up-regular.svg"></a>
                    </div>
                </div>
                <div class="sondage">
                    <a href="sondage.php">
                        <h3>Combien de kfc vais-je manger?</h3>
                    </a>
                    <div class="categorie">
                        <img src="img/drumstick-bite-solid.svg">
                    </div>
                    <div class="info">
                        <p>1 question</p>
                        <p>152 659 réponses</p>
                        <p>crée par Alex</p>
                    </div>
                    <div class="pouce">
                        <a href="#"><img src="img/thumbs-down-regular.svg"></a>
                        <a href="#"><img src="img/thumbs-up-regular.svg"></a>
                    </div>
                </div>
                <div class="sondage">
                    <a href="sondage.php">
                        <h3>Vos musiques?</h3>
                    </a>
                    <div class="categorie">
                        <img src="img/music-solid.svg">
                    </div>
                    <div class="info">
                        <p>7 questions</p>
                        <p>452 réponses</p>
                        <p>crée par Laura la best :p</p>
                    </div>
                    <div class="pouce">
                        <a href="#"><img src="img/thumbs-down-regular.svg"></a>
                        <a href="#"><img src="img/thumbs-up-regular.svg"></a>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>

        </main>
        <?php
        include "../public/inc/footer.php"
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/ajax/accueilView.js"></script>
</body>

</html>
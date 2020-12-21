<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/sondage.css" />
    <script src="popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <div id="page">
        <?php
        include "header.php"
        ?>
        <main>
            <div class="sondage">
                <a href="#">
                    <h3>Quels sont tes sports?</h3>
                </a>
                <div class="categorie">
                    <img src="img/volleyball-ball-solid.svg">
                </div>
                <div class="info">
                    <label for="name">Quel est ton prénom?</label>
                    <input class="reponse" type="text" name="Question_1" size="25" placeholder="Votre réponse">
                </div>
                <div class="info">
                    <p>Quel est ton sport préféré?</p>
                    <div class="reponse">
                        <div class="radio">
                            <input type="radio" id="volley" name="sport" value="volley">
                            <label for="volley">Volley</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="basket" name="sport" value="basket">
                            <label for="basket">Basket</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="baseball" name="sport" value="baseball">
                            <label for="baseball">Baseball</label>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <p>Quels sports pratiques-tu?</p>
                    <div class="reponse">
                        <div class="checkbox">
                            <input type="checkbox" id="volley" name="sport" value="volley">
                            <label for="volley">Volley</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="basket" name="sport" value="basket">
                            <label for="basket">Basket</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="baseball" name="sport" value="baseball">
                            <label for="baseball">Baseball</label>
                        </div>
                    </div>
                </div>
                <input class="button" type="button" value="Envoyer mes réponses">
            </div>
        </main>
        <?php
        include "footer.php"
        ?>
    </div>
</body>

</html>